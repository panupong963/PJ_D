<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home2 extends CI_Controller {

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
	 */
	public function index()
    {
        $user_login  =  $this -> session -> userdata ( 'user_login' );
        
        if($user_login==null){
            //echo "xxxxx";
            $this->loginfrom();
            
        }else {
            echo "yyyy";
        }
       
    }
    public function loginfrom()
    {
        $this->load->view('Login_M');
        
    }
    
    public function checklogin()
    {
        $username = $this -> input -> post ( 'username' );
        $password =$this -> input -> post ( 'password' );
        

        
        // if($u=="admin" && $p=="admin"){
        //     $this -> session -> set_userdata ( 'user_login' ,  true );
        //     $this -> session -> set_userdata ( 'user_autority' ,  1 );
        //     redirect("createq/indexad");
        // }
        // if($u=="na" && $p=="14"){
        //     $this -> session -> set_userdata ( 'user_login' ,  true );
        //     $this -> session -> set_userdata ( 'user_autority' ,  2 );
        //     redirect("createq/indexqm");
        // }
        $this->load->model('Login_model');
        $chk = $this->Login_model->checkLogin($username,$password);

      

        if($chk){
        	
        	if($this -> session -> userdata ( 'ST' )=="1") {
           //redirect("createq/indexqm");
        	redirect("home2/Student_CA_1");

        	}else if($this -> session -> userdata ( 'ST' )=="2"){
        	redirect("home2/authorities_BuildCalendar_1");
        	}else if($this -> session -> userdata ( 'ST' )=="3"){
        	redirect("home2/finance_CA_1");
        	}else if($this -> session -> userdata ( 'ST' )=="4"){
        	redirect("home2/Advisors_announced_1");
        	}

        }else{

            echo "XXXXXXXXXXXXXXXXXX===Not OK";

        }

        
    }
    
    public function logout()
    {
        $this -> session -> set_userdata ( 'userlogin' ,  FALSE );
        $this->loginfrom();
        
    }










	public function login(){
		$this->load->view('login_N');
	}

	public function Student_registration_1(){
		$this->load->view('Student_1/start');
		$this->load->view('Student_1/Navigation_N');
		$this->load->view('Student_1/Registration');
		$this->load->view('Student_1/footer');
		$this->load->view('Student_1/End');
	}

	public function Student_CA_1(){
		$this->load->view('Student_1/start');
		$this->load->view('Student_1/Navigation_N');
		$this->load->view('Calendar');
		$this->load->view('Student_1/footer');
		$this->load->view('Student_1/End');
	}
	
	public function Student_announced_1(){
		$this->load->view('Student_1/start');
		$this->load->view('Student_1/Navigation_N');
		$this->load->view('Student_1/Announced');
		$this->load->view('Student_1/footer');
		$this->load->view('Student_1/End');
	}

	public function Student_list_1(){
		$this->load->view('Student_1/start');
		$this->load->view('Student_1/Navigation_N');
		$this->load->view('Student_1/List');
		$this->load->view('Student_1/footer');
		$this->load->view('Student_1/End');
	}	
		

	public function authorities_BuildCalendar_1(){
		$this->load->view('Authorities_1/start');
		$this->load->view('Authorities_1/Navigation_N');
		$this->load->view('Authorities_1/BuildCalendar');
		$this->load->view('Authorities_1/footer');
		$this->load->view('Authorities_1/End');
	}

	public function authorities_CA_1(){
		$this->load->view('Authorities_1/start');
		$this->load->view('Authorities_1/Navigation_N');
		$this->load->view('Calendar');
		$this->load->view('Authorities_1/footer');
		$this->load->view('Authorities_1/End');
	}

	public function authorities_Examine_1(){
		$this->load->view('Authorities_1/start');
		$this->load->view('Authorities_1/Navigation_N');
		$this->load->view('Authorities_1/Examine');
		$this->load->view('Authorities_1/footer');
		$this->load->view('Authorities_1/End');
	}	

	public function authorities_Declare_1(){
		$this->load->view('Authorities_1/start');
		$this->load->view('Authorities_1/Navigation_N');
		$this->load->view('Authorities_1/Declare');
		$this->load->view('Authorities_1/footer');
		$this->load->view('Authorities_1/End');
	}

	public function authorities_NewDeclare_1(){
		$this->load->view('Authorities_1/start');
		$this->load->view('Authorities_1/Navigation_N');
		$this->load->view('Authorities_1/NewDeclare');
		$this->load->view('Authorities_1/footer');
		$this->load->view('Authorities_1/End');
	}

	public function finance_WriteDescription_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/WriteDescription');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}

	public function finance_CA_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Calendar');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}

	public function finance_SelectST_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/SelectST');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}
	public function finance_Results_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/Results');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}

	public function finance_TranscendJob_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/TranscendJob');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}

	public function finance_work_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/Work');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}	

	public function finance_job_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/job');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}
	public function finance_Remaining_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/Remaining');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}
	public function finance_Selection_Results_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/Selection_Results');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}
	public function finance_Selection_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/Selection');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}
	public function finance_balance_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/balance');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}


	public function Advisors_announced_1(){
		$this->load->view('Advisors_1/start');
		$this->load->view('Advisors_1/Navigation_N');
		$this->load->view('Advisors_1/Advisors_1');
		$this->load->view('Advisors_1/footer');
		$this->load->view('Advisors_1/End');
	}
	public function Boss_announced_1(){
		$this->load->view('Boss_1/start');
		$this->load->view('Boss_1/Navigation_N');
		$this->load->view('Boss_1/Boss_1');
		$this->load->view('Boss_1/footer');
		$this->load->view('Boss_1/End');
	}	




    public function  insertjob(){
        $data["Job_Name"] = $_POST["Job_Name"];
        $data["Category"] = $_POST["Category"];
        $data["Job_description"] = $_POST["Job_description"];
        $data["Attribute_applicants"] = $_POST["Attribute_applicants"];
        $data["Frist_date"] = $_POST["Frist_date"];
        $data["Sex"] = $_POST["Sex"];
        $data["Job_status"] = '0';
        
        $this->load->model('Show_model');
        $res = $this->Show_model->insert_job($data);
        redirect('home2/finance_WriteDescription_1');
        
    }				
}