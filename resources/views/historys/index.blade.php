@extends('layouts.app')

@section('title', 'historys')

@section('content')
<a href="/historys/create" class="card-link btn-primary">Tambah History Pendidikan</a>
@foreach ($historys as $history)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/historys/{{$history['id']}}" class="card-title"> {{ $history['keterangan'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted"> {{ $history['deskripsi'] }}</h6>
   
    
    <a href="/historys/{{$history['id']}}/edit" class="card-link btn-warning">Edit History Pendidikan</a>
    <form action="/historys/{{ $history['id']}}" method="POST">
    @csrf 
    @method('Delete')
    <button class="card-link btn-danger">Delete History Pendidikan</a>
    </form>
  </div>
</div>


@endforeach
<div>
    {{$historys->links()}}
 </div>
@endsection