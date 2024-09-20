<header class="header">
    <div class="header__wrapper container">
      <div class="header__left">
        <div class="header__menu-button">
          <span class="header__menu-button-img" style="fill: #fff;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M21 18a1 1 0 00-1-1H4a1 1 0 100 2h16a1 1 0 001-1zm-7-6a1 1 0 00-1-1H4a1 1 0 100 2h9a1 1 0 001-1zm6-5H4a1 1 0 110-2h16a1 1 0 110 2z" clip-rule="evenodd"></path></svg></span>
        </div>
        <a href="/" class="header__logo-link" target="_blank">
          <div class="header__logo">
            <img src="/images/public/common/logo-white.svg" alt="" class="header__logo-img">
          </div>
        </a>
      </div>
      <div class="header__buttons">
        <div class="header__button-icon">
          <img src="/storage/avatar/webp/{{ Auth::user()->webp_avatar }}" alt="" class="header__button-img">
        </div>
        <div class="header__button"><a href="{{ route('logout') }}">{{ Auth::user()->name }} Выйти</a></div>
      </div>
    </div>
  </header>