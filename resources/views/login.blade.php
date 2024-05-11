<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<title>Авторизация</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		@vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
   
   <body>
   
   <div class="popup-form">
    <div class="popup-form__wrapper">
      <h2 class="popup-form__title">Войти</h2>
      <span class="popup-form__subtitle">Введите данные для авторизации.</span>
      <form action="{{ route('authenticate') }}" method="post" class="popup-form__form">
		@csrf
        <input type="text" id="infinity" name="username" class="popup-form__input" placeholder="Имя пользователя">
        <div class="popup-form__input-wrapper">
          <input type="password" id="password" name="password" class="popup-form__input popup-form__password"
            placeholder="Пароль от личного кабинета">
          <img src="images/eye-password-hide-svgrepo-com.svg" alt="" class="popup-form__password-img">
        </div>
        <input type="submit" class="popup-form__submit popup-form__submit-disabled" disa bled value="Далее">
      </form>
    </div>
  </div>

  </body>
</html>