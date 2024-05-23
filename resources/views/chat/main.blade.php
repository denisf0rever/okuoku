<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Чат оператора</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/views/chat/src/main.jsx', 'resources/views/chat/scss/style.scss'])
</head>

<body>
  <div class="body-wrapper">
    <header class="body-wrapper__header header">
      <div class="header__wrapper">
        <img src="./src/images/avatar.jpg" alt="" class="header__logo">
      </div>
    </header>
    <div class="body-wrapper__operator-chat operator-chat" id="operator-chat"></div>
  </div>
</body>

</html>