<?php 
    use yii\widgets\DetailView;
    use yii\helpers\Html;
?> 

<?=
    Html::a('Kembali', ['index'], ['class' => 'btn btn-primary'])
    ?>
    <br>

<br>
<?= 
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id105',
            'nim105',
            'nama105',
            'kelas105',
            'status105',
        ]
    ])
?>