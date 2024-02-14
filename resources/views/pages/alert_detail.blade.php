@extends("layouts.default")
@section("index")
 
 
    <div id="wrapper">
        
        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="flex 2xl:gap-12 max-lg:flex-col gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

                <div class="flex-1">
                    
                    <div class="box overflow-hidden">
    
                        <div class="relative h-80">
    
                            <img src={{asset(Storage::url($alert->image_principale))}} class="h-36 mb-4 w-full h-full object-cover">
    
                            <!-- optional -->
                            {{-- <div class="p-6 w-full z-10 absolute bg-gradient-to-t bottom-0 from-black/60 hidden">
                                <h1 class="text-xl font-semibold !text-white"> {{$alert->nom}} </h1>
            
                                <div class="flex items-center gap-5 mt-4 !text-white">
                                    <div class="w-6 h-6 flex-shrink-0 rounded-md relative"> 
                                        @if(empty($alert->user->profile))
                                            <img src={{asset("/images/avatars/avatar.png")}} class="absolute w-full h-full inset-0 rounded-full object-cover" alt=""> 
                                        @else
                                            <img src={{asset(Storage::url($alert->user->profile))}} class="absolute w-full h-full inset-0 rounded-full object-cover" alt=""> 
                                        @endif
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-medium !text-white"> {{$alert->user->firstname}} {{$alert->user->lastname}}</h4>
                                        <div class="font-medium text-xs"> {{date('j F Y H:i', strtotime($alert->created_at)) }}</div>
                                    </div>
                                    <div class="text-sm ml -auto text-gray-400"> {{$alert->alert_type}} </div> 
                                    <div class="text-sm ml-auto text-gray-400"> {{date('j F Y H:i', strtotime($alert->date_remarque)) }}</div>
                                </div>
        
                            </div> --}}
                            
                        </div>
                        <div class="p-6">
    
                            <h1 class="text-xl font-semibold mt-1"> {{$alert->nom}} </h1>
        
                            <!-- story heading -->
                            <div class="flex gap-3 text-sm mt-6">
                                @if(empty($alert->user->profile))
                                    <img src={{asset("/images/avatars/avatar.png")}} class="w-9 h-9 rounded-full" alt=""> 
                                @else
                                    <img src={{asset(Storage::url($alert->user->profile))}} class="w-9 h-9 rounded-full" alt=""> 
                                @endif
                                <div class="flex-1">
                                    <h4 class="text-black font-medium dark:text-white"> {{$alert->user->firstname}} {{$alert->user->lastname}} </h4>
                                    <div class="text-gray-500 font-medium text-xs dark:text-white/80"> {{date('j F Y H:i', strtotime($alert->created_at)) }}</div>
                                </div>
                                <div class="font-normal text-gray-500 gap-1">
                                    <span class="text-sm ml -auto">  {{$alert->alert_type}} </span> 
                                    <span class="text-sm ml-auto text-gray-400"> {{date('j F Y H:i', strtotime($alert->date_remarque)) }}</span>
                                </div>
                                
                            </div>
        

                            <div class="space-y-2 text-sm font-normal mt-6 leading-6 text-black dark:text-white">
                                {{-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <p> 
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                                </p>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo , consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                                </p> --}}
                                {{$alert->description}}
                            </div>
                            
                        </div>
    
    
                    </div>

                    <br>
                    
                    <!-- comments -->  
                    <div class="box p-5 px-6 relative" id="alert">
                        <h3 class="font-semibold text-base text-black dark:text-white"> Commentaires </h3>

                        @foreach($alert->comments as $comment)
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


                        <!-- add comment -->
                        <form action="{{ route('alert_comment.store') }}" method="POST" enctype="multipart/form-data" id="form-data-alert-comment{{$alert->id}}">
                            @csrf
                            <div class="sm:px-4 sm:py-3 p-2.5 border-t border-gray-100 flex items-center gap-1 dark:border-slate-700/40">
                                
                                @if(empty($user->profile))
                                    <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-6 h-6 rounded-full"> 
                                @else
                                    <img src={{asset(Storage::url($user->profile))}} alt="" class="w-6 h-6 rounded-full"> 
                                @endif
                            
                                <div class="flex-1 relative overflow-hidden h-10">
                                    
                                    <textarea placeholder="ajouter un commentaire...." rows="1" name="comment" class="w-full resize-none !bg-transparent px-4 py-2 focus:!border-transparent focus:!ring-transparent" id="text_new"></textarea>
           
                                    <input id="alert_id" type="text" class="hidden" name="alert_id" value="{{$alert->id}}"/>
                    
                                </div>
                    
                                <button type="button" class="text-sm rounded-full py-1.5 px-3.5 bg-secondery submit-form" id="create_new"> Envoyer</button>
                            </div> 
                        </form>


                    </div>

     
                </div>
    
                <!-- sidebar -->
                <div class="2xl:w-[380px] lg:w-[330px] w-full">
    
                    <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                          uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                        <div class="box p-5 px-6">
                            
                            <div class="flex items-baseline justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Trending Articles</h3>
                                <a href="#" class="text-sm text-blue-500">See all</a>
                            </div>

                            <div class="mt-4 space-y-4">

                                <div>
                                    <a href="blog-read.html"><h4 class="text-sm font-normal text-black dark:text-white duration-200 hover:opacity-80">Interesting javaScript and CSS libraries  you should be learn</h4></a>
                                    <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                        <div> 10 Jun 2022 </div>
                                        <div class="md:block hidden">·</div>
                                        <div> 156.9K views</div>
                                    </div>
                                </div>
                                <div>
                                    <a href="blog-read.html"><h4 class="text-sm font-normal text-black dark:text-white duration-200 hover:opacity-80"> Interesting javaScript and CSS libraries  you should be learn</h4></a>
                                    <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                        <div> 10 Jun 2022 </div>
                                        <div class="md:block hidden">·</div>
                                        <div> 156.9K views</div>
                                    </div>
                                </div>
                                <div>
                                    <a href="blog-read.html"><h4 class="text-sm font-normal text-black dark:text-white duration-200 hover:opacity-80">  Interesting JavaScript and CSS libraries should Know About</h4></a>
                                    <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                        <div> 10 Jun 2022 </div>
                                        <div class="md:block hidden">·</div>
                                        <div> 156.9K views</div>
                                    </div>
                                </div>
                                <div>
                                    <a href="blog-read.html"><h4 class="text-sm font-normal text-black dark:text-white duration-200 hover:opacity-80">Top amazing web demos and experiments should know about</h4></a>
                                    <div class="text-xs text-gray-400 mt-2 flex items-center gap-2">
                                        <div> 10 Jun 2022 </div>
                                        <div class="md:block hidden">·</div>
                                        <div> 156.9K views</div>
                                    </div>
                                </div>
                            </div>
                        

                        </div>
    
                        <!-- peaple you might know -->
                        <div class="box p-5 px-6 border1 dark:bg-dark2">
                                        
                            <div class="flex justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Peaple You might know </h3>
                                <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
                            </div>

                            <div class="space-y-4 capitalize text-xs font-normal mt-5 mb-2 text-gray-500 dark:text-white/80">

                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src={{asset("images/avatars/avatar-7.jpg")}} alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white">  Johnson smith</h4></a>
                                        <div class="mt-0.5"> Suggested For You </div>
                                    </div>
                                    <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src={{asset("images/avatars/avatar-5.jpg")}} alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white"> James Lewis</h4></a>
                                        <div class="mt-0.5"> Followed by Johnson </div>
                                    </div>
                                    <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src={{asset("images/avatars/avatar-2.jpg")}} alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white"> John Michael</h4></a>
                                        <div class="mt-0.5"> Followed by Monroe  </div>
                                    </div>
                                    <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                                </div>
                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src={{asset("images/avatars/avatar-3.jpg")}} alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white">  Monroe Parker</h4></a>
                                        <div class="mt-0.5"> Suggested For You </div>
                                    </div>
                                    <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                                </div> 
                                <div class="flex items-center gap-3">
                                    <a href="timeline.html">
                                        <img src={{asset("images/avatars/avatar-4.jpg")}} alt="" class="bg-gray-200 rounded-full w-10 h-10">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline.html"><h4 class="font-semibold text-sm text-black dark:text-white">  Martin Gray</h4></a>
                                        <div class="mt-0.5"> Suggested For You </div>
                                    </div>
                                    <button type="button" class="text-sm rounded-full py-1.5 px-4 font-semibold bg-secondery"> Follow </button>
                                </div>
                            </div>

                        </div>
 
                    </div>

                </div>
                
            </div>
            
        </main>

    </div>

@endsection