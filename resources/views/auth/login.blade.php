<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr"
    data-pc-theme="light">
<!-- [Head] start -->

<head>
    <title>Login | Kursus Si Ireng</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- [Font] Family -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/fonts/phosphor/duotone/style.css')}}" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/fonts/tabler-icons.min.css')}}" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/fonts/feather.css')}}" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/fonts/fontawesome.css')}}" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/fonts/material.css')}}" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/style.css')}}" id="main-style-link" />

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <a href="{{ route('landing') }}"
    class="fixed flex z-50 items-center gap-2 rounded-lg bg-white px-4 py-2 shadow-md hover:shadow-lg transition"
    style="top: 30px; left: 30px;">
        <i data-feather="arrow-left" class="w-5 h-5"></i>
        <span class="text-sm font-medium">Back</span>
    </a>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
        <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
            <div
                class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]">
            </div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <div class="auth-main relative">
        <div class="auth-wrapper v1 flex items-center w-full h-full min-h-screen">
            <div class="auth-form flex items-center justify-center grow flex-col min-h-screen relative p-6 ">
                <div class="w-full max-w-[350px] relative">
                    <div class="auth-bg ">
                        <span
                            class="absolute top-[-100px] right-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
                        <span
                            class="absolute top-[150px] right-[-150px] w-5 h-5 block rounded-full bg-primary-500 animate-[floating_9s_infinite]"></span>
                        <span
                            class="absolute left-[-150px] bottom-[150px] w-5 h-5 block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
                        <span
                            class="absolute left-[-100px] bottom-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-2 animate-[floating_9s_infinite]"></span>
                    </div>
                    @if (session()->has('success'))
                        <div id="success-alert"
                            class="relative flex items-center justify-between w-8/12 mx-auto mb-4 rounded-lg border border-green-400 bg-success-500 px-4 py-3 text-gray-900">
                            <h6 class="mb-0">{{ session('success') }}</h6>
                            <button onclick="closeAlert('success-alert')"
                                class="ml-4 text-xl font-bold leading-none hover:opacity-70">
                                &times;
                            </button>
                        </div>
                    @endif
                    @error('error')
                        <div id="error-alert"
                            class="relative flex items-center justify-between w-8/12 mx-auto mb-4 rounded-lg border border-green-400 bg-danger-600 px-4 py-3 text-slate-50">
                            <h6 class="mb-0 text-slate-50">{{ $message }}</h6>
                            <button onclick="closeAlert('error-alert')"
                                class="ml-4 text-xl font-bold leading-none hover:opacity-70">
                                &times;
                            </button>
                        </div>
                    @enderror
                    <div class="card sm:my-12 w-full shadow-none">
                        <div class="card-body !p-10">
                            <h4 class="text-center font-medium mb-4">Login</h4>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input type="email" class="form-control @error('email') border-red-500 @else border-gray-300 @enderror" id="floatingInput"
                                        placeholder="Email Address" name="email" />
                                        @error('email')
                                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="mb-4">
                                    <input type="password" class="form-control @error('password') border-red-500 @else border-gray-300 @enderror" id="floatingInput1"
                                        placeholder="Password" name="password" />
                                        @error('email')
                                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="mt-4 text-center">
                                    <button type="submit" class="btn btn-primary mx-auto shadow-2xl">Login</button>
                                </div>
                            </form>
                            <div class="flex justify-between items-end flex-wrap mt-4">
                                <h6 class="font-medium mb-0">Don't have an Account?</h6>
                                <a href="{{ route('register') }}" class="text-primary-500">Create Account</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="{{ asset("assets/dashboard/js/plugins/simplebar.min.js") }}"></script>
    <script src="{{ asset("assets/dashboard/js/plugins/popper.min.js") }}"></script>
    <script src="{{ asset("assets/dashboard/js/icon/custom-icon.js") }}"></script>
    <script src="{{ asset("assets/dashboard/js/plugins/feather.min.js") }}"></script>
    <script src="{{ asset("assets/dashboard/js/component.js") }}"></script>
    <script src="{{ asset("assets/dashboard/js/theme.js") }}"></script>
    <script src="{{ asset("assets/dashboard/js/script.js") }}"></script>

    <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
    </div>

    <script>
        layout_change('false');
    </script>

    <script>
        layout_theme_sidebar_change('dark');
    </script>

    <script>
        change_box_container('false');
    </script>

    <script>
        layout_caption_change('true');
    </script>

    <script>
        layout_rtl_change('false');
    </script>

    <script>
        preset_change('preset-1');
    </script>

    <script>
        main_layout_change('vertical');
    </script>

    <script>
        function closeAlert(id) {
            const alertBox = document.getElementById(id);
            alertBox.style.transition = 'opacity 0.3s ease';
            alertBox.style.opacity = '0';

            setTimeout(() => {
                alertBox.style.display = 'none';
            }, 300);
        }
    </script>

</body>
<!-- [Body] end -->

</html>