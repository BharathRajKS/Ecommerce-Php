<?php 

require("nav.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
 <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

main {
    padding: 20px;
}

article {
    margin-bottom: 30px;
}

article h2 {
    margin-top: 0;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

 </style>
</head>
<body>

<header>
    <h1>My Blog</h1>
  
</header>

<main>
    <article>
        <h2>Blog Post Title</h2>
        <p>Posted on <time datetime="2024-04-30">April 30, 2024</time> by John Doe</p>
        <p>This is the content of the blog post. It can be as long as you want.</p>
    </article>

    <!-- More articles can be added here -->

</main>

<footer>
    <p>&copy; 2024 My Blog. All rights reserved.</p>
</footer>

</body>
</html>
