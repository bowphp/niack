<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20190807211040CreateUserRoleTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("user_roles", function (SQLGenerator $table) {
            $table->addIncrement('id');
            $table->addInteger('user_id');
            $table->addInteger('role_id');
            
            $table->addTimestamps();
            $table->withEngine('InnoDB');
        });
    }

    /**
     * Rollback migration
     */
    public function rollback()
    {
        $this->dropIfExists("user_roles");
    }
}
