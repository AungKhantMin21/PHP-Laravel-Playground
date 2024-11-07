<?php

class Library {

    public function __construct(public $books = [], public $members = []){}
    
    public function addBook(Book $newBook){
        $this->books[] = $newBook;
    }

    public function removeBook($title){
        $key = array_search($title, $this->books);

        unset($this->books[$key-1]);
    }

    public function viewAvailableBooks(){
        return $this->books;
    }
}

?>