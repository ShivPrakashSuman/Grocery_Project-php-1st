<?php
    include('../../include/db.php');
    if(isset($_POST['submit'])) {
        $id             = $_POST['id'];
        $title          = $_POST['title'];
        $category       = $_POST['category_id'];
        $description    = $_POST['description'];   
        $status         = $_POST['status'];

        if(!empty($_FILES['file']['name'])){
            $image      = time().$_FILES['file']["name"];
        }else{
            $sql1 = "SELECT `id`,`image` FROM `datablog_2` WHERE id = $id;";
            $result1 = $comm->query($sql1); 
            $rowData1 = $result1->fetch_assoc ();
            $image          = $rowData1['image']; 
        }

             $sql = "update datablog_2 set `title`='$title', `category_id`='$category', `description`='$description', `status`='$status' where id='$id'";

            if(isset($_FILES) && !empty($_FILES['file']['name'])) {
                $image = time().$_FILES['file']["name"];

                $target_dir = "../../uploads/";
                $target_file = $target_dir.basename($image);
                move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

                $sql = "update datablog_2 set `title`='$title', `category_id`='$category', `description`='$description', `image`='$image', `status`='$status' where id='$id' ";
            } 
        $result = $comm->query($sql);
        if ($result) {
            echo "Update Success";
            header('location:index.php');
        }  else {
            echo "Update Failed";
        }
    } else {
        echo "Submit Failed "; 
    }
?>
