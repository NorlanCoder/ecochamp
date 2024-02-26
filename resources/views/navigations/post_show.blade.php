<div class="hidden lg:p-20 max-lg:!items-start" id="show-post{{$item->id}}" uk-modal="">
        
    <div class="uk-modal-dialog tt relative mx-auto overflow-hidden shadow-xl rounded-lg lg:flex items-center ax-w-[86rem] w-full lg:h-[80vh]">
    
        <!-- image previewer -->
        <div class="lg:h-full lg:w-[calc(100vw-400px)] w-full h-96 flex justify-center items-center relative">
            
            <div class="relative z-10 w-full h-full">
                <img src={{asset(Storage::url($item->image1))}} alt="" class="w-full h-full object-cover absolute">
            </div>

            <!-- close button -->
            <button type="button"  class="bg-white rounded-full p-2 absolute right-0 top-0 m-3 uk-animation-slide-right-medium z-10 dark:bg-slate-600 uk-modal-close">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>

        <!-- right sidebar -->
        <div class="lg:w-[400px] w-full bg-white h-full relative  overflow-y-auto shadow-xl dark:bg-dark2 flex flex-col justify-between" id="post">
            
            <div class="p-5 pb-0">

                <!-- story heading -->
                <div class="flex gap-3 text-sm font-medium">
                    @if(empty($item->user->profile))
                        <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-9 h-9 rounded-full"> 
                    @else
                        <img src={{asset(Storage::url($item->user->profile))}} alt="" class="w-9 h-9 rounded-full"> 
                    @endif
                    <div class="flex-1">
                        <h4 class="text-black font-medium dark:text-white"> {{$item->user->lastname }} {{$item->user->firstname }} </h4>
                        <div class="text-gray-500 text-xs dark:text-white/80"> {{date('j F Y H:i', strtotime($item->created_at)) }}</div>
                    </div>

                    <!-- dropdown -->
                    <div class="-m-1">
                        <button type="button" class="button__ico w-8 h-8"> <ion-icon class="text-xl" name="ellipsis-horizontal"></ion-icon> </button>
                        <div  class="w-[253px]" uk-dropdown="pos: bottom-right; animation: uk-animation-scale-up uk-transform-origin-top-right; animate-out: true"> 
                            <nav> 
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="bookmark-outline"></ion-icon>  Add to favorites </a>  
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="notifications-off-outline"></ion-icon> Mute Notification </a>  
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="flag-outline"></ion-icon>  Report this post </a>  
                                <a href="#"> <ion-icon class="text-xl shrink-0" name="share-outline"></ion-icon>  Share your profile </a>  
                                <hr>
                                <a href="#" class="text-red-400 hover:!bg-red-50 dark:hover:!bg-red-500/50"> <ion-icon class="text-xl shrink-0" name="stop-circle-outline"></ion-icon>  Unfollow </a>  
                            </nav>
                        </div>
                    </div>
                </div>

                <p class="font-normal text-sm leading-6 mt-4"> {{$item->description}}</p>

                <div class="shadow relative -mx-5 px-5 py-3 mt-3">
                    <div class="flex items-center gap-4 text-xs font-semibold">
                        <div class="flex items-center gap-2.5">
                            <form action="{{ route('liked_post.store') }}" method="POST" enctype="multipart/form-data" id="form-data-post{{$item->id}}">
                                @csrf
                                <div class="flex items-center gap-2.5">
                                    <input id="post_id" type="text" class="hidden" name="post_id" value="{{$item->id}}"/>
                
                                    <button type="button" class="button-icon text-red-500 bg-red-100 dark:bg-slate-700 submit-form" id="create_new"> 👍 </button>
                                    {{-- <ion-icon class="text-lg" name="heart"> </ion-icon> --}}
                                    <a href="#" id="liked-post">
                                        @if(count($item->postLikeds) >= 100)
                                            {{count($item->postLikeds) / 100}} k
                                        @else
                                            {{count($item->postLikeds)}}
                                        @endif
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class="flex items-center gap-3">
                            <button type="button" class="button__ico bg-slate-100 dark:bg-slate-700"> <ion-icon class="text-lg" name="chatbubble-ellipses"></ion-icon> </button>
                            @if(!empty($item->comments))
                                <span>{{count($item->comments)}}</span>  
                            @else    
                                <span>0</span>     
                            @endif
                        </div>
                        <button type="button" class="button__ico ml-auto"> <ion-icon class="text-xl" name="share-outline"></ion-icon> </button>
                        <button type="button" class="button__ico"> <ion-icon class="text-xl" name="bookmark-outline"></ion-icon> </button>
                    </div>
                </div>

            </div>

            <div class="p-5 h-full overflow-y-auto flex-1">

                <!-- comment list -->
                <div class="relative text-sm font-medium space-y-5" id="addComment_post{{$item->id}}"> 
                    @foreach($item->comments as $comment)

                        <div class="flex items-start gap-3 relative">
                            @if(empty($comment->user->profile))
                                <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-6 h-6 mt-1 rounded-full"> 
                            @else
                                <img src={{asset(Storage::url($comment->user->profile))}} alt="" class="w-6 h-6 mt-1 rounded-full"> 
                            @endif

                            <div class="flex-1">
                                <a href="#" class="text-black font-medium inline-block dark:text-white"> {{$comment->user->lastname}} {{$comment->user->firstname}} </a>
                                <p class="mt-0.5">{{$comment->comment}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            <form action="{{route('comment.store')}}" method="POST" enctype="multipart/form-data" id="form-data-post-comment{{$item->id}}">
                @csrf

                <div class="bg-white p-3 text-sm font-medium flex items-center gap-2">
                                
                    @if(empty($item->user->profile))
                        <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-6 h-6 rounded-full"> 
                    @else
                        <img src={{asset(Storage::url($item->user->profile))}} alt="" class="w-6 h-6 rounded-full"> 
                    @endif
 
                        <textarea placeholder="ajouter un commentaire...." rows="1" name="comment" class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent" id="text_new"></textarea>
                        <input id="post_id" type="text" class="hidden" name="post_id" value="{{$item->id}}"/>

                    <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery submit-form" id="create_new"> Envoyer</button>
                
                </div>

            </form>

        </div>

    </div>
    
</div>