<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User as User;

class UserTableSeeder extends Seeder {
	public function run() {
		User::create(['name'=>'Stefano Fumanti', 'email'=>'fumanti@hotmail.com', 'password'=> Hash::make('patulo2001'), 'admin'=>true]);
		User::create(['name'=>'Emiliano Lambiase', 'email'=>'emiliano.lambiase@gmail.com', 'password'=> Hash::make('iniziale.1'), 'admin'=>true]);
		User::create(['name'=>'Maria Scicchitano', 'email'=>'mariascicchitano87@gmail.com', 'password'=> Hash::make('iniziale.1'), 'admin'=>false]);
		User::create(['name'=>'Martina Aiello', 'email'=>'martinaiello@hotmail.it', 'password'=> Hash::make('iniziale.1'), 'admin'=>false]);
	}
}