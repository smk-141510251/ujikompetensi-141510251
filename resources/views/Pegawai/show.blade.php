@extends('layouts.app')

@section('content')
          <br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Detail Pegawai</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal">
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">NIP</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Nip}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Jabatan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Jabatan->Nama_jabatan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Golongan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Golongan->Nama_golongan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Photo</label>
            <div class="col-sm-8">
                <img src="{{asset('/image/'.$data->Photo)}}" height="120px" width="100px">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('Pegawai')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    
@endsection
