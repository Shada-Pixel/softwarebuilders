<x-guest-layout>
    <section class="mt-16">
        <div class="pt-16 pb-8 sm:py-24 bg-no-repeat bg-cover bg-center" style="background-image: url({{asset('img/course_hero.jpg')}});">
            <div class=" ">
                <h2 class="text-3xl lg:text-7xl text-white font-bold uppercase text-center">{{ $categoryname }}</h2>
            </div>
        </div>
    </section>
    <!-- =================About-Hero start======================= -->


    <!-- ================Course start============== -->


    <section>
        <div class=" bg-white pt-5 sm:pt-20 pb-52">
            <div class="max-w-7xl mx-auto">
                <div class="">
                    <h2 class="text-xl sm:text-3xl font-bold text-nblue mb-4 text-center">Categories</h2>
                    <div class="w-full max-w-3xl mx-auto flex justify-center">
                        <p class="mb-8 text-nblue text-base text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni dolore saepe laborum cum consectetur nihil, fugiat ipsum minus facere veniam asperiores. Quas, perferendis officiis doloremque magni vel sequi aliquam? Ab ipsum consequuntur dolorem, numquam quae nostrum aliquid delectus ipsam at quas praesentium laboriosam, possimus et earum. Dolorem ratione qui harum!</p>
                    </div>


                    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 gap-5 mb-8">

                        <a href="{{route('cource')}}" class="flex justify-center items-center p-6 hover:bg-lgreen rounded-md eachcat cursor-pointer text-center font-semibold aspect-video border border-dgreen/40 transition-all duration-150 ease-in-out hover:scale-105 hover:shadow-md">
                                <p class="css-p text-lg lg:text-2xl text-nblue" >All Courses</p>
                        </a>

                        @forelse ($categories as $category)

                        <div class="flex justify-center items-center p-6 hover:bg-lgreen rounded-md eachcat cursor-pointer text-center font-semibold aspect-video border border-dgreen/40 transition-all duration-150 ease-in-out hover:scale-105 hover:shadow-md" data-catid="{{$category->id}}">
                            <p class="css-p text-lg lg:text-2xl text-nblue" >{{$category->name}}</p>
                        </div>

                        @empty
                        <p>No category found.</p>

                        @endforelse
                    </div>

                    <form action="{{route('cource')}}" method="get" class="coursefilterform">
                        @csrf
                        <input type="hidden" name="category_id" id="inputCategoryId"  value="">
                    </form>

                </div>

                <div class="p-4 lg:p-0">
                    <div class="">
                        <h2 class="text-xl sm:text-3xl font-bold text-nblue mb-4 text-center">Admission Is Going On</h2>
                        <div class="w-full max-w-3xl mx-auto flex justify-center">
                            <p class="mb-8 text-nblue text-base text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni dolore saepe laborum cum consectetur nihil, fugiat ipsum minus facere veniam asperiores.</p>
                        </div>
                        <h2 class="text-xl sm:text-3xl font-bold text-nblue mb-8 text-center sm:text-left">{{ $categoryname }}</h2>
                        <div class="grid grid-cols-1  sm:grid-cols-2 lg:grid-cols-3 gap-2 sm:gap-4 lg:gap-6">

                            @forelse ($courses as $item)
                                {{-- Indivudial course --}}
                                @include('layouts.inc.course')
                            @empty
                            <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center pt-40">
                                <h2 class=" text-lg text-nblue font-bold">No course running in this category.
                                </h2>
                            </div>


                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-slot name="script">
        <script>
            // $('.category-filter-input').change(function (e) {
            //     $('form#category-filter-form').submit();
            // });

            $(".eachcat").click(function (e) {
                e.preventDefault();
                $("form.coursefilterform #inputCategoryId").val($(this).data('catid'));
                $("form.coursefilterform").submit();
            });
        </script>
    </x-slot>

</x-guest-layout>

