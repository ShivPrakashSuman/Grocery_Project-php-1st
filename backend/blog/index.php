<html>
<head>
<style>
    #search {
        font-size: 20px;
        border-radius: 50px;
        background: aliceblue;
        padding: 20px;
        width: 75%;
        float:right;
    }
    .int{
        background: #dfeef9;
        border-radius: 6px;
        padding: 10px;
    }
    .box1 {
        background: #dfeef9;
        width: 150px;
        height: 40px;
        border-radius: 30px 0px 0px 0px;
    }
    .box2 {
        background: #dfeef9;
        width: 285px;
        height: 150px;
        border-radius: 0px 30px 30px;
    }
    .smallbox {
        position: absolute;
        margin-left: 149px;
        margin-top: -40px;
        width: 0;
        height: 0;
        border-bottom: 41px solid #dfeef9;
        border-right: 43px solid transparent;
    }
    .icon2 {
        font-size: 18px;
    }
    .barsearch {
        font-size: 21px;
        position: absolute;
        margin: 0px 0px 0px 860px;
        border-left: 1px solid;
        padding: 10px;
        background: #0d6efd;
        border-radius: 0px 20px 20px 0px;
        color: white;
    }
    .barsearch:hover {
        color: white;
    }
    .overflow {
		overflow: hidden;
		height:60px;
   		line-height:25px;
        } 

	.overflow h1:first-of-type  {
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 1; 
		-webkit-box-orient: vertical;
	}
	.overflow p:first-of-type  {
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 2; 
		-webkit-box-orient: vertical;
	}
</style>
</head>
<body>
<?php 
    session_start();
        if (!isset($_SESSION['userData'])) {
            header('location:../../frontend/auth/register.php');
        }

        $rowData = $_SESSION['userData'];
        include('../../include/db.php');
    include('../layout/sidebar.php'); 
?>
    <div style=" height: 100%; margin-left:275px;">
        <div class="conteinar-fluad m-5 p-2">
            <div class="nave"> 
                <div class="row  ">
                    <div class="col-sm-7 pt-3">
                        <input type="text" class="form-control" id="search" placeholder="Search....">
                        <a href="#" class="barsearch"><i class="fa fa-search fa-sm"></i></a>
                    </div>
                    <div class="col-sm-5">
                        <div class="float-right">
                            <div class="float-left">
                                <i class="fa fa-bell m-4 text-primary" style="font-size: 25px;"></i>
                                <i class="fa fa-envelope m-4 text-primary" style="font-size: 25px;"></i>
                                <i class="fa fa-gear m-4 text-primary" style="font-size: 25px;"></i>
                            </div>
                            <div class="float-left text-muted pl-4 m-4">
                                <h1> <?php echo $rowData['fname'];?> <span class="ml-1"><span> <?php echo $rowData['lname'];?> </h1>
                            </div>
                            <div class="float-left">
                                <img src="../../images/sidhu.PNG" class=" rounded-circle mt-2" width="50px" >
                            </div>
                            <div class="float-left ml-3">
                                <i class="fa fa-bars m-4 pt-2 text-primary"  style="font-size: 25px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--user Settings      -->
            <div class="row mt-5 pt-2 mr-2">
                <div class="shadow-lg bg-light p-4">
                    <div class="text-primary col-sm-6 mt-2">
                        <h1 style="font-size:29px;"><b> Blog <i class="fa fa-user ml-3"></i></b></h1>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="float-right ">
                            <div class="float-left text-primary ">
                                <a href="add.php">
                                    <h1 style="font-size:22px;" class="btn btn-primary mr-2"><b>Add<i class="fa fa-cart-plus mr-2 ml-2 " style="font-size: 25px;"></i></b></h1>
                                </a>
                            </div>
                            <div class="float-left ml-4">
                                <i class="fa int fa-clock text-primary" style="font-size: 25px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-muted mt-5 pt-5">
                <h4> Company Blog </h4>
            </div>
        <!--User Settings      -->    
            <div class="row">
                <div col-sm-12>
                    <?php 
                        include('../../include/db.php');
                        $sql = "select datablog_2.id,datablog_2.title, category_2.category_id, datablog_2.description, datablog_2.image, datablog_2.status, datablog_2.created from category_2 join datablog_2 on datablog_2.category_id = category_2.id;";
                        $result = $comm->query($sql);
                    ?>
                    <table class="table">
                        <tr>
                            <th> id </th>
                            <th> Title </th>
                            <th> category_id </th>
                            <th> Description </th>
                            <th> Image </th>
                            <th> Status </th>
                            <th> created </th>
                            <th> Updated </th>
                        </tr>
                        <?php 
                            if($result->num_rows > 0){ 
                                while($row = $result->fetch_assoc () ) {
                                $d = strtotime($row['created']);
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['category_id']; ?></td>
                            <td><div class="overflow"><?php echo $row['description']; ?></div></td>
                            <td><img src="../../uploads/<?php echo $row['image']; ?>" alt="company blog" width="80px" height="80px"></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><?php echo date("d-M-Y / h:i:sa", $d); ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="icon2 pr-4" style=" background-color: transparent;"><i class="fa fa-pencil"></i> </a>
				                <a href="delete.php?id=<?php echo $row['id']; ?>" class="icon2 ml-4 " style="color:red; background-color: transparent;"> <i class="fa fa-trash"></i> </a>   
                            </td>
                        </tr>
                        <?php 
                                }
                            } else {
                        ?>
                        <tr>
                            <td colspan="7" align="center"> No Data Faund</td>
                        </tr>
                            <?php } ?>
                    </table>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>