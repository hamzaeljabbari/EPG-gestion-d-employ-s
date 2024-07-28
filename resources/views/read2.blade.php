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
                <a href="{{ route('create2') }}" class="btn btn-outline-info">Ajouter un announce</a>

            </div>
        </x-slot>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <form action="{{ route('search2') }}" method="get">
                            @csrf
                                <input type="search" name="search2" value="">
                                <button type="submit" class="btn btn-outline-success">Rechercher</button>
                        </form>

                        <h1 class="text-4xl font-bold text-center">Mes annonces</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th scope="col">identifiant</th>
                                  <th scope="col">Poste</th>
                                  <th scope="col">Délais</th>
                                  <th scope="col">Description</th>
                                  <th scope="col" colspan="2">Action</th>
                                </tr>
                              </thead>
                        @foreach ($announce2s as $announce2)
                        @if(Auth::user()->id==$announce2->user_id)
                        <tbody>
                            <tr>
                              <td>{{$announce2->id}}</td>
                              <td>{{$announce2->poste2}}</td>
                              <td>{{$announce2->délais2}}</td>
                              <td>{{$announce2->description2}}</td>
                              <td><a href="{{ route('edit2',$announce2->id) }}" class="btn btn-outline-primary">Modifier</a></td>
                              <td><a href="{{ route('delete2',$announce2->id) }}" class="btn btn-outline-danger" onclick="return confirm('êtes-vous sûr de vouloir supprimer?');">Supprimer</a></td>
                            </tr>
                          </tbody>
                            @endif
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>



