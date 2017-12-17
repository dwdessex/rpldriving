<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Jolan Driving School</title>
<meta name="Description" content="Jolan Driving School - so is this..." />
<meta name="Keywords" content="driving, lessons, school, instructor" />
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
  <div id="title"><img src="/images/jdsheader.jpg" width="650" height="184" alt="driving lessons in shepherds bush" /></div>
  <div class="clear"></div>
<div id="nav">
    <p><a class="buttonup" href="/index.html">Home</a><br /> <a class="buttonup" href="/contact-driving-school.html">Contact Me</a><br /> 
    <a class="buttonup" href="/driving-lesson-areas.html">Lesson Areas</a><br />
    <a class="buttonup" href="/driving-lesson-prices.html"> Prices</a><br />
    <a href="/passes-and-testimonials.php" class="buttondown">Testimonials</a><br />
    <a href="/about-driving-instructor.html" class="buttonup">About Jolan DS</a><br />
    <a href="/driving-theory-test.html" class="buttonup">Test Info</a><br />
    <a class="buttonup" href="/useful-driving-links.html">Useful Links</a></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>
<div id="content" class="style2">
  <h1 class="largeprice">Driving Test Successes And Testimonials</h1>
  <p>&nbsp;</p>
  <p><?php
require('/home/j31rpld/public_html/jolandrivingschool/test-passes-testimonials/wp-blog-header.php');
query_posts('showposts=10');
?>
  <?php while (have_posts()): the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <?php the_content(); ?>
  <?php endwhile; ?></p>
  
</div><div class="clear"></div>
  <div id="footer">
    <div class="style8" id="copyright">
      <p>Driving lessons in <a href="/lessons/acton.html">Acton</a>, <a href="/lessons/shepherds-bush.html">Shepherds Bush</a>, <a href="/lessons/hammersmith.html">Hammersmith</a>, <a href="/lessons/holland-park.html">Holland Park</a>, <a href="/lessons/notting-hill.html">Notting Hill</a>, <a href="/lessons/kilburn.html">Kilburn</a>, <a href="/lessons/ladbroke-grove.html">Ladbroke Grove</a>, <a href="/lessons/kensington.html">Kensington</a>, <a href="/lessons/white-city.html">White City</a></p>
      <p><strong><em>Website Design By <a href="http://www.dynowebdesign.co.uk">Dyno Web Design</a><br />
        Copyright © 2011 All Rights Reserved<br />
        Last Updated 
        <!-- #BeginDate format:Sw1 -->6 September, 2012<!-- #EndDate -->
        </em></strong><br />
        <a href="/sitemap.html"><em>Sitemap</em></a></p>
    </div>
      
</div></div>
<br /><br />
</body>
</html>
