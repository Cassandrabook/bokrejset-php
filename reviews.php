<?php
    require 'classes/db.php';
    require 'classes/userBook-view.php';
    require 'classes/userBook-model.php';

    $pdo = require 'partials/connect.php';

    $db = new DB($pdo);

    $userBookModel = new UserBookModel($pdo);
    $userBookView = new UserBooksView();

    include 'partials/header.php';
    include 'partials/nav.php';

    $userBooks = $userBookModel->getAllUserBooks();
    $userBookView->renderAllUserBooksAsList($userBookModel->getAllUserBooks());

   include 'partials/footer.php';

?>