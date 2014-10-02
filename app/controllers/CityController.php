<?php

class CityController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(City $city){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->city = $city;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'City';
        $results    = City::paginate(10);
	
	
	return View::make('admin.cities.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] 	= 'City';
	$country_results    	= Country::lists('title', 'id');
	$state_results    	= State::lists('title', 'id');
	
	return View::make('admin.cities.create', compact('head', 'country_results', 'state_results'));
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
        if ($this->city->validate($input)) {
                
            $obj    = $this->city->create($input);
            return Redirect::to('admin/cities')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->city->errors();
            return Redirect::route('admin.cities.create')
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
        $head['page_header'] = 'City';
	$result = City::find($id);
	return  View::make('admin.cities.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'City';
	$country_results    	= Country::lists('title', 'id');
	$state_results    	= State::lists('title', 'id');
	
        $data               	= City::find($id);
	return View::make('admin.cities.edit', compact('head', 'data', 'id', 'country_results', 'state_results'));
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

        if ($this->city->validate($input)) {
                
                $obj    = $this->city->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/cities')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->city->errors();
            return Redirect::route('admin.cities.edit', $id)
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
        $obj = City::find($id);
        $obj->delete();
        return Redirect::to('admin/cities')->with('success', 'Record Deleted Successfully');
    }
}