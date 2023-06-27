<x-app-layout>
    <!-- Navigation Links -->
    <x-slot name="submenu">
            <x-nav-link :href="route('subscribers.index')" :active="request()->routeIs('subscribers.index')">
                {{ __('All Subscribers') }}
            </x-nav-link>
            <x-nav-link :href="route('newsletters.index')" :active="request()->routeIs('newsletters.index')">
                {{ __('News Letters') }}
            </x-nav-link>
    </x-slot>

    <div class="p-6">
        <div class="p-6 bg-white rounded-md text-gray-900">
            <table id="subtable" class="display stripe" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>


    <x-slot name="script">
        <script>
            var datatablelist = $('#subtable').DataTable({
                processing: true,
                serverSide: true,
                    ajax: "{!! route('subscribers.index') !!}",
                    columns: [
                        {"render": function(data, type, full, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: null,
                            render: function (data) {
                                if (data.status == 1){
                                    var statusLabels = '<span  class="bg-green-500 rounded-full text-white text-sm px-2"> Active </span>';
                                }else{
                                    var statusLabels = '<span  class="bg-orange-300 rounded-full text-gray-800 text-sm px-2"> In-Active </span>';
                                }
                                return statusLabels;
                            }
                        },
                        {
                            data: null,
                            render: function(data) {
                            return `<div class="flex justify-end"><button type="button"  class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700" onclick="activateDeactivateSubscriber(${data.id},${data.status});"><span class="iconify" data-icon="zondicons:reload"></span></button>
                                <button type="button"  class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="subscriberDelete(${data.id});"><span class="iconify" data-icon="majesticons:logout"></span></button></div>`;
                            }
                        }
                    ]
                });


            function subscriberDelete(subscriberID) {
                Swal.fire({
                    title: "Unsubscribe ?",
                    text: "Are you sure to unsubscribe this email ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Unsubscribe",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'DELETE',
                            url: BASE_URL + 'subscribers/' + subscriberID,
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

            // Changing Status
            function activateDeactivateSubscriber(subscriberID,status) {
                var message = ((status == 1?"De-activate":"Activate"));
                var updateStatus = ((status == 1?2:1));
                Swal.fire({
                    title: " "+message+"?",
                    text: "Do you want to "+message+" this Subscriber ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            method: 'PATCH',
                            url: BASE_URL +'subscribers/'+subscriberID,
                            data: {
                                subscriberID: subscriberID,
                                updateStatus: updateStatus,
                            },
                            success: function (response) {
                                if (response.status == "success") {
                                    Swal.fire('Success!', response.message, 'success');
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
