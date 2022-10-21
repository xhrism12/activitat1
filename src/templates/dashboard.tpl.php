<?php

    include 'partials/header.tpl.php';
    include 'partials/nav.tpl.php';
?>
<body>
    Dashboard
    <p>Bienvenido, <?= $_SESSION['user']->username; ?></p>
</body>
</html>