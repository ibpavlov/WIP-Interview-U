<?php

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class RecordsMigration_101
 */
class RecordsMigration_101 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('records', array(
                'columns' => array(
                    new Column(
                        'id',
                        array(
                            'type'          => Column::TYPE_INTEGER,
                            'unsigned'      => true,
                            'notNull'       => true,
                            'autoIncrement' => true,
                            'size'          => 10,
                            'first'         => true
                        )
                    ),
                    new Column(
                        'name',
                        array(
                            'type'  => Column::TYPE_VARCHAR,
                            'size'  => 100,
                            'after' => 'id'
                        )
                    ),
                    new Column(
                        'file',
                        array(
                            'type'  => Column::TYPE_VARCHAR,
                            'size'  => 255,
                            'after' => 'name'
                        )
                    ),
                    new Column(
                        'type',
                        array(
                            'type'  => Column::TYPE_VARCHAR,
                            'size'  => 50,
                            'after' => 'file'
                        )
                    ),
                    new Column(
                        'created',
                        array(
                            'type'    => Column::TYPE_TIMESTAMP,
                            'default' => "CURRENT_TIMESTAMP",
                            'size'    => 1,
                            'after'   => 'type'
                        )
                    )
                ),
                'indexes' => array(
                    new Index('PRIMARY', array('id'), null)
                ),
                'options' => array(
                    'TABLE_TYPE'      => 'BASE TABLE',
                    'AUTO_INCREMENT'  => '1',
                    'ENGINE'          => 'MyISAM',
                    'TABLE_COLLATION' => 'latin1_swedish_ci'
                ),
            )
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
