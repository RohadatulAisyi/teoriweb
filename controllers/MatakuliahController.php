<?php

namespace app\controllers;

use app\models\Matakuliah;
use yii\data\ActiveDataProvider;
use yii\web\Controller;


class MatakuliahController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Matakuliah::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTambah()
    {
        $matakuliah = new Matakuliah;
        $matakuliah->id ='1'.md5(microtime());
        $matakuliah->kode_mk = '098';
        $matakuliah->nama_mk = 'pemrograman web';
        $matakuliah->id_jurusan = '345';
        if ($matakuliah->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($matakuliah->getErrors());
            die();
        }


        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}