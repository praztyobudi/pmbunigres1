@extends('masteraak-page')
@section('title','Pengumuman')

@section('nav-bar')
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('pengumuman') }}">Pengumuman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
        </li>
        @if (!Auth::check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Pendaftaran</a>
        </li>
        <li class="nav-item">
            <a class="nav-link login" href="{{ route('login') }}">Login <i class="fa fa-sign-in"></i></a>
        </li>
        @else
        @if (auth()->user()->permission_id == 2)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Biodata</a>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.monitoring.pendaftar.index') }}">Halaman Admin</a>
        </li>
        @endif
        <div class="dropdown">
            <button class="nav-link btn login dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ auth()->user()->nama }}
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item " href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('logout')}}</a>
            </div>
        </div>
        </li>
        @endif
    </ul>
</div>
@endsection

@section('content-aak')
<div class="decor">
    <div class="container ct-t">
        <h3 class="title-1 lg-title">Pengumuman</h3>
    </div>
</div>
<div class="image-float">
    <img class="float img-1" src="{{ asset('aak/images/img1.jpg') }}" alt="">
    <img class="float img-2" src="{{ asset('aak/images/img4.jpg') }}" alt="">
</div>
<section class="content">
    <div class="container">
        <h3 class="title-1 sm-title">Pengumuman</h3>
        <p class="title-desc mb-4">Pusat informasi seputar PMB AAK Delima Husada</p>
        @foreach ($data as $key=>$data)
        <div class="col-md-6 pl-0 pr-0">
            <div class="pengumuman">
                <div class="button-group">
                    <a href="{{ asset('storage/' . $data->file_url) }}" target="_blank" class="btn btn-outline-light">
                        <strong>{{ $data->judul }}</strong>
                        <span class="badge badge-success m-1">NEW</span>
                        <p class="item-ann-title-1">{{ $data->deskripsi }}</p>
                        <p class="item-ann-title-2">Publised by : <span>{{ $data->publish }}</span></p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection