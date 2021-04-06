@extends('layouts.master')
@section('title', 'Agenda')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
@endsection

@section('breadcrumb-title', 'Agenda')
@section('breadcrumb-items')
<li class="breadcrumb-item">Agenda</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
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
            <div class="row">
                <div class="col-6">
                    <h5>Agenda</h5>
                </div>
                <div class="col-6">
                    <button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#exampleModalmdo"><i class="fa fa-plus"></i> Add Agenda</button>
                    <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Add Agenda</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <form method="POST" action="{{route('submitAgenda')}}">
                                @csrf
                                <div class="form-group">
                                  <label class="col-form-label" for="agenda-title">Agenda Title:</label>
                                  <input class="form-control" id="recipient-name" type="text" name="judul_agenda">
                                </div>
                                <div class="form-group">
                                  <label class="col-form-label" for="type-agenda">Type of Agenda</label>
                                  <input class="form-control" id="type-agenda" type="text" name="jenis_agenda">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="type-agenda">Agenda Date</label>
                                    <input class="form-control" id="type-agenda" type="date" name="tgl_agenda">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label" for="type-agenda">Agenda Time</label>
                                    <input class="form-control" id="type-agenda" type="time" name="jam_agenda">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit">Send message</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="card-body">
          <!-- cd-timeline Start-->
          <section class="cd-container" id="cd-timeline">
              @foreach ($data as $i => $d)
                    @if ($i % 2 == 0)
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-picture bg-primary"><i class="icon-pencil-alt"></i></div>
                            <div class="cd-timeline-content">
                            <h4>{{$d['judul_agenda']}}</h4>
                            <p class="m-0">{{$d['jenis_agenda']}}</p><span class="cd-date">{{$d['tgl_agenda']}}<p>{{$d['jam_agenda']}}</p></span></span>
                            </div>
                        </div>
                    @else
                        <div class="cd-timeline-block">
                            <div class="cd-timeline-img cd-movie bg-secondary"><i class="icon-pencil-alt"></i></div>
                            <div class="cd-timeline-content">
                                <h4>{{$d['judul_agenda']}}</h4>
                                <p class="m-0">{{$d['jenis_agenda']}}</p><span class="cd-date">{{$d['tgl_agenda']}}<p>{{$d['jam_agenda']}}</p></span></span>
                            </div>
                        </div>
                    @endif
              @endforeach
          </section>
          <!-- cd-timeline Ends-->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid ends -->
@endsection
@section('scripts')
<script src="{{asset('assets/js/timeline/timeline-v-1/main.js')}}"></script>
<script src="{{asset('assets/js/modernizr.js')}}"></script>
@endsection
