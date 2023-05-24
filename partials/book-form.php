<?php
    require_once 'model/author-model.php';
    
    $authorModel = new AuthorModel(connect($host, $db, $user, $password));
?>

<form action="form-handlers/book-form-handler.php" method="post">
    <div>
        <label for="title">Titel: </label> <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="pages">Antal sidor: </label> <input type="text" name="pages" id="pages">
    </div>
    <div>
        <label for="author">Författare:</label>

        <select name="author-id" id="author">
            <option value="">--Välj författare--</option>

            <?php
                $authors = $authorModel->getAllAuthors();
                foreach($authors as $author){
                    echo "<option value='{$author['id']}'>
                        {$author['firstname']} {$author['lastname']}
                    </option>";
                }
            ?>
        </select>
    </div>
    <button type="submit">Lägg till bok</button>  
</form>