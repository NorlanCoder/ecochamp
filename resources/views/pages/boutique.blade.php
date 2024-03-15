@extends("layouts.default")
@section("index")

    <div id="wrapper">

        <!-- main contents -->
        <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

            <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

                <div class="flex-1">
                    
                    <div class="lg:max-w-[680px] w-full">

                        <div class="page-heading">
                            
                            <h1 class="page-title test"> Produits </h1>
            
                            {{-- <nav class="nav__underline">
            
                                <ul class="group" uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                               
                                    <li> <a href="#"> Suggestions  </a> </li>
                                    <li> <a href="#"> Le plus récent </a> </li>
                                    <li> <a href="#"> Mes produits </a> </li>
        
                                </ul> 
            
                            </nav>
            
                            <button type="button" class="absolute right-3 bottom-5"> <div class="w-7 h-7 bg-blue-600 rounded-full shadow grid place-items-center">  <ion-icon name="add" class="text-xl text-white"></ion-icon> </div> </button>
                             --}}
                        </div>
        
                        <!-- feature one slider -->
                        <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true">
        
                            <div class="uk-slider-container pb-1">
                               
                                <ul class="uk-slider-items w-[calc(100%+14px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
                                    
                                    @foreach ($produit_suggestion as $item)
                                        <li class="pr-3 md:w-1/3 w-1/2" uk-scrollspy-class="uk-animation-fade">
                                            <div class="card">
                                                <a href="{{ route('produit.show', $item->id)}}">
                                                    <div class="card-media sm:aspect-[2/1.7] h-36">
                                                        <img src={{asset(Storage::url($item->image))}} alt="">
                                                        <div class="card-overly"></div>
                                                    </div>
                                                </a>
                                                <div class="card-body relative">
                                                    <a href="#"><span class="text-teal-600 font-semibold text-xs"> {{$item->categorie->nom}}</span></a>
                                                    <a href="{{ url('produit.show', $item->id)}}"><p class="card-text block text-black mt-0.5"> {{$item->nom}} </p></a>
                                                    <div class="-top-3 absolute bg-blue-100 font-medium px-2  py-0.5 right-2 rounded-full text text-blue-500 text-sm z-20">
                                                        {{$item->price}} {{$item->devise}}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
        
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
                                    <h2 class="text-xl font-semibold text-black"> En vedette </h2>
                                    <p class="font-normal text-sm text-gray-500 leading-6 hidden"> Trouvez un groupe en parcourant les catégories supérieures. </p>
                                </div>
                                <div class="flex items-center gap-2 [&:has(a.uk-invisible)][&*>a]:bg-red-600">
                                    <a href="#" class="!block [&:has(.uk-invisible)]:opacity-20" uk-slider-item="previous"><ion-icon name="chevron-back-outline"></ion-icon> </a> 
                                    <a href="#" class="!block" uk-slider-item="next"><ion-icon name="chevron-forward-outline"></ion-icon> </a> 
                                    <a href="#" class="text-blue-500 sm:block hidden text-sm"> Voir tous</a>
                                </div>
                            </div>
        
                            <div class="uk-slider-container pb-1">
                               
                                <ul class="uk-slider-items w-[calc(100%+14px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
                                    @foreach ($produits_recent as $item)
                                        <li class="pr-4 sm:w-1/2 w-full" uk-scrollspy-class="uk-animation-fade">
                                            <div class="card flex gap-1">
                                                <a href="{{ url('produit.show', $item->id)}}">
                                                <div class="card-media w-32 max-h-full h-full shrink-0">
                                                        <img src={{asset(Storage::url($item->image))}} alt="">
                                                        <div class="card-overly"></div>
                                                    </div> 
                                                </a> 
                                                <div class="card-body flex-1 py-4">
                                                    <a href="{{ url('produit.show', $item->id)}}"> <h4 class="card-title">  {{$item->nom}}</h4> </a>
                                                    <a href="#"> <p class="card-text">  {{$item->categorie->nom}} </p></a>
                                                    <div class="text-xl flex items-center justify-between mt-2"> 
                                                        <h4 class="card-title"> {{$item->price}}{{$item->divise}} </h4>
                                                        <a href="{{ url('produit.show', $item->id)}}"> <button type="button" class="button bg-secondery !w-auto rounded-fulld hidden">Voir</button> </a>
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
                                    @endforeach
                                    
                                </ul>
                        
                            </div>
                            
                        </div>
        
                        <!-- categories -->
                        <div class="sm:mt-6 mt-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                            <div>
                                <h2 class="text-xl font-semibold text-black"> Catégories
                                <p class="font-normal text-sm text-gray-500 leading-6"> Trouvez un groupe en parcourant les catégories supérieures. </p>
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
                            
                            @foreach ($produits_all as $item)
                                <div class="card uk-transition-toggle">
                                    <a href="{{ url('/produits', $item->id)}}">
                                        <div class="card-media sm:aspect-[2/1.7] h-36">
                                            <img src={{asset(Storage::url($item->image))}} alt="">
                                            <div class="card-overly"></div> 
                                        </div> 
                                    </a>
                                    <div class="card-body flex justify-between">
                                        <div class="flex-1">
                                            <p class="card-text text-black font-medium line-clamp-1"> {{$item->categorie->nom}} </p>
                                            <div class="text-xs line-clamp-1 mt-1"> {{$item->nom}} </div>
                                        </div>
                                        <h4 class="card-title"> {{$item->price}}{{$item->devise}} </h4>
                                    </div>  
                                    <div class="absolute w-full bottom-0 bg-white/20 backdrop-blur-sm uk-transition-slide-bottom-small max-xl:h-full z-[2] flex flex-col justify-center">
                                        <div class="flex gap-3 py-4 px-3">
                                            <button type="button" class="button bg-primary text-white flex-1">Chat</button>
                                            <a href="{{ url('produit.show', $item->id)}}"> <button type="button" class="button border bg-white !w-auto">Veiw</button> </a>
                                        </div>
                                    </div> 
                                </div>    
                            @endforeach
                            
                        </div>
    
                        <div class="flex justify-center my-6">
                            <button type="button" class="bg-white py-2 px-5 rounded-full shadow-md font-semibold text-sm dark:bg-dark2">Load more...</button>
                        </div>

                    </div>

     
                </div>
                
            </div>
            
        </main>

    </div>


    
    @isset($user)
        
        <!-- create new product button -->
        <button type="button" class="fixed bottom-0 right-0 m-10" uk-toggle="target: #create_product" uk-tooltip="title:Add Product ; offset:10">
            <div class="flex items-center justify-center w-12 h-12 bg-gradient-to-br from-sky-400 to-sky-600 rounded-full">
                <ion-icon name="add-outline" class="text-white text-3xl"></ion-icon>
            </div>
        </button>

        <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data" id="form-data-produit_create">
            @csrf
            <!-- create product modal -->
            <div class="hidden lg:p-20 max-lg:!items-start" id="create_product" uk-modal="">
                
                <div class="uk-modal-dialog tt relative mx-auto bg-white shadow-xl rounded-lg max-lg:w-full dark:bg-dark2">

                    <!-- header card -->
                    <div class="border-b px-3 py-3 text-center relative dark:border-slate-700/60">

                        <h4 class="text-sm text-black dark:text-white"> Créer un nouveau produit</h4>
        
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
                                            <h3 class="text-black font-semibold text-xl dark:text-white"> Vendre des produits de qualité supérieure</h3>
                                        </div>
                                        <div  uk-scrollspy-class="uk-animation-slide-bottom-small">
                                            <p class="text-sm text-center max-w-sm">Vous pouvez gagner de l'argent en vendant des produits de haute qualité et en les partageant avec vos amis intéressés.</p>
                                        </div>
                                        <div uk-scrollspy-class="uk-animation-slide-top-small">
                                            <button type="button" class="bg-primary text-white rounded-lg py-1.5 px-4 text-sm mt-2 dark:bg-slate-700" uk-slideshow-item="next"> Commencer à vendre </button>
                                        </div>

                                    </div>

                                </li>

                                
                                <!-- about -->
                                <li class="w-full">

                                    <div>

                                        <div class="p-8 space-y-4 font-normal text-sm">
            
                                            <div class="md:flex items-center gap-16 justify-between">
                                                <label class="md:w-32"> Titre </label>
                                                <div class="flex-1 max-md:mt-4">
                                                    <input required type="text" placeholder="titre" class=" w-full" name="titre">
                                                </div>
                                            </div>
                                            <div class="md:flex items-start gap-16 justify-between">
                                                <label class="md:w-32"> Description </label>
                                                <div class="flex-1 max-md:mt-4">
                                                    <textarea required class="w-full" rows="4" placeholder="Product Description.." name="description"></textarea>
                                                </div>
                                            </div>
                                            <div class="md:flex items-center gap-16 justify-between">
                                                <label class="md:w-32"> Prix </label>
                                                <div class="flex-1 max-md:mt-4">
                                                    <input required type="number" placeholder="12 XOF" class=" w-full" name="prix">
                                                </div>
                                            </div>
                                            <div class="md:flex items-center gap-16 justify-between">
                                                <label class="md:w-32"> Catégorie </label>
                                                <div class="flex-1 max-md:mt-4">
                                                    <select required class="w-full !border-0 !rounded-md" name="categorie">
                                                        @foreach ($categories as $item)
                                                            <option value="{{$item->id}}">{{$item->nom}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="md:flex items-center gap-16 justify-between">
                                                <label class="md:w-32"> Tags </label>
                                                <div class="flex-1 max-md:mt-4">
                                                    <input type="text" placeholder="Landscape,Arts" class=" w-full" name="tags">
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
                                                <input required id="createProductUrl" type="file" class="hidden" name="image"/>
                                                <ion-icon name="image" class="text-3xl text-teal-600"></ion-icon>
                                                <span class="text-white mt-2">Télécharger l'image </span>
                                            </label>
                    
                                            <img id="createProductImage" src="#" alt="Uploaded Image" accept="image/png, image/jpeg" style="display:none;" class="w-full h-full absolute object-cover">
                    
                                        </div> 

                                    </div>

                                </li> 

                                <!-- settings -->
                                {{-- <li class="w-full !relative">
                                
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

                                </li> --}}
                                    
                                <!-- final steop -->
                                <li class="w-full">
                                    
                                    <div  class="flex justify-center items-center flex-col gap-6 h-full" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 300;repeat:true">

                                        <div class="text-center">
                                            <ion-icon name="sparkles-sharp" class="text-5xl mb-6 text-blue-600 opacity-60 rotate-12"></ion-icon>
                                            <h3 class="text-black font-semibold text-xl dark:text-white"> Presque terminé </h3>
                                        </div>
                                        
                                        <div class="font-medium text-sm">
                                            <div>
                                                <label class="flex justify-center max-w-sm mx-auto text-center">
                                                <input class="rounded mt-1" type="checkbox" checked name="checkbox1" value="3" />
                                                <span class="ml-3"> Je reconnais que ce produit m'appartient et que j'assume la responsabilité de la vente de ce produit.</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="flex justify-center p-6 pt-0">
                                            <button type="button" class="button bg-blue-600 text-white px-10 submit-form-produit"> Partager </button> 
                                        </div>

                                    </div>

                                </li> 


                            </ul>

                            <div class="flex  justify-center py-1.5 border-t relative dark:border-slate-700/60">

                                <button type="button" uk-slideshow-item="previous" class="bg-secondery font-semibold py-1.5 px-3.5 rounded-full text-sm absolute left-4 bottom-3 leading-6 uk-animation-slide-left-small">Avant-premières</button>

                                <ul class="inline-flex flex-wrap justify-center my-5 uk-dotnav uk-slideshow-nav gap-2.5"></ul>

                                <button type="button" uk-slideshow-item="next" class="bg-secondery font-semibold py-1.5 px-3.5 rounded-full text-sm absolute right-4 bottom-3 leading-6 uk-animation-slide-right-small">Suivant</button>

                            </div> 

                        </div>

                    </div>
        
                </div>
                
            </div>
        </form>

    @endisset

@endsection