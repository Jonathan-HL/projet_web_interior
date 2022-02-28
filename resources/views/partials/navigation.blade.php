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
            </ul>
            {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
          </nav><!-- #nav-menu-container -->
        </div>
    </div>
  </header><!-- #header -->
