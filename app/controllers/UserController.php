<?php

class UserController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(User $user){
    
	$this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->user = $user;
	
	//print_r($this->user);
	//die;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	$head['page_header'] = 'User';
        $results    = User::paginate(20);
	//phpinfo();
	//die;
	
	return View::make('admin.users.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
	$head['page_header'] = 'User';
	$gender_results = $this->common_helpers->genderArray();
	return View::make('admin.users.create', compact('head', 'gender_results'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $input = array_except($input, '_token');
       
	
	$input['profile_code'] 	= $this->common_helpers->getProfileId();
	$input['username'] 	= $this->common_helpers->getUserName();
	$input['password'] 	= Hash::make($this->common_helpers->getRandomPassword());
	
	//print_r($input);
	//die;
	
	
        if ($this->user->validate($input)) {
	    
            $obj    = $this->user->create($input);
            return Redirect::to('admin/users')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
	    // failure			
            $errors = $this->user->errors();
            return Redirect::route('admin.users.create')
                ->withInput()
                ->withErrors($errors)
                ->with('error', 'There were validation errors.');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $head['page_header'] = 'User';
        $result = User::find($id);
	
	return  View::make('admin.users.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'User';
        $data                   = User::find($id);
	
        $gender_results = $this->common_helpers->genderArray();
	
        return View::make('admin.users.edit', compact('data', 'head' , 'id', 'gender_results'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = Input::all();
        
	$password = Input::get('password');
	
	if(!empty($password)){
	    
	    $input['password'] = Hash::make($password);
	    $input = array_except($input, '_token');
	} else {
	    
	    $input = array_except($input, '_token');
	    $input = array_except($input, 'password');
	}
	
	//print_r($input);
	//die;
	
	
        if ($this->user->validate($input)) {
                
                $obj    = $this->user->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/users')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->user->errors();
            return Redirect::route('admin.users.edit', $id)
                ->withInput()
                ->withErrors($errors)
                ->with('error', 'There were validation errors.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $obj = User::find($id);
        $obj->delete();
        return Redirect::to('admin/users')->with('success', 'Record Deleted Successfully');
    }
}