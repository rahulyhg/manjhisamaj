<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

  	/**
     * The layout that should be used for responses.
     */
    protected $layout = 'front.layouts.master';
    public $common_helpers;
    
    public function __construct(){
	
	$this->common_helpers =  new Helpers();
	
    }
    
    public function index()
    {
	//print_r($this->common_helpers->getKeyValueArray('1', $this->common_helpers->bodyTypeArray()));
	//die;
	
	return View::make('front.home.index');
    }

}
