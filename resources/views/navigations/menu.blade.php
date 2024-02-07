
<div id="site__sidebar" class="fixed top-0 left-0 z-[99] pt-[--m-top] overflow-hidden transition-transform xl:duration-500 max-xl:w-full max-xl:-translate-x-full">

    <!-- sidebar inner -->
    <div class="p-2 max-xl:bg-white shadow-sm 2xl:w-72 sm:w-64 w-[80%] h-[calc(100vh-64px)] relative z-30 max-lg:border-r dark:max-xl:!bg-slate-700 dark:border-slate-700">

        <div class="pr-4" data-simplebar>

            <nav id="side">
            
                <ul>
                    <li class="active">
                        <a href="{{url('/home')}}">
                            <img src={{asset("images/icons/home.png")}} alt="post" class="w-6">
                            <span> Accueil </span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/activity')}}">
                            <img src={{asset("images/icons/message.png")}} alt="activity" class="w-5">
                            <span> Activité </span> 
                        </a>
                    </li> 
                    <li>
                        <a href="{{url('/alert')}}">
                            <img src={{asset("images/icons/video.png")}} alt="alert" class="w-6">
                            <span> Alert </span> 
                        </a>
                    </li>

            </ul>
                
                {{-- <button type="button" class="flex items-center gap-4 py-2 px-4 w-full font-medium text-sm text-black dark:text-white" uk-toggle="target: #show__more; cls: !hidden uk-animation-fade"> 
                    <svg class="bg-gray-200 rounded-full w-6 h-6 dark:bg-slate-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> 
                    <span id="show__more"> Voir plus </span> 
                    <span class="!hidden" id="show__more"> See Less </span> 
                </button> --}}

            </nav>

            @auth
                {{-- <div class="font-medium text-sm text-black border-t pt-3 mt-2 dark:text-white dark:border-slate-800">
                    <div class="px-3 pb-2 text-sm font-medium"> 
                        <div class="text-black dark:text-white">Boutiquiers</div> 
                    </div>
                    <a href="#">
                        <div class="flex items-center gap-2 p-3 px-4 rounded-xl hover:bg-secondery">
                            <img src={{asset("images/avatars/avatar-2.jpg")}} alt="" class="w-6 rounded-full object-cover">
                            <div> Marin Gray</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="flex items-center gap-2 p-3 px-4 rounded-xl hover:bg-secondery">
                            <img src={{asset("images/avatars/avatar-7.jpg")}} alt="" class="w-6 rounded-full object-cover">
                            <div>   Alexa Stella</div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="flex items-center gap-2 p-3 px-4 rounded-xl hover:bg-secondery">
                            <img src={{asset("images/avatars/avatar-3.jpg")}} alt="" class="w-6 rounded-full object-cover">
                            <div> Sarah Ali</div>
                        </div>
                    </a> 
                </div> --}}

                <nav id="side" class="font-medium text-sm text-black border-t pt-3 mt-2 dark:text-white dark:border-slate-800">

                    <ul class="mt-2 -space-y-2" 
                        uk-nav="multiple: true">
            
                        <li>
                            <a href="setting.html"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span> Paramètres </span>                  
                            </a>
                        </li>
                      
                    
                    </ul>

                </nav>
            @endauth
        

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
