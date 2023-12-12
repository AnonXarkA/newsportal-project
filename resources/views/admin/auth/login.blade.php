<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<<<<<<< HEAD
  <title>Login &mdash; Stisla</title>
=======
  <title>Admin Login &mdash; </title>
>>>>>>> origin/feature-branch

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('admin/assets/modules/bootstrap-social/bootstrap-social.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
<<<<<<< HEAD
            <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>{{ __('admin.Login') }}</h4></div>

              <div class="card-body">
                @if (session()->has('success'))
                    <i><b style="color:green">{{ session()->get('success') }}</b></i>
                @endif
                <form method="POST" action="{{ route('admin.handle-login') }}" class="needs-validation" novalidate="">
                    @csrf
                  <div class="form-group">
                    <label for="email">{{ __('admin.Email') }}</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    @error('email')
                        <code>{{ $message }}</code>
                    @enderror
                    <div class="invalid-feedback">
                      {{ __('admin.Please fill in your email') }}
=======
            {{-- <div class="login-brand">
              <img src="assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div> --}}

            <div class="card card-primary">
              <div class="card-header"><h4>Admin Login</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('admin.handle_login') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    @error('email')
                        <code>{{ $message }}</code>

                    @enderror
                    <div class="invalid-feedback">
                      Please fill in your email
>>>>>>> origin/feature-branch
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
<<<<<<< HEAD
                    	<label for="password" class="control-label">{{ __('admin.Password') }}</label>
                      <div class="float-right">
                        <a href="{{ route('admin.forgot-password') }}" class="text-small">
                          {{ __('admin.Forgot Password?') }}
=======
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
>>>>>>> origin/feature-branch
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
<<<<<<< HEAD
                      {{ __('admin.please fill in your password') }}
=======
                      please fill in your password
>>>>>>> origin/feature-branch
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
<<<<<<< HEAD
                      <label class="custom-control-label" for="remember-me">{{ __('admin.Remember Me') }}</label>
=======
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
>>>>>>> origin/feature-branch
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
<<<<<<< HEAD
                      {{ __('admin.Login') }}
=======
                      Login
>>>>>>> origin/feature-branch
                    </button>
                  </div>
                </form>


              </div>
            </div>

            <div class="simple-footer">
<<<<<<< HEAD
              {{ __('admin.Copyright') }} &copy; {{ __('admin.WebSolutionUs 2023') }}
=======
              Copyright &copy; Team SDNS (2023)
>>>>>>> origin/feature-branch
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
<<<<<<< HEAD
  <script src="{{ asset('admin/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('admin/assets/modules/tooltip.js') }}"></script>
=======
  <script src="{{asset('admin/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/modules/popper.js')}}"></script>
  <script src="{{asset('admin/assets/modules/tooltip.js')}}"></script>
>>>>>>> origin/feature-branch
  <script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('admin/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('admin/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
</body>
</html>
