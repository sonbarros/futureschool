<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Curso TSO</title>
  <style>
    .multiple-ellipsis {
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 3; /* Definimos quantas linhas queremos */
      display: -webkit-box;
      overflow: hidden;
      width: 270px; /* Definimos o tamanho máximo do nosso container*/
    }
  </style>
</head>
<body class="bg-yellow-50">
  <header class="h-16 flex items-center bg-white border-b border-gray-200">
    <div class="w-full px-4 lg:px-8 flex items-center justify-between">
      <a href="/" class="inline-flex items-center justify-center sm:justify-start space-x-3 nuxt-link-exact-active nuxt-link-active w-full">
        <img src="{{asset('_img/future-logo.png')}}" class="logo object-fill w-44 md:w-48"> 
        <span class="hidden md:inline-flex items-center font-medium rounded-full bg-yellow-100 text-yellow-800 px-2.5 py-0.5 text-xs">
          BETA
        </span>
      </a> 

      <div class="hidden sm:block">
        <div class="flex items-center space-x-2 lg:space-x-4">
          <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 bg-yellow-100 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> HOME </a>
          <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 bg-yellow-100 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> TSO </a>
          <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 bg-yellow-100 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> JCL </a>
          <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 bg-yellow-100 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> COBOL </a>
          <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 bg-yellow-100 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> CICS </a>
          <a href="#" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 bg-yellow-100 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> DB2 </a>
          <a href="#" class="whitespace-nowrap ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 bg-yellow-100 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> QUEM SOMOS </a>
        </div>
      </div>
      
    </div>
  </header>
  
  <div class="p-4 lg:p-8">
    <div>
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:space-x-8 space-y-4 md:space-y-0 shadow-md bg-white rounded-lg p-4 lg:p-6 mb-16">
        <div class="flex-grow"  >
          <div class="h-full"><!----> 
            <div class="yt-container h-full flex items-center justify-center sm:items-start sm:justify-start">
              <img class="object-cover -mt-1.5" src="{{asset("_img/tso.png")}}" alt="">
              {{-- <iframe src="https://www.youtube.com/embed/1eLaBow7Zbo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe> --}}
            </div>
          </div>
        </div> 
        <div class="flex flex-col w-full md:w-2/5">
          <div class="space-y-3">
            <h1 class="font-bold text-2xl text-gray-900 leading-7">
              Curso de TSO
            </h1> 
          <div>
        <div class="inline-flex items-center px-2 py-0.5  rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
              </path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
          </svg> 25 aulas
        </div> 
        <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
          <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg> 
          3h
          38m
        </div>
      </div> 
      <div class="text-gray-600 space-y-3">
        <p>Neste curso você aprenderá utilizar <span class="inline-block">(na prática)</span> o TSO como ferramenta de trabalho.</p>
        <p>Iŕa escrever programas compila-los, executálos e verificar a existência de erros no spool.</p>
        <p class="invisible">Vamos também construir uma página completa e responsiva simulando uma agência de hotéis e resorts.</p>
      </div>
    </div> 
    <div class="mt-auto pt-3">
      <div>
        <div class="border border-gray-300 rounded-md px-4 py-3 flex items-center justify-between">
          <div>
            <div class="text-2xl text-gray-700 font-bold">
            Gratuito
            </div> 
            <div class="text-sm text-gray-500">
            Siga o conteúdo programático
            </div>
          </div> 
          <button class="inline-flex items-center justify-center bg-brand border focus:outline-none transition ease-in-out duration-150 text-white bg-brand-green hover:bg-brand-green border-brand hover:border-brand-green text-sm px-4 py-2 rounded">
          Começar
          </button>
        </div>
      </div>
    </div>
  </div>
</div> 
<div class="max-w-4xl mx-auto">
  <div>
    <h2 class="text-2xl text-yellow-800 font-bold mb-4">
    Conteúdo programático
    </h2> 
    <div class="mb-8 space-y-1.5">
      <div class="flex items-center space-x-4 h-14 bg-yellow-300 px-3 py-2 rounded-md text-gray-800">
        <div class="text-sm">
          SEÇÃO 1
        </div> 
        <div class="font-bold bg-yellow-500 rounded text-gray-50 px-2">
          Para conectar o Mainframe 
        </div>
      </div>
      
      {{-- PARA CONECTAR AO MAINFRAME --}}
      <div class="px-3 py-2 flex items-center justify-between bg-yellow-100 text-yellow-800">
        <div class="flex items-center sm:space-x-4">
          <div class="hidden sm:flex items-center justify-center w-9 h-9 bg-gray-50 border border-gray-300 rounded-full text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div> 
          <div class="font-medium text-gray-800"><!---->
              <p>1. Baixe o programa e os arquivos que possuem as instruções de como acessar o Mainframe.</p>
              <ul class="bg-white w-full sm:w-80 rounded-md py-4 mt-4 mb-4">
                <li class="flex justify-between py-2 px-2 cursor-pointer focus:outline-none transition ease-in-out duration-150 hover:border-gray-100 hover:bg-gray-100">
                  <span class="font-light text-brand">TN<span class="text-blue-800">3270</span></span>
                  <img class="w-8" src="{{asset("_img/tn3270-removebg-preview.png")}}" alt="">
                </li>
                <li class="flex justify-between py-2 px-2 cursor-pointer focus:outline-none transition ease-in-out duration-150 hover:border-gray-100 hover:bg-gray-100">
                  <span class="font-light text-brand">Instrução</span>
                  <img class="w-8" src="{{asset("_img/word.webp")}}" alt="">
                </li>
                <li class="flex justify-between py-2 px-2 cursor-pointer focus:outline-none transition ease-in-out duration-150 hover:border-gray-100 hover:bg-gray-100">
                  <span class="font-light text-brand">Instrução</span>
                  <img class="w-12 -mr-2" src="{{asset("_img/media-player.webp")}}" alt="">
                </li>
                <li class="flex justify-between py-2 px-2 cursor-pointer focus:outline-none transition ease-in-out duration-150 hover:border-gray-100 hover:bg-gray-100">
                  <span class="font-light text-brand">Abends</span>
                  <img class="w-8" src="{{asset("_img/icon-pdf.png")}}" alt="">
                </li>
                <li class="flex justify-between py-2 px-2 cursor-pointer focus:outline-none transition ease-in-out duration-150 hover:border-gray-100 hover:bg-gray-100">
                  <span class="font-light text-brand">Abends</span>
                  <img class="w-12 -mr-2" src="{{asset("_img/media-player.webp")}}" alt="">
                </li>
                <li class="flex justify-between py-2 px-2 cursor-pointer focus:outline-none transition ease-in-out duration-150 hover:border-gray-100 hover:bg-gray-100">
                  <span class="font-light text-brand">Compila</span>
                  <img class="w-12 -mr-2" src="{{asset("_img/media-player.webp")}}" alt="">
                </li>
              </ul>
          </div>
        </div> 
        {{-- 
        <button class="inline-flex items-center justify-center border focus:outline-none transition ease-in-out duration-150 text-white bg-brand hover:bg-brand-green border-brand hover:border-brand text-xs px-2.5 py-1.5 rounded">
        Assistir
        </button>
        --}}
      </div>{{-- End Aulas --}}
    </div>{{-- End Section --}}

    
    @php
      $cont = 2;
      $contSessao = 2;
    @endphp
    
    @foreach ($modulos as $modulo)
    <div class="mb-8 space-y-1.5">
      <div class="flex items-center space-x-4 h-14 bg-yellow-300 px-3 py-2 rounded-md">
        <div class="text-sm">
          SEÇÃO {{$contSessao}}
        </div> 
        <div class="font-bold invisible">
          Primeira aula de TSO
        </div>
      </div> 

      @foreach($modulo->aulas as $aula)
      {{-- <div class="h-full px-2 py-2 sm:px-3 flex flex-col sm:flex-row items-center bg-yellow-100"> --}}
      <div class="h-full px-2 py-2 sm:px-3 flex flex-col sm:flex-row bg-yellow-100">
        <div class="flex sm:space-x-4 min-w-70porcento">
          <div>
            <div class="hidden sm:flex items-center justify-center w-9 h-9 bg-gray-50 border border-gray-300 rounded-full text-gray-400" style="border:1px green 1px">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </div> 
          </div>
          <div class="font-medium text-gray-800"><!---->
            <p>{{$cont}}. {{$aula->name}}</p> 
            <p class="font-light">{{$aula->description}}</p>
          </div>
        </div> <!---->
        <div class="flex justify-end w-full">
          <ul class="space-y-2">
            @foreach($aula->files as $file)
            <li>
              <button class="inline-flex h-12 items-center justify-between border-0 w-48 focus:outline-none transition ease-in-out duration-150 text-white bg-white hover:bg-gray-100 border-white hover:border-gray-100 text-xs px-2.5  rounded">
                <span class="font-light text-brand">{{$file->description}}</span>

                <img 
                  @if($file->ico_url == '_img/media-player.webp') class="w-10" @else  class="w-6 mr-2" @endif
                  src="{{asset( $file->ico_url )}}" alt="">
                
              </button>
            </li>
            @endforeach
          </ul>
          
        </div>
      </div>
      @php $cont++ @endphp
      @endforeach
    </div>{{-- xpto --}}
    @php $contSessao++ @endphp
    @endforeach

    
    {{-- 
    <div class="mb-8 space-y-1.5">
      <div class="flex items-center space-x-4 h-14 bg-yellow-300 px-3 py-2 rounded-md">
        <div class="text-sm">
          SEÇÃO 3 
        </div> 
        <div class="font-bold invisible">
          Segunda aula de TSO
        </div>
      </div>

      <div class="h-14 px-3 flex items-center justify-between bg-yellow-100">
        <div class="flex items-center space-x-4">
          <div class="flex items-center justify-center w-9 h-9 bg-gray-50 border border-gray-300 rounded-full text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div> 
          <div class="font-medium text-gray-800"><!---->
            <p>4. Segunda aula de TSO</p>
            <p class="font-light"> Nesta aula você aprenderá (na prática) a criar bibliotecas e membros. </p>
          </div>
        </div> <!---->
        <ul class="py-2 space-y-2">
          <li>
            <button class="inline-flex h-12 items-center justify-between border-0 w-48 focus:outline-none transition ease-in-out duration-150 text-white bg-white hover:bg-gray-100 border-white hover:border-gray-100 text-xs px-2.5  rounded">
              <span class="font-light text-brand">2º aula TCO</span>
              <img class="w-6 mr-2" src="{{asset("_img/word.webp")}}" alt="">
            </button>
          </li>
        </ul>
      </div>

      <div class="px-3 flex justify-between bg-yellow-100">
        <div class="flex items-center h-14 space-x-4 py-3">
          <div class="flex items-center justify-center w-9 h-9 bg-gray-50 border border-gray-300 rounded-full text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </div> 
          <div class="font-medium text-gray-800"><!---->
            5. Introdução ao TCO
          </div>
        </div> <!---->
        <ul class="py-2 space-y-2">
          <li>
            <button class="inline-flex h-12 items-center justify-between border-0 w-48 focus:outline-none transition ease-in-out duration-150 text-white bg-white hover:bg-gray-100 border-white hover:border-gray-100 text-xs px-2.5  rounded">
              <span class="font-light text-brand">Instrução ao TSO 2-1</span>
              <img class="w-10" src="{{asset("_img/media-player.webp")}}" alt="">
            </button>
          </li>
        </ul>
      </div>
    </div>
    --}}

    


  

  </div>
  </div>
  
  </div>



  <!-- Footer -->
  {{-- 
  <div class="mx-auto">
    <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-800">
      <div class="sm:flex sm:items-center sm:justify-between">
        <a href="#" target="_blank" class="flex items-center justify-center mb-4 sm:mb-0">
          <img src="{{asset('img/future-logo.png')}}" class="logo object-fill w-44 md:w-48"> 
        </a>
        <div class="flex flex-col sm:flex-row sm:space-x-4 sm:items-center">
          <a class="mx-auto mt-2 mb-4 sm:mt-0 sm:mb-0" href="https://www.facebook.com/Gutinhospersonalizados/?ref=bookmarks"> 
            <img id="face" class="w-24" src="http://osasconamao.com.br/CURSOS/_imagens/face2.jpg">
          </a>
          <a class="flex flex-col sm:flex-row justify-center items-center mx-auto" href="https://www.facebook.com/Gutinhospersonalizados/?ref=bookmarks">
            <img class="w-12" src="https://img.icons8.com/color/344/whatsapp--v1.png" alt="">
            <span class="text-brand font-semibold">WhatsApp</span>
            <span class="text-brand font-light">(11) 98343 2503</span>
          </a>
        </div>
      </div>
      <hr class="mt-6 mb-3 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <span class="flex items-center justify-center sm:justify-end text-sm text-brand sm:text-center dark:text-gray-400 text-center font-medium">
        © 2022 
        <a href="https://flowbite.com" target="_blank" class="hover:underline">&nbsp; By Jorge Gilberto™</a>
      </span>
    </footer>
  </div>
  --}}

</body>
</html>