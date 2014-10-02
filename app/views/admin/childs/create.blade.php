@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop


@section('page-header')
    Add New {{ $head['page_header'] }}
@stop



@section('right-content')
    {{-- dd(base_path()) --}}
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            
                <a href="{{ URL::action('ChildController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::open(array('route' => 'admin.childs.store', 'method'=> 'post', 'files'=> true,  'role'=> 'form', 'id' => 'frm_caste', 'class' => 'form-horizontal')) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('name', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('name'); }}
                            </p>
                        </div>
                            
                        
                        <div class="form-group">
                            {{ Form::label('father_name', 'Father Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('father_name', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('father_name'); }}
                            </p>
                        </div>
                            
                            
                        <div class="form-group">
                            {{ Form::label('profile_picture', 'Upload Photo', array('class' => 'control-label' ) ); }}
                            {{ Form::file('profile_picture', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('profile_picture'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('address', 'Address', array('class' => 'control-label' ) ); }}
                            {{ Form::textarea('address', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('address'); }}
                            </p>
                        </div>
                            
                        
                        <div class="form-group">
                            {{ Form::label('class', 'Class', array('class' => 'control-label' ) ); }}
                            {{ Form::text('class', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('class'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('school', 'school', array('class' => 'control-label' ) ); }}
                            {{ Form::textarea('school', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('school'); }}
                            </p>
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('Percent', 'Percent', array('class' => 'control-label' ) ); }}
                            {{ Form::text('percent', '', array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('percent'); }}
                            </p>
                        </div>
                        
                        
                        <div class="form-group">
                            {{ Form::label('is_archived', 'Archived', array('class' => 'control-label' ) ); }}
                            {{ Form::select('is_archived', $approval_array , '', array("class" => 'form-control') ) }}
                            <p class="help-inline">
                                {{ $errors->first('is_archived'); }}
                            </p>
                        </div>
                        
                        
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
                        <a href="{{ URL::action('ChildController@index') }}" class="btn btn-danger">
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


