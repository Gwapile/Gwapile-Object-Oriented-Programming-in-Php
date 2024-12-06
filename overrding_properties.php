<?php

class teku_student{
    public $student;
    private $email;
    public $role = "gwapile-member";

    public function __construct($student, $email){
        $this->student = $student;
        $this->email = $email;
    }

    public function addstudent(){
        return "$this->email teku admin added a new friend";
    }

    public function message(){
        return "$this->email sent a new message";
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

    public $role = "Admin";
 
}
$gwapile_student1 = new teku_student("vencha","vencha@go.tz");
$gwapile_student2 = new teku_student("juma","juma@go.tz");
$gwapile_student3 = new gwapileAdmin("gwapile","gwapilej@go.tz");


echo $gwapile_student1->role ."<br>";
echo $gwapile_student2->role ."<br>";

echo $gwapile_student1->message() ."<br>";
echo $gwapile_student2->message() ."<br>";

?>