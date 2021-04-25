    <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h2>Удаление автора</h2>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'id_a')->label('ID Автора') ?>

<div class="form-group">
	<?= Html::submitButton('Удалить', ['class' => 'btn btn-danger']) ?>
</div>

<?php ActiveForm::end(); ?>
