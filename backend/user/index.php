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
    #search2 {
        font-size: 17px;
        width: 30%;
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
    .ico1 {
        padding: 5px 13px;
        border-radius: 5px;
        border: none;
        margin: -36px 0px 0px 360px;
        font-size: 18px;
        position: absolute;
    }
    .ico2 {
        padding: 5px 13px;
        border-radius: 5px;
        border: none;
        margin: -37px 0px 0px 474px;
        font-size: 20px;
        position: absolute;
        background: #e0edf9;
        text-decoration: none;
    }
    .ico2:hover {
        text-decoration: none;
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
                        <input type="search" class="form-control" id="search" placeholder="Search....">
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
                        <h1 style="font-size:29px;"><b> User <i class="fa fa-user ml-3"></i></b></h1>
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
        <!--user Search ---->    
            <div class="row text-muted mt-5 pt-5">
                <h4> Search Employee... </h4>
                <?php
                    if (isset($_GET['search'])) {
                ?>
                    <form action="" method="get">
                        <input type="text" name="search" class="form-control" id="search2" placeholder="Search...." value="<?php echo $_GET['search']; ?>">
                        <button type="submit"  class="ico1 btn-primary"> search.. <i class="fa fa-search fa-sm"></i> </button>
                        <a href="http://localhost/PHP_Work/Grocery_Project_in_PHP/backend/user/"  class=" ico2 btn-muted"> Reset </a>
                    </form>
                <?php 
                     } else { 
                ?>
                <form action="" method="get">
                    <input type="text" name="search" class="form-control" id="search2" placeholder="Search....">
                    <button type="submit"  class="ico1 btn-primary"> search.. <i class="fa fa-search fa-sm"></i> </button>
                    <a href="http://localhost/PHP_Work/Grocery_Project_in_PHP/backend/user/"  class=" ico2 btn-muted"> Reset</a>
                </form> 
                <?php
                     } 
                ?>  
            </div>
            <div class="row text-muted mt-4">
                <h4> Company Employee </h4>
            </div>
        <!--User Settings      -->    
            <div class="row">
                <div col-sm-12>
                    <?php             
                    include('../../include/db.php'); 
                     
                        $sql = "select*from user_2";
                        if(isset($_GET['search'])){
                            $search = $_GET['search'];
                            $sql = "SELECT * FROM user_2 WHERE name LIKE '%$search%' or email LIKE '%$search%' or city LIKE '%$search%'";
                        }
                        $result = $comm->query($sql);
                    ?>
                    <table class="table table-hover">
                        <tr>
                            <th> id </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Salary </th>
                            <th> City </th>
                            <th> created </th>
                            <th> Action </th>
                        </tr>
                        <?php 
                            if($result->num_rows > 0){ 
                                while($row = $result->fetch_assoc () ) {
                                $d = strtotime($row['created']);
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['salary']; ?></td>
                            <td><?php echo $row['city']; ?></td>
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