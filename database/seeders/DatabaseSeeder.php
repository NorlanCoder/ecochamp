<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categorie;
use App\Models\Tag;
use App\Models\typeActivite;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(15)->create();
        \App\Models\Post::factory(15)->create();
        \App\Models\Activite::factory(15)->create();
        \App\Models\Alert::factory(15)->create();
        

        $type_activity = array(
            "Campagne",
            "Evénement",
            "Projet",
        );
        foreach($type_activity as $type){
            typeActivite::create([
                'nom' => $type,
            ]);
        }
        $type_alert = array(
            "Campagne",
            "Evénement",
            "Projet",
        );
        foreach($type_alert as $type){
            typeActivite::create([
                'nom' => $type,
            ]);
        }
        $zones = array(
            "Cotonou",
            "Abomey-Calavi",
            "Porto-novo",
            "Parakou",
            "Bohicon",
            "Djougou",
            "Abomey",
            "Adjohoun",
        );

        foreach($zones as $zone){
            typeActivite::create([
                'nom' => $zone,
            ]);
        }
        $categories = array(
            "Electronic",
            "Life style",
            "Building",
        );
        foreach($categories as $type){
            Categorie::create([
                'nom' => $type,
            ]);
        }

        $tags = array(
            "Environnement",
            "Vie",
            "Pollution",
        );
        foreach($tags as $type){
            Tag::create([
                'nom' => $type,
            ]);
        }

        \App\Models\Produit::factory(15)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\User::factory(10)->create();
    }
}
