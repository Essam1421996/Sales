@extends('master2')
@section('container')
<div class="contain">
<table class="table table-responsive" border="5px solid"cellspacing="5px">
    <tr bgcolor="#ff7f50"><th>User name</th><th>Category ID</th><th>Category name</th><th>Product ID</th><th>Product name</th><th>Product price</th><th>Quantity</th><th></th></tr>
    @foreach($CartContent as $c)

        <tr bgcolor="#00ced1">
            <td>{{Auth::User()->name}}</td><td>{{$c->cat_id}}</td><td>{{$c->cat_name}}</td><td>{{$c->prod_id}}</td><td>{{$c->prod_name}}</td><td>{{$c->prod_price}}</td><td>{{$c->quantity}}</td>
            <td><a href="{{route('deletecart',$c->id)}}" class="btn btn-danger">delete</a></td>
        </tr>
    @endforeach
</table>
<a class="btn btn-success btn-lg" style="float: left;margin-left: 100px"> The Total Price is : {{$total_price}}$</a>

@if($p==true)
<a class="btn btn-success btn-lg" style="float: right;margin-right: 100px"> The Best Seller is Product With ID {{$p->prod_id}}</a>
@else
<a class="btn btn-success btn-lg" style="float: right;margin-right: 100px"> The Best Seller is Product With ID </a>
@endif
</div>
@endsection