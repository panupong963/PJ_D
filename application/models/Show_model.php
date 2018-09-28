<?php
class Show_model extends CI_Model {
    
    public $title;
    public $content;
    public $date;
    private $table = 'work';

    public function get_student()
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');
        $query = $this->db->query('select * from student ');
        return $query->result();
    }

    public function get_calendar()
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');
        $query = $this->db->query('select * from calendar ');
        return $query->result();
    }

    public function get_employees()
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');
        $query = $this->db->query('select * from employees ');
        return $query->result();
    }

    public function get_student2()//ของ ผู้เสนองาน 
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');
        $query = $this->db->query('select * from student ORDER BY student_code asc');
        return $query->result();
    }

    public function get_job()
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');
        $query = $this->db->query('select * from job');
        return $query->result();
    }

    public function get_edit($id)
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');
        //$query = $this->db->query('select * from job');
        //$query = $this->db->get_where("work",array("Work_ID"=>$id));
        //$data = $query->result();

        //return $data;
        //return $query->result();
        //$query = $this->db->query('select * from work where Work_ID = '.$id2);
        //return $query->result();
        //return $this->db->get_where($this->table, ['Work_ID' => $id2])->row();
        $this->db->select('*');
        $this->db->from('work');
        $this->db->where('Work_ID', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_edit_JO($id){
        $this->db->select('*');
        $this->db->from('job');
        $this->db->where('Job_ID', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_JO($id){
        $this->db->select('*');
        $this->db->from('student');
        $this->db->where('Job_ID', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_JO2($id){
        $this->db->select('*');
        $this->db->from('job');
        $this->db->where('Job_ID', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }    

    public function get_JO3($id){
        $this->db->select('*');
        $this->db->from('work');
        $this->db->where('Job_ID', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    } 

    public function get_AU($id){
        $this->db->select('*');
        $this->db->from('calendar');
        $this->db->where('Schedule_ID', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }    

    public function get_work()
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');

        //$this->db->order_by('updated', 'desc');
        //$query = $this->db->query('select * from work'); 
        // ASC เรียงจากน้อยไปหามาก
        //DESC เรียงจากมากไปหาน้อย 
        $query = $this->db->query('select * from work ORDER BY Work_Date DESC');
        return $query->result();
    }

    
    public function insert_entry($data)
    {
        $this->db->insert('offices', $data);
    }
    
    public function update_studet($id)
    {
    /*$data=array(
        //$this->STUDENTEMAIL    = $_POST['STUDENTEMAIL'];
        //$this->PARENTPHONENO  = $_POST['PARENTPHONENO'];
        //$this->Bank_Name  = $_POST['Bank_Name'];
        //$this->BANKACCOUNT  = $_POST['BANKACCOUNT'];
        //$this->date     = time();
        'STUDENTEMAIL' => $this->input->post('STUDENTEMAIL'),
        'PARENTPHONENO' => $this->input->post('PARENTPHONENO'),
        'Bank_Name' => $this->input->post('Bank_Name'),
        'BANKACCOUNT' => $this->input->post('BANKACCOUNT')
    );
        $this->db->where('student_code', $this->input->post('id'));
        $query=$this->db->update('student', $data); 
        if($query) {
            redirect("home/Student_ConfirmJob_2");
            return TRUE;
        } else {
            return FALSE;
        }     
  
        
        $this->db->update('student', $this, array('student_code' => $_POST['id']));*/
         $this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("student", $data);
    }

    public function delete_work($id){
        $this->db->where('Work_ID', $id);
        $this->db->delete('work');
    }

    public function insert_job($data) //insert ตาราง job
    {
        $this->db->insert('job', $data);
    }
    public function insert_work($data) // insert ตาราง work
    {
        $this->db->insert('work', $data);
    } 

    public function update_student($data, $id){ // update เเก้ไขข้อมูล นศห
         $this->db->set($data); 
         $this->db->where("student_code", $id); 
         $this->db->update("student", $data);
    }
    public function update_calendar($data, $id){ // update เเก้ไขข้อมูล นศห
         $this->db->set($data); 
         $this->db->where("Schedule_ID", $id); 
         $this->db->update("calendar", $data);
    }
    public function update_student2($data, $id){ // update เเก้ไขข้อมูล นศห
         $this->db->set($data); 
         $this->db->where("student_code", $id); 
         $this->db->update("student", $data);
    }

    public function update_work($data, $id){ // update เเก้ไขข้อมูล นศห
         $this->db->set($data); 
         $this->db->where("Work_ID", $id); 
         $this->db->update("work", $data);
    }

    public function update_job($data, $id){ // update เลือกงาน
         $this->db->set($data); 
         $this->db->where("student_code", $id); 
         $this->db->update("student", $data);
    }      
    public function update_job2($data, $id){ // update เลือกงาน
         $this->db->set($data); 
         $this->db->where("Job_ID", $id); 
         $this->db->update("job", $data);
    }  

}
