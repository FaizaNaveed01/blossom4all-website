<!DOCTYPE html>
<html>
<body>

<?php include 'includes/session.php'; ?>
<?php

	$conn = $pdo->open();

	try{
		$stmt = $conn->prepare("SELECT * FROM category WHERE cat_slug = :slug");
		$cat = $stmt->fetch();
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

	$pdo->close();

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">
        </div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>
  <h4 <span style="color: white">.</span></h4>

<h1 style="text-align:center">Contact Us</h1>
<h4 <span style="color: white">.</span></h4> 
<h4 <span style="color: white">.</span></h4>
<h4 <span style="color: white">.</span></h4>

<h4 style="text-align:center">800 - BLOSSOM | 800 - 07 236 9495</h4>
  <h4 style="text-align:center">Email us for your feedback on <a href=mailto:“blossomplants.co@gmail.com”>blossomplants.co@gmail.com</a></h4>

  <h4 style="text-align:center">Al Shamel Street - Sheikh Mohamed Bin Salem Rd - Al Dhait South, Ras al Khaimah.</h4>
 <h4 <span style="color: white">.</span></h4>

  <h4 <span style="color: white">.</span></h4>
  <h4 <span style="color: white">.</span></h4>
  <h4 <span style="color: white">.</span></h4>

  <h4 <span style="color: white">.</span></h4>
  <h4 <span style="color: white">.</span></h4>

  <?php include 'includes/footer.php'; ?>
