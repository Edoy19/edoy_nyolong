<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Dashboard_new extends CI_Controller {

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

    /** ---------------------------------------------- Employee----------------------------------------------**/

	public function __construct(){
        parent::__construct();   

        if ($this->session->userdata('user_name')=="") {
			redirect('Auth');
		}

        $this->load->helper('date');
        $this->load->helper('file');        
        $this->load->model('M_Dashboard_new');
        // $this->load->library('encrypt');    

		$this->load->model('UserModel');  //untuk load user model hak akses menu     
        $this->load->library('encryption');  //untuk encryp data
            
    }




	public function Index()
	{
	
        if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
			
					
			$menu_code = $this->encryption->decrypt($this->input->get('var'));  // Decrypt menu ID   untuk dekrip menu   
			$data_akses['menu_akses']=$this->UserModel->get_menu_access($this->session->userdata('role_id'));  //Menu akses untuk munculkan menu   
			$data_akses['hak_akses']=$this->UserModel->get_hak_access($this->session->userdata('role_id'), $menu_code); //button akses(Add,Adit,View,Delete,Import,Export) 
		
			/** -----------------------------Memanggil Function Dari Model-----------------------------------**/
			$data['group_product']=$this->M_Dashboard_new->get_data_group_product();

			$data['group_product_company']=$this->M_Dashboard_new->get_data_group_product_where('Company');
			$data['group_product_body']=$this->M_Dashboard_new->get_data_group_product_where('Body');
			$data['group_product_power_train']=$this->M_Dashboard_new->get_data_group_product_where('PowerTrain');
			$data['group_product_thermal']=$this->M_Dashboard_new->get_data_group_product_where('Thermal');
			$data['group_product_wiper_washer']=$this->M_Dashboard_new->get_data_group_product_where('Wiper Washer');
			$data['group_product_logistic']=$this->M_Dashboard_new->get_data_group_product_where('Logistic');
			$data['group_product_supplier']=$this->M_Dashboard_new->get_data_group_product_where('Supplier');

			$data['no_claims']=$this->M_Dashboard_new->get_data_no_claim();

            $data['no_claims_company']=$this->M_Dashboard_new->get_data_no_claim_where('Company');
            $data['no_claims_body']=$this->M_Dashboard_new->get_data_no_claim_where('Body');
			$data['no_claims_power_train']=$this->M_Dashboard_new->get_data_no_claim_where('PowerTrain');
			$data['no_claims_thermal']=$this->M_Dashboard_new->get_data_no_claim_where('Thermal');
			$data['no_claims_wiper_washer']=$this->M_Dashboard_new->get_data_no_claim_where('Wiper Washer');
            $data['no_claims_logistic']=$this->M_Dashboard_new->get_data_no_claim_where('Logistic');
            $data['no_claims_supplier']=$this->M_Dashboard_new->get_data_no_claim_where('Supplier');
			
            $data['fiscal_years_claim']=$this->M_Dashboard_new->get_data_fical_years();

            $data['fiscal_years_claim_company']=$this->M_Dashboard_new->get_data_fical_years_where('Company');
            $data['fiscal_years_claim_Body']=$this->M_Dashboard_new->get_data_fical_years_where('Body');
            $data['fiscal_years_claim_Power_Train']=$this->M_Dashboard_new->get_data_fical_years_where('PowerTrain');
            $data['fiscal_years_claim_Thermal']=$this->M_Dashboard_new->get_data_fical_years_where('Thermal');
            $data['fiscal_years_claim_Wiper']=$this->M_Dashboard_new->get_data_fical_years_where('Wiper Washer');
            $data['fiscal_years_claim_Logistic']=$this->M_Dashboard_new->get_data_fical_years_where('Logistic');
            $data['fiscal_years_claim_Supplier']=$this->M_Dashboard_new->get_data_fical_years_where('Supplier');
            
			$data['data_mixed_chart']=$this->M_Dashboard_new->get_data_mixed_chart();

			$data['data_mixed_chart_company']=$this->M_Dashboard_new->get_data_mixed_chart_where('Company');
			$data['data_mixed_chart_Body']=$this->M_Dashboard_new->get_data_mixed_chart_where('Body');
			$data['data_mixed_chart_Power_Train']=$this->M_Dashboard_new->get_data_mixed_chart_where('PowerTrain');
			$data['data_mixed_chart_Thermal']=$this->M_Dashboard_new->get_data_mixed_chart_where('Thermal');
			$data['data_mixed_chart_Wiper']=$this->M_Dashboard_new->get_data_mixed_chart_where('Wiper Washer');
			$data['data_mixed_chart_Logistic']=$this->M_Dashboard_new->get_data_mixed_chart_where('Logistic');
			$data['data_mixed_chart_Supplier']=$this->M_Dashboard_new->get_data_mixed_chart_where('Supplier');
            

			$data['data_mixed_chart2']=$this->M_Dashboard_new->get_data_mixed_chart2();

			$data['data_mixed_chart2_company']=$this->M_Dashboard_new->get_data_mixed_chart2_where('Company');
			$data['data_mixed_chart2_Body']=$this->M_Dashboard_new->get_data_mixed_chart2_where('Body');
			$data['data_mixed_chart2_Power_Train']=$this->M_Dashboard_new->get_data_mixed_chart2_where('PowerTrain');
			$data['data_mixed_chart2_Thermal']=$this->M_Dashboard_new->get_data_mixed_chart2_where('Thermal');
			$data['data_mixed_chart2_Wiper_Washer']=$this->M_Dashboard_new->get_data_mixed_chart2_where('Wiper Washer');			
			$data['data_mixed_chart2_Supplier']=$this->M_Dashboard_new->get_data_mixed_chart2_where('Supplier');
			
			$data['calendar_no_claims']=$this->M_Dashboard_new->get_data_no_claim_calendar();
			$data['calendar_no_claims2']=$this->M_Dashboard_new->get_data_no_claim_calendar_v2();
		

			// PPM Data (3 FY) 
			$data['ppm_data_fy']=$this->M_Dashboard_new->get_data_for_ppm_data();

			$data['ppm_data_fy_company']=$this->M_Dashboard_new->get_data_for_ppm_data_where('Company');
			$data['ppm_data_fy_Body']=$this->M_Dashboard_new->get_data_for_ppm_data_where('Body');
			$data['ppm_data_fy_Power_Train']=$this->M_Dashboard_new->get_data_for_ppm_data_where('Power Train');
			$data['ppm_data_fy_Thermal']=$this->M_Dashboard_new->get_data_for_ppm_data_where('Thermal');
			$data['ppm_data_fy_Wiper']=$this->M_Dashboard_new->get_data_for_ppm_data_where('Wiper Washer');
			$data['ppm_data_fy_Logistic']=$this->M_Dashboard_new->get_data_for_ppm_data_where('Logistic');
			$data['ppm_data_fy_Supplier']=$this->M_Dashboard_new->get_data_for_ppm_data_where('Supplier');

			// Case Data by Group product (3 FY) 
			// $data['case_group_product']=$this->M_Dashboard_new->get_data_for_case_data_by_group_product();

			$data['case_group_product_Company']=$this->M_Dashboard_new->get_data_for_case_data_by_group_product_where_new('Company');			
			$data['case_group_product_Body']=$this->M_Dashboard_new->get_data_for_case_data_by_group_product_where_new('Body');
			$data['case_group_product_Power_Train']=$this->M_Dashboard_new->get_data_for_case_data_by_group_product_where_new('Power Train');
			$data['case_group_product_Thermal']=$this->M_Dashboard_new->get_data_for_case_data_by_group_product_where_new('Thermal');
			$data['case_group_product_Wiper']=$this->M_Dashboard_new->get_data_for_case_data_by_group_product_where_new('Wiper Washer');
			$data['case_group_product_Logistic']=$this->M_Dashboard_new->get_data_for_case_data_by_group_product_where_new('Logistic');
			$data['case_group_product_Supplier']=$this->M_Dashboard_new->get_data_for_case_data_by_group_product_where_new('Supplier');
			$data['case_group_product_General']=$this->M_Dashboard_new->get_data_for_case_data_by_group_product_where_new('General');


			/** ----------------------------- Akhir Memanggil Function Dari Model -----------------------------------**/
			
			$this->load->view('templates/header'); //Tampil header
			$this->load->view('templates/sidebar',$data_akses); //Tampil Sidebar
			$this->load->view('V_dashboard_new', $data); // Tampil data
			$this->load->view('templates/footer'); // Tampil footer
			        
        }else{

            redirect('auth');

		}
		
	}
		
	public function Details_User($NoPegawai) 
	{

        if($this->session->userdata('authenticated')){ // Jika user sudah login (Session authenticated ditemukan)
             
        //$this->load->Model('M_Employee');
		$details=$this->M_Dashboard_new->GetNameEmployee($NoPegawai);
        $data['Nameemp'] =$details;      
        $this->load->view('templates1/header');
		$this->load->view('templates1/sidebar');
		$this->load->view('employee/V_EmployeeDetails',$data);
        $this->load->view('templates1/footer');     
        
        }else{

        redirect('auth');

        }

    }

	function load_full_calender()
	{
		$event_data = $this->M_Dashboard_new->fetch_all_event_full_calender();
		foreach($event_data->result_array() as $row)
			{
				$data[] = array(
					'id' => $row['id'],
					'title' => $row['title'],
					'start' => $row['start_event'],
					'end' => $row['end_event']
				);
			}
		echo json_encode($data);
	}

	




    /** ---------------------------------------------- /Employee----------------------------------------------**/

}