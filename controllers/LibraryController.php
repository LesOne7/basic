<?php

namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Authors;
use app\models\Genres;

class LibraryController extends Controller
{
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
}

?>