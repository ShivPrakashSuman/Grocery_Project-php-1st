<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                         
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .manebox {
        width:1000px;
        height:650px;
        border: 1px solid #d7d1d1;
        border-radius: 10px;
     }
     .icn{
        padding: 14px;
        font-size: 15px;
        border-radius: 50%;
     }
     .line, h1 {
        position: relative;
     }
    .line:before {
        content:"";
        width:170px;
        height:1px;
        display:block;
        background: #aeb4b7;
        position: absolute;
        top: 18px;
        left:0;
    } 
    .line:after {
        content:"";
        width:170px;
        height:1px;
        display:block;
        background: #aeb4b7;
        position: absolute;
        top: 18px;
        right:0;
    } 
    .inp{
        font-size: 17px;
        padding: 16px;
    }
    .btn {
        width: 150px;
        font-size: 20px;
    }
</style>
</head>
<body>
    <?php
       session_start();
       if (isset($_SESSION['userData'])) {
               header('location:../../backend/layout/dashboard.php');
       }
    ?>
    <div class="manebox">
        <div class="row"> 
            <div class="col-sm-7">
                <div class="ml-4" style="margin-top: 100px;">
                    <img src="../../images/ppp.png" width="100%">
                </div>
            </div>
            <div class="col-sm-5">
                <div class=" mr-5" style="margin-top: 80px;">
                    <div class="row"> 
                        <div class="col-sm-5 text-muted">
                            <h2 style="font-size:25px; margin-top:7px;"> Sign up  With </h2>
                        </div> 
                        <div class="col-sm-7">
                            <i class="fa mr-2 icn bg-primary fa-twitter"></i>
                            <i class="fa mr-2 icn bg-primary fa-linkedin"></i>
                            <i class="fa icn bg-primary fa-instagram"></i>
                        </div>  
                    <div>
                    <div class="row mt-4 mb-5">
                        <div class="text-center text-muted">
                            <h1 class="line"> or </h1>
                        </div>
                    </div>
                    <form action="store.php" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" class="form-control inp" name="fname" placeholder="First Name" required >
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-4" >
                                <div class="form-outline">
                                    <input type="text"  class="form-control inp" name="lname" placeholder="Last Name" required >
                                </div>
                            </div>
                        </div>
                        <span class="text-danger" style="font-size:13px;"><?php echo (isset($_GET['isEmail']) && $_GET['isEmail'] == 1)?'Email Already Exist':'';?></span>
                        <input class="form-control inp mb-5" type="email" name="email" placeholder="Enter Email.."required >
                        <span class="text-danger" style="font-size:13px;"><?php echo (isset($_GET['isPassword']) && $_GET['isPassword']==1 )?'Password Already Exist':''; ?> </span>
                        <input class="form-control inp mb-5" type="password" name="password" placeholder="Enter Password.."required>
                        <input class="ml-2 mb-4" type="checkbox" name="" required> <lable for="rememder" class="inp text-muted pl-1"> Rememder me </lable><br>
                        <input class="mt-5 mb-5 btn btn-primary btn-lg" type="submit" name="submit" value="SIGN UP">
                        <h4>Don't have an Account? <span ><a href="login.php"class="text-danger text-decoration-none" >Login</a></span></h4>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>