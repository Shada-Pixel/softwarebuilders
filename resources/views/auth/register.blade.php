<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <!-- ==============Team start========== -->
    <section>
        <div class=" bg-lgreen pb-24  pt-10  lg:py-44 px-3 lg:px-0 ">
            <div class="max-w-7xl mx-auto   px-3 md:px-0 slider_gap">
                <div class="grid lg:grid-cols-2 gap-5 lg:gap-20">
                    <div class="">
                        <img class=" w-full" src="./img/singin.jpg" alt="Signin cover">
                    </div>
                    <div class="">
                        <div class="">
                            <h2 class="text-2xl lg:text-4.5xl text-nblue font-bold text-center uppercase">Welcome
                            </h2>
                            <p class="text-base font-normal text-center text-nblue mt-2">Please enter your details to
                                register</p>
                        </div>

                        <div class=" mt-20">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class=" flex items-center signin_line mt-7">
                                    <div class="">
                                        <p class=" text-2xl text-nblue mt-2"><iconify-icon
                                                icon="mdi:user"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <input
                                            class=" text-lg text-nblue  bg-transparent w-full px-4 py-2 focus:outline-none"
                                            type="text" placeholder="Full name">
                                    </div>
                                </div>
                                <div class=" flex items-center signin_line mt-7">
                                    <div class="">
                                        <p class=" text-2xl text-nblue mt-2"><iconify-icon icon="ic:round-email"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <input
                                            class=" text-lg text-nblue  bg-transparent w-full px-4 py-2 focus:outline-none"
                                            type="text" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class=" flex items-center signin_line mt-7">
                                    <div class="">
                                        <p class=" text-2xl text-nblue mt-2"><iconify-icon
                                                icon="material-symbols:lock"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <input
                                            class=" text-lg text-nblue  bg-transparent w-full px-4 py-2 focus:outline-none"
                                            type="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class=" flex items-center signin_line mt-7">
                                    <div class="">
                                        <p class=" text-2xl text-nblue mt-2"><iconify-icon
                                                icon="material-symbols:lock"></iconify-icon>
                                        </p>
                                    </div>
                                    <div class="">
                                        <input
                                            class=" text-lg text-nblue  bg-transparent w-full px-4 py-2 focus:outline-none"
                                            type="password" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class=" mt-5 flex justify-between items-center">
                                    <div class=" flex items-center">
                                        <div class=" mr-2">
                                            <input class="" type="checkbox">
                                        </div>
                                        <div class="">
                                            <p class="text-sm md:text-base text-nblue">I have accepted to the <a href="termscondition.html" class=" text-dgreen">terms and conditions</a></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-12">
                                    <button type=" submit"
                                        class=" text-white w-full bg-dgreen py-2.5 px-5 text-base font-bold tracking-wider rounded-md">SIGN
                                        IN</button>
                                </div>
                            </form>
                        </div>
                        <div class="mt-3">
                            <p class=" text-base text-nblue text-center">Already Have an account? <a href="{{ route('login') }}" class=" text-dgreen"> Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==============Team start========== -->
</x-guest-layout>
