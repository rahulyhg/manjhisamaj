@extends('front.layouts.master')

@section('css-section')
    {{ HTML::style('assets/lib/jcrop/css/jquery.Jcrop.css'); }}
@stop

@section('main_content')
    
@section('main_content')
<div class="row">

    <div class="col-sm-12 wow fadeInDown">
        <h2> Upload Profile Photo</h2>
    </div>
        
</div>
<div class="row">
    
    
    <div class="col-sm-12">
        <div class="jc-demo-box">
        
            <!-- This is the image we're attaching Jcrop to -->
            {{ HTML::image('/assets/uploads/users/pool.jpg', 'pool.jpg', array('id'=>'cropbox') ) }}
            
            <!-- This is the form that our event handler fills -->
            {{ Form::open( array( 'action' => 'HomeController@getPhotoUpload', 'method'=>'post', 'role'=>'form', 'onsubmit'=>'return checkCoords()') ) }}
            
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input type="submit" value="Crop Image" class="btn btn-large btn-inverse" />
            {{ Form::Close() }}
        </div>
    </div>

</div><!--/.row-->
@stop

@section('js-section')
    
    {{ HTML::script('assets/lib/jcrop/js/jquery.Jcrop.js'); }}
    <script type="text/javascript">
    $(document).ready(function(){
    
        $('#cropbox').Jcrop({
          aspectRatio: 1,
          onSelect: updateCoords
        });
    
    });
    
    
    function updateCoords(c) {
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
    };
    
    function checkCoords() {
    
        if (parseInt($('#w').val())) return true;
        alert('Please select a crop region then press submit.');
        return false;
    };
    </script>
@stop


