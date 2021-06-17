<?php
$site = DB::table('konfigurasi')->first();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="{{ $site->deskripsi }}">
  <meta name="keywords" content="{{ $site->keywords }}">
  <meta name="author" content="{{ $site->namaweb }}">
  <title>{{ $title }}</title>
  <link rel="shortcut icon" href="{{ asset('public/upload/image/'.$site->icon) }}">
  <!-- Custom fonts for this template-->
  <link href="{{ asset('public/admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('public/admin/css/sb-admin-2.css') }}" rel="stylesheet">
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('public/admin/vendor/jquery/jquery.min.js') }}"></script>
  <!-- sweetalert -->
  <script src="{{ asset('public/sweetalert/js/sweetalert.min.js') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('public/sweetalert/css/sweetalert.css') }}">

</head>

<body class="bg-gradient-primary">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center" style="margin-top: 5%;">

      <div class="col-xl-4 col-lg-9 col-md-3">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-md-12 text-center">

              </div>
              {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
              <div>
                <div class="p-5">
                  <div>
                    <h1 class="h4 text-gray-900 mb-4">Form Registrasi</h1>
                    {{-- <hr>
                    <p>{{ $site->tagline }}</p>
                    <hr> --}}
                  </div>
                  <form action="{{ asset('daftar/tambah') }}" method="post" accept-charset="utf-8">
                  {{ csrf_field() }}

                  <input type="hidden" name="pengalihan" value="">
                    <div class="form-group row">
					    <label class="col-sm-3 control-label text-right">Nama</label>
					    <div class="col-sm-9">
						    <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
					    </div>
				    </div>
                    <div class="form-group row">
					    <label class="col-sm-3 control-label text-right">Email</label>
					    <div class="col-sm-9">
						    <input type="email" name="email" class="form-control" placeholder="Email" required>
					    </div>
				    </div>
                    <div class="form-group row">
					    <label class="control-label text-right">Username</label>
					    <div class="col-sm-9">
						    <input type="text" name="username" class="form-control" placeholder="Username" required>
					    </div>
				    </div>
                    <div class="form-group row">
					    <label class="control-label text-right">Password</label>
					    <div class="col-sm-9">
						    <input type="password" name="password" class="form-control" placeholder="Password" required>
					    </div>
				    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Saya bukan robot</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-user" type="submit" name="submit">
                      <i class="fa fa-lock"></i> Registrasi
                    </button>

                  </form>                  <hr>
                  {{-- <div class="text-center">
                    <a class="small" href="{{ asset('login/lupa') }}">Lupa Password?</a> | <a class="small" href="{{ asset('/') }}">Kembali ke Beranda</a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

<script>
@if ($message = Session::get('warning'))
// Notifikasi
swal ( "Mohon maaf" ,  "<?php echo $message ?>" ,  "warning" )
@endif

@if ($message = Session::get('sukses'))
// Notifikasi
swal ( "Berhasil" ,  "<?php echo $message ?>" ,  "success" )
@endif
</script>

  <script src="{{ asset('public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('public/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('public/admin/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
