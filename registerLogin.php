<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>LOGIN</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="This site was created from a template originally designed and developed by Codify Design Studio. Find more free templates at http://www.adobe.com/devnet/author_bios/chris_converse.html" />
		<link rel="stylesheet" type="text/css" href="stylesheet.css" />
		<script type="text/javascript" src="SpryAssets/SpryAccordion.js"></script>
		<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
		<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>
	<body>
		<div class="container"> 
			<div class="bannerArea">			
				<div class="bannernav"><a href="#" >Privacy Policy</a>  |  <a href="#" >Contact Us  </a>| <a href="#" >Site Map</a></div>
				<div class="toplogo"></div>
			</div>
			<div class="contentArea">
			  <ul class="leftnavigation">
			<li><a href="index.html">Log out to Home Page</a></li>
			    <li></li>
		      </ul>
			  <div class="content">
					<div class="contentleft">
						<h1>Welcome to use this system.</h1>
						<h1>&nbsp;</h1>
<?php
$username = $_POST["newuser"];
$password = $_POST["newpassword"];
$confirm = $_POST["confirmpassword"];

if($password != $confirm)
{
	echo "<a href=http://localhost/Register.html>Please confirm password</a>";
}
else
{
$rst = @mysql_connect("localhost","root","root");
if (!$rst){
			echo( "<p>Unable to connect to database manager.</p>");
			die('Could not connect: ' . mysql_error());
			exit();
} 
else{
		 echo("<p>Successfully Connected to MySQL Database Manager!</p>");
	}
if (! @mysql_select_db("test_schema") ){
	 echo( "<p>Unable to  connect database...</p>");
	exit();
} 
else 
{
	 echo("<p>Successfully Connected to Database 'testschema'!</p>");
}
	$insertquery = mysql_query("insert into UserDetails values('$username','$password')");
	echo "You have been registered successfully";
	echo "</br></br>";
	echo "<a href=StockForecast.html>Click here to start experience our STOCK FORECAST service!</a>";
}
?>
						<p>&nbsp; </p>
						<p>&nbsp;</p>
                        <p>&nbsp;</p>
					</div>
					<div class="contentright">
							<div id="SpryAccordion1" class="Accordion" tabindex="0">
							<div class="AccordionPanel">
								<div class="AccordionPanelTab tabTop">
									<div class="accordion_340_tab">
										Yahoo! Finance
									</div>
								</div>
								<div class="AccordionPanelContent">
									<div class="acontent">
										<tr>



						<td align = "center" bgcolor = "#C9C299">

							<iframe 



allowtransparency="true" align = "center"marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" 
src="http://api.finance.yahoo.com/instrument/1.0/%5EIXIC,GE,MSFT,GOOG,AMZN/badge;chart=1y;quote/HTML?AppID=gq2K8xRjRw5FwMMj9gnHCB4Bdn8-&sig=J.cC1srjmMffRPmSUTxk121Zn7Y-&t=1207427110830" width="300px" height="500px"><a 
href="http://finance.yahoo.com">Yahoo! Finance</a><br/><a 
href="http://finance.yahoo.com/q?s=^IXIC">Quote for ^IXIC</a></iframe>

						</td>

					</tr>

					

									</div>
								</div>
							</div>
							<div class="AccordionPanel">
								<div class="AccordionPanelTab middleTab">
									<div class="accordion_340_tab">
										Stock Price</div>
								</div>
								<div class="AccordionPanelContent">
									<div class="acontent">
										<tr>

			

			<td align = "left" border = "1" width = "25%">

				<iframe id="MARKETFRAME" name="MARKETFRAME" 



height="100"align = "left" frameborder="1" scrolling="NO" 



src="http://www.vectorvest.com/vvmarketindices" width="100%"></iframe>

				<br /><br style="line-height:3px;" /><br>

			</td>



		</tr>

									</div>
								</div>
							</div>
							<div class="AccordionPanel">
								<div class="AccordionPanelTab middleTab">
									<div class="accordion_340_tab"></div>
									Developers
								</div>
								<div class="AccordionPanelContent">
									<div class="acontent">
									  <h2>Instructor: </h2>
                      <p>Shiyu Zhou</p>
                      <p>&nbsp;</p>
                        <h2>Group Member:</h2>
                        <p>Zhenhua Jia </p>
                        <p>Bingbing Xu</p>
                      	<p>Kun Zhao </p>
                        <p>Siyu He</p>
									</div>
								</div>
							</div>
						</div>
						<div class="AccordionBottom"></div>
					</div>
					<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
			<div class="footerArea">
				<div class="copyright">&copy; 2009 Our Company.  All rights reserved.</div>
			</div>		
		</div>
<div id="TabbedPanels1" class="TabbedPanels">
	<ul class="TabbedPanelsTabGroup">
		<li class="TabbedPanelsTab" tabindex="0">Tab 1</li>
		<li class="TabbedPanelsTab" tabindex="0">Tab 2</li>
	</ul>
	<div class="TabbedPanelsContentGroup">
		<div class="TabbedPanelsContent">Content 1</div>
		<div class="TabbedPanelsContent">Content 2</div>
	</div>
	</div>
	<script type="text/javascript">
<!--
var SpryAccordion1 = new Spry.Widget.Accordion("SpryAccordion1", {useFixedPanelHeights:false, defaultPanel:2});
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
		</script>
	</body>
</html>