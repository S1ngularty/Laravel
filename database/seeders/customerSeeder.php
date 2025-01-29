<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i= 0; $i <50;$i++){
            $customer = new Customer();
            $customer->fname=$faker->firstName;
            $customer->lname=$faker->lastName;
            $customer->age=$faker->numberBetween(18,100);
            $customer->city=$faker->city;
            $customer->save();  
        }
    }
}
