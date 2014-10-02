<div class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Users <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('UserController@index') }}">User List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('UserController@create') }}">Add new User </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Events <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('VEventController@index') }}">Event List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('VEventController@create') }}">Add new Event </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li> 
            
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Suggestion <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('SuggestionController@index') }}">Suggestion List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('SuggestionController@create') }}">Add new Suggestion </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Achievers <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('AchieverController@index') }}">Achievers List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('AchieverController@create') }}">Add new Achiever </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Child <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('ChildController@index') }}">Child List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('ChildController@create') }}">Add new Child </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Caste<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('CasteController@index') }}">Caste List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('CasteController@create') }}">Add new Caste</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Education Category <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('EducationCategoryController@index') }}">Education Category List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('EducationCategoryController@create') }}">Add new Education Category</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Education  <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('EducationController@index') }}">Education List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('EducationController@create') }}">Add new Education </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Link Category  <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('LinkCategoryController@index') }}">Link Catgory List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('LinkCategoryController@create') }}">Add new Link Category </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Link  <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('LinkController@index') }}">Link List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('LinkController@create') }}">Add new Link </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Country<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('CountryController@index') }}">Country List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('CountryController@create') }}">Add new Country</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
                
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> State<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('StateController@index') }}">State List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('StateController@create') }}">Add new State</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i> City<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ URL::action('CityController@index') }}">City List</a>
                    </li>
                    <li>
                        <a href="{{ URL::action('CityController@create') }}">Add new City</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
                
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Flot Charts</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris.js Charts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->