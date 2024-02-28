<div class="bg-white rounded-xl shadow-sm text-sm font-medium border1 dark:bg-dark2" id="post">

    <!-- post heading -->
    <div class="flex gap-3 sm:p-4 p-2.5 text-sm font-medium">
        <a href="{{url('/profile', $item->user->id)}}"> 
            @if(empty($item->user->profile))
                <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-9 h-9 rounded-full"> 
            @else
                <img src={{asset(Storage::url($item->user->profile))}} alt="" class="w-9 h-9 rounded-full"> 
            @endif
        </a>  
        <div class="flex-1">
            <a href="{{url('/profile', $item->user->id)}}"> <h4 class="text-black dark:text-white"> {{$item->user->lastname }} {{$item->user->firstname }}</h4> </a>  
            <div class="text-xs text-gray-500 dark:text-white/80"> {{date('j F Y H:i', strtotime($item->created_at)) }}</div>
        </div>

        <div class="-mr-1">
            <button type="button" class="button-icon w-8 h-8"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
            <div  class="w-[245px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true; mode: click"> 
                <nav> 
                    {{-- <a href="#"> <ion-icon class="text-xl shrink-0" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                    <a href="#"> <ion-icon class="text-xl shrink-0" name="notifications-off-outline"></ion-icon> Mute Notification </a>  
                    <a href="#"> <ion-icon class="text-xl shrink-0" name="flag-outline"></ion-icon>  Report this post </a>   --}}
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/profile', $item->user->id) }}"> <ion-icon class="text-xl shrink-0" name="share-outline"></ion-icon>  Partagez votre profile </a>  
                    {{-- <hr> --}}
                    {{-- <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl shrink-0" name="stop-circle-outline"></ion-icon>  Unfollow </a>   --}}
                </nav>
            </div>
        </div>
    </div>

    <div class="sm:px-4 p-2.5 pt-0">
        <p class="font-normal"> {{$item->description}}</p>
    </div> 
    
    <!-- post image -->
    <a href="#show-post{{$item->id}}" uk-toggle>
        <div class="relative w-full lg:h-96 h-full sm:px-4">
            <img src={{asset(Storage::url($item->image1))}} alt="" class="sm:rounded-lg w-full h-full object-cover">
        </div>
    </a>
    
    <!-- post icons -->
    <div class="sm:p-4 p-2.5 flex items-center gap-4 text-xs font-semibold">
        <div>
            <form action="{{ route('liked_post.store') }}" method="POST" enctype="multipart/form-data" id="form-data-post{{$item->id}}">
                @csrf
                <div class="flex items-center gap-2.5">
                    <input id="post_id" type="text" class="hidden" name="post_id" value="{{$item->id}}"/>

                    <button type="button" class="button-icon text-red-500 bg-red-100 dark:bg-slate-700 submit-form" id="create_new"> 👍 </button>
                    {{-- <ion-icon class="text-lg" name="heart"> </ion-icon> --}}
                    <a href="#" id="liked-post">
                        @if(count($item->postLikeds) >= 100)
                            {{count($item->postLikeds) / 100}} K
                        @else
                            {{count($item->postLikeds)}}
                        @endif
                    </a>
                </div>
            </form>
            {{-- <div    class="p-1 px-2 bg-white rounded-full drop-shadow-md w-[212px] dark:bg-slate-700 text-2xl"
                    uk-drop="offset:10;pos: top-left; animate-out: true; animation: uk-animation-scale-up uk-transform-origin-bottom-left">  --}}
                
                {{-- <div class="flex gap-2"  uk-scrollspy="target: > button; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
                    <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 👍 </span></button> --}}
                    {{-- <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> ❤️ </span></button> --}}
                    {{-- <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😂 </span></button>
                    <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😯 </span></button>
                    <button type="button" class="text-red-600 hover:scale-125 duration-300"> <span> 😢 </span></button> --}}
                {{-- </div> --}}
                
                {{-- <div class="w-2.5 h-2.5 absolute -bottom-1 left-3 bg-white rotate-45 hidden"></div>
            </div> --}}
        </div>
        <div class="flex items-center gap-3">
            <button type="button" class="button-icon bg-slate-200/70 dark:bg-slate-700"> <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
           
                <span id="countComment_post{{$item->id}}">
                    @if(!empty($item->comments))
                        {{count($item->comments)}}
                    @else 
                        0     
                    @endif
                </span>  

        </div>
        {{-- <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl" name="paper-plane-outline"></ion-icon> </button> --}}
        {{-- <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/profile', $item->id) }}"> <button type="button" class="button-icon ml-auto"> <ion-icon class="text-xl" name="share-social-outline"></ion-icon> </button> </a> --}}
    </div>

    <!-- comments -->
    <div class="sm:p-4 p-2.5 border-t border-gray-100 font-normal space-y-3 relative dark:border-slate-700/40" id="addComment_post{{$item->id}}"> 
        @foreach($item->comments as $x => $comment)
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
            @if($x == 0)
                @break
            @endif
        @endforeach

    </div>

    <!-- add comment -->
    <form action="{{ route('comment.store') }}" method="POST" enctype="multipart/form-data" id="form-data-post-comment{{$item->id}}">
        @csrf
        <div class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">
            
            @if(empty($user->profile))
                <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-6 h-6 rounded-full"> 
            @else
                <img src={{asset(Storage::url($user->profile))}} alt="" class="w-6 h-6 rounded-full"> 
            @endif
        
            <div class="flex-1 relative overflow-hidden h-10">
                
                <textarea placeholder="ajouter un commentaire...." rows="1" name="comment" class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent" id="text_new"></textarea>

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
                <input id="post_id" type="text" class="hidden" name="post_id" value="{{$item->id}}"/>

            </div>

            <button type="button" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery submit-form" id="create_new"> Envoyer</button>
        </div> 
    </form>

</div>

