<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20190807211106CreateMediaTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("media", function (SQLGenerator $table) {
            $table->addIncrement('id');
            $table->addString('name');
            $table->addString('size');
            $table->addString('extension');
            $table->addString('type');
            $table->addString('path');
            $table->addString('url');
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
        $this->dropIfExists("media");
    }
}
