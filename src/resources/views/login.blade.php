@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection @section('content')
<nav>
  <ul class="header-nav">
    <li class="header-nav__item">
      <a class="header-nav__link" href="/register">register</a>
    </li>
  </ul>
</nav>

<div class="login__content">
  <div class="section__title">
    <h2 style="color: #8B7969; text-align: center">Login</h2>
  </div>
  <div class="email__address">
    <h2>メールアドレス</h2>
  </div>
  <form class="search-form">
    @csrf
    <div class="search-form__item">
      <input class="search-form__item-input" type="email" name="email" value="{{ old('content') }}"/>
    </div>
  </form>
  <div class="pass__word" style="margin: 0 auto;
  width: 70%;">
    <h2>パスワード</h2>
  </div>
  <form class="search-form">
    <div class="search-form__item">
      <input class="search-form__item-input" type="password" name="password" value="{{ old('content') }}"/>
    </div>
  </form>
  <div class="login" style="text-align: center;">
    <br><br><br><br><br><br>
    <button class="login__button" type="submit">ログイン</button>
  </div>
</div>
@endsection