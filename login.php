
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
}

.container {
  max-width: 400px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  border: none;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #0056b3;
}

</style>
</head>
<body>

  <div class="container">
    <form id="loginForm" method='POST'>
      <h2>Login</h2>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" name='submit'>Login</button>
    </form>
  </div>
  
<?php
 session_start();
 require 'connection.php';
 $connection['db'] = (new Database())->db;
 if(!empty($_POST)){
  try{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $select_query="SELECT * FROM Userdetails WHERE Username='$username' AND password ='$password'";
    $statement = $connection['db']->query($select_query);
    $exists = $statement->fetchAll();
    if($exists){
        header("Location:List.php");
     }
    else{
       echo "error";
       header("Location:login.php");
     }

  }
  catch(PDOException $e){
    die("Login Failed");
  }
 
 }






  ?>
</body>
</html>





