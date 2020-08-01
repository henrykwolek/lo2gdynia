@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Zweryfikuj adres email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Sprawdź swój email aby zweryfikować konto') }}
                        </div>
                    @endif

                    {{ __('Aby zakończyć rejestracje, sprawdź skrzynke email aby zweryfikować konto') }}
                    {{ __('Jeśli nie otrzymałem emaila') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kliknij aby otrzymać nowy email') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
