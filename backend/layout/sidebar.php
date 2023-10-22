<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">                      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        
    }
    .mane{
        width:275px;
        height:100%;
        background: #0d6efd;
        border-radius: 0px 85px 0px 0px;
    }
    .btt{
        padding: 2px 20px;
        border-radius: 8px; 
        transition: 0.4s;
    }
    .btt:hover{
        background:#2d8bffba;
    }
    .btt:active {
        background:black;
    }
    .btt p{
        font-size: 20px;
        padding-top: 7px;
    }
    .interfac{
        font-size: 12px;
        position: absolute;
        margin-top: -9px;
    }
</style>
</head>
<body>
    <?php
    
        if (!isset($_SESSION['userData'])) {
            header('location:../../frontend/auth/register.php');
        }
            $rowData = $_SESSION['userData'];
            $base_url = "http://localhost/PHP_Work/Grocery_Project_in_PHP";       
    ?>
<div style="float:left;">
    <div class=" pb-2 ml-5 mb-5 mt-2 text-primary" >    
        <h1 style="font-size:29px;"><b><i class='fab fa-google-drive'></i> Company Drive </b></h1>
    </div>
    <div class="mane text-white">
        <div class="mr-1 p-5 pb-2 "> 
            <a href="<?php echo $base_url; ?>/backend/layout/dashboard.php"class=" text-white" style="text-decoration: none;">
                <div class="btt">
                    <h2><i class="fa fa-dashboard pt-3 pb-3"></i> Deshboard </h2>
                </div>
            </a>
        </div>
        <hr>
        <span class="ml-2 interfac">INTERFAC</span>
        <div class="ml-3 mr-5 mt-5 ">
           
            <ul style="list-style: none;">
                <a href="<?php echo $base_url; ?>/backend/user/" class="text-white" style="text-decoration: none;">
                    <div class="btt mb-2">
                        <li><p><i class="fa fa-user mr-3"></i> User</p></li>
                    </div>
                </a>
                <a href="<?php echo $base_url; ?>/backend/blog/" class=" text-white" style="text-decoration: none;">
                    <div class="btt mb-2">
                        <li><p><i class="fa fa-stack-overflow mr-3"></i> Blog</p></li>
                    </div>
                </a>
                <a href="<?php echo $base_url; ?>/backend/category/" class=" text-white" style="text-decoration: none;">
                    <div class="btt mb-2">
                        <li><p><i class="fa fa-briefcase mr-3"></i> Category</p></li>
                    </div>
                </a>
                <a href="<?php echo $base_url; ?>/backend/layout/table.php" class=" text-white" style="text-decoration: none;">
                    <div class="btt mb-4">
                        <li><p><i class="fa  fa-table mr-3"></i>Table</p></li>
                    </div>
                </a>
            </ul>
        </div>
        <hr>
        <span class="ml-2 interfac">BACK</span>
        <div class="mr-1 pl-5 pr-5 pb-2 pt-4"> 
            <a href="../../frontend/auth/logout.php"class=" text-white" style="text-decoration: none;">
                <div class="btt">
                    <h1><i class="fa fa-lock mr-3 pt-2 pb-2"></i> Log out</h1>
                </div>
            </a>
        </div>
    </div>  
</div> 
</body>
</html>