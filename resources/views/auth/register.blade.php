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
      <img src="https://s3.amazonaws.com/futureschool.com/_img/future-logo.png" class="logo object-fill w-44 md:w-48">
      <span class="hidden items-center font-medium rounded-full bg-green-100 text-green-800 px-2.5 py-0.5 text-xs">
      BETA
      </span>
    </a>
  </header>
  <div class="flex justify-center px-6 py-20">
    <div class="px-2 w-full max-w-lg">
      <div>
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
          <h2 class="text-center text-lg leading-9 font-bold text-gray-800 mb-2">
          Criar conta
          </h2> <!---->
          
          @if($errors->all())
            <div>
            @foreach($errors->all() as $erro)
                <div id="msgerror" class="rounded-md p-4 text-sm font-medium bg-red-50 text-red-800">
                    <div class="flex"><!---->
                        <div><span>{{$erro}}</span></div><div class="ml-auto pl-3"><div class="-mx-1.5 -my-1.5"><button class="inline-flex rounded-md p-1.5 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-red-50 text-red-500 hover:bg-red-100 focus:ring-offset-red-50 focus:ring-red-600"><span class="sr-only">Dismiss</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="h-5 w-5"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button></div></div></div></div>
                @break
            @endforeach 
            </div>   
          @endif
        
          <form action="{{route('register')}}" method="POST" class="grid grid-cols-2 gap-6">
            @csrf
            <span class="col-span-2">
              <div>
                <label for="name" class="block text-gray-700 text-sm font-medium mb-2 tracking-wide"> Nome </label>
                <input id="name" type="text" name="name" @if(old('name')) value="{{old('name')}}" @endif class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded outline-none"><!---->
              </div>
            </span> 
            {{-- 
            <span>
              <div>
                <label for="last_name" class="block text-gray-700 text-sm font-medium mb-2 tracking-wide"> Sobrenome </label>
                <input id="last_name" type="text" class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded outline-none"><!---->
              </div>
            </span> 
            --}}
            <div class="col-span-2">
              <span>
                <div>
                  <label for="email" class="block text-gray-700 text-sm font-medium mb-2 tracking-wide"> E-mail </label>
                  <input id="email" type="email" name="email" @if(old('email')) value="{{old('email')}}" @endif class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded outline-none"><!---->
                </div>
              </span>
            </div> 
            <div class="col-span-2">
              <span>
                <div>
                  <label for="password" class="block text-gray-700 text-sm font-medium mb-2 tracking-wide"> Senha </label>
                  <input id="password" type="password" name="password" class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded outline-none"><!---->
                </div>
              </span>
            </div> 
            <div class="col-span-2">
              <button type="submit" class="mt-2 font-bold inline-flex items-center justify-center border focus:outline-none transition ease-in-out duration-150 w-full justify-center text-white bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-base px-4 py-2 rounded-sm" shadow="lg">
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