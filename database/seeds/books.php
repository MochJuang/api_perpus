<?php

use Illuminate\Database\Seeder;

class books extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = $faker = Faker\Factory::create('id_ID');
        $kode = substr( str_shuffle('1234567890ASADFSKJHASNCM') ,0,5);
        for($i = 1; $i <= 10; $i++){
            for($j = 1; $j <= 10; $j++){
                \App\Book::create(['kode_buku' => $kode ,'id_judul' => $i ]);
            }
        }
    }
}
