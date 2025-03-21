<?php
function uidExists($conn, $username) {
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("location: logout.inc.php");
        exit();
    }

    $stmt->bind_param("s", $email);

    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($row) {
        return $row;
    }else {
        return false;
    }
}

function loginUser($conn, $username, $pwd) {
    // Check if the user exists in the client table
    $uidExists = uidExists($conn, $username);
    
    if ($uidExists) {
        // Validate the password for the client
        $pwdHashed = $uidExists["pwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);

        if ($checkPwd === false) {
            header("location: logout.inc.php?error=wronglogin");
            exit();
        } else if ($checkPwd === true) {
            // Start session for the client
            session_start();
            $_SESSION["id"] = $uidExists["id"];
            $_SESSION["email"] = $uidExists["email"];
            $_SESSION["program"] = $uidExists["program"];

            header("location: ../index.php");
            exit();
        }
    }
}


function invalidEmail($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function pwdMatch($pwd, $pwdRepeat) {
    if ($pwd !== $pwdRepeat) {
        return true;
    } else {
        return false;
    }
}

function createUser($conn, $fname, $lname, $email, $program, $level, $pwd) {
        $sql = "INSERT INTO users (`fname`, `lname`, `email`, `program`, `year`, `pwd`) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            header("location: logout.inc.php?error=stmtfailed");
            exit();
        }
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $stmt->bind_param("ssssss",  $fname, $lname, $email, $program, $level, $hashedPwd);
        $stmt->execute();
        $stmt->close();    
    header("location: ../../index.php?error=none");
    exit();
}
?>
