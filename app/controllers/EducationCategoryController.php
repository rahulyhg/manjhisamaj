<?php

class EducationCategoryController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(EducationCategory $educationcategory){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->educationcategory = $educationcategory;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	$head['page_header'] = 'Education Category';
        $results    = EducationCategory::paginate(20);
        return View::make('admin.educationcategories.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Education Category';
        return View::make('admin.educationcategories.create', compact('head'));
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
        if ($this->educationcategory->validate($input)) {
                
            $obj    = $this->educationcategory->create($input);
            return Redirect::to('admin/educationcategories')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->educationcategory->errors();
            return Redirect::route('admin.educationcategories.create')
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
        $head['page_header'] = 'EducationCategory';
        $result = EducationCategory::find($id);
        return  View::make('admin.educationcategories.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'EducationCategory';
        $data                   = EducationCategory::find($id);
        
        return View::make('admin.educationcategories.edit', compact('data', 'head' , 'id'));
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

        if ($this->educationcategory->validate($input)) {
                
                $obj    = $this->educationcategory->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/educationcategories')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->educationcategory->errors();
            return Redirect::route('admin.educationcategories.edit', $id)
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
        $obj = EducationCategory::find($id);
        $obj->delete();
        return Redirect::to('admin/educationcategories')->with('success', 'Record Deleted Successfully');
    }
}