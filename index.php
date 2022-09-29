<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning</title>
    <style>
        body{
            background:#E5E4E2;
        }
    </style>
</head>
<body >
    <h1>BLOOD DONATION CAMP</h1>
    <div>
        <h2>REGISTRATION FORM</h2>
    </div>    
    <form action="connect.php" method="post">
        <label for="user">Name</label><br>
        <input type="text" placeholder="name" name="name" id="name" required> <br><br>
        
        <label for="email">email</label><br>
        <input type="email" placeholder="email" name="email" id="email" required> <br><br>
        
        <label for="phone">phone</label><br>
        <input type="tel" placeholder="phone" name="phone" id="phone" required> <br><br>
        
        <label for="bgroup">blood group</label><br>
        <input type="text" placeholder="bgroup" name="bgroup" id="bgroup" required> <br><br>

        <input type="submit" value="submit" name="submit" id="submit">
    </form>
</body>
</html>