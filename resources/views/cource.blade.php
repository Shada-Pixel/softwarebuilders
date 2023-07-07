<x-guest-layout>
    <section>
        <div class="py-10 md:py-16 lg:py-24" style="background-image: url('./img/course_hero.jpg');">
            <div class=" ">
                <h2 class="text-3xl lg:text-7xl text-white font-bold uppercase text-center">Courses</h2>
            </div>
        </div>
    </section>
    <!-- =================About-Hero start======================= -->


    <!-- ================Course start============== -->


    <section>
        <div class=" bg-white pt-20 pb-52">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-12 gap-10">
                    <div class="col-span-4">
                        <div class=" ">
                            <h2 class=" text-3xl font-bold text-nblue mb-8">Course Categories</h2>
                            <div class="">
                                <input type="checkbox" name="checkboxG1" id="checkboxG1"
                                    class="css-checkbox checkbox_check" value="one" /><label for="checkboxG1"
                                    class="css-label text-xl text-nblue ml-2">WordPress</label>
                            </div>
                            <div class="">
                                <input type="checkbox" name="checkboxG2" id="checkboxG2"
                                    class="css-checkbox checkbox_check" value="two" /><label for="checkboxG2"
                                    class="css-label text-xl text-nblue ml-2">Web Development</label>
                            </div>
                            <div class="">
                                <input type="checkbox" name="checkboxG3" id="checkboxG3"
                                    class="css-checkbox checkbox_check" value="three" /><label for="checkboxG3"
                                    class="css-label text-xl text-nblue ml-2">Graphic Design</label>
                            </div>
                            <div class="">
                                <input type="checkbox" name="checkboxG4" id="checkboxG4"
                                    class="css-checkbox checkbox_check" value="four" /><label for="checkboxG4"
                                    class="css-label text-xl text-nblue ml-2">Networking</label>
                            </div>
                            <div class="">
                                <input type="checkbox" name="checkboxG5" id="checkboxG5"
                                    class="css-checkbox checkbox_check" value="five" /><label for="checkboxG5"
                                    class="css-label text-xl text-nblue ml-2">Web Design</label>
                            </div>

                            <div class="">
                                <input type="checkbox" name="checkboxG6" id="checkboxG6"
                                    class="css-checkbox checkbox_check" value="six" /><label for="checkboxG6"
                                    class="css-label text-xl text-nblue ml-2">Digital Marketing</label>
                            </div>
                        </div>

                    </div>
                    <div class=" col-span-8 ">
                        <div class="contents">
                            <div class="grid grid-cols-2 gap-2">
                                {{-- Indivudial course --}}
                                <x-course></x-course>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>

