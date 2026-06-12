<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-center text-sm text-gray-600" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-gray-700" />

            <x-text-input id="email"
                class="block mt-1 w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                type="email"
                name="email"
                :value="old('email')"
                required autofocus />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-gray-700" />

            <x-text-input id="password"
                class="block mt-1 w-full rounded-lg border-gray-300 focus:border-pink-500 focus:ring-pink-500"
                type="password"
                name="password"
                required />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember -->
        <div class="flex items-center justify-between mt-3">
            <label class="flex items-center text-sm text-gray-600">
                <input type="checkbox"
                       name="remember"
                       class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                <span class="ms-2">Remember me</span>
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                   class="text-sm text-blue-600 hover:text-pink-500 transition">
                    Forgot?
                </a>
            @endif
        </div>

        <!-- Button -->
        <div class="flex justify-end mt-4">
            <button type="submit"
                class="px-5 py-2 bg-gradient-to-r from-blue-500 to-pink-500 text-white rounded-lg shadow hover:opacity-90 transition">
                Log in
            </button>
        </div>
    </form>
</x-guest-layout>