<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20190807210936CreateConfigurationTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("configurations", function (SQLGenerator $table) {
            $table->addInteger('id');
            $table->addString('name');
            $table->addString('description');
            $table->addTinyInteger('mode', [
                'size' => 1
            ]);

            $table->addTimestamps();
            $table->withEngine('InnoDB');
        });
    }

    /**
     * Rollback migration
     */
    public function rollback()
    {
        $this->dropIfExists("configurations");
    }
}
