<x-admin-layout>
    @section('title')Role @endsection
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="flex justify-between nk-block-head-content d-flex-wrap">
                <div>
                    <h4 class="nk-block-title">Role</h4>
                    <p>Role List</p>
                </div>
                <div>
                    <a href="{{route('admin.role.create')}}" class="btn btn-dim btn-secondary"><i class="mx-1 far fa-plus-square"></i>Create</a>
                </div>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="table datatable-init-export nowrap" data-export-title="Export">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($role) > 0)
                            @foreach ($role as $key => $role)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $role->role }}</td>
                                    <td>
                                         @can('update-role')
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('admin.role.edit', encrypt($role->id)) }}">Update</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" style="text-align: center"> No Record Found ! </td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-admin-layout>
