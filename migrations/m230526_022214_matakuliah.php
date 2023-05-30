<?php

use yii\db\Migration;

/**
 * Class m230526_022214_matakuliah
 */
class m230526_022214_matakuliah extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%matakuliah}}',[
            'id' => $this->primarykey(),
            'kode_mk' => $this->string(15)->notNull()->unique(),
            'nama_mk' => $this->string(32)->notNull(),
            'id_jurusan' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{matakuliah}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230526_022214_matakuliah cannot be reverted.\n";

        return false;
    }
    */
}
