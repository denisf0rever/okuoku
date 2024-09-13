<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Аналитика статей</title>
  @include('dashboard.settings')
</head>

<body>
  @include('dashboard.parts.header')
  <div class="wrapper">
    <div class="wrapper__wrapper container">
      @include('dashboard.parts.sidebar')

      <main class="wrapper__main main">
        <div class="main__wrapper">
          <h1 class="main__title">Аналитика статей</h1>
          <section class="main__info info">
            <div class="info__wrapper">
              <div class="info__element">
                <h3 class="info__title">Информация о статьях</h3>
                <div class="info__text-wrapper">
                  <div class="info__data">
                    <span class="info__text"></span>
                  </div>
                  <div class="info__data">
                    <span class="info__text"><strong>{{ $totalArticles }}</strong> всего статей на сайте</span>
                  </div>
                  <div class="info__data">
                    <span class="info__text"><strong>52 768 </strong> всего было просмотрено статей</span>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="main__pages pages">
            <div class="pages__wrapper">
              <h2 class="pages__title">Ключевые фразы</h2>
              <div class="pages__inner">
                <div class="pages__titles">
                  <span class="pages__title-id">ID</span>
                  <span class="pages__title-small-name" id="pages-title">Название</span>
                  <span class="pages__title-small-name">Ключевая фраза</span>
                  <span class="pages__title-number">Всего просмотров</span>
                  <span class="pages__title-number-big">Просмотров за последние 7 дней</span>
                  <span class="pages__title-status" id="pages-status">
                    <span>статус</span>
                  </span>
                  <span class="pages__title-options">Опции</span>
                </div>
                <ul class="pages__list" status-sort="asc">
                  @foreach ($articles as $article)
                  <li class="pages__item">
                    <span class="pages__views-id">{{ $article->id }}</span>
                    <a class="pages__small-name" href="{{ route('articles.item', $article->id)}}"
                      target="_blank"><span>{{ $article->h1 }}</span></a>
                    <span class="pages__small-name">
                      @isset ($article->keyword->key)
                      <a href="https://wordstat.yandex.ru/?region=all&view=table&words={{ $article->keyword->key }}"
                        target="_blank">{{ $article->keyword->key }}</a>
                      @endif</span>


                    @php
                    // Получение значений для views
                    $viewsNumber = $article->views;
                    $viewsNumberBig = $post_views->get($article->id)->views ?? 0;

                    // Проверка условия деления
                    $ratio = ($viewsNumber > 0) ? $viewsNumberBig / $viewsNumber : 0;
                    @endphp

                    <span class="pages__views-number">{{ $viewsNumber }}</span>
                    <span class="pages__views-number-big">{{ $viewsNumberBig }}</span>

                    <span class="pages__status">
                      @if ($ratio > 0.3)
                      <div class="pages__status-green" id="status" status-data="0"></div>
                      @elseif ($ratio > 0.2)
                      <div class="pages__status-yellow" id="status" status-data="1"></div>
                      @else
                      <div class="pages__status-red" id="status" status-data="2"></div>
                      @endif
                    </span>
                    <div class="pages__icons">
                      <div class="pages__icon">
                        @isset ($article->keyword->key)
                        <a href="{{ route('dashboard.analytics.specialization.edit', $article->id)}}" target="_blank">
                          <img src="/images/dashboard/edit.svg" alt="" class="pages__icon-img">
                        </a>
                        @else
                        <a href="{{ route('dashboard.analytics.phrase.add', $article->id)}}" target="_blank">
                          <img src="/images/dashboard/add.svg" alt="" class="pages__icon-img">
                        </a>
                        @endif
                      </div>
                      <div class="pages__icon">
                        <a href="{{ route('dashboard.analytics.phrase.destroy', $article->id) }}" id="delete-link">
                          <img src="/images/dashboard/del.svg" alt="" class="pages__icon-img">
                        </a>
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

    </div>
  </div>