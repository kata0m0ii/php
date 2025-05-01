<html>
    <head>
        <meta charset='utf-8'>
    </head>

<?php
    $uName=$_POST['userName'];
    $uEmail=$_POST['userEmail'];

    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'email'
    );
    mysqli_set_charset($link, 'utf8');
    $sql = "SELECT * FROM info where email='$uEmail'";
    $result = mysqli_query($link, $sql);

    if($row = mysqli_fetch_assoc($result)){
        header("Location:failMail.php?no=".$row['no']."");

    }else{
        $time=time();
        $FileName="photo\\".$time.".png";
        if(copy($_FILES["file"]["tmp_name"], $FileName)){
            unlink($_FILES["file"]["tmp_name"]);
            $fileName = "".$time.".png";
        }else{
            echo "檔案上傳失敗<br/>";
            header("Refresh:3;url='login.php'");
        }

        $sql = "INSERT INTO info(name, email, photo) VALUES ('$uName', '$uEmail', '$fileName')";
        mysqli_query($link, $sql);
        $sql = "SELECT * FROM info where name='$uName'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        header("Location:sendMail.php?no=".$row['no']."");
    }
?>

</html>