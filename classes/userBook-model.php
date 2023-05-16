<?php

    class UserBookModel extends DB { 
        protected $table = "userbooks";
        
        public function getAllUserBooks(){
            return $this->getAll($this->table);
        }
    }