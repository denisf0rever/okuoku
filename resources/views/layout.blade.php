<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Консультация офтальмолога онлайн: круглосуточно по телефону и в чате</title>
	<meta name="keywords" content="Консультация офтальмолога онлайн" />
	<meta name="description" content=" " />
	<meta name="title" content="Консультация офтальмолога онлайн: круглосуточно по телефону и в чате" />

	<meta property="og:title" content="Консультация офтальмолога онлайн: круглосуточно по телефону и в чате"/>
	<meta property="og:description" content="OkuOku: онлайн сервис офтальмологов, консультации, истории, статьи, врачи">
	<meta property="og:image" content="/logoimage.jpg">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://okuoku.ru/">
	<meta property="og:site_name" content="Консультация офтальмолога онлайн: круглосуточно по телефону и в чате">
	<link rel="image_src" href="/logoimage.jpg" />
	<meta name="theme-color" content="#fff">

	@vite(['resources/scss/style.scss', 'resources/js/main.min.js'])
</head>

<body>
  <header class="header">
    <div class="header__wrapper">
      <div class="header__container container">
        <a href="#" class="header__left header__logo">
          <img src="images/logo.svg" alt="" class="header__logo-img">
          <div class="header__logo-title">OkuOku</div>
        </a>
        <div class="header__right">
          <nav class="header__nav">
            <ul class="header__list">
              <li class="header__list-item"><a href="#" class="header__list-item-link">Docs</a></li>
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
          <a href="#" class="header__button">Войти
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
                <h2 class="banner__title">Консультация офтальмолога онлайн</h2>
                <span class="banner__subtitle">офтальмолог для детей и взрослых</span>
                <span class="banner__subtitle">круглосуточно в чате и по телефону</span>
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
          
		  
		<!--@include('stories.block')-->
		  
          
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
		  
		  
          <!--<section class="main__companies companies">
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
          </section>-->
		  
		  
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
        
		
		<!--@include('parts.reviews')-->
       
      </div>
    </div>
  </main>
  
  @include('parts.footer')
  
</body>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(97323142, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97323142" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</html>