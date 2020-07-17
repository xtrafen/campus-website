<?php

ini_set('session.gc_maxlifetime', 604800);
session_set_cookie_params(604800);

session_start();


$locate = "";

if (isset($_SESSION['locate']) and $_SESSION['locate'] != "" ){
    $locate = $_SESSION['locate'];
    $_SESSION['locate'] = "";
}else{
    $locate = "";
}



include '../../../otori/connect.php';

setcookie("test_cookie", "test", time() + 3600, '/');


if ( (!isset($_SESSION['olduxdev']) or $_SESSION['olduxdev'] == "") and isset($_SESSION['uxdev']) and $_SESSION['uxdev'] != "" ) $_SESSION['olduxdev'] = $_SESSION['uxdev'];

if ( isset($_SESSION['olduxdev']) and $_SESSION['olduxdev'] != ""  and isset($_SESSION['unsure']) and  $_SESSION['unsure'] != "1"){
    echo '<script type=\'text/javascript\'>
    localStorage.setItem("i_unicus","'.$_SESSION['olduxdev'].'");
    </script>
    ';
    $_SESSION['unsure'] == "0";   
}


checkdevice();

$alert = "0";
if (!isset($_SESSION['tedphoneno']) and !isset($_SESSION['stranger'])) $alert = "1";
$country = "";
if (empty($_SESSION['tedphoneno']) or empty($_SESSION['tedname'])) checktoken();

$random = rand(1,1000000000);
if (!empty($_SESSION['tedphoneno']) and $_SESSION['tedphoneno'] !="" and !empty($_SESSION['tedname']) and $_SESSION['tedname'] !="" ){
$_SESSION['back'] = "";
$picture = $_SESSION['tedpicture'];
$phone = $_SESSION['tedphoneno'];
// $bank = stripslashes($_SESSION['bank']);
// $accname = stripslashes($_SESSION['accname']);
// $accnum = $_SESSION['accnum'];
$email = $_SESSION['tedemail'];
// $prof = stripslashes($_SESSION['prof']);
// $recenttag = stripslashes($_SESSION['recenttag']);
$sex = $_SESSION['tedsex'];
$name = stripslashes($_SESSION['tedname']);
// $level = $_SESSION['level'];
// $owns = $_SESSION['owns'];
// $_SESSION['secure'] = $secure;
// $_SESSION['answer'] = $answer;
// $_SESSION['confirmed'] = $confirmed;
// $_SESSION['veri'] = $veri;
// $_SESSION['con'] = $con;
$remark = $_SESSION['remark'];
$id = $_SESSION['tedid'];

$_SESSION['knocker'] = 'Oghene';

include "../../../otori/rsu_ototo.................................php";

$firstname = explode(" ", (stripslashes($_SESSION['tedname'])))[0];



$shake ="";
if (empty($_SESSION['tedpicture']) or $_SESSION['tedpicture'] == "") {
    
     $shake = "shake";
    
}

$country = stripslashes($_SESSION['country']);

    if ($remark == "ddd"){

      echo "<script type='text/javascript'>
          alert('Your account has been suspended.\\nClick \"Help\" to find out more'); window.location.href='logout.php'; </script>";
          return;  
    }

}else{

if (isset($_SESSION['uxdev'])) $keepuxdev = $_SESSION['uxdev'];
if (isset($_SESSION['olduxdev'])) $keepolduxdev = $_SESSION['olduxdev'];
if (isset($_SESSION['unsure'])) $keepsure = $_SESSION['unsure'];

if (!isset($_SESSION['stranger']) or $_SESSION['stranger']=="" or !isset($_SESSION['tedname']) or $_SESSION['tedname'] ="" )
    {
    checkstranger();

    }

if (isset($keepuxdev)) $_SESSION['uxdev'] = $keepuxdev;
unset($keepuxdev);
if (isset($keepolduxdev)) $_SESSION['olduxdev'] = $keepolduxdev;
unset($keepolduxdev);
if (isset($keepsure)) $_SESSION['unsure'] = $keepsure;
unset($keepsure);

    if (!isset($_SESSION['stranger']) or $_SESSION['stranger']=="" ){


        $characters = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);

        $stranger = "";
        for ($i = 0; $i < 32; $i++) {
            $stranger .= $characters[rand(0, $charactersLength - 1)];
        }
        $_SESSION['stranger'] = $stranger;
        setcookie("visitor", $stranger, time() + (86400 * 365), "/"); // 86400 = 1 day

    }


}


if (!isset($_SESSION['stranger'])) $_SESSION['stranger'] = ""; 
if (!isset($_SESSION['tedid'])) $_SESSION['tedid'] = ""; 

if (empty($_SESSION['tedlocation'])){
    $_SESSION['tedlocation'] = "unicus";
}

$_SESSION['tedlocation2'] = "";
$tedlocation="../../";
if ($_SESSION['tedlocation'] == "unicus"){
    $tedlocation="../../";
}elseif ($_SESSION['tedlocation'] == ""){

$tedlocation ="";

}elseif ($_SESSION['tedlocation'] == ""){

$tedlocation ="";

}elseif ($_SESSION['tedlocation'] == ""){

$tedlocation ="";
}
$_SESSION['tedlocation'] = "campus/programs";


require '../../../otori/vendor/autoload.php';
use Carbon\Carbon;
?>

<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Unicus Campus | Programs</title>
    <meta name="description" content="Unicus Tech Training Institue's Upcoming Programs. Join any of our training courses, workshops, master-classes or boot-camps.">
    <meta name="keywords" content="Unicus, Tech, Training, Institue, learn, thinksolutions, think, solutions, technology, tech, technologies, unicus, mobile apps, website, digital, apps, app, digital Marketing, Marketing, printing, business, id, id cards, cards, rebranding, branding, graphics, Designing, courses, workshops, master-classes, boot-camps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/lightslider.css?">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/misc.css">
    <link rel="stylesheet" href="../../css/main.css">


        <link rel="shortcut icon" href="../../images/unicus.jpg">
        <link rel="icon" href="../../images/unicusicon.png">
       



<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="fb:app_id" content=""/>
<meta name="google-signin-client_id" content="">




<!-- ----------------others---------- -->
        <meta property="og:url" content="http://www.unicus.live/campus/programs" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Unicus Campus - #LearnBecome" />
        <meta property="og:description" content="Unicus Tech Training Institue's Upcoming Programs. Join any of our training courses, workshops, master-classes or boot-camps." />
        <meta property="og:image" itemprop="image" content="http://www.unicus.live/campus/images/unicus_campus_logo.jpg" />
        <meta property="og:image:secure_url" itemprop="image" content="https://www.unicus.live/campus/images/unicus_campus_logo.jpg" />
  




<!-- ----------------tweeter---------- -->
        <meta name="twitter:url" content="http://www.unicus.live/campus/programs" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Unicus Campus - #LearnBecome" />
        <meta name="twitter:description" content="Unicus Tech Training Institue's Upcoming Programs. Join any of our training courses, workshops, master-classes or boot-camps." />
        <meta name="twitter:image" content="https://www.unicus.live/campus/images/unicus_campus_logo.jpg" /> 


			<script src="../../new_js/jquery.min.js"></script>
            <script src="../../new_js/jquery.scrolly.min.js"></script>
            <script src="../../new_js/skel.min.js"></script>
            <script src="../../new_js/util.js"></script>
            <script src="../../js/jquery-ui.js"></script>
            <!--[if lte IE 8]><script src="../new_js/ie/respond.min.js"></script><![endif]-->
            <script src="../../new_js/main.js"></script>


		<link rel="stylesheet" href="../assets/css/main.css" />

<style type="text/css">

header h1{
	font-size: 3em;
}


#main{
	    background-position: center right;
	    padding-top: 8em;
}

.s66{
	width: calc(66.6667% - 1.25em) !important;
}

.s66 .image{
	width: 50% !important;
    display: inline-block !important;
}

.s66 .text{
	margin-left: 20px !important;
	display: inline-block !important;
	width: 40% !important;
}

.tiles article{

    margin: 10px;	
}

article{
	overflow:hidden;
	min-height: 260px;
}


@media screen and (max-width: 360px) {	
	
	#main{
		padding-top: 6em;
		background-position-x: 77px;
	    background-position-y: center;
	}	  

	header h1{
	font-size: 2em;
	}

}

@media screen and (max-width: 480px) {
	.s66{
		width: 100% !important;
		display: block !important;
	}

	.s66 .image{
		width:100% !important;
	    display: block !important;
	}

	.s66 .text{
		margin-left: 0px !important;
		margin-top: 20px !important;
		display: block !important;
		width: 100% !important;
	}
} 

@media screen and (min-width: 480px) and (max-width: 980px) {
	.s66{
		width: 100% !important;
	}

	.s66 .image{
		width: 50% !important;
	    display: block !important;
	}

	.s66 .text{
		margin-left: 20px !important;
		margin-top: 0px !important;
		display: block !important;
		width: 40% !important;
	}
}  


.swal-button {
    background-color: #7cd1f9;
    color: #fff;
    border: none;
    box-shadow: none;
    border-radius: 5px;
    font-weight: 600;
    font-size: 14px;
    padding: 10px 24px;
    margin: 0;
    cursor: pointer;
    line-height: unset;
    letter-spacing:unset;
    height: unset;
}


</style>

	</head>



	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Header -->
<header id="header" style="
    height: 5em;
    position: fixed;
    width: 100%;
    background-color: rgb(255, 255, 255);
    z-index: 100;	
">
<div class="inner">

	<!-- Logo -->
	<a href="../" class="scrolly logo">
	<span class=""><img src="../images/unicus_campus_logo.png" alt="" style="
		height: 3em;
	"></span>
	</a>

	<!-- Nav -->
	<nav>
		<ul>
			<li><a href="#menu">Menu</a></li>
		</ul>
	</nav>

</div>
</header>

				<!-- Menu -->
<nav id="menu">
	<h2>Menu</h2>
	<ul>
		<li><a href="../">Home</a></li>
		<li><a href="../apply">Apply Now</a></li>
		<li><a href="../../"><span style="
            color: #0a20cd;
        ">U</span><span style="
            color: #e40001;
        ">n</span><span style="
            color: #f98f03;
        ">i</span><span style="
            color: #0a20cd;
        ">c</span><span style="
            color: #2ca102;
        ">u</span><span style="
            color: #e40505;
        ">s</span><span style="
            color: #000;
        ">.</span></a></li>

	</ul>
</nav>					

				<!-- Main -->
<div id="main">
						<center>
    <h1 style="
    letter-spacing: 0;
    padding: 0 10px;
    margin: 0;
    text-align: left;
    color: #1b62a7;
    font-size: 30px;
">Upcoming Programs</h1>
    


<?php

// would not what to populate the db with such insignificant data
// so i have created a simple way out below,
// just copy and paste or replace data of passed events.
// please take note of the program date to know the correct position for the event
// events are arranged with the most closest event coming first so on down the page
$today = date("Y/m/d");
$no_event=true;


//=================== Event Start- 
// ^^^start copy from here to create new event or change this one if date is past, note order it by the date
//all strings can collect html tags apart from String:: Url
$event_start_date="2020-01-25";           /// Date/Time:: format = Y-m-d (2019-06-31):: place event start date inside the quotes *IMPORTANT
$event_end_date="";             /// Date//Time:: format = Y-m-d (2019-06-31):: place event end date inside the quotes, leave it empty for one day events
$event_time="12 noon";                 /// String:: place the event time inside the quote, it's a string so you can be dynamic if you like
$event_fee=0;                   /// Integer:: Write the amount  for registration here, enter 0 if the registration is free
$event_first_fee=0;             /// Integer:: if you want installmental payment as an option, write the first lowest installmental amount, enter 0 if the registration is free, or you dont want any installmental payment
$event_fee_in_words="";         /// String:: enter the registration fee and conditions as should be displayed, example; "N5,000/Seat (Early bird reg. = N4,000)"
$event_payment_mode="none";          /// String:: state how you would prefer to recieve payment, Preset_Values= "none", "online", "offline" or "both", Default_Value = "both", even if you leave it empty
$event_href="https://docs.google.com/forms/d/e/1FAIpQLSf-fsRMkDhAEmjnRe0R8RfRfWEKk4j3p3mtNGDkhsr9_jG1tA/viewform?usp=sf_link";                 /// String:: Url:: place the link to the registration form, Note: if registration is not free, applicants would be asked to Signin or Signup first
$event_location="<br>Unicus Campus<br>Suite 13, PTI Shopping Complex, <br>Beside computer village, <br>PTI, Effurun/Warri. Delta State, Nigeria.";             /// String:: place the location here, be as brief as possible, you can place google map directions in location-href below
$event_location_href="http";         /// String:: Url:: place the google map location url here.


$event_name="Project Start 2020; ";                 /// String:: enter event name as should be displayed example "2 Days workshop"
$event_theme="EARNING WITH TECH...<br>YOUR FIRST STEPS";                /// String:: enter event theme as should be displayed example "Programming is the new oil"
$event_image="../images/start_2020.jpg";                /// String:: Url:: place the link to the event image here
$event_details="So you like to work in tech? OR You just want to know how you can earn more income with the current tech trends?<br>
Well here is your chance. <br><br>
Start this year by taking the first step to achieving your goals…<br><br>
Join Us at Project Start 2020,<br>
<b>Learn:</b><br>
+ How to code<br>
+ How to create websites<br>
+ How to create mobile apps<br>
+ Graphics Designing<br>
+ Digital Marketing<br>
+ Affiliate Marketing <br>
";              /// String:: enter the details of your event, Html tags are allowed
$event_theme_color="#26cd06";           /// String:: enter a color code for buttons, default is "#0386d6" (dodgeblue);

////processing, don't edit this part unless you know what u r doing

if($event_start_date!=""){

$event_date=date($event_start_date);
if($event_end_date!="") $event_date=date($event_end_date);

    if (strtotime($today) < strtotime($event_date)){
    $no_event=false;

        $carbon = new Carbon($event_start_date);
        $start = $carbon->diffForHumans();

        $end_date="";

        $getlocation = "";
        if ($event_location_href!="") $getlocation = '<a href="'.$event_location_href.'" style="display:inline-block; font-size: .8em;color: #1d81cc;color:'.$event_theme_color.'"><i class="fa fa-map-marker"></i> Get Directions</a><br>';

        if ($event_theme_color=="") $event_theme_color="#0386d6";

        if($event_end_date != "")$end_date=' - '.date_format(date_create($event_end_date),"jS F").'';

        if ($event_fee<$event_first_fee) $event_fee=$event_first_fee;
        if ($event_fee==0 and $event_fee_in_words=="") $event_fee_in_words="<b style='font-size:1em; color:red;'> Free </b>";
        if ($event_fee!=0 and $event_fee_in_words=="") $event_fee_in_words="&#8358;".$event_fee;
        if ($event_fee!=0 and $event_first_fee==0) $event_first_fee=$event_fee;

        $buttonid=str_replace("#", "", (str_replace("-", "", $event_start_date.''.$event_end_date.''.$event_theme_color.'')));

        if($event_fee!=0){
            if($event_payment_mode=="")$event_payment_mode="both";
            if (strtolower($event_payment_mode)=="offline"){
                $reg_button='<a href="#1" onclick="payOffline('.$event_first_fee.','.$event_href.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Register Now</a>';
            }elseif(strtolower($event_payment_mode)=="online"){
                if (!empty($_SESSION['tedphoneno']) and $_SESSION['tedphoneno'] != ""){
                $reg_button='<a id="'.$buttonid.'"  href="#1" onclick="payOnline('.$event_first_fee.','.$event_href.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Make Payment & Register Now</a>';
                }else{
                $reg_button='<a id="'.$buttonid.'"  href="#1" onclick="signin('.$event_first_fee.','.$event_href.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Make Payment & Register Now</a>';                    
                }
            }elseif(strtolower($event_payment_mode)=="both"){
                $reg_button='<a href="#1" onclick="payOffline('.$event_first_fee.','.$event_href.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Register Now, Pay Later</a>';
                if (!empty($_SESSION['tedphoneno']) and $_SESSION['tedphoneno'] != ""){
                $reg_button.=' <a id="'.$buttonid.'" href="#1" onclick="payOnline('.$event_first_fee.','.$event_fee.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Make Payment & Register Now</a>';
                }else{
                $reg_button.=' <a id="'.$buttonid.'" href="#1" onclick="signinb4(this.id,\'../../\',\'campus/programs\')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Make Payment & Register Now</a>';                    
                }
            }elseif(strtolower($event_payment_mode)=="none"){
                $reg_button='<a target="_blank" href="'.$event_href.'" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Register Now</a>';
            }
        }else{
                $reg_button='<a target="_blank" href="'.$event_href.'" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Register Now</a>';            
        }




        echo '<div class="inner" style=" border: 1px solid black; border-left: 0; border-right: 0; padding: 1em; max-width: 560px; margin: 10px; text-align: left; border-bottom: none; ">'. $event_name.'<h2 style=" margin: 0; letter-spacing: 3px;">'.$event_theme.'</h2> <span class="image main" style="margin-bottom: 10px;overflow: hidden; text-align: center;"><img src="'.$event_image.'" style=" height: auto;  width: 100%; "></span> <p>'.$event_details.'</p> <p><b>Date:</b> '.$start.' ('.date_format(date_create($event_start_date),"jS F").''.$end_date.' '.date_format(date_create($event_start_date),"Y").').<br><b>Time:</b> '.$event_time.'.<br><b>Location: </b> '.$event_location.' '.$getlocation.'<br><b>Registration Fee:</b> '.$event_fee_in_words.'<br><span style="display:block;text-align:right;">'.$reg_button.'</span>';

    }

}



//=================== Event End
// ^^^end copy here




//=================== Event Start- 
// ^^^start copy from here to create new event or change this one if date is past, note order it by the date

$event_start_date="2019-10-20";           /// Date/Time:: format = Y-m-d (2019-06-31):: place event start date inside the quotes *IMPORTANT
$event_end_date="2019-10-21";             /// Date//Time:: format = Y-m-d (2019-06-31):: place event end date inside the quotes, leave it empty for one day events
$event_time="12pm (Sun) | 10am (Mon)";                 /// String:: place the event time inside the quote, it's a string so you can be dynamic if you like
$event_fee=0000;                   /// Integer:: Write the amount  for registration here, enter 0 if the registration is free
$event_first_fee=0000;             /// Integer:: if you want installmental payment as an option, write the first lowest installmental amount, enter 0 if the registration is free, or you dont want any installmental payment
$event_fee_in_words="Registration is <span style='color:red;''>FREE but compulsory</span>";         /// String:: enter the registration fee and conditions as should be displayed, example; "N5,000/Seat (Early bird reg. = N4,000)"
$event_payment_mode="none";          /// String:: state how you would prefer to recieve payment, Preset_Values= "none", "online", "offline" or "both", Default_Value = "both", even if you leave it empty
$event_href="https://docs.google.com/forms/d/e/1FAIpQLSclRLC2Kefa-XxS6xThtoPzXWCL_nNUNWjal4e4YDFYL3UQ1g/viewform?usp=sf_link";                 /// String:: Url:: place the link to the registration form, Note: if registration is not free, applicants would be asked to Signin or Signup first
$event_location="Unicus Campus, WARRI";             /// String:: place the location here, be as brief as possible, you can place google map directions in location-href below
$event_location_href="https://www.google.com/maps/place/Unicus+Campus/@5.5709428,5.795502,15z/data=!4m5!3m4!1s0x0:0x2d8a9bb0d2fe24fe!8m2!3d5.5709428!4d5.795502
";         /// String:: place the google map location url here.


$event_name="Project ReShapes' <br> Park Bench Business Chat";                 /// String:: enter event name as should be displayed example "2 Days workshop"
$event_theme="Legal Foundation For Financial Growth";                /// String:: enter event theme as should be displayed example "Programming is the new oil"
$event_image="../images/park_bench.jpg";                /// String:: Url:: place the link to the event image here
$event_details="Here is your guest speaker for your first Saturday's techbiz class... <br>A. K. Nqwu is a legal consultant for tech companies in Lagos and all over the world...  <br>If you have a tech business or you have plans to start one, then you need to hear the success secrets he has to share.";              /// String:: enter the details of your event, Html tags are allowed
$event_theme_color="#28203a";           /// String:: enter a color code for buttons, default is "#0386d6" (dodgeblue);


////processing, don't edit this part unless you know what u r doing

if($event_start_date!=""){

$event_date=date($event_start_date);
if($event_end_date!="") $event_date=date($event_end_date);

    if (strtotime($today) < strtotime($event_date)){
    $no_event=false;

        $carbon = new Carbon($event_start_date);
        $start = $carbon->diffForHumans();

        $end_date="";

        $getlocation = "";
        if ($event_location_href!="") $getlocation = '<a href="'.$event_location_href.'" style="display:inline-block; font-size: .8em;color: #1d81cc;color:'.$event_theme_color.'"><i class="fa fa-map-marker"></i> Get Directions</a><br>';

        if ($event_theme_color=="") $event_theme_color="#0386d6";

        if($event_end_date != "")$end_date=' - '.date_format(date_create($event_end_date),"jS F").'';

        if ($event_fee<$event_first_fee) $event_fee=$event_first_fee;
        if ($event_fee==0 and $event_fee_in_words=="") $event_fee_in_words="<b style='font-size:1em; color:red;'> Free </b>";
        if ($event_fee!=0 and $event_fee_in_words=="") $event_fee_in_words="&#8358;".$event_fee;
        if ($event_fee!=0 and $event_first_fee==0) $event_first_fee=$event_fee;

        $buttonid=str_replace("#", "", (str_replace("-", "", $event_start_date.''.$event_end_date.''.$event_theme_color.'')));

        if($event_fee!=0){
            if($event_payment_mode=="")$event_payment_mode="both";
            if (strtolower($event_payment_mode)=="offline"){
                $reg_button='<a href="#1" onclick="payOffline('.$event_first_fee.','.$event_href.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Register Now</a>';
            }elseif(strtolower($event_payment_mode)=="online"){
                if (!empty($_SESSION['tedphoneno']) and $_SESSION['tedphoneno'] != ""){
                $reg_button='<a id="'.$buttonid.'"  href="#1" onclick="payOnline('.$event_first_fee.','.$event_href.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Make Payment & Register Now</a>';
                }else{
                $reg_button='<a id="'.$buttonid.'"  href="#1" onclick="signin('.$event_first_fee.','.$event_href.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Make Payment & Register Now</a>';                    
                }
            }elseif(strtolower($event_payment_mode)=="both"){
                $reg_button='<a href="#1" onclick="payOffline('.$event_first_fee.','.$event_href.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Register Now, Pay Later</a>';
                if (!empty($_SESSION['tedphoneno']) and $_SESSION['tedphoneno'] != ""){
                $reg_button.=' <a id="'.$buttonid.'" href="#1" onclick="payOnline('.$event_first_fee.','.$event_fee.')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Make Payment & Register Now</a>';
                }else{
                $reg_button.=' <a id="'.$buttonid.'" href="#1" onclick="signinb4(this.id,\'../../\',\'campus/programs\')" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Make Payment & Register Now</a>';                    
                }
            }elseif(strtolower($event_payment_mode)=="none"){
                $reg_button='<a target="_blank" href="'.$event_href.'" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Register Now</a>';
            }
        }else{
                $reg_button='<a target="_blank" href="'.$event_href.'" style="background-color: #0386d6;background-color:'.$event_theme_color.'; color: white;padding: 10px;border-radius: 25px;margin: 5px 0;display: inline-block;font-size: 0.8em;">Register Now</a>';            
        }




        echo '<div class="inner" style=" border: 1px solid black; border-left: 0; border-right: 0; padding: 1em; max-width: 560px; margin: 10px; text-align: left; border-bottom: none; ">'. $event_name.'<h2 style=" margin: 0; letter-spacing: 3px;">'.$event_theme.'</h2> <span class="image main" style="margin-bottom: 10px;overflow: hidden; text-align: center;"><img src="'.$event_image.'" style=" height: auto;  width: 100%; "></span> <p>'.$event_details.'</p> <p><b>Date:</b> '.$start.' ('.date_format(date_create($event_start_date),"jS F").''.$end_date.' '.date_format(date_create($event_start_date),"Y").').<br><b>Time:</b> '.$event_time.'.<br><b>Location: </b> '.$event_location.' '.$getlocation.'<br><b>Registration Fee:</b> '.$event_fee_in_words.'<br><span style="display:block;text-align:right;">'.$reg_button.'</span>';

    }

}




//=================== Event End
// ^^^end copy here


?>


<?php
if($no_event) echo'<div class="inner" style="
    border: 1px solid black;
    border-left: 0;
    border-right: 0;
    padding: 1em;
    max-width: 560px;
    margin: 10px;
    text-align: left;
    border-bottom: none;
">

<span class="image main" style="
    height: 300px;
    margin-bottom: 10px;
    overflow: hidden;
    background-image: url(../../images/noprogram.jpg);
    background-size: cover;
    background-position: center;
"></span>
    <p style="
    text-align: center;
    font-size: 2em;
    margin-top: -1.3em;
    position: relative;
    font-weight: bold;
    color: #b20c0c;
          ">Take a break<br><span style="
    font-size: .5em;
    color: gray;
">There are no Upcoming Events for now.</span></p>
    

</div>';
?>
							
</center>


</div>
							

</div>
			<div class="col-md-12 footer" style="
				    position: relative;
				    color:black;
				    background-color: #ffffff;
				    padding-top: 10px;
				    height: 40px;
				">
				                <p style="text-align: center;" id="footer-text">
				                
				                    <span class="hideonmobile">Copyright</span> © <?php echo date("Y") ?> <span style="
				    color: #0a20cd;
				">u</span><span style="
				    color: #e40001;
				">n</span><span style="
				    color: #f98f03;
				">i</span><span style="
				    color: #0a20cd;
				">c</span><span style="
				    color: #2ca102;
				">u</span><span style="
				    color: #e40505;
				">s</span><span>.</span>
				                 
				                 </p>
            </div>
</div>
		<!-- Scripts -->

			<script src="../assets/js/main.js"></script>
            <link rel="stylesheet" href="../../css/sweetalert2.min.css" />
            <script src="../../js/sweetalert.min.js"></script>
            <script src="../../js/payment.js"></script>
            <script type="text/javascript">
                
                $(document).ready(function(){
                    <?php
                    if(isset($_GET['b'])){
                        $b=$_GET['b'];
                        echo 'b="'.$b.'";
                              $("#"+b+"").trigger(\'click\');';
                    }
                    ?>


                })

                function payOffline(fee,href){
                    if(fee){
                        swal("Remember to complete your Registration","After Registration, Please visit any Unicus Office to make a deposit of ₦"+fee+" to complete your registration, before the end of the registration deadline").then(function(){window.location.href=href;})
                    }
                }


                function payOnline(){
                    swal("ok");
                }




            </script>


				</body>
</html>