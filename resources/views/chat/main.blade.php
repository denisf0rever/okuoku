<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Чат опетора</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/views/chat/src/main.jsx'])
  @include('parts.settings')
</head>

<body>

  <div class="operator-chat" id="operator-chat"></div>
</body>

</html>