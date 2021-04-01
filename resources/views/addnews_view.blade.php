@extends('layouts.master')
@section('title', 'Add Post | Endless Admin Panel')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">
@endsection

@section('breadcrumb-title', 'Add Post')
@section('breadcrumb-items')
<li class="breadcrumb-item">News</li>
<li class="breadcrumb-item active">Add Post</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Post News</h5>
        </div>
        <div class="card-body add-post">
          <form action="{{route('post-news')}}" class="row needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
            @csrf
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @foreach ($errors->all() as $error )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$error}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
            <div class="col-sm-12">
              <div class="form-group">
                <label for="validationCustom01">Title:</label>
                <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title" name="judul_berita" required="">
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="form-group">
                <label for="validationCustom01">News Content:</label>
                <textarea class="form-control" id="validationCustom01" type="text" placeholder="Post Content" name="isi_berita"  required=""></textarea>
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="form-group">
                <label for="validationCustom01">Avatar News:</label>
                <input class="form-control" id="validationCustom01" type="file" placeholder="Post Avatar" name="ava_berita" required="">
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="btn-showcase">
                <button class="btn btn-primary" type="submit">Post</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
<script src="{{asset('assets/js/tooltip-init.js')}}"></script>
@endsection
