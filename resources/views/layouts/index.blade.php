@extends("layouts.default")
@section("index")
    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

        <!-- timeline -->
        <div class="lg:flex 2xl:gap-16 gap-12 max-w-[1065px] mx-auto"  id="js-oversized">

            <div class="max-w-[680px] mx-auto">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @include('composants.activity')

                <!-- stories -->
                {{-- <div class="mb-8">

                    <h3 class="font-extrabold text-2xl  text-black dark:text-white hidden"> Stories</h3>

                    <div class="relative" tabindex="-1" uk-slider="auto play: true;finite: true" uk-lightbox="">

                        <div class="py-5 uk-slider-container">
                        
                            <ul class="uk-slider-items w-[calc(100%+14px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
                                <li class="md:pr-3" uk-scrollspy-class="uk-animation-fade">
                                    <div class="md:w-16 md:h-16 w-12 h-12 rounded-full relative border-2 border-dashed grid place-items-center bg-slate-200 border-slate-300 dark:border-slate-700 dark:bg-dark2 shrink-0"
                                        uk-toggle="target: #create-story">
                                        <ion-icon name="camera" class="text-2xl"></ion-icon>
                                    </div>
                                </li>
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-1.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-2.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li>
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-2.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-3.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li> 
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-4.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-5.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li>
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-5.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-6.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li>
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-1.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-7.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li>
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-1.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-2.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li>
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-2.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-3.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li> 
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-4.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-5.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li>
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-5.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-6.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li>
                                <li class="md:pr-3 pr-2 hover:scale-[1.15] hover:-rotate-2 duration-300">
                                    <a href={{asset("images/avatars/avatar-lg-1.jpg")}} data-caption="Caption 1">
                                        <div class="md:w-16 md:h-16 w-12 h-12 relative md:border-4 border-2 shadow border-white rounded-full overflow-hidden dark:border-slate-700">
                                            <img src={{asset("images/avatars/avatar-7.jpg")}} alt="" class="absolute w-full h-full object-cover">
                                        </div>
                                    </a>
                                </li>
                                <li class="md:pr-3 pr-2">
                                    <div class="md:w-16 md:h-16 w-12 h-12 bg-slate-200/60 rounded-full dark:bg-dark2 animate-pulse"></div>
                                </li>
                            </ul>
                    
                        </div>
                    
                        <div class="max-md:hidden">

                            <button type="button" class="absolute -translate-y-1/2 bg-white shadow rounded-full top-1/2 -left-3.5 grid w-8 h-8 place-items-center dark:bg-dark3" uk-slider-item="previous"> <ion-icon name="chevron-back" class="text-2xl"></ion-icon></button>
                            <button type="button" class="absolute -right-2 -translate-y-1/2 bg-white shadow rounded-full top-1/2 grid w-8 h-8 place-items-center dark:bg-dark3" uk-slider-item="next"> <ion-icon name="chevron-forward" class="text-2xl"></ion-icon> </button>

                        </div>


                    </div>

                </div> --}}
                <!-- feed story -->

                <div class="sm:my-6 my-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                    <div>
                        <h1  class="text-xl font-semibold text-black"> Postes </h1>
                    </div>
                    <div class="flex items-center gap-2 [&:has(a.uk-invisible)][&*>a]:bg-red-600">
                        <a href="{{url('/poste')}}" class="text-blue-500 sm:block hidden text-sm"> Voir tous </a>
                    </div>
                </div>

                <div class="md:max-w-[580px] mx-auto flex-1 xl:space-y-6 space-y-3">

                    <!-- add story -->
                    {{-- <div class="bg-white rounded-xl shadow-sm md:p-4 p-2 space-y-4 text-sm font-medium border1 dark:bg-dark2">

                        <div class="flex items-center md:gap-3 gap-1">
                            <div class="flex-1 bg-slate-100 hover:bg-opacity-80 transition-all rounded-lg cursor-pointer dark:bg-dark3" uk-toggle="target: #create-status"> 
                                <div class="py-2.5 text-center dark:text-white"> What do you have in mind? </div>
                            </div>
                            <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-xl transition-all bg-pink-100/60 hover:bg-pink-100 dark:bg-white/10 dark:hover:bg-white/20" uk-toggle="target: #create-status">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-pink-600 fill-pink-200/70" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M15 8h.01" />
                                    <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                                    <path d="M3.5 15.5l4.5 -4.5c.928 -.893 2.072 -.893 3 0l5 5" />
                                    <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l2.5 2.5" />
                                </svg>
                            </div>
                            <div class="cursor-pointer hover:bg-opacity-80 p-1 px-1.5 rounded-xl transition-all bg-sky-100/60 hover:bg-sky-100 dark:bg-white/10 dark:hover:bg-white/20" uk-toggle="target: #create-status">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 stroke-sky-600 fill-sky-200/70 " viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M15 10l4.553 -2.276a1 1 0 0 1 1.447 .894v6.764a1 1 0 0 1 -1.447 .894l-4.553 -2.276v-4z" />
                                    <path d="M3 6m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />
                                </svg>
                            </div> 
                        </div>
                        
                    </div> --}}

                    @foreach ($postes as $item)
                    
                        @empty($item->image2)

                            <!--  post image-->
                            @include('composants.post_one_image')

                        @endempty

                        @isset($item->image2)

                            <!--  post image with slider-->
                            @include('composants.post_any_image')

                        @endisset

                        @empty($item->image1)

                            <!-- post text-->
                            @include('composants.post_text')

                        @endempty

                        <!-- show post -->
                        @include('navigations.post_show')
                        
                    @endforeach

                    <!-- placeholder -->
                    <div class="rounded-xl shadow-sm p-4 space-y-4 bg-slate-200/40 animate-pulse border1 dark:bg-dark2">

                        <div class="flex gap-3">
                            <div class="w-9 h-9 rounded-full bg-slate-300/20"></div>
                            <div class="flex-1 space-y-3">
                                <div class="w-40 h-5 rounded-md bg-slate-300/20"></div>
                                <div class="w-24 h-4 rounded-md bg-slate-300/20"></div>
                            </div>
                            <div class="w-6 h-6 rounded-full bg-slate-300/20"></div>
                        </div>

                        <div class="w-full h-52 rounded-lg bg-slate-300/10 my-3"> </div>

                        <div class="flex gap-3">

                            <div class="w-16 h-5 rounded-md bg-slate-300/20"></div>

                            <div class="w-14 h-5 rounded-md bg-slate-300/20"></div>

                            <div class="w-6 h-6 rounded-full bg-slate-300/20 ml-auto"></div>
                            <div class="w-6 h-6 rounded-full bg-slate-300/20  "></div>
                        </div>

                    </div>

                </div>

            </div>

            <!-- sidebar -->
            @include('navigations.sidebar')
            
        </div>
        
    </main>

@endsection