<x-admin-layout>
    @section('title')
        Dummy
    @endsection
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="flex justify-between nk-block-head-content d-flex-wrap">
                <div>
                    <h4 class="nk-block-title">Dummy</h4>
                    <p>Dummy List</p>
                </div>
                <div>
                    <a href="{{route('admin.dummy.create')}}" class="btn btn-dim btn-secondary"><i class="mx-1 far fa-plus-square"></i>Create</a>
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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Edit</a>
                                <button onclick='deleteData({{ 1 }})'
                                    class="btn btn-danger btn-sm">Delete</button>
                                {{-- <a href="{{ route('admin.blog',encrypt($item->id)) }}"
                                                            class="btn btn-success btn-sm">Blog</a> --}}
                                <form id='delete-form-{{ 1 }}'
                                    action="" method="post"
                                    class='d-none'>
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
