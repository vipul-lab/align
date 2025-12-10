@extends('admin.layouts.app')
@section('content')
    <x-pageTitle title="Workouts">
        <a class="kt-btn kt-btn-primary" href="{{ route('workout.create') }}"><i class="fa-solid fa-plus"></i> Add New</a>
    </x-pageTitle>

    <div class="p-4">
        <div class="bg-white">
            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th><input type="checkbox" class="kt-checkbox" id="check" value="1" /></th>
                        <th>Name</th>
                        <th>For</th>
                        <th>Category</th>
                        <th>Equipments</th>
                        <th>Total exercises</th>
                        <th>Phase</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="kt-checkbox" id="check" value="1" /></td>
                        <td>
                            <div class="flex items-center">
                                <img alt="" class="size-6 rounded-xs justify-center mr-2" src="assets/images/300-2.png"/>
                                <p>Hiit</p>
                            </div>
                        </td>
                        <td>Beginner</td>
                        <td>Heavy weights </td>
                        <td><span class="size-6 inline-flex items-center text-sm rounded-xs bg-gray-100 border border-gray-200 justify-center">5</span></td>
                        <td><span class="size-6 inline-flex items-center text-sm rounded-xs bg-gray-100 border border-gray-200 justify-center">5</span></td>
                        <td><span class="kt-badge border border-polar-300 bg-polar-100 text-polar-600 rounded-xs">Ovulation</span></td>
                        <td>

                        <div data-kt-dropdown="true" data-kt-dropdown-trigger="click">
                            <button class="kt-btn kt-btn-ghost kt-btn-sm kt-btn-icon" data-kt-dropdown-toggle="true"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            <div class="kt-dropdown-menu w-52" data-kt-dropdown-menu="true">
                                <ul class="kt-dropdown-menu-sub">
                                    <li><a href="#" class="kt-dropdown-menu-link">Open Tasks</a></li>
                                </ul>
                            </div>
                        </div>

                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="kt-checkbox" id="check" value="1" /></td>
                        <td>
                            <div class="flex items-center">
                                <img alt="" class="size-6 rounded-xs justify-center mr-2" src="assets/images/300-2.png"/>
                                <p>Hiit</p>
                            </div>
                        </td>
                        <td>Beginner</td>
                        <td>Heavy weights </td>
                        <td><span class="size-6 inline-flex items-center text-sm rounded-xs bg-gray-100 border border-gray-200 justify-center">5</span></td>
                        <td><span class="size-6 inline-flex items-center text-sm rounded-xs bg-gray-100 border border-gray-200 justify-center">5</span></td>
                        <td><span class="kt-badge border border-[#ADC6FF] bg-[#F0F5FF] text-[#2F54EB] rounded-xs">Luteal</span></td>
                        <td>

                        <div data-kt-dropdown="true" data-kt-dropdown-trigger="click">
                            <button class="kt-btn kt-btn-ghost kt-btn-sm kt-btn-icon" data-kt-dropdown-toggle="true"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                            <div class="kt-dropdown-menu w-52" data-kt-dropdown-menu="true">
                                <ul class="kt-dropdown-menu-sub">
                                    <li><a href="#" class="kt-dropdown-menu-link">Open Tasks</a></li>
                                </ul>
                            </div>
                        </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script src="{{ asset('assets/vendors/datatables.js') }}"></script>
<script>
    // Initialize DataTable
    $(document).ready(function () {
        $('#myTable').DataTable({
            dom: 't<"flex flex-wrap items-center gap-2 justify-end p-4"ipl>',
            language: {
                info: "_START_ to _END_ of _TOTAL_ items",
                lengthMenu: "_MENU_"
            },
            columnDefs: [
                { targets: [0], type: 'string', orderable: false },   // <-- comma here
                { targets: [4], type: 'string' },
                { targets: [5], type: 'string' }
            ]
        });
    });
</script>
@endpush