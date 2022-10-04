<?php

function connectSqlite(string $dbname){
    try{
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
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

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
function auth(string $db, string $email,string $password):bool{

}