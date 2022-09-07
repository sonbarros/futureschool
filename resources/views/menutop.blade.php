<header class="h-16 flex items-center bg-white border-b border-gray-200">
  <div class="w-full px-4 lg:px-8 flex items-center justify-between">
    <div>
      <a href="/" class="inline-flex items-center justify-start sm:justify-start space-x-3 nuxt-link-exact-active nuxt-link-active w-full">
        <img src="{{asset('storage/_img/future-logo.png')}}" class="logo object-fill w-44 md:w-48"> 
        <span class="hidden md:inline-flex items-center font-medium rounded-full bg-yellow-500 text-gray-50 px-2.5 py-0.5 text-xs">
          BETA
        </span>
      </a> 
    </div>
    <div class="">
      <div class="flex items-center space-x-2 lg:space-x-4">
        
        {{-- 
        <a href="{{route('site.index')}}" class="ml-4 px-3 py-2 rounded-sm text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> HOME </a>
        <a href="{{route('curso.show', 'tso')}}" class="ml-4 px-3 py-2 rounded-sm text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 focus-within:hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> TSO </a>
        <a href="{{route('curso.show', 'jcl')}}" class="ml-4 px-3 py-2 rounded-sm text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> JCL </a>
        <a href="{{route('curso.show', 'cobol')}}" class="ml-4 px-3 py-2 rounded-sm text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> COBOL </a>
        <a href="{{route('curso.show', 'cics')}}" class="ml-4 px-3 py-2 rounded-sm text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> CICS </a>
        <a href="{{route('curso.show', 'db2')}}" class="ml-4 px-3 py-2 rounded-sm text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> DB2 </a>
        <a href="https://s3.amazonaws.com/futureschool.com/storage/_arquivos/vitrine2.ppsx" download class="whitespace-nowrap ml-4 px-3 py-2 rounded-sm text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> QUEM SOMOS </a>
        --}}
        <a href="https://s3.amazonaws.com/futureschool.com/storage/_arquivos/vitrine2.ppsx" class="text-gray-600 text-sm pr-0 sm:pr-0 whitespace-nowrap hidden sm:flex">Quem somos</a>
        @guest
          <span class="text-gray-600 text-sm  pr-0 sm:pr-0 hidden sm:flex">|</span>
          <a href="{{route('login')}}" class="text-gray-600 text-sm pr-0 sm:pr-0">Entrar</a>
          <a href="{{route('register')}}" class="ml-4 px-3 py-2 rounded-sm sm:rounded text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Cadastrar </a>    
        @endguest
        @auth
          <div id="app">
            <Dropdown text="AB" rounded-full no-icon><!-- Component Vue -->
              <div class="flex-shrink-0 block px-4 py-3">
                <div class="flex items-center">
                  <div>
                    <div class="inline-flex items-center justify-center bg-yellow-500 rounded-full overflow-hidden h-10 w-10">
                      <span class="text-xs leading-none text-white text-base"> {{$user->nameInitials}} </span>
                    </div>
                  </div> 
                  <div class="ml-3 truncate">
                    <div class="text-sm font-medium text-gray-700 truncate">
                    {{$user->name}}
                    </div> 
                    <div class="text-xs text-gray-500 font-medium truncate">
                      {{$user->email}}
                    </div>
                  </div>
                </div>
              </div>
              <div class="border-t my-1 border-gray-100"></div>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="group flex items-center block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                  <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 group-hover:text-gray-500 mr-3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                  </svg>
                  Logout
                </button>
              </form>
              
              {{-- 
              <DropdownItem href="http://google.com">Item 1</DropdownItem>
              <DropdownItem>Item 2</DropdownItem>
              <DropdownItem>Item 3</DropdownItem>
              <DropdownItem>Item 4</DropdownItem>
              <DropdownItem>Item 4</DropdownItem>
              --}}
            </Dropdown>
          </div>

        {{-- 
        <div class="relative inline-block text-left">
          <div class="cursor-pointer inline-flex items-center justify-center bg-gray-500 rounded-full overflow-hidden h-8 w-8">
            <span class="text-xs leading-none text-white text-sm"> AB </span>
          </div> 
          <div class="absolute top-full right-0 ml-2 w-56 rounded-md shadow-lg bg-white z-50 mt-2" style="display: flex;"><div class="relative py-1"><div class="flex-shrink-0 block px-4 py-3"><div class="flex items-center"><div><div class="inline-flex items-center justify-center bg-gray-500 rounded-full overflow-hidden h-10 w-10"><span class="text-xs leading-none text-white text-base"> AB </span></div></div> <div class="ml-3 truncate"><div class="text-sm font-medium text-gray-700 truncate">
                Anderson
              </div> 
              <div class="text-xs text-gray-500 font-medium truncate">
                anderson21br@gmail.com
              </div>
            </div>
          </div>
        </div> 
        <div class="border-t my-1 border-gray-100">
          </div> 
          <button class="group flex items-center block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-900"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" class="w-6 h-6 text-gray-400 group-hover:text-gray-500 mr-3"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>

          Minha conta
        </button> <button class="group flex items-center block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-900"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 group-hover:text-gray-500 mr-3"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>

          Meus cursos
        </button> <button class="group flex items-center block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-900"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400 group-hover:text-gray-500 mr-3"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>

          Logout
        </button></div></div></div>
        --}}
        @endauth
        
      </div>
    </div>
    
  </div>
</header>



