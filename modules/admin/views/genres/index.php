<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\GenresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Жанры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genres-index">
    <a href="index.php?r=admin" class="btn btn-default">
        <span class="btn-label"><i class="glyphicon glyphicon-arrow-left"></i></span>Админка
    </a>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить жанр', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id_g',
            'nameofg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
