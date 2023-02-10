<?php

/**
 * Team:布利啾啾迪布利多,NKU
 * coding by huangjingzhi 1810729,20200504
 * This is the home page of blog
 */

use yii\db\Migration;

/**
 * Handles the creation of table `{{%video}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m200502_141910_create_video_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%video}}', [
            'video_id' => $this->string(16)->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'tags' => $this->string(512),
            'status' => $this->integer(1),
            'has_thumbnail' => $this->boolean(),
            'video_name' => $this->string(255),
            'created_at'=>$this->integer(11),
            'updated_at'=>$this->integer(11),
            'created_by' => $this->integer(11),
        ]);

        $this->addPrimaryKey('PK_video_video_id', '{{%video}}', 'video_id');

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-video-created_by}}',
            '{{%video}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-video-created_by}}',
            '{{%video}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-video-created_by}}',
            '{{%video}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-video-created_by}}',
            '{{%video}}'
        );

        $this->dropTable('{{%video}}');
    }
}
