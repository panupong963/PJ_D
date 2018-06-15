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
		$this->load->view('start');
		$this->load->view('Navigation_N');
		$this->load->view('New');
		$this->load->view('footer');
		$this->load->view('End');
		//$this->load->view('test');
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

	public function finance_SelectST_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/SelectST');
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

	public function finance_ST_1(){
		$this->load->view('Finance_1/start');
		$this->load->view('Finance_1/Navigation_N');
		$this->load->view('Finance_1/ST');
		$this->load->view('Finance_1/footer');
		$this->load->view('Finance_1/End');
	}
}