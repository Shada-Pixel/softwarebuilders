<x-guest-layout>

    <X-slot name="headstyle">
        <link rel="stylesheet" href="{{ asset('owl/owl.carousel.min.css')}}">
    </X-slot>

    <!-- =====================Hero-section-start=========== -->
    <section class="mt-16">
        <div class="">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-bag">
                            <div class="heroSlider-img" style="background-image: url({{asset('img/slider01.jpg')}});">
                                <div class="max-w-7xl mx-auto">
                                    <h2
                                        class="text-lg sm:text-5xl font-bold text-white uppercase text-center sm:text-left">
                                        Creative and Minimal
                                    </h2>
                                    <h2
                                        class="text-xl sm:text-7xl font-bold text-white uppercase md:mt-4 text-center sm:text-left">
                                        IT solutions
                                    </h2>
                                    <div class="px-3 sm:px-0 sm:w-1/2 sm:mt-8">
                                        <p
                                            class="text-sm md:text-base text-white font-medium sm:font-bold text-center sm:text-left">
                                            Curabitur
                                            sed facilisis erat.
                                            Vestibulum
                                            pharetra eros eget fringilla porttitor.
                                            ol Duis a orci nunc. Suspendisse ac
                                            convallis sapien, quis commodo libero. Donec nec dui luctus, pellentesque
                                            lacus
                                            sed, mollis leo.</p>
                                    </div>
                                    <div class="flex mt-10 justify-center sm:justify-start">
                                        <div class=" mr-5">
                                            <a class="text-sm sm:text-base  text-dgreen md:font-bold bg-white px-5 py-2.5 rounded-md md:tracking-widest"
                                                href="{{route('about')}}">ABOUT US</a>
                                        </div>
                                        <div class="">
                                            <a class="text-sm sm:text-base bg-dgreen md:font-bold text-white px-5 py-2.5 rounded-md md:tracking-widest"
                                                href="{{route('cource')}}">SEE COURSES</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
                <div class="swiper-pagination"></div>

            </div>
    </section>
    <!-- =====================Hero-section-end=========== -->

    <!-- ===============Service-Start=========== -->
    <section>
        <div class=" max-w-7xl mx-auto pt-10 pb-20 px-3 md:px-0">
            {{-- <div class="solution_text">
                <p class=" text-lg font-normal text-dgreen  text-center ">Our Solutions</p>
            </div> --}}
            <div class="">
                <h2 class=" text-2xl sm:text-4.5xl text-nblue font-bold text-center uppercase my-4">Services</h2>
                <p class=" text-base font-normal text-center text-nblue">Curabitur sed facilisis erat. Vestibulum
                    pharetra
                    eros
                    eget fringilla porttitor. <br>
                    on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>
            </div>
            <div class=" mt-7">
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-5">
                    @foreach ($services as $service)
                    @include('layouts.inc.service')
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ===============Service-End=========== -->
    <!-- ============Course-start============ -->
    <section>
        <div class=" bg-nblue pt-10 pb-20">
            <div class="max-w-7xl mx-auto">
                {{-- <div class="skill_text">
                    <p class=" text-lg font-normal text-dgreen  text-center ">Skill Development</p>
                </div> --}}
                <div class="">
                    <h2 class=" text-2xl sm:text-4.5xl text-white font-bold text-center uppercase  my-4">COURSES</h2>
                </div>
                <div class=" mt-10 px-3 xl:px-0">
                    <div class="swiper courseItemSwiper">
                        <div class="swiper-wrapper">

                            @foreach ($categories as $category)

                                <div class="swiper-slide">
                                    <a href="{{route('categories.show', $category->id)}}">
                                        <div class=" px-6 py-5 bg-white hover:bg-dgreen text-nblue hover:text-white rounded-md">
                                            <p class=" text-base font-bold ">{{$category->name}}</p>
                                            <p class=" text-sm font-normal">{{$category->courses->count()}} Course</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        {{-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
                    </div>
                </div>
                <!-- ============Course=============== -->
                <div class=" mt-10">
                    <div class="swiper courseSwiper px-3 xl:px-0">
                        <div class="swiper-wrapper">

                            @foreach ($courses as $course)
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="bg-lgreen rounded-md">
                                        <img class=" w-full sm:h-36 sm:h-52 rounded-md" src="{{asset($course->cover)}}" alt="{{$course->name}}">
                                        <div class=" px-5 py-4">
                                            <h2 class=" text-lg font-bold  text-nblue">{{$course->name}}</h2>
                                            <p class="text-sm font-normal mt-2">{{$course->instructor->name}}</p>
                                            <div class=" flex justify-end">
                                                <a href="{{route('courses.show',$course->id)}}" class=" text-sm font-normal text-dgreen underline hover:text-nblue text-right mt-2">See Course</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach

                        </div>
                        {{-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> --}}
                    </div>

                    <div class=" flex justify-center mt-10 sm:mt-14 pb-3">
                        <a href="{{route('cource')}}"
                            class=" text-base font-bold text-nblue hover:text-white bg-white hover:bg-dgreen px-5 py-2.5 rounded-md tracking-wider">
                            SEE ALL COURSES
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============Course-start============ -->

    <!-- =============AboutUs-start============== -->
    <section>
        <div class=" bg-lgreen py-10 sm:py-20 ">
            <div class="max-w-7xl mx-auto px-3 sm:px-0">
                <div class=" grid sm:grid md:grid-cols-2 md:items-center sm:items-start gap-5 ">
                    <div class="">
                        {{-- <div class="about_line">
                            <p class=" text-lg text-dgreen font-normal text-center sm:text-left">Get to know</p>
                        </div> --}}
                        <h2
                            class="text-2xl sm:text-4.5xl text-nblue font-bold uppercase text-center sm:text-left  my-4">
                            About us</h2>
                        <div class="mt-2">
                            <p class=" text-base font-normal text-nblue text-justify">Lorem Ipsum is simply dummy text
                                of the
                                printing and
                                typesetting industry. Lorem Ipsum
                                has been the industry's standard
                                dummy text ever since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen
                                book.
                            </p>

                            <p class="text-base font-normal text-nblue text-justify mt-5">There are many variations of
                                passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,
                                by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                        <div class="bg-dgreen px-6 py-4 sm:px-10 sm:py-7 rounded-xl sm:rounded-3xl mt-8 sm:mt-12">
                            <div class=" flex justify-between">
                                <div class="">
                                    <h2 class=" text-xl sm:text-3xl font-bold text-white ">Software Builders Ltd.</h2>
                                </div>
                                <div class="">
                                    <h2 class="text-xl sm:text-3xl font-bold text-white">#1</h2>
                                </div>
                            </div>
                            <p class=" text-base text-white mt-2">Best Creative IT Agency And Solutions
                                <br>Since 2005.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="about_area">
                            <img class="w-full rounded-md" src="./img/aboutus.jpg" alt="">
                            <div class="about_vedio_area">
                                <div class="about_vedio rounded-md"
                                    style="background-image: url('./img/aboutVedio.jpg');">
                                    <div class="vedio_btn">
                                        <button class=" text-4xl text-white modal-link "><iconify-icon
                                                icon="icon-park-solid:play"></iconify-icon></button>
                                    </div>
                                    <div id="custom-modal" class="custom-modal">
                                        <div class="custom-modal-dialog">
                                            <div class="custom-modal-content">
                                                <span class="close-modal">X</span>
                                                <div class="custom-modal-body">
                                                    <div class="custom-modal-inner">
                                                        <div class="">
                                                            <iframe class="w-full" height="315"
                                                                src="https://www.youtube.com/embed/o2kw4MaBVa4"
                                                                title="YouTube video player" frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="marquee bg-white py-4 sm:py-10 rounded-lg sm:rounded-3xl mt-40">
                    <div class="marquee-content px-6 sm:px-14 ">
                        <div class="marquee-item">
                            <img src="./img/Aven.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Circle.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Earth.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/FoxHub.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Goldline.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Aven.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Circle.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Earth.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/FoxHub.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Goldline.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Aven.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Circle.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Earth.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/FoxHub.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Goldline.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Aven.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Circle.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Earth.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/FoxHub.png" alt="">
                        </div>
                        <div class="marquee-item">
                            <img src="./img/Goldline.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>
    <!-- =============AboutUs-End============== -->
    <!-- ======================Testimonial start==================== -->
    <section>
        <div class=" bg-nblue pt-10 pb-20 ">
            <div class="max-w-7xl mx-auto   px-3 md:px-0">
                {{-- <div class="solution_text">
                    <p class="text-lg font-normal text-dgreen  text-center ">Testimonial</p>
                </div> --}}
                <div class="">
                    <h2 class="text-2xl sm:text-4.5xl text-white font-bold text-center uppercase  my-4">Client says
                        about us</h2>
                    <p class=" text-base font-normal text-center text-white">Curabitur sed facilisis erat. Vestibulum
                        pharetra
                        eros
                        eget fringilla porttitor. <br>
                        on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>
                </div>
            </div>
            <div class=" mt-6 px-3 xl:px-0">
                <div class="swiper testSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class=" px-6 py-5 bg-lgreen hover:bg-white text-nblue rounded-md">
                                <div class="xl:flex justify-between">
                                    <div class=" md:flex md:items-center md:justify-center">
                                        <div class=" flex justify-center md:flex-none mr-4 mb-3 md:mb-0">
                                            <img class="w-14 h-14 rounded-full" src="./img/clint.jpg" alt="">
                                        </div>
                                        <div class="">
                                            <h2 class="text-center md:text-start text-xl  text-nblue font-bold">Thelma
                                                C. Shadle</h2>
                                            <p class=" text-lg  text-nblue text-center md:text-start">Chief Executive
                                                Officer</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 sm:mt-0 flex justify-center xl:justify-start">
                                        <ul class=" flex">
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange "><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2 sm:mt-5">
                                    <p class=" text-base text-nblue">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It has roots in a piece of classical Latin literature from
                                        45 BC, making it over 2000 years old. There are many variations of passages of
                                        Lorem Ipsum available.</p>
                                </div>
                                <div class=" flex justify-end mt-1">
                                    <img class=" w-12" src="./img/comma.png" alt="comma">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" px-6 py-5 bg-lgreen hover:bg-white text-nblue rounded-md">
                                <div class="xl:flex justify-between">
                                    <div class=" md:flex md:items-center md:justify-center">
                                        <div class=" flex justify-center md:flex-none mr-4 mb-3 md:mb-0">
                                            <img class="w-14 h-14 rounded-full" src="./img/clint.jpg" alt="">
                                        </div>
                                        <div class="">
                                            <h2 class="text-center md:text-start text-xl  text-nblue font-bold">Thelma
                                                C. Shadle</h2>
                                            <p class=" text-lg  text-nblue text-center md:text-start">Chief Executive
                                                Officer</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 sm:mt-0 flex justify-center xl:justify-start">
                                        <ul class=" flex">
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange "><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2 sm:mt-5">
                                    <p class=" text-base text-nblue">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It has roots in a piece of classical Latin literature from
                                        45 BC, making it over 2000 years old. There are many variations of passages of
                                        Lorem Ipsum available.</p>
                                </div>
                                <div class=" flex justify-end mt-1">
                                    <img class=" w-12" src="./img/comma.png" alt="comma">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" px-6 py-5 bg-lgreen hover:bg-white text-nblue rounded-md">
                                <div class="xl:flex justify-between">
                                    <div class=" md:flex md:items-center md:justify-center">
                                        <div class=" flex justify-center md:flex-none mr-4 mb-3 md:mb-0">
                                            <img class="w-14 h-14 rounded-full" src="./img/clint.jpg" alt="">
                                        </div>
                                        <div class="">
                                            <h2 class="text-center md:text-start text-xl  text-nblue font-bold">Thelma
                                                C. Shadle</h2>
                                            <p class=" text-lg  text-nblue text-center md:text-start">Chief Executive
                                                Officer</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 sm:mt-0 flex justify-center xl:justify-start">
                                        <ul class=" flex">
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange "><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2 sm:mt-5">
                                    <p class=" text-base text-nblue">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It has roots in a piece of classical Latin literature from
                                        45 BC, making it over 2000 years old. There are many variations of passages of
                                        Lorem Ipsum available.</p>
                                </div>
                                <div class=" flex justify-end mt-1">
                                    <img class=" w-12" src="./img/comma.png" alt="comma">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" px-6 py-5 bg-lgreen hover:bg-white text-nblue rounded-md">
                                <div class="xl:flex justify-between">
                                    <div class=" md:flex md:items-center md:justify-center">
                                        <div class=" flex justify-center md:flex-none mr-4 mb-3 md:mb-0">
                                            <img class="w-14 h-14 rounded-full" src="./img/clint.jpg" alt="">
                                        </div>
                                        <div class="">
                                            <h2 class="text-center md:text-start text-xl  text-nblue font-bold">Thelma
                                                C. Shadle</h2>
                                            <p class=" text-lg  text-nblue text-center md:text-start">Chief Executive
                                                Officer</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 sm:mt-0 flex justify-center xl:justify-start">
                                        <ul class=" flex">
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange "><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2 sm:mt-5">
                                    <p class=" text-base text-nblue">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It has roots in a piece of classical Latin literature from
                                        45 BC, making it over 2000 years old. There are many variations of passages of
                                        Lorem Ipsum available.</p>
                                </div>
                                <div class=" flex justify-end mt-1">
                                    <img class=" w-12" src="./img/comma.png" alt="comma">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" px-6 py-5 bg-lgreen hover:bg-white text-nblue rounded-md">
                                <div class="xl:flex justify-between">
                                    <div class=" md:flex md:items-center md:justify-center">
                                        <div class=" flex justify-center md:flex-none mr-4 mb-3 md:mb-0">
                                            <img class="w-14 h-14 rounded-full" src="./img/clint.jpg" alt="">
                                        </div>
                                        <div class="">
                                            <h2 class="text-center md:text-start text-xl  text-nblue font-bold">Thelma
                                                C. Shadle</h2>
                                            <p class=" text-lg  text-nblue text-center md:text-start">Chief Executive
                                                Officer</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 sm:mt-0 flex justify-center xl:justify-start">
                                        <ul class=" flex">
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange "><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2 sm:mt-5">
                                    <p class=" text-base text-nblue">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It has roots in a piece of classical Latin literature from
                                        45 BC, making it over 2000 years old. There are many variations of passages of
                                        Lorem Ipsum available.</p>
                                </div>
                                <div class=" flex justify-end mt-1">
                                    <img class=" w-12" src="./img/comma.png" alt="comma">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" px-6 py-5 bg-lgreen hover:bg-white text-nblue rounded-md">
                                <div class="xl:flex justify-between">
                                    <div class=" md:flex md:items-center md:justify-center">
                                        <div class=" flex justify-center md:flex-none mr-4 mb-3 md:mb-0">
                                            <img class="w-14 h-14 rounded-full" src="./img/clint.jpg" alt="">
                                        </div>
                                        <div class="">
                                            <h2 class="text-center md:text-start text-xl  text-nblue font-bold">Thelma
                                                C. Shadle</h2>
                                            <p class=" text-lg  text-nblue text-center md:text-start">Chief Executive
                                                Officer</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 sm:mt-0 flex justify-center xl:justify-start">
                                        <ul class=" flex">
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange "><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2 sm:mt-5">
                                    <p class=" text-base text-nblue">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It has roots in a piece of classical Latin literature from
                                        45 BC, making it over 2000 years old. There are many variations of passages of
                                        Lorem Ipsum available.</p>
                                </div>
                                <div class=" flex justify-end mt-1">
                                    <img class=" w-12" src="./img/comma.png" alt="comma">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" px-6 py-5 bg-lgreen hover:bg-white text-nblue rounded-md">
                                <div class="xl:flex justify-between">
                                    <div class=" md:flex md:items-center md:justify-center">
                                        <div class=" flex justify-center md:flex-none mr-4 mb-3 md:mb-0">
                                            <img class="w-14 h-14 rounded-full" src="./img/clint.jpg" alt="">
                                        </div>
                                        <div class="">
                                            <h2 class="text-center md:text-start text-xl  text-nblue font-bold">Thelma
                                                C. Shadle</h2>
                                            <p class=" text-lg  text-nblue text-center md:text-start">Chief Executive
                                                Officer</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 sm:mt-0 flex justify-center xl:justify-start">
                                        <ul class=" flex">
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange "><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2 sm:mt-5">
                                    <p class=" text-base text-nblue">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It has roots in a piece of classical Latin literature from
                                        45 BC, making it over 2000 years old. There are many variations of passages of
                                        Lorem Ipsum available.</p>
                                </div>
                                <div class=" flex justify-end mt-1">
                                    <img class=" w-12" src="./img/comma.png" alt="comma">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class=" px-6 py-5 bg-lgreen hover:bg-white text-nblue rounded-md">
                                <div class="xl:flex justify-between">
                                    <div class=" md:flex md:items-center md:justify-center">
                                        <div class=" flex justify-center md:flex-none mr-4 mb-3 md:mb-0">
                                            <img class="w-14 h-14 rounded-full" src="./img/clint.jpg" alt="">
                                        </div>
                                        <div class="">
                                            <h2 class="text-center md:text-start text-xl  text-nblue font-bold">Thelma
                                                C. Shadle</h2>
                                            <p class=" text-lg  text-nblue text-center md:text-start">Chief Executive
                                                Officer</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 sm:mt-0 flex justify-center xl:justify-start">
                                        <ul class=" flex">
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange mr-1"><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                            <li class="text-xl text-dorange "><iconify-icon
                                                    icon="ic:baseline-star"></iconify-icon></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-2 sm:mt-5">
                                    <p class=" text-base text-nblue">Contrary to popular belief, Lorem Ipsum is not
                                        simply random text. It has roots in a piece of classical Latin literature from
                                        45 BC, making it over 2000 years old. There are many variations of passages of
                                        Lorem Ipsum available.</p>
                                </div>
                                <div class=" flex justify-end mt-1">
                                    <img class=" w-12" src="./img/comma.png" alt="comma">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================Testimonial End==================== -->
    <!-- ==============Team start========== -->
    <section>
        <div class=" bg-lgreen pt-10 pb-24 sm:pb-44 ">
            <div class="max-w-7xl mx-auto   px-3 md:px-0">
                {{-- <div class="solution_text">
                    <p class=" text-lg font-normal text-dgreen  text-center ">Our Team</p>
                </div> --}}
                <div class="">
                    <h2 class=" text-2xl sm:text-4.5xl text-nblue font-bold text-center uppercase  my-4">meet our team
                    </h2>
                    <p class=" text-base font-normal text-center text-nblue">Curabitur sed facilisis erat. Vestibulum
                        pharetra
                        eros
                        eget fringilla porttitor. <br>
                        on Duis a orci nunc. Suspendisse ac convallis sapien, quis commodo libero.</p>
                </div>
                <div class=" mt-10">
                    <div class="swiper teamSwiper px-3 xl:px-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team01.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class="text-lg sm:text-xl text-nblue font-bold text-center ">Rebecca T. Emerson
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Managing Director</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team02.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg sm:text-xl text-nblue font-bold text-center ">Tony S. Christian
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief Executive officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team03.png" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg sm:text-xl text-nblue font-bold text-center ">Alice B. Mathis
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief Technical officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team04.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg sm:text-xl text-nblue font-bold text-center ">Richard E. Gibbons
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief marketing officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team01.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg sm:text-xl text-nblue font-bold text-center ">Rebecca T. Emerson
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Managing Director</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team02.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg sm:text-xl text-nblue font-bold text-center ">Tony S. Christian
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief Executive officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team03.png" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg sm:text-xl text-nblue font-bold text-center ">Alice B. Mathis
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief Technical officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team04.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg sm:text-xl text-nblue font-bold text-center ">Richard E. Gibbons
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief marketing officer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==============Team start========== -->

    <x-slot name="script">
        <script src="{{asset('owl/owl.carousel.min.js')}}"></script>
    </x-slot>
</x-guest-layout>
