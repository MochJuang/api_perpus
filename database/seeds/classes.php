<?php

use Illuminate\Database\Seeder;
use \App\Kelas;
class classes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        for($i = 0; $i < 10; $i++){
            Kelas::create(['kelas' => $i+1 ,'wali_kelas' => $faker->name ]);
        }
    }
}
