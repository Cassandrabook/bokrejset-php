<?php
    require 'classes/db.php';
    require 'classes/user-view.php';
    require 'classes/user-model.php';

    $pdo = require 'partials/connect.php';

    $db = new DB($pdo);

    $userModel = new UserModel($pdo);
    $userView = new UserView();

    include 'partials/header.php';
    include 'partials/nav.php';

    $users = $userModel->getAllUsers();
    $userView->renderAllUsersAsList($userModel->getAllUsers());

   include 'partials/footer.php';

?>