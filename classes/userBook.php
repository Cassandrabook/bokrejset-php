<?php

    class UserBook extends DB { 
        protected $table = "userbooks";
        
        public function getAllUserBooks(){
            return $this->getAll($this->table);
        }
    }