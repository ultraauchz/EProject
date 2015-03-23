<?php 

class users_model extends MY_Model
{
	public $table = 'system_users';
	public $join = ' left join system_usergroups on system_users.system_usergroup_id = system_usergroups.id ';
	public $select = 'system_users.*,system_usergroups.name usergroup_name ';
	function __construct()
    {
        parent::Model();
    }
        
	
}

?>