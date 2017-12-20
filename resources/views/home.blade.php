@extends('layouts.app')

@section('content')
  <div class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="row">
            <div class="col-md-12">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="first-slide" src="img/1.jpg" alt="First slide">
                      <div class="container">
                        <div class="carousel-caption text-right">
                          <h3>Judul 1</h3>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Lihat Sekarang..</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="second-slide" src="img/2.jpg" alt="Second slide">
                      <div class="container">
                        <div class="carousel-caption text-right">
                          <h3>Judul 2</h3>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Lihat Sekarang..</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="third-slide" src="img/3.jpg" alt="Third slide">
                      <div class="container">
                        <div class="carousel-caption text-right">
                        <h3>Judul 3</h3>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Lihat Sekarang..</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
            </div>
          </div>
          <div class="boxes row">
            <div class="col-lg-4">
              <div class="box bg-box">
                <a style="display:block" href="/tutorial">
                  <div class="tombol_menu">
                    <i class="tombol fa fa-database" aria-hidden="true"></i>
                    <h2>Tutorial Dapodik</h2>
                  </div>
                </a>
                  <p>Tutorial tentang pengunaan aplikasi dapodik.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box bg-box">
                <a style="display:block" href="/download">
                  <div class="tombol_menu">
                    <i class="tombol fa fa-download" aria-hidden="true"></i>
                    <h2>Download</h2>
                  </div>
                </a>
                  <p>Download file-file yang anda butuhkan.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="box bg-box">
                <a style="display:block" href="/blog/create">
                  <div class="tombol_menu">
                    <i class="tombol fa fa-pencil-square" aria-hidden="true"></i>
                    <h2>Kontribusi</h2>
                  </div>
                </a>
                  <p>Mari berkontribusi untuk kemajuan bersama.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="warp_judul col-md-12">
              <div class="title_berita">
                <h2 class="isi_title"><strong><i class="fa fa-newspaper-o" aria-hidden="true"></i> BERITA TERBARU</strong></h2>
                <a class="tunjul_kanan" href="/blog" role="button">lihat blog</a>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="warp_berita col-md-12">
              <div class="row">
                @foreach ($blogs as $blog)
                  <div class="postnya ani_post col-sm-4">
                    <div class="card">
                      <img class="card-img-top gambar_post" src="{{$blog->featured_img}}" alt="{{$blog->title}}">
                      <div class="card-body">
                        <h4 class="card-title">{{$blog->title}}</h4>
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <span><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{$blog->user->name}}</span>
                          </li>
                          <li class="list-inline-item">
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i> {{$blog->created_at}}</span>
                          </li>
                        </ul>
                        <a href="/blog/{{$blog->slug}}" class="pull-right btn btn btn-warning">Baca Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
            <div class="col-md-12">
              <p class="text-center ani_post"><a class="btn tombol_blog btn-lg btn-block" href="/blog" role="button">lihat blog selengkapnya</a></p>
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
