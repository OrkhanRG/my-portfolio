<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>SignIn Cover | EQUATION - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/src/assets/img/favicon.ico') }}"/>
    <link href="{{ asset('assets/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet"
          type="text/css"/>
    <script src="{{ asset('assets/layouts/vertical-light-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('assets/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('assets/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/src/assets/css/light/authentication/auth-cover.css') }}" rel="stylesheet"
          type="text/css"/>

    <link href="{{ asset('assets/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/src/assets/css/dark/authentication/auth-cover.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body class="form">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<div class="auth-container d-flex">

    <div class="container mx-auto align-self-center">

        <div class="row">

            <div
                class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                <div class="auth-cover-bg-image"></div>
                <div class="auth-overlay"></div>

                <div class="auth-cover">

                    <div class="position-relative">

                        <img src="{{ asset('assets/src/assets/img/auth-cover.svg') }}" alt="auth-img">

                        <h2 class="mt-5 text-white font-weight-bolder px-2">Login Üçün Sağdakı Formu Doldurun.</h2>
                        <p class="text-white px-2">bu səhifədə login olaraq, admin panelə giriş edə bilərsiniz.</p>
                    </div>

                </div>

            </div>

            <div
                class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">

                                <h2>Daxil Ol</h2>
                                <p>Email və Şifrənizi daxil edərək login ola bilərsiz</p>

                            </div>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id='email' class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                        @error('email')
                                           <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Şifrə</label>
                                        <input type="password" name="password" id='password' class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                        <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox"
                                                   id="remember" name="remember">
                                            <label class="form-check-label" for="remember">
                                                Məni xatırla
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100">DAXIL OL</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('assets/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>
