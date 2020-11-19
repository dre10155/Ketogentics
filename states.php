<?php
if(isset($_POST["country"])){
    // Capture selected country
    $country = $_POST["country"];
     
    // Define country and city array
    $countryArr = array(
		"US" => array(
		
			 '' => 'Select State',

                'AL' => 'Alabama',

                'AK' => 'Alaska',

                'AZ' => 'Arizona',

                'AR' => 'Arkansas',

                'CA' => 'California',

                'CO' => 'Colorado',

                'CT' => 'Connecticut',

                'DE' => 'Delaware',

                'DC' => 'District of Columbia',

                'FL' => 'Florida',

                'GA' => 'Georgia',

                'HI' => 'Hawaii',

                'ID' => 'Idaho',

                'IL' => 'Illinois',

                'IN' => 'Indiana',

                'IA' => 'Iowa',

                'KS' => 'Kansas',

                'KY' => 'Kentucky',

                'LA' => 'Louisiana',

                'ME' => 'Maine',

                'MD' => 'Maryland',

                'MA' => 'Massachusetts',

                'MI' => 'Michigan',

                'MN' => 'Minnesota',

                'MS' => 'Mississippi',

                'MO' => 'Missouri',

                'MT' => 'Montana',

                'NE' => 'Nebraska',

                'NV' => 'Nevada',

                'NH' => 'New Hampshire',

                'NJ' => 'New Jersey',

                'NM' => 'New Mexico',

                'NY' => 'New York',

                'NC' => 'North Carolina',

                'ND' => 'North Dakota',

                'OH' => 'Ohio',

                'OK' => 'Oklahoma',

                'OR' => 'Oregon',

                'PA' => 'Pennsylvania',

                'PR' => 'Puerto Rico',

                'RI' => 'Rhode Island',

                'SC' => 'South Carolina',

                'SD' => 'South Dakota',

                'TN' => 'Tennessee',

                'TX' => 'Texas',

                'UT' => 'Utah',

                'VT' => 'Vermont',

                'VI' => 'Virgin Islands of the U.S.',

                'VA' => 'Virginia',

                'WA' => 'Washington',

                'WV' => 'West Virginia',

                'WI' => 'Wisconsin',

                'WY' => 'Wyoming'

		
		),
		"CA" => array(
		
			''      =>  'Select Province',

			'AB'	=>	'Alberta',

			'BC'	=>	'British Columbia',

			'MB'	=>	'Manitoba',

			'NB'	=>	'New Brunswick',

			'NL'	=>	'Newfoundland and Labrador',

			'NT'	=>	'Northwest Territories',

			'NS'	=>	'Nova Scotia',

			'NU'	=>	'Nunavut',

			'ON'	=>	'Ontario',

			'PE'	=>	'Prince Edward Island',

			'QC'	=>	'Quebec',

			'SK'	=>	'Saskatchewan',

			'YT'	=>	'Yukon Territory'

		),
		
	);
     
    // Display city dropdown based on country name
    if($country !== 'Select'){
        //echo "<label>State:</label>";
        echo "<select>";
        foreach($countryArr[$country] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>