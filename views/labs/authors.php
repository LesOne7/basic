<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
<h1>Authors</h1>
<table class="table table-striped table-bordered">
	<thead> 
		<tr>
	        <th >Имя Автора</th>
	        <th >Дата рождения</th>
	    </tr>
	</thead>
	<tbody>
		

<?php foreach ($authors as $author): ?>
	<tr>
      <td> <?= Html::encode("{$author->name_a}") ?></td>
      <td> <?= Html::encode("{$author->dateofbirth}") ?></td>
    </tr>
<?php endforeach; ?>
	</tbody>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
