@extends('masteraak-page')
@section('title', 'Registrasi')


@section('nav-bar')
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('pengumuman') }}">Pengumuman</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
        </li>
        <li class="nav-item active">
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
        <h3 class="title-1 lg-title">Registrasi</h3>
    </div>
</div>
<div class="image-float">
    <img class="float img-1" src="{{ asset('aak/images/img1.jpg') }}" alt="">
    <img class="float img-2" src="{{ asset('aak/images/img4.jpg') }}" alt="">
</div>
<section class="content">
    
    <div class="container">
        <h3 class="title-1 sm-title">Registrasi</h3>
        <p class="title-desc mb-4">Isi form berikut dengan menggunakan data yang valid (Benar).</p>
        <div class="col-md-6 pl-0 pr-0">
            <form action="{{ route('register') }}" class="register-form-group mb-4" method="POST">
                @csrf
                @method('POST')
               
                    
                    @if(session()->has('status'))
                        <div class="alert alert-{{ session()->get('status') }}">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                   
                        <div class="form-group">
                            <input type="text" id="nama" name="nama" class="form-control @if($errors->has('nama')) is-invalid @endif" placeholder="Nama lengkap" value="{{ old('nama') }}" required>
                            @if($errors->has('nama'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nama') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="tel" id="no_telepon" name="no_telepon" class="form-control @if($errors->has('no_telepon')) is-invalid @endif" placeholder="No. Telf" value="{{ old('no_telepon') }}">
                            @if($errors->has('no_telepon'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('no_telepon') }}
                                </div>
                            @endif
                        </div>
                    
                   
                        <div class="form-group">
                            <select name="prodi" id="prodi" class="form-control @if($errors->has('prodi')) is-invalid @endif" required>
                                <option selected disabled>-- Silahkan Pilih Program Studi --</option>
                            </select>
                            @if($errors->has('prodi'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('prodi') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group" id="lulusan">
                            <label class="form-label lable-radio">Khusus Profesi</label>
                            <div class="wrap-input" id="lulusan_unigres">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" @if(old('lulusan_unigres') == 1) checked @endif type="radio" name="lulusan_unigres" id="lulusan_unigres1" value="1" required>
                                    <label class="form-check-label" for="inlineRadio1">Lulusan Unigres</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" @if(old('lulusan_unigres') == 0) checked @endif type="radio" name="lulusan_unigres" id="lulusan_unigres2" value="0" required>
                                    <label class="form-check-label" for="inlineRadio2">Bukan Lulusan Unigres</label>
                                </div>
                            </div>
                            @if($errors->has('lulusan_unigres'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lulusan_unigres') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <select name="jamMasuk" id="jamMasuk" class="form-control @if($errors->has('jamMasuk')) is-invalid @endif" required>
                                <option selected disabled>-- Silahkan Pilih Kelas --</option>
                            </select>
                            <input type="hidden" name="kelas" id="kelas">
                            @if($errors->has('jamMasuk'))
                            <div class="invalid-feedback">
                                {{ $errors->first('jamMasuk') }}
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <select name="jalur_masuk" id="jalur_masuk" class="mb-0 form-control @if($errors->has('jalur_masuk')) is-invalid @endif" aria-describedby="jalur_masuk_help" required>
                                <option selected disabled>-- Silahkan Pilih Jalur Masuk --</option>
                                </select>
                            <div class="mb-2">
                                <small style="font-size: 0.70em;" id="jalur_masuk_help" class="form-text text-muted">Keterangan jalur masuk lihat catatan kaki.</small>
                            </div>
                            @if($errors->has('jalur_masuk'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jalur_masuk') }}
                                </div>
                            @endif
                        </div>
                    
                    
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="mb-0 form-control @if($errors->has('email')) is-invalid @endif" placeholder="Email" value="{{ old('email') }}" required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <div class="mb-2">
                                <small style="font-size: 0.70em;" class="form-text text-muted">Pastikan Anda memiliki akun email pribadi yang aktif.</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="Password" required>
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @if($errors->has('password')) is-invalid @endif" placeholder="Konfirmasi Password" required>
                        </div>
                   
                    <div class="wrapper-btn-form">
                        <div class="wrap-left">
                            
                        </div>
                        <button type="submit" class="btn btn-light btn-daftar mt-3">Submit</button>
                    </div>
               
            </form>
            <div class="catatan mt-3 mb-0">
                <p>Catatan Jalur Masuk :</p>
                                <ol class="note">
                                    <li>Reguler (Murni dari SMK/SMA sederajat)</li>
                                    <li>Transfer (Dari D3 melanjutkan ke S1)</li>
                                    <li>Pindahan (Pindahan dari peguruan tinggi lain)</li>
                                    <li>Lanjutan (Khusus Ners lulusan S.Keperawatan dari Unigres)</li>
                                </ol>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    ucwords = (str) => {
        return (str + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
            return $1.toUpperCase();
        });
    }

    prodi = () => {
        $.ajax({
            type:'GET',
            url:'api/getprodi',
            success:function(data){
                $("#prodi").find('option').remove().end().append('<option selected disabled>-- Silahkan Pilih Program Studi --</option>');
                $.each(data, function(){
                    $("#prodi").append('<option  value="'+ this.id +'" data-lulusan-unigres="'+ this.lulusan_unigres +'">'+ this.jenjang + ' ' + this.prodi +'</option>')
                });
            }
        });
    }

    $( document ).ready(function() {
        var p = prodi();
        $("#lulusan").hide();
        $('#lulusan_unigres2').prop( "checked", true );
        //$('input[name="lulusan_unigres"]').attr("disabled",true);
        //$('#lulusan_unigres1').attr("disabled",true);

        $("#prodi").change(function () {
            var prodi = $("#prodi option:selected" ).val();
            var lulusan = $('input[name="lulusan_unigres"]:checked').val();
            var checked_lulusan = $("#prodi option:selected" ).attr('data-lulusan-unigres');

            console.log(checked_lulusan);
            console.log(prodi);

            if (checked_lulusan == 1) {
                $("#lulusan").show();
                //$('input[name="lulusan_unigres"]').attr("disabled",false);
            } else {
                $("#lulusan").hide();
                //$('#lulusan_unigres1').attr("disabled",true);
                // $('input[name="lulusan_unigres"]').attr("disabled",true);
                $('#lulusan_unigres2').prop( "checked", true );
            }

            $.ajax({
                type:'GET',
                url:'api/getjammasuk/' + prodi + '/' + lulusan,
                success:function(data){
                    $("#jamMasuk").find('option').remove().end().append('<option selected disabled>-- Silahkan Pilih Kelas --</option>');
                    $.each(data, function(){
                        $("#jamMasuk").append('<option  value="'+ this.jam_masuk_id +'" data-kelas="'+ this.id +'">'+ this.kelas + ' ' + ucwords(this.jam_masuk) +'</option>')
                    });
                }
            });
        });

        $("#lulusan_unigres").change(function () {
            var prodi = $("#prodi option:selected" ).val();
            var lulusan = $('input[name="lulusan_unigres"]:checked').val();

            $.ajax({
                type:'GET',
                url:'api/getjammasuk/' + prodi + '/' + lulusan,
                success:function(data){
                    $("#jamMasuk").find('option').remove().end().append('<option selected disabled>-- Silahkan Pilih Kelas --</option>');
                    $.each(data, function(){
                        $("#jamMasuk").append('<option  value="'+ this.jam_masuk_id +'" data-kelas="'+ this.id +'">'+ this.kelas + ' ' + this.jam_masuk +'</option>')
                    });
                }
            });
        });

        $("#jamMasuk").change(function () {
            var jam = $("#jamMasuk option:selected" );
            let kls = $('#kelas');
            kls.val(jam.attr('data-kelas'));

            $.ajax({
                type:'GET',
                url:'api/getjalurmasuk/' + kls.val(),
                success:function(data){
                    $("#jalur_masuk").find('option').remove().end().append('<option selected disabled>-- Silahkan Pilih Jalur Masuk --</option>');
                    $.each(data, function(){
                        $("#jalur_masuk").append('<option  value="'+ this.jalur_masuk_id +'">'+ this.jalur_masuk +'</option>')
                    });
                    if(!data) {
                        $("#jalur_masuk").append('<option disabled>Tidak ada gelombang pendaftaran yang terbuka.</option>')
                    }
                }
            });
        });
    });

</script>
@endsection
