<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title_b')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateofpublication')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FK_id_g')->dropDownList(ArrayHelper::map($genres, 'id_g', 'nameofg'))->label('Выберите название жанра'); ?>

    <?= $form->field($model, 'FK_id_a')->dropDownList(ArrayHelper::map($authors, 'id_a', 'name_a'))->label('Выберите имя автора'); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
