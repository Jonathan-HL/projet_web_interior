<header id="header" id="home">
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="index.html"><img src={{ asset("img/logo.png") }} alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li class="menu-active"><a href={{ route("home") }}>Home</a></li>
              <li><a href={{ route("services") }}>Services</a></li>
              <li><a href={{ route("projects") }}>Projects</a></li>
              <li><a href={{ route("blog") }}>Blog</a></li>
              <li><a href={{ route("contact") }}>Contact</a></li>
              @if (Route::has('login'))

                @auth
                <li>

                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                </li>
                @else
                <li>

                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                </li>

                @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" class=" text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                </li>
                @endif
                @endauth
                @endif
            </ul>
          </nav><!-- #nav-menu-container -->
        </div>
    </div>
  </header><!-- #header -->
