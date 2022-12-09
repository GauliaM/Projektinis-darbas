<x-guest-layout>
    <x-auth-card>
        <div class="mb-4 text-sm text-gray-600">
            <!-- {{ __('Pamiršai savo slaptažodį? Jokių problemų. Tiesiog praneškite mums savo el. pašto adresą ir mes el. paštu atsiųsime jums slaptažodžio nustatymo iš naujo nuorodą, kuri leis jums pasirinkti naują.') }} -->
            {{ __('Dėl slaptažodžio priminimo susisiekite su administratoriumi.') }}
        </div>

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <!-- <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <x-label for="email" :value="__('El. paštas')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('El. pašto slaptažodžio nustatymo iš naujo nuoroda') }}
                </x-button>
            </div>
        </form> -->
    </x-auth-card>
</x-guest-layout>
