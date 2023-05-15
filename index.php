<?php
    
    require 'classes/db.php';
    require 'classes/user-view.php';
    require 'classes/user.php';
    require 'classes/book-view.php';
    require 'classes/book.php';
    require 'classes/userBook-view.php';
    require 'classes/userBook.php';

    $pdo = require 'partials/connect.php';

    $db = new DB($pdo);
    $userModel = new User($pdo);
    $userView = new UserView();

    $bookModel = new Book($pdo);
    $bookView = new BookView();

    $userBookModel = new UserBook($pdo);
    $userBookView = new UserBooksView(); 
    
    include 'partials/header.php';

    //Hämta alla användare

    // $users = $db->getAll("users");
    // $userView->renderAllUsersAsList($users);

    $users = $userModel->getAllUsers();
    $userView->renderAllUsersAsList($userModel->getAllUsers());

    $books = $bookModel->getAllBooks();
    $bookView->renderAllBooksAsList($bookModel->getAllBooks());

    $userBooks = $userBookModel->getAllUserBooks();
    $userBookView->renderAllUserBooksAsList($userBookModel->getAllUserBooks());

   



    //Hämta alla böcker
    // $books = $db->getAll("books");
    // echo "<ul>";
    // foreach($books as $book){
    //     echo "<li> {$book['name']} </li>";
    // }
    // echo "</ul>";

    //Hämtar userId och bookId
    // $userbooks = $db->getAll("userbooks");
    // echo "<ul>";
    // foreach($userbooks as $userbook){
    //     echo "<li> Användare {$userbook['userId']} har läst bok {$userbook['bookId']} </li>";
    // }
    // echo "</ul>";

   include 'partials/footer.php';
?>