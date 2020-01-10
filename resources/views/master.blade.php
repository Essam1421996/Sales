<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sales</title>
<link type="text/css" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"   />
<link type="text/css" href="{{asset('css/flexslider.css')}}" rel="stylesheet" type='text/css' />
<link type="text/css" href="{{asset('css/style.css')}}" rel="stylesheet" type='text/css' />
<link  type="text/css" rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type='text/css'>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
  <div class="container"> <a class="navbar-brand" href="/"><i class="fa fa-paper-plane"></i> Sales</a>
    <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
      <ul class="nav" id="nav">
        <li class="current"><a href="/">Home</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <div class="clear"></div>
      </ul>
      <script type="text/javascript" src="{{asset('js/responsive-nav.js')}}"></script> 
    </div>
  </div>

</div>
@yield('container')
<div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>Copyright &copy; 2019  Design by <b>Essam Tayh</b></p>
    </div>
  </div>
</div>
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
</body>
</html>

