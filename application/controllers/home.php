<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

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
        $this->load->view('Login_N');
        
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
        	redirect("home/Student_ConfirmJob_2");
        	}else if($this -> session -> userdata ( 'ST' )=="2"){
        	redirect("home/Authorities_CA_2");
        	}else if($this -> session -> userdata ( 'ST' )=="3"){
        	redirect("home/Finance_CA_2");
        	}else if($this -> session -> userdata ( 'ST' )=="4"){
        	redirect("home/JobOffering_CA_2");
        	}else if($this -> session -> userdata ( 'ST' )=="5"){
        	redirect("home/print");
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


    public function  insertwork(){
        $data["Work_Date"] = $_POST["Work_Date"];
        $data["Work_Start"] = $_POST["Work_Start"];
        $data["Work_Finish"] = $_POST["Work_Finish"];
        $data["Job_Description"] = $_POST["Job_Description"];

        
        $this->load->model('Show_model');
        $res = $this->Show_model->insert_work($data);
        redirect('home/Student_SaveJob_2');
        
    }	









public function testlog(){
	$this->load->view('login');
}


	public function login(){
		$this->load->view('Login_N');
	}

	public function register(){
		$this->load->view('register');
	}

	public function CA()
	{
		$this->load->view('start');
		$this->load->view('Navigation_N');
		$this->load->view('Calendar');
		$this->load->view('footer');
		$this->load->view('End');
		//$this->load->view('test');
	}

	public function Student_SaveJob_2(){
		$this->load->view('Student_2/start');
		$this->load->view('Student_2/Navigation_N');
		$this->load->view('Student_2/Save_work');
		$this->load->view('Student_2/footer');
		$this->load->view('Student_2/End');
	}

	public function Student_CA_2(){
		$this->load->view('Student_2/start');
		$this->load->view('Student_2/Navigation_N');
		$this->load->view('Calendar');
		$this->load->view('Student_2/footer');
		$this->load->view('Student_2/End');
	}

	public function Student_ConfirmJob_2(){

		$this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_student();
        $data['student_res'] = $res;       


		$this->load->view('Student_2/start');
		$this->load->view('Student_2/Navigation_N');
		$this->load->view('Student_2/Confirm_job', $data);
		$this->load->view('Student_2/footer');
		$this->load->view('Student_2/End');
	}

	public function Student_list_2(){
		$this->load->view('Student_2/start');
		$this->load->view('Student_2/Navigation_N');
		$this->load->view('Student_2/List');
		$this->load->view('Student_2/footer');
		$this->load->view('Student_2/End');
	}	


	public function Authorities_edit_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/Edit');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}


	public function Authorities_CA_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Calendar');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_NoConfirm_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/NoConfirm');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_YConfirm_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/YConfirm');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_job_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/job');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_confirm_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/Confirm');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}	

	public function Authorities_results1_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/Results_job');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_results2_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/Results_work');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Finance_edit_2(){
		$this->load->view('Finance_2/start');
		$this->load->view('Finance_2/Navigation_N');
		$this->load->view('Finance_2/Edit');
		$this->load->view('Finance_2/footer');
		$this->load->view('Finance_2/End');		
	}

	public function Finance_CA_2(){
		$this->load->view('Finance_2/start');
		$this->load->view('Finance_2/Navigation_N');
		$this->load->view('Calendar');
		$this->load->view('Finance_2/footer');
		$this->load->view('Finance_2/End');		
	}

	public function Finance_results_2(){
		$this->load->view('Finance_2/start');
		$this->load->view('Finance_2/Navigation_N');
		$this->load->view('Finance_2/Results_work');
		$this->load->view('Finance_2/footer');
		$this->load->view('Finance_2/End');		
	}

	public function JobOffering_edit_2(){
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/Edit');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_CA_2(){
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('Calendar');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_confirm_2(){
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/Confirm');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_job_2(){
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/job');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_results_2(){
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/Results_work');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_dataST_2(){
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/DataST');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_NoConfirm_2(){
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/NoConfirm');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_YConfirm_2(){
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/YConfirm');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}


	public function from_s(){
		$this->load->view('print/start');
		$this->load->view('print/from_1');
		$this->load->view('print/End');		
	}

	public function from_l(){
		$this->load->view('print/start');
		$this->load->view('print/from_2');
		$this->load->view('print/End');		
	}

	public function print(){
		$this->load->view('coordinate/start');
		$this->load->view('coordinate/Navigation_N');
		$this->load->view('coordinate/print');
		$this->load->view('coordinate/footer');
		$this->load->view('coordinate/End');		
	}

	public function print_l(){
		$this->load->view('coordinate/start');
		$this->load->view('coordinate/Navigation_N');
		$this->load->view('coordinate/print_2');
		$this->load->view('coordinate/footer');
		$this->load->view('coordinate/End');		
	}


	public function JobOffering_job2_2(){
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/job2');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}





 







	public function Authorities_job2_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/job2');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_job3_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/job3');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_job4_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/job4');
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}




}

