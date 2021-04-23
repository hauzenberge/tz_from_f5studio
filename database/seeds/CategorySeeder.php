<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Categoty::create([
        	'name' => 'Lorem Ipsum',
        ]);
        App\Categoty::create([
            'name' => 'Недвижимость',
        ]);
        App\Categoty::create([
            'name' => 'Транспорт',
        ]);
        App\Categoty::create([
            'name' => 'Бытовая техника',
        ]);
    }
}
