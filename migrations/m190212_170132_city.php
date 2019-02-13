<?php

use yii\db\Schema;
use yii\db\Migration;

class m190212_170132_city extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%city}}',
            [
                'id'=> $this->primaryKey(11)->unsigned()->comment('ID'),
                'name'=> $this->string(50)->notNull()->comment('Название города'),
                'latitude'=> $this->decimal(9, 6)->notNull()->comment('Широта'),
                'longitude'=> $this->decimal(9, 6)->notNull()->comment('Долгота'),
                'weather'=> $this->text()->null()->defaultValue(null)->comment('Погода (JSON)'),
                'updated'=> $this->integer(11)->unsigned()->null()->defaultValue(null)->comment('Последнее обновление (UNIX TIME)'),
            ],$tableOptions
        );
        $this->createIndex('name','{{%city}}',['name'],true);

    }

    public function safeDown()
    {
        $this->dropIndex('name', '{{%city}}');
        $this->dropTable('{{%city}}');
    }
}
