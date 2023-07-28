{{-- individual course --}}
<a href="{{route('courses.show', $item->id)}}">
<div class=" border border-lgreen rounded-md">
    <div class="courser_img" style="background-image: url({{asset($item->cover)}});">
    </div>
    <div class="px-5 py-3 course_info">
        <div class=" mt-2">
            <h2 class=" text-lg text-nblue font-bold">{{$item->name}}</h2>
        </div>
        <div class="mt-2 flex justify-between items-end">
            <div class=" flex items-center">
                <div class="mr-3">
                    <img class=" w-14 h-14 rounded-full" src="{{asset($item->instructor->pp)}}" alt="">
                </div>
                <div class="">
                    <h2 class=" text-base text-nblue font-semibold">{{$item->instructor->name}}
                    </h2>
                    @if ($item->instructor->designation)
                    <p class=" text-sm font-medium ">{{$item->instructor->designation}}</p>
                    @else

                    <p class=" text-sm font-medium ">Instructor</p>
                    @endif
                </div>
            </div>
            <div class="">
                <p class=" text-lg font-bold text-white bg-dgreen px-3 py-1 rounded-full"> {{number_format($item->current_price, 0) }} BDT</p>
            </div>
        </div>
        <div class=" course_level">
            @if ($item->status == '1')
            <p class="text-xs text-white bg-dorange px-2 py-1"> Pending</p>
            @elseif ($item->status == '2')
            <p class="text-xs text-white bg-dorange px-2 py-1"> On Review</p>
            @else

            <p class="text-xs text-white bg-dorange px-2 py-1"> Running</p>
            @endif
        </div>
    </div>
</div>
</a>
