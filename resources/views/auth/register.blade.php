<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Cadastrar</title>
</head>
<body class="text-gray-800 bg-gray-50">

  <header class="h-14 flex items-center justify-center bg-white border-b border-gray-200">
    <a data-v-ab71cf58="" href="/" class="inline-flex items-center space-x-3 nuxt-link-active">
      <img data-v-ab71cf58="" src="/_nuxt/img/laravue-logo.6cda244.svg" class="logo"> <span data-v-ab71cf58="" class="hidden sm:inline-block inline-flex items-center font-medium rounded-full bg-green-100 text-green-800 px-2.5 py-0.5 text-xs">
      BETA
      </span>
    </a>
  </header>
  <div class="flex justify-center px-6 py-20">
    <div class="px-2 w-full max-w-lg">
      <div style="border:1px solid red" class="w-1/3 bg-black">
        <div class="bg-red-300 py-8 px-4 shadow sm:rounded-lg sm:px-10">
          <h2 class="text-center text-lg leading-9 font-bold text-gray-800 mb-2">
          Criar conta
          </h2> <!----> 
          <form class="grid grid-cols-2 gap-6 bg-red-300">
            <span>
              <div>
                <label for="first_name" class="block text-gray-700 text-sm font-medium mb-2 tracking-wide"> Primeiro nome </label>
                <input id="first_name" type="text" class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded"><!---->
              </div>
            </span> 
            <span>
              <div>
                <label for="last_name" class="block text-gray-700 text-sm font-medium mb-2 tracking-wide"> Sobrenome </label>
                <input id="last_name" type="text" class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded"><!---->
              </div>
            </span> 
            <div class="col-span-2">
              <span>
                <div>
                  <label for="email" class="block text-gray-700 text-sm font-medium mb-2 tracking-wide"> E-mail </label>
                  <input id="email" type="email" class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded"><!---->
                </div>
              </span>
            </div> 
            <div class="col-span-2">
              <span>
                <div>
                  <label for="password" class="block text-gray-700 text-sm font-medium mb-2 tracking-wide"> Senha </label>
                  <input id="password" type="password" class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded"><!---->
                </div>
              </span>
            </div> 
            <div class="col-span-2">
              <button type="submit" class="mt-2 inline-flex items-center justify-center border focus:outline-none transition ease-in-out duration-150 w-full justify-center text-white bg-blue-500 hover:bg-blue-600 border-blue-500 hover:border-blue-600 text-base px-4 py-2 rounded" shadow="lg">
                  Criar conta
              </button>
            </div>
          </form>
        </div> 
        <div class="w-full mt-6 text-center">
          <a href="/login" class="text-sm text-gray-600 hover:text-blue-600">
          Voltar para login
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>