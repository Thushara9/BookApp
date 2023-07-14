@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Title : {{ $books->Title }}</h5>
        <p class="card-text">Author : {{ $books->Author }}</p>
        <p class="card-text">Genre : {{ $books->Genre }}</p>
        <p class="card-text">Height : {{ $books->Height }}</p>
        <p class="card-text">Publisher : {{ $books->Publisher }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection