<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        @livewireStyles
    </head>
    <body>
        @include('navigation-menu-guest')

        <div class="container mt-5 mb-3">
            <div class="row justify-content-md-center">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            @livewire('welcome')
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h2>Example heading <span class="badge bg-primary">New</span></h2>
                </div>
            </div>
        </div>

        @include('footer')
    </body>

    @livewireScripts
</html>
