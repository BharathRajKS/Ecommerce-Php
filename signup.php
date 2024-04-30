
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
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
input[type="email"],
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


<?php
 session_start();
 require 'connection.php';
 $connection['db'] = (new Database())->db;
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  try{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $select_insert="SELECT * FROM Userdetails WHERE Username = '$username'";
    $statement = $connection['db']->query($select_insert);
    $exists = $statement->fetchAll();

    if(!$exists)
    {
    $sql_insert = "INSERT INTO Userdetails(Username, Email, password) VALUES ('$username', '$email', '$password')";
    $statement  = $connection['db']->prepare($sql_insert);
    $statement->execute();
    header("Location:List.php");
    }
    else{
      echo "User Already Exists";
      // header("Location:signup.php");
    }

  }
  catch(PDOException $e){
    die("Login Failed".$e->getMessage());
  }
 
 }

?>


  <div class="container">
    <form id="signupForm" method="POST">
      <h2>Sign Up</h2>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
      </div>
      <button type="submit">Sign Up</button>
    </form>
    <div id="message"></div>
  </div>

  <!-- <script>
    document.getElementById('signupForm').addEventListener('submit', function(event) {
//   event.preventDefault();
  const username = document.getElementById('username').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;
  
  if (password !== confirmPassword) {
    showMessage('Passwords do not match', 'error');
  }
});

function showMessage(message, type) {
  const messageDiv = document.getElementById('message');
  messageDiv.textContent = message;
  messageDiv.className = type;
}


  </script> -->
</body>
</html>
