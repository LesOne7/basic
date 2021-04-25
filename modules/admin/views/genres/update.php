<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Genres */

$this->title = 'Редактирование жанра: ' . $model->id_g;
$this->params['breadcrumbs'][] = ['label' => 'Жанры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_g, 'url' => ['view', 'id' => $model->id_g]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="genres-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
