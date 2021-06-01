<?php 
    $title = 'Please sign in'; 
    include_once 'login.php';
?>

<!DOCTYPE html>

<html>

<head>
    <title>PHP Test Site</title>
    <link rel='stylesheet' type='text/css' href='style.css' />
    <meta charset='UTF-8'>
</head>


<body>
    <header>
        <h1> <?php echo $title; ?> </h1>
    </header>

    <form id='signInForm'>
        <div>
            <p> Username: </p>
            <input type='text' />
            <p> Password: </p>
            <input type='text' />
            <button type='button'>Login</button> 
        </div>
    </form>
</body>

</html>
