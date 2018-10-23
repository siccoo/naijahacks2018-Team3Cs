<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FarmerConnect</title>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>
        <header>
            <div class="f-connect-logo">
                <img src="{{asset('images/f-connect-logo.png')}}" alt="">
            </div>
                <nav>
                    <ul id="nav_bar">
                        <li class="" id="">
                            <a href="{{route('index')}}">Home</a>
                        </li>
                        <li class="" id="">
                            <a href="{{route('about')}}">About</a>
                        </li>
                        <li id="" class="">
                            <a href="#">Careers</a>
                        </li>
                        <li class="" id="">
                            <a href="{{route('register')}}">Registration</a>
                        </li>
                        <li class="" id="">
                            <a href="f-connect.html">F-Connect</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Collection of images displayed -->
        <div class="f-images">
            <!-- Sliding images displayed here -->
        </div>

        <!--  -->
        <div class="farmer-des">
            <h3>FarmerConnect is a platform that connects the end users (consumer) and the farmers
                <br>with the application standing as the middle man.</h3>
        </div>
    </div>

    <!-- Sign Up and Get Started buttons -->
    <div class="main-container">
        <div class="sign-container">
            <h5>Just click here to Register</h5>
            <div class="buttons">
            <a id="btn" class='btn1' href="{{route('register')}}">Sign up</a>
        </div>
        </div>
        <div class="start-container">
            <h5>Connect to the farmers on FarmerConnect</h5>
            <a id="btn" class='btn3' href="{{route('login')}}">Sign in</a>
        </div>
    </div>
    <!-- Footer Section  -->
    <div class="footer">
        <div class="row">
            <div class="box-1">
                <h3>ABA OFFICE</h3>
                <p>No. 44b Aba-Owerri Road,
                    <br> Aba, Abia State</p>
            </div>
            <div class="box-2">
                <h3>PORT HARCOURT OFFICE</h3>
                <p>No. 154 Niger Street, Port Harcourt
                    <br>Rivers State</p>
            </div>
            <div class="box-3">
                <h3>CONTACT US</h3>
                <p>08065429950</p>
                <p>08149108989</p>
            </div>
            <div class="box-4">
                <h3>SOCIAL</h3>
                <p>Follow Us</p>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>