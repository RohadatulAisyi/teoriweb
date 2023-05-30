<?php
    use yii\helpers\Html;
    use app\widgets\Alert;
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;

?>

<?=
Html::a('Mahasiswa Baru', ['tambah'], ['class'=> 'btn btn-primary']);
// Yii::$app->session->setFlash('success', 'Data mahasiswa berhasil diubah.');
?>
<?=
    GridView::widget([
        'dataProvider'=> $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id105',
            'nim105',
            'nama105',
            'kelas105',
            'status105',
            ['class' => ActionColumn::className()]
        ]
        ]);
?>