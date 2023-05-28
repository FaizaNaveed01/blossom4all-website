<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
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

  <h1 style="text-align:center">About Us</h1>
  <h2 style="text-align:center">Blossom 4 all</h2>
<h4 style="text-align:center">Propelled by our affection for flowers and energy about nature, it is our obsession to make creative and noteworthy plant and new flower courses of action. </h4>
<h4 style="text-align:center">We trust that the best, freshest flowers deliver the most noteworthy presentations. Blossom 4 all is glad to give quality flowers and plants to our customers. </h4>
  <h4 style="text-align:center">We sell indoor outdoor flowers, plants and trees. Since this is a newly established business, we have a limited variety of products; but we promise to offer good quality.</h4>
  <h4 style="text-align:center">Established in 2023, by Faiza, Muqaddas, Esha, and Taha.</h4>




<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
    <img src="images/people/f.png">
      <div class="container">
        <h2>Faiza Naveed Baig</h2>
        <p class="title">Research and Backend Developer</p>
        <p>Researching required data and implementing it in the backend.</p>
        <a href=mailto:“faizanaveedbaig2001@gmail.com”>faizanaveedbaig2001@gmail.com</a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="images/people/e.png">
      <div class="container">
        <h2>Esha Batool</h2>
        <p class="title">Graphic Designer</p>
        <p>Visualizing and creating illustrations, logos, layouts and photos.</p>
        <a href=mailto:“batooleshawan14@gmail.com”>batooleshawan14@gmail.com</a>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <img src="images/people/m.png">
      <div class="container">
        <h2>Muqaddas Jahanzaib</h2>
        <p class="title">Frontend Developer</p>
        <p>Implementing elements that users see and interact within app. </p>
        <a href=mailto:muqadasjahanzaib834@gmail.com”>muqadasjahanzaib834@gmail.com</a>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="images/people/t.png">
      <div class="container">
        <h2>Taha Ali</h2>
        <p class="title">Marketing</p>
        <p>Planning marketing campaigns, and ensuring completion on time.</p>
        <a href=mailto:Taharex53@gmail.com”>Taharex53@gmail.com</a>
      </div>
    </div>
  </div>
</div>

  	<?php include 'includes/footer.php'; ?>

</body>
</html>
