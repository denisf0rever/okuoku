@extends('app')
@section('title', 'Консультация офтальмолога онлайн: круглосуточно по телефону и в чате')
@section('description', '')
@section('keywords', '')
@section('canonical', 'profile/'. '')
	
	@section('content')
    @include('parts.sidebar__mainpage')
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
        
		<!--@include('parts.reviews')-->
       
      </div>
    </div>
@endsection
  