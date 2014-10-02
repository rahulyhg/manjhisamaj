@extends('front.layouts.master')

@section('css-section')
    {{ HTML::style('assets/admin/js/plugins/datepicker/css/datepicker.css'); }}
@stop

@section('main_content')
    
@section('main_content')
<div class="row">

    <div class="col-sm-12 wow fadeInDown">
        <h2> Profiles</h2>
    </div>
        
        
</div>
<div class="row">
    
    <div class="col-sm-12 wow fadeInDown">
    {{ $users->links(); }}
        <div class="team">
            @define $i = 0
            @if ( !empty($users) )
                @foreach ( $users as $user )
                    @define $i = $i + 1
                    @if ( 0 == $i % 2 )
                        <div class="row clearfix">
                    @endif    
                    
                    <div class="col-md-4 col-sm-6  col-md-offset-2">	
                        <div class="single-profile-top wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; -webkit-animation: fadeInDown 1000ms 300ms;">
                            <div class="media">
                                <div class="pull-left">
                                    @if ( 1 == $user->gender)
                                        {{ HTML::image('/assets/front/images/icons/128x28/male.png', 'Female' ) }}
                                    @else
                                        {{ HTML::image('/assets/front/images/icons/128x28/female.png', 'Female' ) }}
                                    @endif  
                                </div>
                                <div class="media-body">
                                    <h4> {{ $user->first_name .' '. $user->last_name }} </h4>
                                    <h5>
                                        ID :{{ $user->profile_code }}
                                    </h5>
                                    <h5>
                                        Manglik  :
                                        @if (1 == $user->is_manglik)
                                            Yes
                                        @elseif (2 == $user->is_manglik)
                                            No
                                        @elseif (3 == $user->is_manglik)
                                            Unkown
                                        @endif 
                                    </h5>
                                    
                                    <h5> {{ $user->date_of_birth }} </h5>
                                    
                                    <ul class="social_icons">
                                        <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#" target="_blank" ><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>Education : {{ $user->highest_education }}</p>
                            <p>Occupation : {{ $user->occupation_description }}</p>
                            <p>Annual Income : {{ $user->annual_income }}</p>
                            <p>Address : {{ $user->city_id }}</p>
                        </div>
                    </div><!--/.col-lg-4 -->
                    
                    @if ( 0 == $i % 2 )
                        </div> <!--/.row -->
                        <div class="row team-bar">
                            <div class="first-one-arrow hidden-xs">
                            <hr>
                            </div>
                            <div class="first-arrow hidden-xs">
                            <hr> <i class="fa fa-angle-up"></i>
                            </div>
                            <div class="second-arrow hidden-xs">
                            <hr> <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="third-arrow hidden-xs">
                            <hr> <i class="fa fa-angle-up"></i>
                            </div>
                            <div class="fourth-arrow hidden-xs">
                            <hr> <i class="fa fa-angle-down"></i>
                            </div>
                        </div> <!--skill_border-->
                    @endif    
                @endforeach
                
            @endif
        </div>
    </div> {{-- /.team --}}
    {{ $users->links(); }}
</div><!--/.row-->
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


