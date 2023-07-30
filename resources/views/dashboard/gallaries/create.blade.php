<x-app-layout>
    <x-slot name="headscript">
        <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    </x-slot>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('albums.index')" :active="request()->routeIs('albums.index')">
                {{ __('All Album') }}
            </x-nav-link>
            <x-nav-link :href="route('albums.create')" :active="request()->routeIs('albums.create')">
                {{ __('New Album') }}
            </x-nav-link>
            <x-nav-link :href="route('courses.create')" :active="request()->routeIs('courses.create')">
                {{ __('All Photos') }}
            </x-nav-link>
            <x-nav-link :href="route('batches.index')" :active="request()->routeIs('batches.index')">
                {{ __('Add Photo To Album') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="p-6 bg-white rounded-md">
            <h1 class="text-xl mb-1">New Album Information</h1>
            <p>(<span class="text-red-500 mb-4">*</span>) marked fields are required.</p>

            <form method="POST" action="{{ route('albums.store') }}" id="course-store" enctype="multipart/form-data" >
                @csrf
                <div class="">
                    <!-- Name -->
                    <div class="">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <hr class="my-4">


                    <!-- cover -->
                    <div class="">
                        <x-input-label for="cover" :value="__('Photos')" />
                        <x-text-input id="cover" class="block mt-1 w-full file:mr-5 file:mb-[2px] file:py-2 file:px-2 file:border-0 file:font-jost file:uppercase  file:text-white file:bg-dgreen" type="file" name="cover"
                            :value="old('cover')" required multiple="true"/>
                        <x-input-error :messages="$errors->get('cover')" class="mt-2" />
                    </div>

                </div>
                <div class="flex items-center justify-end col-span-2 mt-4">

                    <x-primary-button class="ml-4" onclick="formsubmit()">
                        {{ __('Create Album') }}
                    </x-primary-button>
                </div>

            </form>
        </div>
    </div>


    <x-slot name="script">
        <script src="{{asset('js/course/course.js')}}"></script>
    </x-slot>
</x-app-layout>
