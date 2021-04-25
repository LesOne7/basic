<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title='Лабораторная работа №2';
?>
<div class="alert alert-success">
   Лабораторная работа №2
</div>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col text-center">
			<a class="btn btn-primary btn-lg" href="/basic/web/index.php?r=labs/authors" role="button">Авторы</a>
			<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/genres" role="button">Жанры</a>
			<a class="btn btn-warning btn-lg" href="/basic/web/index.php?r=labs/books" role="button">Книги</a>
		</div> 
	</div>
</div>

<p></p>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col text-center">
			<a class="btn btn-default btn-lg" href="/basic/web/index.php?r=labs/query" role="button">Запросы</a>
			<a class="btn btn-info btn-lg" href="/basic/web/index.php?r=labs/find" role="button">Поиск</a>
		</div>
	</div>
</div>
<p></p>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col text-center">
			<a class="btn btn-success btn-lg" href="/basic/web/index.php?r=labs/save" role="button">Добавить автора</a>
			<a class="btn btn-danger btn-lg" href="/basic/web/index.php?r=labs/delete" role="button">Удалить автора</a>
		</div>
	</div>
</div>
