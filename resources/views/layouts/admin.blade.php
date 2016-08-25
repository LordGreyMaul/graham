<!doctype HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome to the Admin Panel</title>
        <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
        <link rel="stylesheet" href="{{URL::asset('/css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
    </head>
    <body style="background: white;">
   <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                   <h4>Admin</h4>
                   <li><h4 style="color: white;">Welcome {{ Auth::user()->name }}</h4></li>
                   <hr>
                </li>
                <li>
                    <h3 class="adminh">Blog</h3>
                </li>
              <li>
                    <a href="{{ URL::asset('articles') }}">All blogs</a>
                </li>
                <li>
                    <a href="{{ URL::asset('articles/create') }}">Create</a>
                </li>
                <hr>
                <li><a href="{{ url('/logout') }}"><h3><i class="fa fa-btn fa-sign-out"></i>Logout</a></h3></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a>
            				@yield('content')
        				
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}" ></script>
		<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}" ></script>
        <script type="text/javascript" src="{{ URL::asset('js/dropzone.js') }}" ></script>
        <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
        <script>
            Dropzone.options.addPhotosForm = {
            paramName: 'photo',
            maxFilesize: 3,
            acceptedFiles: '.jpg, .jpeg, .png'
            };
        </script>
    </body>
</html>