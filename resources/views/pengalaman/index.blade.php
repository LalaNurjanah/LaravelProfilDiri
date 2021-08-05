@extends('layouts.app')

@section('title', 'pengalaman')

@section('content')
<a href="/pengalaman/create" class="card-link btn-primary">Tambah Pengalaman Usaha</a>
@foreach ($pengalaman as $peng)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/pengalaman/{{$peng['id']}}" class="card-title"> {{ $peng['keterangan'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted"> {{ $peng['deskripsi'] }}</h6>
   
    
    <a href="/pengalaman/{{$peng['id']}}/edit" class="card-link btn-warning">Edit Pengalaman Usaha</a>
    <form action="/pengalaman/{{ $peng['id']}}" method="POST">
    @csrf 
    @method('Delete')
    <button class="card-link btn-danger">Delete Pengalaman Usaha</a>
    </form>
  </div>
</div>


@endforeach
<div>
    {{$pengalaman->links()}}
 </div>
@endsection