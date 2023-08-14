<x-guest-layout>
    <section class="mt-16">
        <div class="pt-16 pb-8 sm:py-24 bg-no-repeat bg-cover bg-center" style="background-image: url({{asset('img/course_hero.jpg')}});">
            <div class=" ">
                <h2 class="text-3xl lg:text-7xl text-white font-bold uppercase text-center">Courses</h2>
            </div>
        </div>
    </section>
    <!-- =================About-Hero start======================= -->


    <!-- ================Course start============== -->


    <section>
        <div class=" bg-white pt-5 sm:pt-20 pb-52">
            <div class="max-w-7xl mx-auto">
                <div class="grid sm:grid-cols-12 sm:gap-10">
                    <div class="sm:col-span-4 ">
                        <div class="p-4 sm:p-0 ">
                            <h2 class="text-xl sm:text-3xl font-bold text-nblue mb-8 text-center sm:text-left">Course Categories</h2>
                            <form action="{{route('cource')}}" method="get" id="category-filter-form">
                                @csrf
                                <div class="grid grid-cols-2 sm:grid-cols-1 gap-2">

                                @forelse ($categories as $category)

                                <div class="">
                                    <input type="checkbox" name="category_id[]" id="category_{{$category->id}}" class="css-checkbox checkbox_check" value="{{$category->id}}" @if(in_array($category->id, $checked_categories)) @checked(true) @endif>
                                    <label for="category_{{$category->id}}" class="css-label text-base sm:text-xl text-nblue ml-2 category-filter-input">{{$category->name}}</label>
                                </div>

                                @empty
                                <p>No category found.</p>

                                @endforelse
                                </div>
                                @if ($categories->count() > 0)
                                <button type="submit" class="mt-4 inline-flex items-center px-4 py-2 bg-nblue rounded border border-transparent font-semibold text-base text-white uppercase tracking-widest hover:bg-dgreen focus:bg-dgreen active:bg-dgreen focus:outline-none focus:ring-none transition ease-in-out duration-150">Filter</button>

                                @endif


                            </form>
                        </div>

                    </div>
                    <div class="sm:col-span-8 p-4 smp-0">
                        <div class="contents">
                            <div class="grid sm:grid-cols-2 gap-2">

                                @forelse ($courses as $item)
                                    {{-- Indivudial course --}}
                                    @include('layouts.inc.course')
                                @empty
                                <div class="col-span-2 text-center pt-40">
                                    <h2 class=" text-lg text-nblue font-bold">No course running.
                                    </h2>
                                </div>


                                @endforelse

                            </div>
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
        </script>
    </x-slot>

</x-guest-layout>

