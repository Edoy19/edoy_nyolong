<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard_new extends CI_Model {

    function fetch_all_event_full_calender(){
        $this->db->order_by('id');
        return $this->db->get('events');
    }
   

    // Get all data Group Product
    function get_data_group_product(){

        $sql="SELECT group_product_name, count(*) as total from tb_input_problem where group_product_name IS NOT NULL AND problem_name IS NOT NULL AND group_product_name !='' 
        AND transaction_date between 
                    CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
                    ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
                    END and CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
                    ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
                    END
        group by group_product_name";
        $query = $this->db->query($sql);
        return $query->result_array();

    }

    
     // Get all data Group Product using Where
     function get_data_group_product_where($where){
        $sql="SELECT problem_name, count(*) as total from tb_input_problem where group_product_name='$where' and problem_name IS NOT NULL AND transaction_date between 
        CASE 
        WHEN DATEPART(MM, GETDATE())>3
        THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
        ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
        END and CASE 
        WHEN DATEPART(MM, GETDATE())>3
        THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
        ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
        END
        group by problem_name";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // Get data berapa hari no claim untuk chart
    function get_data_no_claim(){
        $sql="  SELECT DATEDIFF ( DAY , max(transaction_date) , getdate()) as day
        FROM tb_input_problem where problem_name='external'";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // Get data berapa hari no claim untuk chart WHERE
    function get_data_no_claim_where($where){
        $sql="  SELECT group_product_name,DATEDIFF ( DAY , max(transaction_date) , getdate()) as day
        FROM tb_input_problem WHERE group_product_name = '$where' and problem_name='external'
		group by group_product_name";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

      // Get data berapa hari no claim untuk calendar
      function get_data_no_claim_calendar(){

        // $sql="  SELECT 
        //     MAX(transaction_date) as startDate,
        //     CAST( GETDATE() AS Date ) AS endDate
        // FROM 
        //     tb_input_problem";
        
        $sql=" SELECT DISTINCT transaction_date AS startDate,transaction_date AS endDate FROM tb_input_problem  order by transaction_date";

        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function get_data_no_claim_calendar_v2(){
         
        // $result = array();
        $id=1;

        $hsl=$this->db->query("SELECT DISTINCT transaction_date AS startDate,transaction_date AS endDate FROM tb_input_problem where problem_name='external' order by transaction_date");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data){    
                $data2[]=array(
                    'id'   =>  $id,  
                    'title'   =>  'Claim',  
                    'start'   =>  $data->startDate,  
                    'end'   =>  $data->endDate, 
                    'backgroundColor' => '#f56954', 
                    'borderColor' => '#f56954', 
                    'allDay' => true
                    );   
                    $id++;          
            }
        }else{
            return false;
        }
        return json_encode($data2);

     }

     // Get all data Claim By FY
    function get_data_fical_years(){

        // $sql="SELECT count(case when problem_name='internal' then problem_name end) as internal
		// ,count(case when problem_name='external' then problem_name end) as eksternal
		// ,Tahun from (select 
		// case 
        // when report_date between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        // when report_date between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        // when report_date between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        // when report_date between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        // when report_date between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
        // else 'unKwn' END as Tahun,report_date as report_date from tb_input_problem)a 
		// inner join tb_input_problem b on a.report_date = b.report_date WHERE a.report_date IS NOT NULL and Tahun !='unKwn'  group by a.Tahun";

        $sql="Select count(case when problem_name='internal' then problem_name end) as internal
            ,count(case when problem_name='external' then problem_name end) as eksternal,Tahun from (select 
            case 
           when report_date between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
            when report_date between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
            when report_date between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
            when report_date between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
            when report_date between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
            else 'unKwn' END as Tahun,report_date as report_date,problem_name from tb_input_problem)A
            WHERE report_date IS NOT NULL and Tahun !='unKwn'
            group by Tahun";

        $query = $this->db->query($sql);
        return $query->result_array();
    }
   

    // Get all data Claim By FY
    function get_data_fical_years_where($where){
        $sql="SELECT count(case when problem_name='internal' then problem_name end) as internal
		,count(case when problem_name='external' then problem_name end) as eksternal
		,Tahun from (select 
		case 
        -- when report_date between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        -- when report_date between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when report_date between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when report_date between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when report_date between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
        else 'unKwn' END as Tahun,report_date as report_date from tb_input_problem)a 
		inner join tb_input_problem b on a.report_date = b.report_date WHERE a.report_date IS NOT NULL and Tahun !='unKwn' and group_product_name='$where' group by a.Tahun";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // Get all data Claim By FY
    function get_data_fical_years_this_fy_where2($where,$where2){
        $sql="SELECT Tahun,count(Tahun) as Total from (select case 
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
        else 'unKwn'
        end as Tahun from tb_input_problem where group_product_name= '$where' AND problem_name= '$where2'
        )a WHERE Tahun != 'unKwn'
        group by Tahun";

        $query = $this->db->query($sql);
        return $query->result_array();
    }


    // Get Data for Mixed Chart by FY (Case)
    function get_data_mixed_chart(){
        $sql=" SELECT format(ppm_case_date,'MMMM')Bulan,SUM(CAST(case_target as int))case_target , 
        SUM(CAST(case_actual as int))case_actual
      ,COUNT(case when group_product_name='Body' then group_product_name end) as Body
      ,COUNT(case when group_product_name='Power Train' then group_product_name end) as Power_Train
      ,COUNT(case when group_product_name='Thermal' then group_product_name end) as Thermal
      ,COUNT(case when group_product_name='Wiper Washer' then group_product_name end) as Wiper
      ,COUNT(case when group_product_name='Logistic' then group_product_name end) as Logistic
      ,COUNT(case when group_product_name='Supplier' then group_product_name end) as Supplier
      from tb_ppm_case_target
         WHERE ppm_case_date between 
                  CASE 
                  WHEN DATEPART(MM, GETDATE())>3
                  THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
                  ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
                  END and CASE 
                  WHEN DATEPART(MM, GETDATE())>3
                  THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
                  ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
                  END
      group by month_ppm_case_target,ppm_case_date";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // Get Data for Mixed Chart by FY (Case)
    function get_data_mixed_chart_where($where){
        $sql=" SELECT format(ppm_case_date,'MMMM')Bulan,SUM(CAST(case_target as int))case_target , 
        SUM(CAST(case_actual as int))case_actual
      ,COUNT(case when group_product_name='Body' then group_product_name end) as Body
      ,COUNT(case when group_product_name='Power Train' then group_product_name end) as Power_Train
      ,COUNT(case when group_product_name='Thermal' then group_product_name end) as Thermal
      ,COUNT(case when group_product_name='Wiper Washer' then group_product_name end) as Wiper
      ,COUNT(case when group_product_name='Logistic' then group_product_name end) as Logistic
      ,COUNT(case when group_product_name='Supplier' then group_product_name end) as Supplier
      from tb_ppm_case_target
         WHERE ppm_case_date between 
                  CASE 
                  WHEN DATEPART(MM, GETDATE())>3
                  THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
                  ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
                  END and CASE 
                  WHEN DATEPART(MM, GETDATE())>3
                  THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
                  ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
                  END and group_product_name= '$where'
      group by month_ppm_case_target,ppm_case_date
";

        $query = $this->db->query($sql);
        return $query->result_array();
    }


    // Get Data for Mixed Chart by FY (PPM)
    function get_data_mixed_chart2(){
        $sql="SELECT format(ppm_case_date,'MMMM')Bulan,SUM(ppm_target) as ppm_target,SUM(ppm_actual) as ppm_actual
        from tb_ppm_case_target
           WHERE ppm_case_date between 
                    CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
                    ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
                    END and CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
                    ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
                    END
                    AND group_product_name != 'Logistic'
        group by month_ppm_case_target,ppm_case_date";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // Get Data for Mixed Chart by FY (PPM)
    function get_data_mixed_chart2_where($where){
        $sql="SELECT format(ppm_case_date,'MMMM')Bulan,SUM(ppm_target) as ppm_target,SUM(ppm_actual) as ppm_actual
        from tb_ppm_case_target
           WHERE ppm_case_date between 
                    CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
                    ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
                    END and CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
                    ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
                    END
                    AND group_product_name = '$where'
        group by month_ppm_case_target,ppm_case_date";

        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // Get Data for Case Data by Group Product
    function get_data_for_case_data_by_group_product(){


        $sql="SELECT isnull(sum(case when a.group_product_name_yearly='Company' then a.case_actual_yearly end),0) as Company
        ,isnull(sum(case when a.group_product_name_yearly='Body' then a.case_actual_yearly  end),0) as Body
        ,isnull(sum(case when a.group_product_name_yearly='Power Train' then a.case_actual_yearly  end),0) as Power_Train
		,isnull(sum(case when a.group_product_name_yearly='Thermal' then a.case_actual_yearly  end),0) as Thermal
        ,isnull(sum(case when a.group_product_name_yearly='Wiper Washer' then a.case_actual_yearly  end),0) as Wiper
		,isnull(sum(case when a.group_product_name_yearly='Logistic' then a.case_actual_yearly  end),0) as Logistic
		,isnull(sum(case when a.group_product_name_yearly='Supplier' then a.case_actual_yearly  end),0) as Supplier
		,isnull(sum(case when a.group_product_name_yearly='General' then a.case_actual_yearly  end),0) as General
        ,Tahun from (select 
		case 
        --when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        --when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)

        else 'unKwn' END as Tahun,group_product_name_yearly as group_product_name_yearly,sum(case_actual_yearly)case_actual_yearly from tb_ppm_case_target_yearly group by case_actual_yearly,year_ppm_case_target_yearly,group_product_name_yearly)a 
		WHERE a.Tahun != 'unKwn'  group by a.Tahun";

        $query = $this->db->query($sql);
        return $query->result_array();

    }

    // Get Data for Case Data by Group Product
    function get_data_for_case_data_by_group_product_where($where){

     
         $sql="SELECT isnull(sum(case when a.group_product_name_yearly='Company' then a.case_actual_yearly end),0) as Company
        ,isnull(sum(case when a.group_product_name_yearly='Body' then a.case_actual_yearly  end),0) as Body
        ,isnull(sum(case when a.group_product_name_yearly='Power Train' then a.case_actual_yearly  end),0) as Power_Train
		,isnull(sum(case when a.group_product_name_yearly='Thermal' then a.case_actual_yearly  end),0) as Thermal
        ,isnull(sum(case when a.group_product_name_yearly='Wiper Washer' then a.case_actual_yearly  end),0) as Wiper
		,isnull(sum(case when a.group_product_name_yearly='Logistic' then a.case_actual_yearly  end),0) as Logistic
		,isnull(sum(case when a.group_product_name_yearly='Supplier' then a.case_actual_yearly  end),0) as Supplier
		,isnull(sum(case when a.group_product_name_yearly='General' then a.case_actual_yearly  end),0) as General
        ,Tahun from (select 
		case 
        --when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        --when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)

        else 'unKwn' END as Tahun,group_product_name_yearly as group_product_name_yearly,sum(case_actual_yearly)case_actual_yearly from tb_ppm_case_target_yearly group by case_actual_yearly,year_ppm_case_target_yearly,group_product_name_yearly)a 
		WHERE a.Tahun != 'unKwn' AND a.group_product_name_yearly='$where' group by a.Tahun";


        $query = $this->db->query($sql);
        return $query->result_array();
    }

    // Get Data for Case Data by Group Product
    function get_data_for_case_data_by_group_product_where_new($where){

     
         $sql="SELECT isnull(sum(case when a.group_product_name_yearly='Company' then a.case_actual_yearly end),0) as Company_actual
        ,isnull(sum(case when a.group_product_name_yearly='Company' then a.case_target_yearly end),0) as Company_target
        ,isnull(sum(case when a.group_product_name_yearly='Body' then a.case_actual_yearly  end),0) as Body_actual
		,isnull(sum(case when a.group_product_name_yearly='Body' then a.case_target_yearly  end),0) as Body_target
        ,isnull(sum(case when a.group_product_name_yearly='Power Train' then a.case_actual_yearly  end),0) as Power_Train_actual
		,isnull(sum(case when a.group_product_name_yearly='Power Train' then a.case_target_yearly  end),0) as Power_Train_target
		,isnull(sum(case when a.group_product_name_yearly='Thermal' then a.case_actual_yearly  end),0) as Thermal_actual
		,isnull(sum(case when a.group_product_name_yearly='Thermal' then a.case_target_yearly  end),0) as Thermal_target
        ,isnull(sum(case when a.group_product_name_yearly='Wiper Washer' then a.case_actual_yearly  end),0) as Wiper_actual
		,isnull(sum(case when a.group_product_name_yearly='Wiper Washer' then a.case_target_yearly  end),0) as Wiper_target
		,isnull(sum(case when a.group_product_name_yearly='Logistic' then a.case_actual_yearly  end),0) as Logistic_actual
		,isnull(sum(case when a.group_product_name_yearly='Logistic' then a.case_target_yearly  end),0) as Logistic_target
		,isnull(sum(case when a.group_product_name_yearly='Supplier' then a.case_actual_yearly  end),0) as Supplier_actual
		,isnull(sum(case when a.group_product_name_yearly='Supplier' then a.case_target_yearly  end),0) as Supplier_target
		,isnull(sum(case when a.group_product_name_yearly='General' then a.case_actual_yearly  end),0) as General_actual
		,isnull(sum(case when a.group_product_name_yearly='General' then a.case_target_yearly  end),0) as General_target
        ,Tahun from (select 
		case 
        --when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        --when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when Concat((DATEPART(yyyy, year_ppm_case_target_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)

        else 'unKwn' END as Tahun,group_product_name_yearly as group_product_name_yearly,sum(case_actual_yearly)case_actual_yearly,sum(case_target_yearly)case_target_yearly from tb_ppm_case_target_yearly group by case_actual_yearly,year_ppm_case_target_yearly,group_product_name_yearly)a 
		WHERE a.Tahun != 'unKwn' AND a.group_product_name_yearly='$where' 
		group by a.Tahun";


        $query = $this->db->query($sql);
        return $query->result_array();
    }



    // Get Data for PPM Data
    function get_data_for_ppm_data(){

        $sql="SELECT SUM(ppm_actual_yearly) as ppm_actual_yearly
		,SUM(ppm_target_yearly) as ppm_target_yearly
		,Tahun from (select 
		case 
        -- when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        -- when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when Concat((DATEPART(yyyy, ppm_case_date_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when Concat((DATEPART(yyyy, ppm_case_date_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when Concat((DATEPART(yyyy, ppm_case_date_yearly)),'-04-01') between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
        else 'unKwn' END as Tahun,ppm_actual_yearly as ppm_actual_yearly,ppm_target_yearly as ppm_target_yearly from tb_ppm_case_target_yearly)a 
	    WHERE a.Tahun != 'unKwn' group by a.Tahun";

        $query = $this->db->query($sql);
        return $query->result_array();

    }

    // Get Data for PPM Data Where
    function get_data_for_ppm_data_where($where){
        $sql="SELECT SUM(ppm_actual_yearly) as ppm_actual_yearly
		,SUM(ppm_target_yearly) as ppm_target_yearly
		,Tahun from (select 
		case 
        -- when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        -- when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
        else 'unKwn' END as Tahun,ppm_actual_yearly as ppm_actual_yearly,ppm_target_yearly as ppm_target_yearly,group_product_name_yearly as group_product_name_yearly from tb_ppm_case_target_yearly)a 
	    WHERE a.Tahun != 'unKwn' and group_product_name_yearly='$where' group by a.Tahun";

        $query = $this->db->query($sql);
        return $query->result_array();
    }








}


