<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Customer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ID', true);
			$table->string('CUSTCODE', 255);
			$table->string('CUSTNAME', 255);
			$table->string('ADDRESS1', 255);
			$table->string('ADDRESS2', 255);
			$table->string('ADDRESS3', 255);
			$table->string('CITY', 255);
			$table->string('STATE', 255);
			$table->string('ZIP', 255);
			$table->string('SHIPTO', 255);
			$table->integer('destination_id');
			$table->string('SHIPVIA', 255);
			$table->integer('carrier_id');
			$table->string('DEFFREIGHT', 255);
			$table->string('CONTACT1', 255);
			$table->string('PHONE1', 255);
			$table->string('EXTENSION1', 255);
			$table->string('CONTACT2', 255);
			$table->string('PHONE2', 255);
			$table->string('EXTENSION2', 255);
			$table->string('FAX', 255);
			$table->string('EMAIL', 255);
			$table->boolean('COD');
			$table->string('TAXIDEN', 255);
			$table->text('REMARKS');
			$table->dateTime('TimeStamp');
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
		Schema::drop('Customer');
	}

}
