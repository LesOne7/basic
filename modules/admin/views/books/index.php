<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BooksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Книги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="books-index">
    <a href="index.php?r=admin" class="btn btn-default">
        <span class="btn-label"><i class="glyphicon glyphicon-arrow-left"></i></span>Админка
    </a>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить книгу', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id_b',
            'title_b',
            'dateofpublication',
//            'FK_id_g',
            [
                    'attribute' => 'FK_id_g',
                    'filter' => \app\models\Genres::find()->select(['nameofg', 'id_g'])->indexBy('id_g')->column(),
                    'value' => 'genres.nameofg',
            ],
//            'FK_id_a',
            [
                'attribute' => 'FK_id_a',
                'filter' => \app\models\Authors::find()->select(['name_a', 'id_a'])->indexBy('id_a')->column(),
                'value' => 'authors.name_a',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
