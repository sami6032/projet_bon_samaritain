<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Friandises','Produit_laitiers','Charcuteries','Vin_champagnes',];
        foreach ($categories as $category) {
            category::create([
                'nom' => $category,
                'created_at' =>now(),
                'updated_at' =>now(),
            
            ]);
    }
    }
}
