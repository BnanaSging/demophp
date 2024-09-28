<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="output.php" method="post">

        <div>
         <label for="username">username </label>
        <input type="text" name="username" id="username">
        </div>
       
        <div>
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        </div>
        

        <div>
        <label for="passsword">password</label>
        <input type="password" name="password" id="password">

        </div>
        
        <div>
        <label for="confirm-password">confirm password</label>
        <input type="password" name="confirm-password" id="confirm-password">
        </div>
        
        <div>
        <input type="submit" value="register">
        </div>
        
    
    </form>
</body>
</html>