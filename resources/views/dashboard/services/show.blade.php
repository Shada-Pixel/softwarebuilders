<x-guest-layout>

    <section id="course-details-page">
        <div class="pt-20 bg-white mt-10 sm:pt-20 pb-24 sm:pb-44 px-3 sm:px-0">
            <div class="max-w-7xl mx-auto">
                <div class=" sm:w-2/4 mb-4 sm:mb-0">
                    <h2 class="text-xl sm:text-4.5xl font-bold text-nblue leading-none text-center md:text-start">
                        {{ $service->title }}</h2>
                        <input type="hidden" id="oserviceid" name="oserviceid" value="{{ $service->id }}">
                        <input type="hidden" id="oservicename" name="oservicename" value="{{ $service->title }}">
                </div>
                <div class="sm:grid sm:grid-cols-12 gap-5 sm:mt-6">
                    <div class=" col-span-8 ">

                        <div class="course_cover rounded-md"
                            style="background-image: url('{{ asset($service->cover) }}');">
                        </div>
                        <div class=" mt-10 mb-4">
                            <h2 class=" text-xl font-bold text-nblue">Description</h2>
                        </div>
                        <div class=" border border-dgreen rounded-md p-5 " id="course-description">
                            <div class="" id="course-description">
                                {!! $service->description !!}
                            </div>
                        </div>
                    </div>
                    <div class=" col-span-4 m-4 sm:mt-0">
                        @role('admin')
                            <div class=" border border-dgreen rounded-md p-5 mb-4">
                                <a class=" text-base font-bold text-white block bg-nblue hover:bg-dgreen py-3 rounded-md text-center"
                                    href="{{ route('services.edit', $service->id) }}">Edit This Service</a>
                            </div>
                        @endrole

                        <div class=" border border-dgreen rounded-md p-5">
                            <button type="submit"
                                class="w-full text-base font-bold text-white block bg-nblue hover:bg-dgreen py-3 rounded-md text-center" id="gqtbtn">Get
                                Quatation</button>
                        </div>

                        <div class="border border-dgreen rounded-md p-5 mt-4">
                            <h2 class=" text-2xl font-semibold text-dgreen">More Services</h2>
                            @foreach ($latestservices as $service)
                                <div class="mb-5 mt-2">

                                    @include('layouts.inc.service')
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Service quotation popup --}}
    <div class="hidden w-screen min-h-screen bg-lgreen fixed top-10 right-0 z-[100] sm:py-24" id="servicequotepop">
        <div class="max-w-4xl mx-auto bg-white rounded p-6">
            <div class="flex justify-between mb-4" id="servicedetailsinpop">
                <h2 class="text-2xl font-semibold text-dgreen"></h2>
                <div class="bg-lgreen w-6 h-6 text-dgreen rounded hover:bg-dgreen hover:text-white transition ease-in-out duration-150" id="serqupopclose">
                    <span class="iconify text-2xl" data-icon="iconoir:cancel"></span>
                </div>
            </div>
            <form action="{{ route('quotations.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="grid grid-cols-2 gap-5">
                    <!-- Name -->
                    <div class="col-span-2">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="col-span-2">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div class="col-span-2">
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                            :value="old('phone')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- message -->
                    <div class="col-span-2">
                        <x-input-label for="message" :value="__('Description')" class="mb-2" />
                        <x-textarea id="message" class="block mt-2 w-full" name="message" required
                            autocomplete="message"></x-textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>

                    <!-- attachment -->
                    <div class="">
                        <x-input-label for="attachment" :value="__('Project Details File')" />
                        <x-text-input id="attachment"
                            class="block mt-1 w-full file:mr-5 file:mb-[2px] file:py-2 file:px-2 file:border-0 file:font-jost file:uppercase  file:text-white file:bg-dgreen"
                            type="file" name="attachment" :value="old('attachment')" required />
                        <x-input-error :messages="$errors->get('attachment')" class="mt-2" />
                    </div>

                    <input type="hidden" name="servicename" id="servicename">
                    <input type="hidden" name="servseid" id="servseid">

                </div>
                <div class="flex items-center justify-end col-span-2 mt-4">
                    {{-- onclick="formsubmit()" --}}

                    <x-primary-button class="ml-4" >
                        {{ __('Get Quotation') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>


    <x-slot name="script">
        <script>
            $(document).ready(function() {
                $('#course-details-page h2').addClass('text-lg text-dgreen font-bold');
                $('#course-details-page ul').addClass('pl-4 list-disc');
                $('#course-details-page ul li').addClass('text-base text-nblue list-disc mb-2');
            });

            $('button#gqtbtn').click(function (e) {
                e.preventDefault();
                var qseid = $('input#oserviceid').val();
                var qsename = $('input#oservicename').val();
                $('#servicequotepop #servicedetailsinpop h2').html(qsename);
                $('input#servicename').val(qsename);
                $('input#servseid').val(qseid);
                $('#servicequotepop').removeClass('hidden');
            });

            $('#serqupopclose').click(function (e) {
                e.preventDefault();
                $('#servicequotepop').addClass('hidden');
            });
        </script>
    </x-slot>
</x-guest-layout>
