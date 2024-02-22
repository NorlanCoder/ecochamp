          
    <div class="page-heading">
        
        <h1 class="page-title"> Activité </h1>

        <nav class="nav__underline">

            <ul class="group" uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
           
                <li> <a href="#" > Campagne  </a> </li>
                <li> <a href="#"> Evénement </a> </li>
                <li> <a href="#"> Activité </a> </li>
                
            </ul> 

        </nav>
        <a href="{{url('/activity')}}">
            <button type="button" class="absolute right-3 bottom-5"> 
                <a href="{{url('/activity')}}" class="text-blue-500 sm:block hidden text-sm"> Voir tous </a>
            </button>
        </a>                  
    </div>

    <!-- group list tabs -->
    <div class="uk-switcher" id="group-tabs">

        <!-- card layout 1 -->
        <div id="addActiviteCamp" class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5">

            @isset($activities_campagne)

                @foreach ($activities_campagne as $item)

                    <div class="card">
                        <a href="{{url('/activite', $item->id)}}">
                            <div class="card-media h-24">
                                <img src={{asset(Storage::url($item->couverture))}} alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body relative z-10">

                                @if(empty($item->user->profile))
                                    <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-10 rounded-full mb-2 shadow -mt-8 relative border-2 border-white dark:border-slate-800"> 
                                @else
                                    <img src={{asset(Storage::url($item->user->profile))}} alt="" class="w-10 rounded-full mb-2 shadow -mt-8 relative border-2 border-white dark:border-slate-800"> 
                                @endif

                            <a href="{{url('/activite', $item->id)}}"><h4 class="card-title"> {{$item->user->lastname}} {{$item->user->firstname}}  </h4></a>
                            <div class="card-list-info font-normal mt-1">
                                <a href="{{url('/activite', $item->id)}}">
                                    {{substr($item->nom, 0, 7)}}...
                                </a>
                                <div>
                                    @if(isset($item->activityJoins) && count($item->activityJoins) >= 100)
                                        {{count($item->activityJoins) / 100}}k <ion-icon style="font-size: 1em;" name="people-outline"></ion-icon> 
                                    @else
                                        {{count($item->activityJoins)}} <ion-icon style="font-size: 1em;" name="people-outline"></ion-icon>
                                    @endif
                                </div>
                            </div>
                            <div class="flex gap-2">

                                @if(!in_array($item->id, $joins))
                                    <form action="{{ url('/activite/join') }}" method="POST" enctype="multipart/form-data" id="form-data-join-activite{{$item->id}}">
                                        @csrf
                                        <input id="activite_id" type="text" class="hidden" name="activite_id" value="{{$item->id}}"/>
                                        <button type="button" class="button bg-primary text-white flex-1 submit-form" id="create_new">Rejoindre</button>
                                    </form>
                                @else
                                    <button type="button" class="button bg-primary text-white flex-1"> <ion-icon name="checkmark-done-sharp"></ion-icon> Jointe</button>
                                @endif

                            </div>
                                
                        </div>
                    </div> 

                @endforeach

            @endisset

        </div>

        <!-- card layout 2 -->
        <div id="addActiviteEven" class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5">

            @isset($activities_evenement)
                @foreach ($activities_evenement as $item)

                    <div class="card">
                        <a href="{{url('/activite', $item->id)}}">
                            <div class="card-media h-24">
                                <img src={{asset(Storage::url($item->couverture))}} alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a> 
                        <div class="card-body">
                            <a href="{{url('profile', $item->user->id)}}"> <h4 class="card-title">  {{$item->user->lastname}} {{$item->user->firstname}} </h4></a> 
                            <div class="card-text"> 
                                <div class="card-list-info font-normal mt-1">
                                <div>
                                    @if(isset($item->activityJoins) && count($item->activityJoins) >= 100)
                                        {{count($item->activityJoins) / 100}}k <ion-icon style="font-size: 1em;" name="people-outline"></ion-icon> 
                                    @else
                                        {{count($item->activityJoins)}} <ion-icon style="font-size: 1em;" name="people-outline"></ion-icon>
                                    @endif
                                </div>
                                </div>
                                    <a href="{{url('/activite', $item->id)}}">
                                        {{substr($item->nom, 0, 7)}}...
                                    </a>
                                </div> 
                                {{-- <div class="flex items-center gap-3 mt-3">
                                    <div class="flex -space-x-2">
                                       @if(empty($friend->profile))
                                            <img src={{asset("/images/avatars/avatar.png")}} alt="" class="w-10 rounded-full mb-2 shadow -mt-8 relative border-2 border-white dark:border-slate-800"> 
                                        @else
                                            <img src={{asset(Storage::url($item->user->profile))}} alt="" class="w-10 rounded-full mb-2 shadow -mt-8 relative border-2 border-white dark:border-slate-800"> 
                                        @endif
                                    </div>
                                    <p class="card-text"> 6 friend are members </p>
                                </div> --}}
                            </div>
                            <div class="flex gap-2">
                                @if(!in_array($item->id, $joins))
                                    <form action="{{ url('/activite/join') }}" method="POST" enctype="multipart/form-data" id="form-data-join-activite{{$item->id}}">
                                        @csrf
                                        <input id="activite_id" type="text" class="hidden" name="activite_id" value="{{$item->id}}"/>
                                        <button type="button" class="button bg-primary text-white flex-1 submit-form" id="create_new">Rejoindre</button>
                                   </form>
                                @else
                                    <butt on type="button" class="button bg-primary text-white flex-1"> <ion-icon name="checkmark-done-sharp"></ion-icon> Jointe</button>
                                @endif
                            </div>
                        </div>

                @endforeach
            @endisset

        </div>

        <!-- card layout 3 -->
        <div id="addActiviteActi" class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-2.5">
            
            @isset($activities_activite)
                @foreach ($activities_activite as $item)
                
                    <div class="card">
                        <a href="{{url('/activite', $item->id)}}"> 
                            <div class="card-media h-24">
                                <img src={{asset(Storage::url($item->couverture))}} alt="">
                                <div class="card-overly"></div>
                            </div>
                        </a>
                        <div class="card-body">
                            <a href="{{url('/activite', $item->id)}}"> <h4 class="card-title"> {{substr($item->nom, 0, 7)}}... </h4> </a>
                            <div class="card-list-info font-normal mt-1"> 
                                <a href="#">  {{$item->activite_type}} </a> 
                                
                                <div>
                                    @if(isset($item->activityJoins) && count($item->activityJoins) >= 100)
                                        {{count($item->activityJoins) / 100}}k <ion-icon style="font-size: 1em;" name="people-outline"></ion-icon> 
                                    @else
                                        {{count($item->activityJoins)}} <ion-icon style="font-size: 1em;" name="people-outline"></ion-icon>
                                    @endif
                                </div>
                            </div>
                            <div class="flex gap-2">
                                @if(!in_array($item->id, $joins))
                                    <form action="{{ url('/activite/join') }}" method="POST" enctype="multipart/form-data" id="form-data-join-activite{{$item->id}}">
                                        @csrf
                                        <input id="activite_id" type="text" class="hidden" name="activite_id" value="{{$item->id}}"/>
                                        <button type="button" class="button bg-primary text-white flex-1 submit-form" id="create_new">Rejoindre</button>
                                    </form>
                                @else
                                    <button type="button" class="button bg-primary text-white flex-1"> <ion-icon name="checkmark-done-sharp"></ion-icon> Jointe</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            @endisset
        </div>
    </div>