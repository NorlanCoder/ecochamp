<header class="z-[100] h-[--m-top] fixed top-0 left-0 w-full flex items-center bg-white/80 sky-50 backdrop-blur-xl border-b border-slate-200 dark:bg-dark2 dark:border-slate-800">
    <div class="flex items-center w-full xl:px-6 px-2 max-lg:gap-10">
        <div class="2xl:w-[--w-side] lg:w-[--w-side-sm]">
            <!-- left -->
            <div class="flex items-center gap-1">
                <!-- icon menu -->
                <button uk-toggle="target: #site__sidebar; cls :!-translate-x-0" class="flex items-center justify-center w-8 h-8 text-xl rounded-full hover:bg-gray-100 xl:hidden dark:hover:bg-slate-600 group">
                    <ion-icon name="menu-outline" class="text-2xl group-aria-expanded:hidden"></ion-icon>
                    <ion-icon name="close-outline" class="hidden text-2xl group-aria-expanded:block"></ion-icon>
                </button>
                <div id="logo">
                    <a href="{{ url('/home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="w-28 md:block hidden dark:!hidden">
                        <img src="{{ asset('images/logo-light.png') }}" alt="" class="dark:md:block hidden">
                        <img src="{{ asset('images/logo-mobile.png') }}" class="hidden max-md:block w-20 dark:!hidden" alt="">
                        <img src="{{ asset('images/logo-mobile-light.png') }}" class="hidden dark:max-md:block w-20" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div class="flex-1 relative">
            <div class="max-w-[1220px] mx-auto flex items-center">
                <!-- search -->
                <form action="{{ url('/search') }}" method="POST" enctype="multipart/form-data" id="form-data-search">
                    @csrf
                    <div id="search--box" class="xl:w-[680px] sm:w-96 sm:relative rounded-xl overflow-hidden z-20 bg-secondery max-md:hidden w-screen left-0 max-sm:fixed max-sm:top-2 dark:!bg-white/5">
                        <ion-icon name="search" class="absolute left-4 top-1/2 -translate-y-1/2"></ion-icon>
                        <input id="search" name="search" type="text" autocomplete="off" placeholder="Recherche ..." class="w-full !pl-10 !font-normal !bg-transparent h-12 !text-sm">
                        <ion-icon name="search" class="absolute right-4 top-1/2 -translate-y-1/2"></ion-icon>
                    </div>
                </form>
                <!-- search dropdown -->
                <div class="hidden z-10" uk-drop="pos: bottom-center; animation: uk-animation-slide-bottom-small;mode:click">
                    <div class="xl:w-[694px] sm:w-96 bg-white dark:bg-dark3 w-screen p-2 rounded-lg shadow-lg -mt-14 pt-14">
                        <div class="flex justify-between px-2 py-2.5 text-sm font-medium">
                            <div class="text-black dark:text-white">Récents</div>
                        </div>
                        <nav id="nav_search" class="text-sm font-medium text-black dark:text-white">
                        </nav>
                        <hr class="mx-2 mt-2 hidden">
                        <div class="flex justify-end pr-2 text-sm font-medium text-red-500 hidden">
                        </div>
                    </div>
                </div>

                <!-- header icons -->
                @auth
                <div class="flex items-center sm:gap-4 gap-2 absolute right-5 top-1/2 -translate-y-1/2 text-black">
                    <!-- create -->
                    <button type="button" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white" uk-tooltip="title: Créer; pos: bottom; offset:6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 max-sm:hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                        </svg>
                        <ion-icon name="add-circle-outline" class="sm:hidden text-2xl"></ion-icon>
                    </button>
                    <div class="hidden bg-white p-4 rounded-lg overflow-hidden drop-shadow-xl dark:bg-slate-700 md:w-[324px] w-screen border2" uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right">
                        <h3 class="font-bold text-md">Créer</h3>
                        <!-- slider -->
                        <div class="mt-4" tabindex="-1" uk-slider="finite:true;sets: true">
                            <div class="uk-slider-container pb-1">
                                <ul class="uk-slider-items grid-small" uk-scrollspy="target: > li; cls: uk-animation-scale-up, uk-animation-slide-right-small; delay: 20; repeat: true">
                                    <li class="w-28 cursor-pointer" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-3 px-4 rounded-lg bg-teal-100/60 text-teal-600 dark:text-white dark:bg-dark4" uk-toggle="target: #create-activity">
                                            <ion-icon name="book" class="text-2xl drop-shadow-md"></ion-icon>
                                            <div class="mt-1.5 text-sm font-medium">Activité</div>
                                        </div>
                                    </li>
                                    <li class="w-28 cursor-pointer">
                                        <div class="p-3 px-4 rounded-lg bg-sky-100/60 text-sky-600 dark:text-white dark:bg-dark4" uk-toggle="target: #create-post">
                                            <ion-icon name="camera" class="text-2xl drop-shadow-md"></ion-icon>
                                            <div class="mt-1.5 text-sm font-medium">Post</div>
                                        </div>
                                    </li>
                                    <li class="w-28 cursor-pointer">
                                        <div class="p-3 px-4 rounded-lg bg-pink-100/60 text-pink-600 dark:text-white dark:bg-dark4" uk-toggle="target: #create-Alert">
                                            <ion-icon name="location" class="text-2xl drop-shadow-md"></ion-icon>
                                            <div class="mt-1.5 text-sm font-medium">Alerte</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- slide nav icons -->
                            <div class="dark:hidden">
                                <a class="absolute -translate-y-1/2 top-1/2 -left-4 flex items-center w-8 h-full px-1.5 justify-start bg-gradient-to-r from-white via-white dark:from-slate-600 dark:via-slate-500 dark:from-transparent dark:via-transparent" href="#" uk-slider-item="previous">
                                    <ion-icon name="chevron-back" class="text-xl dark:text-white"></ion-icon>
                                </a>
                                <a class="absolute -translate-y-1/2 top-1/2 -right-4 flex items-center w-8 h-full px-1.5 justify-end bg-gradient-to-l from-white via-white dark:from-transparent dark:via-transparent" href="#" uk-slider-item="next">
                                    <ion-icon name="chevron-forward" class="text-xl dark:text-white"></ion-icon>
                                </a>
                            </div>
                            <!-- slide nav -->
                            <div class="justify-center mt-2 -mb-2 hidden dark:flex">
                                <ul class="inline-flex flex-wrap justify-center gap-1 uk-dotnav uk-slider-nav"></ul>
                            </div>
                        </div>
                    </div>

                    <!-- Panier -->
                    @if($cartCount)
                        <a href="{{ route('panier.index') }}" data-position="bottom" data-tooltip="Voir mon panier">
                            <button type="button" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white" uk-tooltip="title: Panier; pos: bottom; offset:6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 512 512" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 max-sm:hidden">
                                    <title>ionicons-v5-d</title>
                                    <circle cx="176" cy="416" r="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                                    <circle cx="400" cy="416" r="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                                    <polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                                    <path d="M160,288H416c8.14,0,15.18-5.69,16.84-13.75L480,112H128" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                                </svg>
                                <ion-icon name="cart-outline" class="sm:hidden text-2xl"></ion-icon>
                                <div class="absolute -right-1 -top-2.5 px-1.5 rounded-full text-xs bg-pink-500 dark:text-white text-white">{{ $cartCount }}</div>
                            </button>
                        </a>
                    @else
                        <a href="{{ route('panier.index') }}" data-position="bottom" data-tooltip="Voir mon panier">
                            <button type="button" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white" uk-tooltip="title: Panier; pos: bottom; offset:6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 512 512" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 max-sm:hidden">
                                    <title>ionicons-v5-d</title>
                                    <circle cx="176" cy="416" r="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                                    <circle cx="400" cy="416" r="16" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                                    <polyline points="48 80 112 80 160 352 416 352" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                                    <path d="M160,288H416c8.14,0,15.18-5.69,16.84-13.75L480,112H128" style="fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"/>
                                </svg>
                                <ion-icon name="cart-outline" class="sm:hidden text-2xl"></ion-icon>
                            </button>
                        </a>
                    @endif
                    <!-- notifications -->
                    <button class="sm:p-2 p-1 rounded-full sm:bg-secondery dark:text-white" type="button" uk-tooltip="title: Notifications; pos: bottom; offset:6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 max-sm:hidden">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.5 4.5V3a1.5 1.5 0 00-3 0v1.5M12 21a2.25 2.25 0 01-2.25-2.25h4.5A2.25 2.25 0 0112 21zm8.25-5.25H3.75a2.25 2.25 0 01-2.25-2.25V11.25a9 9 0 1118 0v2.25a2.25 2.25 0 01-2.25 2.25z" />
                        </svg>
                        <ion-icon name="notifications-outline" class="sm:hidden text-2xl"></ion-icon>
                    </button>
                    <!-- profile -->
                    <a href="{{url('/profile')}}" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white" uk-tooltip="title: Profil; pos: bottom; offset:6">
                        <img class="w-6 h-6 rounded-full @if(!$user->profile) sm:hidden @endif" src="{{ !isset($user->profile) ? '' : asset(Storage::url($user->profile)) }}" alt="">
                        @if(!$user->profile) <ion-icon name="person-outline" class="text-2xl hidden sm:block"></ion-icon> @endif
                    </a>
                </div>
                @else
                <div class="flex items-center gap-2 absolute right-5 top-1/2 -translate-y-1/2 text-black dark:text-white">
                    <a href="{{ route('login') }}" class="text-sm font-medium hover:text-red-600 transition-colors">Se connecter</a>
                    <span class="text-sm text-slate-400 dark:text-slate-600">|</span>
                    <a href="{{ route('register') }}" class="text-sm font-medium hover:text-red-600 transition-colors">S'inscrire</a>
                </div>
                @endauth
                <x-auth-session-status class="mb-4" :status="session('status')" />
            </div>
        </div>
    </div>
</header>
