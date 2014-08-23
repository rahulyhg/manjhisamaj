<?php

class LinkController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Link $link){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->link = $link;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'Link';
        $results    = Link::paginate(10);
	
	return View::make('admin.links.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Link';
	$results    = LinkCategory::lists('title', 'id');
	
	return View::make('admin.links.create', compact('head', 'results'));
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
        if ($this->link->validate($input)) {
                
            $obj    = $this->link->create($input);
            return Redirect::to('admin/links')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->link->errors();
            return Redirect::route('admin.links.create')
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
        $head['page_header'] = 'Link';
        $result = Link::find($id);
	return  View::make('admin.links.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Link';
	$results    		= LinkCategory::lists('title', 'id');
	
        $data               	= Link::find($id);
	return View::make('admin.links.edit', compact('head', 'data', 'id', 'results'));
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

        if ($this->link->validate($input)) {
                
                $obj    = $this->link->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/links')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->link->errors();
            return Redirect::route('admin.links.edit', $id)
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
        $obj = Link::find($id);
        $obj->delete();
        return Redirect::to('admin/links')->with('success', 'Record Deleted Successfully');
    }
}