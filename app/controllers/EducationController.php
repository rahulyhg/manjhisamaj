<?php

class EducationController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Education $education){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->education = $education;
	
	//App::setLocale('es');
	//echo Lang::get('messages.welcome');
	//die;
	//{{ trans('messages.welcome') }}
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'Education';
        $results    = Education::paginate(10);
	
	//$results    = EducationCategory::find(1)->educations;
	
	//print_r($results);
	//die;
	
	return View::make('admin.educations.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Education';
	$results    = EducationCategory::lists('title', 'id');
	
	return View::make('admin.educations.create', compact('head', 'results'));
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
        //print_r($input);
        //die;
        if ($this->education->validate($input)) {
                
            $obj    = $this->education->create($input);
            return Redirect::to('admin/educations')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->education->errors();
            return Redirect::route('admin.educations.create')
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
        $head['page_header'] = 'Education';
        $result = Education::find($id);
	return  View::make('admin.educations.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Education';
	$results    		= EducationCategory::lists('title', 'id');
	
        $data               	= Education::find($id);
	return View::make('admin.educations.edit', compact('head', 'data', 'id', 'results'));
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
        $input = array_except($input, '_token');

        if ($this->education->validate($input)) {
                
                $obj    = $this->education->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/educations')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->education->errors();
            return Redirect::route('admin.educations.edit', $id)
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
        $obj = Education::find($id);
        $obj->delete();
        return Redirect::to('admin/educations')->with('success', 'Record Deleted Successfully');
    }
}