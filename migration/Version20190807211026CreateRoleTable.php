<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20190807211026CreateRoleTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("roles", function (SQLGenerator $table) {
            $table->addInteger('id');
            $table->addString('name');
            
            $table->addTimestamps();
            $table->withEngine('InnoDB');
        });
    }

    /**
     * Rollback migration
     */
    public function rollback()
    {
        $this->dropIfExists("roles");
    }
}
