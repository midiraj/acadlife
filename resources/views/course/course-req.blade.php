@extends('master')

@section('title')
Course
@endsection

@section('page-title')
Request for Course
@endsection


@section('content')
 <!-- form start -->
 <form action="{{ url('/service/new-service-content') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="form-group">
            <label for="inputServiceTitle" class="col-sm-2 control-label text-info">Course Name</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputServiceTitle" name="message">
            </div>
        </div>
        <div class="form-group">
            <label for="inputServiceTitle" class="col-sm-2 control-label text-info">Course Code</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputServiceTitle" name="message">
            </div>
        </div>
        <div class="form-group">
            <label for="inputServiceTitle" class="col-sm-2 control-label text-info">Faculty</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputServiceTitle" name="message">
            </div>
        </div>
        <div class="form-group">
            <label for="inputServiceTitle" class="col-sm-2 control-label text-info">Semester Code</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="inputServiceTitle" name="message">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-3 col-md-offset-2">
                <input type="submit" class="btn btn-info btn-block " value="Request">
            </div>
        </div>
    </form>
@endsection