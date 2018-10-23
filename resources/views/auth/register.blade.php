<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create an Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>

<body>
    <div class="main-reg">
        <h3>Register in FarmerConnect</h3>
    </div>

    <div class="box-reg">
        @if($errors->any())
                <p>Check the following errors:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

        <form action="" method="post">
            <div class="container">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
          
              <label for="first-name">
                  <b>Full Name</b>
              <input type="text" placeholder="Enter Full Name" name="name" value="{{old('name')}}">
            </label>
              
            <label for="surname">
                <b>Email address</b>
                <input type="text" placeholder="Enter Email address" name="email" value="{{old('email')}}">
            </label>

            <label for="password">
                <b>Password</b>
                <input type="password" placeholder="Password" name="password">
            </label>

            <label for="surname">
                <b>Phone Number</b>
                <input type="text" placeholder="Enter Phone Number" name="mobile" value="{{old('mobile')}}">
              </label>

            <label for="farmer-paticipant">Participant Status
                <select name="participant-status" class="form-control">
                    <option value="">Please Specify</option>
                    <option value="consumer">Consumer</option>
                    <option value="farmer">Farmer</option>
                </select>
            </label>
            <hr>
            {{csrf_field()}}
          
              <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
              <button type="submit" class="registerbtn">Register</button>
            </div>
          
            <div class="container signin">
              <p>Already have an account? <a href="{{route('login')}}">Sign in</a>.</p>
            </div>
          </form> 
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

            <script src="{asset('js/index.js')}}"></script>
</body>
</html>