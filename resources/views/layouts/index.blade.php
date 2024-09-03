@extends('layouts.default')

@section('index')

<main id="site__main" class="2xl:ml-[--w-side] xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
    <!-- timeline -->
    <div class="lg:flex 2xl:gap-16 gap-12 max-w-[1065px] mx-auto" id="js-oversized">

        <div class="max-w-[680px] mx-auto">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @include('composants.activity')

            <div class="sm:my-6 my-3 flex items-center justify-between border-t pt-3 dark:border-slate-800">
                <div>
                    <h1 class="text-xl font-semibold text-black">Postes</h1>
                </div>
                <div class="flex items-center gap-2 [&:has(a.uk-invisible)][&*>a]:bg-red-600">
                    <a href="{{ url('/poste') }}" class="text-blue-500 sm:block hidden text-sm">Voir tout</a>
                </div>
            </div>

            <div id="addPost" class="md:max-w-[580px] mx-auto flex-1 xl:space-y-6 space-y-3">

                @foreach ($postes as $item)
                    @empty($item->image1)
                        <!-- post text -->
                        @include('composants.post_text')
                    @endempty

                    @isset($item->image2)
                        <!-- post image with slider -->
                        @include('composants.post_any_image')
                    @else
                        @empty($item->image2)
                            <!-- post image -->
                            @include('composants.post_one_image')
                        @endempty
                    @endisset

                    <!-- show post -->
                    @include('navigations.post_show')
                @endforeach

                <!-- placeholder -->
                <!-- 
                <div class="rounded-xl shadow-sm p-4 space-y-4 bg-slate-200/40 animate-pulse border1 dark:bg-dark2">
                    <div class="flex gap-3">
                        <div class="w-9 h-9 rounded-full bg-slate-300/20"></div>
                        <div class="flex-1 space-y-3">
                            <div class="w-40 h-5 rounded-md bg-slate-300/20"></div>
                            <div class="w-24 h-4 rounded-md bg-slate-300/20"></div>
                        </div>
                        <div class="w-6 h-6 rounded-full bg-slate-300/20"></div>
                    </div>
                    <div class="w-full h-52 rounded-lg bg-slate-300/10 my-3"></div>
                    <div class="flex gap-3">
                        <div class="w-16 h-5 rounded-md bg-slate-300/20"></div>
                        <div class="w-14 h-5 rounded-md bg-slate-300/20"></div>
                        <div class="w-6 h-6 rounded-full bg-slate-300/20 ml-auto"></div>
                        <div class="w-6 h-6 rounded-full bg-slate-300/20"></div>
                    </div>
                </div> 
                -->

            </div>

        </div>

        <!-- sidebar -->
        @include('navigations.sidebar')

    </div>
</main>

@endsection
