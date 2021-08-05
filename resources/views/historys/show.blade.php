@extends('layouts.app')

@section('title', 'historys')
@section('content')
<div class="card">
    <div class="card-body">
        <h3>Keterangan :{{$history['keterangan']}}</h3>
      
        <h3>Deskripsi :{{$history['deskrpsi']}}</h3>
      
    </div>
</div>
@endsection