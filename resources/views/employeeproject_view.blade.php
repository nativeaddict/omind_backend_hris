@extends('layouts.master')
@section('title', 'API DataTables | Endless Admin Panel')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
@endsection

@section('breadcrumb-title', 'API DataTables')
@section('breadcrumb-items')
<li class="breadcrumb-item">Tables</li>
<li class="breadcrumb-item">Data Tables</li>
<li class="breadcrumb-item active">API</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12 mb-2">
        <a href="{{route('form-employee-project')}}" class="btn btn-pill btn-outline-primary-2x mb-2 float-right">Added Project <i class="fa fa-plus"></i></a>
    </div>
    <!-- Add rows  Starts-->
    <!-- Add rows Ends-->
    <!-- Individual column searching (text inputs) Starts-->
    <!-- Individual column searching (text inputs) Ends-->
    <!-- Individual column searching (select inputs) Starts-->
    <!-- Individual column searching (select inputs) Ends-->
    <!-- Child rows (show extra / detailed information) Starts-->
    <!-- Child rows (show extra / detailed information) Ends-->
    <!-- Row selection (multiple rows) Starts-->
    <!-- Row selection (multiple rows) Ends-->
    <!-- Row Selection And Deletion (Single Row) Starts-->
    <!-- Row Selection And Deletion (Single Row) Ends-->
    <!-- Form Inputs datatable Starts-->
    <!-- Form Inputs datatable end-->
    <!-- show hide table Starts-->
    <!-- Row Selection And Deletion (Single Row) Ends-->
    <!-- search API regular expresion Starts-->
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>List Employee Project</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display" id="search-api-datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Employee Name</th>
                  <th>Project</th>
                  <th>Deadline </th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($data as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->karyawan->nama}}</td>
                        <td>{{$d->project->nama_project}}</td>
                        <td>{{$d->project->lama_pengerjaan}}</td>
                        <td>
                            <a href="/delete/{{$d->id}}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
