<nav class=" bg-white nav_area py-2.5 px-3 sm:px-0 fixed top-0 z-[1000] w-screen shadow-sm">
    <div class="max-w-7xl mx-auto grid grid-cols-2 sm:grid-cols-4 gap-5 content-center">

        {{-- logo --}}
        <div class="shrink-0 flex items-center">
            <a href="{{ route('home') }}">
                <x-application-logo class="block h-10 w-auto fill-current" />
            </a>
        </div>

        {{-- Desktop navigation --}}
        <div class="hidden sm:flex justify-center items-center sm:col-span-2">
            <ul class="flex justify-center items-center gap-6 w-full">
                <li><a class=" text-lg font-bold text-dgreen hover:text-nblue"
                        href="{{route('home')}}">Home</a></li>
                <li><a class=" text-lg font-bold text-dgreen hover:text-nblue"
                        href="{{route('about')}}">About</a></li>
                <li><a class=" text-lg font-bold text-dgreen hover:text-nblue"
                        href="{{route('service')}}">Service</a>
                </li>
                <li><a class=" text-lg font-bold text-dgreen hover:text-nblue"
                        href="{{route('cource')}}">Course</a></li>
                <li><a class=" text-lg font-bold text-dgreen hover:text-nblue"
                        href="{{route('gallery')}}">Gallery</a>
                </li>
                <li><a class=" text-lg font-bold text-dgreen hover:text-nblue"
                        href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>

        {{-- Authintication --}}
        <div class="flex justify-end items-center">
            @if (Route::has('login'))
                <div class="text-right">
                    @auth
                    <!-- Auth Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <span class="iconify text-2xl font-medium text-nblue hover:text-dgreen transition duration-150 ease-in-out" data-icon="mingcute:user-3-fill"></span>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.dashboard')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>

                            </x-slot>
                        </x-dropdown>

                        {{-- Cart --}}
                        <span class="iconify text-2xl font-medium text-nblue hover:text-dgreen transition duration-150 ease-in-out ml-2" data-icon="fluent:cart-24-filled"></span>
                    </div>
                    @else
                        {{-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> --}}

                        @if (Route::has('register'))
                            <a class="text-base text-white font-bold bg-nblue px-5 py-2.5  hover:bg-dgreen rounded-md transiation "
                            href="{{ route('register') }}">SIGN UP</a>
                        @endif
                    @endauth
                </div>
            @endif

            {{-- Mobile dropdown --}}
            <div class="flex sm:hidden">
                @auth
                <span class="iconify text-2xl font-medium text-nblue hover:text-dgreen transition duration-150 ease-in-out mr-2" data-icon="fluent:cart-24-filled"></span>
                @endauth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <span class="iconify text-2xl font-medium text-nblue" data-icon="iconamoon:menu-burger-horizontal-bold"></span>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('home')"> {{ __('Home') }} </x-dropdown-link>
                        <x-dropdown-link :href="route('about')"> {{ __('About') }} </x-dropdown-link>
                        <x-dropdown-link :href="route('service')"> {{ __('Service') }} </x-dropdown-link>
                        <x-dropdown-link :href="route('cource')"> {{ __('Cource') }} </x-dropdown-link>
                        <x-dropdown-link :href="route('gallery')"> {{ __('Gallery') }} </x-dropdown-link>
                        <x-dropdown-link :href="route('contact')"> {{ __('Contact') }} </x-dropdown-link>

                        @auth
                        <x-dropdown-link :href="route('profile.dashboard')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('dashboard')">
                            {{ __('Dashboard') }}
                        </x-dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        @endauth
                    </x-slot>
                </x-dropdown>

            </div>
        </div>
    </div>
</nav>
<!-- ==================Nav-bar-end==================== -->
