<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{ Auth::guard('admin')->user()->name }} - ({{ Auth::guard('admin')->user()->email }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h1 class="text-4xl font-bold text-center">Modifier une annonce</h1>
                    <form method="POST" action="{{ route('update',$Announce->id) }}">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-label for="poste" :value="__('Poste')" />

                            <x-input id="poste" class="block mt-1 w-full" type="text" name="poste" :value="old('poste',$Announce->poste)" required autofocus />
                        </div>
                        <div>
                            <x-label for="nom_entreprise" :value="__('Nom de l`entreprise')" />

                            <x-input id="nom_entreprise" class="block mt-1 w-full" type="text" name="nom_entreprise" :value="old('nom_entreprise',$Announce->nom_entreprise)" required autofocus />
                        </div>
                        <div>
                            <x-label for="délais" :value="__('Délais')" />

                            <x-input id="délais" class="block mt-1 w-full" type="date" name="délais" :value="old('délais',$Announce->délais)" required autofocus />
                        </div>
                        <div>
                            <x-label for="description" :value="__('Description')" />

                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description',$Announce->description)" required autofocus />
                        </div>
                        <div>
                            <x-label for="site" :value="__('Site')" />

                            <x-input id="site" class="block mt-1 w-full" type="text" name="site" :value="old('site',$Announce->site)" required autofocus />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Modifier') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>


