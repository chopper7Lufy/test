@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="category__content">
  <form class="create-form">
    <div class="create-form__item">
      <input class="create-form__item-input" type="text">
    </div>
  </form>
  <div class="create-form__button">
      <button class="login__button" type="submit">ログイン</button>
  </div>
</div>
@endsection