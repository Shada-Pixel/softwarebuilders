<x-guest-layout>

    <section id="course-details-page">
        <div class="pt-20 bg-white mt-10 sm:pt-24 pb-24 sm:pb-44 px-3">
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-5">

                    <div class="lg:col-span-2 mb-4 sm:mb-0">
                        <h3 class="font-semibold text-lg text-dgreen mb-2">{{$course->category->name}}</h3>
                        <h1 class="text-2xl sm:text-5xl font-bold text-nblue leading-none text-start mb-4 lg:mb-0">{{$course->name}}</h1>

                        <div class="lg:hidden lg:col-span-3 rounded-md w-full aspect-video bg-cover bg-center bg-no-repeat" style="background-image: url('{{asset($course->cover)}}');"></div>

                        <div class="mt-8 flex justify-start gap-5">
                            <div class=" border border-dgreen rounded-md p-2 lg:p-5 mb-4 text-center">

                                <p class="font-semibold text-lg text-nblue">{{$course->batches->count()}}</p>
                                <p>Batches</p>
                            </div>
                            <div class=" border border-dgreen rounded-md p-2 lg:p-5 mb-4 text-center">

                                <p class="font-semibold text-lg text-nblue">{{$course->students->count()}}</p>
                                <p>Students</p>
                            </div>


                        </div>

                        <div class="mb-4">
                            <p class=" text-base font-light text-nblue sm:text-justify text-justify  mt-5">{!! $course->short_description !!}</p>
                        </div>

                        {{-- ---------------------------------------------------------------------- --}}
                        <div class="mt-auto w-full">

                            {{-- @role('admin')
                            <div class=" border border-dgreen rounded-md p-5 mb-4">
                                <a class=" text-base font-bold text-white block bg-nblue hover:bg-dgreen py-3 rounded-md text-center" href="{{route('courses.edit',$course->id)}}">Edit This Course</a>
                            </div>
                            @endrole --}}

                            @auth

                            @if($ec && in_array($course->id, $ec))

                            <div class=" border border-dgreen rounded-md p-5">
                                <h2 class=" text-xl text-black font-bold">Group Link</h2>
                                <p>{!! $batchgrouptext !!}</p>

                            </div>
                            @else

                            <div class=" border border-dgreen rounded-md p-5">
                                <h2 class=" text-xl text-black font-bold">{{number_format($course->current_price, 0) }} BDT</h2>
                                <div class=" mt-4">
                                    @if ($mycartcourse > 0)
                                        <a href="{{route('carts.index')}}">
                                            <button class="w-full text-base font-bold text-white block bg-nblue hover:bg-dgreen py-3 rounded-md text-center">Go to Cart</button>
                                        </a>
                                    @else

                                    <form action="{{route('carts.store')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                        <input type="hidden" name="total" value="{{$course->current_price}}">
                                        <button type="submit" class="w-full text-base font-bold text-white block bg-nblue hover:bg-dgreen py-3 rounded-md text-center">ENROLL</button>
                                    </form>
                                    @endif


                                </div>
                            </div>
                            @endif
                            @endauth

                            @guest
                            <div class=" border border-dgreen rounded-md p-5">
                                <h2 class=" text-xl text-black font-bold">{{number_format($course->current_price, 0) }} BDT</h2>
                                <div class=" mt-4">

                                    <form action="{{route('carts.store')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                        <input type="hidden" name="total" value="{{$course->current_price}}">
                                        <button type="submit" class="w-full text-base font-bold text-white block bg-nblue hover:bg-dgreen py-3 rounded-md text-center">ENROLL</button>
                                    </form>


                                </div>
                            </div>
                            @endguest
                        </div>
                        {{-- ---------------------------------------------------------------------- --}}
                    </div>
                    <div class="hidden lg:block lg:col-span-3 rounded-md" style="background-image: url('{{asset($course->cover)}}');"></div>
                </div>
                <div class="sm:grid sm:grid-cols-12 gap-5 sm:mt-6">
                    <div class="mt-16 col-span-8 ">

                        <div class=" mb-4">
                            <h2 class=" text-xl font-bold text-nblue">Description</h2>
                        </div>
                        <div class=" border border-dgreen rounded-md p-5 " id="course-description">
                            <div class="" id="course-description">
                                {!! $course->description !!}
                            </div>
                        </div>
                        <div class=" mt-10 mb-4">
                            <h2 class=" text-xl font-bold text-nblue">Curriculam</h2>
                        </div>
                        <div class=" border border-dgreen rounded-md pt-5 pb-8 px-8">
                            <div class="" id="course-curriculam">
                                {!! $course->curriculam !!}
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 col-span-4 mx-4 ">
                        <div class="border border-dgreen rounded-md p-5 mt-4">
                            <h2 class=" text-2xl font-semibold text-dgreen">Material Includes</h2>
                            <div class="mt-6" id="course-materials">
                                {!! $course->materials !!}
                            </div>
                        </div>
                        <div class="mt-10">
                            <h2 class=" text-xl font-bold text-nblue">Course Instructor</h2>
                            <div class="border border-dgreen rounded-md p-5 mt-4 ">
                                <div class=" flex items-center justify-center sm:justify-start">
                                    <div class=" mr-4">
                                        {{-- <img class=" w-16 h-16 rounded-full" src="{{asset($course->instructor->pp)}}" alt=""> --}}
                                        @if ($course->instructor->pp == null)
                                            <img class=" w-16 h-16 rounded-full" src="{{asset('img/team03.png')}}" alt="{{$course->instructor->name}}">
                                        @else
                                            <img class=" w-16 h-16 rounded-full" src="{{ asset($course->instructor->pp) }}" alt="{{$course->instructor->name}}">
                                        @endif
                                    </div>
                                    <div class="">
                                        <p class=" text-base font-bold text-dgreen">{{$course->instructor->name}}</p>
                                        @if ($course->instructor->designation)
                                        <small class=" text-sm font-light text-nblue">{{$course->instructor->designation}}</small>
                                        @else

                                        <small class=" text-sm font-light text-nblue">Unknown</small>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-slot name="script">
        <script>
            $(document).ready(function () {
                $('#course-details-page h2').addClass('text-lg text-dgreen font-bold');
                $('#course-details-page ul').addClass('pl-4 list-disc');
                $('#course-details-page ul li').addClass('text-base text-nblue list-disc mb-2');
            });
        </script>
    </x-slot>
</x-guest-layout>
