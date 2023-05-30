<?php

namespace app\controllers;
use app\models\Mahasiswa105;
use app\widgets\Alert;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswa105Controller extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $query = Mahasiswa105::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa105 = new Mahasiswa105;
        $randomNumber = mt_rand(100, 999); 
        $mahasiswa105 -> nim105 = '60200121105-' . $randomNumber;
        $mahasiswa105 -> nama105 = 'A. Nur Rohadatul Aisyi Harun';
        $mahasiswa105 -> kelas105 = 'B';
        $mahasiswa105 -> status105 = 'Baru'; 
        // $mahasiswa105 -> save();
        if ($mahasiswa105->save()) {
            Yii::$app->session->setFlash('success', 'Data Ditambah');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id = '')
    {
        $mahasiswa105 = Mahasiswa105::findOne(['id105' => $id]);
        $mahasiswa105 -> status105 = 'Update';
        $mahasiswa105 -> kelas105 = 'C';
        if ($mahasiswa105->save()) {
            Yii::$app->session->setFlash('success', 'Data Diubah');
            return $this->redirect(['index']);

        }
    }
    public function actionDelete($id = '')
    {
        $mahasiswa105 = Mahasiswa105::findOne(['id105' => $id]);
        if ($mahasiswa105->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }
    public function actionView($id)
    {
        $mahasiswa105 = Mahasiswa105::findOne(['id105' => $id]);
        return $this->render('view', ['model' => $mahasiswa105]);
        
    }

}