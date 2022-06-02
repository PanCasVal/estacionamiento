<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
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
                'descripcion'=>'Libre',
            ],
            [
                'descripcion'=>'Ocupado',
            ],
            [
                'descripcion'=>'Cancelado',
            ],
            
        ];
        DB::table('estados')->insert($estado);
    }
}
