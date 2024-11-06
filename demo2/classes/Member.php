<?php

require "./Book.php";

class Member {

    public function __construct(
        private $name, private $memberId, private $joinDate, private $expireDate, private $membership = "Normal"
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
            echo "$book->title is not avaliable at this moment";
        }

    }



}

?>