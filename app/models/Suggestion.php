<?php

class Suggestion extends Eloquent{

    protected $guarded = array();
    
    private $rules = array(
	'name'     	=> 'required|min:3',
	'email'         => 'required|email',
	'contact_no'    => 'required|max:15'
    );

    private $errors;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'suggestions';

    public function validate($data)
    {
    	
    	$availableRule = array();
    	foreach($this->rules as $field => $rules) {
    		if (isset($data[$field])) {
    			$availableRule[$field] = $rules;
    		}    	
    	}
        // make a new validator object
        $v = Validator::make($data, $availableRule);

        if ($v->fails())
        {
            // set errors and return false
            $this->errors = $v->errors();
            return false;
        }

        // validation pass
        return true;
    }
    //===============================================

    public function errors()
    {
        return $this->errors;
    }
    //===============================================
	
}