@extends('app')
@section('title', $article->title)
@section('description', $article->metadescription)
@section('keywords', $article->metakey)
@section('canonical', 'article/'. $article->id)
@section('chat', @vite(['resources/views/user/profile/main.jsx']))


	@section('content')
    @include('parts.sidebar')
	
<section class="main__article article">
          <div class="article__wrapper">
            <h1 class="article__header">{{ $article->h1 }}</h1>
            <img src="{{ Storage::url($article->thumb) }}" alt="" class="article__img">
            <div class="article__subtitle-wrapper">
              <span class="article__subtitle">{{ $article->subtitle }}</span>
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
	@endsection