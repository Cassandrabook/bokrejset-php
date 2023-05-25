<?php

class AuthorView {
    public function renderAllAuthorsAsList(array $authors): void{
        echo "<h4>Författare:</h4>";
        echo "<ul>";
        foreach($authors as $author){
            echo "<li> {$author['firstname']} {$author['lastname']} </li>";
        }
        echo "</ul>";
    }
}