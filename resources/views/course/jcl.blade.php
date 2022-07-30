@extends('layout')

@section('content')
@include('menutop' ) <!-- menu nav -->
<div class="p-4 lg:p-8">
  <div>
    {{-- Banner Principal --}}
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
            Curso de {{$curso->name}}
          </h1> 
          <div>
            @isset($curso->number_classes)
              <div class="inline-flex items-center px-2 py-0.5  rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                  <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                  <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                    </path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                </svg> {{$curso->number_classes}} {{$curso->number_classes > 1 ? ' aulas':'aula'}}
              </div>
            @endisset
            @isset($curso->hours_classes)
              <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg> 
                {{hourMinuteCustom($curso->hours_classes)}}
              </div>
            @endisset
          </div> 
          <div class="text-gray-600 space-y-3">
            <p>Neste curso você aprenderá <span class="inline-block">(na prática)</span> os comando da linguagem JCL</p>
            <p>Irá montar JOB's de execução de programas que utilizem arquivos, relatórios e executálos</p>
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
              <a href="#start" class="inline-flex items-center justify-center bg-brand border focus:outline-none transition ease-in-out duration-150 text-white bg-brand-green hover:bg-brand-green border-brand hover:border-brand-green text-sm px-4 py-2 rounded">
              Começar
              </a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- end banner -->
    
    <div class="max-w-4xl mx-auto"> <!-- conteúdo da pagina -->
      <div>
        <a name="start"></a>
        <h2 class="text-2xl text-gray-800 font-bold mb-4">
        Conteúdo programático
        </h2> 

        @include('_partials.aula-mainframe-section')

        @php
          
          $contSessao = 2;
          $contAula = 2;
          
        @endphp

        @include('_partials.aulas-database-section')
        
      </div>
    </div>{{-- end conteúdo da pagina--}}
  </div>
</div>
@endsection