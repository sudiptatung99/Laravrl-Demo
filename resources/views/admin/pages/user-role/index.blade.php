<x-admin-layout>
    @section('title')
        User Role
    @endsection
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="flex justify-between nk-block-head-content d-flex-wrap">
                <div>
                    <h4 class="nk-block-title">User Role</h4>
                    <p>User Role List</p>
                </div>
                <div>
                    <a href="{{ route('admin.user.role.create') }}" class="btn btn-dim btn-secondary"><i
                            class="mx-1 far fa-plus-square"></i>Create</a>
                </div>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="table datatable-init-export nowrap" data-export-title="Export">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($admin) > 0)
                            @foreach ($admin as $key => $admin)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->role->role }}</td>
                                    <td>
                                        {{-- @can('update-sub-admin') --}}
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('admin.user.role.edit', encrypt($admin->id)) }}">Update</a>
                                        {{-- @endcan --}}
                                        {{-- @can('delete-sub-admin') --}}
                                        <button onclick='deleteData({{ $admin->id }})'
                                            class="btn btn-danger btn-sm">Delete</button>
                                        {{-- <a href="{{ route('admin.blog',encrypt($item->id)) }}"
                                                            class="btn btn-success btn-sm">Blog</a> --}}
                                        <form id='delete-form-{{ $admin->id }}' action="{{route('admin.user.role.delete',encrypt($admin->id))}}" method="post"
                                            class='d-none'>
                                            @csrf
                                            @method('delete')
                                        </form>
                                        {{-- @endcan --}}
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" style="text-align: center"> No Record Found ! </td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
