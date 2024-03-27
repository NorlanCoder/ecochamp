<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\FactureItem;
use App\Models\User;
use App\Notifications\PanierPaid;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Auth;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $transaction_id = $_GET['transaction_id'];
        $public_key = "2ee121605d3511eea596e938ae1c409a";
        $private_key = "";
        $secret = "";
        // dd($transaction_id);

        // $kkiapay = new \Kkiapay\Kkiapay($public_key,
        //                         $private_key, 
        //                         $secret, 
        //                         $sandbox = true);
        // $kkiapay->verifyTransaction($transaction_id);
        // dd($transaction_id);
        $contents = CartFacade::getContent();
        $total = CartFacade::getTotal();
        dd($total);
        $facture = Facture::create([
            'facture_number' => $transaction_id,
            'prix_tt' => $total,
            'prix_tva' => $total,
        ]);
        dd($facture);
        foreach ($contents as $content){
            $factureItem[] = FactureItem::create([
                'name' => $content->name->nom,
                'prix' => intval($content->name->price),
                'prix_tva' => intval($content->name->price) * 100 / 18,
                'tva' => 18,
                'quantity' => $content->quantity,
                'facture_id' => $facture->id
            ]);
            CartFacade::remove($content->id);
        }
        // $user = User::where('id', 1)->first();
        // $user->notify(new PanierPaid($facture));

        $facture = Facture::where('facture_number', $transaction_id)->first();
        $pdf = Pdf::loadView('facture.index', ['facture' => $facture]);
        return $pdf->stream();
        // return $pdf->download('facture');

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $facture = Facture::where('id', $id)->first();
        $pdf = Pdf::loadView('facture.index', ['facture' => $facture]);
        return $pdf->stream();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
