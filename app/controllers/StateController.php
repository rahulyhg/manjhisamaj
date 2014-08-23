<?php

class StateController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(State $state){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->state = $state;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'State';
        $results    = State::paginate(10);
	
	return View::make('admin.states.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'State';
	$results    = Country::lists('title', 'id');
	
	return View::make('admin.states.create', compact('head', 'results'));
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
        if ($this->state->validate($input)) {
                
            $obj    = $this->state->create($input);
            return Redirect::to('admin/states')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->state->errors();
            return Redirect::route('admin.states.create')
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
        $head['page_header'] = 'State';
        $result = State::find($id);
	return  View::make('admin.states.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'State';
	$results    		= Country::lists('title', 'id');
	
        $data               	= State::find($id);
	return View::make('admin.states.edit', compact('head', 'data', 'id', 'results'));
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

        if ($this->state->validate($input)) {
                
                $obj    = $this->state->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/states')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->state->errors();
            return Redirect::route('admin.states.edit', $id)
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
        $obj = State::find($id);
        $obj->delete();
        return Redirect::to('admin/states')->with('success', 'Record Deleted Successfully');
    }
}