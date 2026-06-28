<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Northern Iloilo State University - Lemery Campus | Library LMS</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('template/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

<style>
html, body {
    height: 100%;
    margin: 0;
    background: #f4f6f9;
}

/* SPLIT */
.split-container {
    height: 100vh;
    display: flex;
}

/* LEFT PANEL */
.left-panel {
    flex: 1;
    background: linear-gradient(135deg, rgba(0,123,255,0.85), rgba(2,48,71,0.95)),
    url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1400')
    center/cover no-repeat;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
    padding: 3rem;
}

.left-panel i {
    color: #ffd700;
    margin-bottom: 15px;
}

.left-panel h1 {
    font-size: 2.3rem;
    font-weight: 700;
}

.left-panel h3 {
    font-weight: 500;
    opacity: 0.9;
}

.left-panel p {
    max-width: 520px;
    opacity: 0.9;
}

/* RIGHT PANEL */
.right-panel {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f4f6f9;
}

/* LOGIN BOX */
.login-box {
    width: 400px;
}

/* CARD */
.card {
    border-radius: 8px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    border: none;
}

/* BUTTON */
.btn-primary {
    border-radius: 6px;
}

/* MOBILE */
@media (max-width: 768px) {
    .left-panel {
        display: none;
    }

    .login-box {
        width: 92%;
    }
}
</style>

</head>

<body>

<div class="split-container">

    <!-- LEFT -->
    <div class="left-panel">
        <i class="fas fa-university fa-5x"></i>

        <h1>Northern Iloilo State University</h1>
        <h3>Lemery Campus</h3>

        <p>
            Library Management System<br>
            Access academic resources, research materials, and institutional archives.
        </p>
    </div>

    <!-- RIGHT -->
    <div class="right-panel">

        <div class="login-box">

            <div class="login-logo text-center mb-3">
                <a href="#"><b>NISU</b> LMS</a>
            </div>

            <div class="card">
                <div class="card-body p-4">

                    <!-- TOGGLE BUTTONS -->
                    <div class="text-center mb-3">
                        <button type="button" id="showLogin" class="btn btn-sm btn-primary">
                            Login
                        </button>
                        <button type="button" id="showRegister" class="btn btn-sm btn-outline-primary">
                            Register
                        </button>
                    </div>

                    <p class="login-box-msg text-center mb-3">
                        Welcome to NISU Library System
                    </p>

                    <!-- LOGIN FORM -->
                    <div id="loginFormSection">

                        <form id="loginForm" action="/login" method="POST">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-7">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember" name="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">
                                Sign In
                            </button>
                        </form>

                    </div>

                    <!-- REGISTER FORM -->
                    <div id="registerFormSection" style="display:none;">

                        <form action="/register" method="POST">
                            @csrf

                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-block">
                                Create Account
                            </button>
                        </form>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<script src="{{ asset('template/adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/adminlte/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('template/adminlte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<script>
$(document).ready(function () {

    $('#showLogin').click(function () {
        $('#loginFormSection').show();
        $('#registerFormSection').hide();

        $('#showLogin').addClass('btn-primary').removeClass('btn-outline-primary');
        $('#showRegister').addClass('btn-outline-primary').removeClass('btn-success');
    });

    $('#showRegister').click(function () {
        $('#loginFormSection').hide();
        $('#registerFormSection').show();

        $('#showRegister').removeClass('btn-outline-primary').addClass('btn-success');
        $('#showLogin').removeClass('btn-primary').addClass('btn-outline-primary');
    });

    $('#loginForm').on('submit', function () {
        $('#btnLogin').prop('disabled', true);
    });

});
</script>

</body>
</html>