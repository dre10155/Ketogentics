

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Keto Smart</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/inner.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="fonts/fonts.css">
</head>
<body>
	<div class="chk-top">
    	<div class="container">
			<img src="images/logo.png" alt="" class="logo">
        </div>
    </div>
    
    <div class="top-strip">
    <div class="container">
        <p class="strp-txt"><img src="images/left-arw.png" class="left-arw tadda">Free <span>Keto Smart</span> Recipe Book With Every Order<img src="images/rgt-arw.png" class="rgt-arw taddaR"></p>
    </div>
</div>
	
    <div class="chk-cont">
    	<div class="container">
            <div id="scene" class="paralex-img1" data-calibrate-x="false" data-calibrate-y="true" data-invert-x="false" data-invert-y="true" data-limit-x="false" data-limit-y="false" data-scalar-x="15" data-scalar-y="25" data-origin-x="0.0" data-origin-y="0.0">
            	<img src="images/paralex-img1.png" class="layer" data-depth="0.20">
            </div>
        
            <div id="scene2" class="paralex-img2" data-calibrate-x="false" data-calibrate-y="true" data-invert-x="false" data-invert-y="true" data-limit-x="false" data-limit-y="false" data-scalar-x="15" data-scalar-y="25" data-origin-x="0.0" data-origin-y="0.0">
                <img src="images/paralex-img2.png" class="layer" data-depth="0.30">
            </div>
        
            <div id="scene3" class="paralex-img3" data-calibrate-x="false" data-calibrate-y="true" data-invert-x="false" data-invert-y="true" data-limit-x="false" data-limit-y="false" data-scalar-x="15" data-scalar-y="25" data-origin-x="0.0" data-origin-y="0.0">
                <img src="images/paralex-img3.png" class="layer" data-depth="0.40">
            </div>
        
            <div id="scene4" class="paralex-img4" data-calibrate-x="false" data-calibrate-y="true" data-invert-x="false" data-invert-y="true" data-limit-x="false" data-limit-y="false" data-scalar-x="15" data-scalar-y="25" data-origin-x="0.0" data-origin-y="0.0">
                <img src="images/paralex-img4.png" class="layer" data-depth="0.50">
            </div>
            
            <div class="chk-inr">
            	<div class="odr-sum">
                	<p class="odr-sum-hd"><span class="odr-sum-txt1">Order Summary</span> <span class="odr-sum-txt2">You Save<br class="show-desk show-tab"> 20%</span></p>
                    <div class="odr-sum-det">
                    	<img src="images/odr-sum-prd.png" alt="" class="odr-sum-prd">
                        <table class="odr-sum-info" cellspacing="0">
                        	<tr>
                            	<td colspan="2">Keto Lifestyle Package</td>
                            </tr>
                            <tr>
                            	<td>Keto Smart Guide</td>
                                <td><small>$60.00</small><br> $44.95</td>
                            </tr>
                            <tr>
                            	<td>Keto Recipe Book</td>
                                <td>Free</td>
                            </tr>
                            <tr>
                            	<td>Total</td>
                                <td>$44.95</td>
                            </tr>
                            <tr>
                            	<td>You Saved</td>
                                <td>$16.95</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p class="chk-frm-hd"><img src="images/frm-hd-arw.png" alt="" class="frm-hd-arw">Checkout & Download Now</p>

<div id="app">

    <!-- <div class="product-image">
      <img src="" />
    </div>
  
    <div class="product-info">
      <h1>{{ product }}</h1>
      <p>{{ description }}</p>
    </div>
       -->
       <form method="post" action="validator.php">
        <div class="frm-container">
            <div class="frm-bx">
                <p class="frm-bx-hd"><img src="images/frm-bx-hd-img1.png" alt="" class="frm-bx-hd-img">E-Book Delivery Email</p>
                <div class="inp-field full fl">
                    <input name="email" type="text" name="" id="" placeholder="Enter Email Address">
                </div>
            </div>
            
            <div class="frm-bx">
                <p class="frm-bx-hd"><img src="images/frm-bx-hd-img2.png" alt="" class="frm-bx-hd-img frm-bx-hd-img2">Payment Information</p>
                <img src="images/cards.png" alt="" class="cards">
                <div class="clearall"></div>
                <div class="inp-field full fl">
                    <input name="card_number" maxlength="16"onkeypress="return isNumberKey(event)" type="tel" placeholder="Card number" id="ccnum">
                </div>
                <div class="inp-field half fl">
                    <input name="date" type="tel" onkeypress="return isNumberKey(event)" id="" placeholder="Exp.  YYMM"  maxlength="4">
                    
                </div>
                <div class="inp-field half fr">
                    <input name="cvv" type="tel"  id="" placeholder="CVV" onkeypress="return isNumberKey(event)" maxlength="3">
                    <a href="cvv.html" class="cvv-pop fancybox fancybox.iframe">?</a>
                </div>
            </div>
            
            <div class="frm-bx">
                <p class="frm-bx-hd"><img src="images/frm-bx-hd-img3.png" alt="" class="frm-bx-hd-img frm-bx-hd-img3">Billing Information</p>
                <div class="inp-field full fl">
                    <input type="text" name="firstname" id="" placeholder="First Name">
                </div>
                <div class="inp-field full fl">
                    <input name="lastname" type="text"  id="" placeholder="Last Name">
                </div>
                <div class="inp-field full fl">
                    <input  type="text" name="address" id="" placeholder="Address">
                </div>
                <div class="inp-field-sel half fl">
                    <select name="country"  id="" class="country" v-model="country">
                        <option disabled value="">Country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                    </select>
                </div>
                <div v-if="country === 'CA'" class="inp-field-sel half fr" id="response">
                    <select name="province">
                        <option value="">Province</option>
                        <option value="Alberta">Alberta</option>
                        <option value="British Columbia">British Columbia</option>
                        <option value="Manitoba">Manitoba</option>
                        <option value="New Brunswick">New Brunswick</option>
                        <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                        <option value="Northwest Territories">Northwest Territories</option>
                        <option value="Nova Scotia">Nova Scotia</option>
                        <option value="Nunavut">Nunavut</option>
                        <option value="Ontario">Ontario</option>
                        <option value="Prince Edward Island">Prince Edward Island</option>
                        <option value="Quebec">Quebec</option>
                        <option value="Saskatchewan">Saskatchewan</option>
                        <option value="Yukon Territory">Yukon Territory</option>
                     </select>
                </div>
                <div v-else class="inp-field-sel half fr" id="response">
                    <select name="province"><option>State</option>
                        <option value="Alabama" >Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="California">California</option>
                        <option value="Colorado" >Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware">Delaware</option>
                        <option value="District of Columbia">District of Columbia</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virgin Islands of the U.S.">Virgin Islands of the U.S.</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>
                    </select>
                </div>
                <div class="inp-field half fl">
                    <input  type="text" name="city" id="" placeholder="City">
                </div>
                <div v-if="country === 'CA'" class="inp-field half fr">
                    <input  type="text" name="zip" maxlength="6" id="" placeholder="Postal Code" onkeypress="">
                </div>
                <div v-else class="inp-field half fr">
                    <input  type="tel" name="zip"  maxlength="5" id="" placeholder="Zip Code" onkeypress="return isNumberKey(event)">
                </div>
                <div class="inp-field full fl">
                    <input   type="tel" name="phone" id="" maxlength="10" placeholder="Phone" onkeypress="return isNumberKey(event)">
                </div>
            </div>
            <button name="submit" type="submit" class="chk-btn pulse">Complete Your Order</button>
            <img src="images/chk-secur-log.png" alt="" class="chk-secur-log">
        </div>
    </form>
  </div> 
  <div class="footer">
    <p class="ftr-txt"><a href="terms.php" class="fancybox fancybox.iframe">Terms & Conditions</a> | <a href="privacy.php" class="fancybox fancybox.iframe">Privacy Policy</a> | <a href="contact.php" class="fancybox fancybox.iframe"s>Contact Us</a></p>
    <p class="ftr-txt btm-ftr-txt">Copyright &copy; <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> Keto Smart. All rights reserved.</p>
</div>
</div>
</div>
  
   <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
   <script>
       var app = new Vue({
  el: '#app',
  data: {
    // product: 'Socks',
    // description: 'A pair of warm fuzzy socks'
    country:''
  } 
 
})
function isNumberKey(evt)
{
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode != 46 && charCode > 31 
	&& (charCode < 48 || charCode > 57))
	 return false;

  return true;
}

var txtCardNumber = document.querySelector("#ccnum");
txtCardNumber.addEventListener("input", onChangeTxtCardNumber);

function onChangeTxtCardNumber(e) {		
    var cardNumber = txtCardNumber.value;
 
	  // Do not allow users to write invalid characters
    var formattedCardNumber = cardNumber.replace(/[^\d]/g, "");
    formattedCardNumber = formattedCardNumber.substring(0, 16);
  
    // // Split the card number is groups of 4
    // var cardNumberSections = formattedCardNumber.match(/\d{1,4}/g);
    // if (cardNumberSections !== null) {
    //     formattedCardNumber = cardNumberSections.join(' ');	
    // }
	
    // console.log("'"+ cardNumber + "' to '" + formattedCardNumber + "'");
  
    // // If the formmattedCardNumber is different to what is shown, change the value
    // if (cardNumber !== formattedCardNumber) {
    //     txtCardNumber.value = formattedCardNumber;
    // }
}
   </script>