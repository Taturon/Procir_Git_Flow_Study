<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	public function run() {
		$this->call([
			TasksTableSeeder::class,
			TestsTableSeeder::class,
			SamplesTableSeeder::class,
		]);
	}
}
