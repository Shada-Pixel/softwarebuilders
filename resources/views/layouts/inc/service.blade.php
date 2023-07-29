<a href="{{route('services.show',$service->id)}}">

    <div class=" py-9 px-5 bg-lgreen hover:bg-nblue rounded-md transition cursor-pointer text-nblue hover:text-white">
        <div class="">
            <div class="flex justify-center lg:justify-start"> <img class=" w-20 h-20" src="{{asset($service->icon)}}" alt="{{$service}}"></div>
            <h2 class=" text-3xl font-bold mt-5 text-center lg:text-left ">{{$service->title}}</h2>
            <p class=" text-base leading-5 font-normal mt-3 text-center lg:text-left">{!! $service->short_description !!}</p>
        </div>
    </div>
</a>
