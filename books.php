<?php
    require 'classes/db.php';
    require 'classes/book-view.php';
    require 'classes/book-model.php';

    $pdo = require 'partials/connect.php';

    $db = new DB($pdo);

     $bookModel = new BookModel($pdo);
    $bookView = new BookView();

    include 'partials/header.php';
    include 'partials/nav.php';

    $books = $bookModel->getAllBooks();
    $bookView->renderAllBooksAsList($bookModel->getAllBooks());

   include 'partials/footer.php';

?>