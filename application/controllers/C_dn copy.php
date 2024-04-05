<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dn extends CI_Controller {

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
     /** ---------------------------------------------- dn----------------------------------------------**/


    /// @see __construct() 
    /// @note untuk mengontrol semua function
    /// @attention jika mengubah beberapa function akan berpengaruh terhadap database
     public function __construct(){
        parent::__construct();  

        if ($this->session->userdata('user_name')=="") { // Jika username kosong(Belum login) maka
			redirect('Auth'); // Kembali ke halaman Auth
		}

        $this->load->helper('date'); // Load helper date fungsi tanggal
        $this->load->helper('file'); // Load helper date fungsi tanggal     
        $this->load->model('M_dn');// Load model
        $this->load->model('M_approver');// Load model
        $this->load->model('M_User');// Load model
        $this->load->model('UserModel');  //untuk load user model hak akses menu     
        $this->load->library('encryption');  //untuk encryp data
        // $this->load->library('encrypt');
        
        // Cari hak akses by controller
	    $Hak_akses = $this->UserModel->get_controller_access($this->session->userdata('role_id'),'C_dn'); 
	    if($Hak_akses->found!='found') {
		redirect('Auth'); // Kembali ke halaman Auth
	}
	

    }
    /// @see __index()
    /// @note fungsi index untuk membuat akses ke model
    /// @attention 
	public function Index()
	{

        $data['groups'] = $this->M_dn->get_tb_dn();
        $data['tb_department'] =$this->M_User->get_tb_department();

        // var_dump($data);
        // die;
        $data['nik'] = $this->M_dn->Tampil_nik();
        // $data['attention'] = ['Mr Sutrisme','Ms Intan Umami','Bapak Naim Aasori']; //untuk select filter attention
        // $data['attention_departement'] = ['Direktur','Accounting Departement','Finace Departement','Sales Departement']; //untuk select filter attention departement
        
        $menu_code = $this->input->get('var');  // Decrypt menu ID   untuk dekrip menu   
        $menu_name = $this->input->get('var2');  // Decrypt menu ID   untuk dekrip menu name  
        $data['menu_name'] =  $menu_name; 
        $data_akses['menu_akses']=$this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
        $data['hak_akses']=$this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export)

        $data['company_to'] = $this->M_dn->Tampil_company_to();// Menarik dan menampung ke data company to
        $data['account'] = $this->M_dn->Tampil_account();// Menarik dan menampung ke data account
        $data['transfer_to'] = $this->M_dn->Tampil_transfer_to();// Menarik dan menampung ke data transfer to
        $data['currency'] = $this->M_dn->Tampil_Currency();// Menarik dan menampung ke data currency
        $data['vat'] = $this->M_dn->Tampil_vat();// Menarik dan menampung ke data vat
        $data['director'] = $this->M_dn->Tampil_director();// Menarik dan menampung ke data director
        $data['tipe_transfer'] = $this->M_dn->Tampil_Tipe_Transfer();// Menarik dan menampung ke data tipe_transfer
        $data['payee_code'] = $this->M_dn->Tampil_Payee_Code();// Menarik dan menampung ke data payee_code
        $data['finish_settlement_dn_bank'] = $this->M_dn->Tampil_Bank();// Menarik dan menampung ke data finish_settlement_dn_bank
        $data['tb_account_adv'] = $this->M_dn->tb_account_adv();// Menarik dan menampung ke data bank
        $data['use_budget']=['Own','Other Dept/Section'];
        $data['department'] =$this->M_dn->Tampil_department();
    
        $this->load->view('templates/header'); //Tampil header
		$this->load->view('templates/sidebar',$data_akses); //Tampil Sidebar
		// // $this->load->view('dn/V_dn',$data); // Tampil data
        $this->load->view('dn/V_dn',$data); // Tampil data
        $this->load->view('templates/footer'); // Tampil footer

    }

    /// @see view_data()
    /// @note untuk melihat data pada database
    /// @attention jika tidak sesuai table maka akan terjadi error pada web
     function view_data()
     {
        
        $tables = "tb_dn"; //table dn
        $search = array('hdrid','date_of_issue','name','nik','status_transaction','section','company_to','company_address','attention','attention_departement','detail_request','reference','budget','account','payment_terms','banyak_cicilan','transfer_to','transfer_address','currency','idr','usd','eur','swift_code','account_name','amount','amount_total','amount_in_word','dpp','vat','vat_persen','vat_nominal','vat_total','dmia_bank_account','transfer_name','bank_name','account_number','attachment1','attachment2','attachment3','attachment4','director','title','approver_dept_user','approver_dept_finance','finish_settlement_dn_bank','finish_settlement_dn_amount','finish_settlement_dn_date','start_month');//isi table dn
        
        // jika memakai IS NULL pada where sql
         $isWhere = null;
         // $isWhere = 'artikel.deleted_at IS NULL';
         header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
         echo $this->M_dn->get_tables($tables,$search,$isWhere); // Mengambil data dari database
         
     }

    /// @see view_data_where()
    /// @note untuk mencari data di database
    /// @attention ika tidak sesuai table maka akan terjadi error pada web
    // Satu table dengan where
    function view_data_where()
    {
   

        $nik= $this->session->userdata('user_name'); // Menarik username dari session dan menampung nya sebagai nik
        $name= $this->session->userdata('nama'); // Menarik username dari session dan menampung nya sebagai nik
        // var_dump($name);
        

        // $tables = "tb_dn";  
        $menu_name=$this->input->post('menu_name'); // Ambil input post menu_name
        if ($menu_name=='Add Debit Note') { // Kondisi jika menu_name = Add settlement

            if($this->session->userdata('rolename')=='Administrator FA'){
                    $tables = "fn_view_add_dn('')"; // Terbuka semua tanpa user
            }else{
                    $tables = "fn_view_add_dn('$nik')"; // Maka table yang dipakai
            }

        }else if ($menu_name=='Approval Debit Note') { // Kondisi jika menu_name = Approval advance

            $tables = "fn_view_app_dn('$name')"; // Maka table yang dipakai

        }else if ($menu_name=='Summary Debit Note') { // Kondisi jika menu_name = Summary advance FA Closing advance

            $tables = "tb_dn"; // Maka table yang dipakai

        }else if ($menu_name=='Settlement Debit Note') { // Kondisi jika menu_name = Summary advance 

            $tables = "fn_view_set_dn()"; // Maka table yang dipakai

        }else { // Kondisi lainnya
            $tables = "tb_dn"; // Maka table yang dipakai
        }
        
        // $search = array('hdrid','date_of_issue','name','nik','status_transaction','section','company_to','company_address','attention','attention_departement','detail_request','reference','budget','account','payment_terms','banyak_cicilan','transfer_to','transfer_address','currency','idr','usd','eur','swift_code','account_name','amount','amount_total','amount_in_word','dpp','vat','vat_persen','vat_nominal','vat_total','dmia_bank_account','transfer_name','bank_name','account_number','attachment1','attachment2','attachment3','attachment4','director','title','approver_dept_user','approver_dept_finance','finish_settlement_dn_bank','finish_settlement_dn_amount','finish_settlement_dn_date');//isi table dn
        $search = array('hdrid','date_of_issue','name','nik','status_transaction','section','company_to','company_address','attention','attention_departement','detail_request','reference','budget','account','payment_terms','banyak_cicilan','transfer_to','transfer_address','currency','idr','usd','eur','swift_code','account_name','amount','amount_total','amount_in_word','dpp','vat','vat_persen','vat_nominal','vat_total','dmia_bank_account','transfer_name','bank_name','account_number','attachment1','attachment2','attachment3','attachment4','director','title','approver_dept_user','approver_dept_finance','finish_settlement_dn_bank','finish_settlement_dn_amount','finish_settlement_dn_date','start_month');//isi table dn
        

        if($_POST['searchByFromdate']==''||$_POST['searchByTodate']==''){ //pencarian melalui tanggal
            $where  = array('transaction_date >'=>'2020-01-01');              
        }else{
            $where  = array('transaction_date >' => $_POST['searchByFromdate'],'transaction_date <' => $_POST['searchByTodate']);
        };
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
        echo $this->M_dn->get_tables_where($tables,$search,$where,$isWhere); // Mengambil data dari database
        
    }



    /// @see view_data_whereapproval()
    /// @note untuk mencari tb approval
    /// @attention
    function view_data_whereapproval()
    {
        
        $tables = "tb_approval"; // Table yang digunakan     
        
        // $nikSession=$this->session->userdata('user_name');
        
        $hdrid = $this->input->post('hdrid'); // Tarik input post hdrid
        $search = array('nik','name','department_code','department_name','office_email','position_code','position_name','date_approve'); // Column-column yang akan digunakan sebagai kondisi search query
        $where  = array('hdrid' => $hdrid); // Array untuk menjadi kondisi yang akan dikirimkan ke model
        $isWhere = null; // Jika memakai IS NULL pada where sql
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json'); // Memberi tahu browser bahwa data dalam bentuk format json
        echo $this->M_dn->get_tables_where($tables, $search, $where, $isWhere); // Mengambil data dari database
    }

    
    //    if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
    //     }else{
    //     redirect('auth');
    //     }


    /// @see ajax_add()
    /// @note fungsi untuk menginput data debit note
    /// @attention
    public function ajax_add()
	{

        // ********************* 0. Generate nomor transaksi  *********************          
        $mdate="DN".mdate('%y',time())."/"; // Buat format untuk hdrid ADV berdasarkan Tgl dan tahun 
        $hdrid2=$this->M_dn->Max_data($mdate,'tb_dn')->row();     
        if ($hdrid2->hdrid==NULL){ // Jika hdrid kosong
            // Jika belum ada
           $hdrid3=$mdate."001";// Jika belum ada = 001
        }else{
           $hdrid3=$hdrid2->hdrid; // Jika sudah ada hdrid maka akan tetap sama
           $nomor=intval(substr($hdrid3,5,10))+1;
           $nomor=str_pad($nomor,3,"0",STR_PAD_LEFT);
           $hdrid3=$mdate.$nomor;// Jika sudah ada maka naik 1 level
        }
        $hdrid=$hdrid3; // hdrid=hdrid
       
        // ********************* 1. Set hdrid  *********************
        $post_data2=array('hdrid'=>$hdrid3); // Buat array untuk set hdrid

        // ********************* 2. Transaction date  *********************
        $post_data3=array('transaction_date'=>mdate('%Y-%m-%d',time()));
        $post_data_transaction_date = mdate('%Y-%m-%d', time()); // menampung tahun bulan hari jam 
                
         // ******************** 3. Collect all data post *********************     
        $post_data = $this->input->post();  // Tarik semua data input post 
        $msg = "success save"; // Menampung message untuk notif
              
        // ********************* 4. Merge data post *********************        
        $post_datamerge=array_merge($post_data,$post_data2,$post_data3);  // Menggabungkan semua data post 

        // ********************* 5. Simpan data     *********************
        $this->M_dn->Input_Data($post_datamerge,'tb_dn'); //Simpan data
        
        // // ********************* 6. Simpan data aproval     *********************
        // $this->M_dn->Input_Data_Approver($hdrid3,$this->input->post('nik'));
        // $nominal=$this->input->post('nominal'); // Tarik data input post nominal
       
        // $this->M_dn->Input_Data_Approver($nominal,$post_data_transaction_date,$hdrid,$this->input->post('nik')); // Mengirim data ke model untuk query menambah data approver
        $this->M_dn->Add_List_Approver($post_data_transaction_date,$hdrid,$this->input->post('nik')); // Mengirim data ke model untuk query menambah data approver

        $month=$this->input->post('start_month');  // Tarik data input post start_month
        $cicilan=$this->input->post('banyak_cicilan');  // Tarik data input post banyak_cicilan
        $amount_total=$this->input->post('amount_total');  // Tarik data input post amount_total
        $payment_terms=$this->input->post('payment_terms');  // Tarik data input post payment_terms

        $this->M_dn->Add_cicilan($cicilan,$month,$amount_total,$payment_terms,$hdrid); // Mengirim data ke model untuk menambah data ke tb cicilan
       
        // ********************* 7. Upload file jika ada  *********************   
        if(!empty($_FILES['attachment1']['name']))
        {
          $this->upload_file_attach('attachment1',$hdrid,'tb_dn');
        }
        if(!empty($_FILES['attachment2']['name']))
        {
            $this->upload_file_attach('attachment2',$hdrid,'tb_dn');
        }
        if(!empty($_FILES['attachment3']['name']))
        {
            $this->upload_file_attach('attachment3',$hdrid,'tb_dn');
        }
        if(!empty($_FILES['attachment4']['name']))
        {
            $this->upload_file_attach('attachment4',$hdrid,'tb_dn');
        }
        if(!empty($_FILES['attachment4']['name']))
        {
            $this->upload_file_attach('attachment4',$hdrid,'tb_dncn');
        }

        $data['status'] = $hdrid; //status
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));

    }
    
    /// @see ajax_update()
    /// @note untuk update data pada debit note
    /// @attention
    public function ajax_update()
	{

         // ********************* 1. Collect data post *********************
        $post_data = $this->input->post(); // Tarik data input post
        $hdrid=$this->input->post('hdrid'); // Tarik data input post hdrid
  

        $msg = "success Update"; //message ketika berhasil update

        // **********************  Upload file (filename,hdrid,table)  *********************   
        if(!empty($_FILES['attachment1']['name']))
        {
          $this->upload_file_attach('attachment1',$hdrid,'tb_dn');
        }
 if(!empty($_FILES['attachment2']['name']))
        {
          $this->upload_file_attach('attachment2',$hdrid,'tb_dn');
        }
 if(!empty($_FILES['attachment3']['name']))
        {
          $this->upload_file_attach('attachment3',$hdrid,'tb_dn');
        }
 if(!empty($_FILES['attachment4']['name']))
        {
          $this->upload_file_attach('attachment4',$hdrid,'tb_dn');
        }
 if(!empty($_FILES['attachment4']['name']))
        {
          $this->upload_file_attach('attachment4',$hdrid,'tb_dn');
        }
                
        // *********************  Merge data All post *********************
        $post_datamerge=array_merge($post_data,$post_data);//menggabungkan semua data
        $post_data_transaction_date = mdate('%Y-%m-%d', time()); // menampung tahun bulan hari jam 

        
        $month=$this->input->post('start_month');  // Tarik data input post start_month
        $cicilan=$this->input->post('banyak_cicilan');  // Tarik data input post banyak_cicilan
        $amount_total=$this->input->post('amount_total');  // Tarik data input post amount_total
        $payment_terms=$this->input->post('payment_terms');  // Tarik data input post payment_terms

        $this->M_dn->Add_cicilan_update($cicilan,$month,$amount_total,$payment_terms,$hdrid); // Mengirim data ke model untuk update data ke tb cicilan

        // **********************  Simpan data ************************        
        $where = array('hdrid' => $hdrid);// Buat kondisi where untuk dikirim ke model   
        $this->M_dn->Update_Data($where,$post_datamerge,'tb_dn');// Buat kondisi where untuk dikirim ke model
        

        // $data['status']="berhasil update";// Menarik dan menampung $msg menjadi status
        $data['status'] = $hdrid; // Menarik dan menampung $msg menjadi status

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data));// Mengembalikan nilai data format json

    }

    /// @see ajax_delete()
    /// @note untuk mendelete data pada debit note
    /// @attention
    public function ajax_delete() //function untuk delete
	{

         
        $where = array('hdrid' => $this->input->post('hdrid')); // Buat array untuk kondisi where di query model 
        $this->M_dn->Delete_Data($where,'tb_dn'); // Mengirim param ke model untuk query delete

        $where = array('hdrid' => $this->input->post('hdrid')); // Buat array untuk kondisi where di query model 
        $this->M_dn->Delete_Data($where,'tb_approval'); // Mengirim param ke model untuk query delete

        $where = array('hdrid' => $this->input->post('hdrid')); // Buat array untuk kondisi where di query model 
        $this->M_dn->Delete_Data($where,'tb_cicilan_dn'); // Mengirim param ke model untuk query delete

        $data['status']="berhasil dihapus"; //pesan saat berhasil dihapus
        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // mengembalikkan nilai dari format json

    }

    /// @see ajax_cekdup()
    /// @note untuk cek user reference
    /// @attention
    public function ajax_cekdup() 
	{
        $where = array('reference' => $this->input->post('reference')); // Buat array untuk kondisi where di query model 

        $hasil=$this->M_dn->cek_duplicate($where,'tb_dn'); // Mengirim param ke model untuk query delete

        $data['status']=$hasil; //pesan saat berhasil dihapus

        // return value array
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // mengembalikkan nilai dari format json

    }


    /// @see ajax_return()
    /// @note untuk return repot
    /// @attention
    function ajax_return()
    {

        $hdrid = $this->input->post('hdrid'); // Mengambil input post hdrid

        $data = array('report' => "Need report"); // Buat array untuk field yang akan di update di query model
        // Where condition
        $where = array('hdrid' => $hdrid); // Buat array untuk kondisi where di query model

        // Update data tb_dn
        $this->M_dn->Update_Data($where, $data, 'tb_dn'); // Mengirim param ke model 

        $data['status'] = 'Berhasil Return'; // Menampung variable message menjadi status 

        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json

    }
    
    /// @see ajax_find_responsible()
    /// @note untuk membuat fungsi responsible
    /// @attention
    function ajax_find_responsible()
    {
    
        $hdrid = str_replace(' ', '', $this->input->get('hdrid'));   // mengambil data dari hdrid  
        $status_transaction=$this->M_approver->ajax_find_responsible($hdrid); // Mengirim param ke model untuk query
        $data['status'] = $status_transaction;// status
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); // mengembalikkan nilai dari format json

    }

    /// @see ajax_find_approver()
    /// @note untuk mencari approver
    /// @attention
    function ajax_find_approver()
    {
        
    $hdrid = str_replace(' ', '', $this->input->get('hdrid'));  // mengambil data dari hdrid  
    $status_transaction=$this->M_approver->ajax_find_approver($hdrid);// Mengirim param ke model untuk query 
    $data['status'] = $status_transaction;// status
    $this->output->set_content_type('application/json')->set_output(json_encode($data)); // mengembalikkan nilai dari format json

    }
 
    /// @see ajax_getbyhdrid()
    /// @note untuk mencari hdrid
    /// @attention
    function ajax_getbyhdrid(){      

        $hdrid=$this->input->get('hdrid'); //mengambil dari hdrid
        $data=$this->M_dn->ajax_getbyhdrid($hdrid,'tb_dn')->row();// Mengirim param ke model untuk query 
        echo json_encode($data);// mengembalikkan nilai dari format daTA json

    }

    /// @see ajax_getapproval()
    /// @note  untuk mendapatkan approval
    /// @attention
    function ajax_getapproval(){      

        $hdrid = $this->input->get('hdrid'); // Mengambil hdrid_pc

        $query = $this->db->query("select top 1 * from tb_approval where hdrid='$hdrid' and date_approve is null order by position_code asc"); // Query untuk mencari approver dengan kondisi date_approve kosong
        if ($query->num_rows() > 0) {
            echo json_encode($query->row()); // Mengembalikan nilai data format json       
        }else{
            $query = (object) array('name'=>'not found','position_code'=>'not found','nik'=>'not found');            
            echo json_encode($query); // Mengembalikan nilai data format json
        }

    }

    /// @see ajax_getapproval_dn()
    /// @note untuk mendapatkan approval
    /// @attention
    function ajax_getapproval_dn(){      

        $hdrid = $this->input->get('hdrid'); // Mengambil hdrid

        $query = $this->db->query("select top 1 * from tb_approval where hdrid='$hdrid' and date_approve is null order by position_code asc"); // Query untuk mencari approver dengan kondisi date_approve kosong 
        if ($query->num_rows() > 0) {  
            $query=$query->row();
            $data['nik'] = $query->nik;// Menampung data sesuai dengan hasil query
            $data['name'] = $query->name;// Menampung data sesuai dengan hasil query
            $data['position_code'] = $query->position_code;// Menampung data sesuai dengan hasil query
            $this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json
            
        }else{
        
            $data['nik'] = ""; // Apabila tidak dapat
            $data['name'] = ""; // Apabila tidak dapat
            $data['position_code'] = ""; // Apabila tidak dapat
            $this->output->set_content_type('application/json')->set_output(json_encode($data)); // Mengembalikan nilai data format json
        }

    }



    /// @see upload_file_attach()
    /// @note untuk upload file attachment
    /// @attention
    function upload_file_attach($filename,$hdrid,$table){

        if(!empty($_FILES[$filename]['name']))
        {
          
            $config['upload_path'] = './assets/upload/dn/';  // Configurasi folder yang ingin dijadikan penyimpanan untuk upload file 
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg|txt'; // Configurasi tipe yang bisa di upload         
            $config['overwrite'] = True; // Configurasi agar bisa di ubah           
            $config['max_size']  = '1000000'; // Configurasi max size dari file yang di upload
            $config['max_width']  = '1024';// Configurasi lebar dari file yang di upload
            $config['max_height']  = '768';// Configurasi tinggi dari file yang di upload
            $config['file_name']=$hdrid.'_'.$filename;// Configurasi nama sesuai format hdrid dan juga file name
            $this->load->library('upload', $config); // Load library untuk upload file
            $this->upload->initialize($config); 

            if ( ! $this->upload->do_upload($filename)){
                // $status = "error";
                 $msg = $this->upload->display_errors();  // Munculkan notif error
            }
            else{
                 $msg = "success upload"; // Menampung message untuk notif

                $dataupload = $this->upload->data(); // Upload data 
                // $status = "success";
                // $msg = $dataupload['file_name']." berhasil diupload";                      
                $data_update = array($filename =>$dataupload['file_name']); // Buat array   
               
                $where = array('hdrid' => $hdrid);  // Buat array untuk kondisi di query model        
                $this->M_dn->Update_Data($where,$data_update,$table); // Kirim semua parameter ke model

            }

        }

    }
   /// @see upload_file_attach2()
    /// @note untuk upload file attachment2
    /// @attention
    function upload_file_attach2($filename,$hdrid,$table){

        if(!empty($_FILES[$filename]['name']))
        {
          
            $config['upload_path'] = './assets/upload/dn';  // Configurasi folder yang ingin dijadikan penyimpanan untuk upload file 
            $config['allowed_types'] = 'gif|jpg|png|pdf|jpeg|txt'; // Configurasi tipe yang bisa di upload         
            $config['overwrite'] = True; // Configurasi agar bisa di ubah           
            $config['max_size']  = '1000000'; // Configurasi max size dari file yang di upload
            $config['max_width']  = '1024';// Configurasi lebar dari file yang di upload
            $config['max_height']  = '768';// Configurasi tinggi dari file yang di upload
            $config['file_name']=$hdrid.'_'.$filename;// Configurasi nama sesuai format hdrid dan juga file name
            $this->load->library('upload', $config); // Load library untuk upload file
            $this->upload->initialize($config); 

            if ( ! $this->upload->do_upload($filename)){
                // $status = "error";
                 $msg = $this->upload->display_errors();  // Munculkuan notif error
            }
            else{
                 $msg = "success upload"; // Menampung message untuk notif

                $dataupload = $this->upload->data(); // Upload data 
                // $status = "success";
                // $msg = $dataupload['file_name']." berhasil diupload";                      
                $data_update = array($filename =>$dataupload['file_name']); // Buat array   
               
                $where = array('hdrid' => $hdrid);  // Buat array untuk kondisi di query model        
                $this->M_dn->Update_Data($where,$data_update,$table); // Kirim semua parameter ke model

            }

        }

    }
    
    /// @see import()
    /// @note fungsi untuk membuat import data ke debit note
    /// @attention
    public function import() { //fungsi untuk import

		// $this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {

			$this->session->set_flashdata('msg', 'File harus diisi');
            redirect('C_dn'); //kembali ke C_dn

		} else {

			$config['upload_path'] = './assets/excel/'; //upload tipe excel
			$config['allowed_types'] = 'xls|xlsx'; //tipe data excel
			
			$this->load->library('upload', $config); //untuk fungsi upload
			
			if ( ! $this->upload->do_upload('excel')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{

				$data = $this->upload->data();
				
				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' .$data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

				$index = 0;

				foreach ($sheetData as $key => $value) {

                     if ($index > 1 && ucwords($value['D'])!='' ) {


                        // ********************* 0. Generate nomor transaksi  *********************          
                        
                            // Cari database sekali saja
                            if($index==2){
                                $mdate="ADV".mdate('%Y%m',time());        
                                $hdrid2=$this->M_dn->Max_data($mdate,'tb_dn')->row();  
                                if ($hdrid2->hdrid==NULL){
                                    // Jika belum ada
                                $hdrid3=$mdate."001";
                                //    $resultData[$index]['hdrid'] =   $hdrid3;
                                }else{
                                    $hdrid3=$hdrid2->hdrid;
                                    // Jika sudah ada maka naik 1 level
                                    $hdrid3="ADV".(intval(substr($hdrid3,3,10))+1);
                                    // $resultData[$index]['hdrid'] =   $hdrid3;    
                                }

                            }else{
                                $hdrid3="ADV".(intval(substr($hdrid3,3,10))+1);
                            }

                            $resultData[$index]['hdrid'] =   $hdrid3;  
                            $resultData[$index]['transaction_date'] = mdate('%Y-%m-%d',time());    

                            // ---------------------------------- Import Macro Batas sini 1---------------------------------
                        
                            $resultData[$index]['date_of_issue'] = ucwords($value['A']);	
                            $resultData[$index]['name'] = ucwords($value['A']);	
                            $resultData[$index]['nik'] = ucwords($value['A']);	
                            $resultData[$index]['section'] = ucwords($value['A']);	
                            $resultData[$index]['company_to'] = ucwords($value['A']);	
                            $resultData[$index]['company_address'] = ucwords($value['A']);	
                            $resultData[$index]['attention'] = ucwords($value['A']);	
                            $resultData[$index]['attention_departement'] = ucwords($value['A']);	
                            $resultData[$index]['detail_request'] = ucwords($value['A']);	
                            $resultData[$index]['reference'] = ucwords($value['A']);	
                            $resultData[$index]['budget'] = ucwords($value['A']);	
                            $resultData[$index]['account'] = ucwords($value['A']);	
                            $resultData[$index]['payment_terms'] = ucwords($value['A']);	
                            $resultData[$index]['banyak_cicilan'] = ucwords($value['A']);	
                            $resultData[$index]['transfer_to'] = ucwords($value['A']);	
                            $resultData[$index]['transfer_address'] = ucwords($value['A']);	
                            $resultData[$index]['currency'] = ucwords($value['A']);	
                            $resultData[$index]['idr'] = ucwords($value['A']);	
                            $resultData[$index]['usd'] = ucwords($value['A']);	
                            $resultData[$index]['eur'] = ucwords($value['A']);	
                            $resultData[$index]['swift_code'] = ucwords($value['A']);	
                            $resultData[$index]['account_name'] = ucwords($value['A']);	
                            $resultData[$index]['amount'] = ucwords($value['A']);	
                            $resultData[$index]['amount_total'] = ucwords($value['A']);	
                            $resultData[$index]['amount_in_word'] = ucwords($value['A']);	
                            $resultData[$index]['dpp'] = ucwords($value['A']);	
                            $resultData[$index]['vat'] = ucwords($value['A']);	
                            $resultData[$index]['vat_persen'] = ucwords($value['A']);	
                            $resultData[$index]['vat_nominal'] = ucwords($value['A']);	
                            $resultData[$index]['vat_total'] = ucwords($value['A']);	
                            $resultData[$index]['dmia_bank_account'] = ucwords($value['A']);	
                            $resultData[$index]['transfer_name'] = ucwords($value['A']);	
                            $resultData[$index]['bank_name'] = ucwords($value['A']);	
                            $resultData[$index]['account_number'] = ucwords($value['A']);	
                            $resultData[$index]['attachment1'] = ucwords($value['A']);	
                            $resultData[$index]['attachment2'] = ucwords($value['A']);	
                            $resultData[$index]['attachment3'] = ucwords($value['A']);	
                            $resultData[$index]['attachment4'] = ucwords($value['A']);	
                            $resultData[$index]['director'] = ucwords($value['A']);	
                            $resultData[$index]['title'] = ucwords($value['A']);	
                            $resultData[$index]['approver_dept_user'] = ucwords($value['A']);	
                            $resultData[$index]['approver_dept_finance'] = ucwords($value['A']);	
                            $resultData[$index]['finish_settlement_dn_bank'] = ucwords($value['A']);	
                            $resultData[$index]['finish_settlement_dn_amount'] = ucwords($value['A']);	
                            $resultData[$index]['finish_settlement_dn_date'] = ucwords($value['A']);	
                            
                            
                            
                                                                                 

                     }

					$index++;

				}

				unlink('./assets/excel/' .$data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_dn->insert_batch('tb_dn',$resultData);
					if ($result > 0) {
						// $this->session->set_flashdata('msg', show_succ_msg('Data Legalitas Perusahaan Berhasil diimport ke database'));
						redirect('C_dn'); // Kembali ke halaman C_dn
					}
				} else {
                        // $this->session->set_flashdata('msg', show_msg('Data Legalitas Perusahaan Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
                        redirect('C_dn');// Kembali ke halaman C_dn
				}

			}
		}
	}
    
    /** ---------------------------------------------- /Close controller----------------------------------------------**/

}
