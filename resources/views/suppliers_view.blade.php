@extends('master2')
@section('container')
<div class="contain">
<table class="table table-responsive">
    <tr><th><button  class="btn btn-primary">id</button></th><th><button  class="btn btn-primary">name</button></th></tr>
    @foreach($supp as $supplier)
        <form method="post" action="{{route('edit_sup',$supplier->id)}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <tr>
                <td><button type="submit" class="btn btn-success">{{$supplier->id}}</button></td><td><input name="name" value="{{$supplier->sup_name}}" ></td>
            
         @foreach($admin as $adm)
              @if(Auth::user()->id==$adm->id)
                <td><button type="submit" class="btn btn-primary">edit</button></td>
                <td><a href="{{route('delete_sup',$supplier->id)}}" class="btn btn-danger">delete</a></td>
            @endif
        @endforeach
                <input type="hidden" name="id" value="{{$supplier->id}}" />
            </tr>
        </form>
    @endforeach

</table>
@foreach($admin as $adm)
@if(Auth::user()->id==$adm->id)
<form method="post" action="{{route('add_sup',$prod_id)}}">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
     <input name="name" placeholder="supplier name" />
    <button type="submit" class="btn btn-success">Add</button>
</form>
@endif
@endforeach
</div>
@endsection