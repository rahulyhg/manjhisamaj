<?php

class ChildController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Child $child){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->child = $child;
	
	$this->archive_array = $this->common_helpers->archiveArray();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'Childs';
        $results    = Child::paginate(20);
        return View::make('admin.childs.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Child';
	
	$approval_array  = $this->archive_array;
	
        return View::make('admin.childs.create', compact('head', 'approval_array'));
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
	    $destinationPath = public_path().'/assets/uploads/childs';
	    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	    //$uploadSuccess   = $file->move($destinationPath, $filename);
	    $image = Image::make(Input::file('profile_picture')->getRealPath())->resize(200, 200);
	    $image->save($destinationPath . '/' . $filename);

	    $input['profile_picture'] = $filename;
	}
	
	//Input::replace(array('profile_picture' => $filename ));
	//Input::merge(array('profile_picture' => $filename));
	
        if ($this->child->validate($input)) {
                
            $obj    = $this->child->create($input);
            return Redirect::to('admin/childs')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->child->errors();
            return Redirect::route('admin.childs.create')
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
        $head['page_header'] = 'Child';
        $result = Child::find($id);
	
        return  View::make('admin.childs.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Child';
        $data                   = Child::find($id);
        $approval_array  	= $this->archive_array;
	
	return View::make('admin.childs.edit', compact('data', 'head' , 'id', 'approval_array'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
	$obj    = $this->child->find($id);
	
	$input = Input::all();
	$input = array_except($input, '_token');
	
	if (Input::hasFile('profile_picture')) {
	   
	    File::delete(public_path().'/assets/uploads/childs/'. $obj->profile_picture);
	    
	    $file            = Input::file('profile_picture');
	    $destinationPath = public_path().'/assets/uploads/childs';
	    $filename        = str_random(6) . '_' . $file->getClientOriginalName();
	    $image = Image::make(Input::file('profile_picture')->getRealPath())->resize(200, 200);
	    $image->save($destinationPath . '/' . $filename);

	    $input['profile_picture'] = $filename;
	
	} else {
	    $input['profile_picture'] = $obj->profile_picture;
	}

	
        if ($this->child->validate($input)) {
		
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/childs')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->child->errors();
            return Redirect::route('admin.childs.edit', $id)
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
        $obj = Child::find($id);
        $obj->delete();
        return Redirect::to('admin/childs')->with('success', 'Record Deleted Successfully');
    }
}