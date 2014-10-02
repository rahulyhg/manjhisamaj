@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop


@section('page-header')
    Add New {{ $head['page_header'] }}
@stop



@section('right-content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            
                <a href="{{ URL::action('CityController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::open(array('route' => 'admin.cities.store', 'method'=> 'post', 'role'=> 'form', 'id' => 'frm_caste', 'class' => 'form-horizontal')) }}
                        <div class="form-group">
                            {{ Form::label('title', 'Title', array('class' => 'control-label' ) ); }}
                            {{ Form::text('title', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('title'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('country_id', 'Country', array('class' => 'control-label' ) ); }}
                            {{ Form::select('country_id', $country_results , '', array("class" => 'form-control') ) }}
                            <p class="help-inline">
                                {{ $errors->first('country_id'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('state_id', 'State', array('class' => 'control-label' ) ); }}
                            {{ Form::select('state_id', $state_results , '', array("class" => 'form-control') ) }}
                            <p class="help-inline">
                                {{ $errors->first('state_id'); }}
                            </p>
                        </div>        
                            
                            
                            
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
                        <a href="{{ URL::action('CityController@index') }}" class="btn btn-danger">
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
    <script type="text/javascript">
    $(document).ready(function(){
        
        @if ( $errors->first('title') != false )
            $('#title').closest('.form-group').addClass('has-error');
            $('#title').siblings('.help-inline').addClass('text-danger');
        @endif
    });
    </script>
@stop


