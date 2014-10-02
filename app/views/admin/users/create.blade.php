@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
@stop


@section('page-header')
    Add New {{ $head['page_header'] }}
@stop



@section('right-content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            
                <a href="{{ URL::action('UserController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::open(array('route' => 'admin.users.store', 'method'=> 'post', 'role'=> 'form', 'id' => 'frm_caste', 'class' => 'form-horizontal')) }}
                        
                        <div class="form-group">
                            {{ Form::label('profile_code', 'Profile ID', array('class' => 'control-label' ) ); }}
                            {{ Form::text('profile_code', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('profile_code'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('email', 'Email', array('class' => 'control-label' ) ); }}
                            {{ Form::text('email', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('email'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('username', 'Username', array('class' => 'control-label' ) ); }}
                            {{ Form::text('username', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('username'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('password', 'Password', array('class' => 'control-label' ) ); }}
                            {{ Form::password('password',  array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('password'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('first_name', 'First Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('first_name', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('first_name'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('last_name', 'Last Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('last_name', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('last_name'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('date_of_birth', 'Birth Date', array('class' => 'control-label' ) ); }}
                            {{ Form::text('date_of_birth', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('date_of_birth'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('gender', 'Gender', array('class' => 'control-label' ) ); }}
                            {{ Form::select('gender', $gender_results , '', array("class" => 'form-control') ) }}
                            <p class="help-inline">
                                {{ $errors->first('gender'); }}
                            </p>
                        </div>
                            
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
                        <a href="{{ URL::action('UserController@index') }}" class="btn btn-danger">
                            Cancel
                        </a>
                        
                    {{ Form::close() }} 
                </div>
                                    
            </div>
            <!-- /.panel-body -->
        
            </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@stop

@section('js-section')
    
    {{ HTML::script('assets/admin//js/plugins/datepicker/js/bootstrap-datepicker.js'); }}
    
    
    <script type="text/javascript">
    $(document).ready(function(){
    
        $('#date_of_birth').datepicker({
            format : 'yyyy-mm-dd',
            autoclose : true
            
        }).on('changeDate', function(ev){
           
            $(this).datepicker('hide');
        });
        
        
        @if ( $errors->first('first_name') != false )
            $('#first_name').closest('.form-group').addClass('has-error');
            $('#first_name').siblings('.help-inline').addClass('text-danger');
        @endif
        
    });
    </script>
@stop


