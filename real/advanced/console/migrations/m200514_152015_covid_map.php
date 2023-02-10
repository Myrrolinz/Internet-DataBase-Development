<?php

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 徐云凯 1713667,20200514
 * This is the home page of blog
 */

use yii\db\Migration;

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by 徐云凯 1713667
 * 疫情地图数据库表生成器
 */

/**
 * Class m200514_152015_covid_map
 */
class m200514_152015_covid_map extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%covid_map}}', [
            'id' => $this->primaryKey(),
            'pid' => $this->integer()->notNull(),
            'date' => $this->date()->notNull(),
            'placename'=> $this->string()->notNull(),
            'confirm'=>$this->integer()->defaultValue(0),
            'cured'=>$this->integer()->defaultValue(0),
            'death'=>$this->integer()->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%covid_map}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200514_152015_covid_map cannot be reverted.\n";

        return false;
    }
    */
}
