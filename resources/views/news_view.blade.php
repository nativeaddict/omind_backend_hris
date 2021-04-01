@extends('layouts.master')
@section('title', 'Blog Details | Endless Admin Panel')
@section('styles')

@endsection

@section('breadcrumb-title', 'Blog Details')
@section('breadcrumb-items')
<li class="breadcrumb-item">News</li>
<li class="breadcrumb-item active">News Content</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12 mb-2">
        <a href="{{route('add-news')}}" class="btn btn-pill btn-outline-primary-2x mb-2 float-right"><i class="fa fa-plus"></i> Added News</a>
    </div>
    @foreach ($data as $i => $d)
        @if ($i == 0)
            <div class="col-xl-6 set-col-12">
                <div class="card">
                <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" src="{{$d->ava_berita}}" alt="">
                    <div class="blog-details-main">
                    <ul class="blog-social">
                        <li class="digits">{{$d->tgl_post}}</li>
                        <li class="digits">by: Admin</li>
                    </ul>
                    <hr>
                    <h5>{{$d->judul_berita}}</h5>
                    <h6 class="blog-bottom-details">{{$d->isi_berita}}</h6>
                    </div>
                </div>
                </div>
            </div>
        @endif
        <div class="col-md-6 col-xl-3 set-col-6">
            <div class="card" >
            <div class="blog-box blog-grid text-center"><img class="img-fluid top-radius-blog" style="height:200px; object-fit:cover" src="{{$d->ava_berita}}" alt="">
                <div class="blog-details-main" style="min-height: 260px">
                <ul class="blog-social">
                    <li class="digits">{{$d->tgl_post}}</li>
                    <li class="digits">by: Admin</li>
                </ul>
                <hr>
                <h5>{{$d->judul_berita}}</h5>
                <h6 class="blog-bottom-details">{{$d->isi_berita}}</h6>
                </div>
            </div>
            </div>
        </div>
    @endforeach
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
@endsection
