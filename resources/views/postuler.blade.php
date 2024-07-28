<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>


        <form method="POST" action="{{ route('store3') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
            <div>
                <x-label for="date_de_naissance" :value="__('Date de naissance')" />

                <x-input id="date_de_naissance" class="block mt-1 w-full" type="date" name="date_de_naissance" :value="old('date_de_naissance')" required autofocus />
            </div>
            <div>
                <x-label for="genre" :value="__('Genre')" />
                <select id="genre"  class="block mt-1 w-full" name="genre" value="{{ old('genre') }}" required autofocus>
                    <option value="">Selectioner votre genre</option>
                    <option value="F">Femme</option>
                    <option value="H">Homme</option>
                </select>
            </div>
            <div>
                <x-label for="Téléphone" :value="__('Téléphone')" />

                <x-input id="Téléphone" class="block mt-1 w-full" type="tel" name="Téléphone" :value="old('Téléphone')" required autofocus />
            </div>
            <div>
                <x-label for="ville" :value="__('Ville')" />



                <select id="ville"  class="block mt-1 w-full" name="ville" value="{{ old('ville') }}" required autofocus>
                    @foreach ($villes as $v)
                    {{-- <option value="">Selectioner votre ville</option>
                    <option value="fes">fes</option>
                    <option value="casa">casa</option>
                    <option value="tanger">tanger</option>
                    <option value="rabat">rabat</option> --}}
                    <option value={{ $v->ville }}>{{ $v->ville }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <x-label for="message" :value="__('Votre Message')" />

                <x-input id="message"  class="block mt-1 w-full" type="text" name="message" :value="old('message')" required autofocus />
            </div>
            <div>
                <x-label for="cv" :value="__('Votre CV')" />

                <x-input id="cv" class="block mt-1 w-full" type="file" name="cv" :value="old('cv')" required autofocus />
            </div>
            {{--  --}}<div>
                <x-label for="idn" :value="__('Numéro d`annonce')" />

                <x-input id="idn" class="block mt-1 w-full" type="number" name="idn" :value="old('idn')" placeholder="get  it from the url"  required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-4">
                    {{ __('Je Postule') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
