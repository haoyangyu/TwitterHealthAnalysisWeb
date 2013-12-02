<!DOCTYPE html>
<html>
  <head>
    <title>User Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["mname"].value;
var d=document.forms["reg"]["address"].value;
var e=document.forms["reg"]["contact"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") )
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }

}
</script>
  </head>
 
	<body>
	<div id="container">
	
    <div id="bannerArea">			
		<div class="bannernav"><a href="#" >Privacy Policy</a>  |  <a href="http://localhost:8888/contact.php" >Contact Us  </a>| <a href="#" >Site Map</a></div>
		<div class="toplogo"></div>
	</div>
	
    <div id="navbar">
    	<a href="http://localhost:8888/twitterAnalytics.php">Home</a> |
    	<a href="index.html?about">City Analysis</a> |
		<a href="mailto:haoyang.yu@rutgers.edu">Personal Service</a> |
		<a href="mailto:haoyang.yu@rutgers.edu">About us</a>
	</div>
	
   
 	<div id="main">
		<form name="reg" action="register_exec.php" onsubmit="return validateForm()" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2">
		<div align="center">
		  <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}
		?>	
	    </div></td>
  </tr>
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" /></td>
  </tr>
  <tr>
    <td><div align="right">Gender:</div></td>
    <td><input type="text" name="mname" /></td>
  </tr>
  <tr>
    <td><div align="right">Address:</div></td>
    <td><input type="text" name="address" /></td>
  </tr>
  <tr>
    <td><div align="right">Contact No.:</div></td>
    <td><input type="text" name="contact" /></td>
  </tr>
 <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="username" /></td>
  </tr>
 <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="text" name="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
  </tr>
</table>
</form>
	<div id="footer">
		<h6>Version 1.0 2013 Copyright for Group#2</h6>
    </div>
	</div>

	
	</div>
	
	
	</body>
</html>