@extends('layouts.app')

@section('title', 'hubungi')

@section('content')
<a href="/hubungi/create" class="card-link btn-primary">Hubungi</a>
@foreach ($hubungi as $hub)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/hubungi/{{$hub['id']}}" class="card-title"> {{ $hub['nama'] }}</a>
    <p class="card-text"> {{ $hub['email'] }}</p>
    <h6 class="card-subtitle mb-2 text-muted"> {{ $hub['no_tlp'] }}</h6>
    <p class="card-text"> {{ $hub['subjek'] }}</p>
    <p class="card-text"> {{ $hub['pesan'] }}</p>
    <a href="/hubungi/{{$hub['id']}}/edit" class="card-link btn-warning">Edit hubungi</a>
    <form action="/hubungi/{{ $hub['id']}}" method="POST">
    @csrf 
    @method('Delete')
    <button class="card-link btn-danger">Delete hubungi</a>
    </form>
  </div>
</div>


@endforeach
<div>
    {{$hubungi->links()}}
 </div>
@endsection