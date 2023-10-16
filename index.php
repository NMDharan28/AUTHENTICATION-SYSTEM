<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
       

    </head>
    <body>
        <form action = "login1.php" method ="POST">

            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class = "error"> <?php echo $_GET['error']; ?> </p>
                <?php } ?>

                <label> User Name </label>
                <input type="text" name="uname" placeholder="User name"> <br>
                <label> Password </label>
                <input type="password" name="password"placeholder="Password"> <br>
                <button type ="submit"> Login </button>

            
        </form>
    </body>
</html>