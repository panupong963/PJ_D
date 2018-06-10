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
		$this->load->view('start');
		$this->load->view('Navigation_N');
		$this->load->view('New');
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

	public function Student_ConfirmJob_2(){
		$this->load->view('Student_2/start');
		$this->load->view('Student_2/Navigation_N');
		$this->load->view('Student_2/Confirm_job');
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

	public function Student_1(){
		$this->load->view('Student_1/start');
		$this->load->view('Student_1/Navigation_N');
		$this->load->view('Student_1/Job');
		$this->load->view('Student_1/footer');
		$this->load->view('Student_1/End');
	}

	public function Authorities_edit_2(){
		$this->load->view('Authorities_2/start');
		$this->load->view('Authorities_2/Navigation_N');
		$this->load->view('Authorities_2/Edit');
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

}

