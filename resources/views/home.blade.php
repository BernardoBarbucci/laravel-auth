@extends('layouts.guest.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    {{-- button-link in base al tipo di login effettuato --}}
                    @auth
                        @if(Auth::user()->isAdmin())
                            <a href="{{ route('') }}" class="btn btn-primary">Admin Dashboard</a>
                        @else
                            <a href="{{ route('guest.dashboard') }}" class="btn btn-primary">Guest Dashboard</a>
                        @endif
                    @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
