@extends('app')
@section('title', $category->title)
@section('description', $category->metadescription)
@section('keywords', $category->metakey)
@section('canonical', 'category/'. $category->id)

@section('content')
@include('parts.sidebar')
<section class="main__category category">
	<div class="category__wrapper">
		<h1 class="category__header">{{ $category->h1 }} Views: {{ $category->views }}</h1>
		<img src="{{ Storage::url($category->thumb) }}" alt="" class="category__img">
		<div class="category__subtitle-wrapper">
		<span class="category__subtitle">{{ $category->short_title }}</span>
	</div>
	<span class="category__content-header">Содержание статьи:</span>
	{{ $category->description }}
	<div class="category__main-text">
	<h2 class="category__main-text-header">Подзаголовок</h2>
		{{ $category->description }}
	</div>
          </div>
</section>
@endsection