<!DOCTYPE html>
<html lang="fa">

<!-- Mirrored from demo.foxthemes.net/socialite-v3.0/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 02:18:26 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="public\css\images\favicon.png" rel="icon" type="image/png">
    <link rel="icon" href="path/to/favicon.ico" type="image/x-icon">

    <!-- title and description-->
    <title>Socialite</title>
    <meta name="description" content="Socialite - Social sharing network HTML Template">

    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- header -->
        <header
            class="z-[100] h-[--m-top] fixed top-0 left-0 w-full flex items-center bg-white/80 sky-50 backdrop-blur-xl border-b border-slate-200 dark:bg-dark2 dark:border-slate-800">

            <div class="flex items-center w-full xl:px-6 px-2 max-lg:gap-10">

                <div class="2xl:w-[--w-side] lg:w-[--w-side-sm]">

                    <!-- left -->
                    <div class="flex items-center gap-1">

                        <!-- icon menu -->
                        <button uk-toggle="target: #site__sidebar ; cls :!-translate-x-0"
                            class="flex items-center justify-center w-8 h-8 text-xl rounded-full hover:bg-gray-100 xl:hidden dark:hover:bg-slate-600 group">
                            <ion-icon name="menu-outline" class="text-2xl group-aria-expanded:hidden"></ion-icon>
                            <ion-icon name="close-outline" class="hidden text-2xl group-aria-expanded:block"></ion-icon>
                        </button>
                        <div id="logo">
                            <a href="feed.html">
                                <img src="assets/images/logo.png" alt=""
                                    class="w-28 md:block hidden dark:!hidden">
                                <img src="assets/images/logo-light.png" alt="" class="dark:md:block hidden">
                                <img src="assets/images/logo-mobile.png" class="hidden max-md:block w-20 dark:!hidden"
                                    alt="">
                                <img src="assets/images/logo-mobile-light.png" class="hidden dark:max-md:block w-20"
                                    alt="">
                            </a>
                        </div>

                    </div>

                </div>
                <div class="flex-1 relative">

                    <div class="max-w-[1220px] mx-auto flex items-center">

                        <!-- search -->
                        <div id="search--box"
                            class="xl:w-[680px] sm:w-96 sm:relative rounded-xl overflow-hidden z-20 bg-secondery max-md:hidden w-screen left-0 max-sm:fixed max-sm:top-2 dark:!bg-white/5">
                            <ion-icon name="search" class="absolute left-4 top-1/2 -translate-y-1/2"></ion-icon>
                            <input type="text" placeholder="... جستجو کنید"
                                class="w-full !pl-10 !font-normal !bg-transparent h-12 !text-sm">
                        </div>
                        <!-- search dropdown-->
                        <div class="hidden uk- open z-10"
                            uk-drop="pos: bottom-center ; animation: uk-animation-slide-bottom-small;mode:click ">

                            <div
                                class="xl:w-[694px] sm:w-96 bg-white dark:bg-dark3 w-screen p-2 rounded-lg shadow-lg -mt-14 pt-14">
                                <div class="flex justify-between px-2 py-2.5 text-sm font-medium">
                                    <div class=" text-black dark:text-white">Recent</div>
                                    <button type="button" class="text-blue-500">Clear</button>
                                </div>
                                <nav class="text-sm font-medium text-black dark:text-white">
                                    <a href="#"
                                        class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                                        <img src="assets/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full">
                                        <div>
                                            <div> Jesse Steeve </div>
                                            <div class="text-xs text-blue-500 font-medium mt-0.5"> Friend </div>
                                        </div> <ion-icon name="close"
                                            class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>
                                    </a>
                                    <a href="#"
                                        class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                                        <img src="assets/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full">
                                        <div>
                                            <div> Martin Gray </div>
                                            <div class="text-xs text-blue-500 font-medium mt-0.5"> Friend </div>
                                        </div> <ion-icon name="close"
                                            class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>
                                    </a>
                                    <a href="#"
                                        class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                                        <img src="assets/images/group/group-2.jpg" class="w-9 h-9 rounded-full">
                                        <div>
                                            <div> Delicious Foods </div>
                                            <div class="text-xs text-rose-500 font-medium mt-0.5"> Group </div>
                                        </div> <ion-icon name="close"
                                            class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>
                                    </a>
                                    <a href="#"
                                        class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                                        <img src="assets/images/group/group-1.jpg" class="w-9 h-9 rounded-full">
                                        <div>
                                            <div> Delicious Foods </div>
                                            <div class="text-xs text-yellow-500 font-medium mt-0.5"> Page </div>
                                        </div> <ion-icon name="close"
                                            class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>
                                    </a>
                                    <a href="#"
                                        class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                                        <img src="assets/images/avatars/avatar-6.jpg" class="w-9 h-9 rounded-full">
                                        <div>
                                            <div> John Welim </div>
                                            <div class="text-xs text-blue-500 font-medium mt-0.5"> Friend </div>
                                        </div> <ion-icon name="close"
                                            class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>
                                    </a>
                                    <a href="#"
                                        class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                                        <ion-icon class="text-2xl" name="search-outline"></ion-icon> Creative ideas
                                        about Business </a>
                                    <a href="#"
                                        class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10">
                                        <ion-icon class="text-2xl" name="search-outline"></ion-icon> 8 Facts About
                                        Writting </a>
                                </nav>
                                <hr class="-mx-2 mt-2 hidden">
                                <div class="flex justify-end pr-2 text-sm font-medium text-red-500 hidden">
                                    <a href="#"
                                        class="flex hover:bg-red-50 dark:hover:bg-slate-700 p-1.5 rounded">
                                        <ion-icon name="trash" class="mr-2 text-lg"></ion-icon> Clear your
                                        history</a>
                                </div>
                            </div>

                        </div>

                        <!-- header icons -->
                        <div
                            class="flex items-center sm:gap-4 gap-2 absolute right-5 top-1/2 -translate-y-1/2 text-black">
                            <!-- create -->

                            <div class="hidden bg-white p-4 rounded-lg overflow-hidden drop-shadow-xl dark:bg-slate-700 md:w-[324px] w-screen border2"
                                uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">



                            </div>

                            <!-- cart -->
                            <div class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white"
                                uk-tooltip="title: Cart; pos: bottom; offset:6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path
                                        d="M7 4a1 1 0 00-1 1v1h-1a1 1 0 000 2h1.2l1.4 7.2A2 2 0 009.8 17h8.4a2 2 0 001.9-1.4l2.1-6.3a1 1 0 00-.9-1.4H8.4l-.2-1h11.8a1 1 0 000-2H8.4l-.3-1H6a1 1 0 00-1 1zM9.8 19a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm10 0a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                </svg>
                                <ion-icon name="cart-outline" class="sm:hidden text-2xl"></ion-icon>
                            </div>



                            <!-- messages -->


                            <div class="hidden bg-white pr-1.5 rounded-lg drop-shadow-xl dark:bg-slate-700 md:w-[360px] w-screen border2"
                                uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">

                                <!-- heading -->
                                <div class="flex items-center justify-between gap-2 p-4 pb-1">


                                    <div class="flex gap-2.5 text-lg text-slate-900 dark:text-white">
                                        <ion-icon name="expand-outline"></ion-icon>
                                        <ion-icon name="create-outline"></ion-icon>
                                    </div>
                                </div>



                                <!-- footer -->

                                <div
                                    class="w-3 h-3 absolute -top-1.5 right-3 bg-white border-l border-t rotate-45 max-md:hidden dark:bg-dark3 dark:border-transparent">
                                </div>
                            </div>







                            <!-- profile -->
                            <div class="rounded-full relative bg-secondery cursor-pointer shrink-0">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="sm:w-9 sm:h-9 w-7 h-7 rounded-full shadow shrink-0">
                            </div>
                            <div class="hidden bg-white rounded-lg drop-shadow-xl dark:bg-slate-700 w-64 border2"
                                uk-drop="offset:6;pos: bottom-right;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">

                                <a href="timeline.html">
                                    <div class="p-4 py-5 flex items-center gap-4">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                            class="w-10 h-10 rounded-full shadow">
                                        <div class="flex-1">
                                            <h4 class="text-sm font-medium text-black">{{ Auth::user()->name }}</h4> <!--peyman haji-->
                                            <div class="text-sm mt-1 text-blue-600 font-light dark:text-white/70">
                                                @BiGGie</div>
                                        </div>
                                    </div>
                                </a>

                                <hr class="dark:border-gray-600/60">

                                <nav class="p-2 text-sm text-black font-normal dark:text-white">
                                    <a href="upgrade.html">
                                        <div
                                            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10 text-blue-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                            </svg>
                                            Upgrade To Premium
                                        </div>
                                    </a>
                                    <a href="setting.html">
                                        <div
                                            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                            </svg>
                                            My Billing
                                        </div>
                                    </a>
                                    <a href="setting.html">
                                        <div
                                            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                            </svg>
                                            Advatacing
                                        </div>
                                    </a>
                                    <a href="{{ route('user.setting') }}">
                                        <div
                                            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            My Account
                                        </div>
                                    </a>
                                    <button type="button" class="w-full">
                                        <div
                                            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                                            </svg>
                                            Night mode
                                            <span
                                                class="bg-slate-200/40 ml-auto p-0.5 rounded-full w-9 dark:hover:bg-white/20">
                                                <span
                                                    class="bg-white block h-4 relative rounded-full shadow-md w-2 w-4 dark:bg-blue-600"></span>
                                            </span>
                                        </div>
                                    </button>
                                    <hr class="-mx-2 my-2 dark:border-gray-600/60">
                                    <a href="form-login.html">
                                        <div
                                            class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10">
                                            <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                </path>
                                            </svg>
                                            Log Out
                                        </div>
                                    </a>

                                </nav>

                            </div>

                            <div class="flex items-center gap-2 hidden">

                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-9 h-9 rounded-full shadow">

                                <div class="w-20 font-semibold text-gray-600"> Hamse </div>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </header>








        <!-- sidebar -->
        <div id="site__sidebar"
            class="fixed top-0 left-0 z-[99] pt-[--m-top] overflow-hidden transition-transform xl:duration-500 max-xl:w-full max-xl:-translate-x-full">

            <!-- sidebar inner -->
            <div
                class="p-2 max-xl:bg-white shadow-sm 2xl:w-72 sm:w-64 w-[80%] h-[calc(100vh-64px)] relative z-30 max-lg:border-r dark:max-xl:!bg-slate-700 dark:border-slate-700">

                <div class="pr-4" data-simplebar>

                    <nav id="side">

                        <ul>
                            <li>
                                <a href="feed.html">
                                    <img src="assets/images/icons/home.png" alt="feeds" class="w-6">
                                    <span> Feed </span>
                                </a>
                            </li>
                            <li>
                                <a href="messages.html">
                                    <img src="assets/images/icons/message.png" alt="messages" class="w-5">
                                    <span> messages </span>
                                </a>
                            </li>
                            <li>
                                <a href="video.html">
                                    <img src="assets/images/icons/video.png" alt="messages" class="w-6">
                                    <span> video </span>
                                </a>
                            </li>
                            <li>
                                <a href="event.html">
                                    <img src="assets/images/icons/event.png" alt="messages" class="w-6">
                                    <span> event </span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="pages.html">
                                    <img src="assets/images/icons/page.png" alt="pages" class="w-6">
                                    <span> Pages </span>
                                </a>
                            </li>
                            <li>
                                <a href="groups.html">
                                    <img src="assets/images/icons/group.png" alt="groups" class="w-6">
                                    <span> Groups </span>
                                </a>
                            </li>
                            <li>
                                <a href="market.html">
                                    <img src="assets/images/icons/market.png" alt="market" class="w-7 -ml-1">
                                    <span> market </span>
                                </a>
                            </li>
                            <li>
                                <a href="blog.html">
                                    <img src="assets/images/icons/blog.png" alt="blog" class="w-6">
                                    <span> blog </span>
                                </a>
                            </li>
                            <li class="!hidden" id="show__more">
                                <a href="games.html">
                                    <img src="assets/images/icons/game.png" alt="games" class="w-6">
                                    <span> games </span>
                                </a>
                            </li>
                            <li class="!hidden" id="show__more">
                                <a href="funding.html">
                                    <img src="assets/images/icons/fund.png" alt="messages" class="w-6">
                                    <span> Fundraiser </span>
                                </a>
                            </li>
                            <li class="!hidden" id="show__more">
                                <a href="blog-2.html">
                                    <img src="assets/images/icons/blog-2.png" alt="blog" class="w-6">
                                    <span> blog II </span>
                                </a>
                            </li>
                            <li class="!hidden" id="show__more">
                                <a href="event-2.html">
                                    <img src="assets/images/icons/event-2.png" alt="event" class="w-6">
                                    <span> Event II </span>
                                </a>
                            </li>
                            <li class="!hidden" id="show__more">
                                <a href="groups-2.html">
                                    <img src="assets/images/icons/group-2.png" alt="groups" class="w-6">
                                    <span> Groups II </span>
                                </a>
                            </li>

                        </ul>

                        <button type="button"
                            class="flex items-center gap-4 py-2 px-4 w-full font-medium text-sm text-black dark:text-white"
                            uk-toggle="target: #show__more; cls: !hidden uk-animation-fade">
                            <svg class="bg-gray-200 rounded-full w-6 h-6 dark:bg-slate-700" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span id="show__more"> See More </span>
                            <span class="!hidden" id="show__more"> See Less </span>
                        </button>

                    </nav>

                    <div
                        class="font-medium text-sm text-black border-t pt-3 mt-2 dark:text-white dark:border-slate-800">
                        <div class="px-3 pb-2 text-sm font-medium">
                            <div class="text-black dark:text-white">Shortcut</div>
                        </div>
                        <a href="#">
                            <div class="flex items-center gap-2 p-3 px-4 rounded-xl hover:bg-secondery">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-6 rounded-full object-cover">
                                <div> Marin Gray</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="flex items-center gap-2 p-3 px-4 rounded-xl hover:bg-secondery">
                                <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                    class="w-6 rounded-full object-cover">
                                <div> Alexa Stella</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="flex items-center gap-2 p-3 px-4 rounded-xl hover:bg-secondery">
                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                    class="w-6 rounded-full object-cover">
                                <div> Sarah Ali</div>
                            </div>
                        </a>
                    </div>

                    <nav id="side"
                        class="font-medium text-sm text-black border-t pt-3 mt-2 dark:text-white dark:border-slate-800">
                        <div class="px-3 pb-2 text-sm font-medium">
                            <div class="text-black dark:text-white">Pages</div>
                        </div>

                        <ul class="mt-2 -space-y-2" uk-nav="multiple: true">

                            <li>
                                <a href="setting.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span> Setting </span>
                                </a>
                            </li>
                            <li>
                                <a href="upgrade.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                    </svg>
                                    <span> Upgrade </span>
                                </a>
                            </li>
                            <li>
                                <a href="form-login.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                    </svg>
                                    <span> Authentication </span>
                                </a>
                            </li>
                            <li class="uk-parent">
                                <a href="#" class="group">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                    </svg>
                                    <span> Development </span>
                                    <ion-icon name="chevron-down"
                                        class="text-base ml-auto duration-200 group-aria-expanded:rotate-180"></ion-icon>
                                </a>
                                <ul class="pl-10 my-1 space-y-0 text-sm">
                                    <li><a href="components.html" class="!py-2 !rounded -md">Elements</a></li>
                                    <li><a href="components.html" class="!py-2 !rounded -md">Components</a></li>
                                    <li><a href="components.html" class="!py-2 !rounded -md">Icons</a></li>
                                </ul>
                            </li>

                        </ul>

                    </nav>


                    <div class="text-xs font-medium flex flex-wrap gap-2 gap-y-0.5 p-2 mt-2">
                        <a href="#" class="hover:underline">About</a>
                        <a href="#" class="hover:underline">Blog </a>
                        <a href="#" class="hover:underline">Careers</a>
                        <a href="#" class="hover:underline">Support</a>
                        <a href="#" class="hover:underline">Contact Us </a>
                        <a href="#" class="hover:underline">Developer</a>
                    </div>

                </div>

            </div>

            <!-- sidebar overly -->
            <div id="site__sidebar__overly"
                class="absolute top-0 left-0 z-20 w-screen h-screen xl:hidden backdrop-blur-sm"
                uk-toggle="target: #site__sidebar ; cls :!-translate-x-0">
            </div>
        </div>

        <!-- main contents -->
        <main id="site__main"
            class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="max-w-[1065px] mx-auto max-lg:-m-2.5">

                <!-- cover  -->
                <div class="bg-white shadow lg:rounded-b-2xl lg:-mt-10 dark:bg-dark2">

                    <!-- cover -->
                    <div class="relative overflow-hidden w-full lg:h-72 h-48">
                        <img src="assets/images/avatars/profile-cover.jpg" alt=""
                            class="h-full w-full object-cover inset-0">

                        <!-- overly -->
                        <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-20 z-10"></div>

                        <div class="absolute bottom-0 right-0 m-4 z-20">
                            <div class="flex items-center gap-3">
                                <button
                                    class="button bg-white/20 text-white flex items-center gap-2 backdrop-blur-small">Crop</button>
                                <button
                                    class="button bg-black/10 text-white flex items-center gap-2 backdrop-blur-small">Edit</button>
                            </div>
                        </div>

                    </div>

                    <!-- user info -->
                    <div class="p-3">

                        <div class="flex flex-col justify-center md:items-center lg:-mt-48 -mt-28">

                            <div class="relative lg:h-48 lg:w-48 w-28 h-28 mb-4 z-10">
                                <div
                                    class="relative overflow-hidden rounded-full md:border-[6px] border-gray-100 shrink-0 dark:border-slate-900 shadow">
                                    <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                        class="h-full w-full object-cover inset-0">
                                </div>

                            </div>

                            <h3 class="md:text-3xl text-base font-bold text-black dark:text-white"> peyman haji </h3>


                        </div>

                    </div>

                    <!-- navigations -->
                    <div class="flex items-center justify-between mt-3 border-t border-gray-100 px-2 max-lg:flex-col dark:border-slate-700"
                        uk-sticky="offset:50; cls-active: bg-white/80 shadow rounded-b-2xl z-50 backdrop-blur-xl dark:!bg-slate-700/80; animation:uk-animation-slide-top ; media: 992">

                        <div class="flex items-center gap-2 text-sm py-2 pr-1 max-md:w-full lg:order-2">
                            <button
                                class="button bg-primary flex items-center gap-2 text-white py-2 px-3.5 max-md:flex-1">
                                <ion-icon name="add-circle" class="text-xl"></ion-icon>
                                <span class="text-sm"> اضافه کردن محصول </span>
                            </button>

                            <button type="submit" class="rounded-lg bg-secondery flex px-2.5 py-2 dark:bg-dark2">
                                <ion-icon name="search" class="text-xl">
                            </button>

                            <div>
                                <button type="submit" class="rounded-lg bg-secondery flex px-2.5 py-2 dark:bg-dark3">
                                    <ion-icon name="ellipsis-horizontal" class="text-xl">
                                </button>
                                <div class="w-[240px]"
                                    uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click;offset:10">
                                    <nav>
                                        <a href="#"> <ion-icon class="text-xl"
                                                name="pricetags-outline"></ion-icon>
                                            Unfollow </a>
                                        <a href="#"> <ion-icon class="text-xl" name="time-outline"></ion-icon>
                                            Mute
                                            story </a>
                                        <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>
                                            Report
                                        </a>
                                        <a href="#"> <ion-icon class="text-xl" name="share-outline"></ion-icon>
                                            Share
                                            profile </a>
                                        <hr>
                                        <a href="#"
                                            class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50">
                                            <ion-icon class="text-xl" name="stop-circle-outline"></ion-icon> Block
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <nav
                            class="flex gap-0.5 rounded-xl -mb-px text-gray-600 font-medium text-[15px]  dark:text-white max-md:w-full max-md:overflow-x-auto">
                            <a href="#"
                                class="inline-block  py-3 leading-8 px-3.5 border-b-2 border-blue-600 text-blue-600">Timeline</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Friend <span
                                    class="text-xs pl-2 font-normal lg:inline-block hidden">2,680</span></a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Photo</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Photo</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Photo</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Video</a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Group</a>

                            <!-- dropdown -->
                            <div>
                                <a href="#" class="inline-flex items-center gap-2 py-3 leading-8 px-3">
                                    More <ion-icon name="chevron-down"></ion-icon>
                                </a>
                                <div class="md:w-[240px] w-screen"
                                    uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click;offset:-4">
                                    <nav class="text-[15px]">
                                        <a href="#"> Likes </a>
                                        <a href="#"> Music </a>
                                        <a href="#"> Events </a>
                                        <a href="#"> Books </a>
                                        <a href="#"> Reviews given </a>
                                        <a href="#"> Groups </a>
                                        <a href="#"> Manage Sections </a>
                                    </nav>
                                </div>
                            </div>

                        </nav>

                    </div>

                </div>

                <div class="flex 2xl:gap-12 gap-10 mt-8 max-lg:flex-col" id="js-oversized">

                    <!-- feed story -->

                    <div class="flex-1 xl:space-y-6 space-y-3">

                        <!-- add story -->
                        <div
                            class="bg-white rounded-xl shadow-sm p-4 space-y-4 text-sm font-medium border1 dark:bg-dark2">

                            <div class="flex items-center gap-3">
                                <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3"
                                    uk-toggle="target: #create-status">
                                    <div class="py-2.5 text-center dark:text-white"> What do you have in mind? </div>
                                </div>
                                <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-pink-100/60 hover:bg-pink-100"
                                    uk-toggle="target: #create-status">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-8 h-8 stroke-pink-600 fill-pink-200/70" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M15 8h.01" />
                                        <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                        <path d="M3.5 15.5l4.5 -4.5c.928 -.893 2.072 -.893 3 0l5 5" />
                                        <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l2.5 2.5" />
                                    </svg>
                                </div>
                                <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-lg transition-all bg-sky-100/60 hover:bg-sky-100"
                                    uk-toggle="target: #create-status">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-8 h-8 stroke-sky-600 fill-sky-200/70 " viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                        <path
                                            d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                    </svg>
                                </div>
                            </div>

                        </div>

                        <!--  post image-->
                        <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">

                            <!-- post heading -->
                            <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                                <a href="timeline.html"> <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                        class="w-9 h-9 rounded-full"> </a>
                                <div class="flex-1">
                                    <a href="timeline.html">
                                        <h4 class="text-black dark:text-white"> peyman haji </h4>
                                    </a>
                                    <div class="text-xs text-gray-500 dark:text-white/80">دقایقی قبل</div>
                                </div>

                                <div class="-mr-1">
                                    <button type="button" class="button-icon w-8 h-8"> <ion-icon class="text-xl"
                                            name="ellipsis-horizontal"></ion-icon> </button>
                                    <div class="w-[245px]"
                                        uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click">
                                        <nav>
                                            <a href="#"> <ion-icon class="text-xl shrink-0"
                                                    name="bookmark-outline"></ion-icon> Add to favorites </a>
                                            <a href="#"> <ion-icon class="text-xl shrink-0"
                                                    name="notifications-off-outline"></ion-icon> Mute Notification </a>
                                            <a href="#"> <ion-icon class="text-xl shrink-0"
                                                    name="flag-outline"></ion-icon> Report this post </a>
                                            <a href="#"> <ion-icon class="text-xl shrink-0"
                                                    name="share-outline"></ion-icon> Share your profile </a>
                                            <hr>
                                            <a href="#"
                                                class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50">
                                                <ion-icon class="text-xl shrink-0"
                                                    name="stop-circle-outline"></ion-icon> Unfollow </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- post image -->
                            <div class="relative w-full lg:h-96 h-full sm:px-4">
                                <img src="assets/images/post/img-2.jpg" alt=""
                                    class="sm:rounded-lg w-full h-full object-cover">
                            </div>

                            <!-- post icons -->
                            <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
                                <div>
                                    <div class="flex items-center gap-2.5">
                                        <button type="button"
                                            class="button-icon text-red-500 bg-red-100 dark:bg-slate-700">
                                            <ion-icon class="text-lg" name="heart-sharp"></ion-icon>
                                            <!-- Filled heart icon -->
                                        </button>
                                        <a href="#">1,300</a>
                                    </div>
                                    <div class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                                        uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left">



                                        <div class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700">
                                        <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                                    <span>260</span>
                                </div>
                                <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl"
                                        name="paper-plane-outline"></ion-icon> </button>
                                <button type="button" class="button-icon"> <ion-icon class="text-xl"
                                        name="share-outline"></ion-icon> </button>
                            </div>

                            <!-- comments -->
                            <div
                                class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40">

                                <div class="flex items-start gap-3 relative">
                                    <a href="timeline.html"> <img src="assets/images/avatars/avatar-2.jpg"
                                            alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"
                                            class="text-black font-medium inline-block dark:text-white">peyman borji
                                        </a>
                                        <p class="mt-0.5">nice. 😍 </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 relative">
                                    <a href="timeline.html"> <img src="assets/images/avatars/avatar-3.jpg"
                                            alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"
                                            class="text-black font-medium inline-block dark:text-white"> milad </a>
                                        <p class="mt-0.5"> woooow.😎 </p>
                                    </div>
                                </div>

                                <button type="button"
                                    class="flex items-center gap-1.5 text-gray-500 hover:text-blue-500 mt-2">
                                    <ion-icon name="chevron-down-outline"
                                        class="ml-auto duration-200 group-aria-expanded:rotate-180"></ion-icon>
                                    More Comment
                                </button>

                            </div>

                            <!-- add comment -->
                            <div
                                class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">

                                <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                    class="w-6 h-6 rounded-full">

                                <div class="flex-1 relative overflow-hidden h-10">
                                    <textarea placeholder="Add Comment...." rows="1"
                                        class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent"></textarea>

                                    <div class="!top-2 pr-2" uk-drop="pos: bottom-right; mode: click">
                                        <div class="flex items-center gap-2"
                                            uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-6 h-6 fill-sky-600">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="w-5 h-5 fill-pink-600">
                                                <path
                                                    d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z" />
                                            </svg>
                                        </div>
                                    </div>


                                </div>


                                <button type="submit" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery">
                                    Replay</button>
                            </div>

                        </div>

                        <!-- post text-->
                        <div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2">

                            <!-- post heading -->
                            <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
                                <a href="timeline.html"> <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                        class="w-9 h-9 rounded-full"> </a>
                                <div class="flex-1">
                                    <a href="timeline.html">
                                        <h4 class="text-black dark:text-white"> John Michael </h4>
                                    </a>
                                    <div class="text-xs text-gray-500 dark:text-white/80"> 2 hours ago</div>
                                </div>

                                <div class="-mr-1">
                                    <button type="button" class="button__ico w-8 h-8" aria-haspopup="true"
                                        aria-expanded="false"> <ion-icon class="text-xl md hydrated"
                                            name="ellipsis-horizontal" role="img"
                                            aria-label="ellipsis horizontal"></ion-icon> </button>
                                    <div class="w-[245px] uk-dropdown"
                                        uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click">
                                        <nav>
                                            <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated"
                                                    name="bookmark-outline" role="img"
                                                    aria-label="bookmark outline"></ion-icon> Add to favorites </a>
                                            <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated"
                                                    name="notifications-off-outline" role="img"
                                                    aria-label="notifications off outline"></ion-icon> Mute
                                                Notification
                                            </a>
                                            <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated"
                                                    name="flag-outline" role="img"
                                                    aria-label="flag outline"></ion-icon>
                                                Report this post </a>
                                            <a href="#"> <ion-icon class="text-xl shrink-0 md hydrated"
                                                    name="share-outline" role="img"
                                                    aria-label="share outline"></ion-icon> Share your profile </a>
                                            <hr>
                                            <a href="#"
                                                class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50">
                                                <ion-icon class="text-xl shrink-0 md hydrated"
                                                    name="stop-circle-outline" role="img"
                                                    aria-label="stop circle outline"></ion-icon> Unfollow </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <div class="sm:px-4 p-2.5 pt-0">
                                <p class="font-normal"> Photography is the art of capturing light with a camera. It can
                                    be used to create images that tell stories, express emotions, or document reality.
                                    it can be fun, challenging, or rewarding. It can also be a hobby, a profession, or a
                                    passion. 📷 </p>
                            </div>

                            <!-- post icons -->
                            <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
                                <div>
                                    <div class="flex items-center gap-2.5">
                                        <button type="button"
                                            class="button-icon text-red-500 bg-red-100 dark:bg-slate-700"> <ion-icon
                                                class="text-lg" name="heart"></ion-icon> </button>
                                        <a href="#">1,300</a>
                                    </div>
                                    <div class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                                        uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left">

                                        <div class="flex gap-2"
                                            uk-scrollspy="target: > button; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300">
                                                <span> 👍 </span></button>
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300">
                                                <span> ❤️ </span></button>
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300">
                                                <span> 😂 </span></button>
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300">
                                                <span> 😯 </span></button>
                                            <button type="button" class="text-red-600 hover:scale-125 duration-300">
                                                <span> 😢 </span></button>
                                        </div>

                                        <div class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700">
                                        <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                                    <span>260</span>
                                </div>
                                <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl"
                                        name="paper-plane-outline"></ion-icon> </button>
                                <button type="button" class="button-icon"> <ion-icon class="text-xl"
                                        name="share-outline"></ion-icon> </button>
                            </div>

                            <!-- comments -->
                            <div
                                class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40">

                                <div class="flex items-start gap-3 relative">
                                    <a href="timeline.html"> <img src="assets/images/avatars/avatar-2.jpg"
                                            alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"
                                            class="text-black font-medium inline-block dark:text-white"> Steeve </a>
                                        <p class="mt-0.5"> I love taking photos of nature and animals. 🌳🐶</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 relative">
                                    <a href="timeline.html"> <img src="assets/images/avatars/avatar-3.jpg"
                                            alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"
                                            class="text-black font-medium inline-block dark:text-white"> Monroe </a>
                                        <p class="mt-0.5"> I enjoy people and emotions. 😊😢 </p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3 relative">
                                    <a href="timeline.html"> <img src="assets/images/avatars/avatar-5.jpg"
                                            alt="" class="w-6 h-6 mt-1 rounded-full"> </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"
                                            class="text-black font-medium inline-block dark:text-white"> Jesse </a>
                                        <p class="mt-0.5"> Photography is my passion. 🎨📸 </p>
                                    </div>
                                </div>
                            </div>

                            <!-- add comment -->
                            <div
                                class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">

                                <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                    class="w-6 h-6 rounded-full">

                                <div class="flex-1 relative overflow-hidden h-10">
                                    <textarea placeholder="Add Comment...." rows="1"
                                        class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent"
                                        aria-haspopup="true" aria-expanded="false"></textarea>

                                    <div class="!top-2 pr-2 uk-drop" uk-drop="pos: bottom-right; mode: click">
                                        <div class="flex items-center gap-2"
                                            uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="w-6 h-6 fill-sky-600" style="opacity: 0;">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="w-5 h-5 fill-pink-600"
                                                style="opacity: 0;">
                                                <path
                                                    d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>


                                </div>


                                <button type="submit" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery">
                                    Replay</button>
                            </div>

                        </div>




                    </div>

                    <!-- sidebar -->

                    <div class="lg:w-[400px]">

                        <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6"
                            uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                            <div class="box p-5 px-6">

                                <div class="flex items-ce justify-between text-black dark:text-white">
                                    <h3 class="font-bold text-lg"> بیوگرافی </h3>
                                    <a href="#" class="text-sm text-blue-500">Edit</a>
                                </div>

                                <ul class="text-gray-700 space-y-4 mt-4 text-sm dark:text-white/80">

                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                        <div> Live In <span
                                                class="font-semibold text-black dark:text-white">بوکان</span> </div>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                        </svg>
                                        <div> Studied at <span class="font-semibold text-black dark:text-white">
                                                شرکت مهندسین نوین</span> </div>
                                    </li>
                                    <li class="flex items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                        </svg>

                                        <div> Works at <span class="font-semibold text-black dark:text-white">فریلنسری
                                            </span> </div>
                                    </li>



                                </ul>




                            </div>

                            <div class="box p-5 px-6">

                                <div class="flex items-ce justify-between text-black dark:text-white">
                                    <h3 class="font-bold text-lg"> پیشنهاد ها </h3>
                                </div>

                                <div class="grid grid-cols-3 gap-2 gap-y-5 text-center text-sm mt-4 mb-2">

                                    <div>
                                        <div class="relative w-full aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                                class="object-cover w-full h-full inset-0">
                                        </div>
                                        <div class="mt-2 line-clamp-1"> 250 cp کالاف دیوتی </div>
                                    </div>
                                    <div>
                                        <div class="relative w-full aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/avatars/avatar-8.jpg" alt=""
                                                class="object-cover w-full h-full inset-0">
                                        </div>
                                        <div class="mt-2 line-clamp-1"> گردونه لجند کریسمس </div>
                                    </div>
                                    <div>
                                        <div class="relative w-full aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                                class="object-cover w-full h-full inset-0">
                                        </div>
                                        <div class="mt-2 line-clamp-1">اکانت مکس لول </div>
                                    </div>
                                    <div>
                                        <div class="relative w-full aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                                class="object-cover w-full h-full inset-0">
                                        </div>
                                        <div class="mt-2 line-clamp-1"> kilo 141 متیک </div>
                                    </div>
                                    <div>
                                        <div class="relative w-full aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                                class="object-cover w-full h-full inset-0">
                                        </div>
                                        <div class="mt-2 line-clamp-1">AK117 لجند </div>
                                    </div>
                                    <div>
                                        <div class="relative w-full aspect-square rounded-lg overflow-hidden">
                                            <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                                class="object-cover w-full h-full inset-0">
                                        </div>
                                        <div class="mt-2 line-clamp-1"> آفر ویژه</div>
                                    </div>


                                </div>


                            </div>

                            <!-- Groups You Manage  -->
                            <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">

                                <div class="flex items-baseline justify-between text-black dark:text-white">
                                    <h3 class="font-bold text-base"> Suggested Manage </h3>
                                    <a href="#" class="text-sm text-blue-500">See all</a>
                                </div>

                                <div class="side-list">

                                    <div class="side-list-item">
                                        <a href="timeline-group.html">
                                            <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                                class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-group.html">
                                                <h4 class="side-list-title"> John Michael</h4>
                                            </a>
                                            <div class="side-list-info"> Updated 6 day ago </div>
                                        </div>
                                        <button class="button bg-primary-soft dark:text-white">Like</button>
                                    </div>
                                    <div class="side-list-item">
                                        <a href="timeline-group.html">
                                            <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                                class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-group.html">
                                                <h4 class="side-list-title"> Martin Gray</h4>
                                            </a>
                                            <div class="side-list-info"> Updated 2 month ago </div>
                                        </div>
                                        <button class="button bg-primary-soft dark:text-white">Like</button>
                                    </div>
                                    <div class="side-list-item">
                                        <a href="timeline-group.html">
                                            <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                                class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-group.html">
                                                <h4 class="side-list-title"> Monroe Parker</h4>
                                            </a>
                                            <div class="side-list-info"> Updated 1 week ago </div>
                                        </div>
                                        <button class="button bg-primary-soft dark:text-white">Like</button>
                                    </div>
                                    <div class="side-list-item">
                                        <a href="timeline-group.html">
                                            <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                                class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline-group.html">
                                                <h4 class="side-list-title"> Jesse Steeve</h4>
                                            </a>
                                            <div class="side-list-info"> Updated 2 day ago </div>
                                        </div>
                                        <button class="button bg-primary-soft dark:text-white">Like</button>
                                    </div>

                                </div>

                                <button
                                    class="bg-secondery w-full text-black py-1.5 font-medium px-3.5 rounded-md text-sm mt-2 dark:text-white">See
                                    all</button>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

        </main>

    </div>


    <!-- open chat box -->
    <div>
        <button type="button"
            class="sm:m-10 m-5 px-4 py-2.5 rounded-2xl bg-gradient-to-tr from-blue-500 to-blue-700 text-white shadow fixed bottom-0 right-0 group flex items-center gap-2">

            <svg class="w-6 h-6 group-aria-expanded:hidden duration-500" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z">
                </path>
            </svg>

            <div class="text-base font-semibold max-sm:hidden"> Chat </div>

            <svg class="w-6 h-6 -mr-1 hidden group-aria-expanded:block" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                    clip-rule="evenodd" />
            </svg>

        </button>
        <div class="bg-white rounded-xl drop-shadow-xl  sm:w-80 w-screen border-t dark:bg-dark3 dark:border-slate-600"
            id="chat__box"
            uk-drop="offset:10;pos: bottom-right; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-right; mode: click">

            <div class="relative">
                <div class="p-5">
                    <h1 class="text-lg font-bold text-black"> Chats </h1>
                </div>

                <!-- search input defaul is hidden -->
                <div class="bg-white p-3 absolute w-full top-11 border-b flex gap-2 hidden dark:border-slate-600 dark:bg-slate-700 z-10"
                    uk-scrollspy="cls:uk-animation-slide-bottom-small ; repeat: true; duration:0" id="search__chat">

                    <div class="relative w-full">
                        <input type="text" class="w-full rounded-3xl dark:!bg-white/10" placeholder="Search">

                        <button type="button"
                            class="absolute  right-0  rounded-full shrink-0 px-2 -translate-y-1/2 top-1/2"
                            uk-toggle="target: #search__chat ; cls: hidden">

                            <ion-icon name="close-outline" class="text-xl flex"></ion-icon>
                        </button>
                    </div>

                </div>

                <!-- button actions -->
                <div class="absolute top-0 -right-1 m-5 flex gap-2 text-xl">
                    <button uk-toggle="target: #search__chat ; cls: hidden">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                    <button uk-toggle="target: #chat__box ; cls: uk-open">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>

                <!-- tabs -->
                <div class="page-heading bg-slat e-50 ">

                    <nav class="nav__underline -mt-7 px-5">

                        <ul class="group"
                            uk-switcher="connect: #chat__tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                            <li> <a href="#"
                                    class="inline-block py-[18px] border-b-2 border-transparent aria-expanded:text-black aria-expanded:border-black aria-expanded:dark:text-white aria-expanded:dark:border-white">
                                    Friends </a> </li>
                            <li> <a href="#"> Groups </a> </li>

                        </ul>

                    </nav>

                </div>

                <!-- tab 2 optional -->
                <div class="grid grid-cols-2 px-3 py-2 bg-slate-50  -mt-12 relative z-10 text-sm border-b  hidden"
                    uk-switcher="connect: #chat__tabs; toggle: * > button ; animation: uk-animation-slide-right uk-animation-slide-top">
                    <button class="bg-white shadow rounded-md py-1.5"> Friends </button>
                    <button> Groups </button>
                </div>

                <!-- chat list -->
                <div class="uk-switcher overflow-hidden rounded-xl -mt-8" id="chat__tabs">

                    <!-- tab list 1 -->
                    <div class="space-y -m t-5 p-3 text-sm font-medium h-[280px] overflow-y-auto">

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>


                    </div>

                    <!-- tab list 2 -->
                    <div class="space-y -m t-5 p-3 text-sm font-medium h-[280px] overflow-y-auto">

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-1.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Jesse Steeve </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> John Michael </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Monroe Parker </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> James Lewis </div>
                            </div>
                        </a>

                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Martin Gray </div>
                            </div>
                        </a>
                        <a href="#" class="block">
                            <div
                                class="flex items-center gap-3.5 rounded-lg p-2 hover:bg-secondery dark:hover:bg-white/10">
                                <img src="assets/images/avatars/avatar-6.jpg" alt=""
                                    class="w-7 rounded-full">
                                <div> Alexa stella </div>
                            </div>
                        </a>


                    </div>

                </div>


            </div>

            <div class="w-3.5 h-3.5 absolute -bottom-2 right-5 bg-white rotate-45 dark:bg-dark3"></div>
        </div>
    </div>

    <!-- create status -->
    <div class="hidden lg:p-20 uk- open" id="create-status" uk-modal="">

        <div
            class="uk-modal-dialog tt relative overflow-hidden mx-auto bg-white shadow-xl rounded-lg md:w-[520px] w-full dark:bg-dark2">

            <div class="text-center py-4 border-b mb-0 dark:border-slate-700">
                <h2 class="text-sm font-medium text-black"> Create Status </h2>

                <!-- close button -->
                <button type="button" class="button-icon absolute top-0 right-0 m-2.5 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>

            <div class="space-y-5 mt-3 p-2">
                <textarea
                    class="w-full !text-black placeholder:!text-black !bg-white !border-transparent focus:!border-transparent focus:!ring-transparent !font-normal !text-xl   dark:!text-white dark:placeholder:!text-white dark:!bg-slate-800"
                    name="" id="" rows="6" placeholder="What do you have in mind?"></textarea>
            </div>

            <div class="flex items-center gap-2 text-sm py-2 px-4 font-medium flex-wrap">
                <button type="button"
                    class="flex items-center gap-1.5 bg-sky-50 text-sky-600 rounded-full py-1 px-2 border-2 border-sky-100 dark:bg-sky-950 dark:border-sky-900">
                    <ion-icon name="image" class="text-base"></ion-icon>
                    Image
                </button>
                <button type="button"
                    class="flex items-center gap-1.5 bg-teal-50 text-teal-600 rounded-full py-1 px-2 border-2 border-teal-100 dark:bg-teal-950 dark:border-teal-900">
                    <ion-icon name="videocam" class="text-base"></ion-icon>
                    Video
                </button>
                <button type="button"
                    class="flex items-center gap-1.5 bg-orange-50 text-orange-600 rounded-full py-1 px-2 border-2 border-orange-100 dark:bg-yellow-950 dark:border-yellow-900">
                    <ion-icon name="happy" class="text-base"></ion-icon>
                    Feeling
                </button>
                <button type="button"
                    class="flex items-center gap-1.5 bg-red-50 text-red-600 rounded-full py-1 px-2 border-2 border-rose-100 dark:bg-rose-950 dark:border-rose-900">
                    <ion-icon name="location" class="text-base"></ion-icon>
                    Check in
                </button>
                <button type="button" class="grid place-items-center w-8 h-8 text-xl rounded-full bg-secondery">
                    <ion-icon name="ellipsis-horizontal"></ion-icon>
                </button>
            </div>

            <div class="p-5 flex justify-between items-center">
                <div>
                    <button
                        class="inline-flex items-center py-1 px-2.5 gap-1 font-medium text-sm rounded-full bg-slate-50 border-2 border-slate-100 group aria-expanded:bg-slate-100 aria-expanded: dark:text-white dark:bg-slate-700 dark:border-slate-600"
                        type="button">
                        Everyone
                        <ion-icon name="chevron-down-outline"
                            class="text-base duration-500 group-aria-expanded:rotate-180"></ion-icon>
                    </button>

                    <div class="p-2 bg-white rounded-lg shadow-lg text-black font-medium border border-slate-100 w-60 dark:bg-slate-700"
                        uk-drop="offset:10;pos: bottom-left; reveal-left;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left ; mode:click">

                        <form>
                            <label>
                                <input type="radio" name="radio-status" id="monthly1"
                                    class="peer appearance-none hidden" checked />
                                <div
                                    class=" relative flex items-center justify-between cursor-pointer rounded-md p-2 px-3 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                    <div class="text-sm"> Everyone </div>
                                    <ion-icon name="checkmark-circle"
                                        class="hidden active absolute -translate-y-1/2 right-2 text-2xl text-blue-600 uk-animation-scale-up"></ion-icon>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="radio-status" id="monthly1"
                                    class="peer appearance-none hidden" />
                                <div
                                    class=" relative flex items-center justify-between cursor-pointer rounded-md p-2 px-3 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                    <div class="text-sm"> Friends </div>
                                    <ion-icon name="checkmark-circle"
                                        class="hidden active absolute -translate-y-1/2 right-2 text-2xl text-blue-600 uk-animation-scale-up"></ion-icon>
                                </div>
                            </label>
                            <label>
                                <input type="radio" name="radio-status" id="monthly"
                                    class="peer appearance-none hidden" />
                                <div
                                    class=" relative flex items-center justify-between cursor-pointer rounded-md p-2 px-3 hover:bg-secondery peer-checked:[&_.active]:block dark:bg-dark3">
                                    <div class="text-sm"> Only me </div>
                                    <ion-icon name="checkmark-circle"
                                        class="hidden active absolute -translate-y-1/2 right-2 text-2xl text-blue-600 uk-animation-scale-up"></ion-icon>
                                </div>
                            </label>
                        </form>

                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <button type="button" class="button bg-blue-500 text-white py-2 px-12 text-[14px]">
                        Create</button>
                </div>
            </div>

        </div>

    </div>


    <!-- Javascript  -->
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/script.js"></script>


    <!-- Ion icon -->
    <script type="module" src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"></script>


</body>

<!-- Mirrored from demo.foxthemes.net/socialite-v3.0/timeline.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 02:18:47 GMT -->

</html>



