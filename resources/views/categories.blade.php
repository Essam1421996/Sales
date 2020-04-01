@extends('master2')
@section('container')
<div class="Contain">
        <table class="table table-responsive">
        <button type="submit" class="btn btn-primary"><h1>Categories</h1></button><br><br>


      @foreach($cats as $cat)
    <form method="post" action="{{route('edit',$cat->id)}}" >
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <tr>
            
            <td><input name="name" value="{{$cat->cat_name}}"></td>
            @foreach($admin as $adm)
            @if(Auth::user()->id==$adm->id)
            <td><button type="submit" class="btn btn-primary">Edit</button></td>
            <td><a href="{{route('delete',$cat->id)}}"  class="btn btn-success">Delete</a></td>
            @endif
            @endforeach
            <td><a href="{{route('show_products',$cat->id)}}"  class="btn btn-success">ShowProducts</a></td>
        </tr>
    </form>

    @endforeach
</table>

@foreach($admin as $adm)
@if(Auth::user()->id==$adm->id)
<form method="post" action="{{route('Add')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input name="name" placeholder="category name" />
    <button type="submit" class="btn btn-success">Add</button>
</form>
@endif
@endforeach
</div>

@endsection