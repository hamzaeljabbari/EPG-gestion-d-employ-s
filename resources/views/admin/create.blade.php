
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
            <div class="p-4">
                <a href="{{ route('read') }}" class="btn btn-outline-info">Mes annonces</a>
                </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <h1 class="text-4xl font-bold text-center">Ajouter une annonce</h1>
                        <form method="POST" action="{{ route('store') }}">
                            @csrf

                            <div>
                                <x-label for="poste" :value="__('Poste')" />

                                <x-input id="poste" class="block mt-1 w-full" type="text" name="poste" :value="old('poste')" required autofocus />
                            </div>
                            <div>
                                <x-label for="nom_entreprise" :value="__('Nom de l`entreprise')" />

                                <x-input id="nom_entreprise" class="block mt-1 w-full" type="text" name="nom_entreprise" :value="old('nom_entreprise')" required autofocus />
                            </div>
                            <div>
                                <x-label for="délais" :value="__('Délais')" />

                                <x-input id="délais" class="block mt-1 w-full" type="date" name="délais" :value="old('délais')" required autofocus />
                            </div>
                            <div>
                                <x-label for="description" :value="__('Description')" />

                                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                            </div>
                            <div>
                                <x-label for="site" :value="__('Site')" />

                                <x-input id="site" class="block mt-1 w-full" type="text" name="site" :value="old('site')" required autofocus />
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <x-button class="ml-4">
                                    {{ __('Ajouter') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-admin-layout>
</body>
</html>





