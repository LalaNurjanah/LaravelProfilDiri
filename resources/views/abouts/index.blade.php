@extends('layouts.app')

@section('title', 'abouts')

@section('content')
<a href="/abouts/create" class="card-link btn-primary">Tambah Tentang Saya</a>
@foreach ($abouts as $abt)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/abouts/{{$abt['id']}}" class="card-title"> {{ $abt['keterangan'] }}</a>
    <h6 class="card" style="width: 10rem;"> {{ $abt['foto'] }}</h6>
    <h6 class="card-subtitle mb-2 text-muted"> {{ $abt['deskripsi'] }}</h6>
   
    
    <a href="/abouts/{{$abt['id']}}/edit" class="card-link btn-warning">Edit Tentang Saya</a>
    <form action="/abouts/{{ $abt['id']}}" method="POST">
    @csrf 
    @method('Delete')
    <button class="card-link btn-danger">Delete Tentang Saya</a>
    </form>
  </div>
</div>


@endforeach
<div>
    {{$abouts->links()}}
 </div>
@endsection