@extends('layouts.master')
@section('title', 'Base inputs | Endless Admin Panel')
@section('styles')

@endsection

@section('breadcrumb-title', 'Employee Project')
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
          <h5>Add Employee Project</h5>
        </div>
        <form class="form theme-form" method="POST" action="{{route('success-add')}}">
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
                    <label class="col-sm-3 col-form-label">Employee Name</label>
                    <div class="input-group col-md-9">
                        <select name="id_karyawan" class="custom-select">
                          <option disabled selected>Choose..</option>
                          @foreach ($emp as $e)
                            <option value="{{$e->id}}">{{$e->nama}}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Project Name</label>
                    <div class="input-group col-md-9">
                        <select name="id_project" class="custom-select">
                          <option disabled selected>Choose..</option>
                          @foreach ($job as $j)
                            <option value="{{$j->id}}">{{$j->nama_project}}</option>
                          @endforeach
                        </select>
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
