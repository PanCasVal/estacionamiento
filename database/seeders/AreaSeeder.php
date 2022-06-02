<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;
use Illuminate\Support\Facades\DB;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = [

            [
                'nombre_area'=>'Administracion',
            ],
            [
                'nombre_area'=>'Arquitectura',
            ],
            
        ];
        DB::table('areas')->insert($area);
    }
}
