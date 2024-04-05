<?php
class M_approver extends CI_Model{
 
    /// @see Tampil_Data()
   /// @note
   /// @attention
    public function Tampil_Data()
    {

            $this->db->select("f.namadepartment,pic,kode_cip,namainvesmentclass,project_name,namacostclasification,namaclass,namapriority,cost_mrp,current_kondisi,status");
            $this->db->from('tb_plan as a');
            $this->db->join('tb_invesmentclass as b', 'a.kode_invesment_class=b.kodeinvesmentclass','LEFT');
            $this->db->join('tb_costclasification as c', 'a.kode_cost_clasification=c.kodecostclasification','LEFT');
            $this->db->join('tb_class as d', 'a.kode_class=d.kodeclass','LEFT');
            $this->db->join('tb_priority as e', 'a.priority=e.kodepriority','LEFT');
            $this->db->join('tb_department as f', 'a.kode_department=f.kodedepartment','LEFT');
            $this->db->where('kode_cip', 'XXX');
            $this->db->limit(1);
            return $this->db->get();      
            
    }

    /// @see Search_plan()
   /// @note
   /// @attention
    public function Search_plan($search,$table)
    {
        
        $this->db->select("f.namadepartment,pic,g.username,kode_cip,namainvesmentclass,project_name,namacostclasification,namaclass,namapriority,cost_mrp,current_kondisi,status");
        $this->db->from('tb_plan as a');
        $this->db->join('tb_invesmentclass as b', 'a.kode_invesment_class=b.kodeinvesmentclass','LEFT');
        $this->db->join('tb_costclasification as c', 'a.kode_cost_clasification=c.kodecostclasification','LEFT');
        $this->db->join('tb_class as d', 'a.kode_class=d.kodeclass','LEFT');
        $this->db->join('tb_priority as e', 'a.priority=e.kodepriority','LEFT');
        $this->db->join('tb_department as f', 'a.kode_department=f.kodedepartment','LEFT');
        $this->db->join('tb_userplanner as g', 'a.pic=g.nopegawai','LEFT');
        
        $this->db->like('pic',$search); 
        $this->db->or_like('f.namadepartment',$search);       
        $this->db->or_like('a.kode_cip',$search); 
        $this->db->or_like('namainvesmentclass',$search); 
        $this->db->or_like('project_name',$search); 
        $this->db->or_like('namacostclasification',$search); 
        $this->db->or_like('namaclass',$search);         
        $this->db->or_like('M_approver_po',$search); 
        $this->db->or_like('fiscal_year',$search); 
        $this->db->or_like('g.username',$search); 


        if($search==""){ 
        $this->db->limit(100);    
        }
            
        return $this->db->get()->result(); 
        
    }


    /// @see m_plandetails()
   /// @note
   /// @attention
    public function m_plandetails($kode_cip)
    {

            $this->db->select("kode_cip,kode_item_process,namaItemprocess,M_approver_plan,M_approver_actual,status,keterangan,active");
            $this->db->from('tb_plan_dtl as a');
            $this->db->join('tb_itemprocess as b', 'a.kode_item_process=b.kodeItemprocess','LEFT');
            $this->db->where('kode_cip', $kode_cip);
            $this->db->order_by('kode_item_process','ASC');

            return $this->db->get();      
            
    }
    
    /// @see product_list()
   /// @note
   /// @attention
    function product_list(){
        $hasil=$this->db->get('product');
        return $hasil->result();
    }
 
    /// @see save_product()
   /// @note
   /// @attention
    function save_product(){

        $data = array(
                
                'kode_cip'=> $this->input->post('kode_cip'), 
                'kode_department'=> $this->input->post('kode_department'), 
                'pic'=> $this->input->post('pic'), 
                'machine_condition'=> $this->input->post('machine_condition'), 
                'kode_invesment_class'=> $this->input->post('kode_invesment_class'), 
                'kodeproduct'=> $this->input->post('kodeproduct'), 
                'project_name'=> $this->input->post('project_name'), 
                'kode_cost_clasification'=> $this->input->post('kode_cost_clasification'), 
                'kode_class'=> $this->input->post('kode_class'), 
                'kodeunit'=> $this->input->post('kodeunit'), 
                'order_to'=> $this->input->post('order_to'), 
                'priority'=> $this->input->post('priority'), 
                'cost_mrp'=> $this->input->post('cost_mrp'), 
                'actual_cost_mrp'=> $this->input->post('actual_cost_mrp'), 
                'ninku_mh'=> $this->input->post('ninku_mh'), 
               
            );
            
        $result=$this->db->insert('tb_plan',$data);
        return $result;
    }

    /// @see upM_approver_data()
   /// @note
   /// @attention
    function upM_approver_data(){

        $kode_cip=$this->input->post('kode_cip');
        $kode_department=$this->input->post('kode_department');
        $pic=$this->input->post('pic');
        $machine_condition=$this->input->post('machine_condition');
        $kode_invesment_class=$this->input->post('kode_invesment_class');
        $kodeproduct=$this->input->post('kodeproduct');
        $project_name=$this->input->post('project_name');
        $kode_cost_clasification=$this->input->post('kode_cost_clasification');
        $kode_class=$this->input->post('kode_class');
        $kodeunit=$this->input->post('kodeunit');
        $order_to=$this->input->post('order_to');
        $priority=$this->input->post('priority');
        $cost_mrp=$this->input->post('cost_mrp');
        $actual_cost_mrp=$this->input->post('actual_cost_mrp');
        $ninku_mh=$this->input->post('ninku_mh');
       
        $this->db->set('kode_department', $kode_department);
        $this->db->set('pic', $pic);
        $this->db->set('machine_condition', $machine_condition);
        $this->db->set('kode_invesment_class', $kode_invesment_class);
        $this->db->set('kodeproduct', $kodeproduct);
        $this->db->set('project_name', $project_name);
        $this->db->set('kode_cost_clasification', $kode_cost_clasification);
        $this->db->set('kode_class', $kode_class);
        $this->db->set('kodeunit', $kodeunit);
        $this->db->set('order_to', $order_to);
        $this->db->set('priority', $priority);
        $this->db->set('cost_mrp', $cost_mrp);
        $this->db->set('actual_cost_mrp', $actual_cost_mrp);
        $this->db->set('ninku_mh', $ninku_mh);

        $this->db->where('kode_cip', $kode_cip);
        $result=$this->db->upM_approver('tb_plan');
        return $result;

    }

    /// @see upM_approver_actual_cost_mrp()
   /// @note
   /// @attention
    function upM_approver_actual_cost_mrp(){

        $hdrid=$this->input->post('hdrid');       
        $actual_cost_mrp=$this->input->post('actual_cost_mrp');        
        $this->db->set('actual_cost_mrp', $actual_cost_mrp);
        $this->db->where('hdrid', $hdrid);
        $result=$this->db->upM_approver('tb_plan');
        return $result;

    }

    /// @see save_details()
   /// @note
   /// @attention
    function save_details(){

        $data = array(
              
                'kode_cip'=> $this->input->post('kode_cip'), 
                'kode_item_process'=> $this->input->post('kode_item_process'), 
                'M_approver_plan'=> $this->input->post('M_approver_plan'), 
                'active'=> $this->input->post('active'), 
                               
            );

        $result=$this->db->insert('tb_plan_dtl',$data);
        return $result;
    }
 
    /// @see upM_approver_details()
   /// @note
   /// @attention
    function upM_approver_details(){
               
        $kode_cip=$this->input->post('kode_cip');
        $kode_item_process=$this->input->post('kode_item_process');
        $M_approver_plan=$this->input->post('M_approver_plan');
        $active=$this->input->post('active');

       /* $this->db->set('kode_cip', $kode_cip);
        $this->db->set('kode_item_process',$kode_item_process);*/

        $this->db->set('M_approver_plan', $M_approver_plan);
        $this->db->set('active', $active);
        $this->db->where('kode_cip', $kode_cip);
        $this->db->where('kode_item_process', $kode_item_process);

        $result=$this->db->upM_approver('tb_plan_dtl');
        return $result;

    }


    /// @see upM_approver_data()
   /// @note
   /// @attention
    function upM_approver_data_(){
        
        $product_code=$this->input->post('product_code');
        $product_name=$this->input->post('product_name');
        $product_price=$this->input->post('price');
 
        $this->db->set('product_name', $product_name);
        $this->db->set('product_price', $product_price);
        $this->db->where('product_code', $product_code);
        $result=$this->db->upM_approver('product');
        return $result;

    }
 
    /// @see delete_data()
   /// @note
   /// @attention
    function delete_data(){

        $kode_cip=$this->input->post('kode_cip');
        $this->db->where('kode_cip', $kode_cip);
        $result=$this->db->delete('tb_plan');
        return $result;

    }


    /// @see upM_approver_data_ef()
   /// @note
   /// @attention
    function upM_approver_data_ef($where,$data,$table){
        
        $this->db->where($where);
      $this->db->upM_approver($table,$data);

    }

    /// @see Update_Data()
   /// @note
   /// @attention
    function Update_Data($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);

   }

   function Update_Data_Approve($where,$data,$table,$hdrid){

    $this->db->where($where);// ini untuk apa
    $this->db->update($table,$data);// ini untuk apa

    $this->db->query("Update tb_add_advance3 set status_transaction=isnull((select top 1 (case 
    when position_code=1 then 'Waiting ' + name +  ' (' + position_name + ')'
    when position_code=2 then 'Need approve by ' + name +  ' (' + position_name + ')'
    when position_code=3 then 'Need approve by ' + name +  ' (' + position_name + ')'
    when position_code=4 then 'Need approve by ' + name +  ' (' + position_name + ')'
    when position_code=5 then 'Need approve by ' + name +  ' (' + position_name + ')'
    when position_code=6 then 'Need approve by ' + name +  ' (' + position_name + ')'
    when position_code=7 then 'Need approve by ' + name +  ' (' + position_name + ')'
    when position_code=8 then 'Need approve by ' + name +  ' (' + position_name + ')'
    when position_code=9 then 'Need approve by ' + name +  ' (' + position_name + ')'
    when position_code=10 then 'Need approve by ' + name +  ' (' + position_name + ')'
    else 'Done PC'
    end) as status_transaction 
    from tb_approval where hdrid='$hdrid' and date_approve is null),'Done PC') where hdrid_pc='$hdrid'");// ini untuk apa



    // $data['status_transaction']=$status_transaction;

    $sql="SELECT TOP 1 status_transaction FROM tb_add_advance3 WHERE hdrid_pc ='$hdrid' ";// ini untuk apa
    $query = $this->db->query($sql);// ini untuk apa
    if ($query->num_rows()>0) {
        $query=$query->row();           
        $status_transaction= $query->status_transaction;// ini untuk apa
    }else{
        $status_transaction="Gagal";// ini untuk apa
    }

   return  $status_transaction;

}
  

        function Status_finish_trans($hdrid)
        {
            // $this->db->query("Update tb_add_advance3 set status_transaction=(case 
            // when nominal_settlement =''  then 'Waiting payment settlement' 
            // when nominal_settlement is not NULL then 'Payment complete'
            // else 'Waiting payment settlement' end)where hdrid_pc='$hdrid' and status_transaction='Waiting payment settlement'"); // Update status finish payment
        }

        function status_tran34($hdrid)
        {
            // $this->db->query("Update tb_add_advance3 set status_transaction=(case 
            // when nominal1 =''  then 'Waiting payment advance' 
            // when nominal1 is not NULL then 'Payment complete'
            // else status_transaction end)where hdrid_pc='$hdrid' and status_transaction='Waiting payment advance'"); // Update status finish payment
            // $this->db->query("Update tb_add_advance3 set status='Add pc'where hdrid='$hdrid' and status_transaction='Done adv'"); // Update status finish payment
            // $this->db->query("Update tb_add_advance3 set status_transaction=isnull((select top 1 (case 
            // when position_code=1 then 'Waiting ' + name +  ' (' + position_name + ')'else status_transaction
            // end) as status_transaction 
            // from tb_approval where hdrid='$hdrid' and date_approve is null),'Done') where hdrid='$hdrid'"); // Update status finish payment
        }


        // function status_tran_adv($hdrid)
        // {


        //     $this->db->query("Update tb_add_advance3 set status_transaction=isnull((select top 1 (case 
        //     when position_code=1 then 'Waiting ' + name +  ' (' + position_name + ')'
        //     when position_code=2 then 'Need approve by ' + name +  ' (' + position_name + ')'
        //     when position_code=3 then 'Need approve by ' + name +  ' (' + position_name + ')'
        //     when position_code=4 then 'Need approve by ' + name +  ' (' + position_name + ')'
        //     when position_code=5 then 'Need approve by ' + name +  ' (' + position_name + ')'
        //     when position_code=6 then 'Need approve by ' + name +  ' (' + position_name + ')'
        //     when position_code=7 then 'Need approve by ' + name +  ' (' + position_name + ')'
        //     when position_code=8 then 'Need approve by ' + name +  ' (' + position_name + ')'
        //     when position_code=9 then 'Need approve by ' + name +  ' (' + position_name + ')'
        //     when position_code=10 then 'Need approve by ' + name +  ' (' + position_name + ')'
        //     else 'Done'
        //     end) as status_transaction 
        //     from tb_approval where hdrid='$hdrid' and date_approve is null),'Done') where hdrid='$hdrid'");// ini untuk apa
        //     $this->db->query("UPDATE tb_add_advance3 set status='Need approve adv' WHERE hdrid='$hdrid'");

        // }

     /// @see Update_Data_Approve_ver2()
     /// @note Fungsi update status_transaction
     /// @attention
    function Update_Data_Approve_ver2($where,$data,$table,$hdrid){

        $this->db->where($where);// ini untuk apa
        $this->db->update($table,$data);// ini untuk apa

        $this->db->query("Update tb_add_advance3 set status_transaction=isnull((select top 1 (case 
            when position_code=1 then 'Waiting ' + name +  ' (' + position_name + ')'
            when position_code=2 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=3 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=4 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=5 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=6 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=7 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=8 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=9 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=10 then 'Need approve by ' + name +  ' (' + position_name + ')'
            else 'Done PC'
            end) as status_transaction 
            from tb_approval where hdrid='$hdrid' and date_approve is null),'Done PC') where hdrid_pc='$hdrid'");// ini untuk apa

        

            // $data['status_transaction']=$status_transaction;

            $sql="SELECT TOP 1 status_transaction FROM tb_add_advance3 WHERE hdrid_pc ='$hdrid' ";// ini untuk apa
            $query = $this->db->query($sql);// ini untuk apa
            if ($query->num_rows()>0) {
                $query=$query->row();           
                $status_transaction= $query->status_transaction;// ini untuk apa
            }else{
                $status_transaction="Gagal";// ini untuk apa
            }

           return  $status_transaction;

   }

   /// @see Update_Data_Approve_ver2()
     /// @note
     /// @attention
     function Update_Data_Approve_ver3($where,$data,$table,$hdrid){

        $this->db->where($where);// ini untuk apa
        $this->db->update($table,$data);// ini untuk apa 

        $this->db->query("Update tb_add_advance3 set status_transaction=isnull((select top 1 (case 
            when position_code=1 then 'Waiting ' + name +  ' (' + position_name + ')'
            when position_code=2 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=3 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=4 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=5 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=6 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=7 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=8 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=9 then 'Need approve by ' + name +  ' (' + position_name + ')'
            when position_code=10 then 'Need approve by ' + name +  ' (' + position_name + ')'
            else 'Done ADV'
            end) as status_transaction 
            from tb_approval where hdrid='$hdrid' and date_approve is null),'Done ADV') where hdrid='$hdrid'");// ini untuk apa

        

            // $data['status_transaction']=$status_transaction;

            $sql="SELECT TOP 1 status_transaction FROM tb_add_advance3 WHERE hdrid ='$hdrid' ";// ini untuk apa
            $query = $this->db->query($sql);// ini untuk apa
            if ($query->num_rows()>0) {
                $query=$query->row();           
                $status_transaction= $query->status_transaction;// ini untuk apa
            }else{
                $status_transaction="Gagal";// ini untuk apa
            }

           return  $status_transaction;


   }


      /// @see reject_Data_Approve()
     /// @note
     /// @attention
     function reject_Data_Approve($hdrid){

        $sql="SELECT TOP 1 position_code FROM tb_approval WHERE hdrid ='$hdrid' AND date_approve IS NULL order by  position_code asc";// ini untuk apa
        $query = $this->db->query($sql);// ini untuk apa
        if ($query->num_rows()>0) {
            $query=$query->row();// ini untuk apa
            if ($query){ // Jika direject oleh approver inisiator dan responsible maka lari ke draft
                //  $this->db->query("Update tb_add_advance3 SET draft ='Draft' where hdrid='$hdrid'");// ini untuk apa
                 $this->db->query("Update tb_approval SET date_approve=NULL where hdrid='$hdrid'");// ini untuk apa
            }else{ //  Lari kembali ke responsible
                 $this->db->query("Update tb_approval SET date_approve=NULL where hdrid='$hdrid'");// ini untuk apa
            }
            
        }

    }


   /// @see ajax_find_responsible()
   /// @note
   /// @attention
    function ajax_find_responsible($hdrid){

        $sql="SELECT TOP 1 nik FROM tb_approval WHERE hdrid ='$hdrid' AND date_approve IS NULL and (position_code='3' or position_code='4') order by  position_code asc";
        $query = $this->db->query($sql);
        if ($query->num_rows()>0) {
            $query=$query->row();
            $status_transaction=$query->nik;
        }else{
            $status_transaction="Done";
        }        
        return  $status_transaction;

   }

   /// @see ajax_find_approver()
   /// @note
   /// @attention
    function ajax_find_approver($hdrid){

        // $sql="SELECT TOP 1 *  FROM tb_approval WHERE hdrid ='$hdrid' AND date_approve IS NULL order by  position_code asc";
        $query = $this->db->query("select top 1 * from tb_approval where hdrid='$hdrid' and date_approve is null order by position_code asc");
        // $query = $this->db->query($sql);
        if ($query->num_rows()>0) {
            $query=$query->row();
            $status_transaction=$query->nik."#".$query->position_code;
        }else{
            $status_transaction="Done"."#"."Done";
        }        
        return  $status_transaction;

    //     $query = $this->db->query("select top 1 * from tb_approval where hdrid='$hdrid' and date_approve is null order by position_code asc");
    //   if ($query->num_rows() > 0) {
    //       return $query->row();
    //   }else{
    //       $query = (object) array('name'=>'not found','position_code'=>'not found','nik'=>'not found');
    //       return $query;
    //   }


    }

       /// @see cari_tb_approver()
   /// @note
   /// @attention
   function cari_tb_approver($hdrid)
   {

      $query = $this->db->query("select top 1 * from tb_approval where hdrid='$hdrid' and date_approve is null order by position_code asc");
      if ($query->num_rows() > 0) {
          return $query->row();
      }else{
          $query = (object) array('name'=>'not found','position_code'=>'not found','nik'=>'not found');
          return $query;
      }

   }

    
}