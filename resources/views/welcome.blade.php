<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/scss/style.scss', 'resources/js/main.min.js'])
</head>

<body>
  <header class="header">
    <div class="header__wrapper">
      <div class="header__container container">
        <a href="#" class="header__left header__logo">
          <img src="images/logo.svg" alt="" class="header__logo-img">
          <h1 class="header__logo-title">Flowbite</h1>
        </a>
        <div class="header__right">
          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__list-item"><a href="#" class="header__list-item-link">Docs</a></li>
              <li class="header__list-item"><a href="#" class="header__list-item-link">Blocks</a></li>
              <li class="header__list-item"><a href="#" class="header__list-item-link">Figma</a></li>
              <li class="header__list-item"><a href="#" class="header__list-item-link">Icons</a></li>
              <li class="header__list-item"><a href="#" class="header__list-item-link">Blog</a></li>
              <li class="header__list-item"><a href="#" class="header__list-item-link">Pro version</a></li>
              <li class="header__list-item"><a href="#" class="header__list-item-link">Pricing & FAQ</a></li>
            </ul>
          </nav>
          <ul class="header__icons">
            <li class="header__icon"><a href="#" class="header__icon-link"><img src="images/github.svg" alt=""
                  class="header__icon-img"></a></li>
            <li class="header__icon"><a href="#" class="header__icon-link"><img src="images/discord.svg" alt=""
                  class="header__icon-img"></a></li>
            <li class="header__icon"><a href="#" class="header__icon-link"><img src="images/youtube.svg" alt=""
                  class="header__icon-img"></a></li>
            <li class="header__icon header__icon-theme"><a href="#" class="header__icon-link"><img
                  src="images/changeTheme.svg" alt="" class="header__icon-img"></a></li>
          </ul>
          <a href="#" class="header__button">
            Sign in
            <img src="images/buttonArrow.svg" alt="" class="header__button-img">
          </a>
          <div class="header__burger">
            <img src="images/burger.svg" alt="" class="header__burger-img">
          </div>
        </div>
      </div>
      <div class="header__menu-mobile hide">
        <nav class="header__nav-mobile">
          <ul class="header__list-mobile">
            <li class="header__list-item-mobile"><a href="#" class="header__list-item-link">Docs</a></li>
            <li class="header__list-item-mobile"><a href="#" class="header__list-item-link">Blocks</a></li>
            <li class="header__list-item-mobile"><a href="#" class="header__list-item-link">Figma</a></li>
            <li class="header__list-item-mobile"><a href="#" class="header__list-item-link">Icons</a></li>
            <li class="header__list-item-mobile"><a href="#" class="header__list-item-link">Blog</a></li>
            <li class="header__list-item-mobile"><a href="#" class="header__list-item-link">Pro version</a></li>
            <li class="header__list-item-mobile"><a href="#" class="header__list-item-link">Pricing & FAQ</a></li>
          </ul>
          <ul class="navigation__list">
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Главная</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Подписки</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link navigation__link_selected">
                <img src=" images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Темы</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Видео</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Статьи</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Ролики</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Новости</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Сохранённое</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main class="main">
    <div class="main__wrapper">
      <div class="main__container container">
        <nav class="main__navigation navigation">
          <ul class="navigation__list">
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Главная</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Подписки</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link navigation__link_selected">
                <img src=" images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Темы</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Видео</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Статьи</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Ролики</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Новости</span>
              </a>
            </li>
            <li class="navigation__item">
              <a href="" class="navigation__link">
                <img src="images/discord.svg" alt="" class="navigation__image">
                <div class="navigation__notification"></div>
                <span class="navigation__title">Сохранённое</span>
              </a>
            </li>
          </ul>
        </nav>
        <div class="main__field">
          <section class="main__banner banner">
            <div class="banner__wrapper">
              <div class="banner__titles">
                <h2 class="banner__title">Получайте доход от своего сайта</h2>
                <span class="banner__subtitle">с релевантной рекламой</span>
                <span class="banner__subtitle"> и проверенными обновлениями</span>
              </div>
              <div class="banner__buttons">
                <div class="banner__join-btn banner__btn">Присоединиться</div>
                <div class="banner__enter-btn banner__btn">Войти</div>
              </div>
              <img src="images/placeholder.png" alt="" class="banner__img">
              <div class="banner__sponsors">
                <span class="banner__sponsors-title">Sponsor this project</span>
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
          <section class="main__stories stories ">
            <div class="swiper stories__wrapper">
              <h2 class="stories__title">ИСТОРИИ</h2>
              <ul class="stories__list swiper-wrapper">
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature2.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
                <li class="stories__story story swiper-slide">
                  <div class="story__wrapper">
                    <img src="images/nature1.jpg" alt="" class="story__content">
                    <a href="#" class="story__avatar-link">
                      <img src="images/avatar.jpg" alt="" class="story__avatar">
                    </a>
                  </div>
                  <span class="story__title">Где искать темную тему Хабра</span>
                </li>
              </ul>
            </div>
            <div class="stories__reveal stories-reveal hide">
              <div class="swiper stories-reveal__wrapper">
                <div class="stories-reveal__close">
                  <img src="images/cross.svg" alt="" class="stories-reveal__close-img">
                </div>
                <ul class="stories-reveal__list swiper-wrapper">
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev hide">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature4.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature4.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                  <li class="stories-reveal__story-revealed story-revealed swiper-slide">
                    <div class="story-revealed__wrapper">
                      <div class="story-revealed__button-next hide">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="story-revealed__button-prev">
                        <img src="images/arrow.svg" alt="" class="story-revealed__button-img">
                      </div>
                      <div class="swiper story-revealed__nested-swiper">
                        <div class="story-revealed__panel">
                          <div class="story-revealed__block"></div>
                          <div class="story-revealed__top-gradient"></div>
                          <div class="story-revealed__left-gradient"></div>
                          <div class="story-revealed__right-gradient"></div>
                          <div class="story-revealed__user">
                            <a href="#" class="story-revealed__avatar-link">
                              <img src="images/avatar.jpg" alt="" class="story-revealed__avatar">
                            </a>
                            <span class="story-revealed__username">Автор</span>
                          </div>
                        </div>
                        <ul class="swiper-wrapper story-revealed__list">
                          <li class="swiper-slide story-revealed__item">
                            <img class="story-revealed__img" src="images/nature1.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature2.jpg" />
                          </li>
                          <li class="story-revealed__slide swiper-slide">
                            <img class="story-revealed__img" src="images/nature3.jpg" />
                          </li>
                        </ul>
                        <div class="story-revealed__pagination"></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </section>
          <section class="main__products products">
            <ul class="products__wrapper">
              <li class="products__product product product__large">
                <a href="#" class="product__link ">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder2.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__normal">
                <a href="#" class="product__link ">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__normal">
                <a href="#" class="product__link">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__large">
                <a href="#" class="product__link ">
                  <div class="product__title">Одежда, обувь,
                    аксессуары</div>
                  <img src="images/placeholder2.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__normal">
                <a href="#" class="product__link ">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__normal">
                <a href="#" class="product__link">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__large">
                <a href="#" class="product__link ">
                  <div class="product__title">Готовый бизнес и оборудование</div>
                  <img src="images/placeholder2.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__normal">
                <a href="#" class="product__link ">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__normal">
                <a href="#" class="product__link">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__normal">
                <a href="#" class="product__link ">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder2.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__normal">
                <a href="#" class="product__link ">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__large">
                <a href="#" class="product__link">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__large">
                <a href="#" class="product__link ">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder2.png" alt="" class="product__img">
                </a>
              </li>
              <li class="products__product product product__large">
                <a href="#" class="product__link ">
                  <div class="product__title">Авто</div>
                  <img src="images/placeholder.png" alt="" class="product__img">
                </a>
              </li>
            </ul>
          </section>
          <section class="main__news news">
            <div class="news__wrapper">
              <div class="news__top">
                <h2 class="news__title">Новости</h2>
                <div class="news__filter">
                  <input class="news__filter-item" type="radio" id="news-filter-1" name="news-filter" checked value="0">
                  <label class="news__filter-label" for="news-filter-1">
                    По дате
                  </label>
                  <input class="news__filter-item" type="radio" id="news-filter-2" name="news-filter" value="0">
                  <label class="news__filter-label" for="news-filter-2">
                    По просмотрам
                  </label>
                </div>
              </div>
              <span class="news__current-date">05 апреля</span>
              <ul class="news__list">
                <li class="news__item news-item">
                  <div class="news-item__wrapper">
                    <div class="news-item__time">20:47</div>
                    <span class="news-item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <span
                        class="news-item__comment">
                        <img src="images/bubble.svg" alt="" class="news-item__comment-img">
                        <span class="news-item__comment-number">1</span>
                      </span></span>
                  </div>
                </li>
                <li class="news__item news-item">
                  <div class="news-item__wrapper">
                    <div class="news-item__time">20:47</div>
                    <span class="news-item__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <span
                        class="news-item__comment hide">
                        <img src="images/bubble.svg" alt="" class="news-item__comment-img">
                        <span class="news-item__comment-number">1</span>
                      </span></span>
                  </div>
                </li>
                <li class="news__item news-item">
                  <div class="news-item__wrapper">
                    <div class="news-item__time">20:47</div>
                    <span class="news-item__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus quas
                      voluptas ipsa, vitae deserunt adipisci a earum esse, itaque consectetur veritatis cumque facere
                      sit tempora. A soluta reiciendis reprehenderit placeat! <span class="news-item__comment">
                        <img src="images/bubble.svg" alt="" class="news-item__comment-img">
                        <span class="news-item__comment-number">3</span>
                      </span></span>
                  </div>
                </li>
                <li class="news__item news-item">
                  <div class="news-item__wrapper">
                    <div class="news-item__time">20:47</div>
                    <span class="news-item__text">Lorem ipsum dolor, sit amet <span class="news-item__comment">
                        <img src="images/bubble.svg" alt="" class="news-item__comment-img">
                        <span class="news-item__comment-number">3</span>
                      </span></span>
                  </div>
                </li>
                <li class="news__item news-item">
                  <div class="news-item__wrapper">
                    <div class="news-item__time">20:47</div>
                    <span class="news-item__text">Lorem ipsuma earum esse, itaque consectetur veritatis cumque facere
                      sit tempora. A soluta reiciendis reprehenderit placeat! <span class="news-item__comment">
                        <img src="images/bubble.svg" alt="" class="news-item__comment-img">
                        <span class="news-item__comment-number">3</span>
                      </span></span>
                  </div>
                </li>
              </ul>
              <div class="news__load-more">
                <img src="images/load-more.svg" alt="" class="news__load-more-img">
                <span class="news__load-more-text">Загрузить еще</span>
              </div>
            </div>
          </section>
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
        </div>
        <section class="main__community community">
          <h2 class="community__title">Community contributors</h2>
          <div class="community__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt distinctio
            praesentium harum repudiandae mollitia ab nostrum.</div>
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
        <section class="main__article article">
          <div class="article__wrapper">
            <h1 class="article__header">Заголовок статьи</h1>
            <img src="images/placeholder2.png" alt="" class="article__img">
            <div class="article__subtitle-wrapper">
              <span class="article__subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                doloribus labore quas, aliquam sint provident distinctio explicabo perspiciatis consequuntur nisi at
                adipisci ullam nam velit facilis nesciunt mollitia aperiam saepe?</span>
            </div>
            <span class="article__content-header">Содержание статьи:</span>
            <ul class="article__content-list">
              <li class="article__content-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda
                doloribus labore quas, aliquam sint provident distinctio explicabo perspiciatis consequuntur nisi at
                adipisci ullam nam velit facilis nesciunt mollitia aperiam saepe?</li>
              <li class="article__content-item">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                delectus adipisci expedita, pariatur, </li>
            </ul>
            <div class="article__main-text">
              <h2 class="article__main-text-header">Подзаголовок</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum error asperiores saepe,
                voluptatibus facere dignissimos officia praesentium incidunt commodi fugit quidem excepturi alias
                inventore, quas quo! Maiores rerum quasi excepturi?</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum error asperiores saepe,
                voluptatibus facere dignissimos officia praesentium incidunt commodi fugit quidem excepturi alias
                inventore, quas quo! Maiores rerum quasi excepturi?</p>
            </div>
          </div>
        </section>
        <section class="main__comments comments">
          <div class="comments__wrapper">
            <span class="comments__amount">40 комментариев</span>
            <form action="" class="comments__form">
              <textarea class="comments__textarea" name="comment" placeholder="Написать комментарий..."></textarea>
              <button class="comments__button">Отправить</button>
            </form>
            <ul class="comments__list">
              <li class="comments__item comment">
                <div class="comment__main-comment">
                  <a href="" class="comment__user-link">
                    <img src="images/avatar.jpg" alt="" class="comment__avatar">
                    <span class="comment__user-name">Agatha</span>
                    <span class="comment__time">7 м</span>
                  </a>
                  <span class="comment__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem odio
                    similique
                    maxime deserunt perspiciatis ipsa nulla est minus esse unde corporis earum repellendus, inventore
                    aliquid,
                    porro atque dolorum, aliquam cupiditate. Aspernatur, sunt? In pariatur reprehenderit, tempora ipsum
                    asperiores consequatur excepturi porro, rem fugit exercitationem, quis cupiditate tempore maxime
                    provident
                    veritatis officia? Fugit reiciendis provident eius aperiam consequatur id eligendi iste!
                  </span>
                  <div class="comment__sub-section">
                    <a href="" class="comment__ansver">Ответить</a>
                    <img class="comment__likes" src="images/like.svg" alt="">
                    <span class="comment__likes-amount">97</span>
                    <img class="comment__dislikes" src="images/like.svg" alt="">
                  </div>
                </div>
                <ul class="comment__sub-comments">
                  <li class="comment__sub-comment">
                    <a href="" class="comment__user-link">
                      <img src="images/avatar.jpg" alt="" class="comment__avatar">
                      <span class="comment__user-name">Agatha</span>
                      <span class="comment__time">7 м</span>
                    </a>
                    <span class="comment__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem odio
                      similique
                      maxime deserunt perspiciatis ipsa nulla est minus esse unde corporis earum repellendus.</span>
                    <div class="comment__sub-section">
                      <a href="" class="comment__ansver">Ответить</a>
                      <img class="comment__likes" src="images/like.svg" alt="">
                      <span class="comment__likes-amount">97</span>
                      <img class="comment__dislikes" src="images/like.svg" alt="">
                    </div>
                  </li>
                  <li class="comment__sub-comment">
                    <a href="" class="comment__user-link">
                      <img src="images/avatar.jpg" alt="" class="comment__avatar">
                      <span class="comment__user-name">Agatha</span>
                      <span class="comment__time">7 м</span>
                    </a>
                    <span class="comment__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                    <div class="comment__sub-section">
                      <a href="" class="comment__ansver">Ответить</a>
                      <img class="comment__likes" src="images/like.svg" alt="">
                      <span class="comment__likes-amount">97</span>
                      <img class="comment__dislikes" src="images/like.svg" alt="">
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </section>
        <section class="main__reviews reviews">
          <div class="reviews__wrapper container-small">
            <h2 class="reviews__title">Отзывы</h2>
            <span class="reviews__text">82 775 отзывов оставили клиенты за последние 12 месяцев. Из них 80 570 -
              положительные</span>
            <ul class="reviews__list">
              <div class="reviews__item review">
                <div class="review__wrapper">
                  <div class="review__top">
                    <img src="images/avatar.jpg" alt="" class="review__avatar">
                    <span class="review__name">Ханда Бабуевна Батуева</span>
                    <div class="review__top-subtext">
                      <img src="images/star-white.svg" alt="" class="review__star-white">
                      <span class="review__score">4,91</span>
                      <span class="review__amount-reviews">35 отзывов</span>
                      <span class="review__status">Очень хвалят</span>
                    </div>
                  </div>
                  <span class="review__text">Бато оставил отзыв</span>
                  <div class="review__stars">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                  </div>
                  <span class="review__main-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis
                    quo aut adipisci eos qui dolores dolore impedit voluptates.</span>
                  <div class="review__information">
                    <div class="review__date">3 феврлая 2024</div>
                    <div class="review__location">Улан-Удэ</div>
                  </div>
                  <div class="review__subject">ЕГЭ по биологии</div>
                </div>
              </div>
              <div class="reviews__item review">
                <div class="review__wrapper">
                  <div class="review__top">
                    <img src="images/avatar.jpg" alt="" class="review__avatar">
                    <span class="review__name">Ханда Бабуевна Батуева</span>
                    <div class="review__top-subtext">
                      <img src="images/star-white.svg" alt="" class="review__star-white">
                      <span class="review__score">4,91</span>
                      <span class="review__amount-reviews">35 отзывов</span>
                      <span class="review__status">Очень хвалят</span>
                    </div>
                  </div>
                  <span class="review__text">Бато оставил отзыв</span>
                  <div class="review__stars">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                  </div>
                  <span class="review__main-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis
                    quo aut adipisci eos qui dolores dolore impedit voluptates.</span>
                  <div class="review__information">
                    <div class="review__date">3 феврлая 2024</div>
                    <div class="review__location">Улан-Удэ</div>
                  </div>
                  <div class="review__subject">ЕГЭ по биологии</div>
                </div>
              </div>
              <div class="reviews__item review">
                <div class="review__wrapper">
                  <div class="review__top">
                    <img src="images/avatar.jpg" alt="" class="review__avatar">
                    <span class="review__name">Ханда Бабуевна Батуева</span>
                    <div class="review__top-subtext">
                      <img src="images/star-white.svg" alt="" class="review__star-white">
                      <span class="review__score">4,91</span>
                      <span class="review__amount-reviews">35 отзывов</span>
                      <span class="review__status">Очень хвалят</span>
                    </div>
                  </div>
                  <span class="review__text">Бато оставил отзыв</span>
                  <div class="review__stars">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                  </div>
                  <span class="review__main-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis
                    quo aut adipisci eos qui dolores dolore impedit voluptates.</span>
                  <div class="review__information">
                    <div class="review__date">3 феврлая 2024</div>
                    <div class="review__location">Улан-Удэ</div>
                  </div>
                  <div class="review__subject">ЕГЭ по биологии</div>
                </div>
              </div>
              <div class="reviews__item review">
                <div class="review__wrapper">
                  <div class="review__top">
                    <img src="images/avatar.jpg" alt="" class="review__avatar">
                    <span class="review__name">Ханда Бабуевна Батуева</span>
                    <div class="review__top-subtext">
                      <img src="images/star-white.svg" alt="" class="review__star-white">
                      <span class="review__score">4,91</span>
                      <span class="review__amount-reviews">35 отзывов</span>
                      <span class="review__status">Очень хвалят</span>
                    </div>
                  </div>
                  <span class="review__text">Бато оставил отзыв</span>
                  <div class="review__stars">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                  </div>
                  <span class="review__main-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis
                    quo aut adipisci eos qui dolores dolore impedit voluptates.</span>
                  <div class="review__information">
                    <div class="review__date">3 феврлая 2024</div>
                    <div class="review__location">Улан-Удэ</div>
                  </div>
                  <div class="review__subject">ЕГЭ по биологии</div>
                </div>
              </div>
              <div class="reviews__item review">
                <div class="review__wrapper">
                  <div class="review__top">
                    <img src="images/avatar.jpg" alt="" class="review__avatar">
                    <span class="review__name">Ханда Бабуевна Батуева</span>
                    <div class="review__top-subtext">
                      <img src="images/star-white.svg" alt="" class="review__star-white">
                      <span class="review__score">4,91</span>
                      <span class="review__amount-reviews">35 отзывов</span>
                      <span class="review__status">Очень хвалят</span>
                    </div>
                  </div>
                  <span class="review__text">Бато оставил отзыв</span>
                  <div class="review__stars">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                  </div>
                  <span class="review__main-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis
                    quo aut adipisci eos qui dolores dolore impedit voluptates.</span>
                  <div class="review__information">
                    <div class="review__date">3 феврлая 2024</div>
                    <div class="review__location">Улан-Удэ</div>
                  </div>
                  <div class="review__subject">ЕГЭ по биологии</div>
                </div>
              </div>
              <div class="reviews__item review">
                <div class="review__wrapper">
                  <div class="review__top">
                    <img src="images/avatar.jpg" alt="" class="review__avatar">
                    <span class="review__name">Ханда Бабуевна Батуева</span>
                    <div class="review__top-subtext">
                      <img src="images/star-white.svg" alt="" class="review__star-white">
                      <span class="review__score">4,91</span>
                      <span class="review__amount-reviews">35 отзывов</span>
                      <span class="review__status">Очень хвалят</span>
                    </div>
                  </div>
                  <span class="review__text">Бато оставил отзыв</span>
                  <div class="review__stars">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                    <img src="images/star.svg" alt="" class="review__star">
                  </div>
                  <span class="review__main-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis
                    quo aut adipisci eos qui dolores dolore impedit voluptates.</span>
                  <div class="review__information">
                    <div class="review__date">3 феврлая 2024</div>
                    <div class="review__location">Улан-Удэ</div>
                  </div>
                  <div class="review__subject">ЕГЭ по биологии</div>
                </div>
              </div>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="footer__wrapper container-small">
      <h2 class="footer__title">Flowbite</h2>
      <div class="footer__lists">
        <ul class="footer__list">
          <li class="footer__list-item"><a href="#" class="footer__list-link">Новый заказ</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Все услуги</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Все отзывы</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">История заказов</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Условия использования</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Каталог ссылок</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Мобильная версия</a></li>
        </ul>
        <ul class="footer__list">
          <li class="footer__list-item"><a href="#" class="footer__list-link footer__bold">Работа в Бурятии</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Вход для специальистов</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Партнерская программа</a></li>
        </ul>
        <ul class="footer__list">
          <li class="footer__list-item"><a href="#" class="footer__list-link">О компаниии</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Вакансии</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Жизнь в Профи</a></li>
          <li class="footer__list-item"><a href="#" class="footer__list-link">Блог</a></li>
        </ul>
        <ul class="footer__list">
          <li class="footer__list-item">
            <span class="footer__text">Служба поддержки:</span>
            <a href="tel:+88003334545" class="footer__text footer__bold">8 800 333-45-45</a>
          </li>
          <li class="footer__list-item">
            <span class="footer__text">Будни: с 6 до 22</span>
            <span class="footer__text">Выходные: с 8 до 22</span>
          </li>
        </ul>
      </div>
      <div class="footer__information">
        <img src="images/pegi.jpg" alt="" class="footer__img">
        <span class="footer__information-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus
          architecto culpa, dolorem pariatur delectus ullam? Possimus deserunt illum sed. Ad non tempora fuga qui at
          illo laudantium laboriosam maxime neque.</span>
      </div>
      <div class="footer__copyright">&#169 PROFI.RU, 2006-2024</div>
      <div class="footer__information">
        <span class="footer__information-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus
          architecto culpa, dolorem pariatur delectus ullam? Possimus deserunt illum sed. Ad non tempora fuga qui at
          illo laudantium laboriosam <span class="footer__bold">maxime neque</span> .</span>
      </div>
    </div>
  </footer>
</body>
<script src="js/main.min.js"></script>

@if (Route::has('login'))
<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
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
</div>
@endif

</html>