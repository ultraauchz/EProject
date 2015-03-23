<?php 

class Menus_model extends MY_Model
{
	
	function __construct()
    {
        parent::Model();
    }
    
    function get($id)
    {
    	$sql = 'select * from system_menus where id = ?';
    	return $this->db->GetRow($sql,$id);
    }
    
	
}

?>