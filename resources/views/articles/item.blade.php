@extends('app')
@section('title', $article->title)
@section('description', $article->metadescription)
@section('keywords', $article->metakey)
@section('canonical', 'article/'. $article->id)

@section('content')
@include('parts.sidebar')
<section class="main__content-block content-block">
	<div class="content-block__wrapper">
		<h1 class="content-block__header">{{ $article->h1 }} Views: {{ $article->views }}</h1>
		<img src="{{ Storage::url($article->thumb) }}" alt="" class="content-block__img">
		<div class="content-block__subtitle-wrapper">
		<span class="content-block__subtitle">{{ $article->subtitle }}</span>
	</div>
	<span class="content-block__content-header">Содержание статьи:</span>
	{{ $article->content }}
	<div class="content-block__main-text">
	<h2 class="content-block__main-text-header">Подзаголовок</h2>
		{{ $article->content }}
	</div>
          </div>
</section>
@endsection