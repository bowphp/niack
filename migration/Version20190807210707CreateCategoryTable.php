<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20190807210707CreateCategoryTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("categories", function (SQLGenerator $table) {
            $table->addInteger('id');
            $table->addString('title');
            $table->addString('description');
            $table->addInteger('user_id');
            
            $table->addTimestamps();
            $table->withEngine('InnoDB');
        });
    }

    /**
     * Rollback migration
     */
    public function rollback()
    {
        $this->dropIfExists("categories");
    }
}
