<?php

if (isset($_POST["submit"])) {
    
    $view =  $_POST["view"];
    $comments =  $_POST["comments"];
    $name =  $_POST["name"];
    $email =  $_POST["email"];
    $num =  $_POST["num"];
   
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES ('','$name','$email','$num','$view','$comments')");

    if (emptyInputComment($view, $comments) !== false) {
        header("location: ../feedbackpage.php?error=emptyinput");
        exit();
    }


    createUser($conn, $view, $comments, $name, $email, $num);
    echo("Thank you for your time");
}
else {
    header("location: ../feedbackpage.php");
    exit();
}