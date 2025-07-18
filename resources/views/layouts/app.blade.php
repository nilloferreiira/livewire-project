<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Meu Projeto Laravel' }}</title>

    {{-- imports --}}
    <script src="jquery-3.7.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- CSS simples opcional --}}
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background: #4f46e5;
            /* um roxo bonito */
            color: #fff;
            padding: 1rem 2rem;
            text-align: center;
        }

        main {
            max-width: 800px;
            margin: 2rem auto;
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        footer {
            margin-top: 2rem;
            padding: 1rem;
            text-align: center;
            font-size: 0.9rem;
            color: #666;
        }

        button {
            background-color: #4f46e5;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #3730a3;
        }
    </style>

    {{-- Livewire Styles --}}
    @livewireStyles
</head>

<body>

    <header class="d-flex items-center justify-center w-full">
        <div>
            <h1 class="text-center">Meu Projeto Laravel + Livewire</h1>
            <div>
                <a class="text-white" href="/">Home</a>
                <a class="text-white" href="{{ route('stock.index') }}">Estoque</a>
            </div>
        </div>
    </header>

    <main>
        {{-- Aqui vai o conteúdo de cada página --}}
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} - Meu Projeto Laravel
    </footer>

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>

</html>
