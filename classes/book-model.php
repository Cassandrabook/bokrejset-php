<?php

    require_once "db.php";

    class BookModel extends DB { 
        protected $table = "books"; 
        
        public function getAllBooks(){
            return $this->getAll($this->table);
        }

        public function addBook(string $title, int $pages, int $authorId){
            $sql = "INSERT INTO $this->table ('title', 'pages', 'author_id') VALUES (?, ?, ?)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute([$title, $pages, $authorId]);
        }
    }