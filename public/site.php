<?php

?>
<html>
<head>
    <title>OshiMe.site</title>
</head>
<body>
<?php

print "<h1>".$_SERVER['SERVER_NAME']."</h1>";
?>
<form action="" method="post">
    <br />
    <?php
    if (trim(urlencode($_POST["wallet"]))!=""){
        ?>
        <input type="submit" name="google" value="Google Connect"><br />
        <input type="submit" name="amazon" value="Amazon Connect"><br />
        <input type="hidden" name="wallet" value="<?php print trim(urlencode($_POST["wallet"])); ?>"><br />
        <br />
        <textarea>
        </textarea>
        BackGround color:<input type="radio">White　<input type="radio">Dark　<input type="radio">Fancy<br />


        <input type="submit" value="update">
    <?php
    }else{
?>
    <input type="submit" name="wallet" value="Wallet Login"><br />
<?php
    }
    ?>

</form>

</body>
</html>
