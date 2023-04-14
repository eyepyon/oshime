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
