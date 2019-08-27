<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield("title")</title>

  <link href="{{ asset("css/app.css") }}" rel="stylesheet">
</head>
<body>
  <main class="py-4">
    @yield("content")
  </main>
  @yield("js")
</body>
</html>