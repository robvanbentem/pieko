<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePurchases extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('payment_id', false, true);
            $table->integer('product_id', false, true)->nullable();
            $table->integer('user_id', false, true)->nullable();
            $table->decimal('price');
            $table->decimal('amount');
            $table->date('date');

            $table->timestamps();

            $table->index('payment_id');
            $table->index('product_id');
            $table->index('user_id');

            $table->foreign('payment_id')
                ->references('id')
                ->on('payments')
                ->onDelete('CASCADE');

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('SET NULL');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }

}
