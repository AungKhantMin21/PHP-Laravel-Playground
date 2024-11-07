<?php

require "./Book.php";

class Member {

    public function __construct(
        public $name, public $memberId, public $joinDate, public $expireDate, public $membership = "Normal"
        ){}

    public function isMembershipActive(){
        $today = date("Y-m-d");
        return $today >= $this->joinDate && $today <= $this->endDate;
    }
    
    public function borrowBook(Book $book){
        
        if(!$this->isMembershipActive()){
            echo "Membership inactive. Cannot do this service.";
            return;
        }
        if(!$book->isAvaliable()){
            $book->setAvaliable(false);
            echo "$this->name borrows $book->title";
            return;
        } else {
            echo "$book->title is not available at this moment";
        }

    }



}

?>