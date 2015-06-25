<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;
use App\League as League;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('users')->delete();
		$user1 = User::create([
			'email' => 'skychalk@gmail.com',
			'password' => Hash::make('password'),
			'name' => 'chalksy',
		]);
		$user2 = User::create([
			'email' => 'pm@gmail.com',
			'password' => Hash::make('password'),
			'name' => 'pm',
		]);

		DB::table('leagues')->delete();
		$league1 = League::create([
			'user_id' => $user1->id,
			'title' => 'Major League TagPro',
			'description' => 'No scrubs allowed',
			'approved' => true,
			'open' => true,
			'visible' => true,
			'slug' => 'MLTP'
		]);

	}

}
