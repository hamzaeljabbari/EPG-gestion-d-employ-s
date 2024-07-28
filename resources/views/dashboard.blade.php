<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EPGemploi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }} {{ Auth::user()->name }} - ({{ Auth::user()->email }})
            </h2>
            <div class="p-4">
                <a href="{{ route('create2') }}" class="btn btn-outline-primary">Ajouter un announce</a>
                <a href="{{ route('read2') }}" class="btn btn-outline-success">Mes annonces</a>
            </div>

        </x-slot>
    </x-app-layout>

</body>
</html>
