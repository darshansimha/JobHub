<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
<script type="text/javascript">

function formvalidate(){
if(document.f1.nm.value=="" || document.f1.pw.value==""||document.f1.cnm.value==""||document.f1.addr.value==""||document.f1.ph.value==""||document.f1.email.value==""||document.f1.profile.value==""||)
{
alert("Please Make Sure You have Filled all the details!!");
retuen false;
}

if(isNaN(document.f1.ph.value)||document.f1.ph.value.length!=10)
{
alert("Error in phone number format!!!");
return false;
}


else{

return true;
}

}

</script>



</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
		<div id="search">
		<?php
		
		include("includes/search.inc.php");
		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
					
					<h2 class="title">REGISTER</a></h2>
					<p class="meta">Please fill up the form</p>
					<div class="entry">
						<form action="process_employer_register.php" method="post" name="f1" onsubmit="return formvalidate()">
							FULL NAME <br> <input type="text" name="nm" style="width:200px;">
							<br><br> PASSWORD <br> <input type ="password" name="pwd">
							<br><BR> COMPANY NAME <BR> <INPUT TYPE = "TEXT" name="cnm" style="width:200px;">
							<BR><BR> COMPANY ADDRESS <BR> <TEXTAREA name="addr" style="width:200px;"></TEXTAREA>
							<br><br> PHONE NUMBER <br><input type="text" name="ph" style="width:200px;">
							<BR><BR> EMAIL <BR> <INPUT TYPE = "TEXT" name="email" style="width:200px;">
							<BR><BR>COMPANY PROFILE<BR> <TEXTAREA name="profile" style="width:200px;"></TEXTAREA>							
							<center><br><br> <input type="submit" value="submit" ></center>			
						</form>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
