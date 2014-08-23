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
                
                    <a href="{{ URL::action('AchieverController@create') }}" class="btn btn-primary ">
			<span class="fa fa-plus"> </span>  Add New 
		    </a>
                                                    
                </div>
                <!-- /.panel-heading -->
                
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Image</th>
				    <th>Name</th>
				    <th>Email</th>
				    <th>Contact No</th>
				    <th>Address</th>
				    <th>Approval</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @if(!empty($results) and count($results) > 0)
                                   
                                    @foreach ($results as $result) 
                                        <tr>
					    <td>
						{{ HTML::image( asset('assets/uploads/achievers/'. $result->profile_picture) , $result->name, array('height'=> '60px' ) ) }}
					    </td>
                                            <td>{{ $result->name }}</td>
					    <td>{{ $result->email }}</td>
					    <td>{{ $result->contact_no }}</td>
					    <td>{{ $result->address }}</td>
					    <td>{{ ($result->is_approved == 1) ? 'Yes' : 'No' }}</td>
					
                                            <td class="action">
                                                <a href="{{ URL::action('AchieverController@show', $result->id ) }}" class="btn btn-success btn-circle">
						    <span class="fa fa-eye"></span>
						</a>
                                                    
                                                <a href="{{ URL::action('AchieverController@edit', $result->id ) }}" class="btn btn-primary btn-circle">
						    <span class="fa fa-edit"></span>
						</a>
                                                    
                                                {{ Form::open(array('route' => array('admin.achievers.destroy', $result->id), 'method' => 'delete', 'style' => 'display:inline-block' , 'id' => 'frm_delete' )) }}
                                                    <button  class="remove_records btn btn-danger btn-circle" type="submit" >
                                                        <span class="fa fa-times"></span>
                                                    </button>
			    			{{ Form::close() }}

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    
                                    <tr>
                                        <td colspan="6">No Record Found</td>
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



