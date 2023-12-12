<x-guest-layout>
<<<<<<< HEAD
    <div class="mb-4 text-sm text-gray-600">
        {{ __('frontend.This is a secure area of the application. Please confirm your password before continuing.') }}
=======
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
>>>>>>> origin/feature-branch
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
<<<<<<< HEAD
            <x-input-label for="password" :value="__('frontend.Password')" />
=======
            <x-input-label for="password" :value="__('Password')" />
>>>>>>> origin/feature-branch

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
<<<<<<< HEAD
                {{ __('frontend.Confirm') }}
=======
                {{ __('Confirm') }}
>>>>>>> origin/feature-branch
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
