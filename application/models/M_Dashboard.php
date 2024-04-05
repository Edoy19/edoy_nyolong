<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Dashboard extends CI_Model
{

	function fetch_all_event_full_calender()
	{
		$this->db->order_by('id');
		return $this->db->get('events');
	}


	// Get all data customer name 
	function get_data_customer()
	{
		$this->db->group_by('customer_name');
		$this->db->select('customer_name');
		$this->db->select("count(*) as total");
		$this->db->where('customer_name !=', " ");
		$this->db->where('draft =', "Send");
		return $this->db->from('tb_input_problem')
			->get()
			->result();
	}

	// Get all data customer name WHERE 
	function get_data_customer_where($where)
	{
		$this->db->group_by('customer_name');
		$this->db->group_by('group_product_name');
		$this->db->select('group_product_name');
		$this->db->select('customer_name');
		$this->db->select("count(*) as total");
		$this->db->where('customer_name !=', " ");
		$this->db->where('draft =', "Send");
		$this->db->where('group_product_name =', $where);
		return $this->db->from('tb_input_problem')
			->get()
			->result();
	}

	// Get all data Group Product
	function get_data_group_product()
	{
		$this->db->group_by('group_product_name');
		$this->db->select('group_product_name');
		$this->db->select("count(*) as total");
		$this->db->where('group_product_name !=', " ");
		$this->db->where('draft =', "Send");
		return $this->db->from('tb_input_problem')
			->get()
			->result();
	}


	// Get all data Group Product using Where
	function get_data_group_product_where($where)
	{
		$this->db->group_by('group_product_name');
		$this->db->select('group_product_name');
		$this->db->select("count(*) as total");
		$this->db->where('group_product_name =', $where);
		$this->db->where('draft =', "Send");
		return $this->db->from('tb_input_problem')
			->get()
			->result();
	}







	// Get all data Transaction sort by Date april - maret 
	function get_data_fical_years()
	{
		$sql = "select Tahun,count(Tahun) as Total from (select case 
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-9),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-8),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-9) 
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-8),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-7),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-8)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-7),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-6),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-7)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-6),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-5),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-6)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-5),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-4),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-5)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
        else 'unKwn'
        end as Tahun from tb_input_problem 
        )a WHERE Tahun != 'unKwn'
        group by Tahun";

		$query = $this->db->query($sql);
		return $query->result_array();
	}



	function get_data_fical_years_where($where)
	{
		$sql = "select Tahun,count(Tahun) as Total from (select case 
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-9),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-8),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-9) 
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-8),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-7),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-8)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-7),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-6),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-7)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-6),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-5),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-6)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-5),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-4),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-5)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when transaction_date between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
        else 'unKwn'
        end as Tahun from tb_input_problem where group_product_name='$where'
        )a WHERE Tahun != 'unKwn' 
        group by Tahun";

		$query = $this->db->query($sql);
		return $query->result_array();
	}






	// Get data berapa hari no claim untuk chart
	function get_data_no_claim()
	{
		$sql = "  SELECT DATEDIFF ( DAY , max(transaction_date) , getdate()) as day
        FROM tb_input_problem where problem_name='external'";

		$query = $this->db->query($sql);
		return $query->result_array();
	}


	// Get data berapa hari no claim untuk chart WHERE
	function get_data_no_claim_where($where)
	{
		$sql = "  SELECT group_product_name,DATEDIFF ( DAY , max(transaction_date) , getdate()) as day
        FROM tb_input_problem WHERE group_product_name = '$where' and problem_name='external'
		group by group_product_name";

		$query = $this->db->query($sql);
		return $query->result_array();
	}



	// Get data berapa hari no claim untuk calendar
	function get_data_no_claim_calendar()
	{

		// $sql="  SELECT 
		//     MAX(transaction_date) as startDate,
		//     CAST( GETDATE() AS Date ) AS endDate
		// FROM 
		//     tb_input_problem";

		$sql = " SELECT DISTINCT transaction_date AS startDate,transaction_date AS endDate FROM tb_input_problem  order by transaction_date";

		$query = $this->db->query($sql);
		return $query->result_array();
	}


	function get_data_no_claim_calendar_v2()
	{

		// $result = array();
		$id = 1;

		$hsl = $this->db->query("SELECT DISTINCT transaction_date AS startDate,transaction_date AS endDate FROM tb_input_problem where problem_name='external' order by transaction_date");
		if ($hsl->num_rows() > 0) {
			foreach ($hsl->result() as $data) {
				$data2[] = array(
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
		}
		return json_encode($data2);
	}





	// Get all data ppm & case
	function get_data_case()
	{
		$sql = "
        SELECT 
                DATEPART(MM, transaction_date)Bulan ,
                SUM (CAST(case_target as int)) as case_target, 
                SUM (CAST(case_actual as int)) as case_actual,
                ( case 
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-9),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-8),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-9) 
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-8),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-7),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-8)
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-7),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-6),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-7)
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-6),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-5),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-6)
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-5),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-4),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-5)
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
                when transaction_date between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
                else 'unKwn'
                end )as tahun
        FROM tb_ppm_case_target
        GROUP BY transaction_date";

		$query = $this->db->query($sql);
		return $query->result_array();
	}


	// Get Data Case actual and target by fiscal year
	function get_data_case_by_fy()
	{
		$sql = "
        SELECT
            SUM (CAST(case_target as int)) as case_target, 
            SUM (CAST(case_actual as int)) as case_actual
        FROM
            tb_ppm_case_target
            WHERE ppm_case_date between 
            CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
            ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
            END and CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
            ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
        END";

		$query = $this->db->query($sql);
		return $query->result_array();
	}


	// Get Data PPM actual and target by fiscal year
	function get_data_ppm_by_fy()
	{
		$sql = "
        SELECT
            SUM (ppm_target) as ppm_target, 
            SUM (ppm_actual) as ppm_actual
        FROM
            tb_ppm_case_target
            WHERE ppm_case_date between 
            CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
            ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
            END and CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
            ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
        END";

		$query = $this->db->query($sql);
		return $query->result_array();
	}



	// Get all data Group Product
	function get_data_group_product_ppm_case()
	{
		$this->db->group_by('group_product_name');
		$this->db->select('group_product_name');
		$this->db->select("count(*) as total");
		$this->db->where('group_product_name !=', " ");
		return $this->db->from('tb_ppm_case_input')
			->get()
			->result();
	}

	// Get all data Group Product
	function get_data_group_product_ppm_case_where($where)
	{
		$this->db->group_by('group_product_name');
		$this->db->select('group_product_name');
		$this->db->select("count(*) as total");
		$this->db->where('group_product_name !=', " ");
		$this->db->where('group_product_name =', $where);
		return $this->db->from('tb_ppm_case_input')
			->get()
			->result();
	}

	// Get all data Group Product
	function get_data_group_product_ppm_case_new()
	{
		$sql = "
        SELECT
            ppm_case_date,
            group_product_name, 
            count (group_product_name) as total 
        FROM
            tb_ppm_case_input
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
        GROUP BY ppm_case_date,group_product_name ORDER BY ppm_case_date asc";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	// Get all data Group Product = body
	function get_data_group_product_ppm_case_body()
	{
		$sql = "
        SELECT
			ppm_case_date,
            group_product_name, 
			count (group_product_name) as total 
        FROM
            tb_ppm_case_input 
            WHERE group_product_name ='Body' and ppm_case_date between 
            CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
            ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
            END and CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
            ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
        END
			GROUP BY ppm_case_date,group_product_name 
			ORDER BY ppm_case_date asc";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	// Get all data Group Product = body
	function get_data_group_product_ppm_case_where_new($where)
	{
		$sql = "
        SELECT
			ppm_case_date,
            group_product_name, 
			count (group_product_name) as total 
        FROM
            tb_ppm_case_input 
            WHERE group_product_name ='$where' and ppm_case_date between 
            CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
            ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
            END and CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
            ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
        END
			GROUP BY ppm_case_date,group_product_name 
			ORDER BY ppm_case_date asc";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	// Get all data Group Product = body
	function get_data_stacked_bar()
	{
		$sql = "
        Select format(a.ppm_case_date,'MMMM')Bulan,ppm_target as ppm_target, 
          ppm_actual as ppm_actual,
        sum(case when b.group_product_name='Body' then quantity_ppm_case_input else 0 end) as Body
        ,sum(case when b.group_product_name='Power Train' then quantity_ppm_case_input else 0 end) as Power_Train
        ,sum(case when b.group_product_name='Blower' then quantity_ppm_case_input else 0 end) as Blower
        ,sum(case when b.group_product_name='Wiper Washer' then quantity_ppm_case_input else 0 end) as Wiper
        ,sum(case when b.group_product_name='Thermal' then quantity_ppm_case_input else 0 end) as Thermal
        from [tb_ppm_case_target] a
        left join tb_ppm_case_input b on a.ppm_case_date=b.ppm_case_date
        WHERE a.ppm_case_date between 
                    CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
                    ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
                    END and CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
                    ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
                    END
        and b.jenis='PPM'
        group by month_ppm_case_target,a.ppm_case_date,ppm_target,ppm_actual";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function get_data_stacked_bar2()
	{
		$sql = "
        Select format(a.ppm_case_date,'MMMM')Bulan,case_target as case_target, 
          case_actual as case_actual,
        sum(case when b.group_product_name='Body' then quantity_ppm_case_input else 0 end) as Body
        ,sum(case when b.group_product_name='Power Train' then quantity_ppm_case_input else 0 end) as Power_Train
        ,sum(case when b.group_product_name='Blower' then quantity_ppm_case_input else 0 end) as Blower
        ,sum(case when b.group_product_name='Wiper Washer' then quantity_ppm_case_input else 0 end) as Wiper
        ,sum(case when b.group_product_name='Thermal' then quantity_ppm_case_input else 0 end) as Thermal
        from [tb_ppm_case_target] a
        left join tb_ppm_case_input b on a.ppm_case_date=b.ppm_case_date
        WHERE a.ppm_case_date between 
                    CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
                    ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
                    END and CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
                    ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
                    END
        and b.jenis='PPM'
        group by month_ppm_case_target,a.ppm_case_date,case_target,case_actual";

		$query = $this->db->query($sql);
		return $query->result_array();
	}



	function get_data_stacked_bar_new()
	{
		$sql = "
        Select format(ppm_case_date,'MMMM')Bulan,case_target as case_target, 
            case_actual as case_actual,ppm_target as ppm_target,ppm_actual as ppm_actual
            from tb_ppm_case_target 
            where ppm_case_date between 
            CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
            ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
            END and CASE 
            WHEN DATEPART(MM, GETDATE())>3
            THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
            ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
            END
            group by ppm_case_date,case_target,case_actual,ppm_target,ppm_actual;
        ";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function get_data_stacked_bar_new_where($where)
	{
		$sql = "
        Select format(ppm_case_date,'MMMM')Bulan,case_target as case_target, 
        case_actual as case_actual,ppm_target as ppm_target,ppm_actual as ppm_actual
        from tb_ppm_case_target 
        where ppm_case_date between 
        CASE 
        WHEN DATEPART(MM, GETDATE())>3
        THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
        ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
        END and CASE 
        WHEN DATEPART(MM, GETDATE())>3
        THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
        ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
        END 
        and group_product_name='$where'
        group by ppm_case_date,case_target,case_actual,ppm_target,ppm_actual;
        ";

		$query = $this->db->query($sql);
		return $query->result_array();
	}








	function get_data_stacked_bar2_new()
	{
		$sql = "
        Select format(ppm_case_date,'MMMM')Bulan,case_target as case_target, 
        case_actual as case_actual,ppm_target as ppm_target,ppm_actual as ppm_actual
		,sum(case when group_product_name='Body' then quantity_ppm_case_target else 0 end) as Body
        ,sum(case when group_product_name='Power Train' then quantity_ppm_case_target else 0 end) as Power_Train
        ,sum(case when group_product_name='Blower' then quantity_ppm_case_target else 0 end) as Blower
        ,sum(case when group_product_name='Wiper Washer' then quantity_ppm_case_target else 0 end) as Wiper
        ,sum(case when group_product_name='Thermal' then quantity_ppm_case_target else 0 end) as Thermal
		from tb_ppm_case_target 
		where ppm_case_date between 
                    CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())),'-04-01')
                    ELSE Concat((DATEPART(yyyy, GETDATE())-1),'-04-01')
                    END and CASE 
                    WHEN DATEPART(MM, GETDATE())>3
                    THEN Concat((DATEPART(yyyy, GETDATE())+1),'-03-31')
                    ELSE Concat((DATEPART(yyyy, GETDATE())),'-03-31')
                    END
		group by ppm_case_date,case_target,case_actual,ppm_target,ppm_actual";

		$query = $this->db->query($sql);
		return $query->result_array();
	}





	// get all data ppm case input filter by FY
	function get_data_for_table_ppm()
	{
		$sql = "select sum(ppm_target_yearly) as ppm_target,sum(ppm_actual_yearly) as ppm_actual,YEAR(getdate()) as Tahun
        from tb_ppm_case_target_yearly
        where ppm_case_date_yearly <  DATEADD(year,+1,GETDATE()) 
        group by ppm_case_date_yearly";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	// get all data ppm case input filter by FY pakai where
	function get_data_for_table_ppm_where($where)
	{
		$sql = "select sum(ppm_target_yearly) as ppm_target,sum(ppm_actual_yearly) as ppm_actual,YEAR(getdate()) as Tahun
        from tb_ppm_case_target_yearly
        where ppm_case_date_yearly <  DATEADD(year,+1,GETDATE()) and group_product_name_yearly='$where'
        group by ppm_case_date_yearly";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	// get all data group product by FY
	function get_data_for_case_data_by_group_product()
	{
		$sql = "Select
        sum(case when group_product_name_yearly='Body' then quantity_ppm_case_target_yearly else 0 end) as Body
        ,sum(case when group_product_name_yearly='Power Train' then quantity_ppm_case_target_yearly else 0 end) as Power_Train
        ,sum(case when group_product_name_yearly='Blower' then quantity_ppm_case_target_yearly else 0 end) as Blower
        ,sum(case when group_product_name_yearly='Wiper Washer' then quantity_ppm_case_target_yearly else 0 end) as Wiper
        ,sum(case when group_product_name_yearly='Thermal' then quantity_ppm_case_target_yearly else 0 end) as Thermal
		,Tahun from (select 
		case 
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-9),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-8),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-9) 
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-8),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-7),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-8)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-7),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-6),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-7)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-6),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-5),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-6)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-5),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-4),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-5)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
        else 'unKwn' END as Tahun,ppm_case_date_yearly as ppm_case_date_yearly from tb_ppm_case_target_yearly)a 
		inner join tb_ppm_case_target_yearly b on a.ppm_case_date_yearly = b.ppm_case_date_yearly WHERE a.Tahun != 'unKwn' group by a.Tahun ";

		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function get_data_for_case_data_by_group_product_where($where)
	{
		$sql = "select count(a.group_product_name_yearly) as group_product_name
		,Tahun from (select group_product_name_yearly,
		case 
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-9),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-8),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-9) 
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-8),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-7),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-8)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-7),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-6),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-7)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-6),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-5),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-6)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-5),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-4),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-5)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-4),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-3),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-4)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-3),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-2),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-3)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-2),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-2)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-1),'-04-01') and Concat((DATEPART(yyyy, GETDATE())-0),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-1)
        when ppm_case_date_yearly between Concat((DATEPART(yyyy, GETDATE())-0),'-04-01') and Concat((DATEPART(yyyy, GETDATE())+1),'-03-31') then 'FY'+convert(char(4), DATEPART(yyyy, GETDATE())-0)
        else 'unKwn' END as Tahun,ppm_case_date_yearly as ppm_case_date_yearly from tb_ppm_case_target_yearly)a 
		WHERE a.Tahun != 'unKwn' and a.group_product_name_yearly='$where' group by a.Tahun ";

		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
