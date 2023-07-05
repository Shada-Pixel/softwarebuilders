<!-- ==================Footer=========== -->
<footer>
    <div class=" bg-nblue pt-28 sm:pt-44 pb-4 footer_area ">
        <div class="max-w-7xl mx-auto">
            <div class=" bg-dgreen px-8 py-4 sm:py-14 sm:px-14 rounded-xl sm:rounded-3xl subscrib_area ">
                <div class="md:grid md:grid-cols-2 md:gap-10 md:justify-between md:items-end">
                    <div class="">
                        <div class="touch_line">
                            <p class=" text-lg text-white font-normal text-center md:text-left ">Get in touch</p>
                        </div>
                        <h2
                            class="text-xl sm:text-4.5xl font-bold text-white leading-none text-center md:text-start">
                            SUBSCRIBE <span class="  text-nblue">NEWSLETTER</span></h2>
                    </div>
                    <div class="">
                        <form action="" id="subscriptionForm">
                            <div class=" flex items-end sm:items-center sm:justify-between justify-center ">
                                <div class="w-4/5 mr-5 mt-4 sm:mt-0">
                                    <input class="mt-1 w-full border-t-0 border-x-0 border-b-[1px] border-white  shadow-sm focus:outline-none block placeholder:text-white text-lg text-white  bg-transparent"
                                    type="email" name="email" :value="old('email')" required placeholder="Email">
                                </div>
                                <button type="submit" class=" bg-white hover:bg-nblue hover:text-white text-nblue md:text-lg text-sm font-bold px-2 py-1 sm:px-4 sm:py-2.5 rounded-md uppercase">{{ __('Subscribe') }}</button>
                            </div>
                            <p id="subscriptionsuccess" class="text-white font-raleway text-base mt-2"></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" md:grid md:grid-cols-2 sm:grid-cols-4 sm:gap-20 md:gap-10 px-3 sm:px-0">
                <div class="">
                    <h2
                        class=" text-2xl font-bold text-white text-center sm:text-left mt-5 mb-2 sm:mt-0 sm:mb-0 uppercase">
                        Software Builders Ltd.</h2>
                    <p class=" text-base font-light text-white text-center md:text-justify  mt-5">Contrary to
                        popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                        Latin literature from 45 BC, making it over 2000 years old. There are many variations of
                        passages of Lorem Ipsum available.</p>
                </div>
                <div class="">
                    <h2 class=" text-2xl font-bold text-white text-center sm:text-left mt-5 mb-2 sm:mt-0 sm:mb-0">
                        OUR SERVICE</h2>
                    <div class=" sm:mt-5 flex justify-center sm:justify-start">
                        <ul>
                            <li class=" hover:list-disc hover:text-dgreen"><a
                                    class=" text-base font-normal text-white hover:text-dgreen  text-center sm:text-left"
                                    href="#">Web Development</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen " href="#">Web
                                    Design</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">Graphic
                                    Design</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen"
                                    href="#">Networking</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">UI/UX
                                    Design</a></li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <h2 class=" text-2xl font-bold text-white text-center sm:text-left mt-5 mb-2 sm:mt-0 sm:mb-0">
                        OUR COURSES</h2>
                    <div class=" sm:mt-5 flex justify-center sm:justify-start">
                        <ul>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">Web
                                    Development</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">Web
                                    Design</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen text-center sm:text-left"
                                    href="#">Graphic Design</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen"
                                    href="#">Networking</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">UI/UX
                                    Design</a></li>
                        </ul>
                    </div>
                </div>
                <div class="">
                    <h2 class=" text-2xl font-bold text-white text-center sm:text-left mt-5 mb-2 sm:mt-0 sm:mb-0">
                        QUCIK LINKS</h2>
                    <div class=" sm:mt-5 ">
                        <ul class="">
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">Blog</a>
                            </li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">About
                                    Software Builders</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">Contact
                                    Us</a></li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">Career</a>
                            </li>
                            <li class=" hover:list-disc hover:text-dgreen text-center sm:text-left"><a
                                    class=" text-base font-normal text-white hover:text-dgreen" href="#">UI/UX
                                    Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pt-10 ">
                <div class="footer-bottom"></div>
                <div class=" flex justify-between items-center mt-4 px-3 sm:px-0">
                    <div class="">
                        <p class=" text-xs md:text-base text-white">Copyright 2022 Software Builders LTD.</p>
                    </div>
                    <div class="">
                        <a class="text-xs md:text-base text-white hover:text-dgreen" href="#">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ==================Footer=========== -->
