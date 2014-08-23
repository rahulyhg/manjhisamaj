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

    public static $rules = array(
	'username' => 'required',
	'email' => 'required|email',
	'password'=>'required'
    );
    
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
    
    
}
