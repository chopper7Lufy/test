@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection @section('content')

<div class="login__content" style="background:#ffffff;">
  <div class="section__title">
    <h2 style="color: #8B7969; text-align: center">Confirm</h2>
  </div>
  <table class="confirm-table__inner">
      <tr class="confirm-table__row">
        <th class="confirm-table__header">お名前</th>
        <th class="confirm-table__header">性別</th>
        <th class="confirm-table__header">メールアドレス</th>
        <th class="confirm-table__header">電話番号</th>
        <th class="confirm-table__header">住所</th>
        <th class="confirm-table__header">建物名</th>
        <th class="confirm-table__header">お問い合わせの種類</th>
        <th class="confirm-table__header">お問い合わせの内容</th>
      </tr>
      <tr class="confirm-table__content">
        <td>{{ old('content') }}</td>
        <td>{{ old('content') }}</td>
        <td>{{ old('content') }}</td>
        <td>{{ old('content') }}</td>
        <td>{{ old('content') }}</td>
        <td>{{ old('content') }}</td>
        <td>{{ old('content') }}</td>
        <td>{{ old('content') }}</td>

      </tr>
    </table>
@endsection