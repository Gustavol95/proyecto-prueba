<?php

use Illuminate\Database\Seeder;

class CamposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Models\Campo::class, 100)->create();

    }
}
