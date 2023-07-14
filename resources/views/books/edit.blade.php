@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('books/' .$books->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="Title" id="Title" value="{{$books->Title}}" class="form-control" ></br>
        <label>Author</label></br>
        <input type="text" name="Author" id="Author" value="{{$books->Author}}" class="form-control"></br>
        <label>Genre</label></br>
        <input type="text" name="Genre" id="Genre" value="{{$books->Genre}}" class="form-control"></br>
        <label>Height</label></br>
        <input type="text" name="Height" id="Height" value="{{$books->Height}}" class="form-control"></br>
        <label>Publisher</label></br>
        <input type="text" name="Publisher" id="Publisher" value="{{$books->Publisher}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop