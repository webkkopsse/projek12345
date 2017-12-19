@extends('layouts.backend')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      @if (Session::has('msg'))
        <div class="alert alert-success">{{ Session::get('msg') }}</div>
      @endif
    </div>
    <div class="col-md-12">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" href="/blog/create">Post Baru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/blog/saved">Tersimpan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Terpublish</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table table-responsive-sm-12 table-striped">
        <thead>
          <tr class="d-flex">
            <th class="col-sm-9">Judul Post</th>
            <th class="col-sm-3 text-center">Action</th>
          </tr>
        </thead>
      <tbody>
        @foreach ($blogs as $blog)
          <tr class="post_tersimpan d-flex">
            <td class="col-sm-9"><a href="/blog/{{$blog->slug}}"> <h4 class="text-left"> {{$blog->title}} </h4></a></td>
            <td class="col-sm-1"><a href="/blog/{{$blog->id}}/edit" class="btn btn-warning btn-block" role="button" aria-pressed="true">Edit</a></td>
            <td class="col-sm-1">
              <form method="POST" action="/blog/{{$blog->id}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
              <button type="submit" name="submit" class="btn btn-danger btn-block">Hapus</button>
              </form>
            </td>
            <td class="col-sm-1"><a href="#" class="btn btn-success btn-block" role="button" aria-pressed="true">Kirim</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    <div class="col-md-12">
      {{ $blogs->links() }}
    </div>
  </div>
</div>
@endsection
