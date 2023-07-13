<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('courses.index')" :active="request()->routeIs('courses.index')">
                {{ __('All Courses') }}
            </x-nav-link>
            <x-nav-link :href="route('courses.create')" :active="request()->routeIs('courses.create')">
                {{ __('New Course') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="p-6 bg-white rounded-md">

            <table id="coursetable" class="display stripe" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


    <x-slot name="script">
        <script>
            var datatablelist = $('#coursetable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('courses.index') !!}",
                columns: [{
                        "render": function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'slug',
                        name: 'slug'
                    },
                    {
                        data: null,
                        render: function (data) {
                            if (data.status == '1'){
                                var statusLabels = '<span  class="bg-green-500 rounded-full text-white text-sm px-2 inline-block py-1">Pending</span>';
                            }else if(data.status == '2'){
                                var statusLabels = '<span  class="bg-orange-300 rounded-full text-gray-800 text-sm px-2 inline-block py-1">On Review</span>';
                            }else{
                                var statusLabels = '<span  class="bg-orange-300 rounded-full text-gray-800 text-sm px-2 inline-block py-1">Running</span>';
                            }

                            return statusLabels;
                        }
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `<div class="flex"><a href="${BASE_URL}quotations/show/${data.id}" class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify" data-icon="ic:baseline-remove-red-eye"></span></a><button type="button"  class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="quaryDelete(${data.id});"><span class="iconify" data-icon="bi:trash-fill"></span></button></div>`;
                        }
                    }
                ]
            });


            function quaryDelete(quaryID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to detede ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'quotations/delete/' + quaryID,
                            success: function(response) {
                                if (response.status == "success") {
                                    Swal.fire('Success!', response.message, 'success');
                                    datatablelist.draw();
                                } else if (response.status == "error") {
                                    Swal.fire('This item is not deletable!', response.message, 'error');
                                    datatablelist.draw();
                                }
                            }
                        });
                    }
                });
            }

        </script>
    </x-slot>
</x-app-layout>
