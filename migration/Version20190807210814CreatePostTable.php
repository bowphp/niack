<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20190807210814CreatePostTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("posts", function (SQLGenerator $table) {
            $table->addInteger('id');
            $table->addInteger('title');
            $table->addColumn('content', 'text');
            $table->addInteger('user_id');
            $table->addInteger('category_id', [
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
        $this->dropIfExists("posts");
    }
}
