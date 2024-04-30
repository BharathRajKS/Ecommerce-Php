<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<title>E-Commerce Website</title>
<style>
    
    /*------------------------------- CSS for navbar */
    body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.navbar {
    background-color: #808080;
    height: 80px;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.menu {
    color: white;
    padding: 20px;
    text-decoration: none;
}

.menu:hover {
    background-color: #ddd;
    color: black;
}

.signup-btn {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    background-color: black;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.signup-btn:hover {
    background-color: #808080;
}
.logo i{
  
    width:40px;
    height:20px;
}
.logo {
    display:flex;
}
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

img {
    width: 40px;
    height: 40px;
    margin-left: 10px;
}

span {
    display: flex;
    align-items: center;
}

.search-bar {
    margin-right: 20px;
}

.search-bar input[type="text"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.search-bar button {
    background-color: black;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 8px 12px;
    cursor: pointer;
}

.search-bar button:hover {
    background-color: #808080;
}


</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
<div class="logo">
<h2>Heritage</h2>
<i class="fa-solid fa-blog"></i>
</div>

<div class="nav-menus">
        <a class="menu" href="index.php">Home</a>
        <a class="menu" href="Product.php">Products</a>
        <a class="menu" href="blog.php">Blogs</a>
    </div>
    
        <div class="search-bar">
            <input type="text" placeholder="Search products...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="signup-div">
        <?php
            session_start();
            if(isset($_SESSION['name'])){
                echo "<span><a href='login.php' class='menu'>Logout</a><img src='avatar-default-icon.png'></span>";
            } else {
                echo "<a href='signup.php' class='signup-btn' id='signup-toggle'>Signup</a>";
            }
        ?>
    </div>
</div>

<footer>
    <p>&copy;  All rights reserved.</p>

</footer>

</body>
</html>
