<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = "market";
        $user = Auth::user();
 
        return view('pages.boutique', compact('user', 'page'));
    
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
        $user = Auth::user();
        $activite = Boutique::where('id', $id)->firstOrFail();

        return view('pages.boutique_detail', compact('user'));
    
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
