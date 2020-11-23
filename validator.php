<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

##
## Example php -q TestPurchase.php store1
##
require "mpgClasses.php";


//Transition to thankyou.php is transaction is complete and send email with pdf attachment 
if ( isset( $_POST['submit'] ) )
 { 
    /******************* Customer Information Variables ********************/
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $phone_number = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $card_number = $_POST['card_number'];
    $cvv = $_POST['cvv'];
    $instructions ="Make it fast";
    $company_name = '';
    $fax = '453-989-9877';
    $tax1 = '0';
    $tax2 = '0';
    $tax3 = '0';
    $shipping_cost = '0';

    /**************************** Request Variables *******************************/
    $store_id='gwca039189';
    $api_token='Zo9bzqKYutjMflZb5UUw';
    // $store_id='store5';
    // $api_token='yesguy';


/************************* Transactional Variables ****************************/
$type='purchase';
$cust_id='DRE10155';
$order_id='KETO-'.date("dmy-G:i:s");
$amount='5.00';
$pan=$card_number;
$expiry_date=$date;
$crypt='7';
// $dynamic_descriptor='123';
// $status_check = 'true';
/*********************** Line Item Variables **************************/
$item_name[0] = 'Keto Smart The Complete Guide';
$item_quantity[0] = '1';
$item_product_code[0] = 'JRSCDA344';
$item_extended_amount[0] = $amount;
/******************** Customer Information Object *********************/
$mpgCustInfo = new mpgCustInfo();
/********************** Set Customer Information **********************/
$billing = array(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'company_name' => $company_name,
    'address' => $address,
    'city' => $city,
    'province' => 'NA',
    'postal_code' => $zip,
    'country' => $country,
    'phone_number' => $phone_number,
    'fax' => $fax,
    'tax1' => $tax1,
    'tax2' => $tax2,
    'tax3' => $tax3,
    'shipping_cost' => $shipping_cost
    
    
    );
$mpgCustInfo->setBilling($billing);
$shipping = array(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'address' => $address,
    'company_name' => $company_name,
    'city' => $city,
    'province' => 'NA',
    'postal_code' => $zip,
    'country' => $country,
    'phone_number' => $phone_number,
    'fax' => $fax,
    'tax1' => $tax1,
    'tax2' => $tax2,
    'tax3' => $tax3,
    'shipping_cost' => $shipping_cost

    );
$mpgCustInfo->setShipping($shipping);
$mpgCustInfo->setEmail($email);
$mpgCustInfo->setInstructions($instructions);
/*********************** Set Line Item Information *********************/
$item[0] = array(
    'name'=>$item_name[0],
    'quantity'=>$item_quantity[0],
    'product_code'=>$item_product_code[0],
    'extended_amount'=>$item_extended_amount[0]
    );

$mpgCustInfo->setItems($item[0]);
/***************** Transactional Associative Array ********************/
$txnArray=array(
    'type'=>$type,
    'order_id'=>$order_id,
    'cust_id'=>$cust_id,
    'amount'=>$amount,
    'pan'=>$pan,
    'expdate'=>$expiry_date,
    'crypt_type'=>$crypt
   );
/**************************** Transaction Object *****************************/
$mpgTxn = new mpgTransaction($txnArray);

/******************** Set Customer Information ************************/
$mpgTxn->setCustInfo($mpgCustInfo);
/******************* Credential on File **********************************/
// $cof = new CofInfo();
// $cof->setPaymentIndicator("U");
// $cof->setPaymentInformation("2");
// $cof->setIssuerId("168451306048014");
// $mpgTxn->setCofInfo($cof);
/****************************** Request Object *******************************/
$mpgRequest = new mpgRequest($mpgTxn);
if($country == "CA"){
    $mpgRequest->setProcCountryCode("CA"); //"CA" for sending transaction to CA environment
}
else{
    $mpgRequest->setProcCountryCode("US"); //"US" for sending transaction to US environment

}

$mpgRequest->setTestMode(true); //false or comment out this line for production transactions
/***************************** HTTPS Post Object *****************************/
/* Status Check Example
$mpgHttpPost  =new mpgHttpsPostStatus($store_id,$api_token,$status_check,$mpgRequest);
*/
$mpgHttpPost = new mpgHttpsPost($store_id,$api_token,$mpgRequest);
/******************************* Response ************************************/
$mpgResponse=$mpgHttpPost->getMpgResponse();
print("\nCardType = " . $mpgResponse->getCardType());
print("\nTransAmount = " . $mpgResponse->getTransAmount());
print("\nTxnNumber = " . $mpgResponse->getTxnNumber());
print("\nReceiptId = " . $mpgResponse->getReceiptId());
print("\nTransType = " . $mpgResponse->getTransType());
print("\nReferenceNum = " . $mpgResponse->getReferenceNum());
print("\nResponseCode = " . $mpgResponse->getResponseCode());
print("\nISO = " . $mpgResponse->getISO());
print("\nMessage = " . $mpgResponse->getMessage());
print("\nIsVisaDebit = " . $mpgResponse->getIsVisaDebit());
print("\nAuthCode = " . $mpgResponse->getAuthCode());
print("\nComplete = " . $mpgResponse->getComplete());
print("\nTransDate = " . $mpgResponse->getTransDate());
print("\nTransTime = " . $mpgResponse->getTransTime());
print("\nTicket = " . $mpgResponse->getTicket());
print("\nTimedOut = " . $mpgResponse->getTimedOut());
print("\nStatusCode = " . $mpgResponse->getStatusCode());
print("\nStatusMessage = " . $mpgResponse->getStatusMessage());
print("\nHostId = " . $mpgResponse->getHostId());
print("\nIssuerId = " . $mpgResponse->getIssuerId());


    if($mpgResponse->getComplete()=="true"){
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'brandon@pinnacleglobalmarketing.com';                     // SMTP username
            $mail->Password   = 'Kiwi1994!';                               // SMTP password
            $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            //Recipients
            $mail->setFrom('support@ketogenicsmart.com', 'Ketogenics');
            $mail->addAddress($email, $first_name);     // Add a recipient
            // $mail->addAddress('andreas.mendes94@gmail.com');               // Name is optional
            
            // // Attachments
            $mail->addAttachment('./assets/keto.pdf');         // Add attachments
           
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Congratulations" .$first_name. " on your purchase of ketogentics";
            $mail->Body    = 'Health is wealth you one <b>test email!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        // header("Location: thankyou.php");
        // exit();
    }else{
        // header("Location: error.php");
        // exit();
    }
    
};













?>


