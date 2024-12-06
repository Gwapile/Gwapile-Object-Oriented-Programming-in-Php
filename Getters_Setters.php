<?php

class teku_student{
    public $student;
    private $email;

    public function __construct($student, $email){
        $this->student = $student;
        $this->email = $email;
    }

    public function addstudent(){
        return "$this->email teku admin added a new friend";
    }
    // getters
    public function getemail(){
     return  $this->email;
   }


    // setters

    public function setEmail($email){
             if(strpos($email, "@") > -1){
                $this->email = $email;
             }
    }
}

$gwapile_student1 = new teku_student("vencha","vencha@go.tz");
$gwapile_student2 = new teku_student("juma","juma@go.tz");


//execute a program using setters
$gwapile_student1->setEmail("gwapilevencha@gmail.co.tz");

//execute a program using getters
echo   $gwapile_student1->getEmail() ."<br>";
echo   $gwapile_student1->getEmail();


?>