<?php
class Show_model extends CI_Model {
    
    public $title;
    public $content;
    public $date;
    
    public function get_student()
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');
        $query = $this->db->query('select * from student');
        return $query->result();
    }

    public function get_job()
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');
        $query = $this->db->query('select * from job');
        return $query->result();
    }
    public function get_work()
    {
        //$query = $this->db->query('select * from offices ORDER BY officeCode ');
        $query = $this->db->query('select * from work');
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
    public function update_student2($data, $id){ // update เเก้ไขข้อมูล นศห
         $this->db->set($data); 
         $this->db->where("student_code", $id); 
         $this->db->update("student", $data);
    }


    public function update_job($data, $id){ // update เลือกงาน
         $this->db->set($data); 
         $this->db->where("student_code", $id); 
         $this->db->update("student", $data);
    }      
    
}
