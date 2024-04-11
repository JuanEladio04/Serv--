<x-guest-layout>
    <x-customInputForm>
        <h1 class="text-4xl text-center">
            Registro
        </h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid sm:grid-cols-2 gap-5">
                <!-- Name -->
                <div class="input-wrapper mt-6">
                    <input type="text" id="name" name="name" :value="('name')"  autofocus
                        autocomplete="name">
                    <label for="name">Nombre</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- LastName -->
                <div class="input-wrapper mt-6">
                    <input type="text" id="last_name" name="last_name" :value="('last_name')"  autofocus
                        autocomplete="last_name">
                    <label for="last_name">Apellidos</label>
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>
            </div>

            <!-- Email Address -->
            <div class="input-wrapper mt-6">
                <input type="email" id="email" name="email" :value="old('email')"  autofocus
                    autocomplete="email">
                <label for="email">Correo electrónico</label>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="input-wrapper mt-6">
                <input type="password" id="password" name="password"  autocomplete="new-password">
                <label for="password">Contraseña</label>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="input-wrapper mt-6">
                <input type="password_confirmation" id="password_confirmation" name="password_confirmation" 
                    autocomplete="new-password_confirmation">
                <label for="password_confirmation">Confirmar contraseña</label>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="grid sm:grid-cols-2 gap-5">
                <!-- Name -->
                <div class="input-wrapper mt-6">
                    <input type="number" id="phone_number" name="phone_number" :value="('phone_number')"  autofocus
                        autocomplete="phone_number">
                    <label for="phone_number">Número de</label>
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                </div>

                <!-- LastName -->
                <div class="input-wrapper mt-6">
                    <input type="date" id="birth_date" name="birth_date" :value="('birth_date')"  autofocus
                        autocomplete="birth_date">
                    <label for="birth_date">Fecha de nacimiento</label>
                    <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                </div>
            </div>

            <div class="flex items-center justify-center mt-6">
                <a href="{{ route('login') }}">
                    {{ ('¿Ya estás registrado?') }}
                </a>
            </div>

            <button type="submit" class="bg-cAccent color-cPrimary text-2xl w-full cSubTitle mt-10">
                Registrarse
            </button>
        </form>
    </x-customInputForm>
</x-guest-layout>
