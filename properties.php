<?php

class gwapile_hosting{

   public  $hosting_name = "gwapilehost";
   public  $hosting_email = "gwapilehost@go.tz";

    //properties and methods are defined
   //i wanna addfriend
   public function addFriend() {
    return "$this->hosting_name  you added a new friend";
   }
   public function teku(){
    return "teku admin says that you have already registerd 
    course for the selected semister";
   }
}
$gwapile1 = new gwapile_hosting();
$gwapile2 = new gwapile_hosting();

echo $gwapile1->hosting_name."<br>";
echo $gwapile1->hosting_email."<br>";
echo $gwapile1->addFriend() ."<br>";
echo $gwapile2->teku().'<br>';

//let's me try to update the info by using a different variable,using same arrows
$gwapile2->hosting_name="vencha";
$gwapile2->hosting_email="vencha@gmail.com";

echo $gwapile2->hosting_name."<br>";
echo $gwapile2->hosting_email."<br>";
echo $gwapile2->addFriend() ."<br>";
echo $gwapile2->teku().'<br>';


//here its the simple example that we add a properties & method using public function
/*to get all the variables inside the properties
the example */

print_r(get_class_vars('gwapile_hosting'));
print_r(get_class_methods('gwapile_hosting'));


?>