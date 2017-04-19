<h1>Login Here !</h1>
<form method="POST" action="valid.php">
  <input type="email" name="mail" id="email" required><br/><br/>
  <input type="password" name="pass" id="password" required><br/><br/>
  <input type="checkbox" name="check"><br/><br/>
  <input type="submit" value="submit" name="login"><br/><br/>
</form>

<style type="text/css">
  *{
    text-align: center;
  }
  input {
    width: 400px;
    height: 40px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  input:focus {
    outline: none;
    box-shadow: 0 0 2px #00f;
  }
</style>
<?php
  if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    echo "<script>
    document.getElementById('email').value = '$email';
    document.getElementById('password').value = '$password';
    </script>";
  }
?>
