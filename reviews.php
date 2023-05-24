<?php
    require 'classes/db.php';
    require 'view/userBook-view.php';
    require 'model/userBook-model.php';

    $pdo = require 'partials/connect.php';

    $userBookModel = new UserBookModel($pdo);
    $userBookView = new UserBooksView();

    include 'partials/header.php';
    include 'partials/nav.php';

    $userBookView->renderAllUserBooksAsList($userBookModel->getAllUserBooks());

    include 'partials/review-form.php';
   include 'partials/footer.php';

?>