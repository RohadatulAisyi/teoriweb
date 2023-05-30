<?php 
    use yii\widgets\DetailView;
    use yii\helpers\Html;
?> 

<?=
    Html::a('matakuliah baru', ['index'], ['class' => 'btn btn-primary'])
?>

<?= 
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kode_mk',
            'nama_mk',
            'id_jurusan',
        ]
    ])
?>