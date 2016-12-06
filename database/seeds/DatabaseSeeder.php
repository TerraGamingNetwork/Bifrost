<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Eloquent::unguard();
		$this->call('OAuthClientsSeeder');
		$this->call('OAuthUsersSeeder');
    }
}

class OAuthClientsSeeder extends Seeder
{
	public function run()
	{
		DB::table('oauth_clients')->delete();
		
		DB::table('oauth_clients')->insert(array(
			'client_id' => "demoapp",
			'client_secret' => "demopass",
			'redirect_uri' => "https://www.getpostman.com/oauth2/callback",
		));
	}
}
class OAuthUsersSeeder extends Seeder
{
	public function run()
	{
		DB::table('oauth_users')->delete();
		
		DB::table('oauth_users')->insert(array(
			'username' => "user",
			'password' => sha1("password"),
			'first_name' => "First",
			'last_name' => "Name",
		));
	}
}