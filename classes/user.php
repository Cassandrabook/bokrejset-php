<?php

class User extends DB { 
    protected $table = "users";
    
    public function getAllUsers(){
        return $this->getAll($this->table);
    }
}