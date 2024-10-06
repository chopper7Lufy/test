<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header"  style="background-color:#ffffff;">
    <div class="header__logo">
      FashionablyLate
    </div>
  </header>
  <main style="background-color: #f7e7d9;">
    @yield('content')
  </main>
</body>
</html>