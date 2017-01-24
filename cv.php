<?php
$db = mysqli_connect('localhost', 'root', '', 'indproject');
mysqli_query($db, 'SET NAMES utf8');
$query = "SELECT * FROM content";

$result = mysqli_query($db, $query);

while($row = mysqli_fetch_assoc($result)){
  $su = "{$row['su']}";
  $rml = "{$row['rml']}";
  $work = "{$row['work']}";
}

 ?>
<html>
<head>
    <title>Axel Aronsson - Front End Developer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="scripts/expand.js" type="text/javascript"></script>
    <link rel="stylesheet" media="(max-width:500px)" href="smartphone.css">
    <link rel="stylesheet" media="(min-width:501px) and (max-width:780px)" href="tablet.css">
    <link rel="stylesheet" media="(min-width:781px)" href="desktop.css">
    <script async src="https://use.fontawesome.com/986342ab7c.js"></script>

</head>
<body>

    <div class="cv_div">
        <div id="rubrik">Stockholms universitet<span class="lasmer">Läs mer&nbsp;&nbsp;&darr;&nbsp;&nbsp;</span></div>
        <div id="textdiv">
          <?php
            echo "$su";
          ?>
      </div>
    </div>
    <div class="cv_div">
        <div id="rubrik">Birkagårdens folkhögskola<span class="lasmer">Läs mer&nbsp;&nbsp;&darr;&nbsp;&nbsp;</span></div>
        <div id="textdiv">
          <?php
            echo "$rml";
          ?>
        </div>
    </div>
    <div class="cv_div">
        <div id="rubrik">Jobb<span class="lasmer">Läs mer&nbsp;&nbsp;&darr;&nbsp;&nbsp;</span></div>
        <div id="textdiv">
          <?php
            echo "$work";
          ?>
        </div>
    </div>


</body>
</html>
