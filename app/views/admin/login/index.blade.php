<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manjhi Samaj :: Admin Panel </title>

    <!-- Core CSS - Include with every page -->
    {{ HTML::style('assets/admin/css/bootstrap.min.css'); }}
    {{ HTML::style('assets/admin/font-awesome/css/font-awesome.css'); }}
    
    <!-- SB Admin CSS - Include with every page -->
    {{ HTML::style('assets/admin/css/sb-admin.css'); }}
</head>
<body>
    <div class="container">
        <div class="row">
        
            <div class="col-md-4 col-md-offset-4">
                
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <h2>{{ Session::get('success') }}</h2>
                    </div>
                @endif
                
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        <h2>{{ Session::get('error') }}</h2>
                    </div>
                @endif
                
                @if(Session::has('warning'))
                    <div class="alert alert-warning">
                        <h2>{{ Session::get('warning') }}</h2>
                    </div>
                @endif
                
                @if(Session::has('info'))
                    <div class="alert alert-info">
                        <h2>{{ Session::get('info') }}</h2>
                    </div>
                @endif
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        
                        {{ Form::open( array( 'action' => 'SuperUsersController@postSignin', 'method'=>'post', 'role'=>'form') ) }}
                        
                            <fieldset>
                                <div class="form-group">
                                    {{ Form::text('username', '', array('class'=>'form-control', 'placeholder'=> 'Username', 'autofocus'=>'autofocus')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=> 'Password')) }}
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {{ Form::checkbox('remember', ''); }}
                                        Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                    {{ Form::submit('Login', array('class'=>'btn btn-lg btn-success btn-block')); }}
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    {{ HTML::script('assets/admin/js/jquery-1.10.2.js'); }}
    {{ HTML::script('assets/admin/js/bootstrap.min.js'); }}
    {{ HTML::script('assets/admin/js/plugins/metisMenu/jquery.metisMenu.js'); }}
    
    <!-- SB Admin Scripts - Include with every page -->
    {{ HTML::script('assets/admin/js/sb-admin.js'); }}
    

</body>

</html>
