<?php
    session_start();
    include('dbcon.php');
 
    if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
        header('location:index.php');
    }
 
    $sql="select * from vueuser where id='".$_SESSION['user']."'";
    $query=$conn->query($sql);
    $row=$query->fetch_array();
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color: #404040; color: white;">
    <div class="container">
        <div class="jumbotron" style="background-color: #404040;">
            <h1 class="text-center">Welcome, <?php echo $row['username']; ?>!</h1>
            <p> You are now logged in. </p> <br> <br> <br>
            <a href="logout.php" class="btn btn-primary" style="background-color: white; border-style: none; color: #404040;" onmouseover="this.style.backgroundColor='#ff0000'" onmouseout="this.style.backgroundColor='white'"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </div>
    </div>
</body>
</html>