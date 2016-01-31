<?php 

$aCountries = array(
	'AC' =>	'United Kingdom academic institutions',
	'AD' =>	'Andorra',
	'AE' => 'United Arab Emirates',
	'AF' =>	'Afghanistan',
	'AG' =>	'Antigua and Barbuda',
	'AI' =>	'Anguilla',
	'AL' =>	'Albania',
	'AM' =>	'Armenia',
	'AN' =>	'Netherlands Antilles',
	'AO' =>	'Angola',
	'AQ' =>	'Antarctica',
	'AR' =>	'Argentina',
	'AS' => 'American Samoa',
	'AT' =>	'Austria',
	'AU' =>	'Australia',
	'AW' =>	'Aruba',
	'AZ' =>	'Azerbaijan',
	'BA' =>	'Bosnia and Herzegovina',
	'BB' =>	'Barbados',
	'BD' =>	'Bangladesh',
	'BE' =>	'Belgium',
	'BF' =>	'Burkina Faso',
	'BG' => 'Bulgaria',
	'BH' =>	'Bahrain',
	'BI' =>	'Burundi',
	'BJ' =>	'Benin',
	'BM' =>	'Bermuda',
	'BN' =>	'Brunei Darussalam',
	'BO' =>	'Bolivia',
	'BR' =>	'Brazil',
	'BS' =>	'Bahamas',
	'BT' =>	'Bhutan',
	'BV' =>	'Bouvet Island',
	'BW' =>	'Botswana',
	'BY' =>	'Belarus',
	'BZ' =>	'Belize',
	'CA' =>	'Canada',
	'CC' =>	'Cocos (Keeling) Islands',
	'CF' =>	'Central African Republic',
	'CG' =>	'Congo',
	'CH' =>	'Switzerland',
	'CI' =>	'Cote d\'Ivoire (Ivory Coast)',
	'CK' =>	'Cook Islands',
	'CL' =>	'Chile',
	'CM' =>	'Cameroon',
	'CN' =>	'China',
	'CO' =>	'Colombia',
	'CR' =>	'Costa Rica',
	'CS' =>	'Czechoslovakia (former)',
	'CU' =>	'Cuba',
	'CV' =>	'Cape Verde',
	'CX' =>	'Christmas Island',
	'CY' =>	'Cyprus',
	'CZ' =>	'Czech Republic',
	'DE' => 'Germany',
	'DJ' =>	'Djibouti',
	'DK' =>	'Denmark',
	'DM' =>	'Dominica',
	'DO' =>	'Dominican Republic',
	'DZ' =>	'Algeria',
	'EC' =>	'Ecuador',
	'EE' =>	'Estonia',
	'EG' =>	'Egypt',
	'EH' =>	'Western Sahara',
	'ER' =>	'Eritrea',
	'ES' =>	'Spain',
	'ET' =>	'Ethiopia',
	'US' => 'United State of America'
);
//AE AR AT AU BA BE BG BH BR CA CH CL CO CZ DE DK DZ EE EG ES FI FR GB GH GR HK HR HU ID IE IL IN IT JO JP KE KR KW LB LT LV LY MA ME MK MX MY NG NL NO NZ OM PE PH PL PR PT QA RO RS RU SA SE SG SI SK SN TH TN TR TW UA UG US VN YE ZA
$aSelected = array('KR','ES','AE','PH');

	$holder = array();
	
	foreach($aSelected as $v){
	
		if(array_key_exists($v, $aCountries)){
			$holder[$v] = $aCountries[$v];
		}
	}
	echo '<pre>';
	var_dump($holder);
	
	foreach($aSelected as $v){
		echo $v . "->" . $aCountries[$v] . '<br>';
	}

?>