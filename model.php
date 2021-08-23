<?php 
require_once 'dbConnection.php';

function showAllTeachers()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM products';
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showTeacher($uid)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM products WHERE id = ?";

    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$uid]);
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function updateTeacher($uid, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE products set pname = ?, pprice = ?, pcetegory = ?, pbrand = ?, numofproduct = ? WHERE id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['pname'], $data['pprice'],$data['pcetegory'],$data['pbrand'],$data['numofproduct'], $uid
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteTeacher($uid)
{
    $conn = db_conn();
    $selectQuery1 = "DELETE FROM products WHERE id = ?";
    try
    {
        $stmt = $conn->prepare($selectQuery1);
        $stmt->execute([$uid]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function searchTeacher($valueToSearch)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM products WHERE pname LIKE '%".$valueToSearch."%'";
    try
    {
        $stmt = $conn->query($selectQuery);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>