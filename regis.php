<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simpe Registration</title>
        <link rel="stylesheet" href="regis.css">

</head>
<body align="middle">
        <div><center><h2></h2></center></div>
        <div class="container">
        <form action='registration.php' method='POST'>
                <h2>Formulir pendaftaran
                </h2>
                <label for="user"><h2>Username:</h2></label>     <br/>
                <input type='text' name='user' id="user"  required/><br/>
                <label for="user"><h2>Password:</h2></label>     <br/>
                <input type='password' name='pass' id="pass"  required/><br/>
                <label for="user"><h2>Email:</h2></label>        <br/>
                <input type='email' name='email' id="email"  required/><br/>
                <input type='submit' name='sentForm' id="sentForm" />
        </form>
        </div>
</body>
</html>