<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title='Лабораторная работа №1';
?>
<div class="alert alert-success">
   Лабораторная работа №1
</div>

<div class="container"> 
	<div class="row">
		<div class="col-lg-6">
			<h3>Отзыв о ресторане</h3>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->label('Ваше Имя:') ?>

    <?= $form->field($model, 'email')->label('Ваш e-mail:') ?>
    <?= $form->field($model, 'age')->label('Ваш Возраст:')->hint('Возраст может быть от 18 до 100')?>
    <?= $form->field($model, 'date')->label('Дата посещения')->input('date',['min' => '2020-11-30', 'max' => date('Y-m-d'), 'onkeydown' => 'return false'])?>
    <?= $form->field($model, 'favoriteK')->label('Любимая кухня:')->dropdownlist([
    	'A' => 'Русская',
    	'Б' => 'Японская',
    	'В' => 'Итальянская',
    	'Г' => 'Польская',
    	'Д' => 'Турецкая']
    ) ?>
    <?= $form->field($model, 'isRecommend')->label('Порекомендуете нас друзьям?')
    	->radiolist([ 
    		'1' => 'Да',
        	'2' => 'Нет'
        ]) ?>
    <?= $form->field($model, 'textOfFeedback')->label('Текст отзыва:')->textarea() ?>

	    <div class="form-group">
	        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
	    </div>
	    <?php ActiveForm::end(); ?>
	</div>


		<?php if (Yii::$app->session->hasFlash('FeedbackSubmitted')): ?>
	<div class="col-lg-6">

		<h3>Переданный отзыв</h3>
		<table class="table table-striped table-bordered">
			<tbody>
    <tr>
      <th class="col-lg-9">Ваше имя:</th>
      <td> <?= Html::encode($model->name) ?></td>
    </tr>
    <tr>
      <th>Ваш e-mail:</th>
      <td> <?= Html::encode($model->email) ?></td>
    </tr>
    <tr>
      <th>Дата посещения:</th>
      <td> <?= Html::encode($model->date) ?></td>
    </tr>
    <tr>
      <th>Ваш возраст:</th>
      <td> <?= Html::encode($model->age) ?></td>
    </tr>
    <tr>
      <th>Любимая кухня:</th>
      <td> <?= Html::encode($model->favoriteK) ?></td>
    </tr>
    <tr>
      <th>Порекомендуете нас друзьям?</th>
      <td> <?= Html::encode($model->isRecommend) ?></td>
    </tr>
    <tr>
      <th>Текст отзыва:</th>
      <td> <?= Html::encode($model->textOfFeedback) ?></td>
    </tr>
</tbody>
		</table>
	</div>
</div>
    <?php endif; ?>
</div>
