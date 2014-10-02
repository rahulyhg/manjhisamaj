<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
		@if(!empty($link_categories) and count($link_categories) > 0)
		    @foreach($link_categories as $link_category)
			 <div class="col-md-2 col-sm-3">
			    <div class="widget">
				<h3>{{ $link_category->title }}</h3>
				<ul>
				    @if(!empty($links) and count($links) > 0)
					@foreach($links as $link)
					    @if($link_category->id == $link->link_category_id )
					    <li>
						<a href="{{ $link->link }}" target="_blank">
						    {{ $link->title }}
						</a>
					    </li>
					    @endif 
					@endforeach
				    @endif 
				</ul>
			    </div>    
			</div><!--/.col-md-3-->
		    @endforeach
		@endif 
            </div>
        </div>
    </section><!--/#bottom-->