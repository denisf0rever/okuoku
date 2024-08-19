<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Добавление пользователя</title>
  @include('dashboard.settings')
</head>

<body>

  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Добавить пользователя</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="{{ route('dashboard.user.create-user') }}" method="post" class="form__inner-form">
                @csrf
				
				@foreach($errors->all() as $error)
				{{ $error }} <br />
				@endforeach
                <div class="form__tabs-buttons">
                  <div class="form__tab-button form__tab-button-active">Основные</div>
                  <div class="form__tab-button">Дополнительные</div>
                </div>
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="email">Почта</label>
                          <input class="form__input @error('email')input-error @enderror" type="text" id="email" name="email">
                        </li>
						<li class="form__input-wrapper">
                          <label class="form__label" for="name">Логин</label>
                          <input class="form__input @error('username')input-error @enderror" type="text" id="username" name="username">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="password">Пароль</label>
                          <input class="form__input @error('password')input-error @enderror" type="text" id="password" name="password">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="name">Имя</label>
                          <input class="form__input @error('name')input-error @enderror" type="text" id="name" name="name">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="last_name">Фамилия</label>
                          <input class="form__input @error('last_name')input-error @enderror" type="text" id="last_name" name="last_name">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="middle_name">Отчество</label>
                          <input class="form__input @error('middle_name')input-error @enderror" type="text" id="middle_name" name="middle_name">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="city">Откуда вы?</label>
                          <input class="form__input @error('city')input-error @enderror" type="text" id="city" name="city">
                        </li>
                      </ul>
					  <label class="form__label-photo">
                        <img src="images/photo-camera.svg" alt="" class="form__input-photo-img">
                        <span class="form__input-photo-text">Загрузить фото</span>
                        <input class="form__input-photo @error('avatar')input-error @enderror" type="file" name="avatar"
                          accept="image/*">
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Описание</div>
                  <textarea name="description" id="description" class="form__textarea @error('description')input-error @enderror"></textarea>
                  <input class="form__submit" type="submit"> </input>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>