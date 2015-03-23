<?php
class siteadmin extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
    }    
    
    public function index()
    {
    	$data='';
    	$this->template->build('index',$data);
	}
}	
        