@extends('layouts.app')

@section('title', 'hubungi')
@section('content')
<div class="card">
    <div class="card-body">
        <h3>Nama :{{$hubungi['nama']}}</h3>
        <h3>Email :{{$hubungi['email']}}</h3>
        <h3>No_tlp :{{$hubungi['no_tlp']}}</h3>
        <h3>Subjek :{{$hubungi['subjek']}}</h3>
        <h3>Pesan :{{$hubungi['pesan']}}</h3>
      
    </div>
</div>
@endsection