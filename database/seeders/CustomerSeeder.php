<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 100; $i++){
            $customer = new Customer;
            //insert Query 
            $customer->name= $faker->name;
            $customer->email= $faker->email;
            $customer->password= $faker->password;
            $customer->country= $faker->country;
            $customer->address= $faker->address;
            $customer->state= $faker->state;
            $customer->dob= $faker->date;
            $customer->save();
        } 
    }
}
