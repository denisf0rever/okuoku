<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<title>Добавление поста</title>
		@include('dashboard.settings')
    </head>
   
   <body>
   
   @include('dashboard.parts.header')
   
   <div class="wrapper">
    <div class="wrapper__wrapper container">
	@include('dashboard.parts.sidebar')
	   
      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Добавить статью</h1>
          <section class="main__form form">
            <div class="form__wrapper">
              <form action="POST" class="form__inner-form">
                <div class="form__tabs-buttons">
                  <div class="form__tab-button form__tab-button-active">Основные</div>
                  <div class="form__tab-button">Дополнительные</div>
                </div>
                <div class="form__inner">
                  <div class="form__tabs">
                    <div class="form__tab form__tab-active">
                      <ul class="form__inputs">
                        <li class="form__input-wrapper">
                          <label class="form__label" for="title">Заголовок</label>
                          <input class="form__input" type="text" id="title" name="title">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="subtitle">Подзаголовок</label>
                          <input class="form__input" type="text" id="subtitle" name="subtitle">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="Meta-description">Метаописание</label>
                          <input class="form__input" type="text" id="Meta-description" name="Meta-description">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="Metakeys">Метаключи</label>
                          <input class="form__input" type="text" id="Metakeys" name="Metakeys">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="authorID">ID Автора</label>
                          <input class="form__input" type="text" id="authorID" name="authorID">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="reading-time">Время прочтения</label>
                          <input class="form__input" type="text" id="reading-time" name="reading-time">
                        </li>
                      </ul>
                      <label class="form__label-photo">
                        <img src="images/photo-camera.svg" alt="" class="form__input-photo-img">
                        <span class="form__input-photo-text">Загрузить фото</span>
                        <input class="form__input-photo" type="file" accept="image/*">
                      </label>
                    </div>
                    <div class="form__tab">placeholder</div>
                  </div>
                  <div class="form__status-wrapper">
                    <div class="form__select-wrapper">
                      <span class="form__status-title" for="status">Текущий статус</span>
                      <img src="images/expand-more.svg" alt="" class="form__status-arrow">
                      <input class="form__status-current" name="select" type="text" value="Работает" readonly>
                      <ul id="status" class="form__status-select form__status-hide">
                        <li class="form__status-option" value="Работает">Работает</li>
                        <li class="form__status-option" value="saab">Больше не работает</li>
                        <li class="form__status-option" value="mercedes">Временно не работает</li>
                        <li class="form__status-option" value="volvo">Работает2</li>
                        <li class="form__status-option" value="saab">Больше не работает</li>
                        <li class="form__status-option" value="mercedes">Временно не работает</li>
                        <li class="form__status-option" value="volvo">Работает3</li>
                        <li class="form__status-option" value="saab">Больше не работает</li>
                        <li class="form__status-option" value="mercedes">Временно не работает</li>
                        <li class="form__status-option" value="volvo">Работает4</li>
                        <li class="form__status-option" value="saab">Больше не работает</li>
                        <li class="form__status-option" value="mercedes">Временно не работает</li>
                        <li class="form__status-option" value="volvo">Работает5</li>
                        <li class="form__status-option" value="saab">Больше не работает</li>
                        <li class="form__status-option" value="mercedes">Временно не работает</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Запрос</div>
                  <textarea name="" id="" class="form__textarea"></textarea>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Запрос</div>
                  <textarea name="" id="" class="form__textarea"></textarea>
                  <input class="form__submit" type="submit"> </input>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>