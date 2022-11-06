<?php
$tblName = "coaches";
if(isset($_POST['c-submit']))
{
    require "connect.php";
    $fn = $_POST['c-fn'];
    $ln = $_POST['c-ln'];
    $gender = $_POST['gender'];
    $image = $_FILES['c-image'];
    $imageSaved = "./assets/coachImages/".time()."-".uniqid(rand()).$image['name']; 
    $certifications = $_FILES['c-certif'];
    $certifSaved = './assets/coachCertifications/'.time()."-".uniqid(rand()).$certifications['name'];
    $sql = "INSERT INTO coaches (`fn`,`ln`,`gender`,`image`) VALUES ('.$fn.','.$ln.','.$gender.','.$imageSaved.')";
    $res =  $con->query($sql);
    if($res)
    {
        move_uploaded_file($image['tmp_name'],$imageSaved);
        move_uploaded_file($certifications['tmp_name'],$certifSaved);
        echo "coach inserted";
    }
    else
        echo "something went wrong";
    

}
?>