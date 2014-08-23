<?php

class AdminHomeController extends BaseController {

    //protected $layout = 'admin.layouts.master';
    
    public function __construct(){
	
	$this->beforeFilter('auth');
	
	$this->common_helpers =  new Helpers();
	//$this->beforeFilter('auth.superuser', array('only' => array('getDashboard')));
	
    }
    
    public function index()
    {
	//print_r($this->common_helpers->getKeyValueArray('1', $this->common_helpers->bodyTypeArray()));
	//die;
	return View::make('admin.home.index');
    }
    
    
        
}
