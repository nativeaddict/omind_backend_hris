@extends('layouts_auth.master')
@section('title', 'Login | OmindTech')
@section('styles')

@endsection

@section('content')
<div class="auth-bg">
  <div class="authentication-box">
    <div class="text-center"><img src="{{asset('assets/images/endless-logo.png')}}" alt=""></div>
    <div class="card mt-4">
      <div class="card-body">
        <div class="text-center">
          <h4>LOGIN</h4>
          <h6>Enter your Username and Password </h6>
        </div>
        <form class="theme-form" method="post">
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
          <div class="form-group">
            <label class="col-form-label pt-0">Username</label>
            <input class="form-control" type="text" required="" name="username">
          </div>
          <div class="form-group">
            <label class="col-form-label">Password</label>
            <input class="form-control" type="password" required="" name="password">
          </div>
          <div class="form-group form-row mt-3 mb-0">
            <button class="btn btn-primary btn-block" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
@endsection
