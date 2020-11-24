<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cabeleleila Leila - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{url('admin-assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{url('admin-assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary bg-gradient-primary vh-100 d-flex align-items-center">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center vh-100 d-flex align-items-center">

      <div class="col-md-5">

        <div class="card o-hidden border-0 p-3 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 py-3 font-weight-bold">Faça seu Login</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group py-3">
                      <input id="email" type="email" class="form-control form-control-user  @error('email') is-invalid @enderror" id="exampleInputEmail" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group py-3">
                      <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group py-3">
                      <div class="custom-control custom-checkbox ">
                        <input type="checkbox" class="custom-control-input" style="margin-left: -1.5rem; top: .30rem;z-index: 1; " name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} id="customCheck">
                        <label class="custom-control-label" for="customCheck">Lembrar senha</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Entrar
                    </button>
                    <a href="/cadastrar" class="btn btn-primary btn-user btn-block">
                      Cadastrar
                    </a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{url('admin-assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('admin-assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{url('admin-assets/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{url('admin-assets/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{url('admin-assets/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{url('admin-assets/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>