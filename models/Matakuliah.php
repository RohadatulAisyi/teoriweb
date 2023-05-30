<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matakuliah".
 *
 * @property int $id
 * @property string $kode_mk
 * @property string $nama_mk
 * @property string $id_jurusan
 */
class Matakuliah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matakuliah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_mk', 'nama_mk', 'id_jurusan'], 'required'],
            [['kode_mk'], 'string', 'max' => 15],
            [['nama_mk'], 'string', 'max' => 32],
            [['id_jurusan'], 'string', 'max' => 255],
            [['kode_mk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_mk' => 'Kode Mk',
            'nama_mk' => 'Nama Mk',
            'id_jurusan' => 'Id Jurusan',
        ];
    }
}
