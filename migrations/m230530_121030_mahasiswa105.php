<?php

use yii\db\Migration;

/**
 * Class m230530_121030_mahasiswa105
 */
class m230530_121030_mahasiswa105 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa105}}',[
            'id105' => $this->primarykey(),
            'nim105' => $this->string(225)->notNull()->unique(),
            'nama105' => $this->string(225)->notNull(),
            'kelas105' => $this->string(225)->notNull(),
            'status105' => $this->string(225)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_121030_mahasiswa105 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_121030_mahasiswa105 cannot be reverted.\n";

        return false;
    }
    */
}
