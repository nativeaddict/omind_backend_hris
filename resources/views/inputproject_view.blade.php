@extends('layouts.master')
@section('title', 'Base inputs | Endless Admin Panel')
@section('styles')

@endsection

@section('breadcrumb-title', 'Base inputs')
@section('breadcrumb-items')
<li class="breadcrumb-item">Forms</li>
<li class="breadcrumb-item">Form Controls</li>
<li class="breadcrumb-item active">Base inputs</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Project Form</h5>
        </div>
        <form class="form theme-form" method="POST" action="{{route('add-project')}}">
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
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Name Project</label>
                  <div class="col-sm-9">
                    <input class="form-control" type="text" placeholder="Name Project" required name="nama_project">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Type of Project</label>
                    <div class="input-group col-md-9">
                        <select name="jenis_project" class="custom-select">
                          <option selected>Choose..</option>
                          <option value="Website">Website</option>
                          <option value="Mobile Apps">Mobile Apps</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Deadline</label>
                  <div class="col-sm-9">
                    <input class="form-control digits" type="date" name="lama_pengerjaan">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="col-sm-9 offset-sm-3">
              <button class="btn btn-primary" type="submit">Submit</button>
              <input class="btn btn-light" type="reset" value="Cancel">
            </div>
          </div>
        </form>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
@endsection
