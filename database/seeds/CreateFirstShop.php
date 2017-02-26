<?php

use Illuminate\Database\Seeder;

class CreateFirstShop extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        if(!\DB::table('shops')->find(1)) {

            \DB::table('shops')->insert(array(

                0 =>
                    array(
                        'id' => 1,
                        'user_id' => 2,
                        'name' => 'Saints Webnology',
                        'tagline' => 'The Webmaster',
                        'slug' => 'saints-webnology',
                        'image_url' => '/images/Fashion/shops/1487609626_saints_webnology.png',
                        'address' => '10 olaniyan Fagbemi close Iyagakun',
                        'web_url' => 'https://www.saintswebnology.com',
                        'featured' => 1
                    )

            ));
        }


    }
}
