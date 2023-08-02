<x-guest-layout>

    <section class="mt-16">
        <div class="py-10 md:py-16 lg:py-24" style="background-image: url('./img/about-hero.jpg');">
            <div class=" ">
                <h2 class="text-3xl lg:text-7xl text-white font-bold uppercase text-center">about us</h2>
            </div>
        </div>
    </section>
    <!-- =================About-Hero start======================= -->

    <!-- ======================About-main start============== -->
    <section>
        <div class=" bg-white pt-10 pb-16 lg:pt-20 lg:pb-24 px-3 lg:px-0">
            <div class="max-w-7xl mx-auto">
                <div class="md:grid md:grid-cols-2 md:gap-10 md:items-center lg:items-start">
                    <div class="">
                        {{-- <div class="aboutus_line">
                            <p class=" text-lg text-dgreen font-normal text-center md:text-left">About Us</p>
                        </div> --}}
                        <h2
                            class="text-2xl lg:text-4.5xl text-nblue font-bold uppercase text-center md:text-left leading-8 lg:leading-10 my-4">
                            Product Development <br>
                            For Better Business</h2>

                        <p class=" text-base text-nblue text-justify lg:text-left">Lorem Ipsum is simply dummy It is a
                            long established fact that
                            a reader will be distracted by
                            the readable content of a
                            page when looking at its layout.</p>
                        <div class=" mt-4">
                            <li class=" list-disc text-base text-nblue">Pellentesque et felis elementum, varius
                            </li>
                            <li class=" list-disc text-base text-nblue">Sed ullamcorper enim ut maximus accumsan.
                            </li>
                            <li class=" list-disc text-base text-nblue">Cras tristique lacus at gravida vulputate.
                            </li>
                            <li class=" list-disc text-base text-nblue">Fusce consectetur purus ac aliquam aliquet.
                            </li>
                        </div>
                        <div class=" mt-6 flex items-center sm:justify-center md:justify-start">
                            <div class="mr-3">
                                <img class=" w-16 h-16 rounded-full" src="./img/team01.jpg" alt="">
                            </div>
                            <div class="">
                                <p class=" text-base font-bold text-nblue">Rebecca T. Emerson</p>
                                <p class=" text-base font-normal text-dgreen">Managing Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 lg:mt-0">
                        <img class=" rounded-md" src="./img/aboutmain.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ======================About-main start============== -->
    <!-- ==================Get-know about-us start============ -->
    <section>
        <div class=" bg-lgreen py-10 lg:py-20 ">
            <div class="max-w-7xl mx-auto px-3 lg:px-0">
                <div class=" grid  md:grid-cols-2 lg:items-center  gap-5 ">
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
                    <div class="getknow-gap">
                        {{-- <div class="getknow_about_us">
                            <p class=" text-lg text-dgreen font-normal text-center lg:text-left ">Get to
                                know</p>
                        </div> --}}
                        <h2 class="text-2xl lg:text-4.5xl text-nblue font-bold uppercase text-center lg:text-left  mb-4">
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
                        <div class="bg-dgreen px-6 py-4 lg:px-10 lg:py-7 rounded-xl lg:rounded-3xl mt-8 lg:mt-12">
                            <div class=" flex justify-between">
                                <div class="">
                                    <h2 class=" text-xl lg:text-3xl font-bold text-white ">Software Builders Ltd.</h2>
                                </div>
                                <div class="">
                                    <h2 class="text-xl lg:text-3xl font-bold text-white">#1</h2>
                                </div>
                            </div>
                            <p class=" text-base text-white mt-2">Best Creative IT Agency And Solutions
                                <br>Since 2005.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="marquee bg-white py-4 lg:py-10 rounded-lg lg:rounded-3xl mt-10 md:mt-20 lg:mt-40">
                    <div class="marquee-content px-6 lg:px-14 ">
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
    <!-- ==================Get-know about-us end============ -->
    <!-- ==============Team start========== -->
    <section>
        <div class=" bg-white pt-10 pb-24 lg:pb-44 ">
            <div class="max-w-7xl mx-auto   px-3 md:px-0">
                {{-- <div class="solution_text">
                    <p class=" text-lg font-normal text-dgreen  text-center ">Our Team</p>
                </div> --}}
                <div class="">
                    <h2 class=" text-2xl lg:text-4.5xl text-nblue font-bold text-center uppercase  my-4">meet our team
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
                                    <h2 class="text-lg lg:text-xl text-nblue font-bold text-center ">Rebecca T. Emerson
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Managing Director</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team02.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg lg:text-xl text-nblue font-bold text-center ">Tony S. Christian
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief Executive officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team03.png" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg lg:text-xl text-nblue font-bold text-center ">Alice B. Mathis
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief Technical officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team04.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg lg:text-xl text-nblue font-bold text-center ">Richard E. Gibbons
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief marketing officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team01.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg lg:text-xl text-nblue font-bold text-center ">Rebecca T. Emerson
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Managing Director</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team02.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg lg:text-xl text-nblue font-bold text-center ">Tony S. Christian
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief Executive officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team03.png" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg lg:text-xl text-nblue font-bold text-center ">Alice B. Mathis
                                    </h2>
                                    <p class=" text-base text-nblue text-center">Chief Technical officer</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="team_member-img">
                                    <img src="./img/team04.jpg" alt="">
                                </div>
                                <div class=" mt-4">
                                    <h2 class=" text-lg lg:text-xl text-nblue font-bold text-center ">Richard E. Gibbons
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
</x-guest-layout>

