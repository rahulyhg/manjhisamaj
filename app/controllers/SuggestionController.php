<?php

class SuggestionController extends \BaseController {

	
    protected $layout = 'admin.layouts.master';
    
    public function __construct(Suggestion $suggestion){
    
        $this->beforeFilter('auth');
        $this->common_helpers =  new Helpers();
        $this->suggestion = $suggestion;
	
	$this->approval_array = $this->common_helpers->approvalArray();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $head['page_header'] = 'Suggestions';
        $results    = Suggestion::paginate(20);
        return View::make('admin.suggestions.index', compact('results', 'head'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $head['page_header'] = 'Suggestion';
	
	$approval_array  = $this->approval_array;
	
        return View::make('admin.suggestions.create', compact('head', 'approval_array'));
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
        if ($this->suggestion->validate($input)) {
                
            $obj    = $this->suggestion->create($input);
            return Redirect::to('admin/suggestions')->with('success', 'Insert Record Successfully');
            $validation = false;
        } else {
            // failure			
            $errors = $this->suggestion->errors();
            return Redirect::route('admin.suggestions.create')
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
        $head['page_header'] = 'Suggestion';
        $result = Suggestion::find($id);
        return  View::make('admin.suggestions.show', compact('result', 'head'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $head['page_header']    = 'Suggestion';
        $data                   = Suggestion::find($id);
        $approval_array  	= $this->approval_array;
	
	return View::make('admin.suggestions.edit', compact('data', 'head' , 'id', 'approval_array'));
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

        if ($this->suggestion->validate($input)) {
                
                $obj    = $this->suggestion->find($id);
                $obj    = $obj->update($input);
                
                return Redirect::to('admin/suggestions')->with('success', 'Updated Record Successfully');
                
        } else {
            // failure
            $errors = $this->suggestion->errors();
            return Redirect::route('admin.suggestions.edit', $id)
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
        $obj = Suggestion::find($id);
        $obj->delete();
        return Redirect::to('admin/suggestions')->with('success', 'Record Deleted Successfully');
    }
}