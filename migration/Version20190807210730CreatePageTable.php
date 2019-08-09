<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20190807210730CreatePageTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("pages", function (SQLGenerator $table) {
            $table->addIncrement('id');
            $table->addString('title');
            $table->addString('description');
            $table->addInteger('user_id');
            $table->addInteger('parent_id', [
                'nullable' => true
            ]);
            $table->addString('cover', [
                'nullable' => true
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
        $this->dropIfExists("pages");
    }
}
