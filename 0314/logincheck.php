<?php
session_start();
?>

<h1>Login result</h1>

<?php
$adminName = "nukadmin";
$adminPwd = "admin123";
$userName = "nukuser";
$userPwd = "user123";
$Name = $_POST["Name"];
$Pwd = $_POST["Pwd"];
$cookiedate = strtotime("+20 second", time());

if($Name == $adminName && $Pwd == $adminPwd){
    echo "Login success";
    $_SESSION["admin"] = 1;
    setcookie("Name", $adminName, $cookiedate);
    header("Location:form_admin.php");
}else if($Name == $userName && $Pwd == $userPwd){
    echo "Login success";
    $_SESSION["user"] = 1;
    setcookie("Name", $userName, $cookiedate);
    header("Location:form_user.php");
}else{
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login.php");
}
?>