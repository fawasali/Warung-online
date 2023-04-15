<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ALIUAS | Dashboard</title>

  <!--fontawesome-->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  
</head>

<body>

<!--Navbar-->
<nav class="navbar">
<div class="content">
  <div class="logo">
    <a href="#">WarungOnline</a>
  </div>
  <ul class="menu-list">
    <div class="icon cancel-btn">
      <i class="fas fa-times"></i>
    </div>
    <li><a href="home" class="bg-dark">Home</a></li>
    <li><a href="CRUD">Data Pelanggan</a></li>
    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
  </ul>
  <div class="icon menu-btn">
    <i class="fas fa-bars"></i>
  </div>
</div>
</nav>

@yield('content')

@include('layouts.script')





<!--footer-->
<footer>
    <div class="container">
        <div class="sec aboutus" id="about">
            <h2>About Us</h2>
            <p>Warung Online adalah tempat dijual
            <br>makanan enak atau makanan apapun
            <br>semua dijual disini secara online
            <br>dan harga disini juga cukup murah
            <br>jadi tunggu apalagi buruan dibeli 

            </p>
            <ul class="sci">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="quicklink">
            <h2>Quick Link</h2>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Terms & Consitions</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="contact" id="kontak">
            <h2>Contact</h2>
            <ul class="info">
                <li>
                    <span><i class="fas fa-map-pin"></i></span>
                    <span>Kertosono <br>Parijatah Kulon,<br>Indonesia</span>
                </li>
                <li>
                    <span><i class="fas fa-phone"></i></span>
                    <p><a href="+625253010239">+625253010239</a></p>
                </li>
                <li>
                    <span><i class="fas fa-envelope"></i></span>
                    <p><a href="mailto:alisabetfawas@gmail.com">alisabetfawas@gmail.com</a></p>
                </li>
            </ul>
        </div>
        
    </div>
</footer>
<div class="copyrightText">
    <p>Copyright © Fawasali 2021 All Rights Reserved</p>
</div>

</body>
</html>