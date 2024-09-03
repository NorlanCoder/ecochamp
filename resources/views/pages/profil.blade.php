@extends("layouts.default")
@section("index")

<!-- main contents -->
<main id="site__main" class="2xl:ml-[--w-side] xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="max-w-[1065px] mx-auto">

        <!-- Cover  -->
        <div class="bg-white shadow lg:rounded-b-2xl lg:-mt-10 dark:bg-dark2">

            <!-- cover -->
            <div class="relative overflow-hidden w-full lg:h-60 h-40">
                @if(empty($user_aut->couverture))
                    <img src="{{ asset('images/demos/beams.jpg') }}" alt="Cover Image" class="h-full w-full object-cover inset-0"> 
                @else
                    <img src="{{ asset(Storage::url($user_aut->couverture)) }}" alt="Cover Image" class="h-full w-full object-cover inset-0"> 
                @endif

                <!-- overlay -->
                <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10 z-10"></div>

                <div class="absolute bottom-0 right-0 m-4 z-20">
                    <div class="flex items-center gap-3">
                        @if($user && $user->id == $user_aut->id)
                            <a href="{{ url('/parametre') }}">
                                <button class="button bg-black/10 text-white flex items-center gap-2 backdrop-blur-small">Editer</button>
                            </a>
                        @endif
                    </div>
                </div>

            </div>

            <div class="lg:px-10 md:p-5 p-3">

                <div class="flex flex-col justify-center -mt-20">

                    <div class="relative h-20 w-20 mb-4 z-10">
                        <div class="relative overflow-hidden rounded-full md:border-[2px] border-gray-100 shrink-0 dark:border-slate-900 shadow">
                            @if(empty($user_aut->profile))
                                <img src="{{ asset('/images/avatars/avatar.png') }}" alt="Profile Image" class="h-full w-full object-cover inset-0"> 
                            @else
                                <img src="{{ asset(Storage::url($user_aut->profile)) }}" alt="Profile Image" class="h-full w-full object-cover inset-0"> 
                            @endif
                        </div>
                    </div>

                    <div class="flex lg:items-center justify-between max-md:flex-col max-md:gap-3">

                        <div class="flex-1"> 
                            <h3 class="md:text-2xl text-lg font-bold text-black dark:text-white">{{ $user_aut->lastname }} {{ $user_aut->firstname }}</h3>
                            <p class="font-normal text-gray-500 mt-2 flex gap-2 dark:text-white/80">
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="flex items-center justify-between border-t border-gray-100 px-2 dark:border-slate-700">
                <!-- Additional content can go here -->
            </div>

        </div>

        <div class="flex 2xl:gap-12 gap-10 mt-8 max-lg:flex-col" id="js-oversized">

            <!-- feed story -->
            <div class="flex-1 xl:space-y-6 space-y-3">
                
                <!--  post image-->
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
                    <!-- Placeholder content -->
                </div>
            </div>

            <div class="lg:w-[400px]"> 

                <div class="lg:space-y-4 lg:pb-8 max-lg:grid sm:grid-cols-2 max-lg:gap-6" uk-sticky="media: 1024; end: #js-oversized; offset: 80">

                    <!-- User Info Section -->
                    <div class="box p-5 px-6">
                        <div class="flex items-ce justify-between text-black dark:text-white">
                            <h3 class="font-bold text-lg">Intro</h3>
                            @if($user && $user->id == $user_aut->id)
                                <a href="{{ url('/parametre') }}" class="text-sm text-blue-500">Editer</a>
                            @endif
                        </div>

                        <!-- Other Info -->
                        <ul class="text-gray-700 space-y-4 mt-4 text-sm dark:text-white/80">
                            <!-- List items -->
                        </ul>
                    </div>

                    <!-- Additional content for the side section can go here -->
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
