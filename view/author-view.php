<?php

class AuthorView {
    public function renderAllAuthorsAsList(array $authors): void{
        echo "<h4>Författare:</h4>";
        echo "<ul>";
        foreach($authors as $author){
            echo "<li><a href='authors.php?author_id={$author['id']}'>{$author['firstname']} {$author['lastname']}</a></li>";
        echo "</ul>";
        }
    }
}