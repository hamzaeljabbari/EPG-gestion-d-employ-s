
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
    <x-admin-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }} {{ Auth::guard('admin')->user()->name }} - ({{ Auth::guard('admin')->user()->email }})
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <h1 class="text-4xl font-bold text-center">Resultats</h1>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                  <th scope="col">identifiant</th>
                                  <th scope="col">Poste</th>
                                  <th scope="col">Nom d'entreprise</th>
                                  <th scope="col">Délais</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Site</th>
                                  <th scope="col" colspan="2">Action</th>
                                </tr>
                        @foreach ($searcha as $announce)
                        @if(Auth::guard('admin')->user()->id==$announce->admin_id)
                        <tbody>
                            <tr>
                              <td>{{$announce->id}}</td>
                              <td>{{$announce->poste}}</td>
                              <td>{{$announce->nom_entreprise}}</td>
                              <td>{{$announce->délais}}</td>
                              <td>{{$announce->description}}</td>
                              <td>{{$announce->site}}</td>
                              <td><a href="{{ route('edit',$announce->id) }}" class="btn btn-outline-primary">Modifier</a></td>
                              <td><a href="{{ route('delete',$announce->id) }}" class="btn btn-outline-danger" onclick="return confirm('êtes-vous sûr de vouloir supprimer?');">Supprimer</a></td>
                            </tr>
                          </tbody>
                            @endif
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>





