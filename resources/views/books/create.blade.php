@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Books Page</div>
  <div class="card-body">
      
      <form action="{{ url('books') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="Title" id="Title" class="form-control" required></br>
        <label>Author</label></br>
        <input type="text" name="Author" id="Author" class="form-control"required></br>
        <label>Genre</label></br>
        <input type="text" name="Genre" id="Genre" class="form-control"required></br>
        <label>Height</label></br>
        <input type="text" name="Height" id="Height" class="form-control"required></br>
        <label>Publisher</label></br>
        <input type="text" name="Publisher" id="Publisher" class="form-control"required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop