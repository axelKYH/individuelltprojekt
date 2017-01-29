<?php
$db = mysqli_connect('indproject-219319.mysql.binero.se', '219319_te56871', 'hejschweiz200', '219319-indproject');
mysqli_query($db, 'SET NAMES utf8');
$query = "SELECT * FROM content
          WHERE id = 3";

$result = mysqli_query($db, $query);

while($row = mysqli_fetch_assoc($result)){
  $indexHeader = "{$row['textOne']}";
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Axel Aronsson - Front End Developer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="scripts/JavaScript.js" type="text/javascript"></script>
    <link rel="stylesheet" media="(max-width:500px)" href="smartphone.css">
    <link rel="stylesheet" media="(min-width:501px) and (max-width:780px)" href="tablet.css">
    <link rel="stylesheet" media="(min-width:781px)" href="desktop.css">
    <script async src="https://use.fontawesome.com/986342ab7c.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.js"
            integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
            crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h2>Axel Aronsson</h2>
        <h5>Front end-utvecklare</h5>
    </header>


    <nav>
      <a class="meny" href='index.php?page=home'>Hem</a>
      <a class="meny" href='index.php?page=cv'>CV</a>
      <a class="meny" href='index.php?page=portfolio'>Portfolio</a>
    </nav>


    <?php

    $page = 'home';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
      }
      switch($page) {
        case 'cv':
        include('cv.php');
        break;
        case 'portfolio':
        include('portfolio.php');
        break;
        default:
        echo "<article id='index_info'>
            <p>
              $indexHeader
            </p>
        </article>
        <section id='countdown_graduation'>
            <div id='clockdiv'>
                <p>Tid kvar till examen:</p>
                <div>
                    <span class='days'></span>
                    <div class='smalltext'>Dagar</div>
                </div>
                <div>
                    <span class='hours'></span>
                    <div class='smalltext'>Timmar</div>
                </div>
                <div style='display:none'>
                    <span class='minutes'></span>
                    <div class='smalltext'>Minutes</div>
                </div>
                <div style='display:none'>
                    <span class='seconds'></span>
                    <div class='smalltext'>Seconds</div>
                </div>
            </div>
        </section>
        <section id='countdown_LIA'>
            <div id='clockdiv2' class='clock2'>
                <p>Tid kvar till LIA:</p>
                <div class='clock2'>
                    <span class='days'></span>
                    <div class='smalltext'>Dagar</div>
                </div>
                <div class='clock2'>
                    <span class='hours'></span>
                    <div class='smalltext'>Timmar</div>
                </div>
                <div class='clock2' style='display:none'>
                    <span class='minutes'></span>
                    <div class='smalltext'>Minutes</div>
                </div>
                <div class='clock2' style='display:none'>
                    <span class='seconds'></span>
                    <div class='smalltext'>Seconds</div>
                </div>
            </div>
        </section>";
      }
    ?>

    <footer>
        <div id="footer_info">
          mail: axel.aronsson@student.kyh.se <br>
          <a href='contact.php'>Kontakt</a>
          <a href='admin.php'>Admin</a>
          <a class="socialmedia" href="https://www.facebook.com/sharer/sharer.php?u=www.axelaronsson.se"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a class="socialmedia" href="https://www.linkedin.com/shareArticle?mini=true&url=www.axelaronsson.se&title=Axel%20Aronsson%20Front%20end-utvecklare&summary=&source="><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </div>
    </footer>

    <script>

    </script>
</body>
</html>
