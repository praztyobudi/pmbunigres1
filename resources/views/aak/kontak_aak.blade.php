@extends('masteraak-page')
@section('title','Pengumuman')

@section('nav-bar')
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pengumuman') }}">Pengumuman</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Pendaftaran</a>
        </li>
        <li class="nav-item">
            <a class="nav-link login" href="{{ route('login') }}">Login <i class="fa fa-sign-in"></i></a>
        </li>
    </ul>
</div>
@endsection

@section('content-aak')
<div class="decor">
    <div class="container ct-t">
        <h3 class="title-1 lg-title">Kontak</h3>
    </div>
</div>
<div class="image-float">
    <img class="float img-1" src="{{ asset('aak/images/img1.jpg') }}" alt="">
    <img class="float img-2" src="{{ asset('aak/images/img4.jpg') }}" alt="">
</div>
<section class="content">
    <div class="container">
        <div class="row col-lg-12">
            <div class="title-desc">
                <p><a style="font-weight: bold;
                        text-decoration: solid;"
                        href="https://www.google.com/search?safe=strict&amp;q=universitas+gresik+alamat&amp;stick=H4sIAAAAAAAAAOPgE-LRT9c3zMg1zkrPTSnRks1OttLPyU9OLMnMz4MzrBJTUopSi4sXsUqW5mWWpRYVZ5YkFiukA8UysxUScxJzE0sALd8oi0sAAAA&amp;ludocid=1432422069902166228&amp;sa=X&amp;ved=2ahUKEwjb64XP86nhAhUo73MBHZUmAUwQ6BMwE3oECA8QAw">Alamat</a>&nbsp;:&nbsp;Jl.
                    Arif Rahman Hakim Gresik No.2B, Kramatandap, Gapurosukolilo, Kec. Gresik, Kabupaten Gresik, Jawa
                    Timur 61111</p>
                <p><a style="font-weight: bold;
                        text-decoration: solid;"
                        href="https://www.google.com/search?safe=strict&amp;q=universitas+gresik+provinsi&amp;stick=H4sIAAAAAAAAAOPgE-LRT9c3zMg1zkrPTSnRkstOttLPyU9OLMnMz4MzrAqK8ssy85JTF7FKl-ZllqUWFWeWJBYrpBelFmdmK0BkizMBLzaNCU4AAAA&amp;sa=X&amp;ved=2ahUKEwjb64XP86nhAhUo73MBHZUmAUwQ6BMoADAVegQIFBAC">Provinsi</a>&nbsp;:&nbsp;Jawa
                    Timur</p>
                <p><a style="font-weight: bold;
                        text-decoration: solid;"
                        href="https://www.google.com/search?safe=strict&amp;q=universitas+gresik+telepon&amp;ludocid=1432422069902166228&amp;sa=X&amp;ved=2ahUKEwjb64XP86nhAhUo73MBHZUmAUwQ6BMwFnoECBMQAg">Telepon</a>&nbsp;:&nbsp;081
                    230 798 700</p>
                <figure><iframe class="mt-4"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.648924589624!2d112.65056281477428!3d-7.1665213948256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8004662a078c7%3A0x13e0fc4884f2c8d4!2sUniversitas+Gresik!5e0!3m2!1sid!2sid!4v1521516613522"
                        allowfullscreen="" width="100%" height="300"></iframe></figure>
            </div>
        </div>
    </div>
</section>
@endsection