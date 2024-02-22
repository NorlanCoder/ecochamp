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
        
                            {{-- <nav class="nav__underline">
        
                                <ul class="group" uk-switcher="connect: #page-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                            
                                    <li> <a href="#"> Les alertes  </a> </li>
                
                                </ul> 
        
                            </nav> --}}
        
                        </div>
        
        
                        {{-- <div id="page-tabs" class="uk-switcher mt-10"> --}}
        
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
                                                <img src={{asset(Storage::url($item->user->profile))}} alt="" class="w-10 rounded-full sm:mb-2 mb-1 shadow -mt-8 relative border-2 border-white"> 
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
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank"><button type="button" class="button bg-secondery !w-auto">Partager</button></a>

                                            </div>
                                            
                                        </div>
                                    </div>
                               @endforeach
        
                                <!-- load more -->
                                <div class="flex justify-center my-6 lg:col-span-3 col-span-2">
                                    <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">En voir plus...</button>
                                </div>
        
                            
                            </div>
        
                        {{-- </div> --}}

                    </div>

           
                </div>
                
                <!-- sidebar -->
                
                <div class="2xl:w-[380px] lg:w-[330px] w-full">
    
                    <div  class="lg:space-y-6 space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
                          uk-sticky="media: 1024; end: #js-oversized; offset: 80">
                          
                        <div class="box p-5 px-6">
    
                            <div class="flex items-baseline justify-between text-black dark:text-white">
                                <h3 class="font-bold text-base"> Alertes que vous gérez </h3>
                            </div>
                        
                            <div class="side-list">

                                @foreach($alert_user as $alert)

                                    <div class="side-list-item">
                                        <a href="{{url('profile', $alert->user->id)}}">
                                            @if(empty($alert->user->profile))
                                                <img src={{asset("/images/avatars/avatar.png")}} alt="" class="side-list-image rounded-full"> 
                                            @else
                                                <img src={{asset(Storage::url($alert->user->profile))}} alt="" class="side-list-image rounded-full"> 
                                            @endif
                                        </a>
                                        <div class="flex-1">
                                            <a href="timeline.html"><h4 class="side-list-title">  {{$item->user->lastname }} {{$item->user->firstname }} </h4></a>
                                            <div class="side-list-info">  
                                                @if(count($alert->alertfollows) >= 100)
                                                    {{count($alert->alertfollows) / 100}} K vues
                                                @else
                                                    {{count($alert->alertfollows)}} vues
                                                @endif  
                                            </div>
                                        </div>
                                        <a href="{{url('alert', $alert->id)}}">
                                            <button class="button bg-primary-soft text-primary dark:text-white">voir</button>
                                        </a>
                                    </div>

                                @endforeach
                                 
                            </div>
    
                        </div>
         
                    </div> 
    
                </div>
    
            </div>
            
        </main>

    </div>

@endsection