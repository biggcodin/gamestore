<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Gaming Login Page Admin</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Press Start 2P', cursive;
            background: #000 url('images/background/background.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .login-container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .login-card {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            color: #fff;
            width: 100%;
            max-width: 400px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .login-card h2 {
            margin-bottom: 20px;
            font-size: 1em;
            position: relative;
            z-index: 1;
        }

        .login-card .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: #fff;
            margin-bottom: 15px;
            position: relative;
            z-index: 1;
        }

        .login-card .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: none;
            color: #fff;
        }

        .login-card .btn-primary {
            background: #8726b3;
            border: none;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            transition: background 0.3s;
            position: relative;
            z-index: 1;
        }

        .login-card .btn-primary:hover {
            background: #e64a19;
        }

        .login-card .btn-primary:focus {
            box-shadow: none;
        }

        .login-card .forgot-password {
            color: #8726b3;
            text-decoration: none;
            position: relative;
            z-index: 1;
        }

        .login-card .forgot-password:hover {
            text-decoration: underline;
        }

        .login-card .social-login {
            margin-top: 20px;
            position: relative;
            z-index: 1;
        }

        .login-card .social-login a {
            color: #fff;
            margin: 0 10px;
            font-size: 1.5em;
            transition: color 0.3s;
        }

        .login-card .social-login a:hover {
            color: #8726b3;
        }

        .login-card .animated-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
            animation: moveBackground 10s linear infinite;
        }

        @keyframes moveBackground {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 100% 100%;
            }
        }

        .login-card .icon {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 5em;
            color: #8726b3;
            z-index: 1;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-30px);
            }

            60% {
                transform: translateY(-15px);
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="animated-background"></div>
            <i class="fas fa-gamepad icon"></i>
            <div class = 'col-12'>

                @if (Session::has('success'))
                    <div class='alert alert-success'>{{ Session::get('success') }}</div>
                @endif

                @if (Session::has('error'))
                    <div class='alert alert-danger'>{{ Session::get('error') }}</div>
                @endif

                <div class='mb-5'>
                    <h2>Admin Login</h2>
                </div>


            </div>
            <form method="post" action="{{ route('admin.authenticate') }}">
                @csrf
                <div class="form-group">
                    <input type="text" id="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                    <!--error message-->
                    @error('email')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror

                </div>

                <div class="form-group">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" name="password">

                    <!--error message-->

                    @error('password')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror

                </div>



                <button type="submit" class="btn btn-primary">Login</button>



            </form>
            <div class="social-login">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google"></i></a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
