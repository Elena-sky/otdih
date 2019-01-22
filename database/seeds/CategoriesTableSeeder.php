<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Номера',
                'status' => 1,
                'created_at' => '2019-01-17 20:31:40',
                'updated_at' => '2019-01-17 20:31:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => '1 комнатные',
                'status' => 1,
                'created_at' => '2019-01-17 20:31:51',
                'updated_at' => '2019-01-17 20:31:51',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '2 комнатные',
                'status' => 1,
                'created_at' => '2019-01-17 20:31:54',
                'updated_at' => '2019-01-17 20:31:54',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '3 комнатные',
                'status' => 1,
                'created_at' => '2019-01-17 20:31:57',
                'updated_at' => '2019-01-17 20:31:57',
            ),
        ));
        
        
    }
}