<li class="nav-item">
    <?php if((!isset($_SESSION['Username'])))
    { ?>
        <a class="nav-link" href="../presentation layer/log.php">Log in</a>
    <?php } else{
    ?>
    <a class="nav-link" href="../Business%20Layer/logout.php">Log out</a>
<?php } ?>
</li>
