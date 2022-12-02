@extends('configs.layout')

@section('content')
<h1 class="text-xl font-bold text-gray-900 dark:text-gray-50 mb-6">Meu perfil</h1>
<div class="grid grid-cols-1 gap-5">
  <div>
    <label class="block text-gray-700 dark:text-gray-300 text-sm font-semibold dark:font-medium mb-2" for="avatar">Avatar</label>
    <div class="flex space-x-6">
      <div class="relative inline-block text-left">
        <div type="button" class="flex items-center leading-5 transition rounded-full h-24 w-24 justify-center bg-yellow-500 text-gray-50 text-sm leading-none overflow-hidden border-0 font-semibold"><span></span>{{$user->nameInitials}}
        <!----></div> </div>

      <img src="https://api.laravue.com.br/storage/users/1171/images/Kql0QIKFsyV1UyxNo63poRwLfGLPdMAxlmq1fjo4.jpg" class="w-24 h-24 shrink-0 rounded-full hidden">
      <div class="hidden">
        <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Uma imagem de pelo menos 100x100 pixels tá de boa 👍🏼.</p>
        <div class="flex items-center space-x-2">
          <div class="relative">
            <input type="file" class="absolute top-1 left-1 w-5 h-5 opacity-0">
            <button class="inline-flex items-center justify-center border focus:outline-none transition ease-in-out font-medium dark:font-semibold rounded-lg duration-150 text-gray-700 dark:text-gray-300 bg-white dark:bg-transparent hover:bg-gray-50 dark:hover:bg-white dark:hover:bg-opacity-5 border-gray-300 dark:border-gray-700 hover:border-gray-400 dark:hover:border-gray-600 text-sm px-3 py-2 leading-4 relative" type="button"><!---->Alterar</button></div>
            <button class="inline-flex items-center justify-center border focus:outline-none transition ease-in-out font-medium dark:font-semibold rounded-lg duration-150 text-gray-700 dark:text-gray-400 border-transparent text-sm px-3 py-2 leading-4 text-red-400 hover:text-red-500 dark:text-red-400 dark:hover:text-red-500 text-xs" type="button"><!----><svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg> Remover</button></div>
      </div>
              
    </div><!---->
  </div>
              
  <div></div>
  <form action="{{route('configs.update.user')}}" method="POST">
    @method('PUT')
    @csrf
    <label class="block text-gray-700 dark:text-gray-300 text-sm font-semibold dark:font-medium mb-2" for="firstName">Primeiro nome</label>
    <input id="firstName" name="name" value="{{$user->name}}" class="block w-10/12 transition ease-in-out focus:outline-none shadow-sm duration-150 disabled:bg-gray-100 disabled:text-gray-500 rounded-lg text-gray-900 dark:text-gray-50 bg-white dark:bg-gray-700 placeholder-gray-400 border border-gray-200 dark:border-gray-700 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 text-sm px-4 py-3"><!---->
    <button class="mt-5 inline-flex items-center justify-center border focus:outline-none transition ease-in-out font-medium dark:font-semibold rounded-lg duration-150 text-white dark:text-teal-900 bg-yellow-500 hover:bg-yellow-600 border-yellow-500 hover:border-yellow-600 dark:bg-yellow-400 dark:hover:bg-teal-500 dark:border-teal-400 dark:hover:border-teal-500 text-sm px-4 py-2" type="submit"><!---->Atualizar perfil</button>
  </form>
  <div class="hidden">
    <label class="block text-gray-700 dark:text-gray-300 text-sm font-semibold dark:font-medium mb-2" for="lastName">Sobrenome</label>
    <input id="lastName" class="block w-full transition ease-in-out focus:outline-none shadow-sm duration-150 disabled:bg-gray-100 disabled:text-gray-500 rounded-lg text-gray-900 dark:text-gray-50 bg-white dark:bg-gray-700 placeholder-gray-400 border border-gray-200 dark:border-gray-700 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 text-sm px-4 py-3"><!---->
  </div>
    <div class="col-span-2 hidden">
      <button class="inline-flex items-center justify-center border focus:outline-none transition ease-in-out font-medium dark:font-semibold rounded-lg duration-150 text-white dark:text-teal-900 bg-yellow-500 hover:bg-yellow-600 border-yellow-500 hover:border-yellow-600 dark:bg-yellow-400 dark:hover:bg-teal-500 dark:border-teal-400 dark:hover:border-teal-500 text-sm px-4 py-2" type="submit"><!---->Atualizar perfil</button>
    </div>
</div>
@endsection