<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //CREATE THE DEFAULT CATEGORIES

        if(!\DB::table('categories')->find(1)){

            \DB::table('categories')->insert(array (
                0 =>
                    array (
                        'id' => 1,
                        'name' => 'Male'
                    ),
                1 =>
                    array (
                        'id' => 2,
                        'name' => 'Female'
                    ),
                2 =>
                    array (
                        'id' => 3,
                        'name' => 'Kids'
                    ),
                3 =>
                    array (
                        'id' => 4,
                        'name' => 'Jewellery'
                    ),
                4 =>
                    array (
                        'id' => 5,
                        'name' => 'Footwear'
                    ),
                5 =>
                    array (
                        'id' => 6,
                        'name' => 'Accessories'
                    ),
            ));

        }
    }
}
