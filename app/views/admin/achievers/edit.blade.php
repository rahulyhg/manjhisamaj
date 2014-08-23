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
            
                <a href="{{ URL::action('AchieverController@index') }}" class="btn btn-primary ">
                    <span class="fa fa-list"> </span>  {{ $head['page_header'] }} List 
                </a>
                <!-- /.panel-heading -->
            </div>

            <div class="panel-body">
                
                <div class="col-lg-6">
                    {{ Form::model($data, array( 'route' => array('admin.achievers.update', $id), 'method' => 'patch', 'files'=> true, 'id' => 'frm_caste', 'class' => 'form-horizontal') ) }}
                        <div class="form-group">
                            {{ Form::label('name', 'Name', array('class' => 'control-label' ) ); }}
                            {{ Form::text('name', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('name'); }}
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
                            {{ Form::label('position', 'Position', array('class' => 'control-label' ) ); }}
                            {{ Form::text('position', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('position'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('email', 'Email', array('class' => 'control-label' ) ); }}
                            {{ Form::text('email', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('email'); }}
                            </p>
                        </div>
                            
                        
                        <div class="form-group">
                            {{ Form::label('contact_no', 'Contact No', array('class' => 'control-label' ) ); }}
                            {{ Form::text('contact_no', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('contact_no'); }}
                            </p>
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('address', 'Address', array('class' => 'control-label' ) ); }}
                            {{ Form::textarea('address', null, array('class' => 'form-control')); }}
                            <p class="help-inline">
                                {{ $errors->first('address'); }}
                            </p>
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('is_approved', 'Approval', array('class' => 'control-label' ) ); }}
                            {{ Form::select('is_approved', $approval_array , '', array("class" => 'form-control') ) }}
                            <p class="help-inline">
                                {{ $errors->first('is_approved'); }}
                            </p>
                        </div>
                            
                        {{ Form::submit('Submit', array('class' => 'btn btn-success')); }}
                        
                        <a href="{{ URL::action('AchieverController@index') }}" class="btn btn-danger">
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
        
        @if ( !empty( $errors->first('title') ) )
            $('#title').closest('.form-group').addClass('has-error');
            $('#title').siblings('.help-inline').addClass('text-danger');
        @endif
    });
    </script>
@stop


