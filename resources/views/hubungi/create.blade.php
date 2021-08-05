@extends('layouts.app')

@section('title', 'hubungi')

@section('content')
<form action="/hubungi" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class= 
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email" id="exampleInputPassword1" value="{{ old('email') }}">
    @error('email')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class= "form-group">
    <label for="exampleInputPassword1">No_tlp</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{ old('no_tlp') }}">
    @error('no_tlp')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subjek</label>
    <input type="text" class="form-control" name="subjek" id="exampleInputPassword1" value="{{ old('subjek') }}">
    @error('subjek')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pesan</label>
    <input type="text" class="form-control" name="pesan" id="exampleInputPassword1" value="{{ old('pesan') }}">
    @error('pesan')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



   
@endsection