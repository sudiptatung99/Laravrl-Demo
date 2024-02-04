<x-admin-layout>
    @section('title')
         Create Role
    @endsection
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="flex justify-between nk-block-head-content d-flex-wrap">
                <div>
                    <h4 class="nk-block-title">Role</h4>
                    <p>Create Role</p>
                </div>
                <div>
                    <a href="{{route('admin.role.index')}}" class="btn btn-dim btn-secondary">Role List</a>
                </div>
            </div>
        </div>
        <div class="row g-gs">
            <div class="col-lg-12">
                <div class="card h-100">
                    <div class="card-inner">

                        <form action="{{ route('admin.role.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-3 mb-4 col-md-12">
                                <label for="inputFirstName" class="form-label">Role</label>
                                <input type="text" class="form-control" name="role" value="{{ old('role') }}">
                            </div>


                            <!--<div class="form-group">-->
                            <!--    <input type="checkbox" name="" id="select-all" onclick="select()">-->
                            <!--    <label for="select-all">Select All</label>-->

                            <!--</div>-->
                            <div class="flex-wrap d-flex">
                                @foreach ($module as $key => $module)
                                    <div class="mx-2 form-row">
                                        <div class="col">
                                            <h5>Module: {{ $module->name }}</h5>
                                            @foreach ($module->permission as $key => $permission)
                                                <div class="mb-3 ml-4">
                                                    <div>
                                                        <input type="checkbox" name="permission[]"
                                                            id="permission-{{ $permission->id }}"
                                                            value="{{ $permission->id }}">
                                                        <label
                                                            for="permission-{{ $permission->id }}">{{ $permission->name }}</label>

                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="m-auto col-12">
                                <button type="submit" class="px-5 btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function select() {
            alert('all');
            console.log("daghas");
            var aa = document.querySelectorAll("input[type=checkbox]");
            for (var i = 0; i < aa.length; i++) {
                aa[i].checked = true;
            }
        }
        // ('#select-all').click(function(event) {
        //     console.log(event);
        //     if (this.checked) {
        //         $(':checkbox').each(function() {
        //             this.checked = true;
        //         })
        //         else {
        //             $(':checkbox').each(function() {
        //                 this.checked = false;
        //             })
        //         }
        //     }
        // })
    </script>

</x-admin-layout>
