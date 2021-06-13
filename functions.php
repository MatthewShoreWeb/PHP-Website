<?php
    function checkEmpty($username, $password) {
        $result = false;

        if (empty($username) || empty($password)) {
            $result = true;
        }

        return $result;
    }

    function checkInputs($username) {
        $result = false
        if ((!preg_match("/^[a-zA-Z0-9]*$"), $username) || (!preg_match("/^[a-zA-Z0-9]*$"), $password)) {
            $result = true;
        }

        return $result;
    }

    function uidExists($conn, $username) {
        $sql = "SELECT * FROM users WHERE usersUid = ?"
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username);
        mysqli_stmt_execute($stmt)

        $resultData = mysqli_stmt_get_result($stmt);

        if (mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            return false;
        }
        mysqli_stmt_close($stmt);
    }
?>
