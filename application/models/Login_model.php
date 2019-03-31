<?php

class Login_model extends CI_Model {
    public function checkLogin($username,$password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get('login'); 
		if ($query->num_rows() == 1) {
			$row = $query->row();
			if($row->username == $username && $row->password==$password && $row->ST == "1"){
				//set session
 				$this -> session -> set_userdata('userlogin',true);
 				$this -> session -> set_userdata('userid',$row->login_id);
 				$this -> session -> set_userdata('username',$row->username);
                $this -> session -> set_userdata('ST',$row->ST);
                $this -> session -> set_userdata('student_code',$row->student_code);
                $this -> session -> set_userdata('OFFICERID',$row->OFFICERID);
                

 				$this->db->where('student_code', $row->student_code);
 				$query2 = $this->db->get('student'); 
 				$row2 = $query2->row();

 				$this->session->set_userdata('STUDENTNAME', $row2->STUDENTNAME);
 				$this->session->set_userdata('STUDENTEMAIL', $row2->STUDENTEMAIL);
 				$this->session->set_userdata('PARENTPHONENO', $row2->PARENTPHONENO);
 				$this->session->set_userdata('BANKACCOUNT', $row2->BANKACCOUNT);
 				$this->session->set_userdata('Bank_Name', $row2->Bank_Name);
 				$this->session->set_userdata('Job_ID',$row2->Job_ID);
 				
 				$this->db->where('Job_ID', $row2->Job_ID);
 				$query3 = $this->db->get('Job'); 
 				$row3 = $query3->row();

 				$this->session->set_userdata('job_name_ss', $row3->job_name_ss);
 				$this->session->set_userdata('Job_Name', $row3->Job_Name);
 				$this->session->set_userdata('ss', $row3->ss);
 				$this->session->set_userdata('Contact', $row3->Contact);
                $this->session->set_userdata('Frist_date', $row3->Frist_date);

 				return true;


 				}else if($row->username == $username && $row->password==$password && $row->ST != "1"){
 				$this -> session -> set_userdata('userlogin',true);
 				$this -> session -> set_userdata('userid',$row->login_id);
 				$this -> session -> set_userdata('username',$row->username);
                $this -> session -> set_userdata('ST',$row->ST);
                $this -> session -> set_userdata('OFFICERID',$row->OFFICERID);

 				$this->db->where('OFFICERID', $row->OFFICERID);
 				$query4 = $this->db->get('employees'); 
 				$row4 = $query4->row();

 				$this->session->set_userdata('OFFICERNAME', $row4->OFFICERNAME);
                $this->session->set_userdata('Jobs', $row4->Jobs);
                $this->session->set_userdata('contact', $row4->contact);

                $this->db->where('Schedule_ID', '1');
                $query5 = $this->db->get('calendar'); 
                $row5 = $query5->row();

                $this->session->set_userdata('semester', $row5->semester);
                $this->session->set_userdata('Year', $row5->Year);

                $this->session->set_userdata('Start_Date', $row5->Start_Date);
                $this->session->set_userdata('End_Date', $row5->End_Date);

                $this->db->where('Schedule_ID', '2');
                $query6 = $this->db->get('calendar'); 
                $row6 = $query6->row();

                $this->session->set_userdata('semester2', $row6->semester);
                $this->session->set_userdata('Year2', $row6->Year);
                $this->session->set_userdata('Start_Date2', $row6->Start_Date);
                $this->session->set_userdata('End_Date2', $row6->End_Date);


                $this->db->where('Schedule_ID', '3');
                $query7 = $this->db->get('calendar'); 
                $row7 = $query7->row();

                $this->session->set_userdata('semester3', $row7->semester);
                $this->session->set_userdata('Year3', $row7->Year);
                $this->session->set_userdata('Start_Date3', $row7->Start_Date);
                $this->session->set_userdata('End_Date3', $row7->End_Date);


                $this->db->where('Schedule_ID', '4');
                $query8 = $this->db->get('calendar'); 
                $row8 = $query8->row();

                $this->session->set_userdata('semester4', $row8->semester);
                $this->session->set_userdata('Year4', $row8->Year);
                $this->session->set_userdata('Start_Date4', $row8->Start_Date);
                $this->session->set_userdata('End_Date4', $row8->End_Date);


                $this->db->where('Schedule_ID', '5');
                $query9 = $this->db->get('calendar'); 
                $row9 = $query9->row();

                $this->session->set_userdata('semester5', $row9->semester);
                $this->session->set_userdata('Year5', $row9->Year);
                $this->session->set_userdata('Start_Date5', $row9->Start_Date);
                $this->session->set_userdata('End_Date5', $row9->End_Date);

				//$this->session->set_userdata('job_name_ss', $row4->job_name_ss);
 				
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