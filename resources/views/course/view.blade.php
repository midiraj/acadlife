@if(auth()->user()->category == 1)
@extends('master')

@section('title')
Course
@endsection

@section('page-title')
Course page
@endsection

@section('content')
    <ul class="list-group">
        {{-- {{dd($course)}} --}}
     <li class="list-group-item"><strong>Course Name: </strong> {{ $course->name }} </li>
     <li class="list-group-item"><strong>Course Code: </strong> {{ $course->course_code }} </li>
     <li class="list-group-item"><strong>Semester Code: </strong> {{ $course->semester_code }} </li>
    <li style="list-style:none;text-align:right;margin:10px 0;">
        <form style="display: inline;" method="POST" action="{{ action('coursesController@destroy',$course->id)}}" onsubmit="return confirm('are you sure?')">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">Delete Course</button>
        </form>
    </li>
    </ul>
@endsection
@else
<p style="text-align:center;color:red;background-color:white;padding:10px 20px; ">Stop trying to access this page</p>
@endif