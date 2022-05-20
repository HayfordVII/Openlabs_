<?php

function emptyInputSignup($view, $comments) {
    $result;
    if (empty($view) || empty($comments) ) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}


function createUser($conn, $view, $comments, $name, $email, $num) {
    $sql = "INSERT INTO feedback (userView, userComment, userName, userEmail, userNum) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../feedbackpage.php?error=stmtfailed");
        exit();
    }


    mysqli_stmt_bind_param($stmt, "ssssi", $view, $comments, $name, $email, $num);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../feedbackpage.php?error=none"); 
    exit();
}