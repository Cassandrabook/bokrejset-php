<?php
    class Book {
        private string $title;
        private int $pages;
        private int $author_id;

        public function __construct($title, $pages, $author_id){
            $this->title = $title;
            $this->pages = $pages;
            $this->author_id = $author_id;
        }
        
        public function getTitle(): string{
            return $this->title;
        }
        public function getPages(): int{
            return $this->pages;
        }
        public function getAuthorId(): int{
            return $this->author_id;
        }
    }
?>