<x-guest-layout>
    <!-- ==============Course Details start===================== -->
    <section class="bg-white pt-14">
        <div class="pt-20 sm:pt-12 px-3 lg:px-0">

            @include('profile.partials.profile-heading')
        </div>
    </section>
    <!-- ==============Course Details end===================== -->
    <!-- ===============instructor-dashboard-item start================ -->
    <section class="bg-white pt-6 lg:pt-12">
        <div class=" pb-24 lg:pb-44 px-3 lg:px-0">
            <div class="max-w-7xl mx-auto">
                <div class="lg:grid lg:grid-cols-12 gap-10">

                    @include('profile.partials.profile-navigation')

                    {{-- This content will change -------------------------------------------------------------------------- --}}
                    <div class=" col-span-8 mt-3 lg:mt-0">
                        <div class="p-5 border rounded-md shadow">
                            <div class=" border-b border-b-slate-400 pb-3">
                                <h2 class=" text-xl text-nblue font-bold">My Profile</h2>
                            </div>
                            <div class="mt-5">
                                <div class="mb-4 border-b pb-1 lg:pb-0 lg:border-none border-b-nblue">
                                    <div class=" lg:grid lg:grid-cols-12 lg:gap-10">
                                        <div class=" col-span-4">
                                            <p class="text-base  text-nblue font-bold lg:font-medium">Registration Date
                                            </p>
                                        </div>
                                        <div class=" col-span-8">
                                            <h2 class="text-base  text-nblue font-medium">February 25, 2025 6:01 am</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 border-b pb-1 lg:pb-0 lg:border-none border-b-nblue">
                                    <div class="lg:grid lg:grid-cols-12 lg:gap-10">
                                        <div class=" col-span-4">
                                            <p class="text-base  text-nblue font-bold lg:font-medium">First Name</p>
                                        </div>
                                        <div class=" col-span-8">
                                            <h2 class="text-base  text-nblue font-medium">Hussain</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 border-b pb-1 lg:pb-0 lg:border-none border-b-nblue">
                                    <div class="lg:grid lg:grid-cols-12 lg:gap-10">
                                        <div class=" col-span-4">
                                            <p class="text-base  text-nblue font-bold lg:font-medium">Last Name</p>
                                        </div>
                                        <div class=" col-span-8">
                                            <h2 class="text-base  text-nblue font-medium">Sabbir</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 border-b pb-1 lg:pb-0 lg:border-none border-b-nblue">
                                    <div class="lg:grid lg:grid-cols-12 lg:gap-10">
                                        <div class=" col-span-4">
                                            <p class="text-base  text-nblue font-bold lg:font-medium">Email</p>
                                        </div>
                                        <div class=" col-span-8">
                                            <h2 class="text-base  text-nblue font-medium">example@gmail.com</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 border-b pb-1 lg:pb-0 lg:border-none border-b-nblue">
                                    <div class="lg:grid lg:grid-cols-12 lg:gap-10">
                                        <div class=" col-span-4">
                                            <p class="text-base  text-nblue font-bold lg:font-medium">Phone Number</p>
                                        </div>
                                        <div class=" col-span-8">
                                            <h2 class="text-base  text-nblue font-medium">+1-202-555-0174</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 border-b pb-1 lg:pb-0 lg:border-none border-b-nblue">
                                    <div class="lg:grid lg:grid-cols-12 lg:gap-10">
                                        <div class=" col-span-4">
                                            <p class="text-base  text-nblue font-bold lg:font-medium">Designation</p>
                                        </div>
                                        <div class=" col-span-8">
                                            <h2 class="text-base  text-nblue font-medium">Full Stack Developer</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 border-b pb-1 lg:pb-0 lg:border-none border-b-nblue">
                                    <div class="lg:grid lg:grid-cols-12 lg:gap-10">
                                        <div class=" col-span-4">
                                            <p class="text-base  text-nblue font-bold lg:font-medium">Biography</p>
                                        </div>
                                        <div class=" col-span-8">
                                            <p class="text-base  text-nblue font-medium text-justify">Lorem Ipsum is
                                                simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                                has been the industry's standard dummy text ever since the 1500s, when
                                                an unknown printer took a galley of type and scrambled it to make a type
                                                specimen book.</p>
                                        </div>
                                    </div>
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
