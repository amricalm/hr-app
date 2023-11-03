<?php 

class Employee_position_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function get($id='')
    {
		$sql		= " SELECT * FROM hr_employee_position
						WHERE id = $id ";
		
        $hasil      = $this->db->query($sql);
        return $hasil;
    }
    function getAll()
    {
        $sql         = "SELECT eppos.id, ep.nip, ep.name, ep.sex, pos.name AS positionName, eppos.activeDate, ep.startDate, ep.endDate
						FROM hr_employee_position eppos
						INNER JOIN ms_employee ep
						ON ep.id = eppos.employeeId
						INNER JOIN hr_position pos
						ON eppos.positionId = pos.id
						ORDER BY nip, activeDate DESC
						";
        $hasil       = $this->db->query($sql);
        return $hasil;
    }
    function save($data)
    {
        if($this->db->insert('hr_employee_position',$data))
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
        return $this->db->update('hr_employee_position',$data);
    }
    function delete($id)
    {
        $this->db->where('id',$id);
        return $this->db->delete('ms_employee');
    }
}

?>
