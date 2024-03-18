<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = "panier";
        $user = Auth::user();
        $content = CartFacade::getContent();
        $total = CartFacade::getTotal();
        return view('cart.index', compact('content', 'total', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Produit::findOrFail($request->id);
        $validated = $request->validate([
            'id' => 'required',
            'quantity' => 'required',
        ]);
        // dd($request);
        CartFacade::add(
            [
                'id' => $product->id,
                'name' => $product->name,
                'price' => intval($product->price),
                'quantity' => $request->quantity,
                'attributes' => [],
                'conditions' => [],
                'associatedModel' => $product,
            ]
        );
        return redirect()->back()->with('cart', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        CartFacade::update($id, [
            'quantity' => ['relative' => false, 'value' => $request->quantity],
        ]);
        return redirect(route('panier.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CartFacade::remove($id);
        return redirect(route('panier.index'));
    }
}
