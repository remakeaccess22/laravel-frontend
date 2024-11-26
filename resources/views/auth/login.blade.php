<x-auth-layout>
    <form method="POST" action="/login">
        @csrf
        {{-- <a href="{{ Vite::asset('') }}" alt="Logo" /> --}}
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">Sign in to your account</h2>

        <div class="space-y-6">
            <div class="grid grid-cols-1 gap-4">
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-1">
                        <x-form-input name="email" id="email" type="email" :value="old('email')" required />
                        <x-form-error name="email" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-1">
                        <x-form-input name="password" id="password" type="password" required />
                        <x-form-error name="password" />
                    </div>
                </x-form-field>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between">
            <a href=" {{ url('/forgot-password') }}"
                class="text-sm text-green-900 hover:text-green-700 font-medium transition-colors duration-300">Forgot
                password?</a>
        </div>

        <div class="mt-8">
            <x-form-button>
                Login
            </x-form-button>
        </div>

        <p class="mt-6 text-center text-sm text-gray-500">
            Don’t have an account?
            <a href="{{ url('/register') }}" class="font-medium text-green-900 hover:text-green-700">Create one</a>
        </p>
    </form>
</x-auth-layout>
