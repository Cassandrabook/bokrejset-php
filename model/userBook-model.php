<?php

    class UserBookModel extends DB { 
        protected $table = "userbooks";
        
        public function getAllUserBooks(){
            return $this->getAll($this->table);
        }

        public function getBooksByUserId($userId){
            $sql = "SELECT b.title, ub.review 
                    FROM books AS b
                    INNER JOIN userbooks AS ub ON b.id = ub.bookId
                    WHERE ub.userId = :user_id";
            $statement = $this->pdo->prepare($sql);
            $statement->execute(['user_id' => $userId]);
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public function addReview(string $review, int $userId, int $bookId){
            $sql = "INSERT INTO $this->table (review,userId,bookId) VALUES (?,?,?)";
            $statement = $this->pdo->prepare($sql);
            $statement->execute([$review, $userId, $bookId]);
        }
    }