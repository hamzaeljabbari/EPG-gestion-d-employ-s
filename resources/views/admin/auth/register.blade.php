<x-admin-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h2 class="text-4xl font-bold text-center">Recruteur Register</h2>

        <form method="POST" action="{{ route('admin.register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="adresse" :value="__('Adresse')" />

                <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus />
            </div>
            <div>
                <x-label for="logo" :value="__('Logo')" />

                <x-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')" required autofocus />
            </div>
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <div>
                <x-label for="fontion" :value="__('Fontion')" />

                <x-input id="fontion" class="block mt-1 w-full" type="text" name="fontion" :value="old('fontion')" required autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('E-mail')" />

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
                <x-label for="ville" :value="__('ville')" />
                <select id="ville"  class="block mt-1 w-full" name="ville" value="{{ old('ville') }}" required autofocus>
                    <option value="">Selectioner votre ville</option>
                    <option value="fes">fes</option>
                    <option value="casa">casa</option>
                    <option value="tanger">tanger</option>
                    <option value="rabat">rabat</option>
                </select>
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de Passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer Votre Mot De Passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('admin.login') }}">
                    {{ __('Déjà inscrit(e) ?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('S`inscrire') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-admin-guest-layout>
