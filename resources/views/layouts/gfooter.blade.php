<!-- ==================Footer=========== -->
<footer>
    <div class=" bg-nblue pt-28 sm:pt-44 pb-4 footer_area ">
        <div class="max-w-7xl mx-auto">
            <div class=" bg-dgreen px-8 py-4 sm:py-14 sm:px-14 rounded-xl sm:rounded-3xl subscrib_area ">
                <div class="sm:grid sm:grid-cols-2 sm:gap-10 sm:justify-between sm:items-end">
                    <div class="">
                        <div class="touch_line">
                            <p class=" text-lg text-white font-normal text-center sm:text-left ">Get in touch</p>
                        </div>
                        <h2
                            class="text-xl sm:text-4.5xl font-bold text-white leading-none text-center sm:text-start">
                            SUBSCRIBE <span class="  text-nblue">NEWSLETTER</span></h2>
                    </div>
                    <div class="">
                        <form action="" id="subscriptionForm">
                            <div class=" flex items-end sm:items-center sm:justify-between justify-center ">
                                <div class="w-4/5 mr-5 mt-4 sm:mt-0">
                                    <input class="mt-1 w-full border-t-0 border-x-0 border-b-[1px] border-nblue  shadow-sm focus:outline-none block placeholder:text-white text-lg text-white  bg-transparent"
                                    type="email" name="email" :value="old('email')" required placeholder="Email">
                                </div>
                                <button type="submit" class=" bg-white hover:bg-nblue hover:text-white text-nblue sm:text-lg text-sm font-bold px-2 py-1 sm:px-4 sm:py-2.5 rounded-md uppercase">{{ __('Subscribe') }}</button>
                            </div>
                            <p id="subscriptionsuccess" class="text-white font-raleway text-base mt-2"></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="grid sm:grid-cols-4 sm:gap-20  px-3 sm:px-0">
                <div class="">
                    {{-- logo --}}
                    <div class="flex justify-center sm:justify-start">
                        <a href="{{ route('home') }}" class="mb-4">
                            <x-application-logof class="block h-10 w-auto fill-current text-white" />
                        </a>
                    </div>
                    <h2 class=" sm:text-xl font-bold text-white text-center sm:text-left mt-5 mb-2 sm:mb-0 uppercase">
                        Software Builders Ltd.</h2>
                    <p class=" text-base font-light text-white text-center sm:text-justify  mt-5">Contrary to
                        popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                        Latin literature from 45 BC.</p>
                    <div class="flex justify-center sm:justify-start gap-1 text-2xl mt-4">

                        <a href="https://www.facebook.com/softwarebuildersltd" target="_blank"><span class="iconify text-white hover:text-dgreen transition duration-150 ease-in-out" data-icon="entypo-social:facebook-with-circle"></span></a>
                        <a href="https://twitter.com/" target="_blank"><span class="iconify text-white hover:text-dgreen transition duration-150 ease-in-out" data-icon="entypo-social:twitter-with-circle"></span></a>
                        <a href="https://www.linkedin.com/" target="_blank"><span class="iconify text-white hover:text-dgreen transition duration-150 ease-in-out" data-icon="entypo-social:linkedin-with-circle"></span></a>
                        <a href="https://www.youtube.com/" target="_blank"><span class="iconify text-white hover:text-dgreen transition duration-150 ease-in-out" data-icon="entypo-social:youtube-with-circle"></span></a>
                    </div>
                </div>
                <div class="">
                    <h2 class=" text-2xl font-bold text-white text-center sm:text-left mt-5 mb-2 sm:mt-0 sm:mb-0">
                        OUR SERVICE</h2>
                    <div class=" sm:mt-5 flex justify-center sm:justify-start">
                        <ul>
                            @foreach ($fservices as $service)

                            <li class=" hover:text-dgreen text-center sm:text-left"><a class=" text-base font-normal text-white hover:text-dgreen" href="{{route('services.show', $service->id)}}">{!! $service->title !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="">
                    <h2 class=" text-2xl font-bold text-white text-center sm:text-left mt-5 mb-2 sm:mt-0 sm:mb-0">
                        OUR COURSES</h2>
                    <div class=" sm:mt-5 flex justify-center sm:justify-start">
                        <ul>
                            @foreach ($fcources as $course)

                            <li class=" hover:text-dgreen text-center sm:text-left"><a class=" text-base font-normal text-white hover:text-dgreen" href="{{route('courses.show', $course->id)}}">{!! $course->name !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="">
                    <h2 class=" text-2xl font-bold text-white text-center sm:text-left mt-5 mb-2 sm:mt-0 sm:mb-0">
                        QUICK LINKS</h2>
                    <div class=" sm:mt-5 ">
                        <ul class="">
                            <li class=" hover:text-dgreen text-center sm:text-left"><a
                                class=" text-base font-normal text-white hover:text-dgreen" href="{{route('about')}}">About Us</a></li>
                            <li class=" hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="{{route('gallery')}}">Gallery</a>
                            </li>
                            <li class=" hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="{{route('service')}}">Services</a>
                            </li>

                            <li class=" hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="{{route('cource')}}">Courses</a></li>
                            <li class=" hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pt-10 ">
                <div class="footer-bottom"></div>
                <div class=" flex justify-between items-center mt-4 px-3 sm:px-0">
                    <div class="">
                        <p class=" text-xs sm:text-base text-white">Copyright &copy; {{date('Y')}} Software Builders LTD.</p>
                    </div>
                    <div class="">
                        <a class="text-xs sm:text-base text-white hover:text-dgreen" href="{{route('terms')}}">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==================Footer=========== -->
