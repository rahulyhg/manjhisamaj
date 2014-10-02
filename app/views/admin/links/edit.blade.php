@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop


@section('page-header')
    Edit {{ $head['page_header'] }}
@stop



@section('right-content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            
                <a href="{{ URL::action('LinkController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::model($data, array( 'route' => array('admin.links.update', $id), 'method' => 'patch' , 'id' => 'frm_caste', 'class' => 'form-horizontal') ) }}
                        <div class="form-group">
                            {{ Form::label('title', 'Title', array('class' => 'control-label' ) ); }}
                            {{ Form::text('title', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('title'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('link', 'URL', array('class' => 'control-label' ) ); }}
                            {{ Form::text('link', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('link'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('link_category_id', 'Category', array('class' => 'control-label' ) ); }}
                            {{ Form::select('link_category_id', $results , $data->link_category_id , array("class" => 'form-control') ) }}
                            <p class="help-inline">
                                {{ $errors->first('link_category_id'); }}
                            </p>
                        </div>
                            
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
                        <a href="{{ URL::action('LinkController@index') }}" class="btn btn-danger">
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


