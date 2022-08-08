<header class="h-16 flex items-center bg-white border-b border-gray-200">
  <div class="w-full px-4 lg:px-8 flex items-center justify-between">
    <a href="/" class="inline-flex items-center justify-center sm:justify-start space-x-3 nuxt-link-exact-active nuxt-link-active w-full">
      <img src="{{asset('storage/_img/future-logo.png')}}" class="logo object-fill w-44 md:w-48"> 
      <span class="hidden md:inline-flex items-center font-medium rounded-full bg-yellow-500 text-gray-50 px-2.5 py-0.5 text-xs">
        BETA
      </span>
    </a> 

    <div class="hidden sm:block">
      <div class="flex items-center space-x-2 lg:space-x-4">
        <a href="{{route('site.index')}}" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> HOME </a>
        <a href="{{route('curso.show', 'tso')}}" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 focus-within:hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> TSO </a>
        <a href="{{route('curso.show', 'jcl')}}" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> JCL </a>
        <a href="{{route('curso.show', 'cobol')}}" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> COBOL </a>
        <a href="{{route('curso.show', 'cics')}}" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> CICS </a>
        <a href="{{route('curso.show', 'db2')}}" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> DB2 </a>
        <a href="https://s3.amazonaws.com/futureschool.com/storage/_arquivos/vitrine2.ppsx" download class="whitespace-nowrap ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-50 bg-yellow-500 hover:bg-blue-600 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> QUEM SOMOS </a>
      </div>
    </div>
    
  </div>
</header>