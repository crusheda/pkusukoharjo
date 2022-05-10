<!doctype html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Login | RS PKU Muhammadiyah Sukoharjo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Portal Admin Rumah Sakit PKU Muhammadiyah Sukoharjo" name="description" />
        <meta content="Yussuf Faisal" name="author" />
        <!-- App favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="img/logo/pku/pku_ico.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/logo/pku/pku_ico.png">

        <!-- preloader css -->
        <link rel="stylesheet" href="admin/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="admin/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="admin/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="admin/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0 justify-content-md-center">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="img/logo/pku/logo-admin.png" alt="">
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Selamat Datang!</h5>
                                            <p class="text-muted mt-2">Silakan Login untuk masuk ke Sistem Admin.</p>
                                        </div>
                                        <form class="mt-4 pt-2" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukkan Email Anda" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <label class="form-label">Password</label>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="">
                                                            <a href="javascript:void(0)" class="text-muted">Lupa Password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password Anda" aria-label="Password" aria-describedby="password-addon" name="password" required autocomplete="current-password">
                                                    <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="remember-check">
                                                            Remember me
                                                        </label>
                                                    </div>  
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn text-white w-100 waves-effect waves-light" style="background-color: #047D3E" type="submit">Masuk</button>
                                            </div>
                                        </form>

                                        {{-- <div class="mt-4 pt-2 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign in with -</h5>
                                            </div>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()"
                                                        class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()"
                                                        class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()"
                                                        class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> --}}

                                        {{-- <div class="mt-5 text-center">
                                            <p class="text-muted mb-0">Don't have an account ? <a href="auth-register.html"
                                                    class="text-primary fw-semibold"> Signup now </a> </p>
                                        </div> --}}
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">2022 © <script></script> Made with <i class="mdi mdi-heart text-danger"></i> by LakonWEB</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="admin/libs/jquery/jquery.min.js"></script>
        <script src="admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/libs/metismenu/metisMenu.min.js"></script>
        <script src="admin/libs/simplebar/simplebar.min.js"></script>
        <script src="admin/libs/node-waves/waves.min.js"></script>
        <script src="admin/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="admin/libs/pace-js/pace.min.js"></script>
        <!-- password addon init -->
        <script src="admin/js/pages/pass-addon.init.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/minia/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2022 10:26:13 GMT -->
</html>