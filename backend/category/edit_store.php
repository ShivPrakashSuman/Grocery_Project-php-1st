<?php
    include('../../include/db.php');
    if(isset($_POST['submit'])) {
        $id             = $_POST['id'];
        $category       = $_POST['category_id'];
        $description    = $_POST['description'];
        $image          = time().$_FILES['file']["name"];
        $status         = $_POST['status'];

        $Sql = "update category_2 set `category_id`='$category', `description`='$description', `status`='$status' where id='$id' ";

            if(isset($_FILES)) {
                $image = time().$_FILES['file']["name"];

                $target_dir = "../../uploads/";
                $target_file = $target_dir.basename($image);
                move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

                $sql = "update category_2 set `category_id`='$category', `description`='$description', `image`='$image', `status`='$status' where id='$id' ";
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