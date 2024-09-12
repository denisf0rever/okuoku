@extends('app')
@section('title', 'Консультация офтальмолога онлайн: круглосуточно по телефону и в чате')
@section('description', '')
@section('keywords', '')
@section('canonical', '')

@section('content')
@include('parts.sidebar__mainpage')
<div class="main__field">
  <section class="main__banner banner">
    <div class="banner__wrapper">
      <div class="banner__titles">
        <h1 class="banner__title">Консультация офтальмолога онлайн</h1>
        <span class="banner__subtitle">детский, взрослый офтальмолог</span>
        <span class="banner__subtitle">круглосуточно в чате либо телефону</span>
      </div>
      <div class="banner__buttons">
        <a href="{{ route('consult.form') }}" class="banner__join-btn banner__btn">Задать вопрос</a>
        <div class="banner__enter-btn banner__btn">Войти</div>
      </div>
      <img src="images/placeholder.png" alt="" class="banner__img">
      <div class="banner__sponsors">
        <span class="banner__sponsors-title">Врачи офтальмологи</span>
        <div class="banner__sponsors-list">
          <a href="#" class="banner__sponsor-link">
            <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
          </a>
          <a href="#" class="banner__sponsor-link">
            <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
          </a>
          <a href="#" class="banner__sponsor-link">
            <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
          </a>
          <a href="#" class="banner__sponsor-link">
            <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
          </a>
          <a href="#" class="banner__sponsor-link">
            <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
          </a>
          <a href="#" class="banner__sponsor-link">
            <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
          </a>
          <a href="#" class="banner__sponsor-link">
            <img src="images/avatar.jpg" alt="" class="banner__sponsor-avatar">
          </a>
        </div>
      </div>
    </div>
  </section>


  @include('mainpage.stories.block')
  @include('mainpage.news.block')
  <section class="main__companies companies">
    <div class="companies__wrapper">
      <h2 class="companies__title">Компании</h2>
      <span class="companies__number">40</span>
      <ul class="companies__list">
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Тинькофф</span>
          </a>
        </li>
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Авито </span>
          </a>
        </li>
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Тинькофф</span>
          </a>
        </li>
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Авито </span>
          </a>
        </li>
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Тинькофф</span>
          </a>
        </li>
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Авито </span>
          </a>
        </li>
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Тинькофф</span>
          </a>
        </li>
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Авито </span>
          </a>
        </li>
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Тинькофф</span>
          </a>
        </li>
        <li class="companies__item">
          <a href="#" class="companies__link">
            <img src="images/placeholder.png" alt="" class="companies__img">
            <span class="companies__name">Авито </span>
          </a>
        </li>
      </ul>
      <span class="companies__show-all">Показать все</span>
    </div>
  </section>

  <section class="main__themes themes">
    <div class="themes__wrapper">
      <h2 class="themes__title">Темы справочных материалов</h2>
      <ul class="themes__list">
        <li class="themes__item">
          <span class="themes__letter">А</span>
          <ul class="themes__sublist">
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит Автокредит</a>
            </li>
          </ul>
        </li>
        <li class="themes__item">
          <span class="themes__letter">А</span>
          <ul class="themes__sublist">
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит Автокредит</a>
            </li>
          </ul>
        </li>
        <li class="themes__item">
          <span class="themes__letter">А</span>
          <ul class="themes__sublist">
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит Автокредит</a>
            </li>
          </ul>
        </li>
        <li class="themes__item">
          <span class="themes__letter">А</span>
          <ul class="themes__sublist">
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит Автокредит</a>
            </li>
          </ul>
        </li>
        <li class="themes__item">
          <span class="themes__letter">А</span>
          <ul class="themes__sublist">
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит</a>
            </li>
            <li class="themes__subitem">
              <a href="/" class="themes__list">Автокредит Автокредит Автокредит</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </section>

  <section class="main__question-slider question-slider">
    <div class="question-slider__arrow-prev">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M12.0303 18.5303C12.3232 18.2374 12.3232 17.7626 12.0303 17.4697L7.31066 12.75L18 12.75C18.4142 12.75 18.75 12.4142 18.75 12C18.75 11.5858 18.4142 11.25 18 11.25L7.31066 11.25L12.0303 6.53033C12.3232 6.23744 12.3232 5.76256 12.0303 5.46967C11.7374 5.17678 11.2626 5.17678 10.9697 5.46967L4.96967 11.4697C4.67678 11.7626 4.67678 12.2374 4.96967 12.5303L10.9697 18.5303C11.2626 18.8232 11.7374 18.8232 12.0303 18.5303Z"
          fill="#2F2B43"></path>
      </svg>
    </div>
    <div class="question-slider__arrow-next">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M11.9697 5.46967C11.6768 5.76256 11.6768 6.23744 11.9697 6.53033L16.6893 11.25H6C5.58579 11.25 5.25 11.5858 5.25 12C5.25 12.4142 5.58579 12.75 6 12.75H16.6893L11.9697 17.4697C11.6768 17.7626 11.6768 18.2374 11.9697 18.5303C12.2626 18.8232 12.7374 18.8232 13.0303 18.5303L19.0303 12.5303C19.3232 12.2374 19.3232 11.7626 19.0303 11.4697L13.0303 5.46967C12.7374 5.17678 12.2626 5.17678 11.9697 5.46967Z"
          fill="#2F2B43"></path>
      </svg>
    </div>
    <div class="question-slider__wrapper">
      <ul class="swiper-wrapper question-slider__list">
        <li class="swiper-slide question-slider__slide question-slide">
          <div class="question-slide__wrapper">
            <span class="question-slide__time">1 час назад</span>
            <h4 class="question-slide__title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
            <div class="question-slide__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum sunt
              dolore saepe! Tempore totam fugiat fugit, impedit distinctio beatae dolores! Facilis sit enim accusantium
              porro, quia tempore omnis vero!</div>
            <a href="/" class="question-slide__link">1 ответ</a>
          </div>
        </li>
        <li class="swiper-slide question-slider__slide question-slide">
          <div class="question-slide__wrapper">
            <span class="question-slide__time">1 час назад</span>
            <h4 class="question-slide__title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
            <div class="question-slide__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum sunt
              dolore saepe! Tempore totam fugiat fugit, impedit distinctio beatae dolores! Facilis sit enim accusantium
              porro, quia tempore omnis vero!</div>
            <a href="/" class="question-slide__link">1 ответ</a>
          </div>
        </li>
        <li class="swiper-slide question-slider__slide question-slide">
          <div class="question-slide__wrapper">
            <span class="question-slide__time">1 час назад</span>
            <h4 class="question-slide__title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
            <div class="question-slide__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum sunt
              dolore saepe! Tempore totam fugiat fugit, impedit distinctio beatae dolores! Facilis sit enim accusantium
              porro, quia tempore omnis vero!</div>
            <a href="/" class="question-slide__link">1 ответ</a>
          </div>
        </li>
        <li class="swiper-slide question-slider__slide question-slide">
          <div class="question-slide__wrapper">
            <span class="question-slide__time">1 час назад</span>
            <h4 class="question-slide__title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
            <div class="question-slide__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum sunt
              dolore saepe! Tempore totam fugiat fugit, impedit distinctio beatae dolores! Facilis sit enim accusantium
              porro, quia tempore omnis vero!</div>
            <a href="/" class="question-slide__link">1 ответ</a>
          </div>
        </li>
        <li class="swiper-slide question-slider__slide question-slide">
          <div class="question-slide__wrapper">
            <span class="question-slide__time">1 час назад</span>
            <h4 class="question-slide__title">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
            <div class="question-slide__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum sunt
              dolore saepe! Tempore totam fugiat fugit, impedit distinctio beatae dolores! Facilis sit enim accusantium
              porro, quia tempore omnis vero!</div>
            <a href="/" class="question-slide__link">1 ответ</a>
          </div>
        </li>
      </ul>
    </div>
  </section>

</div>
<section class="main__community community">
  <h2 class="community__title">Окулисты</h2>
  <div class="community__text"></div>
  <ul class="community__list">
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
    <li class="community__item">
      <a href="" class="community__link">
        <img src="images/avatar.jpg" alt="" class="community__avatar">
      </a>
    </li>
  </ul>
</section>


@include('parts.reviews')





<section class="main__question questions">
  <div class="questions__wrapper">
    <div class="questions__inner  container-small">
      <h2 class="questions__title">Частые вопросы</h2>
      <ul class="questions__list">
        <li class="questions__item question">
          <div class="question__wrapper">
            <div class="question__inner">
              <span class="question__title">Обратиться к офтальмологу онлайн возможно в следующих случаях:</span>
              <div class="question__button">
                <svg height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg"
                  class="Accordion__icon">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.7071 5.29289C15.0976 5.68342 15.0976 6.31658 14.7071 6.70711L8.70711 12.7071C8.31658 13.0976 7.68342 13.0976 7.29289 12.7071L1.29289 6.70711C0.902368 6.31658 0.902369 5.68342 1.29289 5.29289C1.68342 4.90237 2.31658 4.90237 2.70711 5.29289L8 10.5858L13.2929 5.29289C13.6834 4.90237 14.3166 4.90237 14.7071 5.29289Z"
                    fill="currentColor"></path>
                </svg>
              </div>
            </div>
            <div class="question__ansver-wrapper">
              <span class="question__ansver-text">
                <p> 1. Консультация по неотложным ситуациям при появлении жалоб
                  (покраснение глаз, слезотечение, нарушение зрения, боли в
                  глазах и т.д.), если нет возможности показаться врачу. Врач офтальмолог подскажет, определит
                  необходимые
                  действия и
                  назначит лечение.</p>
                <p> 2. Интерпретация результатов обследований, раннее выданных заключений.</p>
                <p> 3. Получение второго мнения по волнующим вопросам по лечению и прогнозу.</p>
                <p> 4. Проконсультироваться с офтальмологом можно и по телефону. В этом случае можно задать все
                  интересующие
                  вопросы и
                  получить ответы врача.
                  Консультация опытного офтальмолога онлайн - это удобный способ быстро получить квалифицированную
                  консультацию, когда нет
                  возможности посетить врача.</p>
              </span>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Обратиться к офтальмологу онлайн возможно в следующих случаях:
1. Консультация по неотложным ситуациям при появлении жалоб (покраснение глаз, слезотечение, нарушение зрения, боли в
глазах и т.д.), если нет возможности показаться врачу. Врач офтальмолог подскажет, определит необходимые действия и
назначит лечение.
2. Интерпретация результатов обследований, раннее выданных заключений.
3. Получение второго мнения по волнующим вопросам по лечению и прогнозу.
4. Проконсультироваться с офтальмологом можно и по телефону. В этом случае можно задать все интересующие вопросы и
получить ответы врача.
Консультация опытного офтальмолога онлайн - это удобный способ быстро получить квалифицированную консультацию, когда нет
возможности посетить врача. -->

</div>
@endsection