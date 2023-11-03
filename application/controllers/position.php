<?php
class Position extends CI_Controller
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
        $data['title']              = ' | Daftar Jabatan';
        $data['data']           	= $this->employee_position_model->getAll();
		
		$this->load->view('position/lists',$data);
    }

	function form($trx)
    {
        if ($trx=="db_add")
        {
            $data['title']          = ' | Input Data Jabatan';
			$data['employee']    	= $this->employee_model->getAll();
			$data['departement']    = $this->departement_model->getAll();
			$data['position']       = $this->position_model->getAll();
			$data['data']           = $this->employee_position_model->getAll();
            $this->load->view("position/form",$data);
        }
        elseif ($trx=="db_edit")
        {   
            $data['title']          = ' | Edit Data Jabatan';
            $data['data']           = $this->employee_position_model->get($this->uri->segment(4));
            $this->load->view("position/form_edit",$data);
        }
        elseif ($trx=="db_del")
        {
            $this->exec($trx,$this->uri->segment(4));
        }
    }

	function exec($trx)
	{
		$data['name']           = $this->input->post('name');
		if ($trx=="db_add") 
        {
			if($this->employee_position_model->save($data)) {
				echo '<script type="text/javascript">alert("Successfully Stored!");window.location="'.base_url().'index.php/position";</script>';
			} else {
				echo '<script type="text/javascript">alert("Failed to Save!");history.go(-1);</script>';
			}
		}
		elseif ($trx=="db_edit")
        {
			if($this->employee_position_model->update($this->input->post('id'),$data))
            {
                echo '<script type="text/javascript">alert("Update Successfully!");window.location="'.base_url().'index.php/position";</script>';
            }
            else
            {
                echo '<script type="text/javascript">alert("Failed to Save!");history.go(-1);</script>';
            }
		}
		elseif ($trx=="db_del")
        {
            if($this->employee_position_model->delete($this->uri->segment(4)))
            {
                echo '<script type="text/javascript">alert("Delete Successfully!");window.location="'.base_url().'index.php/position;</script>';
            }
        }
	}
}
