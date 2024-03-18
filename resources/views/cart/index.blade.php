@extends("layouts.default")
@section("index")

<div id="wrapper">
  <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] p-2.5 h-[calc(100vh-var(--m-top))] mt-[--m-top]">

    <div class="lg:flex 2xl:gap-12 gap-10 2xl:max-w-[1220px] max-w-[1065px] mx-auto" id="js-oversized">


      <div class="flex-1">
        <div class="container">
          <div class="row">



            <div id="">
              @if($total)
              <div class="title flex items-center">
                <ion-icon name="arrow-back-outline" class="text-2xl mr-2"></ion-icon>
                <span class="card-title">Panier</span>
              </div>



              <div class="relative overflow-x-auto">
                <table class="w-full border-separate border-spacing-y-2 text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-900 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th scope="col" class="  px-6 py-3 rounded-s-lg">
                        Produits
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Description
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Quantité
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Prix unitaire
                      </th>
                      <th scope="col" class="px-6 py-3 rounded-e-lg">
                        Total
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($content as $item)
                    <tr class="bg-gray-100  even:dark:bg-gray-800 border-b dark:border-gray-700">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        <img src={{asset("images/activiste/eco3.jpg")}} alt="" class="object-cover w-full h-full">
                      </th>
                      <td class="px-6 py-4 text-justify">
                        {{ $item->name->description }}
                      </td>
                      <td class="px-6 py-4">
                        {{ $item->price }} XOF
                      </td>
                      <td class="px-6 py-4">
                        <input type="number" class="w-20 bg-gray-600" min=0 value="{{ $item->quantity }}">

                        <button type="button" class="flex m-2 text-center items-center">
                          <ion-icon class="inline-block text-xl" name="trash"></ion-icon>
                          <h1 class="inline-block ml-3">Delete</h1>
                        </button>

                      </td>
                      <td class="px-6 py-4">
                        {{ number_format($item->quantity * $item->price, 2, ',', ' ') }} XOF
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>
                <h1 class="text-center mt-12">Vous avez ajouté @foreach($content as $item) {{ $item->quantity }} {{ $item->name->nom }}@if (!$loop->last), @endif
                  @endforeach</h1>
              </div>

              <div class="total-container">
                <div class="mt-12">
                  <h1 class="font-bold ">Le cout total: $ {{ number_format($total, 2, ',', ' ') }}</h1> </strong>
>>>>>>> 7ec1fe6 (fix)
                </div>
              </div>

        </div>
      </div>

    </div>

  </main>

</div>

@endsection