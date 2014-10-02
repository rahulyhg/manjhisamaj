<?php

use Illuminate\Auth\UserInterface;
//use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait; 
 
 


class User extends Eloquent implements UserInterface, RemindableInterface {

    //use UserTrait, RemindableTrait;
    
    protected $guarded = array();
    protected $fillable = array();
    
    protected $table = 'users';


    
    private $rules = array(
	'username'     		=> 'required|min:5',
	'email'         	=> 'email',
	'password'     		=> 'required|min:6',
	'confirm_password' 	=> 'required|same:password',
	'first_name'    	=> 'required',
	'date_of_birth'    	=> 'required',
	'caste_id'    		=> 'required',
	'gender'    		=> 'required',
	'mobile1'    		=> 'required|max:15|numeric'
    );

    private $errors;
    
    //protected $hidden = array('password', 'remember_token');
    protected $hidden = array('password');
    
    
    
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    
    public function getAuthPassword()
    {
        return $this->password;
    }
    
    
    public function getRememberToken()
    {
        return $this->remember_token;
    }
    
    
    public function setRememberToken($token)
    {
         $this->remember_token = $token;
    }
    
    
    public function getRememberTokenName()
    {
         return 'remember_token';
    }
    
    
    public function getReminderEmail()
    {
        return $this->email;
    }
    
    
    public function validate($data)
    {
//    	print_r($this->rules);
//	die;
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
    
    public function caste()
    {
        return $this->hasOne('Caste');
    }
    //===============================================
    
    public function city()
    {
        return $this->hasOne('City');
    }
    //===============================================
    
    public function state()
    {
        return $this->hasOne('State');
    }
    //===============================================
    
    public function country()
    {
        return $this->hasOne('Country');
    }
    //===============================================
    
}
