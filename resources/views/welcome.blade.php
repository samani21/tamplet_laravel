<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
            background-color: #0d112b;
            background-image: url(../../bootstrap/wave1.png);
            background-repeat: no-repeat; 
            background-size: cover;
            }
            #gradient2 {
                background-image: linear-gradient(to right, #3489eb, #2a5a5c, #45ccd1);
            }
            #gradient5 {
	            background-image: linear-gradient(#132075,#132075,#132075);
	        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    <h4>{{ config('app.name', 'Laravel') }}</h4>
                </a>
                <div>
                    <span><a class="nav-link text-white" href="{{ route('login') }}"><h5>{{ __('Login') }}</h5></a></span>
                </div>
            </div>
        </nav>
        <main class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card" id="no-more-card">
                            <div class="card-header fw-bold text-white text-center"  id="gradient2">CEK REKAM MEDIS</div>
                                <div class="card-body" id="gradient5">
                                    <div>
                                        <img src="../../bootstrap/logo-puskesmas.png" style="display:block; margin-left: auto; margin-right: auto;" alt="" width="100" height="100" style="align-content: center;" srcset="">
                                        <hr style="color: white;">
                                    </div>
                                    <div>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="email" id="nik"class="col-md-5 col-form-label text-md-end text-white">NIK</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password" class="col-md-5 col-form-label text-md-end text-white">Nama Lengkap</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-0">
                                                <div class="col-md-8 offset-md-5">
                                                    <button type="submit" class="btn text-white"id="gradient2">
                                                        PROSES
                                                    </button>
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
        </main>
    </body>
</html>