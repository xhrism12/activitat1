<?php
require 'src/db.php';
$db=connectMysql($dsn,$dbuser,$dbpass);
var_dump($db);
if (!empty($_POST['email']) && !empty($_POST['password'])){
    if (isset($_POST['email']) && isset($_POST['password'])){
        $email = $_REQUEST['email'];

        $password = $_REQUEST['password'];

        if (auth($db,$email,$password)){
            header('Location:?url=dashboard');
        }else{
            header('Location:?url=login');
        }
    }
}

?>
<body>
    <hr>
  <p>Email info: <?php echo $email?></p>
</body>
</html>
