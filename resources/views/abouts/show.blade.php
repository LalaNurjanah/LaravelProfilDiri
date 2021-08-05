@extends('layouts.app')

@section('title', 'abouts')
@section('content')
<div class="card">
    <div class="card-body">
        <h3>Keterangan :{{$abt['keterangan']}}</h3>
        <h3>Foto :{{$abt['foto']}}</h3>
        <h3>Deskripsi :{{$abt['deskrpsi']}}</h3>
      
    </div>
</div>
@endsection