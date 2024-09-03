<div id="rezize_responsive" class="flex-1" style="max-width: 30%;"> 

    <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" 
    uk-sticky="media: 1024; end: #js-oversized; offset: 80">

        <div class="box p-5 px-6">

            <div class="flex items-baseline justify-between text-black dark:text-white">
                <h3 class="font-bold text-base"> Alert </h3>
                <a href="{{ url('alert') }}" class="text-sm text-blue-500">Voir plus</a>
            </div>

            <div id="addAlert" class="side-list">

                @foreach($alerts as $alert)
                    <div class="side-list-item">
                        <a href="{{ url('profile', $alert->user->id) }}">
                            @if(empty($alert->user->profile))
                                <img src="{{ asset('/images/avatars/avatar.png') }}" alt="" class="side-list-image rounded-full"> 
                            @else
                                <img src="{{ asset(Storage::url($alert->user->profile)) }}" alt="" class="side-list-image rounded-full"> 
                            @endif
                        </a>
                        <div class="flex-1">
                            <a href="{{ url('profile', $alert->user->id) }}"><h4 class="side-list-title">  {{ $alert->user->lastname }} {{ $alert->user->firstname }} </h4></a>
                            <div class="side-list-info">  
                                @if(count($alert->alertfollows) >= 100)
                                    {{ number_format(count($alert->alertfollows) / 100, 1) }} K vues
                                @else
                                    {{ count($alert->alertfollows) }} vues
                                @endif  
                            </div>
                        </div>
                        <a href="{{ url('alert', $alert->id) }}">
                            <button class="button bg-primary text-white dark:text-white">voir</button>
                        </a>
                    </div>
                @endforeach

                <!-- <button class="bg-secondery button w-full mt-2 hidden">See all</button> -->

            </div>

        </div>

        <!-- latest marketplace items -->
        <div class="box p-5 px-6 border1 dark:bg-dark2">
                            
            <div class="flex justify-between text-black dark:text-white">
                <h3 class="font-bold text-base"> Produit Premium </h3>
                <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
            </div>

            <div class="relative capitalize font-medium text-sm text-center mt-4 mb-2" tabindex="-1" uk-slider="autoplay: true; finite: true">

                <div class="overflow-hidden uk-slider-container">
                
                    <ul class="-ml-2 uk-slider-items w-[calc(100%+0.5rem)]">
                        @foreach ($produits as $item)
                            <li class="w-1/2 pr-2">
                                <a href="{{ url('/produit', $item->id) }}">
                                    <div class="relative overflow-hidden rounded-lg">
                                        <div class="relative w-full h-40">
                                            <img src="{{ asset(Storage::url($item->image)) }}" alt="" class="object-cover w-full h-full inset-0">
                                        </div> 
                                        <div class="absolute right-0 top-0 m-2 bg-white/60 rounded-full py-0.5 px-2 text-sm font-semibold dark:bg-slate-800/60"> {{ $item->price }} {{ $item->devise }} </div>
                                    </div>
                                    <div class="mt-3 w-full"> {{ $item->nom }} </div>
                                </a>
                            </li>    
                        @endforeach
                       
                    </ul>

                    <button type="button" class="absolute bg-white rounded-full top-16 -left-4 grid w-9 h-9 place-items-center shadow dark:bg-dark3" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                    <button type="button" class="absolute -right-4 bg-white rounded-full top-16 grid w-9 h-9 place-items-center shadow dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon></button>

                </div>
            
            </div>

        </div>

        <!-- Trends -->
        <div class="box p-5 px-6 border1 dark:bg-dark2">
            
            <div class="flex justify-between text-black dark:text-white">
                <h3 class="font-bold text-base"> Les tendances pour vous </h3>
                <button type="button"> <ion-icon name="sync-outline" class="text-xl"></ion-icon> </button>
            </div>

            <div class="space-y-3.5 capitalize text-xs font-normal mt-5 mb-2 text-gray-600 dark:text-white/80">
                @foreach ($tendance as $item)
                    <a href="#">
                        <div class="flex items-center gap-3 p"> 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 -mt-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />
                            </svg>
                            <div class="flex-1 flex items-center gap-3">
                                <h4 class="font-semibold text-black dark:text-white text-sm"> {{ $item->name }} </h4>
                                <button type="button" class="button-icon text-gray-500 bg-gray-100 dark:bg-slate-700 font-bold"> {{ $item->count }} </button>
                            </div> 
                        </div>
                    </a>
                @endforeach
            </div>

        </div>

    </div>
</div>
