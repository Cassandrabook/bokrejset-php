<?php
    require 'classes/db.php';
    require 'view/userBook-view.php';
    require 'model/userBook-model.php';
    require 'model/user-model.php'; 

    $pdo = require 'partials/connect.php';

    $userBookModel = new UserBookModel($pdo);
    $userBookView = new UserBooksView();

    $userModel = new UserModel($pdo); 

    include 'partials/header.php';
    include 'partials/nav.php';

    $users = $userModel->getAllUsers();

    foreach ($users as $user) {
        $userId = $user['id'];
        $books = $userBookModel->getBooksByUserId($userId);
        $userBookView->renderAllUserBooksAsList($books);
    }

    include 'partials/review-form.php';
    include 'partials/footer.php';
?>