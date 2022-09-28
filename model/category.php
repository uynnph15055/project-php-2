<?php

function getCateAll(){
    $conn = connect();
    $stmt = $conn->prepare("SELECT *  FROM category");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}

function insertCate($name){
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO category (dm_name) VALUES ('".$name."')");
    $stmt->execute();
}

function updateCate($name , $id){
    $conn = connect();
    $stmt = $conn->prepare("UPDATE  category  SET  dm_name = '".$name."' WHERE category.dm_id = ".$id."" );
    $stmt->execute();
}

function getFind($id){
    $conn = connect();
    $stmt = $conn->prepare("SELECT  * FROM category WHERE category.dm_id = ".$id."");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}


function deleteCate($id){
    $conn = connect();
    $sql = "DELETE FROM category WHERE category.dm_id = ".$id;
    $conn->exec($sql);
}