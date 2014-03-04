<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePaymentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('payments', 'receipts');

        Schema::table('purchases', function ($table) {
            $table->dropForeign('purchases_payment_id_foreign');
            $table->renameColumn('payment_id', 'receipt_id');
            $table->foreign('receipt_id')
                ->references('id')->on('receipts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('receipts', 'payments');

        Schema::table('purchases', function ($table) {
            $table->dropForeign('purchases_receipt_id_foreign');
            $table->renameColumn('receipt_id', 'payment_id');
            $table->foreign('payment_id')
                ->references('id')->on('payments')
                ->onDelete('cascade');
        });
    }

}
