<?php

ini_set('session.gc_maxlifetime', 604800);
session_set_cookie_params(604800);

session_start();


include '../../otori/connect.php';

setcookie("test_cookie", "test", time() + 3600, '/');


if ( (!isset($_SESSION['olduxdev']) or $_SESSION['olduxdev'] == "") and isset($_SESSION['uxdev']) and $_SESSION['uxdev'] != "" ) $_SESSION['olduxdev'] = $_SESSION['uxdev'];



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

include "../../otori/rsu_ototo.................................php";

$firstname = explode(" ", (stripslashes($_SESSION['tedname'])))[0];



$shake ="";
if (empty($_SESSION['tedpicture']) or $_SESSION['tedpicture'] == "") {
    
     $shake = "shake";
    
}

$country = stripslashes($_SESSION['country']);


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
$tedlocation="apps/../";
if ($_SESSION['tedlocation'] == "unicus"){

$tedlocation="apps/../";

}elseif ($_SESSION['tedlocation'] == ""){

$tedlocation ="";

}elseif ($_SESSION['tedlocation'] == ""){

$tedlocation ="";

}elseif ($_SESSION['tedlocation'] == ""){

$tedlocation ="";
}
$_SESSION['tedlocation'] = "campus";


?>


<!DOCTYPE HTML>
<html>
	<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Unicus Campus</title>
    <meta name="description" content="Unicus Tech Training Institue. Join any of our tech training courses. computer training, web development training, software training, programming training, Data Science, Machine Learning. Located in Warri.">
    <meta name="keywords" content="Unicus, Tech, Training, Institue, learn, thinksolutions, think, solutions, technology, tech, technologies, unicus, mobile apps, website, digital, apps, app, computer training, tech training, software training rebranding, branding, graphics, Designing, Warri">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/main.css">

        
        <link rel="icon" href="../images/unicusicon.png">
       <!-- <link rel="shortcut icon" href="images/unicus_campus_logo.png"> -->



<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="fb:app_id" content=""/>
<meta name="google-signin-client_id" content="">




<!-- ----------------others---------- -->
        <meta property="og:url" content="http://www.unicus.live/campus" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Unicus Campus - #LearnBecome" />
        <meta property="og:description" content="Unicus Tech Training Institue. Join any of our tech training courses. computer training, web development training, software training, programming training, Data Science, Machine Learning. Located in Warri." />
        <meta property="og:image" itemprop="image" content="http://www.unicus.live/campus/images/unicus_campus_logo.jpg" />
        <meta property="og:image:secure_url" itemprop="image" content="https://www.unicus.live/campus/images/unicus_campus_logo.jpg" />
  




<!-- ----------------tweeter---------- -->
        <meta name="twitter:url" content="http://www.unicus.live/campus" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Unicus Campus - #LearnBecome" />
        <meta name="twitter:description" content="Unicus Tech Training Institue. Join any of our tech training courses. computer training, web development training, software training, programming training, Data Science, Machine Learning. Located in Warri." />
        <meta name="twitter:image" content="https://www.unicus.live/campus/images/unicus_campus_logo.jpg" /> 


			<script src="../new_js/jquery.min.js"></script>
            <script src="../new_js/jquery.scrolly.min.js"></script>
            <script src="../new_js/skel.min.js"></script>
            <script src="../new_js/util.js"></script>
            <script src="../js/jquery-ui.js"></script>
            <!--[if lte IE 8]><script src="new_js/ie/respond.min.js"></script><![endif]-->
            <script src="../new_js/main.js"></script>


		<link rel="stylesheet" href="assets/css/main.css" />

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



</style>

	</head>
<body class="">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
<header id="header" style="
    height: 5em;
    position: fixed;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.56);
    z-index: 100;	
">
<div class="inner">

	<!-- Logo -->
	<a href="#main" class="scrolly logo">
	<span class=""><img src="images/unicus_campus_logo.png" alt="" style="
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
		<li><a href="#2" onclick="openmodal('start')" >Apply Now</a></li>
		<li><a href="programs">Programs</a></li>
        <li><a href="../"><span style="
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
                ">.</span> </a></li>
	</ul>
</nav>					

				<!-- Main -->
<div id="main" class="fadeIn" style="
    height: 100vh;
    background-image: url(images/campus_bg.jpg);
    background-size: auto 100%;
    background-repeat: no-repeat;

">
						<div class="inner" style="padding:0;">


<header style="
    padding: 0 20px;
">

<h1 style="
    text-transform: none;
    max-width: 50%;
    color: #1b6bb4;
    margin: 0;
">Every journey begins with a step</h1>
								
<p style="
    color: black;
    font-size: 14px;
    margin-top: 4px;
    max-width: 50%;
    line-height: 1.2em;
    margin-bottom: 7px;
">Start your journey to becoming a professional techie. Learn how to create websites, mobile apps and other tech (IT) related skills. </p>



</header>

<ul class="actions" style="
    text-align: left;
    padding-top: 2em;
    position: absolute;
    bottom: 10px;
    width: 80%;
    margin: 0;
    padding: 0 20px;
">

<li style="
    text-align: left;
    padding: 0;
    display: inline-block;
    width: unset;
" class=""><a href="#2" onclick="openmodal('campusApply')"  class="button special small" style="
    background-color: #1b62a7;
    border-radius: 50px;
    width: unset;
">Apply
<span style="
    font-size: 10px;
    background-color: #ff3e37;
    width: 7px;
    height: 7px;
    position: absolute;
    display: inline-block;
    border-radius: 50px;
    color: white;
    padding-left: 4px;
    text-align: center;
    contain: strict;  display: none;/*  change this on change*/
" class="beat"></span></a></li>

<li style="
    text-align: left;
    padding: 0;
    display: inline-block;
    width: unset;
"><a href="#tiles" class=" scrolly button small" style="
    box-shadow: inset 0 0 0 2px #1e63b1;
    border-radius: 50px;
    color: #1f5cad !important;
    width: unset;
    background-color: white;
">Learn More</a></li>

<li style="
    text-align: left;
    padding: 0;
    display: inline-block;
    width: unset;
"><a href="programs" class=" scrolly button small" style="
    box-shadow: inset 0 0 0 2px #1e63b1;
    border-radius: 50px;
    color: #1f5cad !important;
    width: unset;
    background-color: white;
">Upcoming Programs 
<span style="
    font-size: 10px;
    background-color: #ff3e37;
    width: 7px;
    height: 7px;
    position: absolute;
    display: inline-block;
    border-radius: 50px;
    color: white;
    padding-left: 4px;
    text-align: center;
    contain: strict; display: none;  /* change this on change*/
" class="beat"></span></a>
</li>

</ul>
							
						</div>
					</div>

<center id="tiles" style="
    background-color: #e5ecf3;
    margin-top: 3em;
">

    
<section id="" class="tiles" style="
    max-width: 1020px;
    padding: 5%;
    text-align: left;
">
<p style="
    display: block;
    width: 100%;
    color: #1c1c56;
    font-family: metropolis_Bold !important;
    font-size: 2em;
    margin: 0;
    line-height: 1em;
          "><span style="
    font-size: .6em;
">Studying at unicus campus...</span><br>
a unique learning experience </p><article class="s66" style="/* padding: 1em; */display: inline-flex;background-color: white;overflow: hidden;">
	<span class="image" style="">
		<img src="images/1.jpg" alt="" style="
">
	</span>
	<span class="text" style="color: black;padding: 0 10px;">
		<h2 style="
			text-transform: none;
			letter-spacing: unset;
			margin: 0;
			line-height: 1em;
			padding-top: 10px;
			">Learn Web Development</h2>
	<p style="
			margin: 0;
			font-size: 14px;
			line-height: 14px;
			margin-bottom: 10px;
			">learn, develop, create and manage websites and web apps.<br><br>
<b>Tags:</b> <i style="
    color: #d8aa46;
">Html, Css, Php, Javascript, ux and ui design...</i></p>
	</span>
</article>



<article class="" style="
    overflow: hidden;
    min-height: 255px;
">
	<span class="image" style="
    height: 100%;
    background-image: url(../impact/img/blog-img/muhammed.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 255px;
">
										
</span>
									
<div style="
    display: block;
    width: 100%;
    background: linear-gradient(179deg, rgba(254, 254, 254, 0) 0, rgba(223, 224, 223, 0) 48%, #242424 100%);/* W3C */
    min-height: 259px;
    position: absolute;
    top: 0;
    height: 100%;
">
										<span style="
    color: white;
    letter-spacing: 0;
    display: block;
    text-align: right;
    font-size: 14px;
    padding: 5px;
    top: 0;
    width: 100%;
    background: red;
    ">Success Stories</span>
<div style="
    bottom: 10px;
    padding: 5px;
    display: block;
    position: absolute;
"><h2 style="
    color: white;
    font-family: metropolis_bold !important;
    text-align: right;
    letter-spacing: 0;
    margin: 0;
    text-transform: none;
    line-height: 1em;
    font-size: 1.5em;
    "><span>meet</span><br> Muhammed</h2><p style="
    line-height: 1em;
    font-size: 12px;
    margin: 0;
    color: white;
    text-align: right;
">Started up as a student, ended up heading the development team for the popular CBT web-app <a href="../assessment" style="
    color: lightblue;
">Unicus Assessment.</a><br>
<!-- ../impact/stories/?story=2 -->
<a href="#1" style="
    color: #f59a98;
    margin-top: 10px;
    display: inline-block;
">Read more on unicus impact</a>... </p></div>
										
</div></article>





<article class="" style="
    overflow: hidden;
    min-height: 300px;
    background-color: white;
">
	<span class="image" style="
    height: 75%;
    background-image: url(images/4.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 0;
">
										
</span>
									
<div style="
    display: block;
    width: 100%;
    /* W3C */
    top: 0;
    padding: 10px;
">
										
<div style="
    bottom: 10px;
    display: block;
    width: 100%;
"><h2 style="
    font-family: metropolis_bold !important;
    letter-spacing: 0;
    margin: 0;
    text-transform: none;
    line-height: 1em;
    font-size: 1em;
    "><span>learn to work in </span>Teams.<br><span style="
    font-size: .8em;
">Team work is an integral part of our training courses.</span></h2></div>
										
</div></article><article class="" style="
    overflow: hidden;
    min-height: 300px;
    background-color: white;
">
	<span class="image" style="
    height: 75%;
    background-image: url(images/3.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 0;
">
										
</span>
									
<div style="
    display: block;
    width: 100%;
    /* W3C */
    top: 0;
    padding: 10px;
">
										
<div style="
    bottom: 10px;
    display: block;
    width: 100%;
"><h2 style="
    font-family: metropolis_bold !important;
    letter-spacing: 0;
    margin: 0;
    text-transform: none;
    line-height: 1em;
    font-size: 1em;
    "><span>Gain</span> experience <br><span style="
    font-size: .8em;
">by working directly on real-life projects.</span><br></h2></div>
										
</div></article><article class="" style="
    overflow: hidden;
    min-height: 300px;
    background-color: white;
">
	<span class="image" style="
    height: 75%;
    background-image: url(images/7.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 0;
">
										
</span>
									
<div style="
    display: block;
    width: 100%;
    /* W3C */
    top: 0;
    padding: 10px;
">
										
<div style="
    bottom: 10px;
    display: block;
    width: 100%;
"><h2 style="
    font-family: metropolis_bold !important;
    letter-spacing: 0;
    margin: 0;
    text-transform: none;
    line-height: 1em;
    font-size: 1em;
    "><span style="
    font-size: .8em;
">listen and speak to other  </span>professionals
</h2></div>
										
</div></article>

<article class="s66" style="display: inline-flex;background-color: white;">
	<span class="image" style="">
		<img src="images/2.jpg" alt="" style="
">
	</span>
	<span class="text" style="color: black;padding: 0 10px;margin-bottom: 10px;">
		<h2 style="
			text-transform: none;
			letter-spacing: unset;
			margin: 0;
			line-height: 1em;
			padding-top: 10px;
			">Learn Soft Tech Skills</h2>
	<p style="
			margin: 0;
			font-size: 14px;
			line-height: 14px;
			">Tech goes far beyond just programming and development <br> Learn other soft tech skills which are vital in tech industries.<br>
			<br>
<b>Tags:</b> <i style="
    color: #d8aa46;
">Digital Marketing, Graphics Designing, Content Management, Data Analysis, Product Management, UI and UX designing, Sales Management, Financial Management, Business Management...</i></p>
	</span>
</article><article class="" style="
    overflow: hidden;
    min-height: 300px;
    background-color: white;
">
	<span class="image" style="
    height: 65%;
    background-image: url(images/6.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 0;
">
										
</span>
									
<div style="
    display: block;
    width: 100%;
    /* W3C */
    top: 0;
    padding: 10px;
">
										
<div style="
    bottom: 10px;
    display: block;
    width: 100%;
"><h2 style="
    font-family: metropolis_bold !important;
    letter-spacing: 0;
    margin: 0;
    text-transform: none;
    line-height: 1em;
    font-size: 1em;
    ">learn to unwind. 
<br><span style="
    font-size: .8em;
">Student are allowed to partake in any unicus extracurricular activities like picnics, outings, game days, award nites...</span></h2></div>
										
</div></article>

<article class="" style="
    overflow: hidden;
    min-height: 255px;
">
	<span class="image" style="
    height: 100%;
    background-image: url(../impact/img/blog-img/reshape.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 255px;
">
										
</span>
									
<div style="
    display: block;
    width: 100%;
    background: linear-gradient(179deg, rgba(254, 254, 254, 0) 0, rgba(223, 224, 223, 0) 48%, #242424 100%);/* W3C */
    min-height: 259px;
    position: absolute;
    top: 0;
    height: 100%;
">
										<span style="
    color: white;
    letter-spacing: 0;
    display: block;
    text-align: right;
    font-size: 14px;
    padding: 5px;
    top: 0;
    width: 100%;
    background: red;
    ">Success Stories</span>
<div style="
    bottom: 10px;
    padding: 5px;
    display: block;
    position: absolute;
"><h2 style="
    color: white;
    font-family: metropolis_bold !important;
    text-align: right;
    letter-spacing: 0;
    margin: 0;
    text-transform: none;
    line-height: 1em;
    font-size: 1.5em;
    "><span>20/20<br></span> Reshaped</h2><p style="
    line-height: 1em;
    font-size: 12px;
    margin: 0;
    color: white;
    text-align: right;
">Unicus campus started with a bang with project ReShape 2018; were we transformed the lives of 20 persons, at a highly subsidize web development training course.<br>
<!-- ../impact/stories/?story=1 -->
<a href="#1" style="
    color: #f59a98;
    margin-top: 10px;
    display: inline-block;
">Read more on unicus impact</a>... </p></div>
										
</div></article>


<article class="s66" style="display: inline-flex;background-color: white;">
	<span class="beat" style="
    display: inline-block;
    font-size: 12px;
    background-color: red;
    padding: 0 7px;
    border-radius: 4px;
    position: absolute;
    right: 10px;
    top: 10px;
    color: white;
    z-index: 1;
    box-shadow: 0px 0px 5px #828080;
    font-family: metropolis_Bold !important;
">NEW</span><span class="image" style="">
    
		<img src="images/8.jpg?" alt="" style="
">
	</span>
	<span class="text" style="color: black;padding: 0 10px;margin-bottom: 10px;">
		<h2 style="
			text-transform: none;
			letter-spacing: unset;
			margin: 0;
			line-height: 1em;
			padding-top: 10px;
			">Tech For Business</h2>
	<p style="
			margin: 0;
			font-size: 14px;
			line-height: 14px;
			">Learn and Understand new emerging technologies and how they can help you grow your business.<br><br>
			<br>
<b>Tags:</b> <i style="
    color: #d8aa46;
">Google Cloud, Google Docs, Google Business, Google Maps, You-tube, Google ads, Facebook Business, Microsoft Office, Microsoft Azure, Social Media, Basic Data Analysis, Introduction to Big Data.  </i></p>
	</span>
</article>

<article class="" style="
    overflow: hidden;
    min-height: 300px;
    background-color: white;
">
	<span class="image" style="
    height: 60%;
    background-image: url(images/9.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 0;
">
										
</span>
									
<div style="
    display: block;
    width: 100%;
    /* W3C */
    top: 0;
    padding: 10px;
">
										
<div style="
    bottom: 10px;
    display: block;
    width: 100%;
"><h2 style="
    font-family: metropolis_bold !important;
    letter-spacing: 0;
    margin: 0;
    text-transform: none;
    line-height: 1em;
    font-size: 1em;
    "><span style="
    font-size: .8em;
">from classroom to </span> office. <span style="
    font-size: .8em;
">Students who are interested in job opportunities are transferred to work in other companies or retained to work at Unicus.</span>
</h2></div>
										
</div></article>

<article class="s66" style="display: inline-flex;background-image: url(images/10.jpg);background-size: cover;background-position: top;min-height: 290px;">
	
	<span class="text" style="color: black;padding: 0 10px;margin-bottom: 10px;width: 100% !IMPORTANT;">
		<h2 style="
			text-transform: none;
			letter-spacing: unset;
			margin: 0;
			line-height: 1em;
			padding-top: 10px;
			font-family: metropolis_bold !important;
			">You've just seen 10 reasons</h2>
	<p style="
			margin: 0;
			font-size: 14px;
			line-height: 14px;
			">why more people apply to study at unicus campus.<br><br><span style="
    max-width: 30%;
    display: block;
    color: #1b62a7;
">Join others, click the "Apply" to start your journey today</span><br>
			</p>

<ul class="actions" style="
    text-align: left;
    bottom: 20px;
    width: 80%;
    margin: 0;
">

<li style="
    text-align: left;
    padding: 0;
    display: inline-block;
    width: unset;
" class=""><a  href="#2" onclick="openmodal('start')"  class="button special small" style="
    background-color: #1b62a7;
    border-radius: 50px;
    width: unset;
">Apply</a></li>
</ul>
	</span>
</article>

	
								
							</section>

						</center>

							<!-- Footer -->
<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="../mail.php">
									<div class="field first">
										<input type="text" name="name" id="name" placeholder="Name" required>
									</div>
									<div class="field half first">
										<input type="email" name="email" id="email" placeholder="Email" required>
									</div>
                                    <div class="field half">
                                        <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                    </div>
									<div class="field">
										<div class="textarea-wrapper"><textarea required name="message" id="message" placeholder="Message" rows="1" style="overflow: hidden;  height: 56px; background-color: white;"></textarea></div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" style="
										    background-color: #1b62a7;
										    border-radius: 50px;
										"></li>
									</ul>
                                    <input type="hidden" name="heading" value="From: Unicus Campus website <campus@unicus.live>">
                                    <input type="hidden" name="to" value="campus@unicus.live">
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="https://www.instagram.com/thinkunicus/" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li><li><a href="https://www.facebook.com/thinkunicus/" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li><li><a href="https://twitter.com/Unicus13" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>

								</ul>
                                <div class="">
                            <h2 style="
                                margin: 0;
                            ">Office address</h2>
                            <p style="
                                margin-bottom: 10px;
                            ">Suite 13 PTI Shopping Complex,
                                <br>PTI, Warri, Delta State
                                <br> Nigeria</p>
                            <ul>
                                <li><span>Email:</span>campus@unicus.live </li>
                                
                                <li><span>Phone:</span>+234 (0) 901 479 6881</li>
                           </ul>
                          
                        </div>
							</section>
 <h3>Unicus Campus remains one of the best place you can learn any tech skill in Warri, Delta State, Nigeria.</p>

					</footer>

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


<!-- --------------------------------------project Reshape------------------------- -->
<!-- <center id="notify_modal" style="overflow:scroll; background-color: rgba(0, 0, 0, 0.7); position: fixed; height: 100%; width: 100%; top: 0; display: none; z-index: 1000; opacity: 0; transition: .6s; ">

   <div id="" style="margin-top: 90px; max-width: 540px; width:90%; background-color:white; background-image: url(images/reshape_bg.jpg);background-repeat: no-repeat; background-position: right bottom; background-size: contain;">
        <span style="cursor: pointer;float: right;color: #F44336;font-size: 1.4em;padding: 5px 15px;position: relative;right: 0px;top: 0px;background-color: white;display: block; cursor: pointer" onclick="$('#notify_modal').css('opacity','0');setTimeout(function(){$('#notify_modal').css('display','none');},500)" id="">x</span>

            <header style="
                padding: 15% 0px;
            ">

            <h1 style="
                text-transform: none;
                font-family: metropolis_bold !important;
                color: #1b6bb4;
                padding: 5%;
                margin: 0;
                padding-bottom: 5px;
                ">ReShape <span style="
                color: black;
            ">2019</span>
            <span style="
                color: black;
                display: block;
                font-size: 9px;
                margin-top: -5px;
                letter-spacing: 5px;
            ">code to think better</span></h1>
                                            
            <div style="
                color: black;
                font-size: 14px;
                margin-top: 4px;
                line-height: 1.2em;
                margin-bottom: 7px;
                padding: 10px;
            ">Enter next year with more opportunities<br>Join Unicus Campus on Project ReShape...<br>Acquire valuable tech skills &amp; knowledge to reshape the world around us
            
            <br><br><span style="
                display: block;
                text-align: left;
                font-size: 1.1em;
                line-height: 1.1em;
                padding: 11px;
            "><span style="
                font-weight: bold;
                display: block;
            ">Courses:
            </span>
            <li style="
            ">Website Creation</li><li>Digital Marketing</li><li>Graphics Design</li>
            <br>
            <a href="#2" onclick="openmodal('reshape')" class="button special small" style="
                background-color: #1b62a7;
                border-radius: 50px;
                width: unset;
                margin: 5px;
                position: relative;
            ">Apply Now
            <span style="
                font-size: 10px;
                background-color: #ff3e37;
                width: 7px;
                height: 7px;
                position: absolute;
                display: none;
                border-radius: 50px;
                color: white;
                padding-left: 4px;
                /* margin-right: 5px; */
                text-align: center;
                /* top: -14px; */
                contain: strict;
                 /*change this on change*/
            " class="beat"></span></a>
            <br>

            <span>
                <br>
           

           <span style="
                display: block;
                font-weight: bold;
            ">Master Classes:
            </span>



            <span style="
                display: block;
            "><span style="
                display: inline-block;
                color: red;
                margin-right: 12px;
                font-size: .8em;
                font-weight: bold;
                margin-left: -1px;
                ">+</span><span>The Tech of Business Series</span></span>

            <a href="programs" class=" scrolly button small" style="
                box-shadow: inset 0 0 0 2px #1e63b1;
                border-radius: 50px;
                color: #1f5cad !important;
                width: unset;
                background-color: white;
                margin: 5px;
            ">View Program<span style="
                font-size: 10px;
                background-color: #ff3e37;
                width: 7px;
                height: 7px;
                position: absolute;
                display: inline-block;
                border-radius: 50px;
                color: white;
                padding-left: 4px;
                /* margin-right: 5px; */
                text-align: center;
                /* top: -14px; */
                contain: strict;
                display: none; /*change this on change*/
            " class="beat"></span></a><br></span>
                        </span><br>
                        </div>



                        </header>
                  
                </div>
</center> -->

<!-- ---------------------------------------------------------Project Start------------------ -->
<center id="notify_modal" style="overflow:scroll; background-color: rgba(0, 0, 0, 0.7); position: fixed; height: 100%; width: 100%; top: 0px; display: none; z-index: 1000; opacity: 0; transition: all 0.6s ease 0s;">

   <div id="" style="margin-top: 90px; max-width: 540px; width:90%; background-color:white; background-image: url(images/start_bg.jpg);background-repeat: no-repeat; background-position: right bottom; background-size: contain;">
        <span style="cursor: pointer;float: right;color: #F44336;font-size: 1.4em;padding: 5px 15px;position: relative;right: 0px;top: 0px;background-color: white;display: block; cursor: pointer" onclick="$('#notify_modal').css('opacity','0');setTimeout(function(){$('#notify_modal').css('display','none');},500)" id="">x</span>

            <header style="
                padding: 15% 0px; padding-bottom: 0;
            ">

            <h1 style="
                text-transform: none;
                font-family: metropolis_bold !important;
                color: #000e97;
                margin: 0;
                padding-bottom: 5px;
                font-size: 4em;
                "><span style="
    font-family: metropolis_bold !important;
    display: block;
    text-align: center;
"><img src="images/start_icon.jpg" style="height: 0.7em;margin-right: -.2em;"> Start</span><span style="
                color: #9c9c9c;
                margin-top: -1.2em;
                display: block;
                letter-spacing: 0;
                margin-left: 5.8em;
                font-size: 0.3em;
                font-family: metropolis_black !important;
            ">2020</span>
            <span style="
                color: black;
                display: block;
                font-size: 9px;
                margin-top: -5px;
                letter-spacing: 5px;
            ">tech skills to earn with</span></h1>
                                            
            <div style="
                color: black;
                font-size: 14px;
                margin-top: 4px;
                line-height: 1.2em;
                margin-bottom: 7px;
                padding: 10px;
            ">Start right!<br>Position yourself for opportunities<br>Join Us on Project Start (a weekend training program), learn valuable tech skills to earn
            
            <br><br><span style="
                display: block;
                font-size: 1.1em;
                line-height: 1.1em;
                padding: 11px;
                text-align: right;
            "><span style="
                font-weight: bold;
                display: block;
            ">Learn:</span>
            
<li>How to Code</li>
<li>Create Websites</li>
<li>Create Mobile Apps</li><li>Graphics Design</li><li>Digital Marketing</li>
            <li>Affliate Marketing</li><br>
            <a href="#2" onclick="openmodal('start')" class="button special small" style="
                background-color: #1b62a7;
                border-radius: 50px;
                width: unset;
                margin: 5px;
                position: relative;
            ">Apply Now
            <span style="
                font-size: 10px;
                background-color: #ff3e37;
                width: 7px;
                height: 7px;
                position: absolute;
                display: none;
                border-radius: 50px;
                color: white;
                padding-left: 4px;
                /* margin-right: 5px; */
                text-align: center;
                /* top: -14px; */
                contain: strict;
                 /*change this on change*/
            " class="beat"></span></a>
            <br>

            
                        </span><br>
                        </div>



                        </header>
                  
                </div>
</center>

<center id="modal_container" style="background-color: rgba(0, 0, 0, 0.7); position: fixed; height: 100%; width: 100%; top: 0; display: none; z-index: 1000; ">

    <div id="modal" style="margin-top: 90px; max-width: 540px; width:90%; height: calc( 80% - 60px); ">
        <span style="cursor: pointer;float: right;color: #F44336;font-size: 1.4em;padding: 5px 15px;position: relative;right: -10px;top: -10px;background-color: white;display: block; cursor: pointer" onclick="closemodal()" id="closemodal">x</span>
      <iframe id="campusApply" src="https://docs.google.com/forms/d/e/1FAIpQLSebk6F4AtvchmA9jlUNQz43XnUQq_1A0z6RYRToXLYRlj3C7g/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" style="display: none;">Loading...</iframe>

      <iframe id="reshape" src="https://docs.google.com/forms/d/e/1FAIpQLSdMF01TZuQXCVpPC-LxHNK4dFo_LeQprjfNUrxsXeHDP9K1xA/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" style="display: none;">Loading...</iframe>

      <iframe id="start" src="https://docs.google.com/forms/d/e/1FAIpQLSf-fsRMkDhAEmjnRe0R8RfRfWEKk4j3p3mtNGDkhsr9_jG1tA/viewform?embedded=true" width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" style="display: none;">Loading...</iframe>

    </div>
</center>


			<script src="assets/js/main.js"></script>
            <script src="../js/sweetalert.min.js"></script>
            <script type="text/javascript">

                
                $(document).ready(function(){
                     $("a[href='#1']").click(function(e){
                        e.preventDefault();
                        underconstruction();
                    })


                     // $('#notify_modal').css('display','block');
                     // setTimeout(function() {
                     //    $('#notify_modal').css('opacity','1');
                     // },2000)

                })

                function underconstruction(){
                    swal("Working In Progress","We're currently updating on this feature. Please try again soon","info");
                }



function openmodal(page){

    $("#modal *").css("display", "none");
    $("#"+page+", #closemodal").css("display", "block");
    $("#modal_container").css("display","block");

}

function closemodal(){

    $("#modal *").css("display", "none");
    $("#modal_container").css("display","none");
        

}


            </script>


				</body>
                <link rel="stylesheet" href="../css/sweetalert2.min.css" />
</html>