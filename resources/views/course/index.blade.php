@if(auth()->user()->category == 1)
@extends('master')

@section('title')
Course
@endsection

@section('page-title')
View Courses
@endsection

@section('content')
    <ul class="list-group">
        
        @foreach($courses as $course)
            <a style="margin-bottom: 10px; display: block;" href="/course/{{$course->id}}"><li class="list-group-item"> {{ $course->name }} </li></a>
        @endforeach
    </ul>
@endsection

@else
<p style="text-align:center;color:red;background-color:white;padding:10px 20px; ">Stop trying to access this page</p>
@endif