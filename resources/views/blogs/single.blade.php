@extends('layouts.app')

@section('content')
  <br>
<div class="container">
  <div class="row justify-content-between">
    <div class="tulisan col-md-8">
      <div class="judul-blog"><h4>{{$blog->title}}</h4></div>
      <p>Ditulis oleh : {{$blog->user->name}}</p>
      <div class="isi-blog">{!! $blog->content !!}</div>
      <a href="/" class="btn btn-primary btn-lg">Kembali ke Home</a></button>
    </div>
    <div class="col-md-3">
      <h1>SideBar</h1>
    </div>
  </div>
</div>

@endsection
