<?php

class CasteController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Caste $caste){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->caste = $caste;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'Education Category';
        $results    = Caste::paginate(20);
        return View::make('admin.castes.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Caste';
        return View::make('admin.castes.create', compact('head'));
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
        if ($this->caste->validate($input)) {
                
            $obj    = $this->caste->create($input);
            return Redirect::to('admin/castes')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->caste->errors();
            return Redirect::route('admin.castes.create')
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
        $head['page_header'] = 'Caste';
        $result = Caste::find($id);
        return  View::make('admin.castes.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Caste';
        $data                   = Caste::find($id);
        
        return View::make('admin.castes.edit', compact('data', 'head' , 'id'));
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

        if ($this->caste->validate($input)) {
                
                $obj    = $this->caste->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/castes')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->caste->errors();
            return Redirect::route('admin.castes.edit', $id)
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
        $obj = Caste::find($id);
        $obj->delete();
        return Redirect::to('admin/castes')->with('success', 'Record Deleted Successfully');
    }
}