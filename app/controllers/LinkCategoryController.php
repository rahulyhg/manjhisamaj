<?php

class LinkCategoryController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(LinkCategory $linkcategory){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->linkcategory = $linkcategory;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	$head['page_header'] = 'Education Category';
        $results    = LinkCategory::paginate(20);
        return View::make('admin.linkcategories.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Education Category';
        return View::make('admin.linkcategories.create', compact('head'));
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
        if ($this->linkcategory->validate($input)) {
                
            $obj    = $this->linkcategory->create($input);
            return Redirect::to('admin/linkcategories')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->linkcategory->errors();
            return Redirect::route('admin.linkcategories.create')
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
        $head['page_header'] = 'LinkCategory';
        $result = LinkCategory::find($id);
        return  View::make('admin.linkcategories.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'LinkCategory';
        $data                   = LinkCategory::find($id);
        
        return View::make('admin.linkcategories.edit', compact('data', 'head' , 'id'));
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

        if ($this->linkcategory->validate($input)) {
                
                $obj    = $this->linkcategory->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/linkcategories')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->linkcategory->errors();
            return Redirect::route('admin.linkcategories.edit', $id)
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
        $obj = LinkCategory::find($id);
        $obj->delete();
        return Redirect::to('admin/linkcategories')->with('success', 'Record Deleted Successfully');
    }
}