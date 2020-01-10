<html>
<head>
<meta charset="utf-8" >
        <meta name="viewport" content="width=device-width , initial-scale=1" >
        <title>Sales</title>
        <link href="{{asset('css/new/bootstrap.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/new/normalize.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/new/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/new/media.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/new/hover.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/new/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/new/animate.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css')}}">
        <link href="{{asset('css/new/jquery.fancybox.min.css')}}" rel="stylesheet" type="text/css">
        <link  href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <nav class="navbar" style="font-size: 15px;font-weight: bold" role="navigation">
            <div class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class= "navbar-brand hvr-pulse " href="/" style="color: #1abc9c;font-family: fantasy;font-size: 25px">S<span class="red"  style="color: red;"> ales</span></a>
            </div>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="nav navbar-nav navbar-right" >
                <li class="active"> <a style="color:red;">{{Auth::User()->name}} </a>  </li>
                    
                    <li class="active"> <a href="/categories">Home </a>  </li>
                     <li> <a href="/contact">Contact Us</a> </li>
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                     Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                        </form>
                    </li>
                    @foreach($admin as $adm)
                   @if(Auth::user()->id!=$adm->id)
                       <li> <a class="btn btn-success" href="{{route('ViewCart')}}" style=""> View Cart</a></li>

                      @endif
                      @endforeach

                </ul>
              </div>
            </div>  
        </nav>

</head>


        
@yield('container')

<div class="footer_bottom">
                       <br><br><br>
<div class="copyright">
                Copyright &copy; 2019  By:<span ><b>Essam Tayh</b></span> 
            </div>
        </div>

             <script src="{{asset('js/bootstrap.min.js')}}"></script> 
<script src="{{asset('js/jquery.flexslider.js')}}"></script>

      
</html>


