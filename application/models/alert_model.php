<?php
class alert_model extends CI_Model {
    
    public $title;
    public $content;
    public $date;
    private $table = 'work';

    public function get_calendar()
    {
        $this->db->select('*');
        $this->db->from('calendar');
        $this->db->where('Schedule_ID', '1');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function get_work()
    {
		$query = $this->db->query('select * from work ');
        return $query->result();
	}

    public function get_st()
    {
    	/*$this->db->select('*');
        $this->db->from('student');
        $this->db->where('Re_status', '1');
        $query = $this->db->get();
        $result = $query->result();*/
        $query = $this->db->query('select * from student ');
        return $query->result();
        //return $result;
	}

	  public function get_date()
    {
    	/*$this->db->select('*');
        $this->db->from('job');
        $this->db->where('Frist_date(DATE_ADD(INTERVAL 7 DAY))');
        $query = $this->db->get();*/
        $query = $this->db->query("select * from job ");
   
        $result = $query->result();
        return $result;
	}

}