<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutasSeeder extends Seeder
{
    public function run()
    {
        for ($i=0;$i<=50;$i++){
            DB::table('frutas')->insert([
                'nombre'=>'Cereza'.$i,
                'descripcion'=>'Descripcion de la fruta'.$i,
                'precio'=>$i,
                'fecha'=>null,
            ]);
        }
        $this->command->info('La tabla ha sido rellenada');
    }

}
