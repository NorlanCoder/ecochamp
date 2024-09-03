@extends("layouts.default")

@section("index")
<div id="wrapper">

    <!-- main contents -->
    <main id="site__main" class="2xl:ml-[--w-side] xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

        <div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto">

            <div class="page-heading">
                <h1 class="page-title">Activités</h1>
                <nav class="nav__underline">
                    <ul uk-tab class="group" uk-switcher="connect: #ttabs; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                        <li><a href="#">Suggestions</a></li>
                        <li><a href="#">Populaire</a></li>
                        <li><a href="#">Mes événements</a></li>
                    </ul>
                </nav>
            </div>

            <!-- group list tabs -->
            <div class="uk-switcher" id="ttabs">
                <!-- card layout 1 -->
                @foreach (['activities_sugestion', 'activities_pop', 'activities_my'] as $activitiesType)
                    <div class="relative" tabindex="-1" uk-slider="finite:true">
                        <div class="uk-slider-container pb-1">
                            <ul class="uk-slider-items grid-small">
                                @foreach ($$activitiesType as $item)
                                    <li class="lg:w-1/4 sm:w-1/3 w-1/2">
                                        <div class="card">
                                            <a href="{{ url('/activite', $item->id) }}">
                                                <div class="card-media h-32">
                                                    <img src="{{ asset(Storage::url($item->couverture)) }}" alt="">
                                                    <div class="card-overly"></div>
                                                </div>
                                            </a>
                                            <div class="card-body">
                                                <p class="text-xs font-medium text-blue-600 mb-1">{{ date('l j F Y', strtotime($item->debut)) }}</p>
                                                <a href="{{ url('/activite', $item->id) }}"><h4 class="card-title text-sm">{{ $item->non }}</h4></a>
                                                <p class="card-text text-black mt-2">{{ $item->localite }}</p>
                                                <div class="card-list-info text-xs mt-1">
                                                    <div>{{ count($item->activityJoins) }} Intéressé</div>
                                                    <div class="md:block hidden">·</div>
                                                    <div>{{ count($item->activityJoins->where('participation', '!=', '')) }} participant</div>
                                                </div>
                                                <div class="flex gap-2">
                                                    @if (!in_array($item->id, $joins))
                                                        <form action="{{ url('/activite/join') }}" method="POST" id="form-data-join-activite{{ $item->id }}">
                                                            @csrf
                                                            <input type="hidden" name="activite_id" value="{{ $item->id }}"/>
                                                            <button type="button" class="button bg-primary text-white flex-1 submit-form" id="create_new">Intéressé</button>
                                                        </form>
                                                    @else
                                                        <a href="{{ url('/activite', $item->id) }}">
                                                            <button type="button" class="button bg-primary text-white flex-1">Voir</button>
                                                        </a>
                                                    @endif
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/activity') }}" target="_blank">
                                                        <button type="button" class="button bg-secondery !w-auto">
                                                            <ion-icon name="arrow-redo" class="text-lg"></ion-icon>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- slide nav icons -->
                        <a class="nav-prev !top-20" href="#" uk-slider-item="previous">
                            <ion-icon name="chevron-back" class="text-2xl"></ion-icon>
                        </a>
                        <a class="nav-next !top-20" href="#" uk-slider-item="next">
                            <ion-icon name="chevron-forward" class="text-2xl"></ion-icon>
                        </a>
                    </div>
                @endforeach

            </div>

            @if(isset($activities_evenement[0]))
                <div class="sm:my-6 my-3 flex items-center justify-between md:mt-10">
                    <div>
                        <h2 class="text-xl font-semibold">Listes que vous pourriez aimer</h2>
                    </div>
                </div>

                <!-- listing slider -->
                <div class="mt-4" tabindex="-1" uk-slider="finite:true">
                    <div class="uk-slider-container pb-1">
                        <ul class="uk-slider-items grid-small">
                            @foreach ($activities_evenement as $item)
                                <li class="md:w-1/5 sm:w-1/3 w-1/2">
                                    <a href="#">
                                        <div class="relative rounded-lg overflow-hidden">
                                            <img src="{{ asset(Storage::url($item->couverture)) }}" alt="" class="h-36 w-full object-cover">
                                            <div class="w-full bottom-0 absolute left-0 bg-gradient-to-t from-black/60 pt-10">
                                                <div class="text-white p-5">
                                                    <div class="text-sm font-light">{{ $item->localite }}</div>
                                                    <div class="text-lg leading-3 mt-1.5">{{ $item->nom }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- slide nav icons -->
                    <a class="nav-prev" href="#" uk-slider-item="previous">
                        <ion-icon name="chevron-back" class="text-2xl"></ion-icon>
                    </a>
                    <a class="nav-next" href="#" uk-slider-item="next">
                        <ion-icon name="chevron-forward" class="text-2xl"></ion-icon>
                    </a>
                </div>
            @endif

            @if($activities_campagne)
                <div class="flex items-center justify-between text-black dark:text-white py-3 mt-6">
                    <h3 class="text-xl font-semibold">Activités à venir</h3>
                </div>

                <!-- event grid -->
                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-2.5 mt-4">
                    @foreach ($activities_campagne as $item)
                        <div class="card">
                            <a href="{{ url('/activite', $item->id) }}">
                                <div class="card-media h-32">
                                    <img src="{{ asset(Storage::url($item->couverture)) }}" alt="">
                                    <div class="card-overly"></div>
                                </div>
                            </a>
                            <div class="card-body">
                                <p class="text-xs font-medium text-blue-600 mb-1">{{ date('l j F Y', strtotime($item->debut)) }}</p>
                                <a href="{{ url('/activite', $item->id) }}">
                                    <h4 class="card-title text-sm">{{ $item->non }}</h4>
                                </a>
                                <p class="card-text text-black mt-2">{{ $item->localite }}</p>
                                <div class="card-list-info text-xs mt-1">
                                    <div>{{ count($item->activityJoins) }} Intéressé</div>
                                    <div class="md:block hidden">·</div>
                                    <div>{{ count($item->activityJoins->where('participation', '!=', '')) }} participant</div>
                                </div>
                                <div class="flex gap-2">
                                    @if (!in_array($item->id, $joins))
                                        <form action="{{ url('/activite/join') }}" method="POST" id="form-data-join-activite{{ $item->id }}">
                                            @csrf
                                            <input type="hidden" name="activite_id" value="{{ $item->id }}"/>
                                            <button type="button" class="button bg-primary text-white flex-1 submit-form" id="create_new">Intéressé</button>
                                        </form>
                                    @else
                                        <a href="{{ url('/activite', $item->id) }}">
                                            <button type="button" class="button bg-primary text-white flex-1">Voir</button>
                                        </a>
                                    @endif
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/activity') }}" target="_blank">
                                        <button type="button" class="button bg-secondery !w-auto">
                                            <ion-icon name="arrow-redo" class="text-lg"></ion-icon>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </main>

</div>
@endsection
