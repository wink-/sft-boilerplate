<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDmrsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discrepant_materials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id', true, true);
			$table->integer('workorder', true);
			$table->date('date_of_discrepancy');
			$table->text('description_of_discrepancy');
			$table->date('corrective_action_due_date');
			$table->string('rejection_type', 255);
			$table->text('internal_comments');
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('discrepant_materials');
	}

}
