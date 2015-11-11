<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkordersTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Workorder', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ID', true);
			$table->integer('PartID');
			$table->integer('WORKORDR');
			$table->string('CUSTCODE', 255);
			$table->string('PARTNUM', 255);
			$table->string('PROCNAME', 255);
			$table->float('PRICE', 10, 0);
			$table->string('PRICECODE', 255);
			$table->boolean('REWORK');
			$table->dateTime('DATERECV');
			$table->dateTime('DATEREQD');
			$table->boolean('SHIPPED');
			$table->string('CUSTPO', 255);
			$table->string('CUSTPL', 255);
			$table->float('QTY', 10, 0);
			$table->string('QTYTYPE', 255);
			$table->float('QTYSHIP', 10, 0);
			$table->float('QTYNOTSHIP', 10, 0);
			$table->string('SFTPL', 255);
			$table->string('SHIPTO', 255);
			$table->string('SHIPVIA', 255);
			$table->string('FREIGHT', 255);
			$table->boolean('COD');
			$table->boolean('STARTED');
			$table->boolean('COMPLETE');
			$table->dateTime('DATESHIP');
			$table->boolean('INVOICED');
			$table->integer('INVNUMBER');
			$table->dateTime('DATEINV');
			$table->float('COST', 10, 0);
			$table->text('WONOTE');
			$table->string('STEPNAME1', 255);
			$table->float('TMANHRS1', 10, 0);
			$table->float('TOTHOURS1', 10, 0);
			$table->string('STEPNAME2', 255);
			$table->float('TMANHRS2', 10, 0);
			$table->float('TOTHOURS2', 10, 0);
			$table->string('STEPNAME3', 255);
			$table->float('TMANHRS3', 10, 0);
			$table->float('TOTHOURS3', 10, 0);
			$table->dateTime('TimeStamp');
			$table->integer('ImageID');
			$table->string('LastEdit', 255);
			$table->boolean('HOT');
			$table->integer('Priority');
			$table->integer('CustID');
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
		Schema::drop('Workorder');
	}

}
