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
              <form action="{{ route('dashboard.posts.create-post') }}" method="post" class="form__inner-form">
                @csrf
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
                          <input class="form__input" type="text" id="Meta-description" name="metadescription">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="Metakeys">Метаключи</label>
                          <input class="form__input" type="text" id="Metakeys" name="metakeys">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="authorID">ID Автора</label>
                          <input class="form__input" type="text" id="author-id" name="author_id">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="reading-time">Время прочтения</label>
                          <input class="form__input" type="text" id="reading-time" name="reading-time" readonly>
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
                      <div class="form__status-current-text">Выберите категорию</div>
                      <input class="form__status-current" name="category" type="text" value="0" readonly>
                      <ul id="status" class="form__status-select form__status-hide">
                        <li class="form__status-option" value="1">Категория</li>
                        <li class="form__status-option" value="2">Категория</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Краткое описание</div>
                  <textarea name="short-text" id="" class="form__textarea"></textarea>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Полный текст</div>
                  <textarea name="full-text" id="full-text" class="form__textarea"></textarea>
                  <input class="form__submit" type="submit"> </input>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>