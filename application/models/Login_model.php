<?php

class Login_model extends CI_Model {
    public function checkLogin($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get('login'); 
		if ($query->num_rows() == 1) {
			$row = $query->row();
			if($row->username == $username && $row->password==$password){
				//set session
 				$this -> session -> set_userdata('userlogin',true);
 				$this -> session -> set_userdata('userid',$row->login_id);
 				$this -> session -> set_userdata('username',$row->username);
                $this -> session -> set_userdata('ST',$row->ST);
                $this -> session -> set_userdata('student_code',$row->student_code);

 				$this->db->where('student_code', $row->student_code);
 				$query2 = $this->db->get('student'); 
 				$row2 = $query2->row();

 				$this->session->set_userdata('STUDENTNAME', $row2->STUDENTNAME);
 				$this->session->set_userdata('STUDENTEMAIL', $row2->STUDENTEMAIL);
 				$this->session->set_userdata('PARENTPHONENO', $row2->PARENTPHONENO);
 				$this->session->set_userdata('BANKACCOUNT', $row2->BANKACCOUNT);
 				$this->session->set_userdata('Bank_Name', $row2->Bank_Name);
 				
 				

 				/*$this -> session -> set_userdata('userautority',$row->autority=1);
 				$this -> session -> set_userdata('userofficeid',$row->officerid);
 				
 				$this->db->where('officerid', $row->officerid);
 				$query2 = $this->db->get('officer'); 
 				$row2 = $query2->row();
				$this -> session -> set_userdata('userfname',$row2->Officername);
 				$this -> session -> set_userdata('userlname',$row2->Officersurname);
 				$this -> session -> set_userdata('useremail',$row2->Officermail);
 				
 				
 				$this->db->where('prefixid', $row2->Prefixid);
 				$query3 = $this->db->get('prefix'); 
 				$row3 = $query3->row();
 				$this -> session -> set_userdata('userprefixname',$row3->Prefixname);
 				*/
         		
             	
				return true;
			}else{
				 				$this -> session -> set_userdata('user_login',false);

				return false;
			}
		}else{
			 				$this -> session -> set_userdata('user_login',false);

			return false;
		}


		var_dump($query);
    }
    public function get_useq()
    {
        $query = $this->db->query('select gr_sch, gr_value from grahp_demo where gr_type = 2 ORDER BY gr_sch  ');
        return $query->result();
    }


    public function get_login()
    {
    	$query = $this->db->query('select * from pj');
        //$query = $this->db->query('select * from customers ORDER BY customerName  DESC');
        
        return $query->result();
    }
}