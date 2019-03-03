<?php

use Illuminate\Database\Seeder;

class ContactPhonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_phones')->delete();
        
        \DB::table('contact_phones')->insert(array (
            0 => 
            array (
                'id' => 4,
            'phone' => '+38(097)956-10-97',
                'telephone_call' => '+380979561097',
                'viber' => 1,
                'created_at' => '2019-02-20 20:50:45',
                'updated_at' => '2019-02-20 20:50:45',
            ),
        ));
        
        
    }
}