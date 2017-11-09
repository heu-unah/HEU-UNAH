<?php 
/**
* 
*/
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	
	public function run()
	{
		\DB::table('users')->insert(array(
			'name' => 'Saul',
			'email' => 'saullainez@hotmail.es',
			'password' => \Hash::make('secret')
		));
	}
}