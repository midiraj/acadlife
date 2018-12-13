@extends('master')

@section('title')
Home Page
@endsection

@if(auth()->user()->category == 1)
    @section('page-title')
    Instructor Home
    @endsection
@else
    @section('page-title')
    Student Home
    @endsection
@endif


@section('content')

  <div class="jumbotron text-center jumbotron-fluid">
    <div class="container">
    <h3 class="display-4" style="text-transform:capitalize;">Welcome <strong> {{ auth()->user()->name }} </strong> </h3>
    
    @if(auth()->user()->category == 1)
      <a href="/course"><button type="button" class="btn btn-primary">Courses</button></a>
      <a href="/private-mssg"><button type="button" class="btn btn-success">Chat</button></a>
      <a href="/profile"><button type="button" class="btn btn-info">Profile</button></a>
    @else  
     <a href="/private-mssg"><button type="button" class="btn btn-success">Chat</button></a>
     <a href="/profile"><button type="button" class="btn btn-info">Profile</button></a>   
    @endif 
    </div>
  </div>

@endsection