<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\FeedbackForm;
use app\models\Authors;
use app\models\Genres;
use app\models\Books;
use yii\data\Pagination;
use yii\db\Query;
use app\models\FindBookForm;
use app\models\SaveAuthorForm;
use app\models\DeleteAuthorForm;
class LabsController extends Controller
{

    public function actionInfo()
    {
        return $this->render('info');
    }

    public function actionLab1()
    {
        //return $this->render('lab1');
        $model = new FeedbackForm();

        if ($model->load(Yii::$app->request->post()) )
        {
           // данные в $model удачно проверены

           // делаем что-то полезное с $model ...
 
            Yii::$app->session->setFlash('FeedbackSubmitted');

        } 
           // либо страница отображается первый раз, либо есть ошибка в данных
           return $this->render('lab1', ['model' => $model]);
            
    }

    public function actionLab2()
    {
        return $this->render('lab2');

    }

    public function actionLab3()
    {
        return $this->render('lab3');
    }

    public function actionTeach()
    {
        return $this->render('teach');
    }

    public function actionAuthors()
    {
        $query = Authors::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $authors = $query->orderBy('id_a')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('authors', [
            'authors' => $authors,
            'pagination' => $pagination,
        ]);
    }

    public function actionGenres()
    {
        $query = Genres::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $genres = $query->orderBy('id_g')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('genres', [
            'genres' => $genres,
            'pagination' => $pagination,
        ]);
    }

    public function actionBooks()
    {
        $query = Books::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $books = $query->orderBy('id_b')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('books', [
            'books' => $books,
            'pagination' => $pagination,
        ]);
    }

    public function actionQuery()
    {
        $command = new Query();
        $command->select(['title_b', 'dateofpublication'])
        ->from('books')
        ->where(['between', 'dateofpublication', '1900', '1999'])
        ->orderBy('dateofpublication ASC');

        $books = $command->all();
        $countb = Authors::find()->with('books')->all();
         // echo "<pre>";
         // var_dump($countb);
         // echo "</pre>";
        return $this->render('query', [
            'books' => $books,
            'countb' => $countb
        ]);
    }

    public function actionFind()
    {
        $model = new FindBookForm();

        if($model->load(Yii::$app->request->post())){
            $books = Books::find()->with('authors', 'genres')
                ->where(['like', 'title_b', '%'. $model->title_b .'%', false])
                ->all();

            if(count($books) > 0)
                return $this->render('findres', [
                'model' => $model,
                'books' => $books,
            ]);
            else
                Yii::$app->session->setFlash('error', 'Ничего не найдено');
                 return $this->refresh();
        }
        return $this->render('find', [
                'model' => $model,
                'books' => $books]);
    }

    public function actionSave()
    {
        $model = new SaveAuthorForm();

        // $model->name_a = 'Автор';
        // $model->dateofbirth = 'f';
        // $model->save();

        if ($model->load(Yii::$app->request->post()))
        {
            if ($model->save())
            {
                Yii::$app->session->setFlash('success', 'Автор добавлен');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        return $this->render('save', ['model' => $model]);
    }

    public function actionDelete()
    {

        $model = new DeleteAuthorForm();


        if ($model->load(Yii::$app->request->post()))
        {
            $id_a = Authors::find()->where(['id_a'=>$model->id_a])->one();
            if($id_a == null)
            {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }else {
                $id_a->delete();
                Yii::$app->session->setFlash('success', 'Автор удален');
                return $this->refresh();
            }
        }
        return $this->render('delete', ['model' => $model]);
    }


}