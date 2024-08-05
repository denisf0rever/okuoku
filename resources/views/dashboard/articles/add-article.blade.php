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
              <form action="{{ route('dashboard.article.create-article') }}" method="post" class="form__inner-form" enctype="multipart/form-data">
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
                          <label class="form__label" for="title">Заголовок документа</label>
                          <input class="form__input @error('title')input-error @enderror" type="text" id="title" name="title">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="title">Заголовок статьи</label>
                          <input class="form__input @error('h1')input-error @enderror" type="text" id="h1" name="h1">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="subtitle">Подзаголовок</label>
                          <input class="form__input @error('subtitle')input-error @enderror" type="text" id="subtitle" name="subtitle">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="Meta-description">Метаописание</label>
                          <input class="form__input @error('metadescription')input-error @enderror" type="text" id="Meta-description" name="metadescription">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="Metakeys">Метаключи</label>
                          <input class="form__input @error('metakey')input-error @enderror" type="text" id="Metakeys" name="metakey">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="authorID">ID Автора</label>
                          <input class="form__input @error('author_id')input-error @enderror" type="text" id="author-id" name="author_id">
                        </li>
                        <li class="form__input-wrapper">
                          <label class="form__label" for="reading-time">Время прочтения</label>
                          <input class="form__input @error('reading-time')input-error @enderror" type="text" id="reading-time" name="reading-time">
                        </li>
                      </ul>
                      <label class="form__label-photo">
                        <img src="images/photo-camera.svg" alt="" class="form__input-photo-img">
                        <span class="form__input-photo-text">Загрузить фото</span>
                        <input class="form__input-photo @error('image')input-error @enderror" type="file" name="image" accept="image/*">
                      </label>
                    </div>
                    <div class="form__tab">placeholder</div>
                  </div>
                  <div class="form__status-wrapper">
                    <div class="form__select-wrapper">
                      <span class="form__status-title" for="status">Текущий статус</span>
                      <img src="images/expand-more.svg" alt="" class="form__status-arrow">
                      <div class="form__status-current-text">Выберите категорию</div>
                      <input class="form__status-current @error('category')input-error @enderror" name="category" type="text" value="0" readonly>
                      <ul id="status" class="form__status-select form__status-hide">
                        <li class="form__status-option" value="1">Категория</li>
                        <li class="form__status-option" value="2">Категория</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Краткое описание</div>
                  <textarea name="short_text @error('short_text')input-error @enderror" id="" class="form__textarea"></textarea>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Содержаните статьи</div>
                  <textarea name="content" id="" class="form__textarea @error('content')input-error @enderror"><ul class="article__content-list"><li class="article__content-item"></li></ul></textarea>
                </div>
                <div class="form__textarea-wrapper">
                  <div class="form__textarea-title">Полный текст</div>
                  <textarea name="full_text" id="" class="form__textarea"></textarea>
                  <input class="form__submit @error('full_text')input-error @enderror" type="submit"> </input>
                </div>
              </form>
            </div>
          </section>
        </div>
      </main>
    </div>
  </div>