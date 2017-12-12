@extends('layouts.backend')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="/blog/create">Post Baru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tersimpan</a>
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

<form method="POST" action="/blog">
  {{ csrf_field() }}
  <div class="container">
    <div class="row justify-content-between">
      {{-- kolom post --}}
      <div class="col-md-8">
          <div class="form-group">
            <textarea class="form-control" name="isi_blog" id="content_blog" rows="20">{{old('isi_blog')}}</textarea>
            @if ($errors->has('content'))
              <span>{{$errors->first('content')}}</span>
            @endif
          </div>
      </div>
      {{-- end kolom post --}}

      {{-- kolom featured --}}
      <div class="col-md-4">
        <div class="form-group">
          <label for="judul">Judul Post</label>
          @if ($errors->has('title'))
            <span>{{$errors->first('title')}}</span>
          @endif
          <input type="text" name="title" class="form-control" id="judul" placeholder="Masukkan Link ..." value="{{old('title')}}">
        </div>
        <div class="form-group">
          <label for="thumbnail">Set Featured Image</label>
          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-outline-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="featured_img" readonly>
          </div>
          @if ($errors->has('featured_img'))
            <span>{{$errors->first('featured_img')}}</span>
          @endif
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-9">
            <div class="featured_img_holder">
              <img id="holder" style="margin-top:15px;min-height:170px;max-height:170px; max-width:245px">
            </div>
          </div>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-outline-primary btn-block">Submit Post</button>
      </div>
      {{-- end kolom featured --}}

    </div>
  </div>
</form>
@endsection
