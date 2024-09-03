@extends('layouts.default')

@section('index')
<main id="site__main" class="2xl:ml-[--w-side] xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">
    <!-- timeline -->
    <div class="lg:flex 2xl:gap-16 gap-12 max-w-[1065px] mx-auto" id="js-oversized">
        <div class="max-w-[680px] mx-auto">
            <!-- Feed Story -->
            <div class="md:max-w-[580px] mx-auto flex-1 xl:space-y-6 space-y-3" style="width: 1000px; max-width: 80%;">
                @foreach ($postes as $item)
                    <!-- Post with one image -->
                    @empty($item->image2)
                        @include('composants.post_one_image')
                    @endempty

                    <!-- Post with multiple images -->
                    @isset($item->image2)
                        @include('composants.post_any_image')
                    @endisset

                    <!-- Post with only text -->
                    @empty($item->image1)
                        @include('composants.post_text')
                    @endempty

                    <!-- Show post -->
                    @include('navigations.post_show')
                @endforeach

                <!-- Ajouter les liens de pagination ici -->
                <!-- <div class="pagination-container mt-4">
                    {{ $postes->links('pagination::bootstrap-5') }}
                </div> -->
                <div class="pagination-container mt-4">
                    {{ $postes->links() }}
                </div>
                
            </div>
        </div>

        <!-- Sidebar -->
        @include('navigations.sidebar')
    </div>
</main>
@endsection
