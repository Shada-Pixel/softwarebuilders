{{-- Profile navigation --}}
<div class="col-span-4">
    <div class=" p-6 border border-lgreen rounded-md">
        <div class="">
            <p class=" text-lg text-nblue font-semibold uppercase text-center md:text-left">WELCOME,
                HUSSSAIN SABBIR</p>
        </div>
        <div class="mt-7">
            <div class="">
                <ul class="flex lg:block justify-around items-center">
                    <li class=" lg:border-b border-b-slate-400 sm:my-3 sm:pb-3">
                        <a href="{{route('profile.dashboard')}}"
                            class="text-lg md:2xl lg:text-xl text-nblue font-medium hover:text-dgreen">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="mingcute:home-3-line"></span>
                                <div class="hidden lg:flex">Dashboard</div>
                            </div>
                        </a>
                    </li>
                    <li class=" lg:border-b border-b-slate-400 sm:my-3 sm:pb-3">
                        <a href="{{route('profile.index')}}"
                            class=" text-lg md:2xl lg:text-xl text-nblue font-medium hover:text-dgreen">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="bxs:user"></span>
                                <div class="hidden lg:flex">My Profile</div>
                            </div>
                        </a>
                    </li>
                    <li class=" lg:border-b border-b-slate-400 sm:my-3 sm:pb-3">
                        <a href="{{route('profile.ecources')}}"
                            class=" text-lg md:2xl lg:text-xl  text-nblue font-medium hover:text-dgreen">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="ion:book-outline"></span>
                                <div class="hidden lg:flex">Enrolled Courses</div>
                            </div>
                        </a>
                    </li>
                    <li class="sm:my-3">
                        <a href="{{route('profile.mycource')}}"
                            class=" text-lg md:2xl lg:text-xl  text-nblue font-medium hover:text-dgreen">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="icon-park-outline:new-computer"></span>
                                <div class="hidden lg:flex">My Courses</div>
                            </div>
                        </a>
                    </li>
                    <h2 class=" text-base text-nblue lg:my-6 hidden lg:flex">USER</h2>
                    <li class=" lg:border-b border-b-slate-400 sm:my-3 sm:pb-3">
                        <a href="{{route('profile.edit')}}"
                            class=" text-lg md:2xl lg:text-xl  text-nblue font-medium hover:text-dgreen">
                            <div class="flex items-center">
                                <span class="iconify mr-2" data-icon="solar:settings-bold"></span>
                                <div class="hidden lg:flex">Settings</div>
                            </div>
                        </a>
                    </li>
                    <li class=" sm:my-3 sm:pb-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class=" text-lg md:2xl lg:text-xl  text-nblue font-medium hover:text-dgreen" onclick="event.preventDefault(); this.closest('form').submit();">
                                <div class="flex items-center">
                                    <span class="iconify mr-2" data-icon="fe:logout"></span>
                                    <div class="hidden lg:flex">Log out</div>
                                </div>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
