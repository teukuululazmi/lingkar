{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Lingkaran Kreatif</title>
		<link rel="shortcut icon" href="{{ asset('assets/images/LOGO_.png') }}">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

		<!-- icon css include -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}">

		<!-- carousel css include -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

		<!-- others css include -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/calendar.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lightcase.css') }}">

		<!-- color switcher css include -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/style-switcher.css') }}">
		<link id="color_theme" rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/default.css') }}">

		<!-- custom css include -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

	</head>


	<body>




		
		<!-- backtotop - start -->
		<div id="thetop" class="thetop"></div>
		<div class='backtotop'>
			<a href="#thetop" class='scroll'>
				<i class="fas fa-angle-double-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<div id="preloader"></div>
		<!-- preloader - end -->





		<!-- header-section - start
		================================================== -->
		<header id="header-section" class="header-section sticky-header-section not-stuck clearfix">
			<!-- header-bottom - start -->
			<div class="header-bottom">
				<div class="container">
					<div class="row">

						<!-- site-logo-wrapper - start -->
						<div class="col-lg-3">
							<div class="site-logo-wrapper">
								<a href="{{ url('/') }}" class="logo">
									<img src="assets/images/LOGO-01.png" alt="logo_not_found">
								</a>
							</div>
						</div>
						<!-- site-logo-wrapper - end -->

						<!-- mainmenu-wrapper - start -->
						<div class="col-lg-9">
							<div class="mainmenu-wrapper">
								<div class="row">

									<!-- menu-item-list - start -->
									<div class="col-lg-10">
										<div class="menu-item-list ul-li clearfix mt-2">
											<ul>
												<li class="menu-item-has-children">
													<a href="/">home</a>
												</li>
												<li class="menu-item-has-children">
													<a href="{{ url('/about') }}">about</a>
												</li>
												<li>
													<a href="{{ url('/galeri') }}">gallery</a>
												</li>
												<li class="menu-item-has-children">
													<a href="{{ url('/contact') }}">contact</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- menu-item-list - end -->
								</div>
							</div>
						</div>
						<!-- mainmenu-wrapper - end -->

					</div>
				</div>
			</div>
			<!-- header-bottom - end -->
		</header>
		<!-- header-section - end
		================================================== -->





		<!-- altranative-header - start
		================================================== -->
		<div class="header-altranative">
			<div class="container">
				<div class="logo-area float-left">
					<a href="{{ url('/') }}">
						<img src="assets/images/LOGO-01.png" alt="logo_not_found">
					</a>
				</div>

				<button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
					<i class="fas fa-bars"></i>
				</button>
			</div>

			<!-- sidebar menu - start -->
			<div class="sidebar-menu-wrapper">
				<div id="sidebar" class="sidebar">
					<span id="sidebar-dismiss" class="sidebar-dismiss">
						<i class="fas fa-arrow-left"></i>
					</span>

					<div class="sidebar-header">
						<a href="{{ url('/') }}">
							<img src="assets/images/LOGO-01.png" alt="logo_not_found">
						</a>
					</div>

					<!-- sidebar-form - start -->
					{{-- <div class="sidebar-form">
						<form action="#">
							<input id="altmenu-sidebar-search" type="search" placeholder="Search">
							<label for="altmenu-sidebar-search"><i class="fas fa-search"></i></label>
						</form>
					</div> --}}
					<!-- sidebar-form - end -->

					<!-- main-pages-links - start -->
					<div class="menu-link-list main-pages-links">
						<h2 class="menu-title">Menu</h2>
						<ul>
							<li class="active">
								<a href="{{ url('/') }}">
									<span class="icon"><i class="fas fa-home"></i></span>
									Home
								</a>
							</li>
							<li>
								<a href="{{ url('/about') }}">
									<span class="icon"><i class="fas fa-id-card"></i></span>
									About
								</a>
							</li>
							<li>
								<a href="{{ url('/galeri') }}">
									<span class="icon"><i class="fas fa-id-card-alt"></i></span>
									Gallery
								</a>
							</li>
							<li>
								<a href="{{ url('/contact') }}">
									<span class="icon"><i class="fas fa-address-book"></i></span>
									Contact
								</a>
							</li>
						</ul>
					</div>
					<!-- main-pages-links - end -->

					<!-- social-links - start -->
					<div class="social-links">
						<h2 class="menu-title">get in touch</h2>
						<div class="mb-15">
							<h3 class="contact-info">
								<i class="fas fa-phone"></i>
								<a href="https://wa.widget.web.id/646eed" target="_blank">+62 811-6890-866</a>
							</h3>
							<h3 class="contact-info">
								<i class="fas fa-envelope"></i>
								lingkarankreatifaceh@gmail.com
							</h3>
						</div>
						<ul>
							<li>
								<a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/lingkarankreatifcc/" target="_blank"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
						<a href="{{ url('/contact') }}" class="contact-btn">contact us</a>
					</div>
					<!-- social-links - end -->

					<div class="overlay"></div>
				</div>
			</div>
			<!-- sidebar menu - end -->
		</div>
		<!-- altranative-header - end
		================================================== -->





		<!-- slide-section - start
		================================================== -->
		<section id="slide-section" class="slide-section clearfix">
			<div id="main-carousel1" class="main-carousel1 owl-carousel owl-theme">
				@foreach (Ghost::welcome() as $item)
				<div class="item @if($loop->first) active @endif" style="background-image: url({{ asset('/fotoslider/' .$item->foto ?? '') }});">
					<div class="overlay-black">
						<div class="container">
							<div class="slider-item-content">

								<span class="medium-text"></span>
								<h1 class="big-text">LINGKARAN KREATIF</h1>
								<small class="small-text">every event sould be perfect</small>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				{{-- <div class="item" style="background-image: url({{ asset('assets/images/slider/BACKGROUND-02.jpg') }});">
					<div class="overlay-black">
						<div class="container">
							<div class="slider-item-content">

								<span class="medium-text">one stop</span>
								<h1 class="big-text">Event Planner</h1>
								<small class="small-text">every event sould be perfect</small>

								<div class="link-groups">
									<a href="about.html" class="about-btn custom-btn">about us</a>
									<a href="#!" class="start-btn">get started!</a>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="item" style="background-image: url({{ asset('assets/images/slider/BACKGROUND-03.jpg') }});">
					<div class="overlay-black">
						<div class="container">
							<div class="slider-item-content">

								<span class="medium-text">one stop</span>
								<h1 class="big-text">Event Planner</h1>
								<small class="small-text">every event sould be perfect</small>

								<div class="link-groups">
									<a href="about.html" class="about-btn custom-btn">about us</a>
									<a href="#!" class="start-btn">get started!</a>
								</div>

							</div>
						</div>
					</div>
				</div> --}}

			</div>
		</section>
		<!-- slide-section - end
		================================================== -->

		<!-- upcomming-event-section - start
		================================================== -->
		{{-- <section id="upcomming-event-section" class="upcomming-event-section sec-ptb-100 clearfix">
			<div class="container">

				<!-- section-title - start -->
				<div class="section-title text-center mb-50">
					<small class="sub-title">upcomming events</small>
					<h2 class="big-title">Latest <strong>Awesome Events</strong></h2>
				</div>
				<!-- section-title - end -->

				<!-- upcomming-event-carousel - start -->
				<div id="upcomming-event-carousel" class="upcomming-event-carousel owl-carousel owl-theme">

					<!-- item - start -->
					<div class="item">
						<div class="event-item">

							<div class="countdown-timer">
								<ul class="countdown-list" data-countdown="2019/01/01"></ul>
							</div>

							<div class="event-image">
								<img src="assets/images/upcomming-events/event-1.jpg" alt="Image_not_found">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
							</div>

							<div class="event-content">
								<div class="event-title mb-30">
									<h3 class="title">
										The Governors Music Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="custom-btn">
									tickets & details
								</a>
							</div>

						</div>
					</div>
					<!-- item - end -->

					<!-- item - start -->
					<div class="item">
						<div class="event-item">

							<div class="countdown-timer">
								<ul class="countdown-list" data-countdown="2019/01/01"></ul>
							</div>

							<div class="event-image">
								<img src="assets/images/upcomming-events/event-2.jpg" alt="Image_not_found">
								<div class="post-date">
									<span class="date">28</span>
									<small class="month">aug</small>
								</div>
							</div>

							<div class="event-content">
								<div class="event-title mb-30">
									<h3 class="title">
										The Governors Music Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="custom-btn">
									tickets & details
								</a>
							</div>

						</div>
					</div>
					<!-- item - end -->

					<!-- item - start -->
					<div class="item">
						<div class="event-item">

							<div class="countdown-timer">
								<ul class="countdown-list" data-countdown="2019/01/01"></ul>
							</div>

							<div class="event-image">
								<img src="assets/images/upcomming-events/event-3.jpg" alt="Image_not_found">
								<div class="post-date">
									<span class="date">20</span>
									<small class="month">may</small>
								</div>
							</div>

							<div class="event-content">
								<div class="event-title mb-30">
									<h3 class="title">
										The Governors Music Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="custom-btn">
									tickets & details
								</a>
							</div>

						</div>
					</div>
					<!-- item - end -->

					<!-- item - start -->
					<div class="item">
						<div class="event-item">

							<div class="countdown-timer">
								<ul class="countdown-list" data-countdown="2019/01/01"></ul>
							</div>

							<div class="event-image">
								<img src="assets/images/upcomming-events/event-1.jpg" alt="Image_not_found">
								<div class="post-date">
									<span class="date">26</span>
									<small class="month">june</small>
								</div>
							</div>

							<div class="event-content">
								<div class="event-title mb-30">
									<h3 class="title">
										The Governors Music Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="custom-btn">
									tickets & details
								</a>
							</div>

						</div>
					</div>
					<!-- item - end -->

					<!-- item - start -->
					<div class="item">
						<div class="event-item">

							<div class="countdown-timer">
								<ul class="countdown-list" data-countdown="2019/01/01"></ul>
							</div>

							<div class="event-image">
								<img src="assets/images/upcomming-events/event-2.jpg" alt="Image_not_found">
								<div class="post-date">
									<span class="date">28</span>
									<small class="month">aug</small>
								</div>
							</div>

							<div class="event-content">
								<div class="event-title mb-30">
									<h3 class="title">
										The Governors Music Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="custom-btn">
									tickets & details
								</a>
							</div>

						</div>
					</div>
					<!-- item - end -->

					<!-- item - start -->
					<div class="item">
						<div class="event-item">

							<div class="countdown-timer">
								<ul class="countdown-list" data-countdown="2019/01/01"></ul>
							</div>

							<div class="event-image">
								<img src="assets/images/upcomming-events/event-3.jpg" alt="Image_not_found">
								<div class="post-date">
									<span class="date">20</span>
									<small class="month">may</small>
								</div>
							</div>

							<div class="event-content">
								<div class="event-title mb-30">
									<h3 class="title">
										The Governors Music Festival 2018
									</h3>
									<span class="ticket-price yellow-color">Tickets from $52</span>
								</div>
								<div class="event-post-meta ul-li-block mb-30">
									<ul>
										<li>
											<span class="icon">
												<i class="far fa-clock"></i>
											</span>
											Start 20:00pm - 22:00pm
										</li>
										<li>
											<span class="icon">
												<i class="fas fa-map-marker-alt"></i>
											</span>
											Manhattan, New York
										</li>
									</ul>
								</div>
								<a href="#!" class="custom-btn">
									tickets & details
								</a>
							</div>

						</div>
					</div>
					<!-- item - end -->

				</div>
				<!-- upcomming-event-carousel - end -->

			</div>
		</section> --}}
		<!-- upcomming-event-section - end
		================================================== -->

		<!-- about-section - start
		================================================== -->
		<section id="about-section" class="about-section sec-ptb-100 clearfix">
			<div class="container">
				<div class="row">

					<!-- section-title - start -->
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="section-title text-left mb-30">
							<span class="line-style"></span>
							{{-- <small class="sub-title">We Are Lingkaran Kreatif</small> --}}
							<h2 class="big-title">Lingkaran Kreatif</h2>
							<p class="black-color mb-50">
								Lingkaran Media Kreatif dibentuk pada awal bulan Mei 2020. Bermula dari kumpulan professional muda yang pernah aktif di berbagai Jasa Event Organizer, maka kami sepakat untuk membentuk tim baru yang lebih solid untuk dapat menciptakan sesuatu yang lebih kreatif dan diterima masyarakat. Saat ini kami mempunyai 3 Divisi Unit yang secara khusus menangani kebutuhan customer, yaitu Marketing yang bertugas sebagai Account Manager dimana tim kami akan menganalisa dan menyiapkan solusi untuk pelaksanaan kegiatan secara end to end. 
							</p>
							<a href="{{ url('/about') }}" class="custom-btn">
								About
							</a>
						</div>
					</div>
					<!-- section-title - end -->

					<!-- about-item-wrapper - start -->
					<div class="col-lg-8 col-md-12 col-sm-12">
						<div class="about-item-wrapper ul-li">
							<ul>

								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-handshake"></i>
										</span>
										<strong class="title">
											Friendly Team
										</strong>
										<small class="sub-title">
											More than 200 teams
										</small>
									</a>
								</li>
								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-two-balloons"></i>
										</span>
										<strong class="title">
											perfact venues
										</strong>
										<small class="sub-title">
											perfact venues
										</small>
									</a>
								</li>
								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-cheers"></i>
										</span>
										<strong class="title">
											Unique Scenario
										</strong>
										<small class="sub-title">
											We thinking out of the box
										</small>
									</a>
								</li>

								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-clown-hat"></i>
										</span>
										<strong class="title">
											Unforgettable Time
										</strong>
										<small class="sub-title">
											We make you perfect event
										</small>
									</a>
								</li>
								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-speech-bubble"></i>
										</span>
										<strong class="title">
											24/7 Hours Support
										</strong>
										<small class="sub-title">
											Anytime anywhere
										</small>
									</a>
								</li>
								<li>
									<a href="#!" class="about-item">
										<span class="icon">
											<i class="flaticon-light-bulb"></i>
										</span>
										<strong class="title">
											Briliant Idea
										</strong>
										<small class="sub-title">
											We have million idea
										</small>
									</a>
								</li>

							</ul>
						</div>
					</div>
					<!-- about-item-wrapper - end -->
					
				</div>
			</div>
		</section>
		<!-- about-section - end
		================================================== -->
		<!-- event-gallery-section - start
		================================================== -->
		<section id="event-gallery-section" class="event-gallery-section sec-ptb-100 clearfix">

			<!-- section-title - start -->
			<div class="section-title text-center mb-50">
				<small class="sub-title">Lingkaran Kreatif Gallery</small>
				<h2 class="big-title">Beautiful & <strong>Unforgettable Times</strong></h2>
			</div>
			<!-- section-title - end -->

			<div class="button-group filters-button-group mb-30">
				<button class="button is-checked" data-filter="*">
					<i class="fas fa-star"></i>
					<strong>all</strong> gallery
				</button>
				<button class="button" data-filter=".video-gallery">
					<i class="fas fa-play-circle"></i>
					<strong>video</strong> gallery
				</button>
				<button class="button" data-filter=".photo-gallery">
					<i class="far fa-image"></i>
					<strong>photo</strong> gallery
				</button>
			</div>

			<div class="grid clearfix mb-80" data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
				<div class="grid-item grid-item--height2 photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/1.image.jpg" data-rel="lightcase:photoGallery">
						<img src="assets/images/gallery/1.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>John Doe Wedding day</h3>
						<span>Wedding Party, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
					<a class="" href="https://www.youtube.com/embed/-haiaZ011OM" data-rel="lightcase:videoGallery">
						<img src="assets/images/gallery/2.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>Business Conference in Dubai</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/3.image.jpg" data-rel="lightcase:photoGallery">
						<img src="assets/images/gallery/3.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>Envato Author Fun Hiking</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>

				<div class="grid-item photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/4.image.jpg" data-rel="lightcase:photoGallery">
						<img src="assets/images/gallery/4.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>John Doe Wedding day</h3>
						<span>Wedding Party, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item grid-item--width2 video-gallery" data-category="video-gallery">
					<a class="" href="https://www.youtube.com/embed/M7nqLSwdSy4" data-rel="lightcase:videoGallery">
						<img src="assets/images/gallery/5.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>New Year Celebration</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>

				<div class="grid-item grid-item--width2 photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/6.image.jpg" data-rel="lightcase:photoGallery">
						<img src="assets/images/gallery/6.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>John Doe Wedding day</h3>
						<span>Wedding Party, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item video-gallery " data-category="video-gallery">
					<a class="" href="https://www.youtube.com/embed/2vhBU0-KlNQ" data-rel="lightcase:videoGallery">
						<img src="assets/images/gallery/7.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>New Year Celebration</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>
				<div class="grid-item photo-gallery " data-category="photo-gallery">
					<a class="popup-link" href="assets/images/gallery/8.image.jpg" data-rel="lightcase:photoGallery">
						<img src="assets/images/gallery/8.image.jpg" alt="Image_not_found">
					</a>
					<div class="item-content">
						<h3>Envato Author Fun Hiking</h3>
						<span>Food Festival, 24 June 2016</span>
					</div>
				</div>
			</div>
		</section>
		<!-- event-gallery-section - end
		================================================== -->

		<!-- speaker-section - start
		================================================== -->
		<section id="speaker-section" class="speaker-section clearfix">
			{{-- <div class="jarallax" style="background-image: url({{ asset('assets/images/anggota.png') }});"> --}}
			<div class="jarallax">
				<img src="{{ asset('assets/images/anggotaaaa.jpg') }}" class="d-block w-100" height="100%"  alt="...">
			</div>
		</section>
		<!-- speaker-section - end
		================================================== -->

		<!-- partners-clients-section - start
		================================================== -->
		
		<section id="speaker-section" class="speaker-section clearfix mt-2">
				<div class="jarallax">
				<img src="{{ asset('assets/images/clients.jpg') }}" class="d-block w-100" height="100%"  alt="...">
			</div>
		</section>
		<!-- partners-clients-section - end
		================================================== -->

		<!-- google map - start
		================================================== -->
		{{-- <section id="map-section" class="map-section clearfix">
			<div id="google-map">
				<div id="googleMaps" class="google-map-container mt-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.1655701641157!2d95.32740767368401!3d5.542450833788496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30403742bec1804b%3A0x101f6d81088dea7a!2sBreak%20Time!5e0!3m2!1sid!2sid!4v1704810630066!5m2!1sid!2sid" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section> --}}
		<section id="map-section" class="map-section clearfix">
			<div id="google-map">
				<div id="googleMaps" class="google-map-container"></div>
			</div>
		</section>
		<!-- google map - end
		================================================== -->

		<!-- footer-section2 - start
		================================================== -->
		<footer id="footer-section" class="footer-section footer-section2 clearfix">

			<!-- footer-top - start -->
			<div class="footer-top sec-ptb-100 clearfix">
				<div class="container">
					<div class="row">

						<!-- about-wrapper - start -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="about-wrapper">

								<!-- site-logo-wrapper - start -->
								<div class="site-logo-wrapper mb-30">
									<a href="#" class="logo">
										<img src="{{ asset('assets/images/LOGO-01.png') }}" alt="logo_not_found">
									</a>
								</div>
								<!-- site-logo-wrapper - end -->

								<p class="mb-30">
									{{-- Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. --}}
								</p>

								<!-- basic-info - start -->
								<div class="basic-info ul-li-block mb-50">
									<ul>
										<li>
											<i class="fas fa-map-marker-alt"></i>
											Jalan Dr H Teuku Mohammad Hasan Desa No.10A, Sukadamai, Lueng Bata, Banda Aceh City, Aceh 23245
										</li>
										<li>
											<i class="fas fa-envelope"></i>
											<a href="#!">lingkarankreatifaceh@gmail.com</a>
										</li>
										<li>
											<i class="fas fa-phone"></i>
											<a href="https://wa.widget.web.id/646eed" target="_blank">+62 811-6890-866</a>
										</li>
									</ul>
								</div>
								<!-- basic-info - end -->

								<!-- social-links - start -->
								<div class="social-links ul-li">
									<h3 class="social-title">Sosial Media</h3>
									<ul>
										<li>
											<a href="#!"><i class="fab fa-youtube"></i></a>
										</li>
										<li>
											<a href="https://www.instagram.com/lingkarankreatifcc/" target="_blank"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>
								</div>
								<!-- social-links - end -->
								
							</div>
						</div>
						<!-- about-wrapper - end -->

						<!-- usefullinks-wrapper - start -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="usefullinks-wrapper ul-li-block">
								{{-- <h3 class="footer-item-title">
									useful <strong>links</strong>
								</h3>
								<ul>
									<li><a href="#!">About Harmoni</a></li>
									<li><a href="#!">Disclaimer</a></li>
									<li><a href="#!">Contact us</a></li>
									<li><a href="#!">Events Schedule</a></li>
									<li><a href="#!">Sponsors</a></li>
									<li><a href="#!">Venues</a></li>
									<li><a href="#!">Tickets</a></li>
									<li><a href="#!">Pricing Plans</a></li>
								</ul> --}}
							</div>
						</div>
						<!-- usefullinks-wrapper - end -->

						<!-- instagram-wrapper - start -->
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="instagram-wrapper ul-li">
								<h3 class="footer-item-title">
									Lingkaran Kreatif <strong>instagram</strong>
								</h3>
								<ul>
									{{-- @foreach (Ghost::welcome() as $item)
									<div class="item @if($loop->first) active @endif" style="background-image: url({{ asset('/fotoslider/' .$item->foto ?? '') }});">
										<div class="overlay-black">
											<div class="container">
												<div class="slider-item-content">

													<span class="medium-text">one stop</span>
													<h1 class="big-text">Event Planner</h1>
													<small class="small-text">every event sould be perfect</small>
												</div>
											</div>
										</div>
									</div>
									@endforeach --}}
									@foreach (Ghost::instagram() as $item)
									<li class="image-wrapper">
										<img src="{{ asset('/fotoinstagram/' .$item->foto ?? '') }}" alt="Image_not_found">
										<a href="https://www.instagram.com/lingkarankreatifcc/"><i class="fab fa-instagram"></i></a>
									</li>
									@endforeach
									{{-- <li class="image-wrapper">
										<img src="assets/images/footer/instagram/003.jpg" alt="Image_not_found">
										<a href="#!"><i class="fab fa-instagram"></i></a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/footer/instagram/004.jpg" alt="Image_not_found">
										<a href="#!"><i class="fab fa-instagram"></i></a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/footer/instagram/005.jpg" alt="Image_not_found">
										<a href="#!"><i class="fab fa-instagram"></i></a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/footer/instagram/006.jpg" alt="Image_not_found">
										<a href="#!"><i class="fab fa-instagram"></i></a>
									</li>
									<li class="image-wrapper">
										<img src="assets/images/footer/instagram/009.jpg" alt="Image_not_found">
										<a href="#!"><i class="fab fa-instagram"></i></a>
									</li> --}}
								</ul>
								<h4 class="followus-link">
									Follow Our Instagram <a href="https://www.instagram.com/lingkarankreatifcc/" target="_blank">@lingkarankreatifcc</a>
								</h4>
							</div>
						</div>
						<!-- instagram-wrapper - end -->

					</div>
				</div>
			</div>
			<!-- footer-top - end -->

			<div class="footer-bottom">
				<div class="container">
					<div class="row">

						<!-- copyright-text - start -->
						<div class="col-lg-7 col-md-12 col-sm-12">
							<div class="copyright-text">
								<p class="m-0" style="color: rgb(255, 208, 0)">©{{ date('Y') }} <a href="#!" class="site-link">Lingkaran Kreatif</a>
							</div>
						</div>
						<!-- copyright-text - end -->

						<!-- footer-menu - start -->
						{{-- <div class="col-lg-5 col-md-12 col-sm-12">
							<div class="footer-menu">
								<ul>
									<li><a href="contact.html">Contact us</a></li>
									<li><a href="about.html">About us</a></li>
									<li><a href="#!">Site map</a></li>
									<li><a href="#!">Privacy policy</a></li>
								</ul>
							</div>
						</div> --}}
						<!-- footer-menu - end -->

					</div>
				</div>
			</div>

		</footer>
		<!-- footer-section2 - end
		================================================== -->










		<!-- fraimwork - jquery include -->
		<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

		<!-- carousel jquery include -->
		<script src="{{ asset('assets/js/slick.min.js') }}"></script>
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

		<!-- map jquery include -->
		<script src="{{ asset('assets/js/gmap3.min.js') }}"></script>
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

		<!-- calendar jquery include -->
		<script src="{{ asset('assets/js/atc.min.js') }}"></script>

		<!-- others jquery include -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
		<script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
		<script src="{{ asset('assets/js/lightcase.js') }}"></script>

		<!-- gallery img loaded - jqury include -->
		<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

		<!-- multy count down - jqury include -->
		<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>

		{{-- <!-- color panal - jqury include -->GANTI WARNA --}}
		{{-- <script src="{{ asset('assets/js/style-switcher.js') }}"></script> --}}

		<!-- custom jquery include -->
		<script src="{{ asset('assets/js/custom.js') }}"></script>





	</body>
</html>
