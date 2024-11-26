<x-auth-layout>
    <form method="POST" action="/forgot-password">
        @csrf
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">Forgot Password</h2>
        <p class="text-center text-sm text-gray-600 mb-6">
            Enter your email address below, and we'll send you a link to reset your password.
        </p>

        <div class="space-y-6">
            <!-- Email -->
            <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-1">
                    <x-form-input name="email" id="email" type="email" :value="old('email')" required
                        class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" />
                    <x-form-error name="email" />
                </div>
            </x-form-field>
        </div>

        <div class="mt-8">
            <x-form-button>
                Send Password Reset Link
            </x-form-button>
        </div>

        <p class="mt-6 text-center text-sm text-gray-500">
            Remember your password?
            <a href="{{ url('/login') }}"
                class="transition colors duration-300 font-medium text-green-900 hover:text-green-700">Sign in</a>
        </p>
    </form>
</x-auth-layout>
