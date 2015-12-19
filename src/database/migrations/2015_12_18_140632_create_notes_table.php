<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('notes', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('created_by');
            $table->integer('ref_id');
            $table->boolean('private');
            $table->text('details');

            $table->index(['ref_id', 'created_by']);
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

        Schema::drop('notes');
    }
}
