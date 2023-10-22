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
        font-size: 25px;
    }
    .mane_form {
        align-items: center;
        justify-content: center;
        display: flex;
    }
    .box{
        width:48%;
        height:auto;
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
            if(!isset($_SESSION['userData'])) {
                header('location:../../frontend/auth/register.php');
            }
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
                                <h1> Shiva </h1>
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
            <div class="row text-muted mt-5 pt-5">
                <h4>Edit Company Employee </h4>
            </div>
        <!--User Settings      -->    
            <div class="row">
                <div col-sm-12>
                    <div class="mane_form">
                        <div class="row mt-4 pt-4 box">
                            <div class="col-sm-12 ">
                                <div class="shadow-lg ">
                                    <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                                        <div class="text-center">
                                            <div class="text-primary p-3 ">
                                                <h1> Edit Page ! </h1>
                                            </div>   
                                        </div>
                                    </div>
                                    <!-- Edit EMPLOYEES  -->
                                    <?php 
                                        $id = $_GET['id'];
                                            if(!$id) {
                                                header('location:index.php');
                                            }
                                                include('../../include/db.php');
                                                $sql = "select*from user_2 where id = $id";
                                                $result = $comm->query($sql);
                                            
                                                if ($result->num_rows > 0 ) {
                                                    $rowData = $result->fetch_assoc()
                                    ?>
                                    <div class="row p-4">
                                        <form class= "form p-4" action="edit_store.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $rowData['id']; ?>" >
                                            <input type="text" class="form-control  input2 "  placeholder="Enter Name" name="name" value="<?php echo $rowData['name']; ?>" style="font-size:18px;" required > <br>
                                            
                                            <span class="text-danger"><?php echo (isset($_GET['isEmail']) && $_GET['isEmail'] == 1)?'Email Already Exist':'';?></span>
                                            <input type="email" class="form-control input2"  placeholder="Enter E-mail" name="email" value="<?php echo $rowData['email']; ?>" style="font-size:18px;" required > <br>

                                            <input type="text" class="form-control bor"  placeholder="Enter Salary" name="salary" value="<?php echo $rowData['salary']; ?>" style="font-size:18px;" required > <br> 
                                
                                            <input type="text" class="form-control bor"  placeholder="Enter City" name="city" value="<?php echo $rowData['city']; ?>" style="font-size:18px;" required > <br>
                                
                                            <div style = " margin: 35px 0px 0px ;">
                                                <input type="submit" class="btn btn-primary btn-lg btn-block"  name= "submit" value = " SAVE " style="font-size:18px;"> 
                                            </div>
                                        </form>
                                    </div>
                                    <?php 
                                        } else {
                                            header('location:index.php');
                                        }
                                    ?>
                                    <a href="index.php" style="text-decoration: none;"> 
                                        <div class="row" style="background-color:#ededed; margin: -1px -1px; border-bottom:1px solid">
                                            <div class="text-center">
                                                <div class="text-primary p-3 ">
                                                    <h1>  Cancel ? </h1>
                                                </div>   
                                            </div>
                                        </div> 
                                    </a>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>