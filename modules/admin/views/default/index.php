<div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <div class="jumbotron">
        <h1>Административная часть</h1>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col text-center">
                <a class="btn btn-primary btn-lg" href="/basic/web/index.php?r=admin/authors/index" role="button">Авторы</a>
                <a class="btn btn-success btn-lg" href="/basic/web/index.php?r=admin/books/index" role="button">Книги</a>
                <a class="btn btn-warning btn-lg" href="/basic/web/index.php?r=admin/genres/index" role="button">Жанры</a>
            </div>
        </div>
    </div>

</div>
