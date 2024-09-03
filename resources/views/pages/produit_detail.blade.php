@extends("layouts.default")
@section("index")

<div id="wrapper">

    <!-- main contents -->
    <main id="site__main" class="2xl:ml-[--w-side] xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

        @if(session()->has('cart'))
        <div class="p-4 mb-4 text-sm text-gray-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <span class="font-medium text-green-700 text-xl">Produit ajouté au panier avec succès</span><br>
            <p>Il y a {{ $cartCount }} @if($cartCount > 1) articles @else article @endif dans votre panier pour un total de <strong>{{ number_format($cartTotal, 2, ',', ' ') }} {{$produit->devise}} TTC</strong> hors frais de port.</p>
            <p><em>Vous avez la possibilité de venir chercher vos produits sur place, dans ce cas vous cocherez la case correspondante lors de la confirmation de votre commande et aucun frais de port ne vous sera facturé.</em></p>
        </div>
        @endif

        <div class="max-w-[1065px] mx-auto">

            <!-- product preview -->
            <div class="flex max-lg:flex-col 2xl:gap-6 gap-6 md:p-4 rounded-lg box">

                <!-- product image preview -->
                <div class="lg:max-w-[680px] w-full">

                    <div class="relative" uk-slideshow="animation: push; ratio: 7:5">

                        <ul class="uk-slideshow-items overflow-hidden rounded-xl" uk-lightbox="animation: fade">
                            <li class="w-full">
                                <a class="inline" href="{{ asset(Storage::url($produit->image)) }}" data-caption="Caption 1">
                                    <img src="{{ asset(Storage::url($produit->image)) }}" alt="Product Image" class="w-full h-full absolute object-cover">
                                </a>
                            </li>
                        </ul>

                        <!-- slide nav icons -->
                        <div class="max-md:hidden">
                            <a class="nav-prev m-6" href="#" uk-slideshow-item="previous"> 
                                <ion-icon name="chevron-back" class="text-2xl"></ion-icon> 
                            </a>
                            <a class="nav-next m-6" href="#" uk-slideshow-item="next"> 
                                <ion-icon name="chevron-forward" class="text-2xl"></ion-icon>
                            </a>
                        </div>

                        <ul class="flex justify-center gap-4 py-4 absolute w-full bottom-0">
                            <li uk-slideshow-item="0">
                                <a href="#"> 
                                    <img src="{{ asset(Storage::url($produit->image)) }}" alt="Product Thumbnail" class="w-16 h-12 rounded"> 
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>

                <!-- Product details form -->
                <div class="flex-1 space-y-8">
                    <form method="POST" action="{{ route('panier.store') }}">
                        @csrf
                        <div class="md:space-y-5 space-y-3 p-5 max-md:pt-0 md:pr-2">

                            <div>
                                <h3 class="text-lg font-semibold"> {{$produit->nom}} </h3>
                                <p class="text-xs mt-2 font-light text-gray-900 dark:text-white"> Republiée le {{ date('j F Y', strtotime($produit->created_at)) }}</p>
                            </div>

                            <h1 class="text-2xl font-semibold"> {{$produit->price}} {{$produit->devise}} </h1>

                            <div>
                                <h4 class="text-sm font-medium"> Details </h4>
                                <div class="grid grid-cols-2 gap-2 mt-2 text-sm">
                                    <div> Status </div>
                                    <div class="text-teal-600"> En stock </div>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="{{ $produit->id }}">
                            <input type="hidden" name="quantity" type="number" value="1" min="1">
                            <div class="flex gap-2 py-2">
                                <button class="button bg-primary text-white flex-1 py-1" type="submit" id="addcart">Ajouter au panier</button>
                            </div>
                            <p class="text-sm text-black font-light dark:text-white"> {{$produit->description}} </p>

                            <div>
                                <h4 class="text-sm font-medium"> Vendeur </h4>
                                <div class="flex gap-3 py-2 text-sm font-medium mt-2">
                                    <a href="{{url('/profile', $produit->user->id)}}">
                                        <img src="{{ empty($produit->user->profile) ? asset('/images/avatars/avatar.png') : asset(Storage::url($produit->user->profile)) }}" alt="Vendeur Image" class="w-9 h-9 rounded-full">
                                    </a>
                                    <div class="flex-1">
                                        <a href="{{url('/profile', $produit->user->id)}}">
                                            <h4 class="text-black dark:text-white"> {{$produit->user->lastname}} {{$produit->user->firstname}} </h4>
                                        </a>
                                        <div class="text-xs text-gray-500 dark:text-white/80"> 2 hours ago </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

        <!-- related items title -->
        <div class="sm:my-6 my-3 flex items-center justify-between">
            <div>
                <h2 class="text-xl font-semibold text-black"> Autres articles </h2>
                <p class="font-normal text-sm text-gray-500 leading-6 hidden"> Trouvez un groupe en parcourant les catégories supérieures. </p>
            </div>
            <a href="{{url('/market')}}" class="text-blue-500 sm:block hidden text-sm"> Voir tout </a>
        </div>

        <!-- related items slider -->
        <div class="relative" tabindex="-1" uk-slider="auto play: true; finite: true">

            <div class="uk-slider-container pb-1">

                <ul class="uk-slider-items w-[calc(100%+10px)]" uk-scrollspy="target: > li; cls: uk-animation-scale-up; delay: 20;repeat:true">
                    @foreach ($produits as $item)
                    <li class="lg:w-1/5 md:w-1/4 sm:w-1/3 w-1/2 pr-3">
                        <div class="card uk-transition-toggle">
                            <a href="{{url('/produit', $item->id)}}">
                                <div class="card-media sm:aspect-[2/1.7] h-36">
                                    <img src="{{ asset(Storage::url($item->image)) }}" alt="Related Item Image">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body flex justify-between">
                                <div class="flex-1">
                                    <a href="{{url('/produit', $item->id)}}">
                                        <p class="card-text text-black font-medium line-clamp-1"> {{$item->categorie->nom}} </p>
                                    </a>
                                    <div class="text-xs line-clamp-1 mt-1"> {{$item->nom}} </div>
                                </div>
                                <h4 class="card-title"> {{$item->price}} {{$item->devise}} </h4>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>

            <!-- slide nav icons -->
            <a class="nav-prev !bottom-1/2 !top-auto" href="#" uk-slider-item="previous"> 
                <ion-icon name="chevron-back" class="text-2xl"></ion-icon> 
            </a>
            <a class="nav-next !bottom-1/2 !top-auto" href="#" uk-slider-item="next"> 
                <ion-icon name="chevron-forward" class="text-2xl"></ion-icon>
            </a>

        </div>

    </main>

</div>

@endsection
