<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.foxthemes.net/socialite-v3.0/market.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2023 20:13:35 GMT -->
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
    <link rel="stylesheet" href="assets/css/tailwind.css">
    <link rel="stylesheet" href="assets/css/style.css">  
    
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
 
</head>
<body>
 
    <div id="wrapper">

        <!-- header -->
        <header class="z-[100] h-[--m-top] fixed top-0 left-0 w-full flex items-center bg-white/80 sky-50 backdrop-blur-xl border-b border-slate-200 dark:bg-dark2 dark:border-slate-800">

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
                                <img src="assets/images/logo.png" alt="" class="w-28 md:block hidden dark:!hidden">
                                <img src="assets/images/logo-light.png" alt="" class="dark:md:block hidden">
                                <img src="assets/images/logo-mobile.png" class="hidden max-md:block w-20 dark:!hidden" alt="">
                                <img src="assets/images/logo-mobile-light.png" class="hidden dark:max-md:block w-20" alt="">
                            </a>
                        </div>
                        
                    </div>

                </div>
                <div class="flex-1 relative">

                    <div class="max-w-[1220px] mx-auto flex items-center">
                        
                        <!-- search -->
                        <div id="search--box" class="xl:w-[680px] sm:w-96 sm:relative rounded-xl overflow-hidden z-20 bg-secondery max-md:hidden w-screen left-0 max-sm:fixed max-sm:top-2 dark:!bg-white/5">
                            <ion-icon name="search" class="absolute left-4 top-1/2 -translate-y-1/2"></ion-icon>
                            <input type="text" placeholder="Search Friends, videos .." class="w-full !pl-10 !font-normal !bg-transparent h-12 !text-sm">
                        </div>  
                        <!-- search dropdown-->
                        <div class="hidden uk- open z-10"
                                uk-drop="pos: bottom-center ; animation: uk-animation-slide-bottom-small;mode:click ">
                            
                                <div class="xl:w-[694px] sm:w-96 bg-white dark:bg-dark3 w-screen p-2 rounded-lg shadow-lg -mt-14 pt-14">
                                    <div class="flex justify-between px-2 py-2.5 text-sm font-medium"> 
                                        <div class=" text-black dark:text-white">Recent</div>
                                        <button type="button" class="text-blue-500">Clear</button>
                                    </div>
                                    <nav class="text-sm font-medium text-black dark:text-white">
                                        <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full"> <div>   <div> Jesse Steeve </div>  <div class="text-xs text-blue-500 font-medium mt-0.5">  Friend </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                        <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/avatars/avatar-2.jpg" class="w-9 h-9 rounded-full"> <div>   <div>  Martin Gray </div>  <div class="text-xs text-blue-500 font-medium mt-0.5">  Friend </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                        <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/group/group-2.jpg" class="w-9 h-9 rounded-full"> <div>   <div>  Delicious Foods  </div>  <div class="text-xs text-rose-500 font-medium mt-0.5">  Group </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                        <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/group/group-1.jpg" class="w-9 h-9 rounded-full"> <div>   <div> Delicious Foods  </div>  <div class="text-xs text-yellow-500 font-medium mt-0.5">  Page </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                        <a href="#" class=" relative px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <img src="assets/images/avatars/avatar-6.jpg" class="w-9 h-9 rounded-full"> <div>   <div>  John Welim </div>  <div class="text-xs text-blue-500 font-medium mt-0.5">  Friend </div>   </div> <ion-icon name="close" class="text-base absolute right-3 top-1/2 -translate-y-1/2 "></ion-icon>  </a>  
                                        <a href="#" class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <ion-icon class="text-2xl" name="search-outline"></ion-icon>  Creative ideas about Business  </a>  
                                        <a href="#" class="hidden relative  px-3 py-1.5 flex items-center gap-4 hover:bg-secondery rounded-lg dark:hover:bg-white/10"> <ion-icon class="text-2xl" name="search-outline"></ion-icon>  8 Facts About Writting  </a>  
                                    </nav>
                                    <hr class="-mx-2 mt-2 hidden">
                                    <div class="flex justify-end pr-2 text-sm font-medium text-red-500 hidden"> 
                                        <a href="#" class="flex hover:bg-red-50 dark:hover:bg-slate-700 p-1.5 rounded"> <ion-icon name="trash" class="mr-2 text-lg"></ion-icon> Clear your history</a> 
                                    </div>
                                </div>
                                
                        </div>

                        <!-- header icons -->
                        <div class="flex items-center sm:gap-4 gap-2 absolute right-5 top-1/2 -translate-y-1/2 text-black">
                            <!-- create -->
                            <button type="button" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 max-sm:hidden">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                                  </svg>
                                <ion-icon name="add-circle-outline" class="sm:hidden text-2xl "></ion-icon>
                            </button>
                            <div    class="hidden bg-white p-4 rounded-lg overflow-hidden drop-shadow-xl dark:bg-slate-700 md:w-[324px] w-screen border2"
                                    uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">
                                
                                    <h3 class="font-bold text-md"> Create  </h3>

                                    <!-- slider -->
                                    <div class="mt-4" tabindex="-1" uk-slider="finite:true;sets: true">

                                        <div class="uk-slider-container pb-1">
                                        
                                            <ul class="uk-slider-items grid-small" uk-scrollspy="target: > li; cls: uk-animation-scale-up , uk-animation-slide-right-small; delay: 20 ;repeat: true">
                                                <li class="w-28" uk-scrollspy-class="uk-animation-fade">
                                                    <div class="p-3 px-4 rounded-lg bg-teal-100/60 text-teal-600 dark:text-white dark:bg-dark4">
                                                        <ion-icon name="book" class="text-2xl drop-shadow-md"></ion-icon>
                                                        <div class="mt-1.5 text-sm font-medium"> Story </div>
                                                    </div>
                                                </li>   
                                                <li class="w-28">
                                                    <div class="p-3 px-4 rounded-lg bg-sky-100/60 text-sky-600 dark:text-white dark:bg-dark4">
                                                        <ion-icon name="camera" class="text-2xl drop-shadow-md"></ion-icon>
                                                        <div class="mt-1.5 text-sm font-medium"> Post </div>
                                                    </div>
                                                </li> 
                                                <li class="w-28">
                                                    <div class="p-3 px-4 rounded-lg bg-purple-100/60 text-purple-600 dark:text-white dark:bg-dark4">
                                                        <ion-icon name="videocam" class="text-2xl drop-shadow-md"></ion-icon>
                                                        <div class="mt-1.5 text-sm font-medium"> Reel </div>
                                                    </div>
                                                </li> 
                                                <li class="w-28">
                                                    <div class="p-3 px-4 rounded-lg bg-pink-100/60 text-pink-600 dark:text-white dark:bg-dark4">
                                                        <ion-icon name="location" class="text-2xl drop-shadow-md"></ion-icon>
                                                        <div class="mt-1.5 text-sm font-medium"> location </div>
                                                    </div>
                                                </li> 
                                                <li class="w-28">
                                                    <div class="p-3 px-4 rounded-lg bg-sky-100/70 text-sky-600 dark:text-white dark:bg-dark4">
                                                        <ion-icon name="happy" class="text-2xl  drop-shadow-md"></ion-icon>
                                                        <div class="mt-1.5 text-sm font-medium"> Status </div>
                                                    </div> 
                                                </li> 
                                            </ul>
                                    
                                        </div>
                                    
                                        <!-- slide nav icons -->
                                        <div class="dark:hidden">
                                            <a class="absolute -translate-y-1/2 top-1/2 -left-4 flex items-center w-8 h-full px-1.5 justify-start bg-gradient-to-r from-white via-white dark:from-slate-600 dark:via-slate-500 dark:from-transparent dark:via-transparent" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-xl dark:text-white"></ion-icon> </a>
                                            <a class="absolute -translate-y-1/2 top-1/2 -right-4 flex items-center w-8 h-full px-1.5 justify-end bg-gradient-to-l from-white via-white dark:from-transparent dark:via-transparent" href="#" uk-slider-item="next">  <ion-icon name="chevron-forward" class="text-xl dark:text-white"></ion-icon> </a>
                                        </div>
                

                                        <!-- slide nav -->
                                        <div class="justify-center mt-2 -mb-2 hidden dark:flex">
                                            <ul class="inline-flex flex-wrap justify-center gap-1 uk-dotnav uk-slider-nav"> </ul>
                                        </div>

                                    </div>
    
                                    <!-- list -->
                                    <ul class="-m-1 mt-4 pb-1 text-xs text-gray-500 dark:text-white" uk-scrollspy="target: > li; cls: uk-animation-scale-up , uk-animation-slide-bottom-small ;repeat: true">
                                        <li class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                            <img src="assets/images/icons/group.png" alt="" class="w-7">
                                            <div class="flex-1">
                                                <a href="timeline.html"><h4 class="font-medium text-sm text-black dark:text-white"> Groups </h4></a>
                                                <div class="mt-1 text-xs text-gray-500 dark:text-white"> Meet people with similar interests. </div>
                                            </div>
                                        </li>
                                        <li class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                            <img src="assets/images/icons/page.png" alt="" class="w-7">
                                            <div class="flex-1">
                                                <a href="timeline.html"><h4 class="font-medium text-sm text-black dark:text-white"> Pages </h4></a>
                                                <div class="mt-1"> Find and connect with businesses.
                                            </div>
                                        </li>
                                        <li class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                            <img src="assets/images/icons/event.png" class="w-7">
                                            <div class="flex-1">
                                                <a href="timeline.html"><h4 class="font-medium text-sm text-black dark:text-white"> Event </h4></a>
                                                <div class="mt-1">Discover fun activities near you .</div>
                                            </div>
                                        </li>
                                        <li class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                            <img src="assets/images/icons/market.png" class="w-8 -ml-1">
                                            <div class="flex-1">
                                                <a href="timeline.html"><h4 class="font-medium text-sm text-black dark:text-white"> Event </h4></a>
                                                <div class="mt-1">Find local buyers and sellers .</div>
                                            </div>
                                        </li>
                                        <li class="flex items-center gap-4 hover:bg-secondery rounded-md p-1.5 cursor-pointer dark:hover:bg-white/10">
                                            <img src="assets/images/icons/game.png" alt="" class="w-7">
                                            <div class="flex-1">
                                                <a href="timeline.html"><h4 class="font-medium text-sm text-black dark:text-white"> Games </h4></a>
                                                <div class="mt-1"> play game with friends have fun. </div>
                                            </div>
                                        </li>
                                    </ul>


                            </div>
    
                            <!-- notification -->
                            <button type="button" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white" uk-tooltip="title: Notification; pos: bottom; offset:6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 max-sm:hidden">
                                    <path d="M5.85 3.5a.75.75 0 00-1.117-1 9.719 9.719 0 00-2.348 4.876.75.75 0 001.479.248A8.219 8.219 0 015.85 3.5zM19.267 2.5a.75.75 0 10-1.118 1 8.22 8.22 0 011.987 4.124.75.75 0 001.48-.248A9.72 9.72 0 0019.266 2.5z" />
                                    <path fill-rule="evenodd" d="M12 2.25A6.75 6.75 0 005.25 9v.75a8.217 8.217 0 01-2.119 5.52.75.75 0 00.298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 107.48 0 24.583 24.583 0 004.83-1.244.75.75 0 00.298-1.205 8.217 8.217 0 01-2.118-5.52V9A6.75 6.75 0 0012 2.25zM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 004.496 0l.002.1a2.25 2.25 0 11-4.5 0z" clip-rule="evenodd" />
                                </svg>
                                <div class="absolute top-0 right-0 -m-1 bg-red-600 text-white text-xs px-1 rounded-full">6</div>
                                <ion-icon name="notifications-outline" class="sm:hidden text-2xl"></ion-icon>
                            </button> 
                            <div  class="hidden bg-white pr-1.5 rounded-lg drop-shadow-xl dark:bg-slate-700 md:w-[365px] w-screen border2"
                                uk-drop="offset:6;pos: bottom-right; mode: click; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">
                            
                                <!-- heading -->
                                <div class="flex items-center justify-between gap-2 p-4 pb-2">
                                    <h3 class="font-bold text-xl"> Notifications </h3>

                                    <div class="flex gap-2.5"> 
                                        <button type="button" class="p-1 flex rounded-full focus:bg-secondery dark:text-white"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
                                        <div  class="w-[280px] group" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click; offset:5"> 
                                            <nav class="text-sm"> 
                                                <a href="#"> <ion-icon class="text-xl shrink-0" name="checkmark-circle-outline"></ion-icon>  Mark all as read</a>  
                                                <a href="#"> <ion-icon class="text-xl shrink-0" name="settings-outline"></ion-icon> Notification setting</a>  
                                                <a href="#"> <ion-icon class="text-xl shrink-0" name="notifications-off-outline"></ion-icon> Mute Notification </a>  
                                            </nav>
                                        </div> 
                                    </div>
                                </div>
    
                                <div class="text-sm h-[400px] w-full overflow-y-auto pr-2">
                                    
                                    <!-- contents list -->
                                    <div class="pl-2 p-1 text-sm font-normal dark:text-white">
                                        
                                        <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10 bg-teal-500/5">
                                            <div class="relative w-12 h-12 shrink-0"> <img src="assets/images/avatars/avatar-3.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Alexa Gray</b> started following you. Welcome him to your profile. 👋 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 4 hours ago </div>
                                                <div class="w-2.5 h-2.5 bg-teal-600 rounded-full absolute right-3 top-5"></div>
                                            </div>
                                        </a>
                                        <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img src="assets/images/avatars/avatar-7.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1">Jesse Steeve</b> mentioned you in a story. Check it out and reply. 📣 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div> 
                                            </div>
                                        </a>
                                        <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img src="assets/images/avatars/avatar-6.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Alexa stella</b> commented on your photo  “Wow, stunning shot!” 💬 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div> 
                                            </div>
                                        </a>
                                        <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img src="assets/images/avatars/avatar-2.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 "> 
                                                <p> <b class="font-bold mr-1"> John Michael</b> who you might know,  is on socialite.</p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 2 hours ago </div>
                                            </div>
                                            <button type="button" class="button text-white bg-primary">fallow</button>
                                        </a>
                                        <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10 bg-teal-500/5">
                                            <div class="relative w-12 h-12 shrink-0"> <img src="assets/images/avatars/avatar-3.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Sarah Gray</b> sent you a message. He wants to chat with you. 💖 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 4 hours ago </div>
                                                <div class="w-2.5 h-2.5 bg-teal-600 rounded-full absolute right-3 top-5"></div>
                                            </div>
                                        </a>
                                        <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img src="assets/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Jesse Steeve</b> sarah tagged you <br> in a photo of your birthday party. 📸 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div>
                                            </div> 
                                        </a>
                                        <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img src="assets/images/avatars/avatar-2.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Lewis Lewis</b> mentioned you in a story. Check it out and reply. 📣 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div> 
                                            </div>
                                        </a> 
                                        <a href="#" class="relative flex items-center gap-3 p-2 duration-200 rounded-xl pr-10 hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-12 h-12 shrink-0"> <img src="assets/images/avatars/avatar-7.jpg" alt="" class="object-cover w-full h-full rounded-full"></div>
                                            <div class="flex-1 ">
                                                <p> <b class="font-bold mr-1"> Martin Gray</b> liked your photo of the Eiffel Tower. 😍 </p>
                                                <div class="text-xs text-gray-500 mt-1.5 dark:text-white/80"> 8 hours ago </div> 
                                            </div>
                                        </a>
                                        
                                    </div>

                                </div> 
    

                                <!-- footer -->
                                <a href="#">
                                    <div class="text-center py-4 border-t border-slate-100 text-sm font-medium text-blue-600 dark:text-white dark:border-gray-600">  View Notifications </div>
                                </a>
        
                                <div class="w-3 h-3 absolute -top-1.5 right-3 bg-white border-l border-t rotate-45 max-md:hidden dark:bg-dark3 dark:border-transparent"></div>
                            </div>

                            <!-- messages -->
                            <button type="button" class="sm:p-2 p-1 rounded-full relative sm:bg-secondery dark:text-white" uk-tooltip="title: Messages; pos: bottom; offset:6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 max-sm:hidden">
                                    <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd"></path>
                                </svg>
                                <ion-icon name="chatbox-ellipses-outline" class="sm:hidden text-2xl"></ion-icon>
                            </button>
                            <div  class="hidden bg-white pr-1.5 rounded-lg drop-shadow-xl dark:bg-slate-700 md:w-[360px] w-screen border2"
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
                                    <input type="text" class="w-full !pl-10 !rounded-lg dark:!bg-white/10" placeholder="Search">
                                    <ion-icon name="search-outline" class="dark:text-white absolute left-7 -translate-y-1/2 top-1/2"></ion-icon>
                                </div>
                                
                                <div class="h-80 overflow-y-auto pr-2">
                                    
                                    <div class="p-2 pt-0 pr-1 dark:text-white/80">

                                        <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0"> 
                                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Jesse Steeve</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 09:40AM </div>
                                                    <div class="w-2.5 h-2.5 bg-blue-600 rounded-full dark:bg-slate-700"></div>
                                                </div>
                                                <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Love your photos 😍</div>
                                            </div>
                                        </a>  
                                        <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0"> 
                                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Martin Gray</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 02:40AM </div>
                                                </div>
                                                <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Product photographer wanted? 📷</div>
                                            </div>
                                        </a>  
                                        <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0"> 
                                                <img src="assets/images/avatars/avatar-5.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Jesse Steeve</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 2 day </div>
                                                </div>
                                                <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Want to buy landscape photo? 🌄</div>
                                            </div>
                                        </a>  
                                        <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0"> 
                                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Monroe Parker</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 4 week </div>
                                                    <div class="w-2.5 h-2.5 bg-blue-600 rounded-full dark:bg-slate-700"></div>
                                                </div>
                                                <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">I’m glad you like it.😊</div>
                                            </div>
                                        </a>
                                        <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0"> 
                                                <img src="assets/images/avatars/avatar-7.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Alex Dolve</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 2 month </div>
                                                </div>
                                                <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Photo editor needed. Fix photos? 🛠️</div>
                                            </div>
                                        </a>
                                        <a href="#" class="relative flex items-center gap-4 p-2 py-3 duration-200 rounded-lg hover:bg-secondery dark:hover:bg-white/10">
                                            <div class="relative w-10 h-10 shrink-0"> 
                                                <img src="assets/images/avatars/avatar-4.jpg" alt="" class="object-cover w-full h-full rounded-full">
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center gap-2 mb-1">
                                                    <div class="mr-auto text-sm text-black dark:text-white font-medium">Jesse Steeve</div>
                                                    <div class="text-xs text-gray-500 dark:text-white/80"> 09:40AM </div>
                                                </div>
                                                <div class="font-normal overflow-hidden text-ellipsis text-xs whitespace-nowrap">Love your photos 😍</div>
                                            </div>
                                        </a>

                                    </div>

                                </div> 
    

                                <!-- footer -->
                                <a href="#">
                                    <div class="text-center py-4 border-t border-slate-100 text-sm font-medium text-blue-600 dark:text-white dark:border-gray-600">   See all Messages  </div>
                                </a>
        
                                <div class="w-3 h-3 absolute -top-1.5 right-3 bg-white border-l border-t rotate-45 max-md:hidden dark:bg-dark3 dark:border-transparent"></div>
                            </div>
        
                            <!-- profile -->
                            <div  class="rounded-full relative bg-secondery cursor-pointer shrink-0">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="sm:w-9 sm:h-9 w-7 h-7 rounded-full shadow shrink-0"> 
                            </div>
                            <div  class="hidden bg-white rounded-lg drop-shadow-xl dark:bg-slate-700 w-64 border2"
                                uk-drop="offset:6;pos: bottom-right;animate-out: true; animation: uk-animation-scale-up uk-transform-origin-top-right ">
                                
                                <a href="timeline.html">
                                    <div class="p-4 py-5 flex items-center gap-4">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-10 h-10 rounded-full shadow">
                                        <div class="flex-1">
                                            <h4 class="text-sm font-medium text-black">Stell johnson</h4>
                                            <div class="text-sm mt-1 text-blue-600 font-light dark:text-white/70">@mohnson</div>
                                        </div>
                                    </div>
                                </a>

                                <hr class="dark:border-gray-600/60">

                                <nav class="p-2 text-sm text-black font-normal dark:text-white">
                                    <a href="upgrade.html">
                                        <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10 text-blue-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                            </svg>
                                            Upgrade To Premium 
                                        </div>
                                    </a>  
                                    <a href="setting.html">
                                        <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                            </svg>
                                            My Billing 
                                        </div>
                                    </a>
                                    <a href="setting.html">
                                        <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                            </svg>
                                            Advatacing
                                        </div>
                                    </a>
                                    <a href="setting.html">
                                        <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            My Account
                                        </div>
                                    </a>
                                    <button type="button" class="w-full">
                                        <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                                            </svg>
                                            Night mode
                                            <span class="bg-slate-200/40 ml-auto p-0.5 rounded-full w-9 dark:hover:bg-white/20">
                                                <span class="bg-white block h-4 relative rounded-full shadow-md w-2 w-4 dark:bg-blue-600"></span>
                                            </span>
                                        </div>
                                    </button>   
                                    <hr class="-mx-2 my-2 dark:border-gray-600/60">
                                    <a href="form-login.html">
                                        <div class="flex items-center gap-2.5 hover:bg-secondery p-2 px-2.5 rounded-md dark:hover:bg-white/10"> 
                                            <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                            </svg>
                                            Log Out 
                                        </div>
                                    </a>
    
                                </nav>

                            </div> 

                            <div class="flex items-center gap-2 hidden">
        
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-9 h-9 rounded-full shadow">
        
                                <div class="w-20 font-semibold text-gray-600"> Hamse </div>
        
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg> 
        
                            </div> 
        
                        </div>

                    </div> 

                </div>

            </div>

        </header>
    
        <!-- sidebar -->
        <div id="site__sidebar" class="fixed top-0 left-0 z-[99] pt-[--m-top] overflow-hidden transition-transform xl:duration-500 max-xl:w-full max-xl:-translate-x-full">

            <!-- sidebar inner -->
            <div class="p-2 max-xl:bg-white shadow-sm 2xl:w-72 sm:w-64 w-[80%] h-[calc(100vh-64px)] relative z-30 max-lg:border-r dark:max-xl:!bg-slate-700 dark:border-slate-700">
        
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
                                    <span> Fundraiser  </span> 
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
                        
                        <button type="button" class="flex items-center gap-4 py-2 px-4 w-full font-medium text-sm text-black dark:text-white" uk-toggle="target: #show__more; cls: !hidden uk-animation-fade"> 
                            <svg class="bg-gray-200 rounded-full w-6 h-6 dark:bg-slate-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> 
                            <span id="show__more"> See More </span> 
                            <span class="!hidden" id="show__more"> See Less </span> 
                        </button>
        
                    </nav>
        
                    <div class="font-medium text-sm text-black border-t pt-3 mt-2 dark:text-white dark:border-slate-800">
                        <div class="px-3 pb-2 text-sm font-medium"> 
                            <div class="text-black dark:text-white">Shortcut</div> 
                        </div>
                        <a href="#">
                            <div class="flex items-center gap-2 p-3 px-4 rounded-xl hover:bg-secondery">
                                <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 rounded-full object-cover">
                                <div> Marin Gray</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="flex items-center gap-2 p-3 px-4 rounded-xl hover:bg-secondery">
                                <img src="assets/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full object-cover">
                                <div>   Alexa Stella</div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="flex items-center gap-2 p-3 px-4 rounded-xl hover:bg-secondery">
                                <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full object-cover">
                                <div> Sarah Ali</div>
                            </div>
                        </a> 
                    </div>
        
                    <nav id="side" class="font-medium text-sm text-black border-t pt-3 mt-2 dark:text-white dark:border-slate-800">
                        <div class="px-3 pb-2 text-sm font-medium"> 
                            <div class="text-black dark:text-white">Pages</div> 
                        </div>
        
                        <ul class="mt-2 -space-y-2" 
                            uk-nav="multiple: true">
                
                            <li>
                                <a href="setting.html"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span> Setting </span>                  
                                </a>
                            </li>
                            <li>
                                <a href="upgrade.html"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                    </svg>
                                    <span> Upgrade </span>                  
                                </a>
                            </li>
                            <li>   
                                <a href="form-login.html"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                    </svg>
                                    <span>   Authentication   </span>                  
                                </a>
                            </li>
                            <li class="uk-parent">
                                <a href="#" class="group"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                    </svg>
                                    <span>  Development   </span>   
                                    <ion-icon name="chevron-down" class="text-base ml-auto duration-200 group-aria-expanded:rotate-180"></ion-icon>              
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
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

                <div class="flex-1">
                    
                    <div class="lg:max-w-[680px] w-full">

                        <div class="page-heading">
                            
                            <h1 class="page-title test"> Products </h1>
            
                            <nav class="nav__underline">
            
                                <ul class="group" uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                               
                                    <li> <a href="#"> Suggestions  </a> </li>
                                    <li> <a href="#"> Newest </a> </li>
                                    <li> <a href="#"> My products </a> </li>
        
                                </ul> 
            
                            </nav>
            
                            <button type="button" class="absolute right-3 bottom-5"> <div class="w-7 h-7 bg-blue-600 rounded-full shadow grid place-items-center">  <ion-icon name="add" class="text-xl text-white"></ion-icon> </div> </button>
                            
                        </div>
        
                        <!-- feature one slider -->
                        <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">
        
                            <div class="uk-slider-container pb-1">
                               
                                <ul class="uk-slider-items w-[calc(100%+14px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
        
                                    <li class="pr-3 md:w-1/3 w-1/2" uk-scrollspy-class="uk-animation-fade">
                                        <div class="card">
                                            <a href="product-view-1.html">
                                                <div class="card-media sm:aspect-[2/1.7] h-36">
                                                    <img src="assets/images/product/product-1.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body relative">
                                                <a href="#"><span class="text-teal-600 font-semibold text-xs"> Herbel</span></a>
                                                <a href="product-view-1.html"><p class="card-text block text-black mt-0.5"> Chill Lotion </p></a>
                                                <div class="-top-3 absolute bg-blue-100 font-medium px-2  py-0.5 right-2 rounded-full text text-blue-500 text-sm z-20">
                                                    $19
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-1/2">
                                        <div class="card">
                                            <a href="product-view-1.html">
                                                <div class="card-media sm:aspect-[2/1.7] h-36">
                                                    <img src="assets/images/product/product-3.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body relative">
                                                <a href="#"><span class="text-teal-600 font-semibold text-xs"> Electronic </span></a>
                                                <a href="product-view-1.html"><p class="card-text block text-black mt-0.5"> Gaming Mouse </p></a>
                                                <div class="-top-3 absolute bg-blue-100 font-medium px-2  py-0.5 right-2 rounded-full text text-blue-500 text-sm z-20">
                                                    $19
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-1/2">
                                        <div class="card">
                                            <a href="product-view-1.html">
                                                <div class="card-media sm:aspect-[2/1.7] h-36">
                                                    <img src="assets/images/product/product-6.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body relative">
                                                <a href="#"><span class="text-teal-600 font-semibold text-xs"> Fruit </span></a>
                                                <a href="product-view-1.html"><p class="card-text block text-black mt-0.5">  Strawbery Fresh   </p></a>
                                                <div class="-top-3 absolute bg-blue-100 font-medium px-2  py-0.5 right-2 rounded-full text text-blue-500 text-sm z-20">
                                                    $19
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-1/2">
                                        <div class="card">
                                            <a href="product-view-1.html">
                                                <div class="card-media sm:aspect-[2/1.7] h-36">
                                                    <img src="assets/images/product/product-5.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body relative">
                                                <a href="#"><span class="text-teal-600 font-semibold text-xs"> Herbel </span></a>
                                                <a href="product-view-1.html"><p class="card-text block text-black mt-0.5"> Chill Lotion </p></a>
                                                <div class="-top-3 absolute bg-blue-100 font-medium px-2  py-0.5 right-2 rounded-full text text-blue-500 text-sm z-20">
                                                    $19
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                     
        
                                </ul>
                        
                            </div>
                           
                                 
                            <!-- slide nav icons -->
                            <div class="max-md:hidden">
        
                                <a class="nav-prev !bottom-1/2 !top-auto" href="#" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon> </a>
                                <a class="nav-next !bottom-1/2 !top-auto" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></a>
                            
                            </div>

                             
                            <!-- slide nav dots-->
                            <div class="flex justify-center">
                                <ul class="inline-flex flex-wrap justify-center my-5 gap-2 uk-dotnav uk-slider-nav"> </ul>
                            </div>
        
        
                        </div>
         
                        <!-- feature two slider -->
                        <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">
        
                            <div class="sm:my-6 my-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                                <div>
                                    <h2 class="text-xl font-semibold text-black"> Featured </h2>
                                    <p class="font-normal text-sm text-gray-500 leading-6 hidden"> Find a group by browsing top categories. </p>
                                </div>
                                <div class="flex items-center gap-2 [&:has(a.uk-invisible)][&*>a]:bg-red-600">
                                    <a href="#" class="!block [&:has(.uk-invisible)]:opacity-20" uk-slider-item="previous"><ion-icon name="chevron-back-outline"></ion-icon> </a> 
                                    <a href="#" class="!block" uk-slider-item="next"><ion-icon name="chevron-forward-outline"></ion-icon> </a> 
                                    <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
                                </div>
                            </div>
        
                            <div class="uk-slider-container pb-1">
                               
                                <ul class="uk-slider-items w-[calc(100%+14px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
                                    <li class="pr-4 sm:w-1/2 w-full" uk-scrollspy-class="uk-animation-fade">
                                        <div class="card flex gap-1">
                                            <a href="product-view-2.html">
                                               <div class="card-media w-32 max-h-full h-full shrink-0">
                                                    <img src="assets/images/product/product-9.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div> 
                                            </a> 
                                            <div class="card-body flex-1 py-4">
                                                <a href="product-view-2.html"> <h4 class="card-title">  Wood Chair </h4> </a>
                                                <a href="#"> <p class="card-text">  Furniture </p></a>
                                                <div class="text-xl flex items-center justify-between mt-2"> 
                                                    <h4 class="card-title"> 26$ </h4>
                                                    <button type="button" class="button bg-secondery !w-auto rounded-fulld hidden">View</button>
                                                </div>
                                                <div class="flex gap-2">
                                                    <button type="button" class="button bg-primary-soft text-primary dark:text-white flex-1">Chat</button>
                                                    <button type="button" class="button bg-secondery !w-auto"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                      </svg>
                                                       </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-4 sm:w-1/2 w-full">
                                        <div class="card flex gap-1">
                                            <a href="product-view-2.html">
                                               <div class="card-media w-32 max-h-full h-full shrink-0">
                                                    <img src="assets/images/product/product-1.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div> 
                                            </a> 
                                            <div class="card-body flex-1 py-4">
                                                <a href="product-view-2.html"> <h4 class="card-title"> Chill Lotion</h4> </a>
                                                <a href="#"> <p class="card-text"> Herbel </p></a>
                                                <div class="text-xl flex items-center justify-between mt-2"> 
                                                    <h4 class="card-title"> 39$ </h4>
                                                    <button type="button" class="button bg-secondery !w-auto rounded-fulld hidden">View</button>
                                                </div>
                                                <div class="flex gap-2">
                                                    <button type="button" class="button bg-primary-soft text-primary dark:text-white flex-1">Chat</button>
                                                    <button type="button" class="button bg-secondery !w-auto"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                      </svg>
                                                       </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pr-4 sm:w-1/2 w-full">
                                        <div class="card flex gap-1">
                                            <a href="product-view-2.html">
                                               <div class="card-media w-32 max-h-full h-full shrink-0">
                                                    <img src="assets/images/product/product-3.jpg" alt="">
                                                    <div class="card-overly"></div>
                                                </div> 
                                            </a> 
                                            <div class="card-body flex-1 py-4">
                                                <a href="product-view-2.html"> <h4 class="card-title"> Gaming Mouse </h4> </a>
                                                <a href="#"> <p class="card-text">  Electronic </p></a>
                                                <div class="text-xl flex items-center justify-between mt-2"> 
                                                    <h4 class="card-title"> 14$ </h4>
                                                    <button type="button" class="button bg-secondery !w-auto rounded-fulld hidden">View</button>
                                                </div>
                                                <div class="flex gap-2">
                                                    <button type="button" class="button bg-primary-soft text-primary dark:text-white flex-1">Chat</button>
                                                    <button type="button" class="button bg-secondery !w-auto"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                      </svg>
                                                       </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li> 
                                </ul>
                        
                            </div>
                            
                        </div>
        
                        <!-- categories -->
                        <div class="sm:mt-6 mt-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                            <div>
                                <h2 class="text-xl font-semibold text-black"> Categories
                                <p class="font-normal text-sm text-gray-500 leading-6"> Find a group by browsing top categories. </p>
                            </div> 
                        </div>
                        
                        <!-- categories slider-->
                        <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">
        
                            <div class="py-5 uk-slider-container">
                               
                                <ul class="uk-slider-items w-[calc(100%+12px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
        
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 justify-between bg-sky-600 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white whitespace-nowrap"> All Categories </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1 whitespace-nowrap"> 14 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                                              </svg>
                                              
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 item-center justify-between bg-rose-500 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white">  Building  </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1"> 23 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                                              </svg>
                                              
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 item-center justify-between bg-teal-600 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white">  Life style </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1"> 32 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.712 4.33a9.027 9.027 0 011.652 1.306c.51.51.944 1.064 1.306 1.652M16.712 4.33l-3.448 4.138m3.448-4.138a9.014 9.014 0 00-9.424 0M19.67 7.288l-4.138 3.448m4.138-3.448a9.014 9.014 0 010 9.424m-4.138-5.976a3.736 3.736 0 00-.88-1.388 3.737 3.737 0 00-1.388-.88m2.268 2.268a3.765 3.765 0 010 2.528m-2.268-4.796a3.765 3.765 0 00-2.528 0m4.796 4.796c-.181.506-.475.982-.88 1.388a3.736 3.736 0 01-1.388.88m2.268-2.268l4.138 3.448m0 0a9.027 9.027 0 01-1.306 1.652c-.51.51-1.064.944-1.652 1.306m0 0l-3.448-4.138m3.448 4.138a9.014 9.014 0 01-9.424 0m5.976-4.138a3.765 3.765 0 01-2.528 0m0 0a3.736 3.736 0 01-1.388-.88 3.737 3.737 0 01-.88-1.388m2.268 2.268L7.288 19.67m0 0a9.024 9.024 0 01-1.652-1.306 9.027 9.027 0 01-1.306-1.652m0 0l4.138-3.448M4.33 16.712a9.014 9.014 0 010-9.424m4.138 5.976a3.765 3.765 0 010-2.528m0 0c.181-.506.475-.982.88-1.388a3.736 3.736 0 011.388-.88m-2.268 2.268L4.33 7.288m6.406 1.18L7.288 4.33m0 0a9.024 9.024 0 00-1.652 1.306A9.025 9.025 0 004.33 7.288" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 item-center justify-between bg-sky-600 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white">  Electronic </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1"> 14 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 005.304 0l6.401-6.402M6.75 21A3.75 3.75 0 013 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 003.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008z" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li class="pr-3 md:w-1/3 w-auto" uk-scrollspy-class="uk-animation-fade">
                                        <div class="p-4 flex gap-3 item-center justify-between bg-pink-600 rounded-md">
                                            <div>
                                                <h4 class="font-medium !text-white"> Building </h4>
                                                <p  class="font-medium !text-white/80 text-sm mt-1"> 16 product </p>
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white shrink-0">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                                              </svg>
                                              
                                        </div>
                                    </li>
                                </ul>
         
                                <!-- slide nav -->
                                <div class="max-md:hidden">
        
                                    <button type="button" class="absolute -translate-y-1/2 bg-white shadow rounded-full top-1/2 -left-3.5 grid w-8 h-8 place-items-center dark:bg-dark3" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                                    <button type="button" class="absolute -right-2 -translate-y-1/2 bg-white shadow rounded-full top-1/2 grid w-8 h-8 place-items-center dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon> </button>
        
                                </div>
                                
                                <!-- slide nav dots-->
                                <div class="flex justify-center">
                                    <ul class="inline-flex flex-wrap justify-center my-5 gap-2 uk-dotnav uk-slider-nav"> </ul>
                                </div>
        
                            </div>
                            
                        </div>
        
                        <!-- Products title -->
                        <div class="sm:my-6 my-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                            <div>
                                <h2 class="text-xl font-semibold text-black"> Products </h2>
                                <p class="font-normal text-sm text-gray-500 leading-6 hidden"> Find a group by browsing top categories. </p>
                            </div>
                            <a href="#" class="text-blue-500 sm:block hidden text-sm"> See all </a>
                        </div>
        
                        <!-- list products -->
                        <div class="grid sm:grid-cols-3 grid-cols-2 gap-3" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                            
                            <div class="card uk-transition-toggle">
                                <a href="product-view-1.html">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="assets/images/product/product-10.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1"> Herbel </p>
                                        <div class="text-xs line-clamp-1 mt-1"> Herbal Shampoo </div>
                                    </div>
                                    <h4 class="card-title"> 19$ </h4>
                                </div>  
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="product-view-1.html">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="assets/images/product/product-8.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1">   Parfum  </p>
                                        <div class="text-xs line-clamp-1 mt-1">  Parfum Spray </div>
                                    </div>
                                    <h4 class="card-title"> 20$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="product-view-1.html">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="assets/images/product/product-9.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1">  Furniture</p>
                                        <div class="text-xs line-clamp-1 mt-1">   Wood Chair  </div>
                                    </div>
                                    <h4 class="card-title"> 34$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="product-view-1.html">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="assets/images/product/product-3.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1">  Electronic </p>
                                        <div class="text-xs line-clamp-1 mt-1">  Gaming Mouse </div>
                                    </div>
                                    <h4 class="card-title"> 26$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="product-view-1.html">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="assets/images/product/product-1.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1">  Shampo </p>
                                        <div class="text-xs line-clamp-1 mt-1">  Deep Cleanse </div>
                                    </div>
                                    <h4 class="card-title"> 12$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
                            <div class="card uk-transition-toggle">
                                <a href="product-view-1.html">
                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                        <img src="assets/images/product/product-10.jpg" alt="">
                                        <div class="card-overly"></div> 
                                    </div> 
                                </a>
                                <div class="card-body flex justify-between">
                                    <div class="flex-1">
                                        <p class="card-text text-black font-medium line-clamp-1"> Herbel </p>
                                        <div class="text-xs line-clamp-1 mt-1"> Herbal Shampoo </div>
                                    </div>
                                    <h4 class="card-title"> 19$ </h4>
                                </div> 
                                <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                    <div class="flex gap-3 py-4 px-3">
                                        <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                        <button type="button" class="button border bg-white !w-auto">Veiw</button>
                                    </div>
                                </div> 
                            </div>
        
                        </div>
    
                        <div class="flex justify-center my-6">
                            <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                        </div>

                    </div>

     
                </div>
    
                <!-- sidebar -->
                <div class="2xl:w-[380px] lg:w-[330px] w-full">
    
                    <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                          uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                    <!-- peaple you might know -->
                    <div class="box p-5 px-6">
        
                        <div class="flex items-baseline justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> People you may know </h3>
                            <a href="#" class="text-sm text-blue-500">See all</a>
                        </div>

                        <div class="side-list">

                            <div class="side-list-item">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline.html"><h4 class="side-list-title">  John Michael </h4></a>
                                    <div class="side-list-info"> 125k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>

                            <div class="side-list-item">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline.html"><h4 class="side-list-title"> Monroe Parker </h4></a>
                                    <div class="side-list-info"> 320k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>  
                            
                            <div class="side-list-item">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline.html"><h4 class="side-list-title"> James Lewis</h4></a>
                                    <div class="side-list-info"> 125k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>
                            
                            <div class="side-list-item">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-6.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline.html"><h4 class="side-list-title">  Alexa stella </h4></a>
                                    <div class="side-list-info"> 192k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>

                            <div class="side-list-item">
                                <a href="timeline.html">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="side-list-image rounded-full">
                                </a>
                                <div class="flex-1">
                                    <a href="timeline.html"><h4 class="side-list-title"> John Michael </h4></a>
                                    <div class="side-list-info"> 320k Following </div>
                                </div>
                                <button class="button bg-primary-soft text-primary dark:text-white">follow</button>
                            </div>  
                            
                            <button class="bg-secondery button w-full mt-2 hidden">See all</button>

                        </div>

                    </div>

                    <!-- latest marketplace items -->
                    <div class="box p-5 px-6 border1 dark:bg-dark2">
                        
                        <div class="flex justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> Premium Photos </h3>
                            <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
                        </div>

                        <div class="relative capitalize font-medium text-sm text-center mt-4 mb-2" tabindex="-1" uk-slider="autoplay: true;finite: true">

                            <div class="overflow-hidden uk-slider-container">
                            
                                <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">
                                    
                                    <li class="w-1/2 pr-2">
                                       
                                         <a href="#">
                                            <div class="relative overflow-hidden rounded-lg">
                                                <div class="relative w-full h-40">
                                                    <img src="assets/images/product/product-1.jpg" alt="" class="object-cover w-full h-full inset-0">
                                                </div> 
                                                <div class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60"> $12 </div>
                                            </div>
                                            <div class="mt-3 w-full"> Chill Lotion </div>
                                        </a>
                                        
                                    </li>
                                    <li class="w-1/2 pr-2">

                                         <a href="#">
                                            <div class="relative overflow-hidden rounded-lg">
                                                <div class="relative w-full h-40">
                                                    <img src="assets/images/product/product-3.jpg" alt="" class="object-cover w-full h-full inset-0">
                                                </div> 
                                                <div class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60"> $18 </div>
                                            </div>
                                            <div class="mt-3 w-full">  Gaming mouse </div>
                                        </a>

                                    </li>
                                    <li class="w-1/2 pr-2">

                                        <a href="#">
                                            <div class="relative overflow-hidden rounded-lg">
                                                <div class="relative w-full h-40">
                                                    <img src="assets/images/product/product-5.jpg" alt="" class="object-cover w-full h-full inset-0">
                                                </div> 
                                                <div class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60"> $12 </div>
                                            </div>
                                            <div class="mt-3 w-full">  Herbal Shampoo </div>
                                        </a> 

                                    </li>

                                </ul>

                                <button type="button" class="absolute bg-white rounded-full top-16 -left-4 grid w-9 h-9 place-items-center shadow dark:bg-dark3"  uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                                <button type="button" class="absolute -right-4 bg-white rounded-full top-16 grid w-9 h-9 place-items-center shadow dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></button>

                            </div>
                        
                        </div>


                    </div>
                    
                    <!-- online friends -->
                    <div class="box p-5 px-6 border1 dark:bg-dark2">
                        
                        <div class="flex justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> Online Friends </h3>
                            <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
                        </div>

                        <div class="grid grid-cols-6 gap-3 mt-4">

                            <a href="timeline.html"> 
                                <div class="w-10 h-10 relative">
                                    <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>
                            <a href="timeline.html"> 
                                <div class="w-10 h-10 relative">
                                    <img src="assets/images/avatars/avatar-3.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div>
                            </a>
                            <a href="timeline.html">  
                                <div class="w-10 h-10 relative">
                                    <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>
                            <a href="timeline.html"> 
                                <div class="w-10 h-10 relative">
                                    <img src="assets/images/avatars/avatar-5.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>
                            <a href="timeline.html"> 
                                <div class="w-10 h-10 relative">
                                    <img src="assets/images/avatars/avatar-6.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>
                            <a href="timeline.html"> 
                                <div class="w-10 h-10 relative">
                                    <img src="assets/images/avatars/avatar-7.jpg" alt="" class="w-full h-full absolute inset-0 rounded-full">
                                    <div class="absolute bottom-0 right-0 m-0.5 bg-green-500 rounded-full w-2 h-2"></div>
                                </div> 
                            </a>

                        </div>

                        
                    </div>

                    <!-- Pro Members -->
                    <div class="box p-5 px-6 border1 dark:bg-dark2">
                        
                        <div class="flex justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> Pro Members </h3>
                        </div>

                        <div class="relative capitalize font-normal text-sm mt-4 mb-2" tabindex="-1" uk-slider="autoplay: true;finite: true">

                            <div class="overflow-hidden uk-slider-container">
                            
                                <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">
                                    
                                    <li class="w-1/2 pr-2">
                                    <a href="timeline.html"> 
                                        <div class="flex flex-col items-center shadow-sm p-2 rounded-xl border1">
                                            <a href="timeline.html"> 
                                                <div class="relative w-16 h-16 mx-auto mt-2">
                                                    <img src="assets/images/avatars/avatar-5.jpg" alt="" class="h-full object-cover rounded-full shadow w-full">
                                                </div>
                                            </a>
                                            <div class="mt-5 text-center w-full">
                                                <a href="timeline.html"> <h5 class="font-semibold"> Martin Gray</h5> </a>
                                                <div class="text-xs text-gray-400 mt-0.5 font-medium"> 12K Followers</div>
                                                <button type="button" class="bg-secondery block font-semibold mt-4 py-1.5 rounded-lg text-sm w-full border1"> Follow </button>
                                            </div>
                                        </div>
                                    
                                    </li>
                                    <li class="w-1/2 pr-2">
                                        <div class="flex flex-col items-center shadow-sm p-2 rounded-xl border1">
                                            <a href="timeline.html"> 
                                                <div class="relative w-16 h-16 mx-auto mt-2">
                                                    <img src="assets/images/avatars/avatar-4.jpg" alt="" class="h-full object-cover rounded-full shadow w-full">
                                                </div>
                                            </a> 
                                            <div class="mt-5 text-center w-full">
                                                <a href="timeline.html"> <h5 class="font-semibold"> Alexa Park</h5> </a>
                                                <div class="text-xs text-gray-400 mt-0.5 font-medium"> 12K Followers</div>
                                                <button type="button" class="bg-secondery block font-semibold mt-4 py-1.5 rounded-lg text-sm w-full border1"> Follow </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="w-1/2 pr-2">
                                        <div class="flex flex-col items-center shadow-sm p-2 rounded-xl border1">
                                            <a href="timeline.html"> 
                                                <div class="relative w-16 h-16 mx-auto mt-2">
                                                    <img src="assets/images/avatars/avatar-4.jpg" alt="" class="h-full object-cover rounded-full shadow w-full">
                                                </div>
                                            </a> 
                                            <div class="mt-5 text-center w-full">
                                                <a href="timeline.html"> <h5 class="font-semibold"> James Lewis</h5> </a>
                                                <div class="text-xs text-gray-400 mt-0.5 font-medium"> 15K Followers</div>
                                                <button type="button" class="bg-secondery block font-semibold mt-4 py-1.5 rounded-lg text-sm w-full border1"> Follow </button>
                                            </div>
                                        </div>
                                    </li>
                                

                                </ul>

                                <button type="button" class="absolute -translate-y-1/2 bg-slate-100 rounded-full top-1/2 -left-4 grid w-9 h-9 place-items-center dark:bg-dark3"  uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                                <button type="button" class="absolute -right-4 -translate-y-1/2 bg-slate-100 rounded-full top-1/2 grid w-9 h-9 place-items-center dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></button>

                            </div>
                        
                        </div>


                    </div>

                    <!-- Trends -->
                    <div class="box p-5 px-6 border1 dark:bg-dark2">
                        
                        <div class="flex justify-between text-black dark:text-white">
                            <h3 class="font-bold text-base"> Trends for you </h3>
                            <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
                        </div>

                        <div class="space-y-3.5 capitalize text-xs font-normal mt-5 mb-2 text-gray-600 dark:text-white/80">
                            <a href="#">
                                <div class="flex items-center gap-3 p"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-black dark:text-white text-sm">  artificial intelligence </h4>
                                        <div class="mt-0.5"> 1,245,62 post </div>
                                    </div> 
                                </div>
                            </a>
                            <a href="#" class="block">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-black dark:text-white text-sm">  Web developers</h4>
                                        <div class="mt-0.5"> 1,624 post </div>
                                    </div> 
                                </div>
                            </a>
                            <a href="#" class="block">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-black dark:text-white text-sm">  Ui Designers</h4>
                                        <div class="mt-0.5"> 820 post </div>
                                    </div> 
                                </div>
                            </a>
                            <a href="#" class="block">
                                <div class="flex items-center gap-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                                    </svg>
                                    <div class="flex-1">
                                        <h4 class="font-semibold text-black dark:text-white text-sm"> affiliate marketing </h4>
                                        <div class="mt-0.5"> 480 post </div>
                                    </div> 
                                </div>
                            </a>
                        </div>

                        
                    </div>

                </div>
                </div> 
                
            </div>
            
        </main>

    </div>


    

    <!-- create new product button -->
    <button type="button" class="fixed bottom-0 right-0 m-10" uk-toggle="target: #create_product" uk-tooltip="title:Add Product ; offset:10">
        <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-sky-400 to-sky-600 rounded-full">
            <ion-icon name="add-outline" class="text-white text-3xl"></ion-icon>
        </div>
    </button>


    <!-- create product modal -->
    <div class="hidden lg:p-20 max-lg:!items-start" id="create_product" uk-modal="">
        
        <div class="uk-modal-dialog tt relative mx-auto bg-white shadow-xl rounded-lg max-lg:w-full dark:bg-dark2">

            <!-- header card -->
            <div class="border-b px-3 py-3 text-center relative dark:border-slate-700/60">

                <h4 class="text-sm text-black dark:text-white"> Create new post</h4>
 
                <!-- close button -->
                <button type="button" class="button__ico absolute top-0 right-0 m-2.5 uk-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
          
            <div class="lg:w-[600px] w-full">  

                <div class="relative" tabindex="-1" uk-slideshow="finite: true;animation: Fade;  min-height: 460;animation:fade">

                    <ul class="uk-slideshow-items"> 
                        
                        <!-- Intro -->
                        <li class="w-full">
                            
                            <div  class="flex justify-center items-center flex-col gap-4 h-full" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">
                                
                                <div>
                                    <svg class="text-gray-600 dark:text-white" color="#262626" fill="#262626" height="77" role="img" viewBox="0 0 97.6 77.3" width="96"><path d="M16.3 24h.3c2.8-.2 4.9-2.6 4.8-5.4-.2-2.8-2.6-4.9-5.4-4.8s-4.9 2.6-4.8 5.4c.1 2.7 2.4 4.8 5.1 4.8zm-2.4-7.2c.5-.6 1.3-1 2.1-1h.2c1.7 0 3.1 1.4 3.1 3.1 0 1.7-1.4 3.1-3.1 3.1-1.7 0-3.1-1.4-3.1-3.1 0-.8.3-1.5.8-2.1z" fill="currentColor"></path><path d="M84.7 18.4 58 16.9l-.2-3c-.3-5.7-5.2-10.1-11-9.8L12.9 6c-5.7.3-10.1 5.3-9.8 11L5 51v.8c.7 5.2 5.1 9.1 10.3 9.1h.6l21.7-1.2v.6c-.3 5.7 4 10.7 9.8 11l34 2h.6c5.5 0 10.1-4.3 10.4-9.8l2-34c.4-5.8-4-10.7-9.7-11.1zM7.2 10.8C8.7 9.1 10.8 8.1 13 8l34-1.9c4.6-.3 8.6 3.3 8.9 7.9l.2 2.8-5.3-.3c-5.7-.3-10.7 4-11 9.8l-.6 9.5-9.5 10.7c-.2.3-.6.4-1 .5-.4 0-.7-.1-1-.4l-7.8-7c-1.4-1.3-3.5-1.1-4.8.3L7 49 5.2 17c-.2-2.3.6-4.5 2-6.2zm8.7 48c-4.3.2-8.1-2.8-8.8-7.1l9.4-10.5c.2-.3.6-.4 1-.5.4 0 .7.1 1 .4l7.8 7c.7.6 1.6.9 2.5.9.9 0 1.7-.5 2.3-1.1l7.8-8.8-1.1 18.6-21.9 1.1zm76.5-29.5-2 34c-.3 4.6-4.3 8.2-8.9 7.9l-34-2c-4.6-.3-8.2-4.3-7.9-8.9l2-34c.3-4.4 3.9-7.9 8.4-7.9h.5l34 2c4.7.3 8.2 4.3 7.9 8.9z" fill="currentColor"></path><path d="M78.2 41.6 61.3 30.5c-2.1-1.4-4.9-.8-6.2 1.3-.4.7-.7 1.4-.7 2.2l-1.2 20.1c-.1 2.5 1.7 4.6 4.2 4.8h.3c.7 0 1.4-.2 2-.5l18-9c2.2-1.1 3.1-3.8 2-6-.4-.7-.9-1.3-1.5-1.8zm-1.4 6-18 9c-.4.2-.8.3-1.3.3-.4 0-.9-.2-1.2-.4-.7-.5-1.2-1.3-1.1-2.2l1.2-20.1c.1-.9.6-1.7 1.4-2.1.8-.4 1.7-.3 2.5.1L77 43.3c1.2.8 1.5 2.3.7 3.4-.2.4-.5.7-.9.9z" fill="currentColor"></path></svg>
                                </div>
                                <div  uk-scrollspy-class="uk-animation-slide-bottom-small">
                                    <h3 class="text-black font-semibold text-xl dark:text-white"> Sell Premium Photes</h3>
                                </div>
                                <div  uk-scrollspy-class="uk-animation-slide-bottom-small">
                                    <p class="text-sm text-center max-w-sm">You can earn money by selling high-quality photos and share them with your friends who are interested</p>
                                </div>
                                <div uk-scrollspy-class="uk-animation-slide-top-small">
                                    <button type="button" class="bg-primary text-white rounded-lg py-1.5 px-4 text-sm mt-2 dark:bg-slate-700" uk-slideshow-item="next"> Start selling </button>
                                </div>

                            </div>

                        </li>

                        
                        <!-- about -->
                        <li class="w-full">

                            <div>

                                <div class="p-8 space-y-4 font-normal text-sm">
    
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Title </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="text" placeholder="name" class=" w-full">
                                        </div>
                                    </div>
                                    <div class="md:flex items-start gap-16 justify-between">
                                        <label class="md:w-32"> Description </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <textarea class="w-full" rows="4" placeholder="Product Description.."></textarea>
                                        </div>
                                    </div>
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Price </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="number" placeholder="$12" class=" w-full">
                                        </div>
                                    </div>
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Category </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <select class="w-full !border-0 !rounded-md">
                                                <option value="1">Everyone</option>
                                                <option value="2">People I Follow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="md:flex items-center gap-16 justify-between">
                                        <label class="md:w-32"> Tags </label>
                                        <div class="flex-1 max-md:mt-4">
                                            <input type="text" placeholder="Landscape,Arts" class=" w-full">
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>

                        </li>

                        <!-- add image -->
                        <li class="w-full">

                            <div class="p-8" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">

                                <div class="relative w-full h-[395px] border1 rounded-lg overflow-hidden bg-[url('../images/ad_pattern.html')] bg-repeat">
                                
                                    <label for="createProductUrl" class="flex flex-col justify-center items-center absolute -translate-x-1/2 left-1/2 bottom-0 z-10 w-full pb-6 pt-10 cursor-pointer bg-gradient-to-t from-gray-700/60">
                                        <input id="createProductUrl" type="file" class="hidden" />
                                        <ion-icon name="image" class="text-3xl text-teal-600"></ion-icon>
                                        <span class="text-white mt-2">Upload image </span>
                                    </label>
            
                                    <img id="createProductImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;" class="w-full h-full absolute object-cover">
            
                                </div> 

                            </div>

                        </li> 

                        <!-- settings -->
                        <li class="w-full !relative">
                           
                            <div  class="lg:!h-[460px] overflow-y-auto">

                                <div uk-scrollspy="target: > * >; cls: uk-animation-slide-bottom-small; delay: 100">
                
                                    <div class="p-6">
  

                                        <ul class="divide-y divide-gray-100 font-normal text-sm dark:divide-slate-700/60" uk-nav="multiple: true">
                                            <li class="uk-parent uk-open py-3">

                                                <a href="#" class="flex items-center justify-between py-2 px-3.5 group" aria-expanded="true"> 
                                                    <h4 class="font-semibold text-base text-black dark:text-white">Settings</h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-aria-expanded:rotate-180 duration-200">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                </a>

                                                <ul class="m-4 space-y-3">
                                                    <li>
                                                        <div class="md:flex items-center gap-16 justify-between">
                                                            <label class="md:w-48"> Who can Buy ? </label>
                                                            <div class="flex-1 max-md:mt-4">
                                                                <select class="w-full !border-0 !rounded-md">
                                                                    <option value="1">Everyone</option>
                                                                    <option value="2">People I Follow</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="md:flex items-center gap-16 justify-between">
                                                            <label class="md:w-48"> Who can Comment ? </label>
                                                            <div class="flex-1 max-md:mt-4">
                                                                <select class="w-full !border-0 !rounded-md">
                                                                    <option value="1">Everyone</option>
                                                                    <option value="2">People I Follow</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </li>
                                            
                                            <li class="uk-parent uk-open py-3"> 

                                                <a href="#" class="flex items-center justify-between py-2 px-3.5 group " aria-expanded="true"> 
                                                    <h4 class="font-semibold text-base text-black dark:text-white"> Advanced settings</h4>
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-aria-expanded:rotate-180 duration-200">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                                    </svg>
                                                </a>

                                                <ul class="divide-y bg-secondery rounded-md dark:divide-slate-700/60"> 
                                                    <li>
                                                        <div class="p-4 py-2">
                                                            <label class="switch flex justify-between items-center gap-4 cursor-pointer min-h-[30px]">
                                                                <div>
                                                                    <h4> Generate license keys</h4>
                                                                </div>
                                                                <input type="checkbox" checked><span class="switch-button !relative shrink-0"></span> 
                                                            </label> 
                                                        </div> 
                                                    </li>
                                                    <li>
                                                        <div class="p-4 py-2">
                                                            <label class="switch flex justify-between items-center gap-4 cursor-pointer min-h-[30px]">
                                                                <div>
                                                                    <h4> Redirect customers after purchase?</h4>
                                                                </div>
                                                                <input type="checkbox"><span class="switch-button !relative shrink-0"></span> 
                                                            </label> 
                                                        </div> 
                                                    </li>
                                                    <li>
                                                        <div class="p-4 py-2">
                                                            <label class="switch flex justify-between items-center gap-4 cursor-pointer min-h-[30px]">
                                                                <div>
                                                                    <h4> Turn off commenting </h4>
                                                                </div>
                                                                <input type="checkbox" checked><span class="switch-button !relative shrink-0"></span> 
                                                            </label> 
                                                        </div>  
                                                    </li>
                                                </ul>
                                                
                                            </li>
                                            
                                        </ul>
     
                                        <div class="flex justify-center p-6 pt-0 hidden">
                                            <button type="button" class="button bg-blue-600 text-white px-10"> Share </button> 
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>

                        </li>
                             
                        <!-- final steop -->
                        <li class="w-full">
                            
                            <div  class="flex justify-center items-center flex-col gap-6 h-full" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">

                                <div class="text-center">
                                    <ion-icon name="sparkles-sharp" class="text-5xl mb-6 text-blue-600 opacity-60 rotate-12"></ion-icon>
                                    <h3 class="text-black font-semibold text-xl dark:text-white"> Almost Done </h3>
                                </div>
                                
                                <div class="font-medium text-sm">
                                    <div>
                                        <label class="flex justify-center max-w-sm mx-auto text-center">
                                          <input class="rounded mt-1" type="checkbox" checked name="checkbox1" value="3" />
                                          <span class="ml-3"> I agree this product is mine and i take resposibilty of this product for selling </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="flex justify-center p-6 pt-0">
                                    <button type="button" class="button bg-blue-600 text-white px-10"> Share </button> 
                                </div>

                            </div>

                        </li> 


                    </ul>

                    <div class="flex  justify-center py-1.5 border-t relative dark:border-slate-700/60">

                        <button type="button" uk-slideshow-item="previous" class="bg-secondery font-semibold py-1.5 px-3.5 rounded-full text-sm absolute left-4 bottom-3 leading-6 uk-animation-slide-left-small">Previews</button>

                        <ul class="inline-flex flex-wrap justify-center my-5 uk-dotnav uk-slideshow-nav gap-2.5"></ul>

                        <button type="button" uk-slideshow-item="next" class="bg-secondery font-semibold py-1.5 px-3.5 rounded-full text-sm absolute right-4 bottom-3 leading-6 uk-animation-slide-right-small">Next</button>

                    </div> 

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

<!-- Mirrored from demo.foxthemes.net/socialite-v3.0/market.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Dec 2023 20:13:37 GMT -->
</html>