<?php

class State extends Eloquent{

    protected $guarded = array();

    private $rules = array(
    'title'     => 'required|min:3'
    );

    private $errors;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'states';

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
    
    public function country()
    {
        return $this->belongsto('Country');
    }
    //===============================================
    
    
    public function cities()
    {
        return $this->hasMany('City');
    }
    //===============================================
    
	
}