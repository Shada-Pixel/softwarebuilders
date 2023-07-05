<x-guest-layout>
    <!-- =================Contact-Hero start======================= -->
    <section>
        <div class="py-10 md:py-16 sm:py-24" style="background-image: url('./img/about-hero.jpg');">
            <div class=" ">
                <h2 class="text-3xl sm:text-7xl text-white font-bold uppercase text-center">Contact</h2>
            </div>
        </div>
    </section>
    <!-- ==================contact-Hero start======================= -->
    <!-- ====================Address-start============== -->
    <section>
        <div class=" bg-white py-10 sm:py-24 px-3 sm:px-0">
            <div class="max-w-7xl mx-auto">
                <div class=" grid md:grid md:grid-cols-3 gap-5 sm:gap-10">
                    <div class="sm:flex sm:items-center">
                        <div class="">
                            <p class=" text-6xl text-dgreen mr-4 text-center sm:text-left ml-3 md:ml-0"><iconify-icon
                                    icon="carbon:location-filled"></iconify-icon>
                            </p>
                        </div>
                        <div class="">
                            <h2 class="text-xl sm:text-3xl font-bold text-dgreen text-center sm:text-left">Address</h2>
                            <p class=" text-base sm:text-xl text-nblue font-normal text-center md:text-left">211 Eva
                                Pearl
                                StreetBaton Rouge, </p>
                            <p class=" text-base sm:text-xl text-nblue font-normal text-center sm:text-left">LA 70806
                            </p>
                        </div>
                    </div>
                    <div class="sm:flex sm:items-center">
                        <div class="">
                            <p class=" text-6xl text-dgreen mr-4 text-center sm:text-left ml-3 sm:ml-0"><iconify-icon
                                    icon="fontisto:mobile"></iconify-icon>
                            </p>
                        </div>
                        <div class="">
                            <h2 class="text-xl sm:text-3xl font-bold text-dgreen text-center sm:text-left">Phone</h2>
                            <p class=" text-base sm:text-xl text-nblue font-normal text-center sm:text-left">
                                225-752-6841</p>
                            <p class=" text-base sm:text-xl text-nblue font-normal text-center sm:text-left">
                                225-752-6842</p>
                        </div>
                    </div>
                    <div class="sm:flex sm:items-center">
                        <div class="">
                            <p class=" text-6xl text-dgreen mr-4 text-center sm:text-left ml-3 sm:ml-0"><iconify-icon
                                    icon="ic:baseline-mail"></iconify-icon>
                            </p>
                        </div>
                        <div class="">
                            <h2 class="text-xl sm:text-3xl font-bold text-dgreen text-center sm:text-left">Email</h2>
                            <p class=" text-base sm:text-xl text-nblue font-normal text-center sm:text-left">
                                info@softwarebuilders.com</p>
                            <p class=" text-base sm:text-xl text-nblue font-normal text-center sm:text-left">
                                contact@softwarebuilders.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================Address-end============== -->
    <!-- =================Contact-form -start========== -->
    <section>
        <div class="  bg-white pb-8 sm:pb-24 px-3 sm:px-0">
            <div class="max-w-7xl mx-auto">
                <div class="grid  sm:grid-cols-2 sm:gap-10 gap-5 ">
                    <div class=" w-full">
                        <img class="rounded-md w-full" src="{{asset('img/contact-img.jpg')}}" alt="contact Banner">
                    </div>
                    <div class="">
                        <div class="">
                            <h2 class="text-xl sm:text-4xl text-center sm:text-left font-bold text-nblue">Request A
                                Quote</h2>
                            <p class=" text-base text-nblue font-normal text-center sm:text-left">Lorem Ipsum is simply
                                dummy text of the
                                printing
                                and typesetting industry. Lorem Ipsum has
                                been the industry’s standard
                                dummy text ever since the 1500s</p>
                        </div>
                        <div class=" mt-6 sm:mt-12">
                            <form id="contactusfrom">
                                <div class=" w-full contact_input mb-4 sm:mb-8">
                                    <x-text-input id="name" class="block py-2 mt-1 w-full text-lg text-nblue  bg-transparent" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Your Name"/>
                                </div>
                                <div class=" w-full contact_input mb-4 sm:mb-8">
                                    <x-text-input id="cfemail" class="block py-2 w-full text-lg text-nblue  bg-transparent" type="email" name="cfemail" :value="old('email')" required autocomplete="email" placeholder="Email Address"/>
                                </div>
                                <div class=" w-full contact_input mb-4 sm:mb-8">
                                    <x-text-input id="cfphone" class="block py-2 mt-1 w-full text-lg text-nblue  bg-transparent" type="text" name="cfphone" :value="old('subject')" required autofocus autocomplete="subject" placeholder="Subject"/>
                                </div>

                                <div class=" w-full contact_input mb-4 sm:mb-8">
                                    <x-textarea name="cfmessage" id="cfmessage" rows="3" placeholder="Message"></x-textarea>
                                </div>

                                <div class="flex justify-center sm:justify-start">
                                    {{-- <button type="submit" class="load-more text-white text-sm sm:text-base font-bold bg-nblue py-2.5 px-4 rounded-md">
                                        SEND MESSAGE</button> --}}
                                        <x-primary-button>SEND MESSAGE</x-primary-button>
                                </div>
                                <p id="contmsg" class="mt-4 text-dgreen"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =================Contact-form-start========== -->
    <!-- ==============Team start========== -->
    <section>
        <div class=" sm:pt-10  map">
            <img class=" w-full " src="./img/map.jpg" alt="">
        </div>
    </section>
    <!-- ==============Team start========== -->

    <x-slot name="script">
        <script>

            // Contuctus
            $('form#contactusfrom').submit(function(e) {
                e.preventDefault();
                console.log('Form submited');


                var name = $('#name').val();
                var email = $('#cfemail').val();
                var phone = $('#cfphone').val();
                var message = $('#cfmessage').val();

                $.ajax({
                    method: 'POST',
                    url: BASE_URL + 'contactUs/send',
                    data: {
                        name,
                        phone,
                        email,
                        message
                    },
                    success: function(response) {
                        console.log(response.message);
                        if (response.status == "success") {
                            $('#contmsg').html(response.message);
                            $('form#contactusfrom').trigger("reset");
                            setTimeout(function(){
                                $('#contmsg').html('');
                            }, 5000);
                        } else if (response.status == "error") {
                            $('#contmsg').html(response.message);
                            setTimeout(function(){
                                $('#contmsg').html('');
                            }, 5000);
                        }
                    }
                });
            });
        </script>
    </x-slot>
</x-guest-layout>





