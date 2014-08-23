<?php

class SuperUsersController extends \BaseController {

    //protected $layout = 'admin.layouts.master';

    public function __construct(){
    
	$this->common_helpers =  new Helpers();
	$this->beforeFilter('csrf', array('on' => 'post'));
	
	
    }
	
    public function index()
    {
	    //print_r($this->common_helpers->getKeyValueArray('1', $this->common_helpers->bodyTypeArray()));
	    //die;
	    return View::make('admin.login.index');
    }
    
    
    public function postSignin()
    {
	    
	//$email = Input::get('email');
	$username = Input::get('username');
	$password = Input::get('password');
	//print_r(Hash::make($password));
	//die;
	// $2y$10$wD1/5L1eWUvjqZ7bcG/n/OgvLk8114EC8tXGGrjn8pSvnf/m8TLKa
	
	if (Auth::attempt(['username' => $username, 'password' => $password])) {
	
	    return Redirect::to('/admin/dashboard')
	    ->with('success', 'You have successfully logged in.');
	    
	     //return Redirect::intended('/user');
	}
	
	
	return Redirect::to('/admin/login')
	->with('warning', 'Your username/password combination was incorrect!')
	->withInput();
    }
    
    
    public function getLogout()
    {
	Auth::logout();
	
	return Redirect::to('/admin/login')
	->with('flash_notice', "You have successfully logged out.");
    }


}

//http://vitalets.github.io/x-editable/demo-bs3.html?c=popup
// http://bootsnipp.com/resources
