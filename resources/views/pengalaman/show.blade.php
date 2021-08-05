@extends('layouts.app')

@section('title', 'pengalaman')
@section('content')
<div class="card">
    <div class="card-body">
        <h3>Keterangan :{{$pengalaman['keterangan']}}</h3>
      
        <h3>Deskripsi :{{$pengalaman['deskrpsi']}}</h3>
      
    </div>
</div>
@endsection