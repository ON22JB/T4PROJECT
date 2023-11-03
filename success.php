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



<!------------------CONVERSION------------------->


<div>
      <p>Unit Converter</p>
      <form class="" action="distance converter.php" method="post">
        <label for="">Select a Conversion Unit</label><br>
        <select class="" name="Unit1" required style="color:black">
          <option option selected hidden>Convert from</option>
          <option value="mm">mm</option>
          <option value="cm">cm</option>
          <option value="dm">dm</option>
          <option value="m">m</option>
          <option value="km">km</option>
          <option value="ft">ft</option>
          <option value="in">in</option>
        </select>
        <select class="" name="Unit2" required style="color:black">
          <option option selected hidden>Convert to</option>
          <option value="mm">mm</option>
          <option value="cm">cm</option>
          <option value="dm">dm</option>
          <option value="m">m</option>
          <option value="km">km</option>
          <option value="ft">ft</option>
          <option value="in">in</option>
        </select>
        <input id="amount" type="text" name="amount" value="" placeholder="Enter a Value" required style="color:black">
        <input id="convert" type="submit" name="convert" value="Convert" style="color:black"> <br> <br> 
        <h3>
          <?php

            if (isset($_POST['convert'])) {
              $amount=$_POST['amount'];
              $option1=$_POST['Unit1'];
              $option2=$_POST['Unit2'];
              #SAME UNITS
              if ($option1=='mm' && $option2=='mm' || $option1=='cm' && $option2=='cm' || $option1=='dm' && $option2=='dm' || $option1=='m' && $option2=='m' || $option1=='km' && $option2=='km' || $option1=='ft' && $option2=='ft' || $option1=='in' && $option2=='in') {
                echo "Please choose two different units to convert.";
            }
            #mm and cm
            if ($option1=='mm' && $option2=='cm') {
                  $result=$amount/10;
                  echo $amount." mm = ".$result." cm";
            }
            if ($option1=='cm' && $option2=='mm') {
                $result=$amount*10;
                echo $amount." cm = ".$result." mm";
            }
            #mm and dm
            if ($option1=='mm' && $option2=='dm') {
                $result=$amount/100;
                echo $amount." mm = ".$result." dm";
            }
            if ($option1=='dm' && $option2=='mm') {
                $result=$amount*100;
              echo $amount." dm = ".$result." mm";
            }
            #mm and m
            if ($option1=='mm' && $option2=='m') {
                $result=$amount/1000;
                echo $amount." mm = ".$result." m";
            }
            if ($option1=='m' && $option2=='mm') {
                $result=$amount*1000;
              echo $amount." m = ".$result." mm";
            }
            #mm and km
            if ($option1=='mm' && $option2=='km') {
                $result=$amount/1000000;
                echo $amount." mm = ".$result." km";
            }
            if ($option1=='km' && $option2=='mm') {
                $result=$amount*1000000;
              echo $amount." km = ".$result." mm";
            }
            #mm and ft
            if ($option1=='mm' && $option2=='ft') {
                $result=$amount/304.8;
                echo $amount." mm = ".$result." ft";
            }
            if ($option1=='ft' && $option2=='mm') {
                $result=$amount*304.8;
              echo $amount." ft = ".$result." mm";
            }
            #mm and in
            if ($option1=='mm' && $option2=='in') {
                $result=$amount/25.4;
                echo $amount." mm = ".$result." in";
            }
            if ($option1=='in' && $option2=='mm') {
              $result=$amount*25.4;
              echo $amount." in = ".$result." mm";
            }
            #cm and dm
            if ($option1=='cm' && $option2=='dm') {
                $result=$amount/10;
                echo $amount." cm = ".$result." dm";
            }
            if ($option1=='dm' && $option2=='cm') {
                $result=$amount*10;
              echo $amount." dm = ".$result." cm";
            }
            #cm and m
            if ($option1=='cm' && $option2=='m') {
                $result=$amount/100;
                echo $amount." cm = ".$result." m";
            }
            if ($option1=='m' && $option2=='cm') {
              $result=$amount*100;
              echo $amount." m = ".$result." cm";
            }
            #cm and km
            if ($option1=='cm' && $option2=='km') {
                $result=$amount/1000;
                echo $amount." cm = ".$result." km";
            }
            if ($option1=='km' && $option2=='cm') {
              $result=$amount*1000;
              echo $amount." km = ".$result." cm";
            }
            #cm and ft
            if ($option1=='cm' && $option2=='ft') {
                $result=$amount/30.48;
                echo $amount." cm = ".$result." ft";
            }
            if ($option1=='ft' && $option2=='cm') {
              $result=$amount*30.48;
              echo $amount." ft = ".$result." cm";
            }
            #cm and in
            if ($option1=='cm' && $option2=='in') {
                $result=$amount/2.54;
                echo $amount." cm = ".$result." cm";
            }
            if ($option1=='in' && $option2=='em') {
              $result=$amount*2.54;
              echo $amount." in = ".$result." cm";
            }
            #dm and m
            if ($option1=='dm' && $option2=='m') {
                $result=$amount/10;
                echo $amount." dm = ".$result." m";
            }
            if ($option1=='m' && $option2=='dm') {
              $result=$amount*10;
              echo $amount." m = ".$result." dm";
            }
            #dm and km
            if ($option1=='dm' && $option2=='km') {
                $result=$amount/10000;
                echo $amount." dm = ".$result." km";
            }
            if ($option1=='km' && $option2=='dm') {
              $result=$amount*10000;
              echo $amount." km = ".$result." dm";
            }
            #dm and ft
            if ($option1=='dm' && $option2=='ft') {
                $result=$amount/3.048;
                echo $amount." dm = ".$result." ft";
            }
            if ($option1=='ft' && $option2=='dm') {
              $result=$amount*3.048;
              echo $amount." ft = ".$result." dm";
            }
            #dm and in
            if ($option1=='dm' && $option2=='in') {
                $result=$amount/0.254;
                echo $amount." dm = ".$result." in";
            }
            if ($option1=='in' && $option2=='dm') {
              $result=$amount*0.254;
              echo $amount." in = ".$result." dm";
            }
            #m and km
            if ($option1=='m' && $option2=='km') {
                $result=$amount/1000;
                echo $amount." m = ".$result." km";
            }
            if ($option1=='km' && $option2=='m') {
              $result=$amount*1000;
              echo $amount." km = ".$result." m";
            }
            #m and ft
            if ($option1=='m' && $option2=='ft') {
                $result=$amount/0.3048;
                echo $amount." m = ".$result." ft";
            }
            if ($option1=='ft' && $option2=='m') {
              $result=$amount*0.3048;
              echo $amount." ft = ".$result." m";
            }
            #m and in
            if ($option1=='m' && $option2=='in') {
                $result=$amount/0.0254;
                echo $amount." m = ".$result." in";
            }
            if ($option1=='in' && $option2=='m') {
              $result=$amount*0.0254;
              echo $amount." in = ".$result." m";
            }
            #km and ft
            if ($option1=='km' && $option2=='ft') {
                $result=$amount/0.0003048;
                echo $amount." km = ".$result." ft";
            }
            if ($option1=='ft' && $option2=='km') {
              $result=$amount*0.0003048;
              echo $amount." ft = ".$result." km";
            }
            #km and in
            if ($option1=='km' && $option2=='in') {
                $result=$amount/0.0000254;
                echo $amount." km = ".$result." in";
            }
            if ($option1=='in' && $option2=='km') {
              $result=$amount*0.0000254;
              echo $amount." in = ".$result." km";
            }
            #ft and in
            if ($option1=='ft' && $option2=='in') {
                $result=$amount*12;
                echo $amount." ft = ".$result." in";
            }
            if ($option1=='in' && $option2=='ft') {
              $result=$amount/12;
              echo $amount." in = ".$result." ft";
            }
              

            }else {
              echo "Choose a Conversion Unit";
            }


           ?>
        </h3>

      </form>

    </div>

<!------------------------------------->





        <br> <br> <br>

            <a href="logout.php" class="btn btn-primary" style="background-color: white; border-style: none; color: #404040;" onmouseover="this.style.backgroundColor='#ff0000'" onmouseout="this.style.backgroundColor='white'"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </div>
    </div>
</body>
</html>