<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in to FarmerConnect</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>
    <div class="login-page">
        <div class="form">
            @if($errors->any())
                <p>Check the following errors:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method='post' action='' class="registered-user">
                {{csrf_field()}}
                <input type="text" name="email" placeholder="E-Mail Address" />
                <input type="password" name="password" placeholder="Password" />
                <button>Login</button>
                <p class="message">Not registered?
                    <a href="{{route('register')}}">Create an account</a>
                </p>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{asset('index.js')}}"></script>
</body>

</html>