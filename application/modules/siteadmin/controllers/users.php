<?php
class users extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('users_model','users');
    }    
    public $menu_id = 3;
    public function index()
    {
    	//$this->db->debug=true;
		$data['menu_id'] = $this->menu_id;
		$data['rs'] = $this->users->order_by('id','desc')->get();
		$data['pagination'] = $this->users->pagination();
    	$this->template->build('users/index',$data);
	}
	
	public function form($id=FALSE){
		$data['menu_id'] = $this->menu_id;
		if($id>0){
			$data['item'] = $this->users->get_row($id);
		}
		$this->template->build('users/form',$data);
	}
}	
        