<?php

require "./Book.php";


class EBook extends Book {

    public function __construct(private $fileSize, private $format){}

    public function readOnline(){
        return "$this->title can download now, file size - $this->fileSize, format - $this->format";
    }
}



?>