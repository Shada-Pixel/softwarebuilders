<x-app-layout>


    <div class="py-12">
        <div class=" mx-6 p-4 sm:p-6 lg:p-8 bg-white rounded min-h-screen">
            <div class=" grid grid-cols-3 md:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-5 ">

                {{-- User quentity --}}
                <div class=" py-8 sm:pt-11 sm:pb-14 border border-dashed border-violet bg-platinum rounded-md">
                    <div class=" flex flex-col items-center justify-center">
                        <div
                            class="w-12 h-12 sm:w-24 sm:h-24 rounded-full bg-thistle flex justify-center items-center">
                            <span class="iconify text-xl sm:text-3xl text-center text-violet inline-block mt-2" data-icon="solar:user-linear"></span>

                        </div>
                        <div class="">
                            <h2 class=" text-4.5xl text-violet font-bold">{{$userqty}}</h2>
                        </div>
                        <div class="">
                            <h2 class=" text-base font-medium text-violet">Users</h2>
                        </div>
                    </div>
                </div>
                {{-- Course qty --}}
                <a href="{{route('courses.index')}}">

                    <div class=" py-8 sm:pt-11 sm:pb-14 border border-dashed border-violet bg-mistyRose rounded-md">
                        <div class=" flex flex-col items-center justify-center">
                            <div
                                class="w-12 h-12 sm:w-24 sm:h-24 rounded-full bg-paleChestnut flex justify-center items-center">
                                <span class="iconify text-xl sm:text-3xl text-center text-candyPink inline-block mt-2" data-icon="ion:book-outline"></span>

                            </div>
                            <div class="">
                                <h2 class=" text-4.5xl text-candyPink font-bold">{{$coursqty}}</h2>
                            </div>
                            <div class="">
                                <h2 class=" text-base font-medium text-candyPink">Courses</h2>
                            </div>
                        </div>
                    </div>
                </a>

                {{-- Service quentity --}}
                <div class=" py-8 sm:pt-11 sm:pb-14 border border-dashed border-violet bg-platinum rounded-md">
                    <div class=" flex flex-col items-center justify-center">
                        <div
                            class="w-12 h-12 sm:w-24 sm:h-24 rounded-full bg-thistle flex justify-center items-center">
                            <span class="iconify text-xl sm:text-3xl text-center text-violet inline-block mt-2" data-icon="icons8:services"></span>

                        </div>
                        <div class="">
                            <h2 class=" text-4.5xl text-violet font-bold">{{$servicesqty}}</h2>
                        </div>
                        <div class="">
                            <h2 class=" text-base font-medium text-violet">Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
