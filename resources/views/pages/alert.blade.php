@extends("layouts.default")
@section("index")
 
    <div id="wrapper">

        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="flex max-lg:flex-col 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

                <div class="flex-1">

                    <div class="max-w-[680px] w-full mx-auto">

                        <div class="page-heading">
                            
                            <h1 class="page-title"> Alertes </h1>
        
                            <nav class="nav__underline">
        
                                <ul class="group" uk-switcher="connect: #page-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                            
                                    <li> <a href="#"> Les alert  </a> </li>
                
                                </ul> 
        
                            </nav>
        
                        </div>
        
        
                        <div id="page-tabs" class="uk-switcher mt-10">
        
                     
                 
                            <!-- pages card layout 3 -->
        
                            <div class="grid sm:grid-cols-3 grid-cols-2 gap-3" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
        
                               @foreach ($alerts as $item)
                                <div class="card">
                                        <a href="{{url('/alert', $item->id)}}">
                                            <div class="card-media sm:h-24 h-16">

                                                <img src={{asset(Storage::url($item->image_principale))}} alt="">

                                                <div class="card-overly"></div>
                                            </div>
                                        </a>
                                        <div class="card-body relative z-10">
                                            
                                            @if(empty($item->user->profile))
                                                <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white"> 
                                            @else
                                                <img src={{asset(Storage::url($comment->user->profile))}} alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white"> 
                                            @endif

                                            <h4 class="card-title"> {{$item->user->lastname}} {{$item->user->firstname}} </h4>
                                            <p class="card-text"> 
                                                @if(count($item->alertfollows) >= 100)
                                                    {{count($item->alertfollows) / 100}} K vues
                                                @else
                                                    {{count($item->alertfollows)}} vues
                                                @endif 
                                            </p>
                    
                                            <div class="flex gap-2 justify-center ">
                                                <a href="{{url('/alert', $item->id)}}"> <button type="button" class="button bg-secondery !w-auto">Voir</button> </a>
                                            </div>
                                            
                                        </div>
                                    </div>
                               @endforeach
        
                                <!-- load more -->
                                <div class="flex justify-center my-6 lg:col-span-3 col-span-2">
                                    <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">En savoir plus...</button>
                                </div>
        
                            
                            </div>
        
                        </div>

                    </div>

           
                </div>
    
                <!-- sidebar -->
                <div class="2xl:w-[380px] lg:w-[330px] w-full">
    
                    <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                          uk-sticky="media: 1024; end: #js-oversized; offset: 80">
                          
                        <div class="box p-5 px-6">
    
                            <div class="flex items-baseline justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Pages You Manage </h3>
                                <a href="#" class="text-sm text-blue-500">See all</a>
                            </div>
                        
                            <div class="side-list">
    
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-2.jpg")}} alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title">  John Michael</h4></a>
                                        <div class="side-list-info"> Updated 2 day ago </div>
                                    </div>
                                    <button class="button bg-secondery">Edit</button>
                                </div>
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-4.jpg")}} alt="" class="side-list-image rounded-full"> 
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Martin Gray</h4></a>
                                        <div class="side-list-info"> Updated 4 day ago </div>
                                    </div>
                                    <button class="button bg-secondery">Edit</button>
                                </div>  
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-3.jpg")}} alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Monroe Parker</h4></a>
                                        <div class="side-list-info"> Updated 1 week ago </div>
                                    </div>
                                    <button class="button bg-secondery">Edit</button>
                                </div>  
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-1.jpg")}} alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Jesse Steeve</h4></a>
                                        <div class="side-list-info"> Updated 2 month ago </div>
                                    </div>
                                    <button class="button bg-secondery">Edit</button>
                                </div>  
                                 
                            </div>
    
                        </div>
    
                        <!-- Groups You Manage  -->
                        <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                                        
                            <div class="flex items-baseline justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> pages you manage </h3>
                                <a href="#" class="text-sm text-blue-500">See all</a>
                            </div>
    
                            <div class="side-list">
    
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-2.jpg")}} alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title">  John Michael</h4></a>
                                        <div class="side-list-info"> Updated 6 day ago </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                                </div>
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-4.jpg")}} alt="" class="side-list-image rounded-full"> 
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Martin Gray</h4></a>
                                        <div class="side-list-info"> Updated 2 month ago </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                                </div>  
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-3.jpg")}} alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Monroe Parker</h4></a>
                                        <div class="side-list-info"> Updated 1 week ago </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                                </div>  
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-1.jpg")}} alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Jesse Steeve</h4></a>
                                        <div class="side-list-info"> Updated 2 day ago </div>
                                    </div>
                                    <button class="button bg-primary-soft text-primary dark:text-white">Like</button>
                                </div>  
                                 
                            </div>
    
                            <button class="bg-secondery w-full text-black py-1.5 font-medium px-3.5 rounded-md text-sm mt-3 dark:text-white">See all</button>

                        </div>
    
                        <!-- Groups You Manage  -->
                        <div class="bg-white rounded-xl shadow p-5 px-6 border1 dark:bg-dark2">
                                        
                            <div class="flex items-baseline justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Suggested pages </h3>
                                <a href="#" class="text-sm text-blue-500">See all</a>
                            </div>
    
                            <div class="side-list">
    
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-2.jpg")}} alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title">  John Michael</h4></a>
                                        <div class="side-list-info"> Updated 1 week ago </div>
                                    </div>
                                    <button class="button bg-primary text-white">Like</button>
                                </div>
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-4.jpg")}} alt="" class="side-list-image rounded-full"> 
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Martin Gray</h4></a>
                                        <div class="side-list-info"> Updated 4 week ago </div>
                                    </div>
                                    <button class="button bg-primary text-white">Like</button>
                                </div>  
                                <div class="side-list-item">
                                    <a href="timeline-group.html">
                                        <img src={{asset("images/avatars/avatar-3.jpg")}} alt="" class="side-list-image rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="timeline-group.html"><h4 class="side-list-title"> Monroe Parker</h4></a>
                                        <div class="side-list-info"> Updated 2 month ago </div>
                                    </div>
                                    <button class="button bg-primary text-white">Like</button>
                                </div>  
                               
                                 
                            </div>
     
                        </div>
         
                    </div> 
    
                </div>
    
            </div>
            
        </main>

    </div>

@endsection