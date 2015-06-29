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
		
		
		$this->call('LocationTableSeeder');
		$this->call('ClientTableSeeder');
		$this->call('TalentTableSeeder');
		$this->call('PortpolioTableSeeder');
		$this->call('ServicedesiresTableSeeder');
		$this->call('OptionTableSeeder');
		// $this->call('UserTableSeeder');
	}
}

class LocationTableSeeder extends Seeder{
	public function run()
	{
		\App\Location::create(array('state'=>'','full_state'=>''));
		\App\Location::create(array('state'=>'AL','full_state'=>'Alabama'));
		\App\Location::create(array('state'=>'AK','full_state'=>'Alaska'));
		\App\Location::create(array('state'=>'AZ','full_state'=>'Arizona'));
		\App\Location::create(array('state'=>'AR','full_state'=>'Arkansas'));
		\App\Location::create(array('state'=>'CA','full_state'=>'California'));
		\App\Location::create(array('state'=>'CO','full_state'=>'Colorado'));
		\App\Location::create(array('state'=>'CT','full_state'=>'Connecticut'));
		\App\Location::create(array('state'=>'DE','full_state'=>'Delaware'));
		\App\Location::create(array('state'=>'FL','full_state'=>'Florida'));
		\App\Location::create(array('state'=>'GA','full_state'=>'Georgia'));
		\App\Location::create(array('state'=>'HI','full_state'=>'Hawaii'));
		\App\Location::create(array('state'=>'ID','full_state'=>'Idaho'));
		\App\Location::create(array('state'=>'IL','full_state'=>'Illinois'));
		\App\Location::create(array('state'=>'IN','full_state'=>'Indiana'));
		\App\Location::create(array('state'=>'IA','full_state'=>'Iowa'));
		\App\Location::create(array('state'=>'KS','full_state'=>'Kansas'));
		\App\Location::create(array('state'=>'KY','full_state'=>'Kentucky'));
		\App\Location::create(array('state'=>'LA','full_state'=>'Louisiana'));
		\App\Location::create(array('state'=>'ME','full_state'=>'Maine'));
		\App\Location::create(array('state'=>'MD','full_state'=>'Maryland'));
		\App\Location::create(array('state'=>'MA','full_state'=>'Massachusetts'));
		\App\Location::create(array('state'=>'MI','full_state'=>'Michigan'));
		\App\Location::create(array('state'=>'MN','full_state'=>'Minnesota'));
		\App\Location::create(array('state'=>'MS','full_state'=>'Mississippi'));
		\App\Location::create(array('state'=>'MO','full_state'=>'Missouri'));
		\App\Location::create(array('state'=>'MT','full_state'=>'Montana'));
		\App\Location::create(array('state'=>'NE','full_state'=>'Nebraska'));
		\App\Location::create(array('state'=>'NV','full_state'=>'Nevada'));
		\App\Location::create(array('state'=>'NH','full_state'=>'New Hampshire'));
		\App\Location::create(array('state'=>'NJ','full_state'=>'New Jersey'));
		\App\Location::create(array('state'=>'NM','full_state'=>'New Mexico'));
		\App\Location::create(array('state'=>'NY','full_state'=>'New York'));
		\App\Location::create(array('state'=>'NC','full_state'=>'North Carolina'));
		\App\Location::create(array('state'=>'ND','full_state'=>'North Dakota'));
		\App\Location::create(array('state'=>'OH','full_state'=>'Ohio'));
		\App\Location::create(array('state'=>'OK','full_state'=>'Oklahoma'));
		\App\Location::create(array('state'=>'OR','full_state'=>'Oregon'));
		\App\Location::create(array('state'=>'PA','full_state'=>'Pennsylvania'));
		\App\Location::create(array('state'=>'RI','full_state'=>'Rhode Island'));
		\App\Location::create(array('state'=>'SC','full_state'=>'South Carolina'));
		\App\Location::create(array('state'=>'SD','full_state'=>'South Dakota'));
		\App\Location::create(array('state'=>'TN','full_state'=>'Tennessee'));
		\App\Location::create(array('state'=>'TX','full_state'=>'Texas'));
		\App\Location::create(array('state'=>'UT','full_state'=>'Utah'));
		\App\Location::create(array('state'=>'VT','full_state'=>'Vermont'));
		\App\Location::create(array('state'=>'VA','full_state'=>'Virginia'));
		\App\Location::create(array('state'=>'WA','full_state'=>'Washington'));
		\App\Location::create(array('state'=>'WV','full_state'=>'West Virginia'));
		\App\Location::create(array('state'=>'WI','full_state'=>'Wisconsin'));
		\App\Location::create(array('state'=>'WY','full_state'=>'Wyoming'));
	}
}

class OptionTableSeeder extends Seeder{
	public function run()
	{
		$option = new App\Option();
		$option->client_id = 1;
		$option->describeword1 = "skilled";
		$option->describeword2 = "hard working";
		$option->intro_video = "https://www.youtube.com/embed/QcIy9NiNbmo";
		$option->accolades = "music award";
		$option->experiences = "guitar list of a band";
		$option->save();
		
		$option = new App\Option();
		$option->client_id = 2;
		$option->describeword1 = "skilled";
		$option->describeword2 = "famous";
		$option->describeword3 = "fast";
		$option->intro_video = "https://www.youtube.com/embed/QcIy9NiNbmo";
		$option->accolades = "Champions league, Most goal in la liga";
		$option->experiences = "Manchester United, Real Mardrid";
		$option->save();
		
		$option = new App\Option();
		$option->client_id = 3;
		$option->describeword1 = "skilled";
		$option->describeword2 = "famous";
		$option->describeword3 = "act";
		$option->intro_video = "https://www.youtube.com/embed/QcIy9NiNbmo";
		$option->accolades = "Academy Awards, Golden Globes";
		$option->experiences = "Maleficent, Mr. & Mrs. Smith, Gia";
		$option->save();
		
		$option = new App\Option();
		$option->client_id = 4;
		$option->describeword1 = "awesome";
		$option->describeword2 = "famous";
		$option->describeword3 = "funny";
		$option->intro_video = "https://www.youtube.com/embed/QcIy9NiNbmo";
		$option->accolades = "Academy Awards, Golden Globes";
		$option->experiences = "Lucy, The Avangers, Iron Man2";
		$option->save();
		
		$option = new App\Option();
		$option->client_id = 5;
		$option->describeword1 = "skilled";
		$option->describeword2 = "deaf";
		$option->describeword3 = "musician";
		$option->intro_video = "https://www.youtube.com/embed/QcIy9NiNbmo";
		$option->experiences = "Symphony";
		$option->save();
		
		$option = new App\Option();
		$option->client_id = 6;
		$option->describeword1 = "skilled";
		$option->describeword2 = "famous";
		$option->describeword3 = "musician";
		$option->intro_video = "https://www.youtube.com/embed/QcIy9NiNbmo";
		$option->experiences = "Symphony, Piano Sonata";
		$option->save();
		
		$option = new App\Option();
		$option->client_id = 7;
		$option->describeword1 = "skilled";
		$option->describeword2 = "guitar";
		$option->describeword3 = "musician";
		$option->intro_video = "https://www.youtube.com/embed/QcIy9NiNbmo";
		$option->accolades = "Grammy Award for Best Rock Instrument, Grammy Award for Best POP Instrument";
		$option->experiences = "The Yardbirds";
		$option->save();
		
	}
}

class ServicedesiresTableSeeder extends Seeder{
	public function run()
	{
		$servicedesires = new App\Servicedesire();
		$servicedesires->client_id = 1;
		$servicedesires->representation = "represent my value";
		$servicedesires->opportunity = "get hired";
		$servicedesires->save();
		$servicedesires = new App\Servicedesire();
		$servicedesires->client_id = 2;
		$servicedesires->representation = "represent my value";
		$servicedesires->opportunity = "get hired";
		$servicedesires->save();
		$servicedesires = new App\Servicedesire();
		$servicedesires->client_id = 3;
		$servicedesires->representation = "represent my value";
		$servicedesires->opportunity = "get hired";
		$servicedesires->save();
		$servicedesires = new App\Servicedesire();
		$servicedesires->client_id = 4;
		$servicedesires->representation = "represent my value";
		$servicedesires->opportunity = "get hired";
		$servicedesires->save();
		$servicedesires = new App\Servicedesire();
		$servicedesires->client_id = 5;
		$servicedesires->representation = "represent my value";
		$servicedesires->opportunity = "get hired";
		$servicedesires->save();
		$servicedesires = new App\Servicedesire();
		$servicedesires->client_id = 6;
		$servicedesires->representation = "represent my value";
		$servicedesires->opportunity = "get hired";
		$servicedesires->save();
		$servicedesires = new App\Servicedesire();
		$servicedesires->client_id = 7;
		$servicedesires->representation = "represent my value";
		$servicedesires->opportunity = "get hired";
		$servicedesires->save();
	}
}

class PortpolioTableSeeder extends Seeder{
	public function run()
	{
		$portfolio = new App\Portfolio();
		$portfolio->talent_id = 1;
		$portfolio->photo = "http://dreamatico.com/data_images/guitar/guitar-1.jpg";
		$portfolio->save();
		
		
		$portfolio = new App\Portfolio();
		$portfolio->talent_id = 2;
		$portfolio->photo = "http://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Ronaldo_-_Manchester_United_vs_Chelsea.jpg/220px-Ronaldo_-_Manchester_United_vs_Chelsea.jpg";
		$portfolio->video = "https://www.youtube.com/embed/gKn8rhBZglA";
		$portfolio->save();
		
		$portfolio = new App\Portfolio();
		$portfolio->talent_id = 3;
		$portfolio->video = "https://www.youtube.com/embed/hi87Z4cL2xU";
		$portfolio->photo = "http://media4.popsugar-assets.com/files/2014/09/26/798/n/1922283/bb1b0fa0777e8976_thumb_temp_facebook_post_image_file35315381411750504.fbshare.jpg";
		$portfolio->save();
		
		$portfolio = new App\Portfolio();
		$portfolio->talent_id = 4;
		$portfolio->photo = "http://www.fashiongonerogue.com/wp-content/uploads/2015/02/avengers-age-ultron-poster-2015-black-widow01.jpg";
		$portfolio->video = "https://www.youtube.com/embed/md3l91eeM7w";
		$portfolio->save();
		
		$portfolio = new App\Portfolio();
		$portfolio->talent_id = 5;
		$portfolio->photo = "http://lucare.com/immortal/media/composing1.gif";
		$portfolio->video = "https://www.youtube.com/embed/_4IRMYuE1hI";
		$portfolio->save();
		
		$portfolio = new App\Portfolio();
		$portfolio->talent_id = 6;
		$portfolio->photo = "http://cdn.playbuzz.com/cdn/470cd7af-2fdb-4f8f-8dc8-1985cc7fc5f1/b4c8d2a0-ee3c-4873-98ec-5552a3f2c3c3.jpg";
		$portfolio->video = "https://www.youtube.com/embed/Zi8vJ_lMxQI";
		$portfolio->save();
		
		$portfolio = new App\Portfolio();
		$portfolio->talent_id = 7;
		$portfolio->photo = "http://www.madinkpr.com/wp-content/uploads/2013/03/Jeff-Beck-004383-photo-credit-Rob-Simeon.jpg";
		$portfolio->video = "https://www.youtube.com/embed/xoPUDOgcFWY";
		$portfolio->save();
	}
}
class TalentTableSeeder extends Seeder{
	public function run()
	{
		$talent = new App\Talent();
		$talent->client_id = 1;
		$talent->category="music";
		$talent->specific_talent = "Guitar";
		$talent->save();
		
		$talent = new App\Talent();
		$talent->client_id = 2;
		$talent->category="sport";
		$talent->specific_talent = "Soccer";
		$talent->save();
		
		$talent = new App\Talent();
		$talent->client_id = 3;
		$talent->category="Actor";
		$talent->specific_talent = "Movie";
		$talent->save();
		
		$talent = new App\Talent();
		$talent->client_id = 4;
		$talent->category="Actor";
		$talent->specific_talent = "Movie";
		$talent->save();
		
		$talent = new App\Talent();
		$talent->client_id = 5;
		$talent->category="music";
		$talent->specific_talent = "Piano";
		$talent->save();
		
		$talent = new App\Talent();
		$talent->client_id = 6;
		$talent->category="music";
		$talent->specific_talent = "Piano";
		$talent->save();
		
		$talent = new App\Talent();
		$talent->client_id = 7;
		$talent->category="Music";
		$talent->specific_talent = "Guitar";
		$talent->save();
		
	}
}

class ClientTableSeeder extends Seeder{
	public function run()
	{
		$client = new App\Client();
		$client->fname = "James";
		$client->lname = "Bush";
		$client->email = "JamesBush@gmail.com";
		$client->dob = "6/17/1989";
		$client->gender = "Male";
		$client->city="Los Angeles";
		$client->state="California";
		$client->phone_number = "123-123-1234";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Cristiano";
		$client->lname = "Ronaldo";
		$client->email = "christianoRonaldo@gmail.com";
		$client->dob = "2/5/1985";
		$client->gender = "Male";
		$client->city="Los Angeles";
		$client->state="California";
		$client->phone_number = "456-123-1523";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Angelina";
		$client->lname = "Jolie";
		$client->email = "AngelinaJolie@gmail.com";
		$client->dob = "6/4/1975";
		$client->gender = "Female";
		$client->city="Los Angeles";
		$client->state="California";
		$client->phone_number = "542-234-1523";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Scarllet";
		$client->lname = "Johansson";
		$client->email = "ScarlletJohansson@gmail.com";
		$client->dob = "11/22/1984";
		$client->gender = "Female";
		$client->city="Los Angeles";
		$client->state="California";
		$client->phone_number = "123-123-1234";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Ludwig";
		$client->lname = "Beethoven";
		$client->email = "LudwidBeethoven@gmail.com";
		$client->dob = "3/26/1827";
		$client->gender = "Male";
		$client->city="Los Angeles";
		$client->state="California";
		$client->phone_number = "123-123-1235";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Wolfgang";
		$client->lname = "Mozart";
		$client->email = "WolfgangMozart@gmail.com";
		$client->dob = "1/27/1756";
		$client->gender = "Male";
		$client->city="Los Angeles";
		$client->state="California";
		$client->phone_number = "124-124-1241";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Jeff";
		$client->lname = "Beck";
		$client->email = "JeffBeck@gmail.com";
		$client->dob = "6/24/1944";
		$client->gender = "Male";
		$client->city="Los Angeles";
		$client->state="California";
		$client->phone_number = "9853518953";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "James";
		$client->lname = "Bush";
		$client->email = "JamesBush@gmail.com";
		$client->dob = "6/17/1989";
		$client->gender = "Male";
		$client->city="Baton Rouge";
		$client->state="Lousisana";
		$client->phone_number = "123-123-1234";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Cristiano";
		$client->lname = "Ronaldo";
		$client->email = "christianoRonaldo@gmail.com";
		$client->dob = "2/5/1985";
		$client->gender = "Male";
		$client->city="Baton rouge";
		$client->state="Louisiana";
		$client->phone_number = "456-123-1523";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Angelina";
		$client->lname = "Jolie";
		$client->email = "AngelinaJolie@gmail.com";
		$client->dob = "6/4/1975";
		$client->gender = "Female";
		$client->city="Baton Rouge";
		$client->state="Louisiana";
		$client->phone_number = "542-234-1523";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Scarllet";
		$client->lname = "Johansson";
		$client->email = "ScarlletJohansson@gmail.com";
		$client->dob = "11/22/1984";
		$client->gender = "Female";
		$client->city="Baton Rouge";
		$client->state="Louisiana";
		$client->phone_number = "123-123-1234";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Ludwig";
		$client->lname = "Beethoven";
		$client->email = "LudwidBeethoven@gmail.com";
		$client->dob = "3/26/1827";
		$client->gender = "Male";
		$client->city="Baton Rouge";
		$client->state="Louisiana";
		$client->phone_number = "123-123-1235";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Wolfgang";
		$client->lname = "Mozart";
		$client->email = "WolfgangMozart@gmail.com";
		$client->dob = "1/27/1756";
		$client->gender = "Male";
		$client->city="Baton Rouge";
		$client->state="Louisiana";
		$client->phone_number = "124-124-1241";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Jeff";
		$client->lname = "Beck";
		$client->email = "JeffBeck@gmail.com";
		$client->dob = "6/24/1944";
		$client->gender = "Male";
		$client->city="Baton Rouge";
		$client->state="Louisiana";
		$client->phone_number = "9853518953";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "James";
		$client->lname = "Bush";
		$client->email = "JamesBush@gmail.com";
		$client->dob = "6/17/1989";
		$client->gender = "Male";
		$client->city="Austin";
		$client->state="Texas";
		$client->phone_number = "123-123-1234";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Cristiano";
		$client->lname = "Ronaldo";
		$client->email = "christianoRonaldo@gmail.com";
		$client->dob = "2/5/1985";
		$client->gender = "Male";
		$client->city="Austin";
		$client->state="Texas";
		$client->phone_number = "456-123-1523";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Angelina";
		$client->lname = "Jolie";
		$client->email = "AngelinaJolie@gmail.com";
		$client->dob = "6/4/1975";
		$client->gender = "Female";
		$client->city="Austin";
		$client->state="Texas";
		$client->phone_number = "542-234-1523";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Scarllet";
		$client->lname = "Johansson";
		$client->email = "ScarlletJohansson@gmail.com";
		$client->dob = "11/22/1984";
		$client->gender = "Female";
		$client->city="Austin";
		$client->state="Texas";
		$client->phone_number = "123-123-1234";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Ludwig";
		$client->lname = "Beethoven";
		$client->email = "LudwidBeethoven@gmail.com";
		$client->dob = "3/26/1827";
		$client->gender = "Male";
		$client->city="Austin";
		$client->state="Texas";
		$client->phone_number = "123-123-1235";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Wolfgang";
		$client->lname = "Mozart";
		$client->email = "WolfgangMozart@gmail.com";
		$client->dob = "1/27/1756";
		$client->gender = "Male";
		$client->city="Austin";
		$client->state="Texas";
		$client->phone_number = "124-124-1241";
		$client->status = 2;
		$client->save();
		
		$client = new App\Client();
		$client->fname = "Jeff";
		$client->lname = "Beck";
		$client->email = "JeffBeck@gmail.com";
		$client->dob = "6/24/1944";
		$client->gender = "Male";
		$client->city="Austin";
		$client->state="Texas";
		$client->phone_number = "9853518953";
		$client->status = 2;
		$client->save();
	}
}
