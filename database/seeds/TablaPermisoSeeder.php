<?php

use App\Models\Permiso;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Permiso::class,20)->create();
        
    }
}
