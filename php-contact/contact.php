<?php
if(isset($_POST["submit"])){
    $name= $_POST['name'];
    $emailFrom= $_POST['email'];
    $message= $_POST['message'];


    $mailTo="ozzoff20007@gmail.com";

    $headers="From: ".$emailFrom;
    $txt="You have email from".$name.".\n\n".$message;





    mail($mailTo,$message,$headers);

    header("Location: index.php?mailsend");



}

