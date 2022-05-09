@extends('Pelanggan.master')

@section('content')
    <div class="card border border-success mb-5" style="width:70%; margin: auto">
        <div class="card-body mb-5">
          <h5 class="card-title text-center text-success mb-5 pb-2">Profil Saya</h5>
          <center><img class="profile-picture" src="{{ asset('fotouser/' . $user->foto) }}" width="150px" height="150px"></center>
          <form class="form-inline">
            <div class="form-group row mt-5">
              <label for="inputPassword" class="col-sm-3 col-form-label">Nama Toko</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword" value="{{$user->toko}}" readonly>
              </div>
            </div>
    
            <div class="form-group row mt-3">
              <label for="inputPassword" class="col-sm-3 col-form-label">Alamat Toko</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword" value="{{$user->alamat}}" readonly>
              </div>
            </div>
    
            <div class="form-group row mt-3">
                <label for="formFile" class="col-sm-3 col-form-label">Akte Pendirian/SIUP/SITU</label>
                <div class="col-sm-9">
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
    
            <div class="form-group row mt-3">
              <label for="inputPassword" class="col-sm-3 col-form-label">Nama Pemilik Toko</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword" value="{{$user->name}}" readonly>
              </div>
            </div>
    
            <div class="form-group row mt-3">
              <label for="inputPassword" class="col-sm-3 col-form-label">E-mail Pemilik Toko</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputPassword" value="{{$user->email}}" readonly>
              </div>
            </div>
    
            <div class="form-group row mt-3">
              <label for="inputPassword" class="col-sm-3 col-form-label">No Handphone</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="inputPassword" value="{{$user->telepon}}" readonly>
              </div>
            </div>
    
            <center><div class="col">
                <a href="" class="btn btn-light mt-4" style="margin-top: -8px; background-color: #77AC5C; color: white; width: 50%  " >Edit Profile</a>
            </div></center>
    
          </form>
        </div>
    </div>
@endsection