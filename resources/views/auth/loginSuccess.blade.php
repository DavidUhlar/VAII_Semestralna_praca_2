@extends('layouts.app-master')

@section('content')

    @auth

        <div class="centerNadpis">
            <h1>Boli ste úspešne prihlásený</h1>
        </div>
    @endauth

    <script> setTimeout(function(){window.location="{{ route('home.index') }}"}, 2250); </script>

@endsection
