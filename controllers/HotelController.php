<?php


namespace app\controllers;


use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;

class HotelController extends Controller
{
    public function actionLab5()
    {
        return $this->render('lab5');
    }
}