<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="flex justify-center">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
            <h1>Admin Login</h1>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('admin.Login') }}">
            @csrf
            <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" autofocus />
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" :value="old('password')" autocomplete="current-password" />
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            @error('invalid')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
