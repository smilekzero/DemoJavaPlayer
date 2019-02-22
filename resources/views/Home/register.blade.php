<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>Musik | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="{{URL::asset('js/home/jPlayer/jplayer.flat.css')}}" type="text/css" />
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
  <section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xl">
      <a class="navbar-brand block" href="index.html"><span class="h1 font-bold">Musik</span></a>
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Sign up to find interesting thing</strong>
        </header>
        <form action="/login" method="post">
        	{{ csrf_field() }}
          <div class="form-group">
            <input type="text" name="uname" placeholder="Name" class="form-control rounded input-lg text-center no-border"><span class = uname></span>
          </div>
          <div class="form-group">
            <input type="text" placeholder="Phone"  name="phone" class="form-control rounded input-lg text-center no-border"><span class = phone></span>
          </div>
          <!--  <div class="form-group">
            <input type="text" placeholder="Code"  name="Code" class="form-control rounded input-lg text-center no-border" style="width:220px;display: inline-block;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Send"  name="Code" class="form-control rounded input-lg text-center no-border" style="width:80px;display: inline-block;">
           <a href="#" class="btn btn-default  text-center rounded disabled">Disabled</a>
          </div> -->
          <div class="form-group">
             <input type="password"
             name="password" placeholder="Password" class="form-control rounded input-lg text-center no-border"><span class = password></span>
          </div>
          <div class="form-group">
             <input type="password" placeholder="Repass"
             name="repass" class="form-control rounded input-lg text-center no-border"><span class = repass></span>
          </div>
          <div class="checkbox i-checks m-b">
            <label class="m-l">
              <input type="checkbox" checked><i></i> Agree the <a href="#">terms and policy</a>
            </label>
          </div>
          <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign up</span></button>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Already have an account?</small></p>
          <a href="signin.html" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a>
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
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

</body>
</html>
<script type="text/javascript">
  $('input[name=uname]').mouseout(function(){
      var uname = $('input[name=uname]').val();
      if(uname.length == 0){
        $('.uname').html('用户名不为空6-15字母数字下划线组成');
      }else{
        $('.uname').html('');
      }
  });
  $('input[name=phone]').mouseout(function(){
      var phone = $('input[name=phone]').val();
      if(phone.length == 0){
        $('.phone').html('用户名不为空6-15字母数字下划线组成');
      }else{
        $('.phone').html('');
      }
  });
  $('input[name=password]').mouseout(function(){
      var password = $('input[name=password]').val();
      var repass = $('input[name=repass]').val();
      if(password.length == 0){
        $('.password').html('用户名不为空6-15字母数字下划线组成');
      }else if(password == repass){
        $('.password').html('密码不一致');
      }else{
        $('.password').html('');
      }
  });
  $('input[name=repass]').mouseout(function(){
    var password = $('input[name=password]').val();
    var repass = $('input[name=repass]').val();
    //console.log(password == repass);
    if(password != repass){
        $('.password').html('密码不一致');
    }else{
      $('.password').html('');
    }
  });
  //$.ajax()
  
</script>