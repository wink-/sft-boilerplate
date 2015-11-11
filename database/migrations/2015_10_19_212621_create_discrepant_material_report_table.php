<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscrepantMaterialReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discrepant_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('workorder')->unsigned();
            $table->date('date_of_discrepancy');
            $table->text('description_of_discrepancy');
            $table->date('corrective_action_due_date');
            $table->enum('rejection_type', array('internal', 'external'));
            $table->text('internal_comments');
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
        Schema::drop('discrepant_material');
    }
}
