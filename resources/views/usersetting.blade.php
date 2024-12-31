<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">

    <!-- title and description-->
    <title>Socialite</title>
    <meta name="description" content="Socialite - Social sharing network HTML Template">

    <!-- css files -->
    <link rel="stylesheet" href="{{ asset("assets/css/tailwind.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">

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
                            <input type="text" placeholder="Search Friends, videos .."
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
                                        class="flex hover:bg-red-50 dark:hover:bg-slate-700 p-1.5 rounded"> <ion-icon
                                            name="trash" class="mr-2 text-lg"></ion-icon> Clear your history</a>
                                </div>
                            </div>

                        </div>

                        <!-- header icons -->
                        <div
                            class="flex items-center sm:gap-4 gap-2 absolute right-5 top-1/2 -translate-y-1/2 text-black">
                            <!-- create -->
                            <button type="button"
                                class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 max-sm:hidden">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15">
                                    </path>
                                </svg>
                                <ion-icon name="add-circle-outline" class="sm:hidden text-2xl "></ion-icon>
                            </button>
                            <div class="hidden bg-white p-4 rounded-lg overflow-hidden drop-shadow-xl dark:bg-slate-700 md:w-[324px] w-screen border2"
                                uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">

                                <h3 class="font-bold text-md"> Create </h3>

                                <!-- slider -->
                                <div class="mt-4" tabindex="-1" uk-slider="finite:true;sets: true">

                                    <div class="uk-slider-container pb-1">

                                        <ul class="uk-slider-items grid-small"
                                            uk-scrollspy="target: > li; cls: uk-animation-scale-up , uk-animation-slide-right-small; delay: 20 ;repeat: true">
                                            <li class="w-28" uk-scrollspy-class="uk-animation-fade">
                                                <div
                                                    class="p-3 px-4 rounded-lg bg-teal-100/60 text-teal-600 dark:text-white dark:bg-dark4">
                                                    <ion-icon name="book"
                                                        class="text-2xl drop-shadow-md"></ion-icon>
                                                    <div class="mt-1.5 text-sm font-medium"> Story </div>
                                                </div>
                                            </li>
                                            <li class="w-28">
                                                <div
                                                    class="p-3 px-4 rounded-lg bg-sky-100/60 text-sky-600 dark:text-white dark:bg-dark4">
                                                    <ion-icon name="camera"
                                                        class="text-2xl drop-shadow-md"></ion-icon>
                                                    <div class="mt-1.5 text-sm font-medium"> Post </div>
                                                </div>
                                            </li>
                                            <li class="w-28">
                                                <div
                                                    class="p-3 px-4 rounded-lg bg-purple-100/60 text-purple-600 dark:text-white dark:bg-dark4">
                                                    <ion-icon name="videocam"
                                                        class="text-2xl drop-shadow-md"></ion-icon>
                                                    <div class="mt-1.5 text-sm font-medium"> Reel </div>
                                                </div>
                                            </li>
                                            <li class="w-28">
                                                <div
                                                    class="p-3 px-4 rounded-lg bg-pink-100/60 text-pink-600 dark:text-white dark:bg-dark4">
                                                    <ion-icon name="location"
                                                        class="text-2xl drop-shadow-md"></ion-icon>
                                                    <div class="mt-1.5 text-sm font-medium"> location </div>
                                                </div>
                                            </li>
                                            <li class="w-28">
                                                <div
                                                    class="p-3 px-4 rounded-lg bg-sky-100/70 text-sky-600 dark:text-white dark:bg-dark4">
                                                    <ion-icon name="happy"
                                                        class="text-2xl  drop-shadow-md"></ion-icon>
                                                    <div class="mt-1.5 text-sm font-medium"> Status </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>

                                    <!-- slide nav icons -->
                                    <div class="dark:hidden">
                                        <a class="absolute -translate-y-1/2 top-1/2 -left-4 flex items-center w-8 h-full px-1.5 justify-start bg-gradient-to-r from-white via-white dark:from-slate-600 dark:via-slate-500 dark:from-transparent dark:via-transparent"
                                            href="#" uk-slider-item="previous"> <ion-icon name="chevron-back"
                                                class="text-xl dark:text-white"></ion-icon> </a>
                                        <a class="absolute -translate-y-1/2 top-1/2 -right-4 flex items-center w-8 h-full px-1.5 justify-end bg-gradient-to-l from-white via-white dark:from-transparent dark:via-transparent"
                                            href="#" uk-slider-item="next"> <ion-icon name="chevron-forward"
                                                class="text-xl dark:text-white"></ion-icon> </a>
                                    </div>


                                    <!-- slide nav -->
                                    <div class="justify-center mt-2 -mb-2 hidden dark:flex">
                                        <ul class="inline-flex flex-wrap justify-center gap-1 uk-dotnav uk-slider-nav">
                                        </ul>
                                    </div>

                                </div>

                                <!-- list -->
                                <ul class="-m-1 mt-4 pb-1 text-xs text-gray-500 dark:text-white"
                                    uk-scrollspy="target: > li; cls: uk-animation-scale-up , uk-animation-slide-bottom-small ;repeat: true">
                                    <li
                                        class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                        <img src="assets/images/icons/group.png" alt="" class="w-7">
                                        <div class="flex-1">
                                            <a href="timeline.html">
                                                <h4 class="font-medium text-sm text-black dark:text-white"> Groups
                                                </h4>
                                            </a>
                                            <div class="mt-1 text-xs text-gray-500 dark:text-white"> Meet people with
                                                similar interests. </div>
                                        </div>
                                    </li>
                                    <li
                                        class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                        <img src="assets/images/icons/page.png" alt="" class="w-7">
                                        <div class="flex-1">
                                            <a href="timeline.html">
                                                <h4 class="font-medium text-sm text-black dark:text-white"> Pages </h4>
                                            </a>
                                            <div class="mt-1"> Find and connect with businesses.
                                            </div>
                                    </li>
                                    <li
                                        class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                        <img src="assets/images/icons/event.png" class="w-7">
                                        <div class="flex-1">
                                            <a href="timeline.html">
                                                <h4 class="font-medium text-sm text-black dark:text-white"> Event </h4>
                                            </a>
                                            <div class="mt-1">Discover fun activities near you .</div>
                                        </div>
                                    </li>
                                    <li
                                        class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                        <img src="assets/images/icons/market.png" class="w-8 -ml-1">
                                        <div class="flex-1">
                                            <a href="timeline.html">
                                                <h4 class="font-medium text-sm text-black dark:text-white"> Event </h4>
                                            </a>
                                            <div class="mt-1">Find local buyers and sellers .</div>
                                        </div>
                                    </li>
                                    <li
                                        class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                        <img src="assets/images/icons/game.png" alt="" class="w-7">
                                        <div class="flex-1">
                                            <a href="timeline.html">
                                                <h4 class="font-medium text-sm text-black dark:text-white"> Games </h4>
                                            </a>
                                            <div class="mt-1"> play game with friends have fun. </div>
                                        </div>
                                    </li>
                                </ul>


                            </div>

                            <!-- notification -->
                            <button type="button"
                                class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white"
                                uk-tooltip="title: Notification; pos: bottom; offset:6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 max-sm:hidden">
                                    <path
                                        d="M5.85 3.5a.75.75 0 00-1.117-1 9.719 9.719 0 00-2.348 4.876.75.75 0 001.479.248A8.219 8.219 0 015.85 3.5zM19.267 2.5a.75.75 0 10-1.118 1 8.22 8.22 0 011.987 4.124.75.75 0 001.48-.248A9.72 9.72 0 0019.266 2.5z" />
                                    <path fill-rule="evenodd"
                                        d="M12 2.25A6.75 6.75 0 005.25 9v.75a8.217 8.217 0 01-2.119 5.52.75.75 0 00.298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 107.48 0 24.583 24.583 0 004.83-1.244.75.75 0 00.298-1.205 8.217 8.217 0 01-2.118-5.52V9A6.75 6.75 0 0012 2.25zM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 004.496 0l.002.1a2.25 2.25 0 11-4.5 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div
                                    class="absolute top-0 right-0 -m-1 bg-red-600 text-white text-xs px-1 rounded-full">
                                    6</div>
                                <ion-icon name="notifications-outline" class="sm:hidden text-2xl"></ion-icon>
                            </button>
                            <div class="hidden bg-white pr-1.5 rounded-lg drop-shadow-xl dark:bg-slate-700 md:w-[365px] w-screen border2"
                                uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">

                                <!-- heading -->
                                <div class="flex items-center justify-between gap-2 p-4 pb-2">
                                    <h3 class="font-bold text-xl"> Notifications </h3>

                                    <div class="flex gap-2.5">
                                        <button type="button"
                                            class="p-1 flex rounded-full focus:bg-secondery dark:text-white"> <ion-icon
                                                class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div class="w-[280px] group"
                                            uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click; offset:5">
                                            <nav class="text-sm">
                                                <a href="#"> <ion-icon class="text-xl shrink-0"
                                                        name="checkmark-circle-outline"></ion-icon> Mark all as
                                                    read</a>
                                                <a href="#"> <ion-icon class="text-xl shrink-0"
                                                        name="settings-outline"></ion-icon> Notification setting</a>
                                                <a href="#"> <ion-icon class="text-xl shrink-0"
                                                        name="notifications-off-outline"></ion-icon> Mute Notification
                                                </a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-sm h-[400px] w-full overflow-y-auto pr-2">

                                    <!-- contents list -->
                                    <div class="pl-2 p-1 text-sm font-normal dark:text-white">

                                        <a href="#"
                                            class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10 bg-teal-500/5">
                                            <div class="relative w-12 h-12 shrink-0"> <img
                                                    src="assets/images/avatars/avatar-3.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Alexa Gray</b> started following you.
                                                    Welcome him to your profile. 👋 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 4 hours
                                                    ago </div>
                                                <div
                                                    class="w-2.5 h-2.5 bg-teal-600 rounded-full absolute right-3 top-5">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img
                                                    src="assets/images/avatars/avatar-7.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1">Jesse Steeve</b> mentioned you in a
                                                    story. Check it out and reply. 📣 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours
                                                    ago </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img
                                                    src="assets/images/avatars/avatar-6.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Alexa stella</b> commented on your photo
                                                    “Wow, stunning shot!” 💬 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours
                                                    ago </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img
                                                    src="assets/images/avatars/avatar-2.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> John Michael</b> who you might know, is
                                                    on socialite.</p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 2 hours
                                                    ago </div>
                                            </div>
                                            <button type="button"
                                                class="button text-white bg-primary">fallow</button>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10 bg-teal-500/5">
                                            <div class="relative w-12 h-12 shrink-0"> <img
                                                    src="assets/images/avatars/avatar-3.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Sarah Gray</b> sent you a message. He
                                                    wants to chat with you. 💖 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 4 hours
                                                    ago </div>
                                                <div
                                                    class="w-2.5 h-2.5 bg-teal-600 rounded-full absolute right-3 top-5">
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img
                                                    src="assets/images/avatars/avatar-4.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Jesse Steeve</b> sarah tagged you <br>
                                                    in a photo of your birthday party. 📸 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours
                                                    ago </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img
                                                    src="assets/images/avatars/avatar-2.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Lewis Lewis</b> mentioned you in a
                                                    story. Check it out and reply. 📣 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours
                                                    ago </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img
                                                    src="assets/images/avatars/avatar-7.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Martin Gray</b> liked your photo of the
                                                    Eiffel Tower. 😍 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours
                                                    ago </div>
                                            </div>
                                        </a>

                                    </div>

                                </div>


                                <!-- footer -->
                                <a href="#">
                                    <div
                                        class="text-center py-4 border-t border-slate-100 text-sm font-medium text-blue-600 dark:text-white dark:border-gray-600">
                                        View Notifications </div>
                                </a>

                                <div
                                    class="w-3 h-3 absolute -top-1.5 right-3 bg-white border-l border-t rotate-45 max-md:hidden dark:bg-dark3 dark:border-transparent">
                                </div>
                            </div>

                            <!-- messages -->
                            <button type="button"
                                class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white"
                                uk-tooltip="title: Messages; pos: bottom; offset:6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 max-sm:hidden">
                                    <path fill-rule="evenodd"
                                        d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <ion-icon name="chatbox-ellipses-outline" class="sm:hidden text-2xl"></ion-icon>
                            </button>
                            <div class="hidden bg-white pr-1.5 rounded-lg drop-shadow-xl dark:bg-slate-700 md:w-[360px] w-screen border2"
                                uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">

                                <!-- heading -->
                                <div class="flex items-center justify-between gap-2 p-4 pb-1">
                                    <h3 class="font-bold text-xl"> Chats </h3>

                                    <div class="flex gap-2.5 text-lg text-slate-900 dark:text-white">
                                        <ion-icon name="expand-outline"></ion-icon>
                                        <ion-icon name="create-outline"></ion-icon>
                                    </div>
                                </div>

                                <div class="relative w-full p-2 px-3 ">
                                    <input type="text" class="w-full !pl-10 !rounded-lg dark:!bg-white/10"
                                        placeholder="Search">
                                    <ion-icon name="search-outline"
                                        class="dark:text-white absolute left-7 -translate-y-1/2 top-1/2"></ion-icon>
                                </div>

                                <div class="h-80 overflow-y-auto pr-2">

                                    <div class="p-2 pt-0 pr-1 dark:text-white/80">

                                        <a href="#"
                                            class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0">
                                                <img src="assets/images/avatars/avatar-2.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div
                                                        class="mr-auto text-sm text-black dark:text-white font-medium">
                                                        Jesse Steeve</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 09:40AM
                                                    </div>
                                                    <div
                                                        class="w-2.5 h-2.5 bg-blue-600 rounded-full dark:bg-slate-700">
                                                    </div>
                                                </div>
                                                <div
                                                    class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">
                                                    Love your photos 😍</div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0">
                                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div
                                                        class="mr-auto text-sm text-black dark:text-white font-medium">
                                                        Martin Gray</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 02:40AM
                                                    </div>
                                                </div>
                                                <div
                                                    class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">
                                                    Product photographer wanted? 📷</div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0">
                                                <img src="assets/images/avatars/avatar-5.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div
                                                        class="mr-auto text-sm text-black dark:text-white font-medium">
                                                        Jesse Steeve</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 2 day </div>
                                                </div>
                                                <div
                                                    class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">
                                                    Want to buy landscape photo? 🌄</div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0">
                                                <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div
                                                        class="mr-auto text-sm text-black dark:text-white font-medium">
                                                        Monroe Parker</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 4 week
                                                    </div>
                                                    <div
                                                        class="w-2.5 h-2.5 bg-blue-600 rounded-full dark:bg-slate-700">
                                                    </div>
                                                </div>
                                                <div
                                                    class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">
                                                    I’m glad you like it.😊</div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0">
                                                <img src="assets/images/avatars/avatar-7.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div
                                                        class="mr-auto text-sm text-black dark:text-white font-medium">
                                                        Alex Dolve</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 2 month
                                                    </div>
                                                </div>
                                                <div
                                                    class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">
                                                    Photo editor needed. Fix photos? 🛠️</div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0">
                                                <img src="assets/images/avatars/avatar-4.jpg" alt=""
                                                    class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div
                                                        class="mr-auto text-sm text-black dark:text-white font-medium">
                                                        Jesse Steeve</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 09:40AM
                                                    </div>
                                                </div>
                                                <div
                                                    class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">
                                                    Love your photos 😍</div>
                                            </div>
                                        </a>

                                    </div>

                                </div>


                                <!-- footer -->
                                <a href="#">
                                    <div
                                        class="text-center py-4 border-t border-slate-100 text-sm font-medium text-blue-600 dark:text-white dark:border-gray-600">
                                        See all Messages </div>
                                </a>

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
                                            <h4 class="text-sm font-medium text-black">Stell johnson</h4>
                                            <div class="text-sm mt-1 text-blue-600 font-light dark:text-white/70">
                                                @mohnson</div>
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
                                    <a href="setting.html">
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
                            <li>
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

            <div class="max-w-3xl mx-auto">


                <div class="box relative rounded-lg shadow-md">

                    <div class="flex md:gap-8 gap-4 items-center md:p-8 p-6 md:pb-4">


                        <div class="relative md:w-20 md:h-20 w-12 h-12 shrink-0">

                            <label for="file" class="cursor-pointer">
                                <img id="img" src="assets/images/avatars/avatar-3.jpg"
                                    class="object-cover w-full h-full rounded-full" alt="" />
                                <input type="file" id="file" class="hidden" />
                            </label>

                            <label for="file"
                                class="md:p-1 p-0.5 rounded-full bg-slate-600 md:border-4 border-white absolute -bottom-2 -right-2 cursor-pointer dark:border-slate-700">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="md:w-4 md:h-4 w-3 h-3 fill-white">
                                    <path d="M12 9a3.75 3.75 0 100 7.5A3.75 3.75 0 0012 9z" />
                                    <path fill-rule="evenodd"
                                        d="M9.344 3.071a49.52 49.52 0 015.312 0c.967.052 1.83.585 2.332 1.39l.821 1.317c.24.383.645.643 1.11.71.386.054.77.113 1.152.177 1.432.239 2.429 1.493 2.429 2.909V18a3 3 0 01-3 3h-15a3 3 0 01-3-3V9.574c0-1.416.997-2.67 2.429-2.909.382-.064.766-.123 1.151-.178a1.56 1.56 0 001.11-.71l.822-1.315a2.942 2.942 0 012.332-1.39zM6.75 12.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0zm12-1.5a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                        clip-rule="evenodd" />
                                </svg>

                                <input id="file" type="file" class="hidden" />

                            </label>

                        </div>

                        <div class="flex-1">
                            <h3 class="md:text-xl text-base font-semibold text-black dark:text-white"> Monroe Parker
                            </h3>
                            <p class="text-sm text-blue-600 mt-1 font-normal">@Monroe</p>
                        </div>

                        <button
                            class="inline-flex items-center gap-1 py-1 pl-2.5 pr-3 rounded-full bg-slate-50 border-2 border-slate-100 dark:text-white dark:bg-slate-700"
                            type="button" aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="flash-outline"
                                class="text-base duration-500 group-aria-expanded:rotate-180 md hydrated"
                                role="img" aria-label="chevron down outline"></ion-icon>
                            <span class="font-medium text-sm"> Upgrade </span>
                        </button>
                    </div>

                    <!-- nav tabs -->
                    <div class="relative border-b" tabindex="-1" uk-slider="finite: true">

                        <nav
                            class="uk-slider-container overflow-hidden nav__underline px-6 p-0 border-transparent -mb-px">

                            <ul class="uk-slider-items w-[calc(100%+10px)] !overflow-hidden"
                                uk-switcher="connect: #setting_tab ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">

                                <li class="w-auto pr-2.5"> <a href="#"> Description </a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Setting</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Avatare</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Cover Photo</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Invites</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Finish</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Description </a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> Setting</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> anothers</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> anothers</a> </li>
                                <li class="w-auto pr-2.5"> <a href="#"> anothers44</a> </li>

                            </ul>

                        </nav>

                        <a class="absolute -translate-y-1/2 top-1/2 left-0 flex items-center w-20 h-full p-2 py-1 justify-start bg-gradient-to-r from-white via-white dark:from-slate-800 dark:via-slate-800"
                            href="#" uk-slider-item="previous"> <ion-icon name="chevron-back"
                                class="text-2xl ml-1"></ion-icon> </a>
                        <a class="absolute right-0 -translate-y-1/2 top-1/2 flex items-center w-20 h-full p-2 py-1 justify-end bg-gradient-to-l from-white via-white dark:from-slate-800 dark:via-slate-800"
                            href="#" uk-slider-item="next"> <ion-icon name="chevron-forward"
                                class="text-2xl mr-1"></ion-icon> </a>

                    </div>


                    <div id="setting_tab"
                        class="uk-switcher md:py-12 md:px-20 p-6 overflow-hidden text-black text-sm">


                        <!-- tab user basic info -->
                        <div>

                            <div>

                                <div class="space-y-6">

                                    <div class="md:flex items-center gap-10">
                                        <label class="md:w-32 text-right"> Username </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="text" placeholder="Monroe" class="lg:w-1/2 w-full">
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-10">
                                        <label class="md:w-32 text-right"> Email </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="text" placeholder="info@mydomain.com" class="w-full">
                                        </div>
                                    </div>

                                    <div class="md:flex items-start gap-10">
                                        <label class="md:w-32 text-right"> Bio </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <textarea class="w-full" rows="5" placeholder="Inter your Bio"></textarea>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-10">
                                        <label class="md:w-32 text-right"> Gender </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="!border-0 !rounded-md lg:w-1/2 w-full">
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-10">
                                        <label class="md:w-32 text-right"> Relationship </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="!border-0 !rounded-md lg:w-1/2 w-full">
                                                <option value="0">None</option>
                                                <option value="1">Single</option>
                                                <option value="2">In a relationship</option>
                                                <option value="3">Married</option>
                                                <option value="4">Engaged</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-start gap-10 " hidden>
                                        <label class="md:w-32 text-right"> Avatar </label>
                                        <div class="flex-1 flex items-center gap-5 max-md:mt-4">
                                            <img src="assets/images/avatars/avatar-3.jpg" alt=""
                                                class="w-10 h-10 rounded-full">
                                            <button type="submit"
                                                class="px-4 py-1 rounded-full bg-slate-100/60 border dark:bg-slate-700 dark:border-slate-600 dark:text-white">
                                                Change</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex items-center gap-4 mt-16 lg:pl-[10.5rem]">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit"
                                        class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save <span
                                            class="ripple-overlay"></span></button>
                                </div>

                            </div>

                        </div>

                        <!-- tab socialinks -->
                        <div>

                            <div class="max-w-md mx-auto">

                                <div class="font-normal text-gray-400">

                                    <div>
                                        <h4 class="text-xl font-medium text-black dark:text-white"> Social Links </h4>
                                        <p class="mt-3 font-normal text-gray-600 dark:text-white">We may still send you
                                            important notifications about your account and content outside of you
                                            preferred notivications settings</p>
                                    </div>

                                    <div class="space-y-6 mt-8">

                                        <div class="flex items-center gap-3">
                                            <div class="bg-blue-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-facebook"
                                                    class="text-2xl text-blue-600"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.facebook.com/myname">
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="bg-pink-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-instagram"
                                                    class="text-2xl text-pink-600"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.instagram.com/myname">
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="bg-sky-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-twitter"
                                                    class="text-2xl text-sky-600"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.twitter.com/myname">
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="bg-red-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-youtube"
                                                    class="text-2xl text-red-600"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.youtube.com/myname">
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="bg-slate-50 rounded-full p-2 flex ">
                                                <ion-icon name="logo-github" class="text-2xl text-black"></ion-icon>
                                            </div>
                                            <div class="flex-1">
                                                <input type="text" class="w-full"
                                                    placeholder="http://www.github.com/myname">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit"
                                        class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab checkbox -->
                        <div>

                            <div>

                                <div class="md:flex items-start gap-16">
                                    <label class="md:w-32 text-right font-semibold"> Notify me when </label>

                                    <div class="flex-1 space-y-4 interactive-effect max-md:mt-5">

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox1"
                                                    value="3" />
                                                <span class="ml-3"> Someone send me message </span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox1"
                                                    value="3" />
                                                <span class="ml-3"> Someone liked my photo </span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone shared on my photo </span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone followed me </span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone liked my posts</span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone mentioned me</span>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="inline-flex items-center">
                                                <input class="rounded" type="checkbox" checked name="checkbox2"
                                                    value="3" />
                                                <span class="ml-3"> Someone sent me follow requset</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit"
                                        class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab toggle options-->
                        <div>

                            <div>

                                <div class="space-y-6">

                                    <div class="md:flex items-start gap-10">

                                        <label class="w-40 text-right font-semibold"> Who can follow me ? </label>

                                        <div class="flex-1 space-y-2 interactive-effect max-md:mt-3">

                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s1" checked value="1" />
                                                    <span class="ml-3"> Everyone</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s1" value="2" />
                                                    <span class="ml-3"> The People I Follow</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s1" value="3" />
                                                    <span class="ml-3"> No body</span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="md:flex items-start gap-10">

                                        <label class="md:w-40 text-right font-semibold"> Who can message me ? </label>

                                        <div class="flex-1 space-y-2 interactive-effect max-md:mt-3">

                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s2" checked value="1" />
                                                    <span class="ml-3"> Everyone</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s2" value="2" />
                                                    <span class="ml-3"> The People I Follow</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s2" value="3" />
                                                    <span class="ml-3"> No body</span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="md:flex items-start gap-10">

                                        <label class="md:w-40 text-right font-semibold">Status</label>

                                        <div class="flex-1 space-y-2 interactive-effect max-md:mt-3">

                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s3" checked value="3" />
                                                    <span class="ml-3"> Yes</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s3" value="3" />
                                                    <span class="ml-3"> No</span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="md:flex items-start gap-10">

                                        <label class="md:w-40 text-right font-semibold">Show my activities ?</label>

                                        <div class="flex-1 space-y-2 interactive-effect max-md:mt-3">

                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s4" checked value="3" />
                                                    <span class="ml-3"> Public</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center">
                                                    <input type="radio" name="radio-s4" value="3" />
                                                    <span class="ml-3"> Hide</span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit"
                                        class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab select dropdown-->
                        <div>

                            <div>

                                <div class="space-y-6 max-w-lg mx-auto font-medium">

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Who can follow me ? </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Everyone</option>
                                                <option value="2">People I Follow</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Who can message me ? </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Everyone</option>
                                                <option value="2">People I Follow</option>
                                                <option value="2">No body</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Show my activities ?</label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Yes</option>
                                                <option value="2">Now</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Status </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Online</option>
                                                <option value="2">Offline</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Who can see my tags? </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Everyone</option>
                                                <option value="2">People I Follow</option>
                                                <option value="2">No body</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Allow search engines </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Yes</option>
                                                <option value="2">Now</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit"
                                        class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab Premision -->
                        <div>

                            <div>

                                <div class="max-w-lg mx-auto font-normal text-gray-400 text-sm">

                                    <div>
                                        <h4 class="text-lg font-semibold text-black dark:text-white"> Alerts
                                            preferences </h4>
                                        <p class=" mt-3">We may still send you important notifications about your
                                            account and content outside of you preferred notivications settings</p>
                                    </div>

                                    <div class="mt-8 md:space-y-8 space-y-4"
                                        uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-medium; delay: 100 ;repeat: true">

                                        <div class="w-full">
                                            <label
                                                class="switch flex justify-between items-center cursor-pointer gap-4">
                                                <div
                                                    class="bg-sky-100 text-sky-500 rounded-full p-2 md:flex hidden shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                                    </svg>
                                                </div>
                                                <div class="flex-1 md:pr-8">
                                                    <h4
                                                        class="text-base font-medium mb-1.5 text-black dark:text-white">
                                                        Email notifications</h4>
                                                    <p class=""> You can receive notifications about important
                                                        updates and content directly to your email inbox. </p>
                                                </div>
                                                <input type="checkbox" checked><span
                                                    class="switch-button !relative"></span>
                                            </label>
                                        </div>

                                        <div class="w-full">
                                            <label
                                                class="switch flex justify-between items-center cursor-pointer gap-4">
                                                <div
                                                    class="bg-purple-100 text-purple-500 rounded-full p-2 md:flex hidden shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
                                                    </svg>
                                                </div>
                                                <div class="flex-1 md:pr-8">
                                                    <h4
                                                        class="text-base font-medium mb-1.5 text-black dark:text-white">
                                                        web notifications</h4>
                                                    <p class=""> You can receive notifications through your
                                                        notifications center </p>
                                                </div>
                                                <input type="checkbox"><span class="switch-button !relative"></span>
                                            </label>
                                        </div>

                                        <div class="w-full">
                                            <label
                                                class="switch flex justify-between items-center cursor-pointer gap-4">
                                                <div
                                                    class="bg-teal-100 text-teal-500 rounded-full p-2 md:flex hidden shrink-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                                    </svg>
                                                </div>
                                                <div class="flex-1 md:pr-8">
                                                    <h4
                                                        class="text-base font-medium mb-1.5 text-black dark:text-white">
                                                        Phone notifications</h4>
                                                    <p class=""> You can receive notifications on your phone, so
                                                        you can stay up-to-date even when you’re on the go</p>
                                                </div>
                                                <input type="checkbox" checked><span
                                                    class="switch-button !relative"></span>
                                            </label>
                                        </div>


                                    </div>

                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit"
                                        class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save</button>
                                </div>

                            </div>

                        </div>

                        <!-- tab password-->
                        <div>

                            <div>

                                <div class="space-y-6 max-w-lg mx-auto">

                                    <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                                        <label class="md:w-40 text-right"> Current Password </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="password" placeholder="******" class="w-full">
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                                        <label class="md:w-40 text-right"> New password </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="password" placeholder="******" class="w-full">
                                        </div>
                                    </div>

                                    <div class="md:flex items-center gap-16 justify-between max-md:space-y-3">
                                        <label class="md:w-40 text-right"> Repeat password </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="password" placeholder="******" class="w-full">
                                        </div>
                                    </div>

                                    <hr class="border-gray-100 dark:border-gray-700">

                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-40 text-right"> Two-factor authentication </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Enable</option>
                                                <option value="2">Disable</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>

                                <div class="flex items-center justify-center gap-4 mt-16">
                                    <button type="submit" class="button lg:px-6 bg-secondery max-md:flex-1">
                                        Cancle</button>
                                    <button type="submit"
                                        class="button lg:px-10 bg-primary text-white max-md:flex-1"> Save</button>
                                </div>

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


    <!-- Javascript  -->
    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/script.js"></script>


    <!-- Ion icon -->
    <script type="module" src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"></script>


</body>

<!-- Mirrored from demo.foxthemes.net/socialite-v3.0/setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 02:18:56 GMT -->

</html>