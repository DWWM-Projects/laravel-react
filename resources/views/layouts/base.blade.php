<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @section('title') {{ config('app.name') }} @show
    </title>

    @vite('resources/css/app.css')
</head>
<body>
    <header class="flex flex-row justify-between items-center text-4xl bg-blue-300 p-6">
        <div>
            <ul class="flex flex-row items-center gap-3">
                <li>
                    <p class="text-6xl">{{ config('app.name') }}</p>
                </li>
                <li>
                    <a href="{{ route('home') }}">Accueil</a>
                </li>
                <li>
                    <a href="#">Jeux</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="flex flex-row gap-3">
                <li>
                    <a href="#">Se connecter</a>
                </li>
                <li>
                    <a href="#">S'inscrire</a>
                </li>
            </ul>
        </div>
    </header>


    @yield('content')

    <footer class="text-center text-3xl bg-blue-300 p-6">
        Copyright &copy {{ now()->year }} - {{ config('app.name') }}
    </footer>

</body>
</html>