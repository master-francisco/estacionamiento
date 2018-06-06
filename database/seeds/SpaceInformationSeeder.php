<?php

use Illuminate\Database\Seeder;

class SpaceInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spaces_information')->insert([
            'hora_entrada'=>'9:45',
            'hora_salida'=>'10:30',
            'tiempo'=>'20min',
            'status'=>'apartado',
            'space_id'=>1,
        ]);
        }
}
