<?php

    require_once "db.php";

    class UserBookModel extends DB { 
        protected $table = "userbooks";
        
        public function getAllUserBooks(){
            return $this->getAll($this->table);
        }

        public function addReview(string $review, int $userId, int $bookId){
            $sql = "INSERT INTO $this->table (review,userId,bookId) VALUES (?,?,?)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute([$review, $userId, $bookId]);
        }
    }