<header id="header">
    <div class="top-bar">
	<div class="container">
	    <div class="row">
		<div class="col-sm-6 col-xs-4">
		    <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
		</div>
		<div class="col-sm-6 col-xs-8">
		   <div class="social">
			<ul class="social-share">
			    <li>
				<a href="https://www.facebook.com/profile.php?id=100007047917878" target="_blank">
				    <i class="fa fa-facebook"></i>
				</a>
			    </li>
			    
			    <li>
				<a href="https://twitter.com/manjhisamaj" target="_blank">
				    <i class="fa fa-twitter"></i>
				</a>
			    </li>
				
			    <li>
				<a href="https://plus.google.com/u/0/108005563750698203503/posts" target="_blank">
				    <i class="fa fa-google-plus"></i>
				</a>
			    </li> 
			    {{--
			    <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
			    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			    <li><a href="#"><i class="fa fa-skype"></i></a></li>
			    --}}
			</ul>
		       <!-- <div class="search">
			    <form role="form">
				<input type="text" class="search-form" autocomplete="off" placeholder="Search">
				<i class="fa fa-search"></i>
			    </form>
		       </div>-->
		   </div>
		</div>
	    </div>
	</div><!--/.container-->
    </div><!--/.top-bar-->

    <nav class="navbar navbar-inverse" role="banner">
	<div class="container">
	    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ URL::action('HomeController@index') }}">
		    {{-- <img src="{{ asset('assets/front/images/services/logo.png') }}" alt="Manjhi Samaj"> --}}
		    <h1> Manjhi Samaj </h1>
		</a>
	    </div>
			    
	    <div class="collapse navbar-collapse navbar-right">
		<ul class="nav navbar-nav">
		    <li {{ ($active_menu == 1) ?  'class="active"' : '' }}>
			<a href="{{ URL::action('HomeController@index') }}">Home</a>
		    </li>
			
		    <li {{ ($active_menu == 2) ?  'class="active"' : '' }}>
			<a href="{{ URL::action('HomeController@getSearch') }}">Search</a>
		    </li>
		    
		    {{--
		    <li {{ ($active_menu == 3) ?  'class="active"' : '' }}>
			<a href="{{ URL::action('HomeController@index') }}">Acheivers</a>
		    </li>
			
		    <li {{ ($active_menu == 4) ?  'class="active"' : '' }}>
			<a href="{{ URL::action('HomeController@index') }}">Child Acheivments</a>
		    </li>
		    --}}
		    {{--	
		    <li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
			<ul class="dropdown-menu">
			    <li><a href="blog-item.html">Blog Single</a></li>
			    <li><a href="pricing.html">Pricing</a></li>
			    <li><a href="404.html">404</a></li>
			    <li><a href="shortcodes.html">Shortcodes</a></li>
			</ul>
		    </li>
		    --}}
		    
		</ul>
	    </div>
	</div><!--/.container-->
    </nav><!--/nav-->
	    
</header><!--/header-->

