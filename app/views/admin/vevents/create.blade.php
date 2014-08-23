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
            
                <a href="{{ URL::action('VEventController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::open(array('route' => 'admin.vevents.store', 'method'=> 'post', 'role'=> 'form', 'id' => 'frm_caste', 'class' => 'form-horizontal')) }}
                        
                        <div class="form-group">
                            {{ Form::label('title', 'Title', array('class' => 'control-label' ) ); }}
                            {{ Form::text('title', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('title'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('description', 'Description', array('class' => 'control-label' ) ); }}
                            {{ Form::textarea('description', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('description'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('place', 'Place', array('class' => 'control-label' ) ); }}
                            {{ Form::textarea('place', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('place'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('start_date', 'Event Start Date', array('class' => 'control-label' ) ); }}
                            {{ Form::text('start_date', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('start_date'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('end_date', 'Event End Date', array('class' => 'control-label' ) ); }}
                            {{ Form::text('end_date', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('end_date'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('duration', 'Duration', array('class' => 'control-label' ) ); }}
                            {{ Form::text('duration', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('duration'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('contact_no1', 'Contact Number', array('class' => 'control-label' ) ); }}
                            {{ Form::text('contact_no1', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('contact_no1	'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('contact_no2', 'Contact Number', array('class' => 'control-label' ) ); }}
                            {{ Form::text('contact_no2', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('contact_no2'); }}
                            </p>
                        </div>
                            
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
                        <a href="{{ URL::action('VEventController@index') }}" class="btn btn-danger">
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
    
        $('#start_date').datepicker({
            format : 'yyyy-mm-dd',
            autoclose : true
            
        }).on('changeDate', function(ev){
           
            $(this).datepicker('hide');
        });
        
        $('#end_date').datepicker({
            format : 'yyyy-mm-dd',
            autoclose : true
            
        }).on('changeDate', function(ev){
            console.log(ev);
            $(this).datepicker('hide');
        });
        
        
        
        @if ( !empty( $errors->first('title') ) )
            $('#title').closest('.form-group').addClass('has-error');
            $('#title').siblings('.help-inline').addClass('text-danger');
        @endif
        
    });
    </script>
@stop


