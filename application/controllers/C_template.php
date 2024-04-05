<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_template extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     **/
    /** ---------------------------------------------- template----------------------------------------------**/

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('user_name') == "") {
            redirect('Auth');
        }

        $this->load->library('form_validation');
        $this->load->helper('date');
        $this->load->helper('file');
        $this->load->model('M_template');
        $this->load->model('M_approver');
        // $this->load->library('encrypt');    

    }

    public function Index()
    {


        $data['group_product'] = $this->M_template->tampil_group_product();
        $data['group_product'] = $this->M_template->tampil_group_product();
        $data['product'] = $this->M_template->tampil_product();
        $data['customer'] = $this->M_template->tampil_customer();
        $data['nik'] = $this->M_template->tampi_nik();
        $data['nik_2'] = $this->M_template->tampi_nik();
        $data['sourceInformation'] = $this->M_template->tampil_source_information();


        /** -----------------------------Set Data Array Yang Diperlukan-----------------------------------**/
        $data['containments'] = ['Hold Product', 'Line Stop', 'Change Lot', 'Repair equip / Tools / Machine','Sorting 100%', 'Others'];
        $data['effectiveness_choice'] = ['Close Report', 'Open Report'];
        $data['dmia_responsible'] = ['Yes', 'No'];
        /** -----------------------------Akhir Set Data Array Yang Diperlukan-----------------------------------**/


        /** -----------------------------Ambil Detail Session User Yang Sedang Login-----------------------------------**/
        $data['username'] = $this->session->userdata('user_name');

         /** -----------------------------Akhir Ambil Detail Session User Yang Sedang Login-----------------------------------**/



        $this->load->view('templates/header'); //Tampil header
        $this->load->view('templates/sidebar'); //Tampil Sidebar
        $this->load->view('template/V_template', $data); // Tampil data
        $this->load->view('templates/footer'); // Tampil footer

    }

    // Satu table tanpa where
    function view_data()
    {

        $tables = "tb_input_problem";
        $search = array('hdrid', 'group_product_id', 'group_product_name', 'customer_id', 'customer_name');

        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_template->get_tables($tables, $search, $isWhere);
    }

    
    // Satu table dengan where
    function view_data_where()
    {
        /** -----------------------------Ambil Data Sesuai Dengan User Yang Terlogin-----------------------------------**/
        $nikSession = $this->session->userdata('user_name');
        /** -----------------------------Akhir Ambil Data Sesuai Dengan User Yang Terlogin-----------------------------------**/
        

        $tables = "tb_input_problem";
        $search = array('a.hdrid', 'a.group_product_id', 'a.group_product_name', 'a.customer_id', 'a.customer_name', 'a.problem_name');


        if ($_POST['searchByFromdate'] == '' || $_POST['searchByTodate'] == '') {
            $where  = array('a.transaction_date >' => '2020-01-01', 'a.draft' => 'send','b.nik'=>$nikSession);
        } else {
            $where  = array('a.transaction_date >' => $_POST['searchByFromdate'], 'a.transaction_date <' => $_POST['searchByTodate'], 'a.draft' => 'send','b.nik'=>$nikSession);
        };

        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_template->get_tables_where2($tables, $search, $where, $isWhere);
        // echo $this->M_template->getTableWhereCustom($nikSession);
    }

    

    function view_data_whereapproval()
    {
        
        $tables = "tb_approval";
        
        /** -----------------------------Ambil Data Sesuai Dengan User Yang Terlogin-----------------------------------**/
        $nikSession=$this->session->userdata('user_name');
        /** -----------------------------Akhir Ambil Data Sesuai Dengan User Yang Terlogin-----------------------------------**/
        
        $hdrid = $this->input->post('hdrid');
        // $hdrid='BD/BF23/2021/11/002';

        $search = array('problem_id', 'nik', 'name', 'department_code', 'department_name', 'office_email', 'position_code', 'position_name', 'date_approve');
        $where  = array('problem_id' => $hdrid);

        // if($_POST['searchByFromdate']==''||$_POST['searchByTodate']==''){
        //     $where  = array('transaction_date >'=>'2020-01-01','problem_id'=>$hdrid);
        //     // $where  = array('transaction_date >'=>'2020-01-01');              
        // }else{
        //     $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate'],'hdrid'=>'R-3A16-01305');
        // };

        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_template->get_tables_where($tables, $search, $where, $isWhere);
    }

    // Multy table / Query
    function view_data_query()
    {

        $query  = "SELECT kategori.name_kategori AS name_kategori, subkat.* FROM subkat 
                    JOIN kategori ON subkat.id_kategori = kategori.id_kategori";
        $search = array('name_kategori', 'subkat', 'tgl_add');
        $where  = null;
        // $where  = array('name_kategori' => 'Tutorial');

        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere);
    }



    public function ajax_add()
    {
        // ********************* 0. Generate nomor transaksi  *********************     
        $product_id = $this->input->post('product_id');
        $kodeB = $this->M_template->get_product_by_id($product_id);
        $kode = $kodeB->report_no;            
        $mdate = $kode . mdate('%Y/%m/', time());
        $hdrid2 = $this->M_template->Max_data($mdate, 'tb_input_problem')->row();


        if ($hdrid2->hdrid == NULL) {
            // Jika belum ada
            $hdrid3 = $mdate . "001";
        } else {
            $hdrid3 = $hdrid2->hdrid;
            // Jika sudah ada maka naik 1 level
            $str = intval(substr($hdrid3, strlen($mdate), 3)) + 1;
            $str = str_pad($str, 3, "0", STR_PAD_LEFT);
            $hdrid3 = $mdate . $str;
        }
        $hdrid = $hdrid3;

        // ********************* 1. Set hdrid  *********************
        $post_data2 = array('hdrid' => $hdrid3);

        // ********************* 2. Transaction date  *********************
        $post_data3 = array('transaction_date' => mdate('%Y-%m-%d', time()));
        $post_data_transaction_date = mdate('%Y-%m-%d', time());

        // ******************** 3. Collect all data post *********************     
        $post_data = $this->input->post();
        $post_data5 = $this->input->post('group_product_id');
        $post_problem_category_id = $this->input->post('problem_category_id');
        $product_id2 = $this->input->post('product_id');

        $issue_date = array('issue_date' => mdate('%Y-%m-%d', time()));

        // ********************* 4. Merge data post *********************        
        $post_datamerge = array_merge($post_data, $post_data2, $post_data3, $issue_date);

        // ********************* 5. Simpan data     *********************

        $this->M_template->Input_Data($post_datamerge, 'tb_input_problem');

        // ********************* 6. Upload file jika ada  *********************   
        // if (!empty($_FILES['file']['name'])) {
        //     $this->upload_file_attach('file', $hdrid, 'tb_input_problem');
        // }

        // **********************  Upload file attach_picture  *********************   
        if (!empty($_FILES['attach_picture']['name'])) {
            $this->upload_file_attach('attach_picture', $hdrid, 'tb_input_problem');
        }


        // **********************  Set HDRID Untuk Table Lain  *********************   
        $post_data4 = array('problem_id' => $hdrid);


        $post_datamerge2 = array_merge($post_data2, $post_data4);
        $this->M_template->Input_Data($post_datamerge2, 'tb_response');
        $this->M_template->Input_Data($post_datamerge2, 'tb_input_effectiveness');
        $this->M_template->Input_Data2($post_data_transaction_date, $hdrid, $post_problem_category_id, $product_id2, 'tb_approval');

        $msg = "success save";

        if ($test == true) {
            $msg = "success save";
        } else {
            $msg = "no";
        }

        $data['status'] = $msg;

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    public function ajax_update()
    {

        // ********************* 1. Collect data post *********************
        $post_data = $this->input->post();
        $hdrid = $this->input->post('hdrid');

        $msg = "success Update";

        // **********************  Upload file (filename,hdrid,table)  *********************   
        if (!empty($_FILES['file']['name'])) {
            $this->upload_file_attach('file', $hdrid, 'tb_input_problem');
        }

        // *********************  Merge data All post *********************
        // $post_datamerge=array_merge($post_data,$post_data2);
        $post_datamerge = array_merge($post_data, $post_data);

        // **********************  Simpan data ************************        
        $where = array('hdrid' => $hdrid);
        $this->M_template->Update_Data($where, $post_datamerge, 'tb_input_problem');

        $data['status'] = "berhasil update";

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function ajax_delete()
    {


        $where = array('hdrid' => $this->input->post('hdrid'));
        $this->M_template->Delete_Data($where, 'tb_input_problem');
        $data['status'] = "berhasil dihapus";
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }


    function ajax_getbyhdrid()
    {

        $hdrid = $this->input->get('hdrid');
        $data = $this->M_template->ajax_getbyhdrid($hdrid, 'tb_input_problem')->row();
        echo json_encode($data);
    }

    function form_approver_link_mail()
    {

        $id_user_reg = $this->input->get('var1');
        $nik = $this->input->get('var2');

        $data['get_approver'] = $this->M_template->get_approver($id_user_reg);
        $data['get_requester'] = $this->M_template->get_requester($id_user_reg);
        $data['data'] = $this->M_template->get_data($id_user_reg);

        $this->load->view('email/V_template', $data); // Tampil data

    }




    public function import()
    {

        // $this->form_validation->set_rules('excel', 'File', 'trim|required');

        if ($_FILES['excel']['name'] == '') {

            $this->session->set_flashdata('msg', 'File harus diisi');
            redirect('C_template');
        } else {

            $config['upload_path'] = './assets/excel/';
            $config['allowed_types'] = 'xls|xlsx';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('excel')) {
                $error = array('error' => $this->upload->display_errors());
            } else {

                $data = $this->upload->data();

                error_reporting(E_ALL);
                date_default_timezone_set('Asia/Jakarta');

                include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

                $inputFileName = './assets/excel/' . $data['file_name'];
                $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);

                $index = 0;

                foreach ($sheetData as $key => $value) {

                    // ********************* 0. Generate nomor transaksi  *********************          

                    // Cari database sekali saja
                    if ($index == 0) {
                        $mdate = "TR" . mdate('%Y%m', time());
                        $hdrid2 = $this->M_template->Max_data($mdate, 'tb_input_problem')->row();
                        if ($hdrid2->hdrid == NULL) {
                            // Jika belum ada
                            $hdrid3 = $mdate . "001";
                            //    $resultData[$index]['hdrid'] =   $hdrid3;
                        } else {
                            $hdrid3 = $hdrid2->hdrid;
                            // Jika sudah ada maka naik 1 level
                            $hdrid3 = "TR" . (intval(substr($hdrid3, 2, 10)) + 1);
                            // $resultData[$index]['hdrid'] =   $hdrid3;    
                        }
                    } else {
                        $hdrid3 = "TR" . (intval(substr($hdrid3, 2, 10)) + 1);
                    }

                    $resultData[$index]['hdrid'] =   $hdrid3;
                    $resultData[$index]['transaction_date'] = mdate('%Y-%m-%d', time());

                    // ---------------------------------- Import Macro Batas sini 1---------------------------------

                    //  Sample
                    $resultData[$index]['group_product_id'] = ucwords($value['A']);
                    $resultData[$index]['group_product_name'] = ucwords($value['A']);
                    $resultData[$index]['group_product_id'] = ucwords($value['A']);
                    $resultData[$index]['group_product_name'] = ucwords($value['A']);
                    $resultData[$index]['product_id'] = ucwords($value['A']);
                    $resultData[$index]['product_name'] = ucwords($value['A']);
                    $resultData[$index]['customer_id'] = ucwords($value['A']);
                    $resultData[$index]['customer_name'] = ucwords($value['A']);
                    $resultData[$index]['contact_person_name'] = ucwords($value['A']);
                    $resultData[$index]['source_information_id'] = ucwords($value['A']);
                    $resultData[$index]['source_information_name'] = ucwords($value['A']);
                    $resultData[$index]['customer_report_number'] = ucwords($value['A']);
                    $resultData[$index]['part_number'] = ucwords($value['A']);
                    $resultData[$index]['qty'] = ucwords($value['A']);
                    $resultData[$index]['lot_number_product'] = ucwords($value['A']);
                    $resultData[$index]['detail_problem'] = ucwords($value['A']);
                    $resultData[$index]['responsible_section'] = ucwords($value['A']);
                    $resultData[$index]['containment_date'] = ucwords($value['A']);
                    $resultData[$index]['nik'] = ucwords($value['A']);
                    $resultData[$index]['name'] = ucwords($value['A']);
                    $resultData[$index]['report_date'] = ucwords($value['A']);
                    $resultData[$index]['status'] = ucwords($value['A']);




                    // ---------------------------------- / Import Macro Batas sini 1--------------------------------

                    // if ($key != 1) {

                    // $check = $this->M_legalitas->check_name($value['C']);

                    // Tanggal Terbit
                    // $tanggal = substr($value['E'],0,2);
                    // $bulan = substr($value['E'],3,2);
                    // $tahun = substr($value['E'],6,4);
                    // $date = $tahun.'-'.$bulan.'-'.$tanggal;

                    // Tanggal Berakhir
                    // $tanggal2 = substr($value['F'],0,2);
                    // $bulan2 = substr($value['F'],3,2);
                    // $tahun2 = substr($value['F'],6,4);
                    // $date2 = $tahun2.'-'.$bulan2.'-'.$tanggal2;

                    // if ($check != 1) {
                    // 	$resultData[$index]['kategori'] = ucwords($value['A']);
                    // 	$resultData[$index]['name_d'] = ucwords($value['C']);
                    // 	$resultData[$index]['no_doc'] = ucwords($value['D']);
                    // 	$resultData[$index]['t_terbit'] = $date; 
                    // 	$resultData[$index]['t_berakhir'] = $date2;
                    // 	$resultData[$index]['instansi'] = ucwords($value['G']);
                    // 	$resultData[$index]['keterangan'] = ucwords($value['H']);
                    // 	$resultData[$index]['file'] = 'No File';
                    // 	$resultData[$index]['status'] = 'MASIH BERLAKU';
                    // }

                    // }

                    $index++;
                }

                unlink('./assets/excel/' . $data['file_name']);

                if (count($resultData) != 0) {
                    $result = $this->M_template->insert_batch('tb_input_problem', $resultData);
                    if ($result > 0) {
                        // $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
                        redirect('C_template');
                    }
                } else {
                    // $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
                    redirect('C_template');
                }
            }
        }
    }


    // Untuk View Detail Problem
    function view_data_whereprobs()
    {

        $tables = "tb_input_problem";

        $hdrid = $this->input->post('hdrid');

        $search = array('hdrid', 'group_product_id', 'group_product_name', 'product_id', 'product_name', 'contact_person_name', 'source_information_id', 'source_information_name', 'customer_report_number', 'part_number', 'qty', 'lot_number_product', 'detail_problem', 'responsible_section', 'containment_date', 'nik', 'name', 'report_date', 'status', 'problem_name');

        if ($_POST['searchByFromdate'] == '' || $_POST['searchByTodate'] == '') {
            $where  = array('transaction_date >' => '2020-01-01', 'hdrid' => $hdrid);
            // $where  = array('transaction_date >'=>'2020-01-01');              
        } else {
            $where  = array('transaction_date >' => $_POST['searchByFromdate'], 'transaction_date <' => $_POST['searchByTodate'], 'hdrid' => 'R-3A16-01305');
        };

        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_template->get_tables_where($tables, $search, $where, $isWhere);
    }

  

    // ********************* Setting Upload FIle  *********************
    function upload_file_attach2($filename, $hdrid, $table)
    {

        if (!empty($_FILES[$filename]['name'])) {

            // CONFIG UNTUK FILE EF
            $config['upload_path'] = './assets/upload/RES';
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $config['overwrite'] = True;
            $config['max_size']  = '1000000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $config['file_name'] = $hdrid . '_' . $filename;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload($filename)) {
                // $status = "error";
                $msg = $this->upload->display_errors();
            } else {
                $msg = "success upload";

                $dataupload = $this->upload->data();
                // $status = "success";
                // $msg = $dataupload['file_name']." berhasil diupload";                      
                $data_update = array($filename => $dataupload['file_name']);

                $where = array('hdrid' => $hdrid);
                $this->M_template->Update_Data($where, $data_update, $table);
            }
        }
    }
    



    // Untuk View Data Tabel Effectiveness
    function ajax_getEftbyhdrid()
    {
        $hdrid = $this->input->get('hdrid');
        $data = $this->M_template->ajax_getbyhdrid($hdrid, 'tb_input_effectiveness')->row();
        echo json_encode($data);
    }

    // Untuk View Data Tabel Response
    function ajax_getResbyhdrid()
    {
        $hdrid = $this->input->get('hdrid');
        $data = $this->M_template->ajax_getbyhdrid($hdrid, 'tb_response')->row();
        echo json_encode($data);
    }

    // Untuk Update Tabel Effectiveness
    public function ajax_updateef()
    {

        // ********************* 1. Collect data post *********************
        $post_data = $this->input->post();
        $hdrid = $this->input->post('hdrid');
        $problem_id = $this->input->post('problem_id');
        $post_data3 = array('transaction_date' => mdate('%Y%m%d', time()));

        $msg = "success Update";

        // **********************  Upload file attach_file_1  *********************   
        if (!empty($_FILES['attach_file_1']['name'])) {
            $this->upload_file_attach('attach_file_1', $hdrid, 'tb_input_effectiveness');
        }

        // **********************  Upload file attach_file_2  *********************   
        if (!empty($_FILES['attach_file_2']['name'])) {
            $this->upload_file_attach('attach_file_2', $hdrid, 'tb_input_effectiveness');
        }

        // **********************  Upload file attach_file_3  *********************   
        if (!empty($_FILES['attach_file_3']['name'])) {
            $this->upload_file_attach('attach_file_3', $hdrid, 'tb_input_effectiveness');
        }

        // **********************  Upload file attach_file_4  *********************   
        if (!empty($_FILES['attach_file_4']['name'])) {
            $this->upload_file_attach('attach_file_4', $hdrid, 'tb_input_effectiveness');
        }

        // **********************  Upload file attach_file_5  *********************   
        if (!empty($_FILES['attach_file_5']['name'])) {
            $this->upload_file_attach('attach_file_5', $hdrid, 'tb_input_effectiveness');
        }

        // **********************  Upload file attach_file_6  *********************   
        if (!empty($_FILES['attach_file_6']['name'])) {
            $this->upload_file_attach('attach_file_6', $hdrid, 'tb_input_effectiveness');
        }

        // *********************  Merge data All post *********************
        // $post_datamerge=array_merge($post_data,$post_data2);
        $post_datamerge = array_merge($post_data, $post_data, $post_data3);

        // **********************  Simpan data ************************        
        $where = array('hdrid' => $hdrid);
        $this->M_template->Update_Data($where, $post_datamerge, 'tb_input_effectiveness');

        $data['status'] = "berhasil update";

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    // Untuk update table response

    public function ajax_updateres()
    {
        // Load library form validation
        $this->load->library('form_validation');

        // $this->form_validation->set_rules('yokotenkai', 'yokotenkai', 'required');

        // if($this->form_validation->run() == false)
        // {
        //     echo "VALIDATION RUNNING";
        // }
        // else
        // {
        // ********************* 1. Collect data post *********************
        $post_data = $this->input->post();
        $hdrid = $this->input->post('hdrid');
        $problem_id = $this->input->post('problem_id');
        $post_data3 = array('transaction_date' => mdate('%Y%m%d', time()));

        $msg = "success Update";

        // **********************  Upload file attach_file_1  *********************   
        if (!empty($_FILES['attach_file_1_res']['name'])) {
            $this->upload_file_attach2('attach_file_1_res', $hdrid, 'tb_response');
        }

        // **********************  Upload file attach_file_2  *********************   
        if (!empty($_FILES['attach_file_2_res']['name'])) {
            $this->upload_file_attach2('attach_file_2_res', $hdrid, 'tb_response');
        }

        // **********************  Upload file attach_file_3  *********************   
        if (!empty($_FILES['attach_file_3_res']['name'])) {
            $this->upload_file_attach2('attach_file_3_res', $hdrid, 'tb_response');
        }

        // **********************  Upload file verification_attach  *********************   
        if (!empty($_FILES['verification_attach']['name'])) {
            $this->upload_file_attach2('verification_attach', $hdrid, 'tb_response');
        }

        // **********************  Upload file validation_attach  *********************   
        if (!empty($_FILES['validation_attach']['name'])) {
            $this->upload_file_attach2('validation_attach', $hdrid, 'tb_response');
        }

        // **********************  Upload file normal_condition_attach_file  *********************   
        if (!empty($_FILES['normal_condition_attach_file']['name'])) {
            $this->upload_file_attach2('normal_condition_attach_file', $hdrid, 'tb_response');
        }

        // **********************  Upload file abnormal_condition_attach_file  *********************   
        if (!empty($_FILES['abnormal_condition_attach_file']['name'])) {
            $this->upload_file_attach2('abnormal_condition_attach_file', $hdrid, 'tb_response');
        }


        // *********************  Merge data All post *********************
        // $post_datamerge=array_merge($post_data,$post_data2);
        $post_datamerge = array_merge($post_data, $post_data, $post_data3);

        // **********************  Simpan data ************************        
        $where = array('hdrid' => $hdrid);
        $this->M_template->Update_Data($where, $post_datamerge, 'tb_response');

        $data['status'] = "berhasil update";

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }




    function view_data_positionpic()
    {

        // Ambil data dari post

        $hdrid = $this->input->get('hdrid');
        $nik = $this->session->userdata('user_name');
        $Approval1 = $this->input->get('Approval1');
        $Approval2 = $this->input->get('Approval2');

        $dataa = $this->M_template->ajax_getbyPosition($hdrid, $nik, 'tb_approval', $Approval1, $Approval2);

        if ($dataa->num_rows() > 0) {
            $data['status'] = "Ada";
        } else {
            $data['status'] = "Tidak ada";
        }

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }




    function ajax_approve()
    {
        // **********************  Set Data From Session User ************************ 
        $nik = str_replace(' ', '', $this->input->post('nik'));
        $name = str_replace(' ', '', $this->input->post('name'));
        $problem_id = str_replace(' ', '', $this->input->post('problem_id'));
        $position = str_replace(' ', '', $this->input->post('position'));

        // **********************  Get Current Date ************************ 
        $data3 = array('date_approve' => mdate('%Y-%m-%d %H:%i:%s', time()));

        $data2 = array('nik' => $nik, 'name' => $name, 'date_approve' => mdate('%Y-%m-%d %h:%i:%s', time()));

        // **********************  Where Condition ************************ 
        $where = array(
            'nik' => $nik,
            'problem_id' => $problem_id
        );

       // **********************  Update Data ************************ 
        $this->M_approver->Update_Data($where, $data2, 'tb_approval');

        $data['status'] = "berhasil approve";

        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function ajax_reject()
    {
        // **********************  Set Data From Session User ************************ 
        $rejected_by = str_replace(' ', '', $this->input->post('rejected_by'));

        // **********************  Form Rejection / PopUp Notification in View ************************ 
        $hdrid = $this->input->post('hdrid');
        $reason = $this->input->post('reason');

        // $tbreject=$this->input->post('tbreject');

        // Nama column berdasar table
        // $status_approve='status_approve_'.substr($tbreject,3,57);
        // $name_rejected='name_rejected_' . substr($tbreject,3,57);
        // $reason_rejected='reason_rejected_' . substr($tbreject,3,300);

        // $status_tb_ecr=strtoupper(substr($tbreject,3,57));
        // //kondisi upnormal untuk Proc menjadi PRC
        // if($status_tb_ecr=='PROC'){
        //     $status_tb_ecr='PRC';
        // }
        // $status_tb_ecr='status'. $status_tb_ecr;

       // **********************  Get Current Date ************************ 
        $data = array('rejected_by' => $rejected_by, 'reason' => $reason, 'date_rejected' => mdate('%Y-%m-%d %h:%i:%s', time()));
        // $data =array($status_approve=>'Rejected');

       // **********************  Where Condition ************************ 
        $where = array('hdrid' => $hdrid);

        // **********************  Update Data ************************ 
        $this->M_approver->Update_Data($where, $data, 'tb_input_problem');

        $data['status'] = 'Berhasil direject';

        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }





    /** ---------------------------------------------- /Close controller----------------------------------------------**/
}
