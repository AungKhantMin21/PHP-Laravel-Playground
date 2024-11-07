<?php

class Book {

    public function __construct(public $title,public $author, public $available,public $description, public $image){}


    public function isAvailable(){
        return $this->available;
    }

    public function getDetails(){
        $book = [
            "title" => $this->title,
            "author" => $this->author,
            "available" => $this->available,
            "description" => $this->description,
            "image" => $this->image
        ];
        return $book;
    }

    public function setAvailable($status){
        $this->available = $status;

        if($status == true){
            echo "$this->title is set to available status";
        } else {
            echo "$this->title is set to not available status.";
        }
    }

}



?>