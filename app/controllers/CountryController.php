<?php

class CountryController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Country $country){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->country = $country;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'Country';
        $results    = Country::paginate(10);
        return View::make('admin.countries.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Country';
        return View::make('admin.countries.create', compact('head'));
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
        if ($this->country->validate($input)) {
                
            $obj    = $this->country->create($input);
            return Redirect::to('admin/countries')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->country->errors();
            return Redirect::route('admin.countries.create')
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
        $head['page_header'] = 'Country';
        $result = Country::find($id);
        return  View::make('admin.countries.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Country';
        $data                   = Country::find($id);
        
        return View::make('admin.countries.edit', compact('data', 'head' , 'id'));
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

        if ($this->country->validate($input)) {
                
                $obj    = $this->country->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/countries')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->country->errors();
            return Redirect::route('admin.countries.edit', $id)
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
        $obj = Country::find($id);
        $obj->delete();
        return Redirect::to('admin/countries')->with('success', 'Record Deleted Successfully');
    }
}