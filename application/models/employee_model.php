<?php 

class Employee_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get($id='')
    {
		$sql		= " SELECT * FROM ms_employee
						WHERE id = $id ";
		
        $hasil      = $this->db->query($sql);
        return $hasil;
    }
    function getAll()
    {
        $sql         = "select * from ms_employee order by name";
        $hasil       = $this->db->query($sql);
        return $hasil;
    }
    function save($data)
    {
        if($this->db->insert('ms_employee',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function update($id,$data)
    {
        $this->db->where('id',$id);
        return $this->db->update('ms_employee',$data);
    }
    function delete($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('ms_employee');
    }
}

?>
