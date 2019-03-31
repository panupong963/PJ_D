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
        $data["Work_Start2"] = $_POST["Work_Start2"];
        $data["Work_Finish2"] = $_POST["Work_Finish2"];
        $data["Job_Description"] = $_POST["Job_Description"];
        $data["Work_Status"] = "0";
        if($_POST["Work_Start"] <= $_POST["Work_Finish"]){
        $sum = $_POST["Work_Finish"] - $_POST["Work_Start"];
    	}else{
    	$sum = $_POST["Work_Start"] - $_POST["Work_Finish"];
    	}
        $sum = $sum * 60;
        if($_POST["Work_Start2"] <= $_POST["Work_Finish2"]){
        	$sum2 = $_POST["Work_Finish2"] - $_POST["Work_Start2"];
        }else{
        	$sum2 = $_POST["Work_Start2"] - $_POST["Work_Finish2"];
        }
        $sum3 = $sum + $sum2;
        $data["Work_Hour"] = $sum3;
        
        $data["Job_ID"] =  $this -> session -> userdata ( 'Job_ID' );
        $data["STUDENTCODE"] =  $this -> session -> userdata ( 'student_code' );




        $this->load->model('Show_model');
        $res = $this->Show_model->insert_work($data);

                //ของวันเตือน
        $id = $this -> session -> userdata ( 'student_code' );
        $date = date_create($_POST["Work_Date"]);
        date_add($date, date_interval_create_from_date_string('7 days'));
        //echo date_format($date, 'Y-m-d');
        $day_alert = date_format($date, 'Y-m-d');
        $data2["alert_date"] = $day_alert;
        $this->load->model('Show_model');   
        $this->Show_model->update_st($data2,$id); 
        redirect('home/Student_SaveJob_2');


        
    }

    public function update_JO(){ // update เเก้ไขข้อมูล
    	$id = $this->uri->segment('3');
		$data["Work_Status"] = 1;
         
         //$id1 = $this->input->post('id');
         $this->load->model('Show_model');   
         $this->Show_model->update_work($data,$id); 
        
         //redirect('customer/index');
         redirect("home/JobOffering_confirm_2");
    }    

    public function update_student(){ // update เเก้ไขข้อมูล
        $data["STUDENTEMAIL"] = $_POST["STUDENTEMAIL"];
        $data["PARENTPHONENO"] = $_POST["PARENTPHONENO"];
        $data["Bank_Name"] = $_POST["Bank_Name"];
        $data["BANKACCOUNT"] = $_POST["BANKACCOUNT"];
         
         //$id1 = $this->input->post('id');
         $id = $_POST["id"];
         $this->load->model('Show_model');   
         $this->Show_model->update_student($data,$id); 
        
         //redirect('customer/index');
         redirect("home/Student_ConfirmJob_2");
    }

    public function update_student_confirm(){ // update เเก้ไขข้อมูล ไม่ผาน
        $data["Reason_certifying"] = $_POST["Reason_certifying"];
        $data["Work_Status"] = 2;
         //$id1 = $this->input->post('id');
         $id = $_POST["id"];
         $this->load->model('Show_model');   
         $this->Show_model->update_work($data,$id); 
        
         //redirect('customer/index');
         redirect("home/JobOffering_confirm_2");
    }

    public function update_student2(){ // update ยืนยันข้อมูล
        //exit($_POST["da"]);
    	if($_POST["da"] == Null){
    		$data["Re_status"] = "1";
            $date = date_create($this -> session -> userdata ( 'Frist_date' ));
            date_add($date, date_interval_create_from_date_string('7 days'));
            //echo date_format($date, 'Y-m-d');
            $day_alert = date_format($date, 'Y-m-d');
            $data["alert_date"] = $day_alert;
    	}else{
    		$data["Re_status"] = "2";
    		$data["Reason_ST"] = $_POST["ss"];
    	}	

        

         
         //$id1 = $this->input->post('id');
         $id = $_POST["id"];
         $this->load->model('Show_model');   
         $this->Show_model->update_student2($data,$id); 
        
         //redirect('customer/index');
         redirect("home/Student_ConfirmJob_2");
    }
    public function update_student3(){ // update ยืนยันข้อมูล
        if($_POST["txt"] == Null){
            $data["Re_status"] = "2";
        }else{
            $data["Re_status"] = "2";
            $data["Reason_ST"] = $_POST["txt"];
        }   

        

         
         //$id1 = $this->input->post('id');
         $id = $_POST["id"];
         $this->load->model('Show_model');   
         $this->Show_model->update_student2($data,$id); 
        
         //redirect('customer/index');
         redirect("home/Student_ConfirmJob_2");
    }

    public function update_edit(){
    	$data["Work_Date"] = $_POST["Work_Date"];
        $data["Work_Start"] = $_POST["Work_Start"];
        $data["Work_Finish"] = $_POST["Work_Finish"];
        $data["Work_Start2"] = $_POST["Work_Start2"];
        $data["Work_Finish2"] = $_POST["Work_Finish2"];
        $data["Job_Description"] = $_POST["Job_Description"];
        if($_POST["Work_Start"] <= $_POST["Work_Finish"]){
        $sum = $_POST["Work_Finish"] - $_POST["Work_Start"];
    	}else{
    	$sum = $_POST["Work_Start"] - $_POST["Work_Finish"];
    	}
        $sum = $sum * 60;
        if($_POST["Work_Start2"] <= $_POST["Work_Finish2"]){
        	$sum2 = $_POST["Work_Finish2"] - $_POST["Work_Start2"];
        }else{
        	$sum2 = $_POST["Work_Start2"] - $_POST["Work_Finish2"];
        }
        $sum3 = $sum + $sum2;
        $data["Work_Hour"] = $sum3;
        

        $id = $_POST["id"];
         $this->load->model('Show_model');   
         $this->Show_model->update_work($data,$id); 
         //redirect('customer/index');
         redirect("home/Student_ConfirmJob_2");
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
	public function Student_Save(){

		$id = $this->uri->segment('3');

		$this->load->model('Show_model');
        $res = $this->Show_model->get_edit($id);
        $data['edit_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_student();
        $data['student_res'] = $res;    

		/*$this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res;*/

		$this->load->view('Student_2/start');
		$this->load->view('Student_2/Navigation_M');
		$this->load->view('Student_2/Save', $data);
		$this->load->view('Student_2/footer');
		$this->load->view('Student_2/End');

	}

	public function Student_SaveJob_2(){
		$id = $this->uri->segment('3');

		$this->load->model('Show_model');
        $this->Show_model->delete_work($id);		

		$this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_student();
        $data['student_res'] = $res;   

		$this->load->view('Student_2/start');
		$this->load->view('Student_2/Navigation_N');
		$this->load->view('Student_2/Save_work', $data);
		$this->load->view('Student_2/footer');
		$this->load->view('Student_2/End');
	}

	public function Student_CA_2(){
		$this->load->model('Show_model');
        $res = $this->Show_model->get_calendar();
        $data['calendar_res'] = $res;	

		$this->load->view('Student_2/start');
		$this->load->view('Student_2/Navigation_N');
		$this->load->view('Calendar', $data);
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

		$this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res;

		$this->load->view('Student_2/start');
		$this->load->view('Student_2/Navigation_N');
		$this->load->view('Student_2/List', $data);
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
		$this->load->model('Show_model');
        $res = $this->Show_model->get_calendar();
        $data['calendar_res'] = $res;

		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Calendar', $data);
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_NoConfirm_2(){
		$id = $this->uri->segment('3');

		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO($id);
        $data['student_res'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO2($id);
        $data['job_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_JO3($id);
        $data['work_res'] = $res;        

		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/NoConfirm', $data);
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_YConfirm_2(){
		$id = $this->uri->segment('3');

		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO($id);
        $data['student_res'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO2($id);
        $data['job_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_JO3($id);
        $data['work_res'] = $res;        

		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/YConfirm' ,$data);
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_job_2(){
		$id = $this->uri->segment('3');
		//exit($id);
		//$this->load->model('Show_model');
        //$this->Show_model->delete_work($id);		

		$this->load->model('Show_model');
        $res = $this->Show_model->get_edit_JO($id);
        $data['job_res'] = $res;

 		$this->load->model('Show_model');
        $res = $this->Show_model->get_student();
        $data['student_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res;  

		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_M');
		$this->load->view('Authorities_2/job', $data);
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_confirm_2(){
		$this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_student();
        $data['student_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res;

		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/Confirm', $data);
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}	

	public function Authorities_results1_2(){
		$this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;  

        $this->load->model('Show_model');
        $res = $this->Show_model->get_student();
        $data['student_res'] = $res;  

		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/Results_job' ,$data);
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_results2_2(){
		$this->load->model('Show_model');
        $res = $this->Show_model->get_student2();
        $data['student_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;

		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/Results_work', $data);
		$this->load->view('Authorities_2/footer');
		$this->load->view('Authorities_2/End');		
	}

	public function Authorities_results2_23(){
		$id = $_POST["STUDENTNAME"];
		//exit($id);
		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO5($id);
        $data['student_res2'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_student2();
        $data['student_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;

		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/Results_W2', $data);
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
		$this->load->model('Show_model');
        $res = $this->Show_model->get_calendar();
        $data['calendar_res'] = $res;	

		$this->load->view('Finance_2/start');
		$this->load->view('Finance_2/Navigation_N');
		$this->load->view('Calendar', $data);
		$this->load->view('Finance_2/footer');
		$this->load->view('Finance_2/End');		
	}

	public function Finance_results_2(){
		$this->load->model('Show_model');
        $res = $this->Show_model->get_student2();
        $data['student_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;


		$this->load->view('Finance_2/start');
		$this->load->view('Finance_2/Navigation_N');
		$this->load->view('Finance_2/Results_work' ,$data);
		$this->load->view('Finance_2/footer');
		$this->load->view('Finance_2/End');		
	}

	public function Finance_results_23(){
		
		$id = $_POST["STUDENTNAME"];
		//exit($id);
		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO5($id);
        $data['student_res2'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_student2();
        $data['student_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;

		$this->load->view('Finance_2/start');
		$this->load->view('Finance_2/Navigation_N');
		$this->load->view('Finance_2/Results_W2' ,$data);
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
		$this->load->model('Show_model');
        $res = $this->Show_model->get_calendar();
        $data['calendar_res'] = $res;	

		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('Calendar', $data);
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_confirm_2(){
		$this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_student();
        $data['student_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res; 

		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/Confirm', $data);
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_job_2(){
		$id = $this->uri->segment('3');
		//exit($id);
		//$this->load->model('Show_model');
        //$this->Show_model->delete_work($id);		

		$this->load->model('Show_model');
        $res = $this->Show_model->get_edit_JO($id);
        $data['job_res'] = $res;

 		$this->load->model('Show_model');
        $res = $this->Show_model->get_student();
        $data['student_res'] = $res; 

         $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res;      

		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_M');
		$this->load->view('JobOffering_2/job', $data);
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_results_2(){


		$this->load->model('Show_model');
        $res = $this->Show_model->get_student2();
        $data['student_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;

		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/Results_work', $data);
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

		public function JobOffering_results_23(){
		
		$id = $_POST["STUDENTNAME"];
		//exit($id);
		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO5($id);
        $data['student_res2'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_student2();
        $data['student_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;

		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/Results_W2', $data);
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_dataST_2(){
		$this->load->model('Show_model');
        $res = $this->Show_model->get_job();
        $data['job_res'] = $res;  

        $this->load->model('Show_model');
        $res = $this->Show_model->get_student();
        $data['student_res'] = $res;  
		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N' , $data);
		$this->load->view('JobOffering_2/DataST');
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_NoConfirm_2(){
		$id = $this->uri->segment('3');

		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO($id);
        $data['student_res'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO2($id);
        $data['job_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_JO3($id);
        $data['work_res'] = $res;        

		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/NoConfirm', $data);
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}

	public function JobOffering_YConfirm_2(){
		$id = $this->uri->segment('3');

		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO($id);
        $data['student_res'] = $res;

		$this->load->model('Show_model');
        $res = $this->Show_model->get_JO2($id);
        $data['job_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_JO3($id);
        $data['work_res'] = $res;   

		$this->load->view('JobOffering_2/start');
		$this->load->view('JobOffering_2/Navigation_N');
		$this->load->view('JobOffering_2/YConfirm', $data);
		$this->load->view('JobOffering_2/footer');
		$this->load->view('JobOffering_2/End');		
	}


	public function from_s(){
        $id = $this->input->post("FACULTYNAME");
        //$id = $this->uri->segment('3');
        //exit($id);
        $this->load->model('Show_model');
        $res = $this->Show_model->get_p($id);
        $data['student_res'] = $res;

        $this->load->model('Show_model');
        $res = $this->Show_model->get_work();
        $data['work_res'] = $res; 

        $this->load->model('Show_model');
        $res = $this->Show_model->get_p2($id);
        $data['work_res2'] = $res; 

		$this->load->view('print/start');
		$this->load->view('print/from_1', $data);
		$this->load->view('print/End');		
	}

	public function from_l(){
		$this->load->view('print/start');
		$this->load->view('print/from_2');
		$this->load->view('print/End');		
	}

	public function print(){
        $this->load->model('Show_model');
        $res = $this->Show_model->get_facultyname();
        $data['facultyname_res'] = $res;  

		$this->load->view('coordinate/start');
		$this->load->view('coordinate/Navigation_N');
		$this->load->view('coordinate/print', $data);
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

