<x-admin-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <div class="flex justify-between nk-block-head-content d-flex-wrap">
                    <div>
                        <h4 class="title nk-block-title">User</h4>
                        <div class="nk-block-des">
                            <p>Update User </p>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('admin.user.role.index') }}" class="btn btn-dim btn-secondary"><i class="mx-1 fas fa-list"></i>User list</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="row g-gs">
            <div class="col-lg-12">
                <div class="card h-100">
                    <div class="card-inner">

                        <form action="{{ route('admin.user.role.update',encrypt($admin->id)) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group"><label class="form-label" for="full-name">Name</label>
                                <div class="form-control-wrap"><input type="text" value="{{ $admin->name }}"
                                        name="name" class="form-control" id="full-name"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email-address">Email</label>
                                <div class="form-control-wrap">
                                    <input type="email" name="email" value="{{ $admin->email }}"
                                        class="form-control" id="email-address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email-address">Select Role</label>
                                <div class="form-control-wrap">
                                    <select class="form-select" name="role_id" aria-label="Default select example">
                                        <option selected disabled>-- Select Role --</option>
                                        @foreach ($role as $role)
                                            <option value="{{ $role->id }}" @if ($admin->role_id==$role->id) selected  @endif>{{ $role->role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><button type="submit"
                                    class="btn btn-lg btn-primary btn-sm">Update</button></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>

