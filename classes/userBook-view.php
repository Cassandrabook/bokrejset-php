<?php

class UserBooksView {
    public function renderAllUserBooksAsList(array $userbooks): void{
        echo "<ul>";
        foreach($userbooks as $userbook){
            echo "<li> Användare {$userbook['userId']} har läst bok {$userbook['bookId']} </li>";
        }
        echo "</ul>";
    }
}