<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Books</h1>
<table class="table table-striped table-bordered">
	<thead> 
		<tr>
	        <th >Название книги</th>
	        <th>Дата публикации</th>
	        <th>Автор книги</th>
	        <th>Жанр книги</th>
	    </tr>
	</thead>
	<tbody>
		

<?php foreach ($books as $book): ?>
	<tr>
      <td> <?= Html::encode("{$book->title_b}") ?></td>
      <td> <?= Html::encode("{$book->dateofpublication}") ?></td>
      <td> <?= Html::encode("{$book->authors->name_a}") ?></td>
      <td> <?= Html::encode("{$book->genres->nameofg}") ?></td>
    </tr>
<?php endforeach; ?>
	</tbody>
</table>
<?php



// $books = Books::findOne(1);
//  $genres = $books->genres;

?>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
