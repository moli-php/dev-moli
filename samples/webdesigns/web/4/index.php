<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Bags</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="basic_calendar.js"></script>


<style type="text/css">
.main {
width:200px;
border:1px solid pink;
}

.month {
background-color:#F0F;
font:bold 12px verdana;
color:white;
}

.daysofweek {
background-color:gray;
font:bold 12px verdana;
color:white;
}

.days {
font-size: 12px;
font-family:verdana;
color:#F0F;
background-color: lightyellow;
padding: 2px;
}

.days #today{
font-weight: bold;
color: red;
}
</style>
</head>

<body>
<?php $mylogo_url = "../js/images/mylogo.jpg"; ?>
<div id="head">
    <div id="logo"><img src="images/logo.png" width="117" height="90" />
   	  <div>We Design Quality Products</div>
  </div>
    
  <div id="navi">
    <div><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'><div>Home</div></a></div>
    <div><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'><div>Gallery</div></a></div>
    <div><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'><div>Services</div></a></div>
    <div><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'><div>About</div></a></div>
    <div><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'><div>Contact Us</div></a></div>
        <div class="clear"></div>
  </div>
</div><!-- end head div -->

<div id="nasty_iframe">
<iframe src="content1.html" marginheight="0" marginwidth="0" width="825" height="385" frameborder="0" scrolling="no"  ></iframe>
</div>


<div id="content2">
<div id="col1">
	 <div id="uni">
     <span>&nbsp;Search</span>
    <form action="http://www.google.com/search" method="get" target="_blank">
    <div style="padding: 0; margin: 0; float: left; width: 160px;"><input type="text" name="q" id="text" size="30" /></div>
    <div style="margin-left: 30px; margin-bottom: 0px; float: left; width: 20px;"><button id="btn" ><img src="images/search_icon.png" border="0" /></button>
    </div>
    </form>
    </div>
    
     <div id="uni">
        <div id="cal2">
        <script type="text/javascript">
        var todaydate=new Date()
        var curmonth=todaydate.getMonth()+1 //get current month (1-12)
        var curyear=todaydate.getFullYear() //get current year
        document.write(buildCal(curmonth ,curyear, "main", "month", "daysofweek", "days", 1));
        </script>    
        </div>
    </div>
    
    <div id="uni">
    <h2>Categories</h2>
    <ul>
    	<li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Prada</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Louis Vuitton</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Christian Dior</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Gourtio Armani</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Cartier</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Calvin klein</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Valintino</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Yves Saint Laurent</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Salvatore Ferraganio</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Porshe Design</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Versache</a></li>
    </ul>
    <h2>Archives</h2>
    <ul>
    	<li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>February 2011</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>January 2011</a></li>
    	<li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>December 2010</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>Noverber 2010</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>October 2010</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>September 2010</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>August 2010</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>July 2010</a></li>
        <li><a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'>June 2010</a></li>
    </ul>
   </div>
</div><!-- end col1 div -->

<div id="col2">

	<div id="holder">
    	<div id="image_area"><img src="images/col2_bags1.jpg" /></div>
    	<div id="contents">
        <h3>Green Jimmy Vhco</h3>
        <p>Leathered fabric bag made from Italy, with metal backled logo on front. Ideal for everyday use on all occassions.</p>
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="holder">
    	<div id="image_area"><img src="images/col2_bags2.jpg" /></div>
    	<div id="contents">
        <h3>Valintino leathered blue bag</h3>
        <p>Custom styled leatehred bag, with tiny swarovski crystals designed flowers and butterflies. Light blue coloured bag, designed for teens and moms, Ideal for everyday use on all occassions.  </p>
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="holder">
    	<div id="image_area"><img src="images/col2_bags3.jpg" /></div>
    	<div id="contents">
        <h3>Three Fabric Louis Vuitton Bags</h3>
        <p>With the lightly lighties couloured, and made of soft fabric material, combined with leathered cream coloured handle. Ideal for all occassions.</p>
        
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="holder">
    	<div id="image_area"><img src="images/col2_bags4.jpg" /></div>
    	<div id="contents">
        <h3>Leathered black Louis Vuitton Bag</h3>
        <p>This black leathered bag is the most demand product. Designed with random coloured Louis Vuitton logos on the leathered part of the bag.</p>
        </div> 
        <div class="clear"></div>
    </div>
   
    <div id="holder">
    	<div id="image_area"><img src="images/col2_bags5.jpg" /></div>
    	<div id="contents">
        <h3>Classic Louis Vuitton Products</h3>
        <p>These classic Louis Vuitton products are still the salable items we have. With the simplicity of the designed and Italy made Leathered quality.  </p>
        </div>
         <div class="clear"></div>
    </div>
    
    <div id="holder">
    	<a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'><div id="more">More...</div></a>
    </div>
    <hr />
    
     <div id="holder">
    	<div id="swatches"><img src="images/swatches.jpg" /></div><hr />
        <p>Custom swatches made of different styles, for the uniqueness of your own everyday lifestyle. With plated gold and swarovski crytals. </p>
    	
        <a href="<?php echo $mylogo_url; ?>" rel='lightbox' title='moli&#39;s sample design'><div id="more">More...</div></a>
    </div>
    
    
</div><!-- end col2 div -->


</div><!-- end content2 div -->
<div id="content2">
<div id="footer">Copyright &copy; The Bags. All Rights Reserved.  &nbsp;&nbsp;| DESIGN BY MOLI S.</div>
</div>



</body>
</html>

<script type="text/javascript" src="../js/js/prototype.js"></script>
<script type="text/javascript" src="../js/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="../js/js/lightbox.js"></script>
<link rel="stylesheet" href="../js/css/lightbox.css" type="text/css" media="screen" />