<?php
    require 'classes/db.php';
    require 'view/book-view.php';
    require 'model/book-model.php';

    $pdo = require 'partials/connect.php';

    $bookModel = new BookModel($pdo);
    $bookView = new BookView();

    include 'partials/header.php';
    include 'partials/nav.php';

    $bookView->renderAllBooksAsList($bookModel->getAllBooks());

    include 'partials/book-form.php';
    include 'partials/footer.php';

?>