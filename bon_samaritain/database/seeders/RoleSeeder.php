<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin','Gerant'];
        foreach ($roles as $role) {
            role::create([
                'type' => $role,
                'created_at' =>now(),
                'updated_at' =>now(),
            
            ]);
        }
    }
}
