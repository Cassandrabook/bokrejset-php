<?php
    
    require 'classes/db.php';
    require 'classes/user-view.php';
    require 'classes/user-model.php';
    // require 'classes/book-view.php';
    // require 'classes/book-model.php';
    // require 'classes/userBook-view.php';
    // require 'classes/userBook-model.php';

    $pdo = require 'partials/connect.php';

    $userModel = new UserModel($pdo);
    $userView = new UserView();

    // $bookModel = new BookModel($pdo);
    // $bookView = new BookView();

    // $userBookModel = new UserBookModel($pdo);
    // $userBookView = new UserBooksView(); 
    
    include 'partials/header.php';
    include 'partials/nav.php';

    $users = $userModel->getAllUsers();
    $userView->renderAllUsersAsList($userModel->getAllUsers());

    // $books = $bookModel->getAllBooks();
    // $bookView->renderAllBooksAsList($bookModel->getAllBooks());

    // $userBooks = $userBookModel->getAllUserBooks();
    // $userBookView->renderAllUserBooksAsList($userBookModel->getAllUserBooks());

   include 'partials/footer.php';
?>