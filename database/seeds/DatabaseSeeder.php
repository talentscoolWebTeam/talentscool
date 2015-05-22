<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('ClientTableSeeder');
		$this->call('TalentTableSeeder');
		// $this->call('UserTableSeeder');
	}

}
class TalentTableSeeder extends Seeder{
	public function run()
	{
		$i = 0;
		for($i = 1; $i < 10; $i++)
		{
			for($j = 1; $j < 3; $j++)
			{
				$talent = new App\Talent();
				$talent->client_id = $i;
				$talent->category = "music";
				$talent->save();
			}
		}
	}
}

class ClientTableSeeder extends Seeder{
	public function run()
	{
		$i = 0 ;
		for($i = 0; $i < 10; $i++)
		{
			$client = new App\Client();
			$client->fname = "Woon" . $i;
			$client->nname = "Kim" . $i;
			$client->city = "Los Angeles";
			$client->state = "CA";
			$client->save();
		}
	}
}