
<h2>Автор: Михаил Панфёров</h2>
<?php
if(isset($_SESSION["user"])){
    echo  '<h1>Привет  ' . $_SESSION["user"].'</h1>' . PHP_EOL;
echo '<a href="exit.php">удалить пользователя</a>';
}else{
   ?>
<form action="post.php" method="post">
    <label for="user">Введи имя пользователя
        <input type="text" name="user" id="user">
    </label>
    <input type="submit" value="отправить">
</form> <?php
}
?>
