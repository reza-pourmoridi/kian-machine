<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>intro</title>
    <link rel="stylesheet" href="{{ asset('public/intro/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/intro/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('public/intro/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/intro/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/intro/css/style.css') }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
{{--<header id="header" class="header_area">--}}
{{--    <div class="main_header_area animated" id="navbar">--}}
{{--        <div class="container">--}}
{{--            <nav id="navigation1" class="navigation">--}}
{{--                <a class="nav-brand" href="javascript:">--}}
{{--                    <img src="{{ asset('public/intro/images/logo.png') }}">--}}
{{--                </a>--}}
{{--                <div class="parent-nav-menu">--}}
{{--                    <div class="nav-menus-wrapper ">--}}
{{--                        <ul class="nav-menu align-to-right">--}}
{{--                            <li>--}}
{{--                                <a class="menu-home" href="javascript:">--}}
{{--                                    <span>خانه</span>--}}
{{--                                    <i>--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L512 185V64c0-17.7-14.3-32-32-32H448c-17.7 0-32 14.3-32 32v36.7L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32v69.7c-.1 .9-.1 1.8-.1 2.8V472c0 22.1 17.9 40 40 40h16c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2H160h24c22.1 0 40-17.9 40-40V448 384c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v64 24c0 22.1 17.9 40 40 40h24 32.5c1.4 0 2.8 0 4.2-.1c1.1 .1 2.2 .1 3.3 .1h16c22.1 0 40-17.9 40-40V455.8c.3-2.6 .5-5.3 .5-8.1l-.7-160.2h32z"/></svg>--}}
{{--                                    </i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#app">--}}
{{--                                    <span> اپلیکیشن</span>--}}
{{--                                    <i>--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M80 0C44.7 0 16 28.7 16 64V448c0 35.3 28.7 64 64 64H304c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H80zm80 432h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>--}}
{{--                                    </i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript:">--}}
{{--                                    <span>کاتالوگ</span>--}}
{{--                                    <i>--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M160 32c-35.3 0-64 28.7-64 64V320c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H160zM396 138.7l96 144c4.9 7.4 5.4 16.8 1.2 24.6S480.9 320 472 320H328 280 200c-9.2 0-17.6-5.3-21.6-13.6s-2.9-18.2 2.9-25.4l64-80c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l17.3 21.6 56-84C360.5 132 368 128 376 128s15.5 4 20 10.7zM192 128a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120V344c0 75.1 60.9 136 136 136H456c13.3 0 24-10.7 24-24s-10.7-24-24-24H136c-48.6 0-88-39.4-88-88V120z"/></svg>--}}
{{--                                    </i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript:">--}}
{{--                                    <span>درباره ما</span>--}}
{{--                                    <i>--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>--}}
{{--                                    </i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="javascript:">--}}
{{--                                    <span>تماس با ما</span>--}}
{{--                                    <i>--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M224 32C135.6 32 64 103.6 64 192v16c0 8.8-7.2 16-16 16s-16-7.2-16-16V192C32 86 118 0 224 0S416 86 416 192v16c0 61.9-50.1 112-112 112H240 224 208c-17.7 0-32-14.3-32-32s14.3-32 32-32h32c17.7 0 32 14.3 32 32h32c44.2 0 80-35.8 80-80V192c0-88.4-71.6-160-160-160zM96 192c0-70.7 57.3-128 128-128s128 57.3 128 128c0 13.9-2.2 27.3-6.3 39.8C337.4 246.3 321.8 256 304 256h-8.6c-11.1-19.1-31.7-32-55.4-32H208c-35.3 0-64 28.7-64 64c0 1.4 0 2.7 .1 4C114.8 268.6 96 232.5 96 192zM224 352h16 64 9.6C387.8 352 448 412.2 448 486.4c0 14.1-11.5 25.6-25.6 25.6H25.6C11.5 512 0 500.5 0 486.4C0 412.2 60.2 352 134.4 352H208h16z"/></svg>--}}
{{--                                    </i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="parent-btn-header">--}}
{{--                        <!--                        <a href="javascript:" class="btn btn-login">-->--}}
{{--                        <!--                            ورود/ ثبت نام-->--}}
{{--                        <!--                        </a>-->--}}
{{--                        <a href="tel:09154229529" class="btn btn-register">--}}
{{--                            09154229529--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="nav-toggle "></div>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
<main>
    <section class="banner">
        <div class="owl-img-banner">
            <div class="col-lg-6 col-md-6 col-sm-12 d-md-flex d-none p-0"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 p-0">
                <div class="owl-banner owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('public/intro/images/IMG_5845.JPG') }}" alt="img-banner">
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/intro/images/IMG_7607.JPG') }}" alt="img-banner">
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/intro/images/IMG_584500.jpg') }}" alt="img-banner">
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/intro/images/IMG_804622.jpg') }}" alt="img-banner">
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/intro/images/IMG_4019.JPG') }}" alt="img-banner">
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/intro/images/IMG_806288.jpg') }}" alt="img-banner">
                    </div>
                    <div class="item">
                        <img src="{{ asset('public/intro/images/IMG_8060111.jpg') }}" alt="img-banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="text-banner">
            <div class="container h-100">
                <div class="parent-caption-banner">
                    <div class="caption-banner col-lg-5 col-md-6 col-sm-12 col-12 p-0">
                        <div class="">
                            <div class="d-flex justify-content-center py-7 py-lg-15 px-5 px-md-15 w-100">
                                <a href="/" class="link-img-banner">
                                    <img alt="Logo" src="{{ asset('public/intro/images/logo.png') }}" class="w-75"/>
                                </a>
                            </div>
                            <form id="login_form" class="form w-100 pb-7" action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="parent-title-banner">
                                    <h1 class="">پنل مدیریت</h1>
                                    <p class="">سامانه مدیریت ماشین آلات کیان</p>
                                </div>
                                <div class="separator separator-content my-14">
                                    <span class="">شماره موبایل</span>
                                </div>
                                <div class="mb-3">
                                    <input type="text" placeholder="شماره موبایل..." name="phone_number" class="input-form-control" required maxlength="11"/>
                                </div>
                                <div class="mb-3">
                                    <input type="password" placeholder="پسورد..." name="password" class="input-form-control" required maxlength="8"/>
                                </div>
                                <div class="mb-3 parent-identification-code">
                                    <input type="text" placeholder="کد پیامک..." name="sms_code" class="input-form-control" required maxlength="8"/>
                                    <button type="button" id="send_code_button">
                                        <span id="send_code_label">ارسال کد</span>
                                        <span id="countdown_timer" style="display: none;"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M342.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 178.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l80 80c12.5 12.5 32.8 12.5 45.3 0l160-160zm96 128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 402.7 54.6 297.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l256-256z"/></svg>
                                    </button>

                                </div>
                                <div id="response_messages"></div>
                                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                                <input type="checkbox" style="display: none" name="g-recaptcha-response" id="g-recaptcha-response">
                                <div id="error_messages"></div>
                                <div class="d-grid mb-10">
                                    <button type="button" id="login_button" class="btn btn-submit-form-banner">
                                        <span class="indicator-label">ورود</span>
                                    </button>
                                </div>

                            </form>

                            <script>
                                document.getElementById('login_button').addEventListener('click', function() {
                                    var form = document.getElementById('login_form');
                                    var formData = new FormData(form);

                                    fetch('{{ route('login') }}', {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        },
                                        body: formData
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.errors) {
                                                var errorMessages = document.getElementById('error_messages');
                                                errorMessages.innerHTML = '';
                                                for (const [key, value] of Object.entries(data.errors)) {
                                                    var errorMessage = document.createElement('p');
                                                    errorMessage.textContent = value[0];
                                                    errorMessages.appendChild(errorMessage);
                                                }
                                            } else {
                                                window.location.href = data.redirect;
                                            }
                                        })
                                        .catch(error => console.error('Error:', error));
                                });
                            </script>
                            <script>
                                document.getElementById('send_code_button').addEventListener('click', function() {
                                    var phoneNumber = document.querySelector('input[name="phone_number"]').value;
                                    var sendCodeButton = this;
                                    var countdownTimer = document.getElementById('countdown_timer');
                                    var sendCodeLabel = document.getElementById('send_code_label');


                                    fetch('{{ route('generate_sms_code') }}', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        },
                                        body: JSON.stringify({ phone_number: phoneNumber })
                                    })
                                        .then(response => response.json())
                                        .then(data => {
                                            var errorMessages = document.getElementById('error_messages');
                                            var responseMessages = document.getElementById('response_messages');

                                            errorMessages.innerHTML = '';
                                            responseMessages.innerHTML = '';

                                            if (data.errors) {
                                                for (const [field, messages] of Object.entries(data.errors)) {
                                                    messages.forEach(message => {
                                                        var errorMessage = document.createElement('p');
                                                        errorMessage.textContent = message;
                                                        errorMessages.appendChild(errorMessage);
                                                    });
                                                }
                                            }
                                            if (data.message) {
                                                // Disable the button for 2 minutes
                                                sendCodeButton.disabled = true;
                                                countdownTimer.style.display = 'inline';

                                                var countdown = 120; // 2 minutes in seconds
                                                var interval = setInterval(function() {
                                                    countdown--;
                                                    var minutes = Math.floor(countdown / 60);
                                                    var seconds = countdown % 60;
                                                    countdownTimer.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;

                                                    if (countdown <= 0) {
                                                        clearInterval(interval);
                                                        sendCodeButton.disabled = false;
                                                        countdownTimer.style.display = 'none';
                                                        sendCodeLabel.style.display = 'inline';
                                                        countdownTimer.textContent = '';
                                                    }
                                                }, 1000);

                                                sendCodeLabel.innerHTML = 'ارسال مجدد کد';
                                                responseMessages.textContent = data.message;
                                            }
                                        })
                                        .catch(error => console.error('Error:', error));
                                });

                            </script>


                        </div>
                    </div>
                    <div class=" empty-text col-lg-7 col-md-6 p-0 "></div>
                </div>
            </div>
        </div>
    </section>
    <section id="app" class="app">
        <div class="container">
            <div class="parent-app row d-flex flex-wrap align-items-center">
                <div class="app-text col-lg-6 col-md-6-12 col-sm-12 col-12 text-right">
                    <h3> اپلیکیشن کیهان راه شرق </h3>
                    <h4 class="mt-3"> سریع‌ترین و مطمئن‌ترین راه ممکن </h4>
                    <p>
                        با استفاده از اپلیکیشن کیهان راه شرق در هر کجا که هستید جهان در
                        جیب شماست. به راحتی و با چند کلیک ساده در بین هزاران گزینه جستجو کنید و پس از انتخاب
                        دلخواه تان، تجربه ای به یاد ماندنی را برای خود و خانواده تان رقم بزنید.
                    </p>
                    <div class="parent-btn-app">
                        <a href="" class="">
                            <img src="{{ asset('public/intro/images/download-apk.png') }}" alt="app">
                        </a>
                        <a href="" class="">
                            <img src="{{ asset('public/intro/images/install-pwa.png') }}" alt="app">
                        </a>
                    </div>
                    <img src="{{ asset('public/intro/images/appImg-ris2.png') }}" alt="app-img">
                    <div class="parent-btn-app-ris">
                        <!--                        <a href="" class="">-->
                        <!--                            <img width="100%"-->
                        <!--                                 src="intro/images/bazar.png"-->
                        <!--                                 alt="app">-->
                        <!--                        </a>-->
                        <!--                        <a href="" class="">-->
                        <!--                            <img width="100%"-->
                        <!--                                 src="intro/images/myket.png"-->
                        <!--                                 alt="app">-->
                        <!--                        </a>-->
                        <a href="" class="">
                            <img width="100%" src="{{ asset('public/intro/images/download-apk.png') }}" alt="app">
                        </a>
                        <a href="" class="">
                            <img width="100%" src="{{ asset('public/intro/images/install-pwa.png') }}" alt="app">
                        </a>
                    </div>
                </div>
                <div class="app-img col-lg-6 col-md-6-12 col-sm-12 col-12 ">
                    <img src="{{ asset('public/intro/images/appImg2.png') }}" alt="app-img">
                </div>
            </div>
        </div>
    </section>
</main>
</body>
<script src="{{ asset('public/intro/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('public/intro/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/intro/js/header.js') }}"></script>
<script src="{{ asset('public/intro/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/intro/js/script.js') }}"></script>
</html>
