<?php


class teku_student{

    public $stdname;
    private $email;
    //public $email;

    public function __construct($stdname, $stdemail){
        $this->stdname =$stdname;
        $this->stdemail =$stdemail;
    }
    public function addStudent(){
        return "$this->email gwapile added a new student";
    }
}
$std_1 = new teku_student("vencha","gwapile@gmail.com");
$std_2 = new teku_student("juma","juma@gmail.com");

//$std_1->email=3;
//echo $std_1->email ."<br>";
//echo $std_2->email ."<br>";

echo $std_1->addStudent();
?>