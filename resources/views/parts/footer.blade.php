<footer class="footer">
  <div class="footer__wrapper container-small">
    <div class="footer__title">OkuOku</div>
    <div class="footer__lists">
      <ul class="footer__list footer__list-login">
        <li class="footer__list-item"><a href="#" class="footer__list-link">@if (Route::has('login'))

            @auth
            <a href="{{ url('/home') }}"
              class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
            <a href="{{ route('login') }}"
              class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
              in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
              class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
            @endif</a></li>
      </ul>
      <ul class="footer__list footer__list-second">
        <li class="footer__list-item"><a href="#" class="footer__list-link footer__bold">Работа в Бурятии</a></li>
      </ul>
      <ul class="footer__list footer__list-third">
        <li class="footer__list-item"><a href="#" class="footer__list-link">О компаниии</a></li>
      </ul>
      <ul class="footer__list footer__list-contacts">
        <li class="footer__list-item">
          <span class="footer__text">Служба поддержки:</span>
          <a href="tel:+88003334545" class="footer__text footer__bold">8 800 555 66 45</a>
        </li>
        <li class="footer__list-item">
          <span class="footer__text">Будни: с 6 до 22</span>
          <span class="footer__text">Выходные: с 8 до 22</span>
        </li>
      </ul>
    </div>
    <div class="footer__information">
      <img src="images/pegi.jpg" alt="" class="footer__img">
      <span class="footer__information-text">d.</span>
    </div>
    <div class="footer__copyright">OKUOKU.RU, 2006-2024</div>
    <div class="footer__information">
      <span class="footer__information-text"> b <span class="footer__bold">a</span> .</span>
    </div>
  </div>
</footer>