<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num', 20);
            $table->unsignedInteger('user_id');
            $table->string('invoiceable_type');
            $table->string('invoiceable_id');
            $table->float('price', 8, 2);
            $table->float('discount', 8, 2);
            $table->float('total', 8, 2);
            $table->string('status', 10)->default('unpaid')->comment('paid', 'overdue');
            $table->timestamp('due_at');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade');

            $table->index(['invoiceable_type', 'invoiceable_id']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
