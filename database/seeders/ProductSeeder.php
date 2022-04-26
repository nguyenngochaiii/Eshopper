<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\User;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        DB::table('products')->truncate(); 
        $data = [];

        $users = User::all()->pluck('id');
        
        for ($i=0; $i < 100; $i++) { 
             $data[] = [
                'user_id' => $users->random(),
                'name'=> $faker->name,
                'code'=> Str::random(3),
                'price'=> rand(100,500),
                'quantity'=> rand(1,200),
                'image'=> 'product' . rand(1,12),
             ];
        }

        DB::table('products')->insert($data);
    }
}