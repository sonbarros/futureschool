@extends('layout')

@section('content')
@push('style::head')
<style>
  .multiple-ellipsis {
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3; /* Definimos quantas linhas queremos */
    display: -webkit-box;
    overflow: hidden;
    width: 270px; /* Definimos o tamanho máximo do nosso container*/
  }
</style>  
@endpush
@include('menutop' ) <!-- nav -->
<div class="p-4 lg:p-8">
  <div>
    <div class="container mx-auto space-y-10">
      <div>
        <h2 class="font-extrabold text-lg text-gray-900 mb-3" style="color: #f58c30">
          Nossos Cursos OnLine
        </h2> 
        <!-- start grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
          <!-- block -->
          <a href="{{route('curso.show', ['name'=>'mainframe'])}}" class="flex flex-col bg-white rounded-md hover:shadow-xl border border-gray-300 overflow-hidden duration-300 ease-out transform hover:-translate-y-px"> 
            <div class="m-0">
              <img class="object-cover h-52 sm:h-48 w-full sm:-mt-2.5" src="{{asset('storage/_img/zos.png')}}" alt="">
            </div>
            <div class="p-5 space-y-3">
              <div class="space-y-1">
                <h4 class="font-bold text-lg leading-5 line-clamp-2 tracking-tight">
                  Para conectar o Mainframe
                </h4> 
                <div class="text-sm text-gray-500 line-clamp-2"></div>
              </div> 
              <div>
                <div class="inline-flex items-center px-2 py-0.5  rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                      </path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                        </path>
                      </svg> 7 aulas
                </div> 
                <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg> 
                    40min
                </div>
              </div>
            </div> 
            <div class="flex items-center justify-between mt-auto px-4 h-12 border-t border-gray-300">
              <div class="flex space-x-1">
                <div>
                  <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                    Mainframe
                  </div>
                  <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                    TN3270
                  </div>
                  
                </div>
              </div> 
              <div>
                <div class="font-extrabold">
                Gratuito
                </div>
              </div>
            </div>
          </a><!-- end block -->
          <!-- block -->
          <a href="{{route('curso.show', ['name'=>'tso'])}}" class="flex flex-col bg-white rounded-md hover:shadow-xl border border-gray-300 overflow-hidden duration-300 ease-out transform hover:-translate-y-px">
            <div class="m-0">
              <img class="object-cover h-52 sm:h-48 w-full -mt-1.5" src="{{asset('storage/_img/tso.png')}}" alt="">
            </div>
            <div class="p-5 space-y-3">
              <div class="space-y-1">
                <h4 class="font-bold text-lg leading-5 line-clamp-2 tracking-tight">
                    TSO
                </h4> 
                <div class="text-sm text-gray-500 line-clamp-2 multiple-ellipsis">Neste curso você aprenderá utilizar <span class="inline-block">(na prática)</span> o TSO como ferramenta de trabalho, para escrever programas compila-los, executálos e verificar a existência de erros no spool.
                </div>
              </div> 
              <div>
                <div class="inline-flex items-center px-2 py-0.5  rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                  </svg> 4 aulas
                </div> 
                <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg> 
                  40m
                </div>
              </div>
            </div> 
            <div class="flex items-center justify-between mt-auto px-4 h-12 border-t border-gray-300">
              <div class="flex space-x-1">
                <div>
                  <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                    Mainframe
                  </div>
                </div>
              </div> 
              <div>
                <div class="font-extrabold">
                Gratuito
                </div>
              </div>
            </div>
          </a><!-- end block -->
          <!-- block-->
          <a href="{{route('curso.show', ['name'=>'jcl'])}}" class="flex flex-col bg-white rounded-md hover:shadow-xl border border-gray-300 overflow-hidden duration-300 ease-out transform hover:-translate-y-px">
            <div class="m-0">
              <img class="object-cover h-52 sm:h-48 w-full -mt-1.5" src="{{asset('storage/_img/jcl.png')}}" alt="">
            </div>
            <div class="p-5 space-y-3">
              <div class="space-y-1">
                <h4 class="font-bold text-lg leading-5 line-clamp-2 tracking-tight">
                    JCL
                </h4> 
                <div class="text-sm text-gray-500 line-clamp-2 multiple-ellipsis">Neste curso você aprenderá <span class="inline-block">(na prática)</span> os comando da linguagem JCL, para montar JOB's de execução de programas que utilizem arquivos, relatórios e executálos.
                </div>
              </div> 
              <div>
                <div class="inline-flex items-center px-2 py-0.5  rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                  </svg> 12 aulas
                </div> 
                <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg> 
                    6h
                    59m
                </div>
              </div>
            </div> 
            <div class="flex items-center justify-between mt-auto px-4 h-12 border-t border-gray-300">
              <div class="flex space-x-1">
                <div>
                  <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                    Mainframe
                  </div>
                </div>
              </div> 
              <div>
                <div class="font-extrabold">
                Gratuito
                </div>
              </div>
            </div>
          </a><!-- end block -->
          <!-- block -->
          <a href="{{route('curso.show', ['name'=>'cobol'])}}" class="flex flex-col bg-white rounded-md hover:shadow-xl border border-gray-300 overflow-hidden duration-300 ease-out transform hover:-translate-y-px">   
            <div class="m-0">
              <img class="object-cover h-52 sm:h-48 w-full -mt-1.5" src="{{ asset('storage/_img/cobol.png')}}" alt="">
            </div>
            <div class="p-5 space-y-3">
              <div class="space-y-1">
                <h4 class="font-bold text-lg leading-5 line-clamp-2 tracking-tight">
                    Cobol
                </h4> 
                <div class="text-sm text-gray-500 line-clamp-2 multiple-ellipsis">Neste curso você aprenderá <span class="inline-block">(na prática)</span> lógica de programação para construir programas em COBOL Batch, utilizando arquivos sequenciais, relatórios, compilando e executando esses programas.
                </div>
              </div> 
              <div>
                <div class="inline-flex items-center px-2 py-0.5  rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                  </svg> 12 aulas
                </div> 
                <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg> 
                    6h
                    59m
                </div>
              </div>
            </div> 
            <div class="flex items-center justify-between mt-auto px-4 h-12 border-t border-gray-300">
              <div class="flex space-x-1">
                <div>
                  <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                    Mainframe
                  </div>
                </div>
              </div> 
              <div>
                <div class="font-extrabold">
                  Gratuito
                </div>
              </div>
            </div>
          </a><!-- end block -->
          <!-- block -->
          <a href="{{route('curso.show', ['name'=>'cics'])}}" class="flex flex-col bg-white rounded-md hover:shadow-xl border border-gray-300 overflow-hidden duration-300 ease-out transform hover:-translate-y-px">    
            <div class="m-0">
              <img class="object-cover h-52 sm:h-48 w-full -mt-1.5" src="{{asset('storage/_img/cics.png')}}" alt="">
            </div>
            <div class="p-5 space-y-3">
              <div class="space-y-1">
                <h4 class="font-bold text-lg leading-5 line-clamp-2 tracking-tight">
                    CICS
                </h4> 
                <div class="text-sm text-gray-500 line-clamp-2 multiple-ellipsis">Neste curso você aprenderá <span class="inline-block">(na prática)</span> lógica de programação para construir programas pseudo conversacional em COBOL Online no ambiente CICS, criando e utilizando arquivos VSAM, Menus, Mapas de tela, compilando e executando esses programas.</div>
              </div> 
              <div>
                <div class="inline-flex items-center px-2 py-0.5  rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                  </svg> 12 aulas
                </div> 
                <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg> 
                    6h
                    59m
                </div>
              </div>
            </div> 
              <div class="flex items-center justify-between mt-auto px-4 h-12 border-t border-gray-300">
                <div class="flex space-x-1">
                  <div>
                    <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                      Mainframe
                    </div>
                  </div>
                </div> 
                <div>
                  <div class="font-extrabold">
                  Gratuito
                  </div>
                </div>
              </div>
          </a><!-- end block -->
          <!-- block -->
          <a href="{{route('curso.show', ['name'=>'db2'])}}" class="flex flex-col bg-white rounded-md hover:shadow-xl border border-gray-300 overflow-hidden duration-300 ease-out transform hover:-translate-y-px">
            <div class="m-0">
              <img class="object-cover h-52 sm:h-48 w-full -mt-1.5" src="{{asset('storage/_img/db2.png')}}" alt="">
            </div>
            <div class="p-5 space-y-3">
              <div class="space-y-1">
                <h4 class="font-bold text-lg leading-5 line-clamp-2 tracking-tight">
                    DB2
                </h4> 
                <div class="text-sm text-gray-500 line-clamp-2 multiple-ellipsis">Neste curso você aprenderá <span class="inline-block">(na prática)</span> lógica de programação para construir programas pseudo conversacional em COBOL Online no ambiente CICS, criando e utilizando tabelas DB2, Mapas de tela, compilando e executando esses programas.
                </div>
              </div> 
              <div>
                <div class="inline-flex items-center px-2 py-0.5  rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                  </svg> 12 aulas
                </div> 
                <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -ml-0.5 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg> 
                    6h
                    59m
                </div>
              </div>
            </div> 
            <div class="flex items-center justify-between mt-auto px-4 h-12 border-t border-gray-300">
              <div class="flex space-x-1">
                <div>
                  <div class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                    Mainframe
                  </div>
                </div>
              </div> 
              <div>
                <div class="font-extrabold">
                  Gratuito
                </div>
              </div>
            </div>
          </a><!-- end block -->
        </div>
      </div> 
    </div>
  </div>
</div>
  <!-- Footer -->
  <div class="mx-auto">
    <footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-800">
      <div class="sm:flex sm:items-center sm:justify-between">
        <a href="{{route('site.index')}}" target="_blank" class="flex items-center justify-center mb-4 sm:mb-0">
          <img src="{{asset('storage/_img/future-logo.png')}}" class="logo object-fill w-44 md:w-48"> 
        </a>
        <div class="flex flex-col sm:flex-row sm:space-x-4 sm:items-center">
          <a class="mx-auto mt-2 mb-4 sm:mt-0 sm:mb-0" href="https://www.facebook.com/Gutinhospersonalizados/?ref=bookmarks"> 
            <img id="face" class="w-24" src="{{asset('storage/_img/face2.jpg')}}">
          </a>
          <a href="https://api.whatsapp.com/send?phone=551183422503&text=Ol%C3%A1%20vim%20pelo%20site!" class="flex flex-col sm:flex-row justify-center items-center mx-auto" href="https://www.facebook.com/Gutinhospersonalizados/?ref=bookmarks">
            <div class="flex items-center bg-yellow-500 py-2 rounded-md px-2 text-gray-50 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
              <img class="w-12" src="{{asset('storage/_img/whatsapp--v1.png')}}" alt="">
              <span class=" font-semibold ">WhatsApp</span>
              <span class=" font-light ">(11) 98342 2503</span>
            </div>
          </a>

          

        </div>
      </div>
      <hr class="mt-6 mb-3 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <span class="text-gray-600 flex items-center justify-center sm:justify-end text-sm sm:text-center dark:text-gray-400 text-center font-medium">
        © 2022 
        <span>&nbsp; By Jorge Gilberto™</span>
      </span>
    </footer>
  </div>

@endsection
