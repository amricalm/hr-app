<?php
class Employee extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
		
        $this->load->model('employee_model');
    }

    function index()
    {	
        $data['title']              = ' | Daftar Karyawan';
        $data['employee']           = $this->employee_model->getAll();
		
		$this->load->view('employee/lists',$data);
    }

	function employee_form($trx)
    {
        if ($trx=="db_add")
        {
            $data['title']          = ' | Input Data Karyawan';
            $this->load->view("employee/employee_form",$data);
        }
        elseif ($trx=="db_edit")
        {   
            $data['title']          = ' | Edit Data Karyawan';
            $data['data']           = $this->employee_model->get($this->uri->segment(4));
            $this->load->view("employee/employee_form_edit",$data);
        }
        elseif ($trx=="db_del")
        {
            $this->employee_exec($trx,$this->uri->segment(4));
        }
    }

	function employee_exec($trx)
	{
		$data['nip']            = $this->input->post('nip');
		$data['name']           = $this->input->post('name');
		$data['sex']            = $this->input->post('sex');
		$data['startDate']      = $this->input->post('startDate');
		$data['endDate']      	= $this->input->post('endDate');
		if ($trx=="db_add") 
        {
			if($this->employee_model->save($data)) {
				echo '<script type="text/javascript">alert("Successfully Stored!");window.location="'.base_url().'index.php/employee";</script>';
			} else {
				echo '<script type="text/javascript">alert("Failed to Save!");history.go(-1);</script>';
			}
		}
		elseif ($trx=="db_edit")
        {
			if($this->employee_model->update($this->input->post('id'),$data))
            {
                echo '<script type="text/javascript">alert("Update Successfully!");window.location="'.base_url().'index.php/employee";</script>';
            }
            else
            {
                echo '<script type="text/javascript">alert("Failed to Save!");history.go(-1);</script>';
            }
		}
		elseif ($trx=="db_del")
        {
            if($this->employee_model->delete($this->uri->segment(4)))
            {
                echo '<script type="text/javascript">alert("Delete Successfully!");window.location="'.site_url('employee').'";</script>';
            }
        }
	}
}
