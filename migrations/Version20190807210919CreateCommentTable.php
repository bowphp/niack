<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20190807210919CreateCommentTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("comments", function (SQLGenerator $table) {
            $table->addIncrement('id');
            $table->addColumn('content', 'text');
            $table->addString('name');
            $table->addString('email');
            $table->addInteger('post_id');
            $table->addInteger('parent_id', [
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
        $this->dropIfExists("comments");
    }
}
