<?php

function connectSqlite(string $dbname){
    try{
        die($dsn);
        $db=new PDO('sqlite:'.__DIR__.'/database/'.$dbname.'.sqlite');
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        die($e->getMessage());

    }
    return $db;

}

function connectMysql(string $dsn,string $dbuser,string $dbpass){
    try{
        $db = new PDO($dsn, $dbuser, $dbpass);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

    }catch(PDOException $e){
        die( $e->getMessage());
        
    }
    return $db;
}

/**
 * Undocumented function
 *
 * @param string $db
 * @param string $email
 * @param string $password
 * @return boolean
 */
function auth(PDO $db, string $email,string $password):bool{
    
    $stmt = $db->prepare("SELECT * FROM users WHERE email=:email LIMIT 1");
    $res=$stmt->execute([':email'=>$email]);
   
    if($stmt->rowCount()==1){
        $user=$stmt->fetchAll()[0];
        if (password_verify($password,$user->password)){
            
            $_SESSION['user'] = $user;
            return true;
        }
    }
    return false;
    
}