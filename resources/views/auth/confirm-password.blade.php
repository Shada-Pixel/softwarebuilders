<x-guest-layout>
    <section class="py-44">
        <div class="max-w-7xl mx-auto">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div class="relative">
                    <x-input-label for="password" :value="__('Password')" />
                    <span class="iconify text-2xl text-nblue mt-2 absolute top-1 right-0 cursor-pointer passwordShowHide" data-icon="bxs:show" onclick="changePassword()"></span>

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex justify-end mt-4">
                    <x-primary-button>
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </section>

</x-guest-layout>
