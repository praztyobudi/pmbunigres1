<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    {{-- <link href="http://fonts.cdnfonts.com/css/helvetica-neue-9" rel="stylesheet"> --}}

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    <link href="{{ asset('unigres/css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('unigres/css/responsive.css') }}" rel="stylesheet" />

    <title>Unigres</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light second-nav dashboard">
    <div class="main-container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img class="logo-brand" src="{{ asset('unigres/images/logo.png') }}">
            <p>PMB.<span>Unigres</span></p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <div class="dropdown dropdown-acount-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->nama }}</a>
                        <div class="dropdown-menu dropdown-acount" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{__('logout')}}</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<main class="dashboard">
    <div class="wrapper-dashboard-nav">
        <ul class="dashboard-top nav nav-pill" id="pills-tab1" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="{{ route('admin.tes-kesehatan.index') }}" class="nav-link active" type="button" aria-controls="pills-home1" aria-selected="true">
                    <div class="wp-ic">
                        <img src="{{ asset('unigres/images/data.svg') }}">
                    </div>
                    <span>Data PMB</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.jenjang.index') }}" class="nav-link" type="button" aria-controls="pills-home1" aria-selected="true">
                    <div class="wp-ic">
                        <img src="{{ asset('unigres/images/data.svg') }}">
                    </div>
                    <span>Data Master</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tes-tpa.index') }}" class="nav-link" type="button" aria-controls="pills-home1" aria-selected="true">
                    <div class="wp-ic">
                        <span>P</span>
                    </div>
                    <span>Pengaturan</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        <div class="container-fluid dashboard-user">
            <h4>Form Pendaftaran</h4>
            <p>Isi form berikut dengan menggunakan data yang valid (Benar).</p>
            <ul class="nav nav-pills mb-5 mx-auto">
                <li class="nav-item " role="presentation">
                    <a class="nav-link" href="{{route('admin.monitoring.pendaftar.biodata.index', $data->user_id)}}" type="button">Data Calon Mahasiswa</a>
                </li>
                <li class="nav-item nav-data-ortu" role="presentation">
                    <a class="nav-link"  href="{{route('admin.monitoring.pendaftar.keluarga.index', $data->user_id)}}" type="button">Data Orang Tua/Wali</a>
                </li>
                <li class="nav-item nav-prodi" role="presentation">
                    <a class="nav-link active" href="{{route('admin.monitoring.pendaftar.berkas.index', $data->user_id)}}" type="button">Berkas</a>
                </li>
            </ul>
            @if(session('status'))
                <div class="wrapper-info alert-{{ session('status') }}">
                    <img src="{{ asset('unigres/images/ic-i.svg') }}">
                    <p class="info1" style="margin-bottom: 0px;">{{ session('message') }}</p>
                </div>
            @endif
            <div class="tab-content">
                <div class="container data-orang-tua tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row ">
                        <div class="col-md-6 left">
                            <form action="{{ route('admin.monitoring.pendaftar.berkas.update', $data->user_id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-header">
                                        Data Berkas
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="ijazah">Ijazah
                                                    @if(!empty($data) && !is_null($data->ijazah))
                                                        <a href="{{ asset('storage/' . $data->ijazah) }}" target="_blank">Lihat ijazah</a>
                                                    @endif</label>
                                                <input type="file" class="form-control input-file" name="ijazah" id="ijazah">
                                                @if($errors->has('ijazah'))
                                                    <div class="invalid-feedback">
                                                        <strong>{{ $errors->first('ijazah') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="skhun">SKHUN
                                                    @if(!empty($data) && !is_null($data->skhun))
                                                        <a href="{{ asset('storage/' . $data->skhun) }}" target="_blank">Lihat ijazah</a>
                                                    @endif</label>
                                                <input type="file" class="form-control input-file" name="skhun" id="skhun">
                                                @if($errors->has('skhun'))
                                                    <div class="invalid-feedback">
                                                        <strong>{{ $errors->first('skhun') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="ktp">KTP
                                                    @if(!empty($data) && !is_null($data->ktp))
                                                        <a href="{{ asset('storage/' . $data->ktp) }}" target="_blank">Lihat ijazah</a>
                                                    @endif</label>
                                                <input type="file" class="form-control input-file" name="ktp" id="ktp">
                                                @if($errors->has('ktp'))
                                                    <div class="invalid-feedback">
                                                        <strong>{{ $errors->first('ktp') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="kartu_keluarga">Kartu Keluarga
                                                    @if(!empty($data) && !is_null($data->kartu_keluarga))
                                                        <a href="{{ asset('storage/' . $data->kartu_keluarga) }}" target="_blank">Lihat ijazah</a>
                                                    @endif</label>
                                                <input type="file" class="form-control input-file" name="kartu_keluarga" id="kartu_keluarga">
                                                @if($errors->has('kartu_keluarga'))
                                                    <div class="invalid-feedback">
                                                        <strong>{{ $errors->first('kartu_keluarga') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                    <span class="text-left">
                                        <small>Format file: JPEG, JPG, PNG, atau PDF</small>
                                        <small>Ukuran file maksimal: 250kb</small>
                                        <small>Kosongkan jika tidak ingin menambahkan atau mengubah berkas tertentu.</small>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-light btn-daftar">Submit</button>

                                <div class="catatan">
                                    <strong>Catatan :</strong>
                                    <p>Pastikan kembali data yang ada isi sudah benar<br>sebelum menekan tombol submit</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="dashboard">
    <ul class="wrapper-footer">
        <li>Copyright ?? 2019 AAK Delima Husada</li>
        <li>Jl. Arif Rahman Hakim 2B, Gresik</li>
        <li>Telp.(031) 3981918, 3978628</li>
        <li>WA. 0812-3079-8700, 0856-4976-9693</li>
    </ul>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
        $('#dataPendaftar').DataTable();
    } );
</script>
</body>
</html>
