<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="backend/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="backend/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="backend/assets/css/app.css">
</head>

<body>
<div id="auth">

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card pt-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <img src="backend/assets/images/favicon.svg" height="48" class='mb-4'>
                            <h1>Sign In</h1>

                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group position-relative has-icon-left">
                                <label for="email" class="col-md-4 col-form-label text-md-end"></label>
                                <div class="position-relative">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left">
                                <div class="clearfix">
                                    <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                                </div>
                                <div class="position-relative">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <a href="auth-forgot-password.html" class='float-end'>
                                        <small>Forgot password?</small>
                                    </a>
                                    <div class="form-control-icon">
                                        <i data-feather="lock"></i>
                                    </div>
                                </div>
                            </div>

                            <div class='form-check clearfix my-4'>
                                <div class="checkbox float-start">
                                    <input type="checkbox" id="checkbox1" class='form-check-input'  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox1">Remember me</label>
                                </div>

                            </div>
                            <div class="clearfix">
                                <button class="btn btn-primary float-end">Login</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<script src="backend/assets/js/feather-icons/feather.min.js"></script>
<script src="backend/assets/js/app.js"></script>

<script src="backend/assets/js/main.js"></script>
</body>

</html>
