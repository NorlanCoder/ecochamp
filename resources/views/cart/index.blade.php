@extends("layouts.default")
@section("index")

<div id="wrapper">
  <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">

          <div class="flex-1">
            <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="card">        
                    <div class="card-content">
                      <div id="wrapper">          
                        @if($total)
                          <span class="card-title">Mon panier</span>            
                          @foreach ($content as $item)
                            <hr><br>
                            <div class="row">
                              <form action="{{ route('panier.update', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="col m6 s12">{{ $item->name->nom }}</div>
                                <div class="col m3 s12"><strong>{{ number_format($item->quantity * $item->price, 2, ',', ' ') }} XOF</strong></div>
                                <div class="col m2 s12">
                                  <input name="quantity" type="number" style="height: 2rem" min="1" value="{{ $item->quantity }}">
                                </div>
                              </form>
                              <form action="{{ route('panier.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="col m1 s12"><i class="material-icons deleteItem" style="cursor: pointer">delete</i></div>
                              </form>              
                            </div>
                          @endforeach
                          <hr><br>
                          <div class="row" style="background-color: lightgrey">
                            <div class="col s6">
                              Total TTC (hors livraison)
                            </div>
                            <div class="col s6">
                              <strong>{{ number_format($total, 2, ',', ' ') }} €</strong>
                            </div>
                          </div>
                        @else
                        <span class="card-title center-align">Le panier est vide</span>
                        @endif
                      </div>        
                      <div id="loader" class="hide">
                        <div class="loader"></div>
                      </div>
                    </div>
                    <div id="action" class="card-action">
                      <p>
                        <a  href="{{ url('/market') }}">Continuer mes achats</a>
                        @if($total)
                          <a href="#">Commander</a>
                        @endif
                      </p>
                    </div>
                  </div>
                </div>
              </div>

        </div>
      </div>

    </div>

  </main>

</div>

@endsection