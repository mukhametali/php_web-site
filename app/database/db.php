<?php

require ('connect.php');

function tt($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';


}
// Проверка выполнения запроса к БД
function dbCheckError($query){
    $errInfo = $query->errorInfo();
    if($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exec();
    }
    return true;
}

// Запрос на получения данных c одной таблицы
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
       $i = 0;
       foreach ($params as $key => $value){
           if (!is_numeric($value)){
               $value = "'" .$value. "'";
           }
           if ($i === 0){
               $sql = $sql . " WHERE $key = $value";
           }else{
               $sql = $sql . " AND $key = $value";
           }
           $i++;
       }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}


// Запрос на получения одной строки с выбранной таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if(!empty($params)){
        $i = 0;
        foreach ($params as $key => $value){
            if (!is_numeric($value)){
                $value = "'" .$value. "'";
            }
            if ($i === 0){
                $sql = $sql . " WHERE $key = $value";
            }else{
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
//    $sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}


$params = [
    'admin' => 1,
    'email' => 'ali@gmail.com',
];

//Запись в таблицу БД
function insert($table, $params){
    global $pdo;
    $i = 0;
    $coll = '';
    $mask ='';
    foreach ($params as $key => $value){
        if($i === 0){
            $coll = $coll . "$key";
            $mask = $mask ."'" . "$value"."'";
        }else{
            $coll = $coll . ", $key";
            $mask = $mask .", '" . "$value"."'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
    
    $query = $pdo->prepare($sql);
    $query->execute( $params);
    dbCheckError($query);
}

$arrData = [
    'admin' => '0',
    'username' => 'Karlygash',
    'email' => 'qwewrtylui233oiyeuhw@re.kz',
    'password' => '123456789'
];

insert('users', $arrData);
