<? 
session_start();
if(!session_is_registered(myusername)){
header("location:Main_login.php");
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Login Successful
        <?php
        // put your code here
        ?>
    </body>
</html>
