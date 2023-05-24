<?php
    require 'classes/db.php';
    require 'view/user-view.php';
    require 'model/user-model.php';
    require 'view/book-view.php';
    require 'model/book-model.php';
    require 'view/userBook-view.php';
    require 'model/userBook-model.php';

    $pdo = require 'partials/connect.php';

    $userModel = new UserModel($pdo);
    $userView = new UserView();

    $bookModel = new BookModel($pdo);
    $bookView = new BookView();
    $userBookModel = new UserBookModel($pdo);
    $userBookView = new UserBooksView();

    include 'partials/header.php';
    include 'partials/nav.php';

    $userView->renderAllUsersAsList($userModel->getAllUsers());

    if(isset($_GET['userId'])){
        $userId = $_GET['userId'];
        $books = $userBookModel->getBooksByUserId($userId);
        $userBookView->renderAllUserBooksAsList($books);
    }

   include 'partials/footer.php';

?>