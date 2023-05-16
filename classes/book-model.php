<?php

    require_once "db.php";

    class BookModel extends DB { 
        protected $table = "books"; 
        
        public function getAllBooks(){
            return $this->getAll($this->table);
        }

        public function addBook($title, $pages){
            $sql = "INSERT INTO $this->table ('title', 'pages') VALUES (?, ?)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute([$title, $pages]);
        }
    }