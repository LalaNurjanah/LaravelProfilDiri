@extends('layouts.app')

@section('title', 'abouts')

@section('content')
<form action="/abouts" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Keterangan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="keterangan" aria-describedby="emailHelp" value="{{ old('keterangan') }}">
    @error('keterangan')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
  <div class="form-group">
<label for="cover_img">foto</label>
<input type="file" name="cover_img">
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input type="text" class="form-control" name="deskripsi" id="exampleInputPassword1" value="{{ old('deskripsi') }}">
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



   
@endsection