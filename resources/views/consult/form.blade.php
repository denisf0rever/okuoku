@extends('app')
@section('title', 'Добавить вопрос')
@section('description', '')
@section('keywords', '')
@section('canonical', 'consultation/create')

@section('content')
@include('parts.sidebar__fullscreen')
<section class="main__content-block content-block">
  <div class="content-block__wrapper">
    <h1 class="content-block__header">Заявка на онлайн консультацию</h1>
    <div class="content-block__subtitle-wrapper">
      <form> 
		<textarea></textarea>
	  </form>
    </div>
  </div>
</section>
@endsection