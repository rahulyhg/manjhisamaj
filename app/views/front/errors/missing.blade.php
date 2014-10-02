@extends('front.layouts.master')

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
@stop

@section('slider-section')
@stop

@section('main_content')
    <section id="error" class="container text-center">
        <h1>404, Page not found</h1>
        <p>The Page you are looking for doesn't exist or an other error occurred.</p>
        <a class="btn btn-primary" href="{{ URL::action('HomeController@index') }}">GO BACK TO THE HOMEPAGE</a>
    </section>
@stop


@section('link-section')
@stop


@section('js-section')
    
    {{ HTML::script('assets/admin/js/plugins/datepicker/js/bootstrap-datepicker.js'); }}
    <script type="text/javascript">
    $(document).ready(function(){
    
        //info, warning danger success
        $('#date_of_birth').datepicker({
            format : 'yyyy-mm-dd',
            autoclose : true
            
        }).on('changeDate', function(ev){
           
            $(this).datepicker('hide');
        });
        
    });
    </script>
@stop


