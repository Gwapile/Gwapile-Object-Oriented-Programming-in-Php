<?php

class gwapile_name{

   public  $user_name = "gwapilehost";
   public  $email = "gwapilehost@go.tz";

  /*
   public function __construct(){
      $this->user_name ="vencha";
      $this->email = "vencha34@gmail.co.tz";
   }*/
   //second example in construct
   public function __construct($user_name,$email){
      $this->user_name =$user_name;
      $this->email = $email;
   }

    //properties and methods are defined

   //i wanna addfriend
   public function addFriend() {
    return "$this->user_name  you added a new friend";
   }
   public function teku(){
    return "teku admin says that you have already registerd 
    course for the selected semister";
   }
}
$gwapile1 = new gwapile_name("vencha","vencha@gmail.com");
$gwapile2 = new gwapile_name("gwapile","gwapile@go.co.tz");

echo $gwapile1->user_name."<br>";
echo $gwapile1->email."<br>";
echo $gwapile1->addFriend() ."<br>";
echo $gwapile2->teku().'<br>';




?>