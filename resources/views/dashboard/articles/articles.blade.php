<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Список статей</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')

  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Статьи</h1>
          <p><a href="{{ route('dashboard.article.add-article') }}">Добавить статью</a></p>
          <section class="main__info info">
            <div class="info__wrapper">
              <div class="info__element">
                <h3 class="info__title">Дубли заголовоков и описаний</h3>
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text"><strong>52 768 </strong>дублирующихся title</span>
                  </div>
                  <div class="info__data">
                    <span class="info__text"><strong>52 768 </strong>дублирующихся description</span>
                  </div>
                </div>
              </div>
              <div class="info__element">
                <h3 class="info__title">Дубли заголовоков и описаний</h3>
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text"><strong>52 768 </strong>дублирующихся title</span>
                  </div>
                  <div class="info__data">
                    <span class="info__text"><strong>52 768 </strong>дублирующихся description</span>
                  </div>
                </div>
              </div>
            </div>
          </section>


          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Заголовки страниц</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-name">Название</span>
                  <span class="pages__title-number">Просмотры</span>
                </div>
                <ul class="pages__list">
                  @foreach ($articles as $article)
                  <li class="pages__item">
                    <span class="pages__views-number">{{ $article->id }}</span>
                    <a href="{{ route('articles.item', $article->id)}}" target="_blank"><span
                        class="pages__name">{{ $article->title }}</span></a>
                    <span class="pages__views-number">{{ $article->views }}</span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.article.edit', $article->id)}}" target="_blank">
                          <img src="../../../images/dashboard/pencil.svg" alt="" class="pages__icon-img">
                        </a>
                        <!--<img src="images/pencil.svg" alt="" class="pages__icon-img">-->
                      </div>
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.article.destroy', $article->id) }}">
                          <img src="../../../images/dashboard/rubbish-bin.svg" alt="" class="pages__icon-img">
                        </a>
                        <!--<img src="images/rubbish-bin.svg" alt="" class="pages__icon-img">-->
                      </div>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </section>
        </div>
      </main>

      @if (session('post_added'))
      <div class="toast">
        <div class="toast__container" id="toast">
          <div class="toast__item">
            {{ session('post_added') }}
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>