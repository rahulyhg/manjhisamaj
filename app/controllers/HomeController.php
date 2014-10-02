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
    
    public function __construct(User $user){
	
	$this->common_helpers =  new Helpers();
	$this->user = $user;
	
	$link_arr = $this->common_helpers->getLinksCategory();
	
	$this->links 		= $link_arr['links'];
	$this->link_categories 	= $link_arr['link_categories'];
	
	
    }
    
    
    public function index()
    {
	$links 			= $this->links;
	$link_categories 	= $this->link_categories;
	$castes			= Caste::lists('title', 'id');
	return View::make('front.home.index', compact('castes', 'links', 'link_categories'));
    }
    
    
    public function postSignup()
    {
	$input = Input::all();
        $input['password'] 	= Hash::make(Input::get('password'));
	$input['profile_code'] 	= $this->common_helpers->getProfileId();
	
	if ($this->user->validate($input)) {
	    //print_r('v');
	    //die;
	    $input = array_except($input, array('_token', 'confirm_password'));
	    $obj    = $this->user->create($input);
            return Redirect::to('/')->with('success', 'Updated Record Successfully');
        } else {
            // failure
            $errors = $this->user->errors();
	    //print_r($errors);
	    //die;
	    //Redirect::route('/')
            return 
		Redirect::to('/')
                ->withInput()
                ->withErrors($errors)
                ->with('error', 'There were validation errors.');
        }
    }
    
    

}
