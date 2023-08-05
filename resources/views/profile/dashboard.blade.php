<x-guest-layout>
    <!-- ==============Course Details start===================== -->
    <section class="bg-white pt-14">
        <div class="pt-20 sm:pt-12 px-3 lg:px-0">


            @include('profile.partials.profile-heading')

    </section>
    <!-- ==============Course Details end===================== -->
    <!-- ===============instructor-dashboard-item start================ -->
    <section class="bg-white pt-6 lg:pt-12">
        <div class=" pb-24 lg:pb-44 px-3 lg:px-0">
            <div class="max-w-7xl mx-auto">
                <div class="lg:grid lg:grid-cols-12 gap-10">

                    @include('profile.partials.profile-navigation')


                    <div class=" col-span-8">
                        <div class="p-5 border border-lgreen rounded-md">
                            <div class=" border-b border-b-slate-400 pb-3">
                                <h2 class=" text-xl text-nblue font-bold">Dashboard</h2>
                            </div>
                            <div class="mt-5">
                                <div class=" grid md:grid-cols-2 lg:grid-cols-3  gap-5 ">

                                    @role('admin')

                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-platinum rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-thistle flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-violet inline-block mt-2" data-icon="ion:book-outline"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-violet font-bold">{{$students}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-violet">Students</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-oldLace rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-dutchWhite flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-tumbleweed inline-block mt-2" data-icon="mi:computer"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-tumbleweed font-bold">{{$runningbatch}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-tumbleweed">Running Batches</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-oldLace rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-dutchWhite flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-tumbleweed inline-block mt-2" data-icon="mi:computer"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-tumbleweed font-bold">{{$upcommingbatche}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-tumbleweed">Upcomming Batches</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-oldLace rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-dutchWhite flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-tumbleweed inline-block mt-2" data-icon="mi:computer"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-tumbleweed font-bold">{{$totalcourse}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-tumbleweed">Courses</h2>
                                            </div>
                                        </div>
                                    </div>
                                    @endrole

                                    @role('instructor')
                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-mistyRose rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-paleChestnut flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-candyPink inline-block mt-2" data-icon="iconamoon:certificate-badge"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-candyPink font-bold">{{$mycourses}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-candyPink">My Courses</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-mistyRose rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-paleChestnut flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-candyPink inline-block mt-2" data-icon="iconamoon:certificate-badge"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-candyPink font-bold">{{$myactivecourses}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-candyPink">Active Courses</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-mistyRose rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-paleChestnut flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-candyPink inline-block mt-2" data-icon="iconamoon:certificate-badge"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-candyPink font-bold">{{$mypendingcourses}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-candyPink">Pending Courses</h2>
                                            </div>
                                        </div>
                                    </div>
                                    @endrole
                                    @role('student')
                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-mistyRose rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-paleChestnut flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-candyPink inline-block mt-2" data-icon="iconamoon:certificate-badge"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-candyPink font-bold">{{$enrolledcourses}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-candyPink">Enrolled Courses</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-mistyRose rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-paleChestnut flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-candyPink inline-block mt-2" data-icon="iconamoon:certificate-badge"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-candyPink font-bold">{{$activeenroll}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-candyPink">Running Courses</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-11 pb-14 border border-dashed border-violet bg-mistyRose rounded-md">
                                        <div class=" flex flex-col items-center justify-center">
                                            <div
                                                class=" w-24 h-24 rounded-full bg-paleChestnut flex justify-center items-center">
                                                <span class="iconify text-3xl text-center text-candyPink inline-block mt-2" data-icon="iconamoon:certificate-badge"></span>

                                            </div>
                                            <div class="">
                                                <h2 class=" text-4.5xl text-candyPink font-bold">{{$pendingenroll}}</h2>
                                            </div>
                                            <div class="">
                                                <h2 class=" text-base font-medium text-candyPink">Pending Enrollment</h2>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @endrole
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ===============instructor-dashboard-item end================ -->

</x-guest-layout>
