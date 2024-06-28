<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {      
            $faker=Faker::create();

            for($i=0;$i<200;$i++){
                $customer = new Customer();
                $customer->name=$faker->name;
                $customer->email=$faker->email;
                $customer->country=$faker->country;
                $customer->state=$faker->state;
                $customer->adress=$faker->address;
                $customer->gender=$faker->randomElement(['male', 'female']);
                $customer->dob=$faker->date;
                $customer->password="123456";
                $customer->save();
            }
            

        
        // $customer->name='rajesh patel';
        // $customer->email='rajpatel@gmail.com';
        // $customer->country='amr';
        // $customer->state='bas';
        // $customer->adress='cpe';
        // $customer->gender='male';
        // $customer->dob=now();
        // $customer->password="123456";
        // $customer->save();
 
    }
}
