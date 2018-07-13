<?php

session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username']=='wocane' && $_POST['password']=='whataday'){
        $_SESSION['allow_visit']='gogogo';
    }
}


if(isset($_SESSION['allow_visit'])){
    if($_SESSION['allow_visit']=='gogogo'){

        header('Location: api.php');
    }
}
?>
<form method="post">
    <input type="text" name="username"><input type="password" name="password">
    <input type="submit" value="LOGIN">
</form>
