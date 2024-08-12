@extends('app')
@section('title', $article->title)
@section('description', $article->metadescription)
@section('keywords', $article->metakey)
@section('canonical', 'article/'. $article->id)

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
	{{ $article->content }}
	<div class="article__main-text">
		<h2 class="article__main-text-header">Подзаголовок</h2>
		{{ $article->content }}
	</div>
          </div>
</section>
@endsection