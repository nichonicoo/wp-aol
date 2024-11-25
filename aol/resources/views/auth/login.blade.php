<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="text-lg font-semibold text-gray-700" />
                <x-text-input id="email" class="block mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" class="text-lg font-semibold text-gray-700" />
                <x-text-input id="password" class="block mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <label for="remember_me" class="inline-flex items-center text-sm text-gray-600">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Login Button -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            <!-- Return to Home Button -->
            <div class="flex items-center justify-between mt-4">
                <a href="{{ route('home.index') }}" class="text-sm text-indigo-600 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    {{ __('Return to Home') }}
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
