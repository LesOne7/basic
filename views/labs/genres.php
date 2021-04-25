<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;


?>
<h1>Genres</h1>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Название жанра</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($genres as $genre): ?>
			<tr>
				<td> <?= Html::encode("{$genre->nameofg}") ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?= LinkPager::widget(['pagination' => $pagination]) ?>