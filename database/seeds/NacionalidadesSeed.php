<?php

use Illuminate\Database\Seeder;
use App\Nacionalidad;
class NacionalidadesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paises = ["Argentina","Bolivia","Paraguay","Chile","Colombia","Uruguay"];
        foreach($paises as $pais){
            $nacionalidad = new Nacionalidad();
            $nacionalidad->descripcion=$pais;
            $nacionalidad->save();
        }


    }
}
