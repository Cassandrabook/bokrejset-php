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

    include 'partials/author-form.php';
    include 'partials/footer.php';

?>