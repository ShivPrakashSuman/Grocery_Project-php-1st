<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .manebox{
        margin-top: -110px;
        background: #ebf1f9;
        height: auto;
        padding-bottom: 70px;
    }
    .box{
        padding-top: 205px;
        text-align: center;
    }
    .round1{
		height: 200px;
        margin-top: -110px;
    	background: #ebf1f9;
    	border-radius: 100%; 
	}
    #overflow {
        overflow: hidden;
        height: 266px;
        line-height: 30px;
    } 

    .zoom1:hover {
		transform:scale(1.1);
	} 
	.zoom1 {
		transition: transform.8s ;
	}
    .left_right {
        position: absolute;
        right: 0;
    }
</style>
</head>
<body>
    <?php
        include('../../include/db.php');
        $sql = "select*from category_2";
        $result = $comm->query($sql); 
    ?>
    <?php include('../blog/css.php'); ?>
    <nav class="navbar-dropdown navbar-expand-lg navbar-short navbar-fixed-top bg-white ">
		<div class="container pt-3 mt-2 pb-3"  >
			<div class="row  ">
				<div class="col-sm-6">
					<div class="navbar-brand ml-5" style="font-size:30px; ">
						<span class=" text-primary "><b>SB UI Kit Pro </b></span>
					</div>
				</div>
				<div class="col-sm-6">
					<div class=" navbar-collapse float-right mr-5 pr-4 box1">
						<ul class="navbar-nav nav-dropdown " >
							<li class="nav-item "><a href="../blog/index.php" class="text-muted text-decoration-none"> Home </a></li>
							<li class="nav-item text-muted"><a href="../category/index.php" class="text-muted text-decoration-none"> Category </a></li>
							<li class="nav-item text-muted"> Pages </li>
							<li class="nav-item text-muted"> Documentation </li>
							<a href="index.php"><input type="submit" class=" btn btn-primary ml-5"  value="Buy Now"> </a>
						</ul> 
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class=" mane">
		<div class="container" >
			<div class="row " >
				<div class="col-sm-6 " style="margin-top: 150px; padding-right:20px;">
					<h2 style="float:right; font-size:40px;" class="mb-4 text-black">Build your next Category faster with SB UI Kit Pro </h2>
					<p class=" text-muted mb-5">Welcome to SB UI Kit Pro, a toolkit for building beautiful web interfaces, created by the development team at Start Bootstrap </p> 
                    <div class="dropdown float-left">
                        <button type="button" class=" btn btn-primary btn-lg dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Category </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Biscit</a></li>
                            <li><a class="dropdown-item" href="#">chocolate</a></li>
                            <li><a class="dropdown-item" href="#">Cold Drink</a></li>
                        </ul> 
                    </div>
                    <div class="float-left">
					    <input type="submit" class=" btn butt ml-5 btn-lg"  value="Documentation" > 
                    </div>
				</div>
				<div class="col-sm-6 pt-3" >
					<img src="../../images/dovlop.webp" width="750px" height="550px" >
				</div>
			</div>	
		</div>
	</div>
	<div class="round">

	</div>
<div class="manebox">
        <div class="box">
            <div class="badge rounded-pill text-primary mb-3 p-2" style="font-size: 13px; background: lightcyan;">12 Demos!</div>
            <h1>Category</h1>
            <p class=" text-muted mb-5"> When you purchase this UI Kit, you get access to a robust suite of powerful landing page demos to help<br> you get started. </p>
        </div>
    <div class="container pt-5">
        <div class="row ">
            <?php 
                $id = $_GET['category'];
                if(!$id) {
                    header('location:index.php');
                }   
                    include('../../include/db.php');
                    $sql = "SELECT `id`, `title`, `category_id`, `description`, `image`, `status`, `created` FROM `datablog_2` WHERE category_id = $id;";
                    $result = $comm->query($sql); 
                    $index = 0;

                    if ($result->num_rows > 0 ) {
                        while($rowData1 = $result->fetch_assoc ()) {
            ?>
			<div class="col-sm-12 pb-5">
				<div class="mt-4 m-4 ">
                    <div class="row" style="<?php if($index/2 != 0){echo 'position: relative';}?>"   >
						<div class="col-sm-4 p-5 overflow-hidden  <?php if($index/2 != 0){echo "left_right";}?>">
							<img src="../../uploads/<?php echo $rowData1['image']; ?>" class="rounded-5 zoom1" width="100%" height="350px">
						</div>
						<div class="col-sm-8 p-5">
							<div class=" text-primary">
								<h1 style="font-size: 36px;"><b><?php echo $rowData1['title'];?></b></h1>
							</div>
							<div class="text-muted mb-4 pt-5 mb-5" id="overflow">
								<?php echo $rowData1['description']; ?> 
							</div>
						</div>
					</div>
				</div>
			</div>
            <?php
             $index++;
                        }
                } else {
                    echo "Data Not Found";
                }
            ?>	
        </div>
    </div>
 </div>
 </div>
    <div class="round1 "> </div>	
        <div style="text-align: center; margin-top: 100px;">
            <div class="badge rounded-pill text-primary mb-3 p-2" style="font-size: 13px; background: lightcyan;">12 Demos!</div>
            <h1>Inner Pages</h1>
            <p class=" text-muted pb-5 mb-5"> A group of pre-build inner page demos are available to get your started when building out the rest of<br> your project! </p>
        </div>
    </div>
  <hr>      
    <div class="container mt-5 pt-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="bg-primary text-center pb-2">
                    <a href="#" style="font-size:20px; color:white; text-decoration: none;">Basic page</a>
                </div>
                <div class="text-center mt-4 mb-5 text-muted">
                    <h3> HTML Basic <h3>
                    <h3> CSS Basic <h3>
                    <h3> PHP Basic<h3>
                    <h3> MY SQL Basic <h3>
                    <h3> BOOSTRWEP Basic <h3>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="bg-primary text-center pb-2">
                    <a href="#" style="font-size:20px; color:white; text-decoration: none;">Blog </a>
                </div>
                <div class="text-center mt-4 mb-5 text-muted">
                    <h3> Title <h3>
                    <h3> DTL <h3>
                    <h3> Status<h3>
                    <h3> image <h3>
                    <h3> Description  <h3>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="bg-primary text-center pb-2">
                    <a href="#" style="font-size:20px; color:white; text-decoration: none;">Table Data</a>
                </div>
                <div class="text-center mt-4 mb-5 text-muted">
                    <h3> First Name  <h3>
                    <h3> Last Name <h3>
                    <h3> Email <h3>
                    <h3> Password <h3>
                    <h3> Mobile No. <h3>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="bg-primary text-center pb-2">
                    <a href="#" style="font-size:20px; color:white; text-decoration: none;">Basic page</a>
                </div>
                <div class="text-center mt-4 mb-5 text-muted">
                    <h3> SQL  <h3>
                    <h3> Java  <h3>
                    <h3> Bootstrapt  <h3>
                    <h3> jdmonthname <h3>
                    <h3> levenshtein <h3>
                </div>
            </div>
        </div>
    </div>
    <hr>
</body>
</html>