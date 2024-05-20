<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<title>Регистрация</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		@include('parts.settings')
    </head>
   
   <body>
   
   <div class="popup-form">
    <div class="popup-form__wrapper">
      <h2 class="popup-form__title">Регистрация</h2>
      <span class="popup-form__subtitle">Введите данные для регистрации</span>
      <form action="{{ route('register.post') }}" method="post" class="popup-form__form">
		@csrf
        <input type="text" id="username" name="username" class="popup-form__input" placeholder="Логин">
        <input type="text" id="name" name="name" class="popup-form__input" placeholder="Имя">
        <input type="text" id="last_name" name="last_name" class="popup-form__input" placeholder="Фамилия">
        <input type="text" id="middle_name" name="middle_name" class="popup-form__input" placeholder="Отчество">
		<input type="text" id="email" name="email" class="popup-form__input" placeholder="Ваша почта">
        <div class="popup-form__input-wrapper">
          <input type="password" id="password" name="password" class="popup-form__input popup-form__password"
            placeholder="Пароль от личного кабинета">
          <img src="images/eye-password-hide-svgrepo-com.svg" alt="" class="popup-form__password-img">
        </div>
		 
        <input type="submit" class="popup-form__submit popup-form__submit-disabled" disabled value="Зарегистрироваться">
      </form>
    </div>
  </div>

  </body>
</html>