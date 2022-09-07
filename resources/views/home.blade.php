@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex bg-green-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Você está logado!!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
