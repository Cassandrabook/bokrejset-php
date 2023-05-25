<!-- <?php
    // require_once 'model/author-model.php';
    
    // $authorModel = new AuthorModel(connect($host, $db, $user, $password));
?> -->

<form action="form-handlers/author-form-handler.php" method="post">
    <div>
        <label for="firstname">Förnamn: </label> <input type="text" name="firstname" id="firstname">
    </div>
    <div>
        <label for="lastname">Efternamn: </label> <input type="text" name="lastname" id="lastname">
    </div>
    <button type="submit">Lägg till författare</button>  
</form>