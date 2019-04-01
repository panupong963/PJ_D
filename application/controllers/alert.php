<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alert extends CI_Controller {

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
		
		$this->load->model('alert_model');
        $res = $this->alert_model->get_calendar();
        $data['calendar_res'] = $res;

		$this->load->model('alert_model');
        $res = $this->alert_model->get_work();
        $data['work_res'] = $res;

		$this->load->model('alert_model');
        $res = $this->alert_model->get_st();
        $data['st_res'] = $res;

        $this->load->model('alert_model');
        $res = $this->alert_model->get_date();
        $data['date_res'] = $res;

        $this->load->model('alert_model');
        $res = $this->alert_model->get_warning();
        $data['wa_res'] = $res;

		$this->load->view('Alert_1/form', $data);
	}

	public function  alert_w(){
		//exit($_POST["alert_date"].$_POST["id"]);
		$data["alert_date"] = $_POST["alert_date"];
		$id = $_POST["id"];
        
        $this->load->model('Show_model');   
        $this->Show_model->update_job($data,$id); 

        
        $data2["Notifications_ID"] = $_POST["id"];
        $data2["Notifications_Type"] = "เเจ้งเตือน";
        $data2["Notifications_Date"] = date('Y-m-d');
        $data2["Notifications_Detail"] = "ไม่บันทึกการทำงานตามช่วงเวลาที่กำหนด";
        $data2["Notifications_Number"] = $_POST["Notifications_Number"];

        $this->load->model('alert_model');   
        $this->alert_model->insert_warning($data2); 

        redirect('alert/index');
    }


	public function  test(){
		//exit($_POST["alert_date"].$_POST["id"]);
	$this->load->view('Alert_1/test');
    }
}