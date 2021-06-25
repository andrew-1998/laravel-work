<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert($this->getData());
    }
    Public function getData()
    {
    	$faker=Factory::create();
    	$data=[];
    	for ($i=1; $i<10; $i++) {
    		$data[]=[
    			'title'=>$faker->sentence(mt_rand(3, 10)),
    			'description'=>$faker->text(150),
    			'created_at'=>now(),
    			'updated_at'=>now()
    		];
    	}

    	return $data;
    }
}
