<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('property_id');
            $table->date('started_at');
            $table->date('ended_at');
            $table->unsignedTinyInteger('invoice_recursion')->default(3)->comment('number of months');
            $table->unsignedDecimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('client_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade');

            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leases');
    }
}
