<?php
    require 'classes/db.php';
    require 'view/author-view.php';
    require 'model/author-model.php';

    $pdo = require 'partials/connect.php';

    $authorModel = new AuthorModel($pdo);
    $authorView = new AuthorView();

    include 'partials/header.php';
    include 'partials/nav.php';

    $authorView->renderAllAuthorsAsList($authorModel->getAllAuthors());

    if(isset($_GET['author_id'])){
        $authorId = $_GET['author_id'];
        $authors = $authorModel->getBooksByAuthorId($authorId);
        $authorView->renderAllAuthorsAsList($authors);
    }

    include 'partials/author-form.php';
    include 'partials/footer.php';

?>