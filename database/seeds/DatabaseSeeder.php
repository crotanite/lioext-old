<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    	// All Seeders
    	$seeders =
        [
            //'BasesSeeder',
            'EyesSeeder',
    	];

    	// Loop through seeders
    	foreach($seeders as $s) 
        {
    		$this->call($s);
    	}

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
