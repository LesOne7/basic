<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Books */

$this->title = 'Редактирование книги: ' . $model->id_b;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_b, 'url' => ['view', 'id' => $model->id_b]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="books-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'authors' => $authors,
        'genres' => $genres
    ]) ?>

</div>
