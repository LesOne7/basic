<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h3> Добавление нового автора </h3>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'name_a')->label('Имя автора:')?>
<?= $form->field($model, 'dateofbirth')->label('Дата рождения:')->hint('Введите дату в формате yyyy.mm.dd')?>

<div class="form-group">
	<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary'])?>
</div>
<?php ActiveForm::end(); ?>