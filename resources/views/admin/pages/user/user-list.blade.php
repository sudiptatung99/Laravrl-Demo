<x-admin-layout>
    @section('title')Users @endsection
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="flex justify-between nk-block-head-content d-flex-wrap">
                <div>
                    <h4 class="nk-block-title">User</h4>
                    <p>User List</p>
                </div>
                <div>
                    {{-- <a href="#" class="btn btn-dim btn-secondary"><i class="mx-1 far fa-plus-square"></i>Create</a> --}}
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
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $key => $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
