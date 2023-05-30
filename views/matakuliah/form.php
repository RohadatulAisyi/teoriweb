<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($matakuliah, 'id') ?>
<?= $form->field($matakuliah, 'kode_mk') ?>
<?= $form->field($matakuliah, 'nama_mk') ?>
<?= $form->field($matakuliah, 'id_jurusan') ?>
<br>
<?=
    Html::submitButton('Save', ['class' => 'btn btn-primary',])
?>

<?php ActiveForm::end() ?>