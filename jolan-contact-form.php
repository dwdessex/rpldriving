<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="tags" --><title>Thank You For Contacting The Jolan Driving School</title>
<meta name="Description" content="Thank you for contacting the Jolan Driving School. I will be in touch soon." />
<meta name="Keywords" content="driving, contact, email, jolan, lessons, school, instructor" />
<!-- InstanceEndEditable -->
<meta name="Robots" content="all" />
<meta name="Language" content="en-gb" />
<meta name="Author" content="Dyno Web Design" />
<meta name="geo.country" content="UK" />
<meta name="geo.placename" content="Notting Hill, Hammersmith, Shepherds Bush, Acton, West London, Ladbroke Grove, White City, Holland Park, Kensington, Kilburn" />
<link href="/Templates/css.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27899385-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="page">
  <div id="header">
  <div id="heading"><img src="/images/jdslogo.gif" alt="driving school notting hill" width="82" height="91" align="middle" /><span class="style10">Jolan Driving School</span></div>
  <div class="style3" id="contact"><strong>    Call - 07903 183429<br />
      <a href="mailto:info@jolandrivingschool.co.uk">info@jolandrivingschool.co.uk</a></strong></div></div>
  <div id="title"><img src="/imagesimage.jpeg" width="414" height="207" /></div>
  <div id="social"><br /> 
  <script type="text/javascript">
//<![CDATA[
(function() {
    document.write('<fb:like href="http://www.jolandrivingschool.co.uk" send="false" layout="button_count" width="100" show_faces="false"></fb:like>');
    var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'http://connect.facebook.net/en_GB/all.js#xfbml=1';
    s1.parentNode.insertBefore(s, s1);
})();
//]]>
</script>  <br /><br /><br />
<script type="text/javascript">
//<![CDATA[
(function() {
    document.write('<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a>');
    var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'http://platform.twitter.com/widgets.js';
    s1.parentNode.insertBefore(s, s1);
})();
//]]>
</script></div><div class="clear"></div>
  <!-- InstanceBeginEditable name="content" --><div id="nav">
    <p><a class="buttonup" href="/index.html">Home</a><br /> <a class="buttonup" href="/contact-driving-school.html">Contact Me</a><br /> 
    <a class="buttonup" href="/driving-lesson-areas.html">Lesson Areas</a><br />
    <a class="buttonup" href="/driving-lesson-prices.html"> Prices</a><br />
    <a href="/passes-and-testimonials.php" class="buttonup">Testimonials</a><br />
    <a href="/about-driving-instructor.html" class="buttonup">About Jolan DS</a><br />
    <a href="/driving-theory-test.html" class="buttonup">Test Info</a><br />
    <a class="buttonup" href="/useful-driving-links.html">Useful Links</a></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>
<div id="content">
  <p>&nbsp;</p>
  <h1 class="style6">Thank you for contacting the Jolan Driving School.</h1>
  <p>I will get back to you as soon as possible.</p>
  <p>Until then feel free to browse through<br />
    the <a href="http://www.jolandrivingschool.co.uk">Jolan Driving School</a> website.</p>
  <p>&nbsp;</p><?php

$my_email = "info@jolandrivingschool.co.uk";

/*

Enter the continue link to offer the user after the form is sent.  If you do not change this, your visitor will be given a continue link to your homepage.

If you do change it, remove the "/" symbol below and replace with the name of the page to link to, eg: "mypage.htm" or "http://www.elsewhere.com/page.htm"

*/

$continue = "http://www.jolandrivingschool.co.uk";

/*

Step 3:

Save this file (FormToEmail.php) and upload it together with your webpage containing the form to your webspace.  IMPORTANT - The file name is case sensitive!  You must save it exactly as it is named above!  Do not put this script in your cgi-bin directory (folder) it may not work from there.

THAT'S IT, FINISHED!

You do not need to make any changes below this line.

*/

$errors = array();

// Remove $_COOKIE elements from $_REQUEST.

if(count($_COOKIE)){foreach(array_keys($_COOKIE) as $value){unset($_REQUEST[$value]);}}

// Check all fields for an email header.

function recursive_array_check_header($element_value)
{

global $set;

if(!is_array($element_value)){if(preg_match("/(%0A|%0D|\n+|\r+)(content-type:|to:|cc:|bcc:)/i",$element_value)){$set = 1;}}
else
{

foreach($element_value as $value){if($set){break;} recursive_array_check_header($value);}

}

}

recursive_array_check_header($_REQUEST);

if($set){$errors[] = "You cannot send an email header";}

unset($set);

// Validate email field.

if(isset($_REQUEST['email']) && !empty($_REQUEST['email']))
{

if(preg_match("/(%0A|%0D|\n+|\r+|:)/i",$_REQUEST['email'])){$errors[] = "Email address may not contain a new line or a colon";}

$_REQUEST['email'] = trim($_REQUEST['email']);

if(substr_count($_REQUEST['email'],"@") != 1 || stristr($_REQUEST['email']," ")){$errors[] = "Email address is invalid";}else{$exploded_email = explode("@",$_REQUEST['email']);if(empty($exploded_email[0]) || strlen($exploded_email[0]) > 64 || empty($exploded_email[1])){$errors[] = "Email address is invalid";}else{if(substr_count($exploded_email[1],".") == 0){$errors[] = "Email address is invalid";}else{$exploded_domain = explode(".",$exploded_email[1]);if(in_array("",$exploded_domain)){$errors[] = "Email address is invalid";}else{foreach($exploded_domain as $value){if(strlen($value) > 63 || !preg_match('/^[a-z0-9-]+$/i',$value)){$errors[] = "Email address is invalid"; break;}}}}}}

}

// Check referrer is from same site.

if(!(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']))){$errors[] = "You must enable referrer logging to use the form";}

// Check for a blank form.

function recursive_array_check_blank($element_value)
{

global $set;

if(!is_array($element_value)){if(!empty($element_value)){$set = 1;}}
else
{

foreach($element_value as $value){if($set){break;} recursive_array_check_blank($value);}

}

}

recursive_array_check_blank($_REQUEST);

if(!$set){$errors[] = "You cannot send a blank form";}

unset($set);

// Display any errors and exit if errors exist.

if(count($errors)){foreach($errors as $value){print "$value<br>";} exit;}

if(!defined("PHP_EOL")){define("PHP_EOL", strtoupper(substr(PHP_OS,0,3) == "WIN") ? "\r\n" : "\n");}

// Build message.

function build_message($request_input){if(!isset($message_output)){$message_output ="";}if(!is_array($request_input)){$message_output = $request_input;}else{foreach($request_input as $key => $value){if(!empty($value)){if(!is_numeric($key)){$message_output .= str_replace("_"," ",ucfirst($key)).": ".build_message($value).PHP_EOL.PHP_EOL;}else{$message_output .= build_message($value).", ";}}}}return rtrim($message_output,", ");}

$message = build_message($_REQUEST);

$message = $message . PHP_EOL.PHP_EOL."-- ".PHP_EOL."";

$message = stripslashes($message);

$subject = "Jolan Driving School Website Enquiry";

$headers = "From: " . $_REQUEST['email'];

mail($my_email,$subject,$message,$headers);

?></div><!-- InstanceEndEditable --><div class="clear"></div>
  <div id="footer">
    <div class="style8" id="copyright">
      <p>Driving lessons in <a href="/lessons/acton.html">Acton</a>, <a href="/lessons/shepherds-bush.html">Shepherds Bush</a>, <a href="/lessons/hammersmith.html">Hammersmith</a>, <a href="/lessons/holland-park.html">Holland Park</a>, <a href="/lessons/notting-hill.html">Notting Hill</a>, <a href="/lessons/kilburn.html">Kilburn</a>, <a href="/lessons/ladbroke-grove.html">Ladbroke Grove</a>, <a href="/lessons/kensington.html">Kensington</a>, <a href="/lessons/white-city.html">White City</a></p>
      <p><strong><em>Website Design By <a href="http://www.dynowebdesign.co.uk">Dyno Web Design</a><br />
        Copyright © 2014 All Rights Reserved<br />
        Last Updated 
        <!-- #BeginDate format:Sw1 -->18 September, 2017<!-- #EndDate -->
        </em></strong><br />
        <a href="/sitemap.html"><em>Sitemap</em></a></p>
    </div>
      
</div></div>
<br /><br />
</body>
<!-- InstanceEnd --></html>
