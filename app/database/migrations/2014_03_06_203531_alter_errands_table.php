<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterErrandsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE `errands` CHANGE `date` `date_from` date NOT NULL AFTER `comment`, COMMENT='';");
        DB::statement("ALTER TABLE `errands` ADD `date_to` date NOT NULL AFTER `date_from`, COMMENT='';");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE `errands` CHANGE `date_from` `date` datetime NOT NULL AFTER `comment`, COMMENT='';");
        DB::statement("ALTER TABLE `errands` DROP `date_to`, COMMENT='';");
    }

}
