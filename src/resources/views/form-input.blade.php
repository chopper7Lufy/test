@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection @section('content')

<div class="login__content" style="background:#ffffff;">
  <div class="section__title">
    <h2 style="color: #8B7969; text-align: center">Contact</h2>
  </div>
  <div class="email__address" style="margin: 0 auto;
  width: 70%;">
    <h2>お名前</h2>
  </div>
  <form class="search-form">
    @csrf
    <div class="search-form__item">
      <input class="search-form__item-input" type="text" name="password" value="{{ old('content') }}"/>
    </div>
  </form>

  <div class="gender" style="margin: 0 auto;
  width: 70%;">
    <h2>性別</h2>
  </div>
  <form style="margin: 0 auto;
  width: 70%;">
    <input type="radio" id=1 name="contact">
    <label for="1">男性</label>
    <input type="radio" id=2 name="contact">
    <label for="2">女性</label>
    <input type="radio" id=3 name="contact">
    <label for="3">その他</label>
  </form>
  <div class="email__address">
    <h2>メールアドレス</h2>
  </div>
  <form class="search-form">
    <div class="search-form__item">
      <input class="search-form__item-input" type="email" name="email" value="{{ old('content') }}"/>
    </div>
  </form>
  <div class="pass__word" style="margin: 0 auto;
  width: 70%;">
    <h2>電話番号</h2>
  </div>
  <form class="search-form">
    <div class="search-form__item">
      <input class="search-form__item-input" type="tel" name="telephone-number" value="{{ old('content') }}"/>
    </div>
  </form>
  <div class="pass__word" style="margin: 0 auto;
  width: 70%;">
    <h2>住所</h2>
  </div>
  <form class="search-form">
    <div class="search-form__item">
      <input class="search-form__item-input" type="text" name="address" value="{{ old('content') }}"/>
    </div>
  </form>
  <div class="pass__word" style="margin: 0 auto;
  width: 70%;">
    <h2>建物名</h2>
  </div>
  <form class="search-form">
    <div class="search-form__item">
      <input class="search-form__item-input" type="text" name="building-name" value="{{ old('content') }}"/>
    </div>
  </form>
  <div class="pass__word" style="margin: 0 auto;
  width: 70%;">
    <h2>お問い合わせの種類</h2>
  </div>
  <form action="https://localhost" style="margin: 0 auto;
  width: 70%;" method="get">
  <select name="select">
    太郎 次郎 三郎
  </select>
  </form>
  <div class="pass__word" >
    <h2>お問い合わせ内容</h2>
  </div>
  <form class="search-form" style="margin: 0 auto;
  width: 70%;">
    <div class="search-form__item" >
        <textarea name="query-content" cols="30" rows="5"></textarea>
    </div>
  </form>

<div class="login" style="text-align: center;">
    <br><br><br><br><br><br>
    <button class="login__button" type="submit" action="/confirm">確認画面</button>
  </div>
</div>
@endsection