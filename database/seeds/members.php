<?php

use Illuminate\Database\Seeder;

class members extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = $faker = Faker\Factory::create('id_ID');
        for($i = 1; $i <= 10; $i++){
            for($j = 1; $j <= 10; $j++){
                \App\Member::create(['nama' => $faker->name ,'id_kelas' => $i ]);
            }

        }

    }
}
