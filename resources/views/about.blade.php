<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="aboutUs.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
</head>

<body>



  <div class="home-container">

    <header>

      <div class="navigate">

        <div class="f-connect-logo">

          <ul id="logo">

            <img src="{{asset('/images/f-connect-logo.png')}}" alt="">

          </ul>

          <div>

            <ul id="form">

              <form action="search">

                <input type="search" id="searchInput" placeholder="Search here...">

              </form>

            </ul>

          </div>

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

    <div class="container">

      <div>
        <div class="header-image-div">
          <div class="h1-div">
            <h1 id="h1-header-text">About Us</h1>
          </div>
            <!-- <img src="./images/Agric2.jpeg" alt="" class="header-image"> -->
        </div>

        <div class="h2-div">
          <h2 id="h2-header-text">Mission</h2>
          <p class="Mission-pTag">FarmerConnect is a Platform that connects end-users being the consumers to the farmers.
            <br> It gives consumers greater access to meeting farmers for their produce.</p>
        </div>
      </div>

      <div class="team-div">
        <h1 id="team">MEET THE TEAM</h1>

        <div class="team-container">
          <div class="card">
            <div class="img_wrp">
              <img src="{{asset('images/mike.jpg')}}" alt="" class="img">
            </div>

            <div class="container">
              <p class="team-members">Michael Chilaka</p>
              <p>CEO/Co-Founder</p>
              <p>Software Developer</p>
            </div>
          </div>

          <div class="card">
            <div class="img_wrp">
              <img src="{{asset('images/BeautyPlus1.jpg')}}" alt="" class="img">
            </div>

            <div class="container">
              <p class="team-members">Okeke Mac-anthony</p>
              <p>CTO/Co-Founder</p>
              <p>Software Developer</p>
            </div>
          </div>

          <div class="card">
            <div class="img_wrp">
              <img src="{{asset('images/BeautyPlus_20180826192516_save.jpg')}}" alt="" class="img">

            </div>
            <div class="container">
              <p class="team-members">Lawal Oladipupo</p>
              <p>CTO/Co-Founder</p>
              <p>Software Developer</p>
            </div>
          </div>

        </div>



      </div>

    </div>

    <!-- Footer Section  -->

    <div class="footer">

      <div class="row">

        <div class="box-div box-1">

          <h3>ABA OFFICE</h3>

          <p>No. 44b Aba-Owerri Road,

            <br> Aba, Abia State</p>

        </div>

        <div class="box-div box-2">

          <h3>PORT HARCOURT OFFICE</h3>

          <p>No. 154 Niger Street, Port Harcourt

            <br>Rivers State</p>

        </div>

        <div class="box-div box-3">

          <h3>CONTACT US</h3>

          <p>08065429950</p>

          <p>08149108989</p>

        </div>

        <div class="box-div box-4">

          <h3>SOCIAL</h3>

          <p>Follow Us</p>

        </div>

      </div>

    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>