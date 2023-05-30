<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa105".
 *
 * @property int $id105
 * @property string $nim105
 * @property string $nama105
 * @property string $kelas105
 * @property string $status105
 */
class Mahasiswa105 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa105';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim105', 'nama105', 'kelas105', 'status105'], 'required'],
            [['nim105', 'nama105', 'kelas105', 'status105'], 'string', 'max' => 225],
            [['nim105'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id105' => 'Id105',
            'nim105' => 'Nim105',
            'nama105' => 'Nama105',
            'kelas105' => 'Kelas105',
            'status105' => 'Status105',
        ];
    }
}
