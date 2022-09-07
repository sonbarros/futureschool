<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{mix('css/app.css')}}">
  <script src="{{mix('js/app.js')}}" defer></script>
  @stack('style::head')
  <title>Future School</title>
</head>
<body class="bg-gray-50">
  @yield('content')
</body>
</html>