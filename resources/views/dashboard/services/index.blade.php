<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="sm:gap-5  sm:ml-10 sm:flex">
            <x-nav-link :href="route('services.index')" :active="request()->routeIs('serveces.index')">
                {{ __('All Services') }}
            </x-nav-link>
            <x-nav-link :href="route('services.create')" :active="request()->routeIs('serveces.create')">
                {{ __('New Service') }}
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
                        <th>Sho In Home Page</th>
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
                ajax: "{!! route('services.index') !!}",
                columns: [{
                        "render": function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: null,
                        render: function (data) {
                            if (data.home_page == '1'){
                                var statusLabels = '<span  class="bg-green-500 rounded-full text-white text-sm px-2 inline-block py-1">Yes</span>';
                            }else {
                                var statusLabels = '<span  class="bg-orange-300 rounded-full text-gray-800 text-sm px-2 inline-block py-1">No</span>';
                            }

                            return statusLabels;
                        }
                    },
                    {
                        data: null,
                        render: function (data) {
                            if (data.status == '1'){
                                var statusLabels = '<span  class="bg-green-500 rounded-full text-white text-sm px-2 inline-block py-1">Active</span>';
                            }else {
                                var statusLabels = '<span  class="bg-orange-300 rounded-full text-gray-800 text-sm px-2 inline-block py-1">Inactive</span>';
                            }

                            return statusLabels;
                        }
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `<div class="flex"><a href="${BASE_URL}services/${data.id}/edit" class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify" data-icon="iconamoon:edit-light"></span></a><a href="${BASE_URL}services/${data.id}" class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify" data-icon="ic:baseline-remove-red-eye"></span></a><button type="button"  class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="serviceDelete(${data.id});"><span class="iconify" data-icon="bi:trash-fill"></span></button></div>`;
                        }
                    }
                ]
            });


            function serviceDelete(quaryID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to delete ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'services/' + quaryID,
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
