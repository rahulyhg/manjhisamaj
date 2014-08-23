<?php

class VEventController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(VEvent $vevent){
    
	$this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->vevent = $vevent;
	
	//print_r($this->vevent);
	//die;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	$head['page_header'] = 'Event';
        $results    = VEvent::paginate(20);
	return View::make('admin.vevents.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Event';
        return View::make('admin.vevents.create', compact('head'));
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
        if ($this->vevent->validate($input)) {
                
            $obj    = $this->vevent->create($input);
            return Redirect::to('admin/vevents')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->vevent->errors();
            return Redirect::route('admin.vevents.create')
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
        $head['page_header'] = 'Event';
        $result = VEvent::find($id);
        return  View::make('admin.vevents.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Event';
        $data                   = VEvent::find($id);
        
        return View::make('admin.vevents.edit', compact('data', 'head' , 'id'));
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

        if ($this->vevent->validate($input)) {
                
                $obj    = $this->vevent->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/vevents')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->vevent->errors();
            return Redirect::route('admin.vevents.edit', $id)
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
        $obj = VEvent::find($id);
        $obj->delete();
        return Redirect::to('admin/vevents')->with('success', 'Record Deleted Successfully');
    }
}