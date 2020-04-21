<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>

<br><br><br>
<div class="div" >

<form action="/action_page.php" method="post">
    <div class="imgcontainer">
        <h2>Admin Login Form</h2>
    </div>
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>

    </div>


</form>
</div>

</body>
</html>
