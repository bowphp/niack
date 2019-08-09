<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20190807211009CreateSlugTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("slugs", function (SQLGenerator $table) {
            $table->addIncrement('id');
            $table->addString('slug', ['unique' => true]);
            $table->addInteger('slugable_id');
            $table->addString('slugable_type');

            $table->addTimestamps();
            $table->withEngine('InnoDB');
        });
    }

    /**
     * Rollback migration
     */
    public function rollback()
    {
        $this->dropIfExists("slugs");
    }
}
