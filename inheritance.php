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

class gwapileAdmin extends teku_student{

 
}
$gwapile_student1 = new teku_student("vencha","vencha@go.tz");
$gwapile_student2 = new teku_student("juma","juma@go.tz");
$gwapile_student3 = new gwapileAdmin("gwapile","gwapilej@go.tz");

echo $gwapile_student3->student ."<br>";
echo $gwapile_student3->getEmail() ."<br>";




?>