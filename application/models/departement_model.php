<?php 

class Departement_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get($id='')
    {
		$sql		= " SELECT * FROM hr_departement
						WHERE id = $id ";
		
        $hasil      = $this->db->query($sql);
        return $hasil;
    }
    function getAll()
    {
        $sql         = "select * from hr_departement order by name";
        $hasil       = $this->db->query($sql);
        return $hasil;
    }
    function save($data)
    {
        if($this->db->insert('hr_departement',$data))
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
        return $this->db->update('hr_departement',$data);
    }
    function delete($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('hr_departement');
    }
}

?>
