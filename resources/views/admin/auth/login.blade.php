{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<p>Admin Login</p>
    <form method="POST" action="{{ route('admin.login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500" name="remember">
                <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - Log In</title>
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dashlitee5ca.css?ver=3.2.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin/assets/css/themee5ca.css?ver=3.2.3') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4')}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="nk-body ui-rounder npc-general ui-light pg-auth">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="pb-4 text-center brand-logo">
                            <a href="../../index.html" class="logo-link">
                                <h2>Admin</h2>
                                {{-- <img class="logo-light logo-img logo-img-lg" src="../../images/logo.png"
                                    srcset="/demo9/images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="../../images/logo-dark.png"
                                    srcset="/demo9/images/logo-dark2x.png 2x" alt="logo-dark"> --}}
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Log-In</h4>
                                        <div class="nk-block-des">
                                            <p>Login to your account using your email and password</p>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('admin.login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email </label>
                                        <div class="mb-2 form-control-wrap">
                                            <input type="email" name="email" class="form-control form-control-lg"
                                                id="email" placeholder="Enter your email address or username">
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="mb-2 form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password"><em
                                                    class="passcode-icon icon-show icon ni ni-eye-off"></em><em
                                                    class="passcode-icon icon-hide icon ni ni-eye"></em></a>
                                            <input type="password" name="password" class="form-control form-control-lg"
                                                id="password" placeholder="Enter your Password">
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember_me">
                                            <label class="custom-control-label" for="remember_me">Remmember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group"><button
                                            class="btn btn-lg btn-primary btn-block">Register</button></div>
                                </form>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/assets/js/bundlee5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/scriptse5ca.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('admin/assets/js/demo-settingse5ca.js?ver=3.2.3') }}"></script>
    <script>
        $(function() {
            if (localStorage.chkbx && localStorage.chkbx != '') {
                $('#remember_me').attr('checked', 'checked');
                $('#email').val(localStorage.email);
                $('#password').val(localStorage.password);
            } else {
                $('#chkbx').removeAttr('checkedd');
                $('#email').val('');
                $('#password').val('');
            }

            $('#remember_me').click(function() {
                if ($('#remember_me').is(':checked')) {
                    localStorage.email = $('#email').val();
                    localStorage.password = $('#password').val();
                    localStorage.chkbx = $('#remember_me').val();
                } else {
                    localStorage.email = '';
                    localStorage.password = '';
                    localStorage.chkbx = '';
                }
            });
        });
    </script>
</body>

</html>
