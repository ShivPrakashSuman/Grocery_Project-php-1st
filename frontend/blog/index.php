<html>
<head>
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
    .zoom:hover {
        margin-top: -10px;
        
    }
</style>
</head>
<body>
    <?php
        include('navbar.php'); 
        include('../../include/db.php');

    //  Blog count ------
    $sql1 = "select count(id) as BlogCount from datablog_2";
    $result1 = $comm->query($sql1);
    $blogCount = $result1->fetch_assoc () ; 

        $sql = "select*from datablog_2";
        $result = $comm->query($sql); 
    ?>
    <div class="manebox">
        <div class="box">
            <div class="badge rounded-pill text-primary mb-3 p-2" style="font-size: 13px; background: lightcyan;"> All Product = <?php echo $blogCount['BlogCount']; ?></div>
            <h1>Landing Pages</h1>
            <p class=" text-muted mb-5"> When you purchase this UI Kit, you get access to a robust suite of powerful landing page demos to help<br> you get started. </p>
        </div>
    <div class="container pt-5">
        <div class="row ">
            <?php 
                if($result->num_rows > 0){
                    while($rowData1 = $result->fetch_assoc() ) {
            ?>
			<div class="col-sm-4 pb-5 zoom">
				<div class="shadow-lg bg-light mt-4 rounded-5 m-4 ">
					<!-- <a href="javascript:void(0);" style="text-decoration: none;"> -->
						<div class="p-4 overflow-hidden ">
							<img src="../../uploads/<?php echo $rowData1['image']; ?>" class="rounded-5 zoom1 " width="100%" height="300px">
						</div>
						<div class="p-5  ">
							<div class=" text-primary overflow ">
								<h1><?php echo $rowData1['title'];?></h1>
							</div>
							<div class="text-muted mb-4 pt-1 overflow">
								<?php echo $rowData1['description']; ?>
							</div>
							<div class=" text-info pt-3 pb-3">
								<a href="blog.php?id=<?php echo $rowData1['id'];?>" class="text-decoration-none"><h3> Read more..</h3> </a>
							</div>
						</div>
					<!-- </a> -->
				</div>
			</div>
            <?php
                    }
                } else {
                    echo "Data Not Found";
                }
            ?>	
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