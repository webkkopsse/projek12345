@extends('layouts.app')

@section('content')
  <div class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row berita">
            <div class="warp_judul col-md-12">
              <div class="title_berita">
                <h2 class="isi_title"><strong><i class="fa fa-newspaper-o" aria-hidden="true"></i> BERITA TERBARU</strong></h2>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="warp_berita col-md-12">
              <div class="row">
                <div class="postnya col-sm-12">
                  @foreach ($blogs as $blog)
                    <div class="media postingan">
                      <a class="pull-left" href="/blog/{{$blog->slug}}"><img class="gambar_post_media align-self-center mr-3 rounded float-left" src="{{$blog->featured_img}}" alt="{{$blog->title}}"></a>
                      <div class="media-body">
                        <div class="blok_postingan">
                          <a class="judul_postingan" href="/blog/{{$blog->slug}}">
                            {{$blog->title}}
                          </a>
                        </div>
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{$blog->user->name}}</span>
                          </li>
                          <li class="list-inline-item">
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> {{$blog->created_at}}</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="col-md-12">
              {{ $blogs->links() }}
            </div>
          </div>
        </div>
        <div class="chat col-md-3">
              <script id="cid0020000172889306508" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 100%;height: 100%;">{"handle":"opsse","arch":"js","styles":{"b":100,"c":"000000","d":"000000","l":"FFFFFF","m":"FFFFFF","p":"10","r":100,"usricon":1.08,"fwtickm":1}}</script>
        </div>
      </div>
    </div>
  </div>

@endsection
