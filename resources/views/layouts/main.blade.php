<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Sidebar -->

<input type="checkbox" id="nav-toggle">
<div class="sidebar">
  <div class="logo-area">
      <a href="{{ url('/') }}">
        <img src="https://raw.githubusercontent.com/evansmbithi/ushindi/Maestro/img/ushindi_logo.svg">
      </a>
    
  </div>

  <div class="menu">
    <ul>
      <li>
        <a href="/home" class="{{ 'home' == request()->path() ? 'active' : '' }}">
          <span class="las la-home"></span> <span>Home</span>
        </a>
      </li>
      <li>
        <a href="/save" class="{{ 'save' == request()->path() ? 'active' : '' }}">
          <span class="las la-wallet"></span> <span>Savings</span>
        </a>
      </li>
      <li>
        <a href="/loans">
          <span class="las la-credit-card"></span> <span>Loans</span>
        </a>
      </li>
      <li>
        <a href="/dividends">
          <span class="las la-money-bill-alt"></span> <span>Dividends</span>
        </a>
      </li>
    </ul>

    <a href="#" class="setting">
      <span class="las la-cog"></span> <span>Settings</span>
    </a>
  </div>
</div>

<!-- Main content -->
<div class="main-content">
  <!--  Header -->
  <header>
    <h2>
      <label for="nav-toggle">
        <span class="las la-bars"></span>
      </label>
      Home
    </h2>

    <div class="search-wrapper">
      <span class="las la-search"></span>
      <input type="search" placeholder="Search here" />
    </div>

    <div class="header-end">
      <div class="user-wrapper">
        <a href="#">
          <span class="las la-bell"></span>
          Notifications
        </a>
      </div>

      <div class="user-wrapper">
        <a href="#">
          <img src="https://images.unsplash.com/photo-1630612008091-d8e68e54fb72?ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDI2fHRvd0paRnNrcEdnfHxlbnwwfHx8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" width="40px" height="40px" alt="">
          <span>
            <a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
            
            <!--         <h4>Evans Mbithi</h4>
            <small>admin</small> -->
          </span>
        </a>
      </div>
    </div>
  </header>

        <main>
          <div class="greetings">
            <div>
              <h3>Welcome, Evans</h3> <br>
              <span>Balance: Ksh 10,000</span>
            </div>
      
            <div>
              <h3>Dividends Earned:</h3> <br>
              <span>Ksh 0.00</span>
            </div>
          </div>

            @yield('content')
        </main>
    </div>

    <script>
        $(".menu a").on("click", function() {
          $(".menu a").removeClass("active");
          $(this).addClass("active");
        });
        
      </script>
</body>
</html>
