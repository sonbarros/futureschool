@extends('layouts.app')
    
@section('content')
<div class="flex justify-center py-20">
    <div class="px-2 w-full max-w-lg">
        <div class="col-md-8">
            <div class="card bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <div class="card-header text-lg leading-9 font-bold text-center text-gray-800 mb-2">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right block text-gray-700 text-sm font-medium mb-2 tracking-wide">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" 
                                    class="form-control @error('email') is-invalid @enderror block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded outline-none" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right py-2 block text-gray-700 text-sm font-medium tracking-wide">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" 
                                    class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded outline-none form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right py-2 block text-gray-700 text-sm font-medium tracking-wide">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" 
                                    class="block w-full transition ease-in-out duration-150 text-gray-800 bg-white placeholder-gray-300 border border-gray-300 focus:border-blue-300 focus:ring focus:ring-opacity-50 focus:ring-blue-200 shadow-sm  text-sm px-4 py-2 rounded outline-none form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-sm cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-blue-600 bg-x-25 bg-gradient-dark-gray hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                    {{ __('Reset Password') }}
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
