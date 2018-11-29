<?php

use Illuminate\Database\Seeder;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	/* === QUERY BUILDER
        DB::table('admins')->insert([
	        'name'	=> str_random(20),
	        'email'	=> str_random(10) . '@gmail.com',
	        'job_title' => str_random(10),
	        'password'	=> bcrypt('secret')
		]);
		*/
		/* USE ELOQUENT
		\App\Admin::create([
        'name'	=> str_random(20),
        'email'	=> str_random(10) . '@gmail.com',
		'job_title' => str_random(10),
        'password'	=> bcrypt('secret')
		]);*/
		//USE MODEL FACTORY
		//factory(\App\Admin::class, 5)->create();

        \App\Admin::create([
        'name'  => 'Prihar Reformasi',
        'email' => 'refoningrum12@gmail.com',
        'job_title' => 'admin',
        'password'  => bcrypt('secret')
        ]);

        \App\Admin::create([
        'name'  => 'Riski Tisnahayu',
        'email' => 'riski@gmail.com',
        'job_title' => 'admin',
        'password'  => bcrypt('secret')
        ]);

    }
}
