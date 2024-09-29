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
                                <a href="{{ url('/') }}"
                                    class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="/assets/images/logos/logo-light.svg" alt="">
                                </a>
                                <p class="text-center">Your Social Campaigns</p>
                                <form method="POST" action="{{ route('register') }}" class="w-100">
                                    @csrf
                                    <div class="mb-4 d-flex flex-column px-5">
                                        <x-input-label for="userName" :value="__('Name')" />
                                        <x-text-input id="userName" class="block mt-1 w-full" type="text"
                                            name="userName" required autofocus autocomplete="userName" />
                                        <x-input-error :messages="$errors->get('userName')" class="mt-2" />
                                    </div>
                                    {{-- email --}}
                                    <div class="mb-4 d-flex flex-column px-5">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="block mt-1 w-full" type="email"
                                            name="email" :value="old('email')" required autofocus autocomplete="off" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    {{-- password --}}
                                    <div class="mb-4 d-flex flex-column px-5">
                                        <x-input-label for="email" :value="__('Password')" />
                                        <x-text-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" required autofocus autocomplete="off" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    {{-- sign up --}}
                                    <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                                        <div>
                                            <x-primary-button class="ms-0">
                                                {{ __('Sign up') }}
                                            </x-primary-button>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                        <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                                        <a class="text-primary fw-bold ms-2" href="{{ route("login") }}">Sign
                                            In</a>
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
