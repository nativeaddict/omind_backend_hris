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
          <h5>List Project</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="display" id="search-api-datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Project Name</th>
                  <th>Type of Project</th>
                  <th>Deadline </th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($data as $n => $d)
                    <tr>
                        <td>{{$n + 1}}</td>
                        <td>{{$d->nama_project}}</td>
                        <td>{{$d->jenis_project}}</td>
                        <td>{{$d->lama_pengerjaan}}</td>
                        <td>
                            <a href="/delete/{{$d->id}}" class="btn btn-outline-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                  @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Project Name</th>
                  <th>Type of Project</th>
                  <th>Deadline</th>
                  <th>Action</th>
                </tr>
              </tfoot>
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
