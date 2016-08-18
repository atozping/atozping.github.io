<?php session_start();


//$_SESSION['admin_auth']='12345';

$con = mysql_connect('localhost:3306','aspirzdi_knusrrv','Jay$JogninaR_7');
	//$con=mysql_connect("localhost","root","");
	
	if(!$con)
	{
		die('Could not connect to the database'.mysql_error());
	}
	
	mysql_select_db("aspirzdi_ijaerd",$con)OR DIE(mysql_error());
	
/*	
if(isset($_REQUEST['pastissue_go']) && $_REQUEST['volumn_no']!="" && $_REQUEST['issue_no']!="")
{
	$_SESSION['volumn']=$_REQUEST['volumn_no'];
	$_SESSION['issue']=$_REQUEST['issue_no'];
	header('Location: PastIssues.php?ao');
}
*/
	if(isset($_REQUEST['v']) && isset($_REQUEST['i']))
	{
		$_SESSION['volumn']=$_GET['v'];
		$_SESSION['issue']=$_GET['i'];
		header('Location: PastIssues.php?ao');
	}
	
?>
<style>
.myButton {
	-moz-box-shadow: 3px 4px 0px 0px #899599;
	-webkit-box-shadow: 3px 4px 0px 0px #899599;
	box-shadow: 3px 4px 0px 0px #899599;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #bab1ba));
	background:-moz-linear-gradient(top, #ededed 5%, #bab1ba 100%);
	background:-webkit-linear-gradient(top, #ededed 5%, #bab1ba 100%);
	background:-o-linear-gradient(top, #ededed 5%, #bab1ba 100%);
	background:-ms-linear-gradient(top, #ededed 5%, #bab1ba 100%);
	background:linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#bab1ba',GradientType=0);
	background-color:#ededed;
	-moz-border-radius:15px;
	-webkit-border-radius:15px;
	border-radius:15px;
	border:1px solid #d6bcd6;
	display:inline-block;
	cursor:pointer;
	color:rgb(30,87,153);
	font-family:Cambria;
	font-size:14px;
	font-weight:bold;
	padding:4px 10px;
	text-decoration:none;
	text-shadow:0px 1px 0px #e1e2ed;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bab1ba), color-stop(1, #ededed));
	background:-moz-linear-gradient(top, #bab1ba 5%, #ededed 100%);
	background:-webkit-linear-gradient(top, #bab1ba 5%, #ededed 100%);
	background:-o-linear-gradient(top, #bab1ba 5%, #ededed 100%);
	background:-ms-linear-gradient(top, #bab1ba 5%, #ededed 100%);
	background:linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bab1ba', endColorstr='#ededed',GradientType=0);
	background-color:#bab1ba;
}
.myButton:active {
	position:relative;
	top:1px;
}</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56819258-1', 'auto');
  ga('send', 'pageview');

</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IJAERD | Impact Factor: 3.134</title>
<link href="style/ijaerd_css.css" rel="stylesheet" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Start css3 menu HEAD section -->
	<link rel="stylesheet" href="css3_menu/style.css" type="text/css" /><style>._css3m{display:none}</style>
	<!-- End css3 menu HEAD section -->
    
    <script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56819258-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>

<div class="body"><!-- body class starts here -->

<div class="header_ijaerd"><!-- header starts here -->
    	<div class="header_main"><!-- header main starts here -->
        <a href="index.php"><img src="images/ijaerd.png" height="130" width="130" style="position:absolute; left:5px;" /></a>
        	<img src="images/ijaerd1.png" height="125" width="810" style="position:relative; left:141px;" />
	  	</div><!-- header main ends here -->
</div><!-- header ends here -->

<div class="menubar_ijaerd"><!-- menubar starts here -->
<hr style="height:3px; width:100%; background-color:rgba(21,106,180,0.9); position:absolute; top:30px;" />

	<div class="menubar"><!-- main menubar starts here -->

                   <!-- <ul>
                    	<li><a  href="index.php">Home</a></li>
         			    <li><a href="">About Us</a>
                        	<ul>
                            	<li><a href="">Our Vision</a></li>
                                <li><a href="">Our Mission</a></li>
                            </ul></li>
                        <li><a href="">Call for paper</a></li>
                         <li><a href="">Author Guideline</a></li>
         			    <li><a href="">Editorial Board</a></li>
                        <li><a href="">Issues</a>
                        	<ul>
                            	<li><a href="">Current</a></li>
                                <li><a href="">Past</a></li>
                            </ul></li>
                        <li><a href="">Downloads</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>-->
                    
                    
                    <!-- Start css3menu.com BODY section -->
<ul id="css3menu1" class="topmenu">
	<li class="topfirst"><a href="index.php" style="height:19px;line-height:19px;"><img src="css3_menu/home1.png" alt=""/>Home</a></li>
	<li class="topmenu"><a href="#" style="height:19px;line-height:19px;"><span><img src="css3_menu/service.png" alt=""/>About Us</span></a>
	<ul>
		<li><a href="Vision.php"><img src="css3_menu/favour.png" alt=""/>Our Vision</a></li>
		<li><a href="Mission.php"><img src="css3_menu/blue-bubble 3.png" alt=""/>Our Mission</a></li>
	</ul></li>
	<li class="topmenu"><a href="" style="height:19px;line-height:19px;"><img src="css3_menu/blue_circle - light.png" alt=""/>Call For Paper</a>
     <ul>
		<li><a href="CallForPaper.php"><img src="css3_menu/blue_circle - light.png" alt=""/>Call For Paper</a></li>
        <li><a href="ResearchArea.php"><img src="css3_menu/blue-zoom in.png" alt=""/>Research Area</a></li>
        <li><a href="CallForPaper.php"><img src="css3_menu/blue-application.png" alt=""/>Conference and Support</a></li>
        </ul>
        </li>
	<li class="topmenu"><a href="#" style="height:19px;line-height:19px;"><img src="css3_menu/blue_circle - stats.png" alt=""/>Author Guideline</a>
    <ul>
		<li><a href="PaymentInformation.php"><img src="css3_menu/favour.png" alt=""/>Payment Information</a></li>
		<li><a href="AuthorGuideline.php"><img src="css3_menu/blue-bubble 3.png" alt=""/>Author Guideline</a></li>
        <li><a href="PeerReviewProcess.php"><img src="css3_menu/blue-globe.png" alt=""/>Peer Review Process</a></li>
        <li><a href="SubmitPaper.php"><img src="css3_menu/blue-screen.png" alt=""/>Submit Paper Online</a></li>
        <li><a href="eCertificate.php"><img src="css3_menu/blue-email.png" alt=""/>Generate e-Certificate</a></li>
        <li><a href="Downloads.php"><img src="css3_menu/blue-puzzle.png" alt=""/>Paper Template</a></li>
        <li><a href="CheckStatus.php"><img src="css3_menu/blue-bubble 1.png" alt=""/>Check Paper Status</a></li>
	</ul></li>
	<li class="topmenu"><a href="" style="height:19px;line-height:19px;"><img src="css3_menu/blue_circle - rss.png" alt=""/>Reviewer</a>
    <ul>
		<li><a href="EditorialBoard.php"><img src="css3_menu/blue-application.png" alt=""/>Editorial Board</a></li>
        <li><a href="JoinUs.php"><img src="css3_menu/blue-write2.png" alt=""/>Join Us</a></li>
        </ul>
        </li>
	<li class="topmenu"><a href="#" style="height:19px;line-height:19px;"><span><img src="css3_menu/blue_circle - network.png" alt=""/>Archive</span></a>
	<ul>
		<li><a href="CurrentIssues.php"><img src="css3_menu/blue-card4.png" alt=""/>Current Issues </a></li>
		<li><a href="PastIssues.php"><img src="css3_menu/blue-trackback.png" alt=""/>Past Issues</a></li>
        <li><a href="SpecialIssues.php"><img src="css3_menu/blue-trackback.png" alt=""/>Special Issues</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:19px;line-height:19px;"><img src="css3_menu/favour1.png" alt=""/>Downloads</a>
    <ul>
		<li><a href="formats/ijaerd_Paper_Format.doc" target="_blank"><img src="css3_menu/blue-puzzle.png" alt=""/>Paper Template</a></li>
		<li><a href="formats/Copyright Form.pdf" target="_blank"><img src="css3_menu/icon33.png" alt=""/>CopyRight Form</a></li>
	</ul></li>
	<li class="toplast"><a href="IJAERD-Contact.php" style="height:19px;line-height:19px;"><img src="css3_menu/blue_circle - internet.png" alt=""/>Contact</a></li>
<!-- End css3menu.com BODY section -->

	</div><!-- main menubar ends here -->
    
</div><!-- menubar ends here -->

<div class="middle_ijaerd" style="height:47050px;"><!-- middle portion starts here -->
	<div class="middle_main"><!-- main middle portion starts here -->
    
    <!-- <div class="upper1_horizontal"><!-- upper horizontal starts here -->
    
   <!-- <marquee direction="left" scrolldelay="150" onmouseover="stop();" onmouseout="start();" style="padding:10px; color:#F00; font-size:14px; font-family:verdana, Arial, Helvetica, sans-serif; letter-spacing:1px;">
    
    <?php
	$result_notice=mysql_query("SELECT * FROM ijaerd_update");
	$row_notice=mysql_fetch_array($result_notice);
	
    
    //echo $row_notice['notice'];
	
	
	?>  
    </marquee>
    
    </div><!-- upper horizontal ends here -->
    
    <div class="upper2_horizontal" style="position:relative; top:0px; height:950px;"><!-- upper horizonta2 starts here -->
      <?php include_once 'IJAERD-Left_Menu.php';?>
    	        
        <div class="left2" style="background-image:url(images/kit-bg1.png); background-repeat:no-repeat; width:720px; height:10070px;"><!-- left2 part starts here -->
        <p style="position:absolute; top:5px; left:5px; color:#FFF; z-index:1; margin:0px; padding:10px; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif;">IJAERD: Past Issues ...</p>
        
        <p style="position:absolute; top:60px; left:250px; margin:0px; padding:0px;">
                     <script>
					  (function() {
						var cx = '001638048074119377801:kvsny9zz7qk';
						var gcse = document.createElement('script');
						gcse.type = 'text/javascript';
						gcse.async = true;
						gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
							'//www.google.com/cse/cse.js?cx=' + cx;
						var s = document.getElementsByTagName('script')[0];
						s.parentNode.insertBefore(gcse, s);
					  })();
					</script>
					<gcse:search></gcse:search>
                     
                     </p>
        
        
            <?php if(!isset($_REQUEST['ao'])){?>
            
           <!-- <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=01" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 01 - December, 2014.</a></p>-->
            
            
			<!-- For year 2016 start ---->
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='12'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=12" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 12 - December, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='11'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=11" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 11 - November, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='10'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=10" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 10 - October, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='09'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=09" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 09 - September, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='08'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=08" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 08 - August, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='07'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=07" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 07 - July, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='06'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=06" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 06 - June, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='05'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=05" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 05 - May, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='04'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=04" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 04 - April, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='03'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=03" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 03 - March, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='02'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=02" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 02 - February, 2016.</a></p>
            <?php }?>
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='03' AND issue_no='01'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=03&i=01" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 03, Issue: 01 - January, 2016.</a></p>
            <?php }?>
			
			
			
			
			
			
			
			
			<!-- For year 2016 ends ---->
			
			
			
			
			<?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='12'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=12" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 12 - December, 2015.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='11'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=11" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 11 - November, 2015.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='10'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=10" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 10 - October, 2015.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='09'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=09" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 09 - September, 2015.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='08'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=08" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 08 - August, 2015.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='07'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=07" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 07 - July, 2015.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='06'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=06" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 06 - June, 2015.</a></p>
            <?php }?>
            
             <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='05'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=05" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 05 - May, 2015.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='04'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=04" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 04 - April, 2015.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='03'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=03" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 03 - March, 2015.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='02'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=02" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 02 - February, 2015.</a></p>
            <?php }?>
            
           <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='02' AND issue_no='01'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=02&i=01" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 02, Issue: 01 - January, 2015.</a></p>
            <?php }?>
			            
            <?php // VOLUME - 1..1 to 12 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='12'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=12" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 12 - December, 2014.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='11'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=11" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 11 - November, 2014.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='10'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=10" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 10 - October, 2014.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='09'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=09" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 09 - September, 2014.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='08'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=08" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 08 - August, 2014.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='07'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=07" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 07 - July, 2014.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='06'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=06" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 06 - June, 2014.</a></p>
            <?php }?>
            
             <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='05'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=05" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 05 - May, 2014.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='04'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=04" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 04 - April, 2014.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='03'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=03" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 03 - March, 2014.</a></p>
            <?php }?>
            
            <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='02'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=02" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 02 - February, 2014.</a></p>
            <?php }?>
            
           <?php 
			$result_pi=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='01' AND issue_no='01'")or die(mysql_error());
			if(mysql_num_rows($result_pi)>0){?>
            <p style="position:relative; top:100px; left:0px; color:#333; font-weight:normal; z-index:1; margin:0px; padding:10px; border-bottom:#666 dashed 1px;"><a href="PastIssues.php?v=01&i=01" style="font-size:14px; text-decoration:none; line-height:25px; text-align:justify; letter-spacing:1px; font-family:verdana, Arial, Helvetica, sans-serif; color:#333;">Volume: 01, Issue: 01 - January, 2014.</a></p>
            <?php }?>
     
	        <?php }?>

        <?php if(isset($_REQUEST['ao']))
		{

		
						if($_SESSION['volumn']=='2014')
						{
							
							$year='1';
						}
						
						elseif($_SESSION['volumn']=='2015')
						{
							
							$year='2';
						}
						elseif($_SESSION['volumn']=='2016')
						{
							
							$year='3';
						}
						$result_current_issue=mysql_query("SELECT * FROM ijaerd_paper_final WHERE volumn_no='".$_SESSION['volumn']."' AND issue_no='".$_SESSION['issue']."'")or die('database error.');

		?>
        
        
        
                     <p style="position:absolute; top:80px; left:5px; color:#09F; font-weight:normal; z-index:1; margin:0px; padding:10px; font-size:18px; line-height:25px; text-align:justify; letter-spacing:0px; font-family:Cambria;">Volume: <strong style="color:#0C3;"><?php echo $_SESSION['volumn']; ?></strong>, Issue: <strong style="color:#0C3;"></strong><?php echo $_SESSION['issue'];?></strong></p>
                     
                     
        
        
  
               
            <table style="font-size:14px;font-family:Cambria; position:relative; top:120px;" class="table-hover" border="1" align="center" width="100%">
			           
            <tr style="font-size:16px;font-family:Cambria; position:relative;color:#FFFFFF;background-color:rgba(21,106,180, 0.55); padding:5px 2px;">
            <td><p align="center" ><strong>No</strong></td>
            <td><p align="center" ><strong>Paper Details</strong></td>
            <!--<td>Auther Name(s)</td>-->
            <td><p align="center" ><strong>Page Number</strong></td>
            <td><p align="center" ><strong>Download</strong></td>
            </tr>
            
            <!--<tr><td colspan="4"><hr /><hr /></td></tr>-->
            
            <?php
			$i=0;
			if(mysql_num_rows($result_current_issue)>0)
			{
				while($row_current_issue=mysql_fetch_array($result_current_issue))
				{
					$papre_id=$row_current_issue['paper_id'];
					$i++;
					$result_paperinfo=mysql_query("SELECT * FROM ijaerd_paper_submit WHERE paper_id='".$papre_id."'")or die('database error1.');
					$row_paperinfo=mysql_fetch_array($result_paperinfo);
					
					$result_subauther=mysql_query("SELECT * FROM ijaerd_subauthor_details WHERE author_id='".$row_paperinfo['author_id']."'")or die('database error.');
					
			?>
            <tr>
            <td align="center" style="font-weight:bold;"><?php echo $i; ?></td>
             <td style="text-transform:uppercase;"><strong><?php echo $row_paperinfo['title']; ?></strong> <br />
           <p style="text-transform:capitalize;">Author(s): <?php echo $row_paperinfo['author_name']; if(mysql_num_rows($result_subauther)>0)
			{
				$row_subauther=mysql_fetch_array($result_subauther);
				
					if($row_subauther['co1_name']!="")
					{
						echo ',&nbsp;'.$row_subauther['co1_name'];
					}
					if($row_subauther['co2_name']!="")
					{
						echo ',&nbsp;'.$row_subauther['co2_name'];
					}
					if($row_subauther['co3_name']!="")
					{
						echo ',&nbsp;'.$row_subauther['co3_name'];
					}
					if($row_subauther['co4_name']!="")
					{
						echo ',&nbsp;'.$row_subauther['co4_name'];
					}
				
			}?>
            

            print_r($row_current_issue);
            die();
            
			<p><a href="papers/finished_papers/<?php echo $row_current_issue['final_paper_path'] ; ?>" target="_blank">DOI:10.21090/ijaerd.<?php echo $row_current_issue['volumn_no']; ?><?php echo $row_current_issue['issue_no']; ?><?php echo $i;?></a></p>
            
            </td>
           <!-- <td></td> -->
            <td><p align="center"><?php echo $row_current_issue['page_no']; ?></td>
            <td><a class="myButton" href="papers/finished_papers/<?php echo $row_current_issue['final_paper_path'] ; ?>" target="_blank">Download</a> </td>
			<!--<td><a href="papers/finished_papers/<?php echo $row_current_issue['final_paper_path'] ; ?>" target="_blank" style="color:#900;"><strong>Download</strong></a></td>-->
            </tr>
            
             <!--<tr><td colspan="4"><hr /><hr /></td></tr>-->
            <?php } 
			}else{?>
            <tr>
            <td colspan="4" style="background-color:#FF4F4F; color:#FFF;">No Paper Received for this selection.</td>
            </tr>
            
            <?php }?>
            <tr>
            <td colspan="4" align="right"><a href="PastIssues.php" style="color:#666; text-decoration:none;">Back to Past Issues</a></td>
            </tr>

			 </table>   
       
       
       <?php session_unset($_SESSION['volumn']); session_unset($_SESSION['issue']);}?>
        
        
        </div><!-- left2 part ends here -->
        
        
    
    
    </div><!-- upper horizonta2 ends here -->
    
    
	</div><!-- main middle portion ends here -->

</div><!-- middle portion ends here -->

<?php include 'ijaerd_footer.php';?>
