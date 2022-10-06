<nav>
    <?php if(!isset($_SESSION['user'])):?>
    <a href="?url=login">Login</a>
    <?php else: ?>
    <a href="?url=logout"><?php $_SESSION['user']->username; ?>Logout</a>
    <?php endif; ?>
    <a href="?url=register">Register</a>
</nav>