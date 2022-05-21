<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive personal portfolio website design tutorial</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<div id="menu-bars" class="fas fa-bars"></div>
  

<header>

    <a class="logo"> <span>GERARD</span> CHUATICO </a>

    <nav class="navbar">
        <a href="#home">Profile</a>
        <a href="#about">About</a>
        <a href="#portfolio">Website Links</a>
    </nav>
	
	<?php $page=basename($_SERVER['PHP_SELF']); ?>
	<nav class="phpbar">
	<ul>
		<li class="<?php if($page == 'index.php'):echo 'active';endif; ?>"><a
		href="index.php">Home</a></li>
		<li class="<?php if($page == 'LT2/Learning task.php'):echo 'active';endif; ?>"><a
		href="LT2/Learning task.php">LT2</a></li>
		<li class="<?php if($page == 'Learning Task 3/index.php'):echo 'active';endif; ?>"><a
		href="Learning Task 3/index.php">LT3</a></li>
		<li class="<?php if($page == 'LT4/index.php'):echo 'active';endif; ?>"><a
		href="LT4/index.php">LT4</a></li>
		<li class="<?php if($page == 'LT5/index.php'):echo 'active';endif; ?>"><a
		href="LT5/index.php">LT5</a></li>	
		<li class="<?php if($page == 'CLE1MT/homepage.html'):echo 'active';endif; ?>"><a
		href="CLE1MT/homepage.html">CLE1MT</a></li>	
	</ul>
	</nav>
	
	<div class="follow">
        <a href="https://www.facebook.com/fritzchuatico.celiz">Facebook Link</a>
    </div>

</header>



<section class="home" id="home">

    <div class="content">
        <span class="hi"> hi there... </span>
        <h3> i am <span> Gerard Fritz Chuatico </span> </h3>
		
        <p class="info"> i am an IT student </p>
        <p class="text"> I am currently studying at the University of St. La Salle in La Salle Avenue, Bacolod City, Negros Occidental, Philippines. </p>
        <a href="#about" class="btn">about me</a>
    </div>

    <div class="image">
        <img src="images/dp.jpg" alt="">
    </div>

</section>

<section class="about" id="about">

<h1 class="heading"> about <span> me </span> </h1>

<div class="row-1">

    <div class="image">
        <img src="images/profile.jpg" alt="">
    </div>

    <div class="content">
        <h3> My name is Gerard Fritz C. Chuatico and I am an IT student </h3>
        <p>I graduated from Bago City Elementary School in 2014, I graduated with honors in my junior high school at Ramon Torres National High School in the year 2018. 
		I graduated with honors in my senior high school at USLS Liceo De La Salle back in 2020. And now I am currently studying in the University of St. La Salle Bacolod to be an IT professional. </p>
        <div class="box-container">
            <div class="box">
                <p> <span> Age : </span> 20 </p>
                <p> <span> Gender : </span> Male </p>
                <p> <span> Language : </span>english, filipino, hiligaynon, japanese</p>
            </div>
            <div class="box">
                <p> <span> Phone Number : </span> 09619055020 </p>
                <p> <span> email : </span> fritzchuatico@gmail.com </p>
            </div>
        </div>
    </div>

</div>
</section>


<section class="service" id="service">

<h1 class="heading"> <span> My </span> Skills </h1>

    <div class="box-container">

        <div class="box">
            <h3> Web Authoring </h3>
            <p>I can create simple websites using HTML, CSS, JavaScript, and Php.</p>
        </div>

        <div class="box">
            <h3>Graphic Design</h3>
            <p>I can design and edit photos, posters, tarpaulins, and billboards.</p>
        </div>

        <div class="box">
            <h3>Rebranding</h3>
            <p>I can rebrand small businesses, or big companies, as well as their logos, products, and their trademarks. </p>
        </div>

        <div class="box">
            <h3>Photography</h3>
            <p>I can do photoshoots with high quality photos for birthdays, weddings, celebrations, or any other events. </p>
        </div>
    </div>

</section>


<section class="experience" id="experience">

    <h1 class="heading"> <span> My </span> Sample Websites </h1>

    <div class="box-container">

        <div class="box">
            <div class="content">
                <span>LT2</span>
                <h3>Online Recipes</h3>
                <p> This is the first website I created, it contains a few recipes for some delicious dishes and the instructions on how to cook them properly. </p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span>LT3</span>
                <h3>Favorite Celebrities</h3>
                <p> This site contains the top 10 of my favorite actors and some short information about them. This is the second website that I have made. </p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span>LT4</span>
                <h3>Favorite Quotes</h3>
                <p> This website contains 3 of my favorite quotes from some of my favorite movies. This is where I practiced designing fonts in html.</p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span>LT5</span>
                <h3>Famous Leaders in WW2</h3>
                <p> This site is about some of the most famous leaders in the history of World War 2. I used a short JavaScript file to help with the website's contents. </p>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <span>CLE1MT</span>
                <h3>Facts About HIV</h3>
                <p>This is an educational website I created, it contains information about HIV and AIDS, it is a 4 page website that also contains the solutions and a gallery which contains information about the diseases that can be caused by HIV. </p>
            </div>
        </div>
    </div>

</section>


<section class="portfolio" id="portfolio">

    <h1 class="heading"> <span> Website </span> Links </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/LT1.jpg" alt="">
            <h3> LT2 </h3>
            <div class="icons">
                <a href="LT2/Learning task.php">Link</a>
            </div>
        </div>

        <div class="box">
            <img src="images/LT3.webp" alt="">
            <h3> LT3 </h3>
            <div class="icons">
                <a href="Learning Task 3/index.php">Link</a>
            </div>
        </div>

        <div class="box">
            <img src="images/LT4.webp" alt="">
            <h3> LT4 </h3>
            <div class="icons">
                <a href="LT4/index.php">Link</a>
            </div>
        </div>

        <div class="box">
            <img src="images/LT5.jpg" alt="">
            <h3> LT5 </h3>
            <div class="icons">
                <a href="LT5/index.php">Link</a>
            </div>
        </div>

        <div class="box">
            <img src="images/CLE1.jpg" alt="">
            <h3> CLE1MT </h3>
            <div class="icons">
                <a href="CLE1MT/homepage.html">Link</a>
            </div>
        </div>
    </div>

</section>


<section class="contact" id="contact">

    <h1 class="heading"> contact <span> me </span> </h1>

    <div class="icons-container">

        <div class="icons">
            <h3>My Email</h3>
            <p>fritzchuatico@gmail.com</p>
        </div>

        <div class="icons">
            <h3>My Number</h3>
            <p>09619055020</p>
        </div>

        <div class="icons">
            <h3>My address</h3>
            <p>Purok Tapulanga, Barangay Poblacion, Bago City, Negros Occidental</p>
        </div>

    </div>
</section>


<script src="js/script.js"></script>

</body>
</html>