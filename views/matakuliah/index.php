<?php
use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
?>

<?=
Html::a('matakuliah Baru', ['tambah'], ['class' => 'btn btn-primary'])
?>
<?=
    GridView::widget([
        'dataProvider'=> $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id',
            'kode_mk',
            'nama_mk',
            'id_jurusan',
            ['class' => ActionColumn::className()]

        ]
        ]);
?>