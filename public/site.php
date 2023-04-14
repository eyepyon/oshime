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
    $url1 = trim($_POST["url1"]);
    $url2 = trim($_POST["url2"]);
    $url3 = trim($_POST["url3"]);
    $wallet = trim(urlencode($_POST["wallet"]));
    if ($wallet!=""){
        ?>
        URL1:<input type="text" name="url1" value="<?php print $url1; ?>"><br />
        URL2:<input type="text" name="url2" value="<?php print $url1; ?>"><br />
        URL3:<input type="text" name="url3" value="<?php print $url1; ?>"><br />
        <br />
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
