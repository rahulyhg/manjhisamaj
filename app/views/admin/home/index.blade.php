@extends('admin.layouts.master')

@section('title')
    Dashboard
@stop


@section('css-section')
    <!-- Page-Level Plugin CSS - Dashboard -->
    {{ HTML::style('assets/admin/css/plugins/morris/morris-0.4.3.min.css'); }}
    {{ HTML::style('assets/admin/css/plugins/timeline/timeline.css'); }}
@stop
    

@section('js-section')
    
    <!-- Page-Level Plugin Scripts - Dashboard -->
    {{ HTML::script('assets/admin/js/plugins/morris/raphael-2.1.0.min.js'); }}
        
    {{ HTML::script('assets/admin/js/plugins/morris/morris.js'); }}

    {{ HTML::script('assets/admin/js/demo/dashboard-demo.js'); }}
@stop