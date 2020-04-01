@extends('master2')
@section('container')
<div class="contain" >
<table class="table table-responsive" border="5px solid"cellspacing="5px" style="text-align:center;">
    <tr bgcolor="#ff7f50" ><th style="text-align:center;">User name</th><th style="text-align:center;">Category ID</th><th style="text-align:center;">Category name</th><th style="text-align:center;">Product ID</th>
    <th style="text-align:center;">Product name</th><th style="text-align:center;">Product price</th><th style="text-align:center;">Quantity</th><th></th></tr>
    @foreach($CartContent as $c)

        <tr bgcolor="#00ced1">
            <td>{{Auth::User()->name}}</td><td>{{$c->cat_id}}</td><td>{{$c->cat_name}}</td><td>{{$c->prod_id}}</td><td>{{$c->prod_name}}</td><td>{{$c->prod_price}}</td><td>{{$c->quantity}}</td>
            <td><a href="{{route('deletecart',$c->id)}}" class="btn btn-danger">delete</a></td>
        </tr>
    @endforeach
</table>
<a class="btn btn-success btn-lg" style="float: left;margin-left: 100px"> The Total Price is : {{$total_price}}$</a>

@if($p==true)
<a class="btn btn-success btn-lg" style="float: right;margin-right: 100px"> The Most Seller is Product With ID {{$p->prod_id}}</a>
@else
<a class="btn btn-success btn-lg" style="float: right;margin-right: 100px"> The Most Seller is Product With ID </a>
@endif
</div>
@endsection