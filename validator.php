<?php
// Check if the form is submitted 
$valid = false;
if ( isset( $_GET['submit'] ) )
 { 
    $email = $_GET['email'];
    $date = $_GET['date'];
    $card_number = $_GET['card_number'];
    $cvv = $_GET['cvv'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $address = $_GET['address'];
    $country = $_GET['country'];
    $city = $_GET['city'];
    $zip = $_GET['zip'];
    $phone = $_GET['phone'];

    // if($valid){
    //     header("Location: thankyou.php");
    //     exit();
    // }
    
};
echo $firstname; 
echo $lastname;


?>


