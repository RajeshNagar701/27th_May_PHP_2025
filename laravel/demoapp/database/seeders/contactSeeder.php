<?php

namespace Database\Seeders;

use App\Models\contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as faker;

class contactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder
        /*
        $data=new contact();
        $data->name="Nisha";  //$_REQUEST['name'];
        $data->email="nisha@gmail.com";
        $data->comment="Addrees plz";
        $data->save();
        */

        $faker = Faker::create();
        for ($i = 1; $i <= 50; $i++) 
        {
            $data = new contact();
            $data->name = $faker->name;  //$_REQUEST['name'];
            $data->email = $faker->email; 
            $data->comment = $faker->realText; 
            $data->save();
        }
    }
}
