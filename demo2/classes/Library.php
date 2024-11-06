<?php

class Library {

    public function __construct(private $books = [], private $members = []){}

    public static function addBook(Book $newBook){
        $this->books[] = $newBook;
        echo "$newBook->title is added to the library";
    }

    public static function removeBook($title){
        $key = array_search($title, $this->books);

        unset($this->books[$key-1]);
    }


}

?>