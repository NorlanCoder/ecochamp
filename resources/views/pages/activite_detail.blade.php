@extends("layouts.default")
@section("index")
 
    <div id="wrapper">

 
        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="max-w-[1065px] mx-auto">

                <!-- cover  -->
                <div class="bg-white shadow lg:rounded-b-2xl lg:-mt-10 dark:bg-dark2">
    
                    <!-- cover -->
                    <div class="relative overflow-hidden lg:h-72 h-36 w-full">

                        @if(empty($activite->couverture))
                            <img src={{asset("images/group/group-cover-4.jpg")}} alt="" class="h-full w-full object-cover inset-0"> 
                        @else
                            <img src={{asset(Storage::url($activite->couverture))}} alt="" class="h-full w-full object-cover inset-0"> 
                        @endif
    
                        <!-- overly -->
                        <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from -black/60 pt-10 z-10"></div>
    
                        <div class="absolute bottom-0 right-0 m-4 z-20">
                            <div class="flex items-center gap-3">
                                {{-- <button class="button bg-white/20 text-white flex items-center gap-2 backdrop-blur-small">Crop</button>
                                <button class="button bg-black/10 text-white flex items-center gap-2 backdrop-blur-small">Edit</button> --}}
                            </div>
                        </div>
    
                    </div>
    
                    <div class="lg:px-10 md:p-5 p-3">
    
                        <div class="flex flex-col justify-center md:-mt-20 -mt-12">
    
                            <div class="md:w-20 md:h-20 w-12 h-12 overflow-hidden bg-white shadow-md rounded-md z-10 mb-5">
                                <div class="w-full md:h-5 bg-rose-500 h-3"></div>
                                <div class="grid place-items-center text-black font-semibold md:text-3xl text-lg h-full md:pb-5 pb-3">
                                    {{$jour}}
                                </div>
                            </div>
                           
                            <div class="flex lg:items-center justify-between max-lg:flex-col max-lg:gap-2">
    
                                <div class="flex-1"> 
                                    <p class="text-sm font-semibold text-rose-600 mb-1.5"> {{date('j F Y H:i', strtotime($activite->debut))}} </p>
                                    <h3 class="md:text-2xl text-base font-bold text-black dark:text-white"> {{$activite->nom}} </h3>
                                    <p  class="font-normal text-gray-500 mt-2 flex gap-2 dark:text-white/80">
                                        <span> 
                                            Je participe en tant que : 
                                        </span>
                                        <ul class="list-group list-group-horizontal-sm" id="text_devenir">
                                            @foreach ($est as $item)
                                                @if ($item != "")
                                                    {{-- <div class="p-2 inline-flex rounded-full mb-2 bg-primary text-white self-center">  --}}
                                                        <li class="list-group-item p-2 inline-flex rounded-full mb-2 bg-primary text-white self-center" style="margin-right: 20px;"><span> {{$item}} </span></li>
                                                    {{-- </div> --}}
                                                @endif
                                            @endforeach
                                        </ul>
                                        <div uk-toggle="target: #create-devenir">
                                            <button type="button" class="button bg-primary text-white" >
                                                <span> Devenir </span>
                                            </button>
                                        </div>
                                    </p>
                                </div>
    
                                <div>
                                    <div  uk-countdown="date: {{$activite->debut}}"  
                                        class="flex gap-3 text-2xl font-semibold text-primary dark:text-white max-lg:justify-center">
    
                                        <div class="bg-primary-soft/40 flex flex-col items-center justify-center rounded-lg w-16 h-16 lg:border-4 border-white md:shadow dark:border-slate-700">
                                            <span class="uk-countdown-days"></span> 
                                            <span class="inline-block text-xs">Jours</span>
                                        </div>
                                        <div class="bg-primary-soft/40 flex flex-col items-center justify-center rounded-lg w-16 h-16 lg:border-4 border-white md:shadow dark:border-slate-700">
                                            <div class="uk-countdown-hours"></div> 
                                            <span class="inline-block text-xs">Heurs</span>
                                        </div>
                                        <div class="bg-primary-soft/40 flex flex-col items-center justify-center rounded-lg w-16 h-16 lg:border-4 border-white md:shadow dark:border-slate-700">
                                            <div class="uk-countdown-minutes"></div> 
                                            <span class="inline-block text-xs">minut </span>
                                        </div>
                                        <div class="bg-primary-soft/40 flex flex-col items-center justify-center rounded-lg w-16 h-16 lg:border-4 border-white md:shadow dark:border-slate-700">
                                            <div class="uk-countdown-seconds"></div> 
                                            <span class="inline-block text-xs">seconde </span>
                                        </div>
    
                                    </div>
                                </div>
    
                            </div>
    
                        </div>
     
                    </div>
    
                    <div class="flex items-center justify-between px-2 max-md:flex-col">
    
                        <div class="flex items-center gap-2 text-sm py-2 pr-1 lg:order-1">
                            {{-- <button type="button" class="button bg-secondery flex items-center gap-2 py-2 px-3.5 dark:bg-dark3">  
                                <ion-icon name="star-outline" class="text-xl"></ion-icon> 
                                <span class="text-sm"> Go Now </span>
                            </button>
                            <button type="button" class="button bg-secondery flex items-center gap-2 py-2 px-3.5 dark:bg-dark3"> 
                                <ion-icon name="checkmark-circle-outline" class="text-xl"></ion-icon> 
                                <span class="text-sm"> Going </span>
                            </button> --}}
                            {{-- <button type="button" class="rounded-lg bg-secondery flex px-2.5 py-2 dark:bg-dark3"> 
                                <ion-icon name="arrow-redo-outline" class="text-xl">
                            </button> --}}
                            {!! $multipleSharing !!}
    
                            <div> 
                                <button type="button" class="rounded-lg bg-secondery flex px-2.5 py-2 dark:bg-dark3"> 
                                    <ion-icon name="ellipsis-horizontal" class="text-xl">
                                </button>
                                <div  class="w-[240px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click;offset:10"> 
                                    <nav>
                                        {{-- <a href="#"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon> Save </a>  
                                        <a href="#"> <ion-icon class="text-xl" name="flag-outline"></ion-icon>  Add to page </a>  
                                        <a href="#"> <ion-icon class="text-xl" name="calendar-number-outline"></ion-icon> Add to calender </a>   --}}
                                        <a href="#" uk-toggle="target: #share-ecochamp"> <ion-icon class="text-xl" name="share-outline"></ion-icon> Partager le profil </a>  
                                        {{-- <a href="#"> <ion-icon class="text-xl" name="information-circle-outline"></ion-icon>  Report Event</a>   --}}
                                    </nav>
                                </div>
                            </div>
                            
                        </div>
    
                        <nav class="flex gap-0.5 rounded-xl overflow-hidden -mb-px text-gray-500 font-medium text-sm overflow-x-auto dark:text-white/80">
                            <a href="#" class="inline-block py-3 leading-8 px-3.5 border-b-2 border-blue-600 text-blue-600">About </a>
                            <a href="#" class="inline-block py-3 leading-8 px-3.5">Discussion</a> 
                        </nav> 
    
                    </div>
    
    
                </div>
    
                <div class="flex 2xl:gap-12 gap-10 mt-8 max-lg:flex-col" id="js-oversized">
    
                    <div class="flex-1 space-y-4">
        
                        <div class="box p-5 px-6 relative">
                            
                            <h3 class="font-semibold text-lg text-black dark:text-white"> A propos de </h3>
                         
                            <div class="space-y-4 leading-7 tracking-wide mt-4 text-black text-sm dark:text-white"> 
                                <p> {{$activite->description}}</p>
                            </div> 
    
                        </div>  
    
                        <!-- comments -->  
                        <div class="box p-5 px-6 relative" id="activite{{$activite->id}}">
                            <h3 class="font-semibold text-lg text-black dark:text-white"> Discussions </h3>
    
                            <div class=" text-sm font-normal space-y-4 relative mt-4" id="addComment"> 
                        
                                @foreach($activite->comments as $comment)
                                    <div class="flex items-start gap-3 relative">
                                        <a href="{{url('/profile', $comment->user->id)}}"> 
                                            @if(empty($comment->user->profile))
                                                <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-6 h-6 mt-1 rounded-full"> 
                                            @else
                                                <img src={{asset(Storage::url($comment->user->profile))}} alt="" class="w-6 h-6 mt-1 rounded-full"> 
                                            @endif
                                        </a>
                                        <div class="flex-1">
                                            <a href="{{url('/profile', $comment->user->id)}}" class="text-black font-medium inline-block dark:text-white"> {{$comment->user->lastname}} {{$comment->user->firstname}} </a>
                                            <p class="mt-0.5">{{$comment->comment}}</p>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- <div>
                                    <button type="button" class="flex items-center gap-1.5 text-blue-500 hover:text-blue-500 my-5">
                                        <ion-icon name="chevron-down-outline" class="ml-auto duration-200 group-aria-expanded:rotate-180"></ion-icon>
                                        Plus de commentaires
                                    </button>
                                </div>
     --}}
                            </div>
    
                            <!-- add comment -->
                            <form action="{{ route('comment.activite.store') }}" method="POST" enctype="multipart/form-data" id="form-data-activite-comment{{$activite->id}}">
                                @csrf
                                <div class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">
                                    
                                    @if(empty($user->profile))
                                        <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-6 h-6 rounded-full"> 
                                    @else
                                        <img src={{asset(Storage::url($user->profile))}} alt="" class="w-6 h-6 rounded-full"> 
                                    @endif
                                
                                    <div class="flex-1 relative overflow-hidden h-10">
                                        
                                        <textarea placeholder="ajouter un commentaire...." rows="1" name="comment" class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent" id="tewt_now"></textarea>
                        
                                        {{-- <div class="!top-2 pr-2" uk-drop="pos: bottom-right; mode: click">
                                            <div class="flex items-center gap-2" uk-scrollspy="target: > svg; cls: uk-animation-slide-right-small; delay: 100 ;repeat: true">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-sky-600">
                                                    <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-pink-600">
                                                    <path d="M3.25 4A2.25 2.25 0 001 6.25v7.5A2.25 2.25 0 003.25 16h7.5A2.25 2.25 0 0013 13.75v-7.5A2.25 2.25 0 0010.75 4h-7.5zM19 4.75a.75.75 0 00-1.28-.53l-3 3a.75.75 0 00-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 001.28-.53V4.75z" />
                                                </svg>
                                            </div>
                                        </div> --}}
                                        <input id="activite_id" type="text" class="hidden" name="activite_id" value="{{$activite->id}}"/>
                        
                                    </div>
                        
                                    <button type="button" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery submit-form" id="create_new"> Envoyer</button>
                                </div> 
                            </form> 
    
    
                        </div>
    
                    </div>
    
                    <div class="lg:w-[400px]"> 
          
                        <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                             uk-sticky="media: 1024; end: #js-oversized; offset: 80">
    
                            <div class="box p-5 px-6 pr-0">
    
                                <h3 class="font-semibold text-lg text-black dark:text-white"> Status </h3> 
    
                                <div class="grid grid-cols-2 gap-2 text-sm mt-4">
                                    <div class="flex gap-3">
                                        <div class="p-2 inline-flex rounded-full bg-rose-50 self-center"> <ion-icon name="heart" class="text-2xl text-rose-600"></ion-icon></div>
                                        <div>
                                            <h3 class="sm:text-xl sm:font-semibold mt-1 text-black dark:text-white text-base font-normal">{{count($activite->activityJoins)}}</h3>
                                            <p>Intéressé</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-3">
                                        <div class="p-2 inline-flex rounded-full bg-rose-50 self-center"> <ion-icon name="leaf-outline" class="text-2xl text-rose-600"></ion-icon></div>
                                        <div>
                                            <h3 class="sm:text-xl sm:font-semibold mt-1 text-black dark:text-white text-base font-normal">{{count($participant)}}</h3>
                                            <p>Participant</p>
                                        </div>
                                    </div> 
                                </div> 
                                {{-- <ul class="mt-6 space-y-4 text-gray-600 text-sm dark:text-white/80">
    
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                                        </svg>
                                        <div> <span class="font-semibold text-black dark:text-white"> 3,240 </span> friends  </div>
                                    </li>
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"></path>
                                        </svg>
                                        <div> on Socialite since  <span class="font-semibold text-black dark:text-white"> 2014</span> </div>
                                    </li>
                                    
                                </ul> --}}
    
                                
                            </div>
    
                            {{-- <div class="box p-5 px-6">
            
                                <div class="flex items-baseline justify-between text-black dark:text-white">
                                    <h3 class="font-bold text-base"> Inviter des amis </h3>
                                    <a href="#" class="text-sm text-blue-500">See all</a>
                                </div>
            
                                <div class="side-list">
            
                                    <div class="side-list-item">
                                        <a href="timeline.html">
                                            <img src={{asset("images/avatars/avatar-3.jpg")}} alt="" class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline.html"><h4 class="side-list-title">  Monroe Parker </h4></a>
                                            <div class="side-list-info"> Turkey</div>
                                        </div>
                                        <button class="button border2">Invite</button>
                                    </div>
            
                                    <div class="side-list-item">
                                        <a href="timeline.html">
                                            <img src={{asset("images/avatars/avatar-4.jpg")}} alt="" class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline.html"><h4 class="side-list-title">  Martin Gray </h4></a>
                                            <div class="side-list-info"> Dubai</div>
                                        </div>
                                        <button class="button border2">Invite</button>
                                    </div>
    
                                    <div class="side-list-item">
                                        <a href="timeline.html">
                                            <img src={{asset("images/avatars/avatar-5.jpg")}} alt="" class="side-list-image rounded-full">
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline.html"><h4 class="side-list-title">  James Lewis </h4></a>
                                            <div class="side-list-info"> London</div>
                                        </div>
                                        <button class="button border2">Invite</button>
                                    </div>
                                    
                                </div>
            
                            </div> --}}
                            
                            <div class="box p-5 px-6 space-y-4">
            
                                <h3 class="font-bold text-base text-black"> Créé par </h3> 
                            
                                <div class="side-list-item">
                                    <a href="{{url('/profile', $activite->user->id)}}">
                                        @if(empty($user->profile))
                                            <img src={{asset("/images/avatars/avatar.png")}} alt="" class="side-list-image rounded-full"> 
                                        @else
                                            <img src={{asset(Storage::url($user->profile))}} alt="" class="side-list-image rounded-full"> 
                                        @endif
                                    </a>
                                    <div class="flex-1">
                                        <a href="{{url('/profile',$activite->user->id)}}"><h4 class="side-list-title"> {{$activite->user->lastname}} {{$activite->user->firstname}}</h4></a>
                                        <div class="side-list-info">{{$activite->user->localite}} </div>
                                    </div>
                                    <a href="{{url('/profile', $activite->user->id)}}" class="bg-secondery/60 button rounded-full">Profile</a>
                                </div>
    
                                <ul class="text-gray-600 space-y-4 text-sm dark:text-white/80">
    
                                    {{-- <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                                        </svg>
                                        <div> <span class="font-semibold text-black dark:text-white"> 3,240 </span> friends  </div>
                                    </li> --}}
                                    <li class="flex items-center gap-3"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"></path>
                                        </svg>
                                        <div> sur {{$activite->user->statut}} depuis  <span class="font-semibold text-black dark:text-white"> {{date('Y', strtotime($activite->user->created_at)) }}</span> </div>
                                    </li>
                                    
                                </ul>
                        
                            </div>
    
                        </div>
    
                    </div>
    
                </div>
                
            </div>
            
        </main>

    </div>

    @endsection