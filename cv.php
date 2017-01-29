<?php
$db = mysqli_connect('localhost', 'root', '', 'indproject');
mysqli_query($db, 'SET NAMES utf8');
$query = "SELECT * FROM content
          WHERE id = 1";

$result = mysqli_query($db, $query);

while($row = mysqli_fetch_assoc($result)){
  $textOne = "{$row['textOne']}";
  $textTwo = "{$row['textTwo']}";
  $textThree = "{$row['textThree']}";
}
$query2 = "SELECT * FROM content
          WHERE id = 2";

$result2 = mysqli_query($db, $query2);

while($row = mysqli_fetch_assoc($result2)){
  $headerOne = "{$row['textOne']}";
  $headerTwo = "{$row['textTwo']}";
  $headerThree = "{$row['textThree']}";
}

 ?>
<html>
<head>
    <title>Axel Aronsson - Front End Developer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="scripts/expand2.js" type="text/javascript"></script>
    <link rel="stylesheet" media="(max-width:500px)" href="smartphone.css">
    <link rel="stylesheet" media="(min-width:501px) and (max-width:780px)" href="tablet.css">
    <link rel="stylesheet" media="(min-width:781px)" href="desktop.css">
    <script async src="https://use.fontawesome.com/986342ab7c.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.js"
            integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
            crossorigin="anonymous"></script>

</head>
<body>

    <!--<div class="cv_div">
        <div id="rubrik"> <span class="lasmer">Läs mer&nbsp;&nbsp;&darr;&nbsp;&nbsp;</span></div>
        <div id="textdiv">

        </div>
    </div>-->

    <div id="rubrik" class="cv_div">
        <?php echo "$headerOne" ?>
        <div class="cv_div" style="display:none">
          <?php
            echo "$textOne";
          ?>
        </div>
    </div>
    <div id="rubrik" class="cv_div">
        <?php echo "$headerTwo" ?>
        <div class="cv_div" style="display:none">
          <?php
            echo "$textTwo";
          ?>
        </div>
    </div>
    <div id="rubrik" class="cv_div">
        <?php echo "$headerThree" ?>
        <div class="cv_div" style="display:none">
          <?php
            echo "$textThree";
          ?>
        </div>
    </div>


</body>
</html>
