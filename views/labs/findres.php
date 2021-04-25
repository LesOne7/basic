<h3>Результат поиска</h3>
<table class="table table-striped table-bordered">
  <thead> 
    <tr>
        <th>Название книги</th>
        <th>Дата публикации</th>
    </tr>
  </thead>
<tbody>
<?php foreach ($books as $book): ?>
  <tr>
    <td> <?= $book['title_b'] ?></td>
    <td> <?= $book['dateofpublication'] ?></td>


  </tr>
<?php endforeach; ?>
</tbody>
</table>