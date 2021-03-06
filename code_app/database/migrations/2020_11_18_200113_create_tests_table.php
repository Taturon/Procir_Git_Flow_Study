<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration {

	public function up() {
		Schema::create('tests', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('task_id');
			$table->string('input', 1000);
			$table->string('output', 1000);
			$table->timestamps();
		});
	}

	public function down() {
		Schema::dropIfExists('tests');
	}
}
