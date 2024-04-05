<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
	public function get($username)  // Database db_central_user >> Tb_user_login -> row()
	{
		$DB2 = $this->load->database('db_central_user', TRUE);
		$DB2->where('user_name', $username);                // Untuk menambahkan Where Clause : username='$username'
		$result = $DB2->get('Tb_user_login')->row();        // Untuk mengeksekusi dan mengambil data hasil query
		$DB2->Close();
		return $result;
	}
	public function getusername($username)  // Database db_mfg_portal >> users -> row()
	{
		$DBMFG = $this->load->database('db_mfg_portal', TRUE);
		$DBMFG->where('nik', $username);                // Untuk menambahkan Where Clause : username='$username'
		$result = $DBMFG->get('users')->row();        // Untuk mengeksekusi dan mengambil data hasil query
		$DBMFG->Close();
		return $result;
	}
	public function getpass($password)  // Database db_central_user >> Tb_user_login -> row()
	{
		$DB2 = $this->load->database('db_central_user', TRUE);
		$DB2->where('password', $password);                // Untuk menambahkan Where Clause : password='$password'
		$result = $DB2->get('Tb_user_login')->row();        // Untuk mengeksekusi dan mengambil data hasil query
		$DB2->Close();
		return $result;
	}
	public function get2($username)  // Database db_central_user  >> Tb_user_login -> num_rows()
	{

		$DB2 = $this->load->database('db_central_user', TRUE);
		$DB2->where('user_name', $username);                // Untuk menambahkan Where Clause : username='$username'
		$result = $DB2->get('Tb_user_login');        // Untuk mengeksekusi dan mengambil data hasil query        
		if ($result->num_rows() > 0) {
			$hasil = $result->row();
			$data['status'] = 'ok';
			$data['result'] = $hasil;
		} else {
			$data['status'] = 'not found';
			$data['result'] = '';
		}
		$DB2->Close();
		return $data;
	}
	public function get_user_request($nik = NUll) // Database db_central_user
	{

		$DB2 = $this->load->database('db_central_user', TRUE);
		$DB2->where('user_name', $nik);
		$query = $this->DB2->get('Tb_user_login');
		$DB2->Close();

		// $DB2 = $this->load->database('db_central_user', TRUE);   // Database central user
		// $DB2->where('user_name', $nik);                // Untuk menambahkan Where Clause : username='$username'
		// $query = $DB2->get('Tb_user_login');        // Untuk mengeksekusi dan mengambil data hasil query
		// $DB2->Close();

		// $this->db->select("roleid,rolename");
		// $this->db->from('a_user_system');
		// $this->db->where('nik',$nik); 
		// $query = $this->db->get();        
		// return $query->result();

		/* Jika ketemu datanya */
		if ($query->num_rows() > 0) {
			$hasil = $query->row();
			$data['status'] = 'ok';
			$data['result'] = $hasil;
		} else {
			$data['status'] = 'not found';
			$data['result'] = '';
		}

		return $data;
	}
	function get_tb_email_user($kobar)
	{
		//     $DB3 = $this->load->database('db_central_user', TRUE);
		//     $hsl=$this->DB3->query("SELECT * FROM Tb_user_login where user_name='$kobar'");
		//     if($hsl->num_rows()>0){
		//         foreach ($hsl->result() as $data) {
		//             $result=array(
		//                 'user_name' => $data->user_name,
		//                 'NAME' => $data->NAME,
		//                 'Personalemail' => $data->Personalemail,
		//                 'OfficeEmail' => $data->OfficeEmail,
		//                 );
		//         }
		//     }
		//     $DB3->Close();
		//     return $result;
	}
	// Get HRSS Employee
	public function getemployeedetail($username)
	{
		$DB3 = $this->load->database('db_central_user', TRUE);    // Database central user
		$DB3->where('user_name', $username);                // Untuk menambahkan Where Clause : username='$username'
		$result = $DB3->get('Tb_user_login')->row();        // Untuk mengeksekusi dan mengambil data hasil query
		$DB3->Close();
		return $result;
	}
	// Get HRSS Employee
	public function ajax_getemployeedetail($user_name)
	{
		//     $DB3 = $this->load->database('db_central_user', TRUE);    // Database central user
		//     // $DB3->where('user_name','DM1902060');                // Untuk menambahkan Where Clause : username='$username'
		//     $result = $DB3->get('Tb_user_login')->row();        // Untuk mengeksekusi dan mengambil data hasil query
		//     $DB3->Close();
		//     return $result;
	}
	// @see ajax_getbyhdrid()
	function ajax_getbyhdrid()
	{
		$DB3 = $this->load->database('db_central_user', TRUE);
		$result = $DB3->get('Tb_user_login');
		$DB3->Close();
		return $result;
	}
	// Get Role
	public function getroleid($username)
	{
		// role_id, role_name, dan nik didalam 1 tabel
		$this->db->select("role_id,role_name"); //mengambil role_id dan role_name
		$this->db->from('a_user_system'); //nama tabel
		$this->db->where('nik', $username); //mengambil kolom nik untuk dijadikan variabel $username
		$query = $this->db->get();
		return $query->row();
	}

	public function getroleid3($username)
	{
		// Database connection to db_central_user
		$DB_MFG = $this->load->database('db_mfg_portal', TRUE);
		$DB_MFG->select("id");
		$DB_MFG->from('users');
		$DB_MFG->where('nik', $username);
		$query = $DB_MFG->get();

		// check jika user tersedia
		if ($query->num_rows() > 0) {
			$user_row = $query->row();

			// Selecting id_role dari model_has_role berdasarkan user_id
			// $DB_MFG->select("role_id");
			// $DB_MFG->from('model_has_roles');
			// $DB_MFG->where('model_id', $user_row->id);
			// $query_role = $DB_MFG->get();
			// // Checking jika role tersedia untuk user
			// if ($query_role->num_rows() > 0) {
			// 	$role_row = $query_role->row();
			// 	// Selecting name_role dari tabel roles berdasarkan id_role
			// 	$DB_MFG->select("name");
			// 	$DB_MFG->from('roles');
			// 	$DB_MFG->where('id', $role_row->id_role);
			// 	$query_name_role = $DB_MFG->get();
			// 	// check jika name_role tersedia
			// 	if ($query_name_role->num_rows() > 0) {
			// 		$name_role_row = $query_name_role->row();
			// 		return $name_role_row->name; // Mengembalikan name_role
			// 	} else {
			// 		return "Role Not Found";
			// 	}
			// } else {
			// 	return "Role for User Not Found";
			// }

			// Selecting role_name dari roles berdasarkan role_id
			$DB_MFG->select("roles.name AS role_name");
			$DB_MFG->from('model_has_roles');
			$DB_MFG->join('roles', 'model_has_roles.role_id = roles.id');
			$DB_MFG->where('model_id', $user_row->id);
			$query_role = $DB_MFG->get();

			// Checking jika role tersedia untuk user di db_mfg_portal
			if ($query_role->num_rows() > 0) {
				$role_row = $query_role->row();
				$role_name = $role_row->role_name;

				// Mapping role_name dari db_mfg_portal ke role yang sesuai di db_rework_report
				switch ($role_name) {
					case 'MFG Hanchou':
						$mapped_role = 'Leader';
						break;
					case 'MFG Spv':
						$mapped_role = 'SUPERVISOR';
						break;
					case 'MFG Mgr':
						$mapped_role = 'Manager';
						break;
					default:
						$mapped_role = $role_name;
				}

				// Check apakah role yang dipetakan ada di db_rework_report
				$DB_Rework = $this->load->database('default', TRUE);
				$DB_Rework->select("role_name");
				$DB_Rework->from('a_user_role');
				$DB_Rework->where('role_name', $mapped_role);
				$query_mapped_role = $DB_Rework->get();

				// Jika peran yang dipetakan ditemukan di db_rework_report, kembalikan peran yang dipetakan
				if ($query_mapped_role->num_rows() > 0) {
					return $mapped_role;
				} else {
					return "Mapped Role Not Found in db_rework_report";
				}
			} else {
				return "Role for User Not Found in db_mfg_portal";
			}
		} else {
			// Database connection to db_rework_report
			$DB_Superior = $this->load->database('default', TRUE);
			$DB_Superior->select("role_id, role_name");
			$DB_Superior->from('a_user_system');
			$DB_Superior->where('nik', $username);
			$query_user = $DB_Superior->get();
			// check jika user tersedia di db_rework_report
			if ($query_user->num_rows() > 0) {
				$name_role_row = $query_user->row();
				return $name_role_row->name_role;
			} else {
				return "Role Not Found";
			}
		}
	}

	// Get Menu Access
	public function getuseraccess($roleid)
	{
		$this->db->select("menu_id,allow_add,allow_edit,allow_delete");
		$this->db->from('a_user_role_access');
		$this->db->where('role_id', $roleid);
		$query = $this->db->get();
		return $query->result();
	}
	// public function getNameUser($username){   //Ambil nama       
	//     $DB2 = $this->load->database('db_central_user', TRUE);   //Konect database ke dua
	//     $DB2->where('user_name', $username);                      // Untuk menambahkan Where Clause : username='$username'
	//     $result = $DB2->get('Tb_user_login')->row();  // Untuk mengeksekusi dan mengambil data hasil query        
	//     return $result;        
	// }
	// public function getrolename($roleid){
	//     $this->db->select("rolename");
	//     $this->db->from('tb_setrole');
	//     $this->db->where('roleid',$roleid); 
	//     $query = $this->db->get();        
	//     return $query->row();
	// }
	/// @see update_password()
	/// @attention Update password baru sesuai dengan username
	function update_password($username, $passwordnew, $table)
	{
		$DB4 = $this->load->database('db_central_user', TRUE); //Konect database ke dua
		$sql = "Update " . $table . " set password='" . $passwordnew . "' where user_name='" . $username . "'";
		$emp = $DB4->query($sql);
		$DB4->Close();
	}
	// public function getPersonalData($username){
	//     $DB3 = $this->load->database('db_central_user', TRUE); //Konect database ke dua
	//     $sql = "SELECT top 1 * FROM v_ess_personal_data where NIK='".$username."'";
	//     $emp = $DB3->query($sql)->row();
	//     $data['emp'] = $emp;
	//     foreach($DB3->query($sql)->result() as $row){
	//         $data['image_file'] = base64_encode($row->PhotoObj);
	//         $finfo = finfo_open(FILEINFO_MIME);
	//         $image_type = explode(';',finfo_buffer($finfo,$row->PhotoObj,FILEINFO_MIME));
	//         $image_type = $image_type[0];
	//         $image_type = explode('/',$image_type);
	//         $data['image_type'] = $image_type[1]; 
	//     }
	//     //$data['nationality'] = $this->Func->load_combo('cboNationality','nationality',$emp->WargaNegara_ID);
	//     //$data['blood_type'] = $this->Func->load_combo('cboBloodType','blood_type',$emp->Gol_Darah);
	//     //$data['religion'] = $this->Func->load_combo('cboReligion','religion',$emp->Agama);
	//     //$data['dress_size'] = $this->Func->load_combo('cboDressSize','dress',$emp->Baju);
	//     //$data['pants_size'] = $this->Func->load_combo('cboPantsSize','pants',$emp->Celana);
	//     //$data['soes_size'] = $this->Func->load_combo('cboSoesSize','soes',$emp->Sepatu);
	//     //$data['hat_size'] = $this->Func->load_combo('cboHatSize','hat',$emp->Topi);
	//     //$data['helmet_size'] = $this->Func->load_combo('cboHelmetSize','helmet',$emp->Helmet);
	//     //$data['job_location'] = $this->Func->load_combo('cboJobLocation','job_location',$emp->WilayahKerja);
	//     //$data['home_area'] = $this->Func->load_combo('cboHomeArea','home_area', $emp->Home_Area_Id);
	//     //$data['cost_id'] = $this->Func->load_combo('cboCostId','cost_id',$emp->Cost_Id);
	//     return $emp;
	// }
	/// @see menampilkan menu di side bar
	/// @note jika administrator muncul semua menu dan jika user muncul menu berdasarkan role nya masing-masing
	/// @see get_menu_access()
	/// @note  Validasi access menu
	/// @attention Apabila admin terbuka semua else menu yang terbuka akan sesuai role
	public function get_menu_access($roleid)
	{


		if ($this->session->userdata('rolename') == 'Super Admin') { // Administrator tampil semua menu tanpa kondisi
			$sql = "select * from a_menu order by menu_id asc";
		} else {
			$sql = "select * from a_menu where menu_id in (select menu_id from a_user_role_access where role_id='$roleid' ) order by menu_id asc"; // Tampil menu berdasarkan role
		}

		$query = $this->db->query($sql); // execute query
		return $query->result(); // mengembalikan hasil query

		// if($query->num_rows() > 0){

		//       return $query->result(); // mengembalikan hasil query

		// }else{
		//         $data['status'] = 'not found';
		//         $data['result'] = '';
		// }


	}
	/// @see menampilkan hak akses  (add,edit,delete,import,export) pada form
	/// @note jika administrator memiliki semua hak akses sedangnkan user sesuai role
	/// @see get_hak_access()
	/// @note Validasi Action(Add,Edit,Delete,Import,Export)
	/// @attention Apabila admin terbuka semua else terbuka sesuai role
	public function get_hak_access($roleid, $menu_id)
	{

		if ($this->session->userdata('rolename') == 'Super Admin') { // Administrator tampil semua akses (add,edit,delete,import,export)
			$sql = "select top 1  ('on') as allow_add	,('on') as allow_edit	,('on') as allow_delete	,('on') as allow_import	,('on') as allow_export from a_user_role_access";
		} else {
			$sql = "select * from a_user_role_access where role_id='$roleid' and menu_id='$menu_id'"; // Tampil akses (add,edit,delete,import,export) berdasarkan role
		}

		$query = $this->db->query($sql); // execute query
		return $query->row(); // mengembalikan hasil query


	}
	// get_controller_access
	// identifikasi apakah user login bisa access di controller atau tidak
	/// @see get_menu_access()
	/// @note Validasi access controller
	/// @attention Apabila admin terbuka semua else controller yang terbuka akan sesuai role
	public function get_controller_access($roleid, $controller)
	{
		if ($this->session->userdata('rolename') == 'Super Admin') { // Administrator tampil semua menu tanpa kondisi
			$sql = "select top 1 controller from a_menu";
		} else {
			$sql = "select controller from a_menu where menu_id in(select menu_id from a_user_role_access where role_id='$roleid') and controller='$controller'"; // Tampil menu berdasarkan role
		}
		$query = $this->db->query($sql); // execute query
		if ($query->num_rows() > 0) {
			$query = (object) array('found' => 'found');
			return $query;
		} else {
			$query = (object) array('found' => 'not found');
			return $query;
		}
	}
}
///=======================================================================================================================================
class MfgModel extends CI_Model
{
	public function get_all($username) //Database db_mfg_portal >> nik ->get() users
	{
		$DB5 = $this->load->database('db_mfg_portal', TRUE);
		// Retrieve all users
		$DB5->where('nik', $username);
		$query = $DB5->get('users');
		return $query->result();
	}

	public function get_user($id) //Database db_mfg_portal >> users ->get_where() id
	{
		$DB5 = $this->load->database('db_mfg_portal', TRUE);
		// Retrieve a specific user
		$query = $DB5->get_where('users', array('id' => $id));
		return $query->row();
	}
}

class RoleModel extends CI_Model
{
	public function get_all() //Database db_mfg_portal ->get() roles
	{
		$DB5 = $this->load->database('db_mfg_portal', TRUE);
		// Retrieve all roles
		$query = $DB5->get('roles');
		return $query->result();
	}
}

class ProdakModel extends CI_Model
{
	//Mengambil user_name dari db_central_user, lalu dicocokan ke db_mfg_portal.users.nik, lalu id nya dicocokan ke db_mfg_portal.lines.supervisor_id
	public function get_user_line()
	{
		// Menggunakan database 'db_central_user'
		$DB5 = $this->load->database('db_central_user', TRUE);

		// Select kolom yang diinginkan
		$query = $DB5->select('db_central_user.Tb_user_login.user_name, db_mfg_portal.users.id, db_mfg_portal.lines.*')
			->from('db_central_user.Tb_user_login')
			->join('db_mfg_portal.users', 'db_mfg_portal.users.nik = db_central_user.Tb_user_login.user_name')
			->join('db_mfg_portal.lines', 'db_mfg_portal.lines.supervisor_id = db_mfg_portal.users.id')
			->get();

		// Mengembalikan hasil query
		return $query->result();
	}

	public function get_hanchou_id()
	{
		$DB5 = $this->load->database('db_central_user', TRUE);
		$query = $DB5->query("
            SELECT
                u1.user_name,
                u2.id,
                l.*
            FROM
                db_central_user.dbo.Tb_user_login AS u1
            JOIN
                db_mfg_portal.dbo.users AS u2 ON u2.nik = u1.user_name
            JOIN
    			db_mfg_portal.dbo.lines AS l ON l.hanchou_a_id = u2.id OR l.hanchou_b_id = u2.id;
        ");
		return $query->result();
	}

	public function get_supervisor_id()
	{
		$DB5 = $this->load->database('db_central_user', TRUE);
		$query = $DB5->query("
			SELECT
                u1.user_name,
                u2.id,
                l.*
            FROM
                db_central_user.dbo.Tb_user_login AS u1
            JOIN
                db_mfg_portal.dbo.users AS u2 ON u2.nik = u1.user_name
            JOIN
    			db_mfg_portal.dbo.lines AS l ON l.supervisor_id = u2.id;
		");
		return $query->result();
	}

	public function get_manager_id()
	{
		$DB5 = $this->load->database('db_central_user', TRUE);
		$query = $DB5->query("
			SELECT
                u1.user_name,
                u2.id,
                l.*
            FROM
                db_central_user.dbo.Tb_user_login AS u1
            JOIN
                db_mfg_portal.dbo.users AS u2 ON u2.nik = u1.user_name
            JOIN
    			db_mfg_portal.dbo.lines AS l ON l.manager_id = u2.id;
		");
		return $query->result();
	}
}

// class Role extends CI_Model {
// 	public function get_role(){
// 		$DB5 = $this->load->database('db_central_user', TRUE);
// 		$query = $DB5->query("
// 		SELECT
// 		u1.user_name,
// 		u2.id,
// 		mr.model_id,
// 		mfg_id,
// 		roles.name,
// 		FROM
// 			db_central_user.dbo.Tb_user_login AS u1
// 		JOIN
// 			db_mfg_portal.dbo.users AS u2 ON u2.nik = u1.user_name
// 		JOIN
// 			db_mfg_portal.dbo.users AS u2 ON u2.id
// 		JOIN
// 			db_mfg_portal.dbo.model_has_role AS mr.model_id = u2.id
// 		JOIN
// 			db_mfg_portal.dbo.roles AS u3 ON u3.id
// 	return $query->result();
// 	}
// }
