<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 
			<h3>Поиск книги</h3>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_b')->label('Название книги:') ?>


<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>



