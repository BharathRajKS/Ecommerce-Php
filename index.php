

<?php 

require("nav.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Your Online Shoe Store</title>
<style>


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family: Arial, sans-serif;
    font-size: 16px;
}


.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}


.hero,
.featured-products,
.about-us,
.contact {
    text-align: center;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: black;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.btn:hover {
    background-color: #808080;
}


.hero {
    background-color: #f5f5f5;
    padding: 41px 0;
}

.hero h1 {
    font-size: 36px;
    color: #333;
    margin-bottom: 20px;
}

.hero p {
    color: #666;
    margin-bottom: 40px;
}


.featured-products {
    background-color: #fff;
    padding: 80px 0;
}

.featured-products h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 40px;
}


</style>
</head>
<body>


<section class="hero">
    <div class="container">
        <h1>Welcome to Ecommerce site</h1>
        <p>Your ultimate destination for trendy and comfortable shoes.</p>
        <a href="#" class="btn">Shop Now</a>
    </div>
</section>


<section class="featured-products">
    <div class="container">
        <h2>Featured Products</h2>
        
    </div>
</section>





<!-------------------- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Shosify. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
