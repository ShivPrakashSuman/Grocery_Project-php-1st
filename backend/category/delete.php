<?php
    $id = $_GET['id'];
    if($id){
        include('../../include/db.php');
        $sql ="delete from category_2 where id = '$id' ";
        $result = $comm->query($sql);

        if ($result) {
            echo "Delete Success";
            header('location:index.php');
        } else {
            echo "Delete Failed";
        }
    } else {
        header('location:index.php');
    }
?>