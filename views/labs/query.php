<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>


<h1>Книги, написанные в 20 веке</h1>

<table class="table table-striped table-bordered">
	<thead> 
		<tr>
	        <th >Название книги</th>
	        <th>Дата публикации</th>
	    </tr>
	</thead>
	<tbody>
		

<?php foreach ($books as $book): ?>
	<tr>
      <td> <?= Html::encode("{$book['title_b']}") ?></td>
      <td> <?= Html::encode("{$book['dateofpublication']}") ?></td>
    </tr>
<?php endforeach; ?>
	</tbody>
</table>

<h1>Количество книг авторов</h1>

<table class="table table-striped table-bordered">
	<thead> 
		<tr>
	        <th >Имя автора</th>
	        <th>Количество книг</th>
	    </tr>
	</thead>
	<tbody>
		

<?php foreach ($countb as $count): ?>
	<tr>
      <td> <?= Html::encode("{$count['name_a']}") ?></td>
      <td> <?= count($count['books']) ?></td>
    </tr>
<?php endforeach; ?>
	</tbody>
</table>
