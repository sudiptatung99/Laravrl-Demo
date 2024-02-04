<x-admin-layout>
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Password</h4>
                <div class="nk-block-des">
                    {{-- <p>Change Password</p> --}}
                </div>
            </div>
        </div>
        <div class="row g-gs">
            <div class="col-lg-12">
                <div class="card h-100">
                    <div class="card-inner">
                        <div class="card-head">
                            <h5 class="card-title">Change Password</h5>
                        </div>
                        <form action="{{ route('admin.change-password.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-label" for="full-name">Current Password</label>
                                <div class="mb-1 form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                        data-target="current_password"><em
                                            class="passcode-icon icon-show icon ni ni-eye-off"></em><em
                                            class="passcode-icon icon-hide icon ni ni-eye"></em></a>
                                    <input type="password" name="current_password" value="{{old('current_password')}}" class="form-control"
                                        id="current_password">
                                </div>
                                @error('current_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group"><label class="form-label" for="full-name">Password</label>
                                <div class="mb-1 form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                        data-target="password"><em
                                            class="passcode-icon icon-show icon ni ni-eye-off"></em><em
                                            class="passcode-icon icon-hide icon ni ni-eye"></em></a>
                                    <input type="password" name="password" value="{{old('password')}}" class="form-control" id="password">
                                </div>
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group"><label class="form-label" for="full-name">Confirm Password</label>
                                <div class="mb-1 form-control-wrap">
                                    <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                        data-target="password_confirmation"><em
                                            class="passcode-icon icon-show icon ni ni-eye-off"></em><em
                                            class="passcode-icon icon-hide icon ni ni-eye"></em></a>
                                    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}"  class="form-control"
                                        id="password_confirmation">
                                </div>
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
