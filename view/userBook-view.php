<?php

class UserBooksView {
    public function renderAllUserBooksAsList(array $userbooks): void{
        echo "<ul>";
        foreach($userbooks as $userbook){
            echo "<li>{$userbook['userName']} har läst boken {$userbook['title']} och gav recensionen: {$userbook['review']}</li>";
        }
        echo "</ul>";
    }
}