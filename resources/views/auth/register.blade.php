<x-admin-layout>
    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-admin-section overflow-hidden shadow-sm sm:rounded-lg p-2">
    
                <div class="flex flex-col p-2 bg-home">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <x-input id="name" placeholder="Vardas" class="bg-gray-800 text-white block text-sm font-medium text-white" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-input id="email" placeholder="El. Paštas" class="bg-gray-800 text-white block text-sm font-medium text-white" type="email" name="email" :value="old('email')" required />
                        </div>

                        <div class="mt-4">
                            <x-input id="password" class="bg-gray-800 text-white block mt-1 w-half"
                                            type="password"
                                            name="password"
                                            placeholder="Slaptažodis"
                                            required autocomplete="new-password" />
                        </div>

                        <div class="mt-4">
                            <x-input id="password_confirmation" class="bg-gray-800 text-white block mt-1 w-half"
                                            type="password"
                                            placeholder="Patvirtinti slaptažodį"
                                            name="password_confirmation" required />
                        </div>
               
                        <div class="sm:col-span-6 pt-4">
                            <x-button class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">
                                {{ __('Registruotis') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>