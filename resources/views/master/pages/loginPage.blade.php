<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login - Client</title>
    <link rel="shortcut icon" type="image/png" href="/assets/images/logos/seodashlogo.png" />
    <link rel="stylesheet" href="/assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{ url("/") }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="/assets/images/logos/logo-light.svg" alt="">
                                </a>
                                <p class="text-center">Your Social Campaigns</p>
                                <form method="POST" action="{{ route('login') }}" class="w-100">
                                    @csrf
                                    {{-- email --}}
                                    <div class="mb-4 d-flex flex-column px-5">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email"
                                            name="email" :value="old('email')" required autofocus
                                            autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <!-- Password -->
                                    <div class="mt-4 d-flex flex-column px-5">
                                        <x-input-label for="password" :value="__('Password')" />

                                        <x-text-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" required autocomplete="current-password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="d-flex flex-column align-items-start justify-content-between mb-4 px-5">
                                        <!-- Remember Me -->
                                        <div class="block mt-3">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                                    name="remember">
                                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                        </div>
                                        <div class="d-flex flex-column items-center justify-end mt-3">

                                            <div>
                                                <x-primary-button class="ms-0">
                                                    {{ __('Log in') }}
                                                </x-primary-button>
                                            </div>

                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                    href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mt-3">
                                            <p class="fs-4 mb-0 fw-bold">New to SeoDash?</p>
                                            <a class="text-primary fw-bold ms-2"
                                                href="{{ route("register") }}">Create an account</a>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
