@extends('layouts.app')

@section('title', 'historys')

@section('content')
<form action="/historys/{{ $history['id'] }}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Keterangan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="keterangan" aria-describedby="emailHelp" value="{{ old('keterangan') ? old('keterangan') : $history['keterangan'] }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input type="text" class="form-control" name="deskripsi" id="exampleInputPassword1" value="{{ old('deskripsi') ? old('deskripsi') : $history['deskripsi'] }}">
    @error('deskripsi')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



   
@endsection