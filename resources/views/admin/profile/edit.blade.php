<x-admin-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Profile</h4>
                <div class="nk-block-des">
                    <p>Update Profile</p>
                </div>
            </div>
        </div>
        <div class="row g-gs">
            <div class="col-lg-12">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Profile Info</h5>
                        </div>
                        <form action="{{route('admin.profile.update')}}" method="POST">
                            @csrf
                            <div class="form-group"><label class="form-label"
                                    for="full-name">Name</label>
                                <div class="form-control-wrap"><input type="text" name="name"
                                        class="form-control" id="full-name" value="{{Auth::guard('admin')->user()->name}}"></div>
                            </div>
                            <div class="form-group"><label class="form-label"
                                    for="email-address">Email</label>
                                <div class="form-control-wrap"><input type="email" name="email"
                                        class="form-control" id="email-address" value="{{Auth::guard('admin')->user()->email}}"></div>
                            </div>

                            <div class="form-group"><button type="submit"
                                    class="btn btn-lg btn-primary">Update</button></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-layout>
