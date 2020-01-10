@extends('master2')
@section('container')
<table class="table table-responsive">
    <tr><th><button  class="btn btn-primary">id</button></th><th><button type="submit" class="btn btn-primary">name
    </button></th><th><button type="submit" class="btn btn-primary">image</button></th><th><button type="submit" class="btn btn-primary">price</button></th>
    <th><button type="submit" class="btn btn-primary">quantity</button></th></tr>
    @foreach($prods as $prod)
        <form method="post" action="{{route('editProd',$prod->id)}}">
            <input type="hidden" name="_token" value=" {{ csrf_token()}}">
            <tr>
                <td><button type="submit" class="btn btn-success">{{$prod->id}}</button></td><td><input name="name" value="{{$prod->prod_name}}" ></td>
                <td><img src="{{asset("images/".$prod->prod_img)}}" width="100px" height="100px" border-radius="12px"></td>
                <td><input name="price" value="{{$prod->prod_price.'$'}}"></td>
                <td><input name="quantity" value="{{$prod->prod_quantity}}" ></td>
     @foreach($admin as $adm)
              @if(Auth::user()->id==$adm->id)
                <td><button type="submit" class="btn btn-primary">edit</button></td>
                <td><a href="{{route('deleteProd',$prod->id)}}" class="btn btn-danger">delete</a></td>
         @endif
     @endforeach
                <td><a href="{{route('show_sup',$prod->id)}}" class="btn btn-success">show suppliers</a></td>
                <td><a href="{{route('details',$prod->id)}}" class="btn btn-success">Details</a></td>
               </tr>


        </form>
    @endforeach

</table>
@foreach($admin as $adm)
@if(Auth::user()->id==$adm->id)
<br>
<div class="product_form">
<br>
<button type="submit" class="btn btn-primary"><h2 style="text-align:center;">Add new Product</h2></button>

<table class="table">
    <form method="post" action="{{route('addProd')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <tr><td> <input name="name" placeholder="product name" /></td></tr>
        <tr><td ><input type="file" name="img"   style="background-color: rgba(29,29,29,0.64);margin-top:5px; margin-bottom:10px;font-size: 12px;
                                            border-radius: 4px 0px 0px 4px;"></td></tr>
        <tr><td><select name="cat_id">
                    @foreach($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                    @endforeach
                </select></td>
        </tr>
        <tr><td><input name="price" placeholder="product price" /></td></tr>
        <tr><td><input name="quantity" placeholder="product quantity" /></td></tr>
        <tr><td colspan="2"><button type="submit" class="btn btn-success btn-lg" style="margin-left:35%;">Add</button></td></tr>

    </form>
</table>
</div>
@endif
@endforeach
@endsection