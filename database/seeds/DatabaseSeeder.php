/*<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){
		Model::unguard();

		$this->call('UserTableSeeder');
		$this->command->info('User table!');

		$this->call('ItemTableSeeder');
		$this->command->info('Item table!');

		$this->call('GruppoScalaTableSeeder');
		$this->command->info('GruppoScala table!');

		$this->call('ScalaTableSeeder');
		$this->command->info('Scala table!');

		$this->call('CondizioneTableSeeder');
		$this->command->info('Condizione table!');

		$this->call('ConversioneTableSeeder');
		$this->command->info('Conversione table!');
	}

}

*/