@extends('layouts.app')
@section('content')
<div class="container mx-auto max-w-3xl">
    <div class="row justify-content-center">
        <div class="col-md-8 p-2">
            <div class="card bg-gray-100 shadow-sm">
                <div class="card-header h-14 flex items-center rounded-sm px-2 text-gray-900">{{ __('Reset Password') }}</div>

                <div class="card-body bg-white">
                    @if (session('status'))
                        <div class="alert alert-success flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                            <p>{{ session('status') }}</p>
                            
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row flex items-center justify-center w-full py-4">
                            <div class="col-md-6 p-2 sm:p-0 flex flex-col sm:flex-row w-full">
                                <div class="flex items-center sm:justify-end sm:w-4/12 text-right my-1">
                                    <p for="email" class="col-md-4 col-form-label text-md-right  text-right pr-4 whitespace-nowrap">{{ __('Endereço de E-Mail: ') }}</p>
                                </div>
                                <div class="flex flex-col w-full sm:w-8/12">
                                    <input id="email" type="email" class="block w-11/12 sm:w-10/12 transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded-sm outline-none form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="text-xs py-1.5 text-red-600">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 flex justify-start sm:justify-end p-2 sm:p-0">
                            <div class="col-md-6 offset-md-4 py-2 sm:w-8/12">
                                <button type="submit" class="btn btn-primary bg-blue-600 text-white py-2 px-4 font-semibold">
                                    {{ __('Envie link para reset de senha') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
