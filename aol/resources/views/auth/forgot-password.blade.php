<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Email')" class="text-lg font-semibold text-gray-700" />
                <x-text-input id="email" class="block mt-2 w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                              type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Email Password Reset Link Button -->
            <div class="flex items-center justify-between mt-4">
                <x-primary-button class="bg-indigo-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>

            <!-- Return to Login Button -->
            <div class="flex items-center justify-between mt-4">
                <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    {{ __('Return to Login') }}
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
