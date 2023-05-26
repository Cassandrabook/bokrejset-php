<?php

    class AuthorModel extends DB { 
        protected $table = "authors"; 
        
        public function getAllAuthors(){
            return $this->getAll($this->table);
        }

        public function addAuthor(string $firstname, string $lastname){
            $sql = "INSERT INTO $this->table (firstname,lastname) VALUES (?,?)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute([$firstname, $lastname]);
        }

        public function getBooksByAuthorId($authorId){
            $sql = "SELECT b.title, b.pages, a.firstname, a.lastname FROM books AS b INNER JOIN authors AS a ON b.author_id = a.id WHERE a.id = :author_id";
            $statement = $this->pdo->prepare($sql);
            $statement->execute(['author_id' => $authorId]);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>