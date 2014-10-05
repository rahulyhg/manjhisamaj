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
	$active_menu 		=  1;
	$links 			= $this->links;
	$link_categories 	= $this->link_categories;
	$castes			= Caste::lists('title', 'id');
	
	return View::make('front.home.index', compact('active_menu', 'castes', 'links', 'link_categories'));
    }
    
    
    public function getSearch()
    {
	$active_menu 		=  2;
	$links 			= $this->links;
	$link_categories 	= $this->link_categories;
	$castes			= Caste::lists('title', 'id');
	$users			= User::paginate(10);
	
	
	return View::make('front.home.search', compact('active_menu', 'castes', 'links', 'link_categories', 'users'));
    }
    
    public function getUserNameExist()
    {
	$username = Input::get('username');
	$result = User::where('username', '=', $username)->get();
	
	if (!$result->isEmpty()) { 
	    $data['data'] = '';
	    $data['success'] = 0;
	    $data['message'] = 'Username already existed';
	} else {
	    $data['data'] = '';
	    $data['success'] = 1;
	    $data['message'] = 'Username is vaild';
	}
	echo json_encode($data);
	die();
    }
    
    
    public function postSignup()
    {
	$input = Input::all();
        $input['password'] 	= Hash::make(Input::get('password'));
	$input['profile_code'] 	= $this->common_helpers->getProfileId();
	
	if ($this->user->validate($input)) {
	    $input = array_except($input, array('_token', 'confirm_password'));
	    $obj    = $this->user->create($input);
            return Redirect::to('/')->with('success', 'Registration has been done successfully');
        } else {
            // failure
            $errors = $this->user->errors();
	    return 
		Redirect::to('/')
                ->withInput()
                ->withErrors($errors)
                ->with('error', 'There were validation errors.');
        }
    }
    
    
    public function getPhotoUpload()
    {
	$active_menu 		=  2;
	$links 			= $this->links;
	$link_categories 	= $this->link_categories;
	$castes			= Caste::lists('title', 'id');
	$users			= User::paginate(10);
	
	return View::make('front.home.photoUpload', compact('active_menu', 'castes', 'links', 'link_categories', 'users'));
    }
    
    

}
