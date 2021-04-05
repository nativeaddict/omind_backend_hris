@extends('layouts.master')
@section('title', 'Project Dashboard | Endless Admin Panel')
@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endsection

@section('breadcrumb-title', 'Team Members')
@section('breadcrumb-items')
<li class="breadcrumb-item">Employee</li>
<li class="breadcrumb-item active">Team Members</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Team Members</h5>
              <div class="card-header-right">
                <ul class="list-unstyled card-option">
                  <li><i class="icofont icofont-simple-left"></i></li>
                  <li><i class="view-html fa fa-code"></i></li>
                  <li><i class="icofont icofont-maximize full-card"></i></li>
                  <li><i class="icofont icofont-minus minimize-card"></i></li>
                  <li><i class="icofont icofont-refresh reload-card"></i></li>
                  <li><i class="icofont icofont-error close-card"></i></li>
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive sellers team-members">
                <table class="table table-bordernone">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Position</th>
                      <th scope="col">E-Mail</th>
                      <th scope="col">Phone Number</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($data as $n => $d )
                        <tr>
                            <td>{{$n + 1}}</td>
                            <td>
                            <div class="d-inline-block align-middle"><img class="img-radius img-50 align-top m-r-15 rounded-circle" src="{{$d->foto}}" alt="">
                                <div class="d-inline-block">
                                <p>{{$d->nama}}</p>
                                </div>
                            </div>
                            </td>
                            <td>
                            <p>{{$d->posisi}}</p>
                            </td>
                            <td>
                            <p>{{$d->email}}</p>
                            </td>
                            <td>
                            <p>{{$d->no_hp}}</p>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <div class="code-box-copy">
                <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="table-responsive sellers team-members"&gt;
&lt;table class="table table-bordernone"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th scope="col"&gt;Name&lt;/th&gt;
&lt;th scope="col"&gt;Position&lt;/th&gt;
&lt;th scope="col"&gt;Office&lt;/th&gt;
&lt;th scope="col"&gt;E-Mail&lt;/th&gt;
&lt;th scope="col"&gt;Phone&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
&lt;img src="{{asset('assets/images/user/6.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="d-inline-block"&gt;
&lt;p&gt;Jerry Patterson&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Design Manager&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Integer&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;jerry13@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+91 264 570 4611&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
&lt;img src="{{asset('assets/images/user/2.png')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="d-inline-block"&gt;
&lt;p&gt;Rosa Matthews&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Director of Sales&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Ipsum&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;ros456@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+01 967 487 1873&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
&lt;img src="{{asset('assets/images/user/3.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="d-inline-block"&gt;
&lt;p&gt;Alvaro Aguirre&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Office Assistant&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Praesent&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;alvar76@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+48 724 585 0012&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
&lt;img src="{{asset('assets/images/user/15.png')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="d-inline-block"&gt;
&lt;p&gt;Jerry Patterson&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Programmer Analyst&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Ipsum&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;jerry13@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+91 264 570 4611&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
&lt;img src="{{asset('assets/images/user/4.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="d-inline-block"&gt;
&lt;p&gt;Anne Snyder&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Social Worker&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Donec&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;annsny@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+61 480 087 1175&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;
&lt;div class="d-inline-block align-middle"&gt;
&lt;img src="{{asset('assets/images/user/5.jpg')}}" class="img-radius img-50 align-top m-r-15 rounded-circle" alt=""&gt;
&lt;div class="d-inline-block"&gt;
&lt;p&gt;Alana Slacker&lt;/p&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Systems Engineer&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;Etiam&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;alana82@gmail.com&lt;/p&gt;&lt;/td&gt;
&lt;td&gt;&lt;p&gt;+75 483 761 4680&lt;/p&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/tbody&gt;
&lt;/table&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/raphael.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/morris.js')}}"></script>
<script src="{{asset('assets/js/chart/morris-chart/prettify.min.js')}}"></script>
<script src="{{asset('assets/js/chart/chartjs/chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/excanvas.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.symbol.js')}}"></script>
<script src="{{asset('assets/js/chart/google/google-chart-loader.js')}}"></script>
<script src="{{asset('assets/js/chart/peity-chart/peity.jquery.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/dashboard/project-custom.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
@endsection
