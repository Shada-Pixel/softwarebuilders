<x-app-layout>
    <x-slot name="submenu">
        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
                {{ __('All Category') }}
            </x-nav-link>
            <x-nav-link :href="route('categories.create')" :active="request()->routeIs('categories.create')">
                {{ __('New Category') }}
            </x-nav-link>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="p-6 bg-white rounded-md">

            <table id="categoryTable" class="display stripe" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Keywords</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>


    <x-slot name="script">
        <script>
            var datatablelist = $('#categoryTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('categories.index') !!}",
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
                        data: 'keywords',
                        name: 'keywords'
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `<div class="flex"><a href="${BASE_URL}categories/${data.id}/edit" class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" ><span class="iconify" data-icon="iconamoon:edit-light"></span></a><button type="button"  class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="categoryDelete(${data.id});"><span class="iconify" data-icon="bi:trash-fill"></span></button></div>`;
                        }
                    }
                ]
            });


            function categoryDelete(categoryID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to delete this category ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'categories/' + categoryID,
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
