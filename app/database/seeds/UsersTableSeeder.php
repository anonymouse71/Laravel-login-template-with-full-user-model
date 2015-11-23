<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = [
					[
								'email'      => 'ratulcse27@gmail.com',
								'password'   => Hash::make('a'),

								'name'  =>'Ratul',
								'full_name'  =>'Yousuf Khan Ratul',
						        'phone'  =>'+880180000000',
								'avatar_url' => null,
								'icon_url'     => null,

								'session'=>'2012',
								'reg'=>'2012331008',

								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					]

		];

		DB::table('users')->insert($users);
	}

}