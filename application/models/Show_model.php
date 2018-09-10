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

    
    public function insert_entry($data)
    {
        $this->db->insert('offices', $data);
    }
    
    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();
        
        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    public function insert_job($data)
    {
        $this->db->insert('job', $data);
    }
    public function insert_work($data)
    {
        $this->db->insert('work', $data);
    }   
    
}
