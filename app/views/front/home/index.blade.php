@extends('front.layouts.master')

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
@stop

@section('main_content')
    
@section('main_content')
<div class="row">
    
    <div class="col-md-6 wow fadeInDown">
    
        <div id="login_form">
            {{ Form::open( array( 'action' => 'SuperUsersController@postSignin', 'method'=>'post', 'role'=>'form') ) }}
                <div class="col-md-10 col-sm-offset-1">
                    <div class="form-group">
                        {{ Form::label('username', 'Username', array('class' => 'control-label' ) ); }} *
                        {{ Form::text('username', '', array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'Username')); }}
                        <p class="help-inline"> {{ $errors->first('username'); }} </p>
                    </div>
                        
                    <div class="form-group">
                        {{ Form::label('password', 'Password', array('class' => 'control-label' ) ); }} *
                        {{ Form::text('password', '', array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'Password')); }}
                        <p class="help-inline"> {{ $errors->first('password'); }} </p>
                    </div>
                        
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Login</button>
                    </div>
                    
                </div>
                
            {{ Form::Close() }}
        </div>
    
    </div>
        
    <div class="col-md-6 wow fadeInDown">
    
        <div class="col-md-10 col-sm-offset-1">
            {{ Form::open( array( 'action' => 'HomeController@postSignup', 'method'=>'post', 'role'=>'form') ) }}
            <div class="form-group">
                {{ Form::label('first_name', 'First Name', array('class' => 'control-label' ) ); }} *
                {{ Form::text('first_name', '', array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'First Name')); }}
                <p class="help-inline"> {{ $errors->first('first_name'); }} </p>
            </div>

            <div class="form-group">
                {{ Form::label('last_name', 'Last Name', array('class' => 'control-label' ) ); }} *
                {{ Form::text('last_name', '', array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'Last Name')); }}
                <p class="help-inline"> {{ $errors->first('last_name'); }} </p>
            </div>
            
            <div class="form-group">
                <label>Gender *</label>
                    
                <label class="radio-inline">
                    {{ Form::radio('gender', 1, true) }} Male 
                </label>
                <label class="radio-inline">
                    {{ Form::radio('gender', 2, false) }} Female
                </label>
                
            </div>
                
            <div class="form-group">
                {{ Form::label('date_of_birth', 'Date of Birth', array('class' => 'control-label' ) ); }} *
                {{ Form::text('date_of_birth', '', array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'Date of Birth')); }}
                <p class="help-inline"> {{ $errors->first('date_of_birth'); }} </p>
            </div>
                
            <div class="form-group">
                
                {{ Form::label('caste_id', 'Caste', array('class' => 'control-label' ) ); }} *
                {{ Form::select('caste_id', $castes , null , array("class" => 'form-control') ) }}
                <p class="help-inline"> {{ $errors->first('caste_id'); }} </p>
            </div>
                
            <div class="form-group">
                {{ Form::label('email', 'Email', array('class' => 'control-label' ) ); }} *
                {{ Form::text('email', '', array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'Email')); }}
                <p class="help-inline"> {{ $errors->first('title'); }} </p>
            </div>
                
            <div class="form-group">
                {{ Form::label('mobile1', 'Mobile', array('class' => 'control-label' ) ); }} *
                {{ Form::text('mobile1', '', array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'Mobile')); }}
                <p class="help-inline"> {{ $errors->first('mobile1'); }} </p>
            </div>
                
            <div class="form-group">
                {{ Form::label('username', 'Username', array('class' => 'control-label' ) ); }} *
                {{ Form::text('username', '', array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'Username')); }}
                <p class="help-inline"> {{ $errors->first('username'); }} </p>
            </div>
                
            <div class="form-group">
                {{ Form::label('password', 'Password', array('class' => 'control-label' ) ); }} *
                {{ Form::password('password', array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'Password')); }}
                <p class="help-inline"> {{ $errors->first('password'); }} </p>
            </div>
                
            <div class="form-group">
                {{ Form::label('confirm_password', 'Confirm Password', array('class' => 'control-label' ) ); }} *
                {{ Form::password('confirm_password',  array('class' => 'form-control', 'required'=>'required', 'placeholder'=>'Confirm Password')); }}
                <p class="help-inline"> {{ $errors->first('confirm_password'); }} </p>
            </div>
                
            <div class="form-group">
                {{ Form::submit('Register', array('class' => 'btn btn-primary btn-lg')); }}
            </div>
    
            {{ Form::close() }}
            
        </div>
    
    </div>
</div><!--/.row-->
@stop

@section('js-section')
    
    {{ HTML::script('assets/admin/js/plugins/datepicker/js/bootstrap-datepicker.js'); }}
    <script type="text/javascript">
    $(document).ready(function(){
    
        //info, warning danger success
        $('#date_of_birth').datepicker({
            format : 'yyyy-mm-dd',
            autoclose : true
            
        }).on('changeDate', function(ev){
           
            $(this).datepicker('hide');
        });
        
    });
    </script>
@stop


