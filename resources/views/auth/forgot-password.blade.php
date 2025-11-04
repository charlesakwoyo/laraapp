<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
        <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
            <!-- Header -->
            <h2 class="text-2xl font-bold text-center text-indigo-700 mb-2">
                Forgot Your Password?
            </h2>
            <p class="text-sm text-gray-600 text-center mb-6">
                No worries! Enter your email below and we’ll send you a reset link.
            </p>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-green-600 text-sm text-center font-medium" :status="session('status')" />

            <!-- Form -->
            <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                @csrf

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autofocus 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                        placeholder="you@example.com"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <button 
                        type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2.5 rounded-lg transition duration-150"
                    >
                        Send Password Reset Link
                    </button>
                </div>

                <!-- Back to Login -->
                <div class="text-center mt-4">
                    <a href="{{ route('login') }}" class="text-indigo-600 hover:underline text-sm font-medium">
                        Back to Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
