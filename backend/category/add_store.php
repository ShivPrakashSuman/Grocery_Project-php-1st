<?php 
    include('../../include/db.php');
    if(isset($_POST['submit'])){
        $category          = $_POST['category_id'];
        $description	= $_POST['description'];
        $image          = time().$_FILES['file']["name"];
        $status         = $_POST['status'];

        $target_dir = "../../uploads/";
        $target_file = $target_dir.basename($image);
        move_uploaded_file($_FILES["file"]["tmp_name"],$target_file);

        $sql = "insert into category_2 (id,category_id,description,image,status) values (0,'$category','$description','$image','$status')";
        $result = $comm->query($sql);

        if($result){
            echo "Data Save Success";
            header('location:index.php');
        } else {
            echo "Form Submit Failed";
        }
    } else {
        echo "Form Submit Failed";
    }
?>