<?php

use Illuminate\Database\Seeder;

class juduls extends Seeder
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
            \App\Judul::create(['judul' => $faker->name  ,'pengarang    ' => $faker->name ]);
        }
    }
}
