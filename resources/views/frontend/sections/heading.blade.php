<header class="header">
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <a class="site-logo site-title" href="{{ route('home') }}"><img src="{{getImage(imagePath()['logoIcon']['path'] .'/logo.png')}}" alt="site-logo"></a>
          <div class="collapse navbar-collapse mt-lg-0 mt-3" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu m-auto">
              <li><a href="{{ route('home') }}">@lang('Home')</a></li>
            <li><a href="{{ route('contact') }}">@lang('Contact')</a></li>
            @if(!Auth::user())
              <li><a href="{{ route('register') }}">@lang('Registration')</a></li>
            @endif
            </ul>
            <div class="nav-right">
            @if(Auth::user())
                <a href="{{ route('user.home') }}" class="header-login-btn"><i class="las la-user-circle"></i> @lang('DASHBOARD')</a>
            @else
                <a href="{{ route('login') }}" class="header-login-btn"><i class="las la-user-circle"></i> @lang('LOGIN')</a>
            @endif
            </div>
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>