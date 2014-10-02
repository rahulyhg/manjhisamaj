<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layouts.meta_section')
    @section('meta-section')
    @show
    
    <title>
        Manjhi Samaj ::
        @section('title')
            Home
        @show
    </title>
	
    @include('front.layouts.css_section')
    @section('css-section')
    @show
    
   
</head><!--/head-->

<body class="homepage">

    @include('front.layouts.nav_section')
    
    <section id="content">
        <div class="container">
	    @section('main_content')
            @show
        </div><!--/.container-->
    </section><!--/#content-->

    
    @include('front.layouts.contact_section')
    @include('front.layouts.link_section')
    @include('front.layouts.footer_section')
    
    @include('front.layouts.js_section')
    
    @section('js-section')
    @show
    
    <script type="text/javascript">
    
    $(function() {
    
        @if(Session::has('success'))
            var mess =   '{{ Session::get('success') }}';
	    bootBarNotify('success', mess);
        @endif
        
        @if(Session::has('error'))
            var mess =   '{{ Session::get('error') }}';
	    bootBarNotify('error', mess);
        @endif
        
        @if(Session::has('warning'))
            var mess =   '{{ Session::get('warning') }}';
	    bootBarNotify('warning', mess);
        @endif
        
        @if(Session::has('info'))
            var mess =   '{{ Session::get('info') }}';
	    bootBarNotify('info', mess);
        @endif
    });
    </script>
    
</body>
</html>