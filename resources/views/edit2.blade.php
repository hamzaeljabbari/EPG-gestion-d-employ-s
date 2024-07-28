<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{ Auth::user()->name }} - ({{ Auth::user()->email }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                    <h1 class="text-4xl font-bold text-center">Modifier une annonce</h1>
                    <form method="POST" action="{{ route('update2',$Announce2->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div>
                            <x-label for="poste2" :value="__('Poste')" />

                            <x-input id="poste2" class="block mt-1 w-full" type="text" name="poste2" :value="old('poste2',$Announce2->poste2)" required autofocus />
                        </div>
                        <div>
                            <x-label for="délais2" :value="__('Délais')" />

                            <x-input id="délais2" class="block mt-1 w-full" type="date" name="délais2" :value="old('délais2',$Announce2->délais2)" required autofocus />
                        </div>
                        <div>
                            <x-label for="description2" :value="__('Description')" />

                            <x-input id="description2" class="block mt-1 w-full" type="text" name="description2" :value="old('description2',$Announce2->description2)" required autofocus />
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
</x-app-layout>


