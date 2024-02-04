<x-admin-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <div class="flex justify-between nk-block-head-content d-flex-wrap">
                    <div>
                        <h4 class="title nk-block-title">User</h4>
                        <div class="nk-block-des">
                            <p>Create User </p>
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

                        <form action="{{ route('admin.user.role.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group"><label class="form-label" for="full-name">Name</label>
                                <div class="form-control-wrap"><input type="text" value="{{ old('name') }}"
                                        name="name" class="form-control" id="full-name"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email-address">Email</label>
                                <div class="form-control-wrap">
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control" id="email-address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email-address">password</label>
                                <div class="form-control-wrap">
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        class="form-control" id="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email-address">Select Role</label>
                                <div class="form-control-wrap">
                                    <select class="form-select" name="role_id" aria-label="Default select example">
                                        <option selected disabled>-- Select Role --</option>
                                        @foreach ($role as $role)
                                            <option value="{{ $role->id }}">{{ $role->role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><button type="submit"
                                    class="btn btn-lg btn-primary btn-sm">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
