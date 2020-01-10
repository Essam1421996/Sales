@extends('master')
@section('container')
<div class="banner text-center">
<form class="navbar-form navbar-right">
                    <a href="{{ url('/login') }}" class="btn btn-success"  title="login to your account">Login</a>
                    <a href="{{ url('/register') }}"  class="btn btn-info" title="create new account">Register</a>
                </form>

  <div class="container">
    <div class="banner-info">
       @foreach($cats as $cat)
    <h1>  <input class="btn btn-success"    value="{{$cat->cat_name}}" ></h1><br>
      @endforeach
       </div>
  </div>
</div>
@endsection
