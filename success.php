<?php
    session_start();
    include('dbcon.php');
 
    if (!isset($_SESSION['user']) ||(trim ($_SESSION['user']) == '')){
        header('location:index.php');
    }
 
    $sql="select * from vueuser where id='".$_SESSION['user']."'";
    $query=$conn->query($sql);
    $row=$query->fetch_array();

    #FONT SIZE FOR EXAMPLE TEXT
    if (isset($_POST['fontSize'])) {
      $_SESSION['fontSize'] = $_POST['fontSize'];
  }
  $fontSize = isset($_SESSION['fontSize']) ? $_SESSION['fontSize'] : 16;
 
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
            <p> You are now logged in. </p> <hr>


<!------------------CONVERSION------------------->

<div id="selection">
      <h2>Unit Converter</h2>
      <form class="" action="distance converter.php" method="post">
        <label for="">Select the conversion units</label><br>
        <select class="" name="Unit1" required style="color:black" v-model="option1" @change="toggleBasedivVisibility">
          <option option selected hidden>Convert from</option>
          <option value="px">PX</option>
          <option value="pt">PT</option>
          <option value="em">EM</option>
          <option value="in">IN</option>
          <option value="cm">CM</option>
          <option value="mm">MM</option>
        </select>
        <select class="" name="Unit2" required style="color:black" v-model="option2" @change="toggleBasedivVisibility">
          <option option selected hidden>Convert to</option>
          <option value="px">PX</option>
          <option value="pt">PT</option>
          <option value="em">EM</option>
          <option value="in">IN</option>
          <option value="cm">CM</option>
          <option value="mm">MM</option>
        </select> <br> <br>
        <input id="amount" type="text" name="amount" value="" placeholder="Enter a Value" required style="color:black"> <br> <br>
        <div class="basediv" id="basediv" name="basediv" v-if="isBasedivVisible">
        <label> Enter the base. The standard is 16px. <br> The base is only needed for specific calculations. </label> <br> 
        <input id="base" type="text" name="base" value="16" placeholder="Enter a Base"  style="color:black"> <br> <br>
        </div>
        <div class="dpidiv" id="dpidiv" name="dpidiv" v-if="isDpidivVisible">
        <label> Enter your dpi. The standard is 96. <br> The dpi is only needed for specific calculations.</label><br> 
        <input id="dpi" type="text" name="dpi" value="96" placeholder="Enter a Base"  style="color:black"> <br> <br>
        </div>
        <input id="convert" type="submit" name="convert" value="Convert" style="color:black"> <br> <br> 
        <h3> 
           <?php include('conversion.php'); ?>
           <?php echo $outputresult;?>
        </h3>
        </form>
    </div> <br> <hr>

<!-----------------CRUD TABLE-------------------->

<div> <?php include('crud.php'); ?> </div> <br> <hr>

<!-----------------EXAMPLE-------------------->
<p> Want to test out different font sizes? Try out this function. </p>
<form method="post">
        <label for="fontSizeSlider">Adjust Font Size:</label> <br>
        <span id="fontSizeValue"><?php echo $fontSize." px"; ?></span>
        <input type="range" id="fontSizeSlider" name="fontSize" min="10" max="150" step="1" value="<?php echo $fontSize; ?>">

        <input style="color: white; background-color: #404040; border-style: none; font-size: <?php echo $fontSize; ?>px;" value="This is an Example."> <br>


        <input type="submit" value="Apply" style="background-color: white; border-style: none; color: #404040;">
    </form>


        <br> 
        <hr>
            <a href="logout.php" class="btn btn-primary" style="background-color: white; border-style: none; color: #404040;" onmouseover="this.style.backgroundColor='#ff0000'" onmouseout="this.style.backgroundColor='white'"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </div>
    </div>
    <script src="hideandshow.js"></script>
</body>
</html>