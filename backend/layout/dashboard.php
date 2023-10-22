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
    .int i{
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
         include('sidebar.php'); 
         
    //  users count ------
        $sql1 = "select count(id) as UserCount from user_2";
        $result1 = $comm->query($sql1);
        $userCount = $result1->fetch_assoc () ; 

    //  users salary Sum -----
        $sql2 = "select sum(salary) as UserSalary from user_2";
        $result2 = $comm->query($sql2);
        $userSalary = $result2->fetch_assoc ();

    //  users salary  Avg -----
        $sql3 = "select avg(id) as UserAvg from user_2";
        $result3 = $comm->query($sql3);
        $userAvg = $result3->fetch_assoc (); 
        
    //  register user count ------  
        $sql4 = "select count(id) as RegisterUser from register_2";
        $result4 = $comm->query($sql4);
        $registeruser = $result4->fetch_assoc();
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
        <!--Dashboard Settings      -->
            <div class="row mt-5 pt-2 mr-2">
                <div class="shadow-lg bg-light p-4">
                    <div class="text-primary col-sm-6 mt-2">
                        <h1 style="font-size:29px;"><b>Dashboard <i class="fa fa-chart-line ml-3"></i></b></h1>
                    </div>
                    <div class="col-sm-6 ">
                        <div class="float-right int">
                            <i class="fa fa-cubes mr-4 text-primary" style="font-size: 25px;"></i>
                            <i class="fa fa-clock text-primary" style="font-size: 25px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-muted mt-5 pt-5">
                <h4> QUICK ACCESS</h4>
            </div>
            <hr style="margin-top: -3px;">
        <!--User Settings      -->    
            <div class="row mt-5">
                <div class="col-sm-4">
                    <div class="box1 ">
                        <div class="p-4 ml-4 text-primary">
                            <h2>USER <i class="fa ml-4 fa-user-plus pl-3 " ></i></h2>
                        </div>
                    </div>
                    <div class="smallbox"></div>
                    <div class="box2 ">
                        <div class="p-4 ml-4 pt-5 text-muted">
                            <div class="row mb-2">
                                <div class="col-sm-4 pt-1">
                                    <h4>Count </h4>
                                </div>
                                <div class="col-sm-3 pt-1 ">
                                    <h4> = </h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4><?php echo $userCount['UserCount']; ?><i class="fa ml-4 fa-user mr-3 " style="font-size: 25px;"></i></h4>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 pt-1">
                                    <h4>Salary</h4>
                                </div>
                                <div class="col-sm-3 pt-1 ">
                                    <h4> = </h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4> <?php echo $userSalary['UserSalary']; ?> <i class="fa ml-4 fa-dollar mr-3 " style="font-size: 25px;"></i></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 pt-1">
                                    <h4>Average</h4>
                                </div>
                                <div class="col-sm-3 pt-1 ">
                                    <h4> = </h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4> <?php echo $userAvg['UserAvg']; ?> <i class="fa ml-4 fa-gift mr-2 " style="font-size: 25px;"></i></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Blog  Settings   -->  
                <div class="col-sm-4">
                    <div class="box1 ">
                        <div class="p-4 ml-4 text-primary">
                            <h2>BLOG <i class="fa fa-stack-overflow pl-5"></i></h2>
                        </div>
                    </div>
                    <div class="smallbox"></div>
                    <div class="box2 ">
                        <div class="p-4 ml-4 pt-5 text-muted">
                            <div class="row mb-2">
                                <div class="col-sm-4 pt-1">
                                    <h4>Count </h4>
                                </div>
                                <div class="col-sm-3 pt-1 ">
                                    <h4> = </h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4> 50 <i class="fa ml-4 fa-slack mr-3 " style="font-size: 25px;"></i></h4>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 pt-1">
                                    <h4>Product</h4>
                                </div>
                                <div class="col-sm-3 pt-1 ">
                                    <h4> = </h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4> 18000 <i class="fa ml-3 fa-dropbox mr-3 " style="font-size: 25px;"></i></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 pt-1">
                                    <h4>Average</h4>
                                </div>
                                <div class="col-sm-3 pt-1 ">
                                    <h4> = </h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4> 22.00 <i class="fa ml-4 fa-gift mr-3 " style="font-size: 25px;"></i><h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--Company  Settings      -->  
                <div class="col-sm-4">
                    <div class="box1 ">
                        <div class="p-4 ml-3 text-primary">
                            <h2>RECORD <i class="fa fa-chart-line"></i></h2>
                        </div>
                    </div>
                    <div class="smallbox"></div>
                    <div class="box2 ">
                        <div class="p-4 ml-4 pt-5 text-muted">
                            <div class="row mb-2">
                                <div class="col-sm-4 pt-1">
                                    <h4>All User </h4>
                                </div>
                                <div class="col-sm-3 pt-1 ">
                                    <h4> = </h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4><?php echo $registeruser['RegisterUser']; ?><i class="fa ml-4 fa-user mr-3 " style="font-size: 25px;"></i></h4>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-4 pt-1">
                                    <h4>All Salary</h4>
                                </div>
                                <div class="col-sm-3 pt-1 ">
                                    <h4> = </h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4> 95000 <i class="fa ml-4 fa-dollar mr-3 " style="font-size: 25px;"></i></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 pt-1">
                                    <h4>Average</h4>
                                </div>
                                <div class="col-sm-3 pt-1 ">
                                    <h4> = </h4>
                                </div>
                                <div class="col-sm-5">
                                    <h4> 22.00 <i class="fa ml-4 fa-gift mr-3 " style="font-size: 25px;"></i><h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-muted mt-5 pt-5">
                <h4> COMPANY CHART</h4>
            </div>
        <!-- chart Settings -->
            <div class="row mt-5">
            
            </div>
        </div>
    </div>
</body>
</html>