<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
    form {
        background: white;
        padding: 40px;
        border: 1px solid #ccc;
        width: 350px;
        margin: auto;
    }
    input ,button{
        width: 90%;
        padding: 8px;
        margin: 5px;
    }
    button {
        background: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
</style>
</head>
<body>
<form method="POST">
<h1>Login</h1>
<label>Username:</label>
<input name="username">
<label for="password">Password:</label>
<input type="password" name="password">
<button >Login</button>
</form>
<script>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = $_POST["username"];
        $pass = $_POST["password"];
        $file = fopen("login.txt", "r");

        $content = fgets($file);
        if ($content == $uname . ":" . $pass) {
            echo "alert('Access granted!')";
        } else {
            echo "alert('Incorrect')";
        }
    }
?>
</script>
</body>
</html>
