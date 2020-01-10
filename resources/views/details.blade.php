@extends('master2')
@section('container')
<div class="contain">
<table class="table table-responsive">
    <tr><th><button  class="btn btn-primary">id</button></th><th><button type="submit" class="btn btn-primary">name
    </button></th><th><button type="submit" class="btn btn-primary">image</button></th><th><button type="submit" class="btn btn-primary">price</button></th>
    <th><button type="submit" class="btn btn-primary">quantity</button></th></tr>
    <tr>
        <td><button type="submit" class="btn btn-success">{{$prod->id}}</button></td><td><input name="name" value="{{$prod->prod_name}}" ></td>
        
        <td><img src="{{asset('images/'.$prod->prod_img)}}" style="width:100px;height: 100px;border-radius: 12px" /></td>
        <td>{{$prod->prod_price}} $</td>
        <td>{{$prod->prod_quantity}}</td>
        @foreach($admin as $adm)
     @if(Auth::user()->id!=$adm->id)
        <td><a href="{{route('add_to_cart',$prod->id)}}" class="btn btn-success">Add To Cart</a></td>
        @endif
        @endforeach
    </tr>
</table>

</div>
@endsection