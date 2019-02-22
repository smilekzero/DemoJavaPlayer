<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <title>Musik | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{URL::asset('css/home/jPlayer/jplayer.flat.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('css/home/bootstrap.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('css/home/animate.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('css/home/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('css/home/simple-line-icons.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('css/home/font.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{URL::asset('css/home/app.css')}}" type="text/css" />  
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="bg-info dker">
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xl">
      <a class="navbar-brand block" href="index.html"><span class="h1 font-bold">Musik</span></a>
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Sign in to get in touch
          	
          </strong>
        </header>
        <form action="login/login" method="post">
        	{{ csrf_field() }}
          <div class="form-group">
            <input type="text" placeholder="Name" name="uname" class="form-control rounded input-lg text-center no-border">
          </div>
          <div class="form-group">
             <input type="password" placeholder="Password" name="password" class="form-control rounded input-lg text-center no-border">
          </div>
          <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign in</span></button>
          <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Do not have an account?</small></p>
          <a href="signup.html" class="btn btn-lg btn-info btn-block rounded">Create an account</a>
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>Web app framework base on Bootstrap<br>&copy; 2014</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="{{URL::asset('js/home/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{URL::asset('js/home/bootstrap.js')}}"></script>
  <!-- App -->
  <script src="{{URL::asset('js/home/app.js')}}"></script>  
  <script src="{{URL::asset('js/home/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{URL::asset('js/home/app.plugin.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/home/jPlayer/jquery.jplayer.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/home/jPlayer/add-on/jplayer.playlist.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/home/jPlayer/demo.js')}}"></script>
@if (session('msg')=='error')
<script>alert("用户名或密码错误");</script>

@endif
</body>
</html>
