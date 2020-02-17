<?php

use Illuminate\Database\Seeder;
use App\Todo;

use Faker\Factory as Faker;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Todo::insert([
            'title' => $faker->name,
            'body' =>  $faker->text,
            'status' => $faker->boolean ,
        ]);
    }
}
