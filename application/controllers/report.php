<?php
class Report extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
		
        $this->load->model('employee_model');
        $this->load->model('departement_model');
        $this->load->model('position_model');
        $this->load->model('employee_position_model');
    }

    function index()
    {	
        $data['title']              = ' | Laporan Karyawan';
        $data['data']           	= $this->employee_position_model->getAll();
		
		$this->load->view('report/lists',$data);
    }
}
