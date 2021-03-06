@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }}
@stop


@section('page-header')
    Show {{ $head['page_header'] }} Information
@stop



@section('right-content')
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
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            
                            <tr>
                                <td colspan="2" align="center">
                                {{ HTML::image( asset('assets/uploads/childs/'. $result->profile_picture) , $result->name, array('width'=> '200px' ) ) }}
                                </td>
                            </tr>
                                
                                
                            <tr>
                                <th>Name</th>
                                <td> {{ $result->name }} </td>
                            </tr>
                                
                            <tr>
                                <th>Father's Name</th>
                                <td> {{ $result->father_name }} </td>
                            </tr>
                                
                            <tr>
                                <th>Address</th>
                                <td> {{ $result->address }} </td>
                            </tr>
                                
                            <tr>
                                <th>Class</th>
                                <td> {{ $result->class }} </td>
                            </tr>
                                
                            <tr>
                                <th>Percent</th>
                                <td> {{ $result->percent }} </td>
                            </tr>
                                
                            
                            <tr>
                                <th>School</th>
                                <td> {{ $result->school }} </td>
                            </tr>
                                
                                
                            <tr>
                                <th>Approval</th>
                                <td> {{ ($result->is_archived == 1 ) ? 'Yes' : 'No'  }} </td>
                            </tr>
                                
                            
                        </table>
                    </div>
                        
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


