<?php

class AchieverController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Achiever $achiever){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->achiever = $achiever;
	$this->approval_array = $this->common_helpers->approvalArray();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'Achievers';
        $results    = Achiever::paginate(20);
        return View::make('admin.achievers.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Achiever';
	
	$approval_array  = $this->approval_array;
	
        return View::make('admin.achievers.create', compact('head', 'approval_array'));
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
	
	if (Input::hasFile('profile_picture')) {
	   
	    $file            = Input::file('profile_picture');
	    $destinationPath = public_path().'/assets/uploads/achievers';
	    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	    //$uploadSuccess   = $file->move($destinationPath, $filename);
	    $image = Image::make(Input::file('profile_picture')->getRealPath())->resize(200, 200);
	    $image->save($destinationPath . '/' . $filename);

	    $input['profile_picture'] = $filename;
	}
	
	
        if ($this->achiever->validate($input)) {
                
            $obj    = $this->achiever->create($input);
            return Redirect::to('admin/achievers')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->achiever->errors();
            return Redirect::route('admin.achievers.create')
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
        $head['page_header'] = 'Achiever';
        $result = Achiever::find($id);
        return  View::make('admin.achievers.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Achiever';
        $data                   = Achiever::find($id);
        $approval_array  	= $this->approval_array;
	
	return View::make('admin.achievers.edit', compact('data', 'head' , 'id', 'approval_array'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $obj    = $this->achiever->find($id);
	
	$input = Input::all();
	$input = array_except($input, '_token');
	
	if (Input::hasFile('profile_picture')) {
	   
	    File::delete(public_path().'/assets/uploads/achievers/'. $obj->profile_picture);
	    
	    $file            = Input::file('profile_picture');
	    $destinationPath = public_path().'/assets/uploads/achievers';
	    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	    $image = Image::make(Input::file('profile_picture')->getRealPath())->resize(200, 200);
	    $image->save($destinationPath . '/' . $filename);

	    $input['profile_picture'] = $filename;
	
	} else {
	    $input['profile_picture'] = $obj->profile_picture;
	}
	

        if ($this->achiever->validate($input)) {
                
                $obj    = $this->achiever->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/achievers')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->achiever->errors();
            return Redirect::route('admin.achievers.edit', $id)
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
        $obj = Achiever::find($id);
        $obj->delete();
        return Redirect::to('admin/achievers')->with('success', 'Record Deleted Successfully');
    }
}