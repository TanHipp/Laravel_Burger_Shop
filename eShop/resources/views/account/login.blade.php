<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $attributes['title'] ?? 'Hoc Laravel' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+QAEizJcleaC94VPvCcGNAk1uSsd7Ss18FU8GhW3WuNEFkN" crossorigin="anonymous">

    <!-- Add Font Awesome CSS link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/account/register.css') }}">
    {{ $css ?? '' }}

</head>


<body>
    @include('includes/admin-nav')

    <div class="w3-container">
        @if (!empty(session('success_msg')))
            <div class="mt-2 alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success_msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (!empty(session('errors_msg')))
            <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('errors_msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="{{ route('account.save') }}" method="post">
                    @csrf
                    <h1 class="h1-dk">Đăng Kí Tài Khoản</h1>
                    <div class="social-container">
                        <a href="#" class="social">
                            <div class="icon-wrapper">
                                <i class="fab fa-facebook"></i>
                            </div>
                        </a>
                        <a href="#" class="social">
                            <div class="icon-wrapper">
                                <i class="fab fa-google"></i>
                            </div>
                        </a>
                        <a href="#" class="social">
                            <div class="icon-wrapper">
                                <i class="fab fa-linkedin"></i>
                            </div>
                        </a>
                    </div>
                    <span>hoặc sử dụng email của bạn để đăng ký</span>

                    <x-app-input type="text" placeholder="name" name="name" required />
                    <i class="icon-common fas fa-user"></i>

                    <x-app-input type="email" placeholder="email" name="email" required />
                    <i class="icon-common far fa-envelope"></i>

                    <x-app-input type="password" placeholder="password" name="password" required />
                    <i class="icon-common fas fa-lock"></i>

                    <x-app-input type="password" placeholder="cf password" name="cf_password" required />
                    <i class="icon-common fas fa-key"></i>

                    <button class="btn-dk" type="submit">Đăng kí</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="{{ route('auth') }}" method="post">
                    @csrf
                    <h1 class="bt-dn">Đăng nhập</h1>
                    <div class="social-container">
                        <a href="#" class="social">
                            <div class="icon-wrapper">
                                <i class="fab fa-facebook"></i>
                            </div>
                        </a>
                        <a href="#" class="social">
                            <div class="icon-wrapper">
                                <i class="fab fa-google"></i>
                            </div>
                        </a>
                        <a href="#" class="social">
                            <div class="icon-wrapper">
                                <i class="fab fa-linkedin"></i>
                            </div>
                        </a>
                    </div>
                    <span>hoặc sử dụng tài khoản của bạn</span>

                    <x-app-input type="text" placeholder="name" name="name" required />
                    <i class="icon-common fas fa-user"></i>


                    <x-app-input type="password" placeholder="password" name="password" required />
                    <i class="icon-common fas fa-lock"></i>

                    <a href="#">Forgot your password?</a>
                    <button type="submit">Đăng nhập</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <br>
                        <h1>Welcome Back!</h1>
                        <p>Nếu bạn đã có tài khoản thì ấn vào đây để đăng nhập nhé</p>
                        <button class="ghost" id="signIn" onClick="signin()">Đằng nhập ngay</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <br>
                        <h1>Hello, Friend!</h1>
                        <p>Nếu bạn chưa có tài khoản thì ấn vào đây để đăng kí nhé!</p>
                        <button class="ghost" id="signUp" onClick="signup()">Đăng kí ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function signin() {
            container.classList.remove('right-panel-active');
        }

        function signup() {
            container.classList.add('right-panel-active');
        }
    </script>
    <!-- Add Bootstrap and Font Awesome JS links -->
    <script src="https://cdn.jsdelivr.net/npm/popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-0mSbJ4D/F4FT6uPCG/2fpxGu3ROmm+4Sc5xKVd5lQ/CiNz8EAGj0R0fp/hL0Gon2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-ufM0YFtbFWqvmIE10b8zm5n2/DUMHD2JgGJF5Vh8b1lSNK/SjzVvRuJt0IC7I2an" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha384-Ff9k0v5N3p0LL0jN3FdUgySW1QKHD9GA3vcRIO+9toHmTDIIT2R16yIfCkRCQV1m" crossorigin="anonymous">
    </script>


    {{ $js ?? '' }}


</body>

</html>
