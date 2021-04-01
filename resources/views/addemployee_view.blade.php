@extends('layouts.master')
@section('title', 'Validation Forms | Endless Admin Panel')
@section('styles')

@endsection

@section('breadcrumb-title', 'Validation Forms')
@section('breadcrumb-items')
<li class="breadcrumb-item active">Validation Forms</li>
@endsection

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Add Employee Form</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="{{route('add-employees')}}" enctype="multipart/form-data">
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
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="validationDefault01">Name</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-user"></i></span></div>
                    <input class="form-control" id="validationDefault01" type="text" placeholder="Name" name="nama" value="{{old('nama')}}" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Email</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-envelope"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="email" placeholder="Email" name="email" value="{{old('email')}}" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Password</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="icofont icofont-ui-password"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="password" placeholder="Password" name="password" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Place Of Birth</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-hospital-o"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="text" placeholder="Place of Birth" name="tmp_lahir" value="{{old('tmp_lahir')}}" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Date Of Birth</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-calendar"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="date" placeholder="Date of Birth" name="tgl_lahir" value="{{old('tgl_lahir')}}" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-sm-12">
                <label for="validationGender">Gender</label>
              </div>
              <div class="col">
                <div class="form-group m-t-5 m-checkbox-inline mb-3 custom-radio-ml">
                  <div class="radio radio-primary">
                    <input id="laki" type="radio" name="jenis_kelamin" value="Man">
                    <label class="mb-0" for="laki">Man</label>
                  </div>
                  <div class="radio radio-primary">
                    <input id="perempuan" type="radio" name="jenis_kelamin" value="Woman">
                    <label class="mb-0" for="perempuan">Woman</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Address</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-location-arrow"></i></span></div>
                  <textarea class="form-control" id="validationDefaultUsername" placeholder="Address" name="alamat" value="{{old('alamat')}}" aria-describedby="inputGroupPrepend2" required></textarea>
                </div>
              </div>
              <div class="col-sm-12">
                <label for="validationBlood">Blood Type</label>
              </div>
              <div class="col">
                <div class="form-group m-t-5 m-checkbox-inline mb-3 custom-radio-ml">
                  <div class="radio radio-primary">
                    <input id="golA" type="radio" name="gol_darah" value="A">
                    <label class="mb-0" for="golA">A</label>
                  </div>
                  <div class="radio radio-primary">
                    <input id="golB" type="radio" name="gol_darah" value="B">
                    <label class="mb-0" for="golB">B</label>
                  </div>
                  <div class="radio radio-primary">
                    <input id="golC" type="radio" name="gol_darah" value="O">
                    <label class="mb-0" for="golC">O</label>
                  </div>
                  <div class="radio radio-primary">
                    <input id="golD" type="radio" name="gol_darah" value="AB">
                    <label class="mb-0" for="golD">AB</label>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Instagram</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-instagram"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="text" placeholder="Instagram" name="instagram" value="{{old('instagram')}}" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Working Days</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="icofont icofont-clock-time"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="text" placeholder="Working Day" name="hari_kerja" value="{{old('hari_kerja')}}" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-12 mb-1">
                <label for="validationDefaulEmail">Role</label>
              </div>
              <div class="input-group col-md-12 mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-users"></i></label>
                </div>
                <select name="role" class="custom-select" id="role">
                  <option selected disabled>Choose..</option>
                  <option value="Production">Production</option>
                  <option value="Marketing">Marketing</option>
                </select>
              </div>
              <div class="col-md-12 mb-1">
                <label for="validationDefaulEmail">Position</label>
              </div>
              <div class="input-group col-md-12 mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01"><i class="fa fa-users"></i></label>
                </div>
                <select disabled name="posisi" class="custom-select" id="production">
                  <option value="Fullstack Web Developer">Fullstack Web Developer</option>
                  <option value="Backend Web Developer">Backend Web Developer</option>
                  <option value="Frontend Web Developer">Frontend Web Developer</option>
                  <option value="Fullstack Mobile Developer">Fullstack Mobile Developer</option>
                  <option value="Backend Mobile Developer">Backend Mobile Developer</option>
                  <option value="Frontend Mobile Developer">Frontend Mobile Developer</option>
                  <option value="UI/UX Designer">UI/UX Designer</option>
                  <option value="Graphic Designer">Graphic Designer</option>
                </select>
                <select style="display: none" class="custom-select" id="marketing">
                    <option value="Marketing">Marketing</option>
                </select>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Basic Salary</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-money"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="number" placeholder="Basic Salary" name="gaji_pokok" value="{{old('gaji_pokok')}}" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Phone Number</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-phone"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="number" placeholder="Phone Number" name="no_hp" value="{{old('no_hp')}}" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Photos</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-camera"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="file" placeholder="Photos" name="foto"  aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">KTP</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-credit-card"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="file" placeholder="KTP" name="ktp"  aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationDefaulEmail">Qualification</label>
                <div class="input-group">
                  <div class="input-group-prepend"><span class="input-group-text" id="inputGroupPrepend2"><i class="fa fa-file"></i></span></div>
                  <input class="form-control" id="validationDefaultUsername" type="file" placeholder="Qualification" name="ijazah" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
@endsection
@section('scripts')
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
<script>
    $('#role').change(function(){
        $('#production').attr('disabled',false);
        if($('#role').val() === 'Production'){
            $('#marketing').css({display: 'none'});
            $('#marketing').removeAttr('name');
            $('#production').css({display: 'block'});
            $('#production').attr('name','posisi');
        } else {
            $('#marketing').css({display: 'block'});
            $('#marketing').attr('name','posisi');
            $('#production').css({display: 'none'});
            $('#production').removeAttr('name');
        }
    });
</script>
@endsection
