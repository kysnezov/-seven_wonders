<?php
$mysql = new mysqli("localhost", "root", "", "seven_wonders");
$id = htmlspecialchars($_GET['id']);
$result = $mysql->query("SELECT * FROM wonder WHERE id=$id");
$row = $result->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title><?php echo $row['title']; ?></title>
</head>
<body>
<div class="verx">
		<div class="logo">
			<h2 class="logo_h"><?php echo $row['title'];?></h2>
		</div>
	</div>
	<div class="page__row border__shadow">
                <div class="page__cell menu">
                    <nav class="nav ">
                        <ul class="nav__list logo2 " id="nav-main">
                            <li class="nav__item">
                            <a href="\" class="nav__link link index">
                                    Главная
                                </a>
                            </li>
                            <li>
						</ul>
                    </nav>
                </div>
        </div>

	<div class="owl-carousel slider">
                  <?php echo $row['slider']; ?>
              	</div>
<div>
	<p class="p_shrift">
		<?php echo $row['article'];?>
</p>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
        </script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
        <script src="js/slider.js"></script>
</body>
</html>