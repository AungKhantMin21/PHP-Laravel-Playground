<?php

class Book {

    public function __construct(protected $title,protected $author, protected $avaliable){}


    public function isAvaliable(){
        return $this->avaliable;
    }

    public function getDetails(){
        $book = [
            "title" => $this->title,
            "author" => $this->author,
            "available" => $this->avaliable
        ];
        return $book;
    }

    public function setAvaliable($status){
        $this->avaliable = $status;

        if($status == true){
            echo "$this->title is set to avaliable status";
        } else {
            echo "$this->title is set to not avaliable status.";
        }
    }

}



?>