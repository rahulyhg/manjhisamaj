@extends('admin.layouts.master')

@section('title')
    {{ $head['page_header'] }} List
@stop

@section('page-header')
    {{ $head['page_header'] }} List
@stop

@section('css-section')
    {{ HTML::style('assets/admin/css/plugins/dataTables/dataTables.bootstrap.css'); }}
@stop

@section('js-section')
    {{ HTML::script('assets/admin/js/plugins/dataTables/jquery.dataTables.js'); }}
    {{ HTML::script('assets/admin/js/plugins/dataTables/dataTables.bootstrap.js'); }}
@stop

@section('right-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                
                    <a href="{{ URL::action('UserController@create') }}" class="btn btn-primary ">
			<span class="fa fa-plus"> </span>  Add New 
		    </a>
                                                    
                </div>
                <!-- /.panel-heading -->
                
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Profile Code</th>
				    <th>Username</th>
				    <th>Name </th>
				    <th>Email</th>
				    <th>Birth Date</th>
				    <th>Action </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @if(!empty($results) and count($results) > 0)
                                   
                                    @foreach ($results as $result) 
                                        
					@if(1 != $result->id)
					    
					
					<tr>
                                            <td>{{ $result->profile_code }}</td>
					    <td>{{ $result->username }}</td>
					    <td>{{ $result->first_name .' '. $result->last_name  }}</td>
					    <td>{{ $result->email }}</td>
					    <td>{{ $result->date_of_birth }}</td>
					    
                                            <td class="action">
					    
                                                <a href="{{ URL::action('UserController@show', $result->id ) }}" class="btn btn-success btn-circle">
						    <span class="fa fa-eye"></span>
						</a>
						    
                                                <a href="{{ URL::action('UserController@edit', $result->id ) }}" class="btn btn-primary btn-circle">
						    <span class="fa fa-edit"></span>
						</a>
                                                    
                                                {{ Form::open(array('route' => array('admin.users.destroy', $result->id), 'method' => 'delete', 'style' => 'display:inline-block' , 'id' => 'frm_delete' )) }}
                                                    <button  class="remove_records btn btn-danger btn-circle" type="submit" >
                                                        <span class="fa fa-times"></span>
                                                    </button>
			    			{{ Form::close() }}

                                            </td>
                                        </tr>
					@endif
                                    @endforeach
                                @else
                                    
                                    <tr>
                                        <td colspan="2">No Record Found</td>
                                    </tr>
                                @endif 
                                    
                            </tbody>
                        </table>
                        
                        {{ $results->links() }} 
                        
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
@stop



