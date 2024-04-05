<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Rework extends CI_Model
{

	/// @see get_tables()
	/// @note
	/// @attention
	function get_tables($tables, $cari, $iswhere)
	{
		// Ambil data yang di ketik user pada textbox pencarian
		$search = htmlspecialchars($_POST['search']['value']);
		// Ambil data limit per page
		$limit = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['length']}");
		// Ambil data start
		$start = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['start']}");

		$query = $tables;

		if (!empty($iswhere)) {
			$sql = $this->db->query("SELECT * FROM " . $query . " WHERE " . $iswhere);
		} else {
			$sql = $this->db->query("SELECT * FROM " . $query);
		}

		$sql_count = $sql->num_rows();

		$cari = implode(" LIKE '%" . $search . "%' OR ", $cari) . " LIKE '%" . $search . "%'";

		// Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_field = $_POST['order'][0]['column'];

		// Untuk menentukan order by "ASC" atau "DESC"
		$order_ascdesc = $_POST['order'][0]['dir'];
		$order = " ORDER BY " . $_POST['columns'][$order_field]['data'] . " " . $order_ascdesc;

		if (!empty($iswhere)) {
			$sql_data = $this->db->query("SELECT * FROM " . $query . " WHERE $iswhere AND (" . $cari . ")" . $order . " OFFSET " . $start . " ROWS FETCH NEXT " . $limit . " ROWS only ");
		} else {
			$sql_data = $this->db->query("SELECT * FROM " . $query . " WHERE (" . $cari . ")" . $order . " OFFSET " . $start . " ROWS FETCH NEXT " . $limit . " ROWS only ");
		}

		if (isset($search)) {
			if (!empty($iswhere)) {
				$sql_cari =  $this->db->query("SELECT * FROM " . $query . " WHERE $iswhere (" . $cari . ")");
			} else {
				$sql_cari =  $this->db->query("SELECT * FROM " . $query . " WHERE (" . $cari . ")");
			}
			$sql_filter_count = $sql_cari->num_rows();
		} else {
			if (!empty($iswhere)) {
				$sql_filter = $this->db->query("SELECT * FROM " . $query . "WHERE " . $iswhere);
			} else {
				$sql_filter = $this->db->query("SELECT * FROM " . $query);
			}
			$sql_filter_count = $sql_filter->num_rows();
		}
		$data = $sql_data->result_array();

		$callback = array(
			'draw' => $_POST['draw'], // Ini dari datatablenya    
			'recordsTotal' => $sql_count,
			'recordsFiltered' => $sql_filter_count,
			'data' => $data
		);
		return json_encode($callback); // Convert array $callback ke json
	}


	/// @see get_tables_where()
	/// @note
	/// @attention
	function get_tables_where($tables, $cari, $where, $iswhere)
	{
		// Ambil data yang di ketik user pada textbox pencarian
		$search = htmlspecialchars($_POST['search']['value']);
		// Ambil data limit per page
		$limit = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['length']}");
		// Ambil data start
		$start = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['start']}");

		$setWhere = array();
		foreach ($where as $key => $value) {
			$setWhere[] = $key . "='" . $value . "'";
		}

		$fwhere = implode(' AND ', $setWhere);

		if (!empty($iswhere)) {
			$sql = $this->db->query("SELECT * FROM " . $tables . " WHERE $iswhere AND " . $fwhere);
		} else {
			$sql = $this->db->query("SELECT * FROM " . $tables . " WHERE " . $fwhere);
		}
		$sql_count = $sql->num_rows();

		$query = $tables;
		$cari = implode(" LIKE '%" . $search . "%' OR ", $cari) . " LIKE '%" . $search . "%'";

		// Untuk mengambil nama field yg menjadi acuan untuk sorting
		$order_field = $_POST['order'][0]['column'];

		// Untuk menentukan order by "ASC" atau "DESC"
		$order_ascdesc = $_POST['order'][0]['dir'];
		$order = " ORDER BY " . $_POST['columns'][$order_field]['data'] . " " . $order_ascdesc;

		if (!empty($iswhere)) {
			$sql_data = $this->db->query("SELECT * FROM " . $query . " WHERE $iswhere AND " . $fwhere . " AND (" . $cari . ")" . $order . " OFFSET " . $start . " ROWS FETCH NEXT " . $limit . " ROWS only ");
		} else {
			$sql_data = $this->db->query("SELECT * FROM " . $query . " WHERE " . $fwhere . " AND (" . $cari . ")" . $order . " OFFSET " . $start . " ROWS FETCH NEXT " . $limit . " ROWS only ");
		}

		if (isset($search)) {
			if (!empty($iswhere)) {
				$sql_cari =  $this->db->query("SELECT * FROM " . $query . " WHERE $iswhere AND " . $fwhere . " AND (" . $cari . ")");
			} else {
				$sql_cari =  $this->db->query("SELECT * FROM " . $query . " WHERE " . $fwhere . " AND (" . $cari . ")");
			}
			$sql_filter_count = $sql_cari->num_rows();
		} else {
			if (!empty($iswhere)) {
				$sql_filter = $this->db->query("SELECT * FROM " . $tables . " WHERE $iswhere AND " . $fwhere);
			} else {
				$sql_filter = $this->db->query("SELECT * FROM " . $tables . " WHERE " . $fwhere);
			}
			$sql_filter_count = $sql_filter->num_rows();
		}

		$data = $sql_data->result_array();

		$callback = array(
			'draw' => $_POST['draw'], // Ini dari datatablenya    
			'recordsTotal' => $sql_count,
			'recordsFiltered' => $sql_filter_count,
			'data' => $data
		);
		return json_encode($callback); // Convert array $callback ke json
	}

	/// @see get_tables_query()
	/// @note
	/// @attention
	function get_tables_query($query, $cari, $where, $iswhere)
	{
		// Ambil data yang di ketik user pada textbox pencarian
		$search = htmlspecialchars($_POST['search']['value']);
		// Ambil data limit per page
		$limit = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['length']}");
		// Ambil data start
		$start = preg_replace("/[^a-zA-Z0-9.]/", '', "{$_POST['start']}");

		if ($where != null) {
			$setWhere = array();
			foreach ($where as $key => $value) {
				$setWhere[] = $key . "='" . $value . "'";
			}
			$fwhere = implode(' AND ', $setWhere);

			if (!empty($iswhere)) {
				$sql = $this->db->query($query . " WHERE  $iswhere AND " . $fwhere);
			} else {
				$sql = $this->db->query($query . " WHERE " . $fwhere);
			}
			$sql_count = $sql->num_rows();

			$cari = implode(" LIKE '%" . $search . "%' OR ", $cari) . " LIKE '%" . $search . "%'";

			// Untuk mengambil nama field yg menjadi acuan untuk sorting
			$order_field = $_POST['order'][0]['column'];

			// Untuk menentukan order by "ASC" atau "DESC"
			$order_ascdesc = $_POST['order'][0]['dir'];
			$order = " ORDER BY " . $_POST['columns'][$order_field]['data'] . " " . $order_ascdesc;

			if (!empty($iswhere)) {
				$sql_data = $this->db->query($query . " WHERE $iswhere AND " . $fwhere . " AND (" . $cari . ")" . $order . " LIMIT " . $limit . " OFFSET " . $start);
			} else {
				$sql_data = $this->db->query($query . " WHERE " . $fwhere . " AND (" . $cari . ")" . $order . " LIMIT " . $limit . " OFFSET " . $start);
			}

			if (isset($search)) {
				if (!empty($iswhere)) {
					$sql_cari =  $this->db->query($query . " WHERE $iswhere AND " . $fwhere . " AND (" . $cari . ")");
				} else {
					$sql_cari =  $this->db->query($query . " WHERE " . $fwhere . " AND (" . $cari . ")");
				}
				$sql_filter_count = $sql_cari->num_rows();
			} else {
				if (!empty($iswhere)) {
					$sql_filter = $this->db->query($query . " WHERE $iswhere AND " . $fwhere);
				} else {
					$sql_filter = $this->db->query($query . " WHERE " . $fwhere);
				}
				$sql_filter_count = $sql_filter->num_rows();
			}
			$data = $sql_data->result_array();
		} else {

			if (!empty($iswhere)) {
				$sql = $this->db->query($query . " WHERE  $iswhere ");
			} else {
				$sql = $this->db->query($query);
			}

			$sql_count = $sql->num_rows();

			$cari = implode(" LIKE '%" . $search . "%' OR ", $cari) . " LIKE '%" . $search . "%'";

			// Untuk mengambil nama field yg menjadi acuan untuk sorting
			$order_field = $_POST['order'][0]['column'];

			// Untuk menentukan order by "ASC" atau "DESC"
			$order_ascdesc = $_POST['order'][0]['dir'];
			$order = " ORDER BY " . $_POST['columns'][$order_field]['data'] . " " . $order_ascdesc;

			if (!empty($iswhere)) {
				$sql_data = $this->db->query($query . " WHERE $iswhere AND (" . $cari . ")" . $order . " LIMIT " . $limit . " OFFSET " . $start);
			} else {
				$sql_data = $this->db->query($query . " WHERE (" . $cari . ")" . $order . " LIMIT " . $limit . " OFFSET " . $start);
			}

			if (isset($search)) {
				if (!empty($iswhere)) {
					$sql_cari =  $this->db->query($query . " WHERE $iswhere AND (" . $cari . ")");
				} else {
					$sql_cari =  $this->db->query($query . " WHERE (" . $cari . ")");
				}
				$sql_filter_count = $sql_cari->num_rows();
			} else {
				if (!empty($iswhere)) {
					$sql_filter = $this->db->query($query . " WHERE $iswhere");
				} else {
					$sql_filter = $this->db->query($query);
				}
				$sql_filter_count = $sql_filter->num_rows();
			}
			$data = $sql_data->result_array();
		}

		$callback = array(
			'draw' => $_POST['draw'], // Ini dari datatablenya    
			'recordsTotal' => $sql_count,
			'recordsFiltered' => $sql_filter_count,
			'data' => $data
		);
		return json_encode($callback); // Convert array $callback ke json
	}


	/// @see Max_data()
	/// @note
	/// @attention
	public function Max_data($mdate, $table)
	{
		$this->db->select_max('hdrid');
		$this->db->like('hdrid', $mdate);
		$query = $this->db->get($table);
		return $query;
	}

	public function Max_data_sortir($mdate, $table)
	{
		$this->db->select_max('id_sortir');
		$this->db->like('id_sortir', $mdate);
		$query = $this->db->get($table);
		return $query;
	}

	public function Max_data_perubahan($mdate, $table)
	{
		$this->db->select_max('id');
		$this->db->like('id', $mdate);
		$query = $this->db->get($table);
		return $query;
	}
	public function Max_data_result($mdate, $table)
	{
		$this->db->select_max('id_result');
		$this->db->like('id_result', $mdate);
		$query = $this->db->get($table);
		return  $query;
	}

	public function Max_data_approve($mdate, $table)
	{
		$this->db->select_max('id_approval');
		$this->db->like('id_approval', $mdate);
		$query = $this->db->get($table);
		return $query;
	}

	/// @see Input_Data()
	/// @note
	/// @attention
	function Input_Data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	/// @see insert_batch()
	/// @note
	/// @attention
	public function insert_batch($table, $data)
	{
		$this->db->insert_batch($table, $data);
		return $this->db->affected_rows();
	}

	/// @see Update_Data()
	/// @note
	/// @attention
	function Update_Data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function Update_Data_Sortir($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function Update_Data_Perubahan($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function Update_Data_Result($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	/// @see Delete_Data()
	/// @note
	/// @attention
	function Delete_Data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function Delete_Data_Sortir($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function Delete_Data_Perubahan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	/// @see Get_Where()
	/// @note
	/// @attention
	function Get_Where($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	/// @see ajax_getbyhdrid()
	/// @note
	/// @attention
	function ajax_getbyhdrid($hdrid, $table)
	{
		return $this->db->get_where($table, array('hdrid' => $hdrid));
	}
	function ajax_getbysuperior($hdrid, $table)
	{
		return $this->db->get_where($table, array('nik_superior' => $hdrid));
	}

	function ajax_getbyhdrid_sortir($id_sortir, $table)
	{
		return $this->db->get_where($table, array('id_sortir' => $id_sortir));
	}

	function ajax_getbyhdrid_perubahan($id, $table)
	{
		return $this->db->get_where($table, array('id' => $id));
	}

	/// @see Get_central_user()
	/// @note
	/// @attention
	function Get_central_user()
	{

		$DB2 = $this->load->database('db_central_user', TRUE);   // Database central user   
		$result = $DB2->get('Tb_user_login')->result();               // Untuk mengeksekusi dan mengambil data hasil query
		$DB2->Close();
		return $result;
	}

	/// @see Get_departement()
	/// @note
	/// @attention
	function Get_departement()
	{

		$DB2 = $this->load->database('db_central_user', TRUE);   // Database central user   
		$result = $DB2->get('Tb_department')->result();               // Untuk mengeksekusi dan mengambil data hasil query
		$DB2->Close();
		return $result;
	}

	public function get_tb_customer_name()
	{
		$DB2 = $this->load->database('db_Material_Lot_Control', TRUE);
		$Query = $DB2->query("SELECT * FROM customer where cust_name != '' AND cust_keterangan !='' ORDER BY cust_name ASC");
		$data = $Query->result();
		$DB2->Close();
		return  $data;
	}
	public function get_tb_change_sortir()
	{
		$DB2 = $this->load->database('default', TRUE);
		$Query = $DB2->query("SELECT check_spv FROM change_sortir");
		$data = $Query->result();
		$DB2->Close();
		return  $data;
	}
	public function get_tb_part_model()
	{
		$DB2 = $this->load->database('db_Material_Lot_Control', TRUE);
		$Query = $DB2->query("SELECT * FROM daftar_material_names ORDER BY part_number ASC");
		$data = $Query->result();
		$DB2->Close();
		return  $data;
	}

	public function get_tb_user_system()
	{
		$DB2 = $this->load->database('default', TRUE);
		$Query = $DB2->query("SELECT * FROM a_user_system ORDER BY role_name ASC");
		$data = $Query->result();
		$DB2->Close();
		return  $data;
	}

	public function get_tb_spv()
	{
		$DB2 = $this->load->database('default', TRUE);
		$Query = $DB2->query("SELECT * FROM a_user_system WHERE role_name = 'SUPERVISOR'");
		$data = $Query->result();
		$DB2->Close();
		return  $data;
	}
	public function get_tb_spv2()
	{
		$DBMFG = $this->load->database('db_mfg_portal', TRUE);
		// Menjalankan query left join
		$query = $DBMFG->query("
		SELECT users.*, roles.name AS role_name
        FROM users
        LEFT JOIN model_has_roles ON users.id = model_has_roles.model_id
        LEFT JOIN roles ON model_has_roles.role_id = roles.id
        WHERE roles.name = 'MFG Spv'
    	");
		$data = $query->result();
		$DBMFG->Close();
		return  $data;
	}

	public function get_tb_superior()
	{

		$Query = $this->db->query("SELECT * FROM tb_superior where=''");
		return  $Query;
	}

	public function get_tb_qc()
	{
		$DB2 = $this->load->database('default', TRUE);
		$Query = $DB2->query("SELECT * FROM a_user_system WHERE role_name = 'QC'");
		$data = $Query->result();
		$DB2->Close();
		return  $data;
	}

	public function get_tb_qc2()
	{
		$DB2 = $this->load->database('db_central_user', TRUE);
		$Query = $DB2->query("SELECT * FROM Tb_user_login WHERE kode_department = '220'");
		$data = $Query->result();
		$DB2->Close();
		return  $data;
	}
	public function get_tb_qc3()
	{
		$DB2 = $this->load->database('default', TRUE);
		$Query = $DB2->query("SELECT * FROM tb_superior");
		$data = $Query->result();
		$DB2->Close();
		return  $data;
	}

	//    Public Function get_tb_lot()
	//    {
	//     $DB2 = $this->load->database('db_Material_Lot_Control', TRUE);
	//     $Query = $DB2->query("SELECT * FROM daftar_lot_numbers ORDER BY qty ASC");
	//     $data = $Query->result();
	//     $DB2->Close();
	//     return  $data;
	//    }



	/// @see Send_mail()
	/// @note
	/// @attention
	public function Send_mail($hdrid)
	{

		// cari approver yang belum approve dan order by level
		$query = $this->db->query("
         SELECT  hdrid
         ,level_approve
         ,nik_approver
         ,nik_approver_encode
         ,name_approver
         ,email_approver
         ,date_approve
         ,description
     FROM customer_name_approver
     where hdrid='WTR2010009' and level_approve=(select min(level_approve) from customer_name_approver where hdrid='WTR2010009' and date_approve is null)");

		// jika ketemu
		if ($query->num_rows() > 0) {
			$query = $query->rows();

			// Update progress waiting approve
			$where = array('hdrid' => $query->hdrid);
			$data = array('progress_approver' => 'Waiting approved ' . $query->name_approver);
			$this->db->where($where);
			$this->db->update('customer_name_approver', $data);

			// Kirim email request to approve
			$this->db->query("CALL sp_send_mail @hdrid='$query->hdrid',@nik='$query->nik_approver',@name='$query->name_approver',@email='widodo.a5v@ap.denso.com',@EmailSubject='Waiting Approver Wire transfer No ',@Email_body_content='You need approver'");
		} else {

			// Update progress finish approve
			$where = array('hdrid' => $query->hdrid);
			$data = array('progress_approver' => 'Finish Approved');
			$this->db->where($where);
			$this->db->update('customer_name_approver', $data);

			// Kirim email notifikasi finish aprove
			$this->db->query("exec sp_send_mail @hdrid='123',@nik='DM1902060',@name='Widodo',@email='widodo.a5v@ap.denso.com',@EmailSubject='Finish Approver Wire transfer No ',@Email_body_content='You need approver'");
		}
	}

	/// @see Send_mail_reject()
	/// @note
	/// @attention
	public function Send_mail_reject($hdrid)
	{

		// Cari data wire
		$query = $this->db->query("select hdrid,nik,name_requester,isnull(reject_by,'')reject_by,isnull(reason_reject,'')reason_reject from tb_wiretransfer where hdrid='$hdrid' ");
		$query = $query->row();

		// Cari email
		$query2 = $this->db->query("select top 1 email from tb_userwire where nik='$query->nik' ");
		if ($query2->num_rows() > 0) {
			$query2 = $query2->row();
			//  Kirim email
			$result = $this->db->query("exec sp_send_mail @hdrid='$query->hdrid',@nik='$query->nik',@name='$query->name_requester',@email='widodo.a5v@ap.denso.com',@EmailSubject='Rejected Wire transfer No ',@Email_body_content='Rejected by <b> $query->reject_by </b>',@comment='With reason = <b> $query->reason_reject </b>'")->result_array();
		}
	}
	function Add_List_Approver($date_transaction, $hdrid, $nik)
	{

		$this->tb_approval_save_superior1($date_transaction, $hdrid, $nik);
		// $this->tb_approval_save_superior($date_transaction,$hdrid,$nik,'5');


	}


	/// @see tb_approval_save_superior
	/// @note fungsi table approval save superior
	/// @attention
	// function tb_approval_save_superior($date_transaction, $hdrid, $nik)
	// {
	// 	// Delete tb_approval dimana hdrid='$hdrid'
	// 	// $this->db->query("Delete FROM tb_approval WHERE hdrid='$hdrid'");

	// 	$sequence = 1;
	// 	//Cari Approver User
	// 	$query = $this->db->query("select * from fn_view_approver('$nik') order by position_code asc");
	// 	$query = $query->result();

	// 	foreach ($query as $key => $value) {

	// 		if ($value->position_code) { // pengecualian approval 
	// 			$query = $this->db->query("
	//                             INSERT INTO tb_approval
	//                                 (transaction_date
	//                                 ,hdrid
	//                                 ,nik
	//                                 ,name
	//                                 ,office_email
	//                                 ,department_code
	//                                 ,department_name
	//                                 ,position_code
	//                                 ,position_name
	//                             ) values (
	//                                     '$date_transaction'
	//                                     ,'$hdrid'
	//                                     ,'$value->nik_superior2'
	//                                     ,'$value->name_superior2'
	//                                     ,'$value->email_superior2'
	//                                     ,'$value->kode_section_superior2'
	//                                     ,'$value->name_section_superior2'
	//                                     ,'$sequence'
	//                                     ,'$value->position_name2'
	//                                 )
	//                             ");
	// 			$sequence++;
	// 		}
	// 	}
	function tb_approval_save_superior1($date_transaction, $hdrid, $nik)
	{
		// Delete tb_approval dimana hdrid='$hdrid'
		// $this->db->query("Delete FROM tb_approval WHERE hdrid='$hdrid'");

		$sequence = 1;
		//Cari Approver User
		$query = $this->db->query("select * from get_superior('$nik') order by level asc");
		$query = $query->result();

		foreach ($query as $key => $value) {

			if ($value->level) { // pengecualian approval 
				$query = $this->db->query("
                                INSERT INTO tb_approval
                                    (transaction_date
                                    ,hdrid
                                    ,nik
                                    ,name
                                    ,office_email
                               
                                    ,position_code
                             
                                ) values (
                                        '$date_transaction'
                                        ,'$hdrid'
                                        ,'$value->superior_nik'
                                        ,'$value->superior_name'
                                        ,'$value->superior_email'
            
                                        ,'$sequence'
                                      
                                    )
                                ");
				$sequence++;
			}
		}


		//Cari Approver Finance

	}
}
