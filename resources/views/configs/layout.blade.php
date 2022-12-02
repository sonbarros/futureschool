<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Configurações</title>
</head>
<body class="">

  <div class="grid grid-cols-10 min-h-screen">
    <div class="col-span-3 bg-gray-200 pl-44 pt-12 pr-4">
      <div>
        <a href="{{route('site.index')}}" class="inline-flex items-center space-x-1 text-sm text-gray-600 dark:text-gray-400 font-medium group mb-2 ml-1">
          <svg class="w-4 h-4 text-gray-400 -ml-1 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
          Voltar
        </a>
      </div>
      <ul>
        <li>
          <a aria-current="page" href="/configuracoes/meu-perfil" class="router-link-active router-link-exact-active @if(strpos($path, 'perfil')) bg-gray-500 text-gray-100 @else text-gray-700 @endif dark:bg-gray-700  dark:text-gray-200 flex items-center w-full h-10 rounded-lg px-4"> Meu perfil </a>
        </li>
        <li>
          <a href="/configuracoes/meus-cursos" class="@if(strpos($path, 'meus-cursos')) bg-gray-500 text-gray-100 @else text-gray-700 @endif dark:text-gray-500 flex items-center w-full h-10 rounded-lg px-4"> Meus cursos </a>
        </li>
        <li class="hidden">
          <a href="/configuracoes/seguranca" class="text-gray-700 dark:text-gray-500 flex items-center w-full h-10 rounded-lg px-4"> Segurança </a>
        </li>
      </ul>
    </div>
    <div class="col-span-7 bg-gray-50 pt-12 px-10">
      @yield('content')
    </div>
  </div>
  
</body>
</html>