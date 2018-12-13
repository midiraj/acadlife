@extends('master')

@section('title')
Blog
@endsection

@section('page-title')
Post
@endsection

@section('content')
<div class="row">
<div class="col-md-12">
    <div>
        @if($message = Session::get('message'))
            <h3 class="text-center text-success">{{ $message }}</h3>
        @endif
        
    </div>
    <br>
    <!-- form start -->
    <form action="{{ url('/service/new-service-content') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}


        <div class="form-group">
            <label for="inputServiceTitle" class="col-sm-2 control-label text-info">Subject</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputServiceTitle" name="message">
            </div>
        </div>

           <!-- <div class="form-group">
                <label for="inputServiceImage" class="col-sm-2 control-label text-info">File</label>
                <div class="col-sm-10">
                    <input type="file" id="inputServiceImage" name="service_image" accept="image/*">
                </div>
            </div>-->

        <div class="form-group">
            <label for="inputServiceDescription" class="col-sm-2 control-label  text-info">Description</label>
            <div class="col-sm-10">
                <textarea name="service_description" id="inputServiceDescription" cols="30" rows="10" style="resize: vertical" placeholder="Start writing......" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
                <input type="submit" class="btn btn-info btn-block " value="Post">
            </div>
        </div>
    </form>
</div>
</div>
@endsection