@foreach ($modulos as $modulo)
  <div class="mb-8 space-y-1.5">
    <div class="flex items-center space-x-4 h-14 bg-gray-300 px-3 py-2 rounded-md">
      <div class="text-sm">
        SEÇÃO {{$contSessao}}
      </div> 
      <div class="font-bold invisible">
        Primeira aula de TSO
      </div>
    </div>
    @foreach($modulo->aulas as $aula)
      <div class="h-full px-2 py-2 sm:px-3 flex flex-col sm:flex-row bg-gray-100">
        <div class="flex sm:space-x-4 min-w-70porcento">
          <div>
            <div class="hidden sm:flex items-center justify-center w-9 h-9 bg-gray-50 border border-gray-300 rounded-full text-gray-400" style="border:1px green 1px">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </div> 
          </div>
          <div class="font-medium text-gray-800"><!---->
            <p>{{$contAula}}. {{$aula->name}}</p> 
            <p class="font-light">{{$aula->description}}</p>
          </div>
        </div> <!---->
        <div class="flex sm:justify-end w-full">
          <ul class="space-y-2 mt-2 sm:mt-0 w-full sm:w-52">
            @foreach($aula->files as $file)
              {{-- @isset($file->url) --}} <!-- apresenta link para download apenas quando o url estive endereço da imagem -->
                <li class="flex">
                  <a href="{{asset( $file->url )}}" download class="inline-flex h-12 items-center justify-between border-0 w-full focus:outline-none transition ease-in-out duration-150 text-white bg-white hover:bg-gray-50 border-white hover:border-gray-50 text-xs px-2.5  rounded">
                    <span class="font-light text-brand">{{$file->description}}</span>
                    <div class="flex items-center sm:justify-end justify-between w-16" style="">
                      <svg  xmlns="http://www.w3.org/2000/svg" class="inline-block sm:hidden h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                      <img 
                      @if($file->icon->url == 'storage/_img/ico-mediaplayer.webp') class="w-10" @else  class="w-6 mr-2" @endif
                      src="https://s3.amazonaws.com/futureschool.com/{{$file->icon->url}}" alt="">
                    </div>
                  </a>
                  <!-- link desenv -->
                  {{-- 
                  <a href="{{ $file->url }}" download class="inline-flex items-center justify-between border-0 w-full focus:outline-none transition ease-in-out duration-150 text-white bg-white hover:bg-gray-50 border-white hover:border-gray-50 text-xs px-2.5  rounded">
                    <span class="font-light text-brand">{{$file->url}}</span>
                    <div class="flex items-center sm:justify-end justify-between w-16" style="">
                      <svg  xmlns="http://www.w3.org/2000/svg" class="inline-block sm:hidden h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                      <img 
                      @if($file->icon->url == 'storage/_img/ico-mediaplayer.webp') class="w-10" @else  class="w-6 mr-2" @endif
                      src="{{asset( $file->icon->url )}}" alt="">
                    </div>
                  </a>
                  <a href="{{route('file.show', ['id'=>$file->id])}}" target="_blank" class="w-1/4 ml-1 inline-flex h-12 items-center justify-center border-0 focus:outline-none transition ease-in-out duration-150 text-brand bg-white hover:bg-gray-50 border-white hover:border-gray-50 text-xs px-2.5  rounded">
                    {{$file->id}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                  </a>
                  --}}
                </li>
              {{-- @endisset --}}
            @endforeach
          </ul>
        </div>
      </div>
    @php $contAula++ @endphp
    @endforeach
  </div>{{-- xpto --}}
  @php $contSessao++ @endphp
@endforeach