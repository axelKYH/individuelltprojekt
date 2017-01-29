<?php session_start(); ?>

<?php
  if( isset($_POST['password']) ){
    if($_POST['password'] == "KYHsthlm"){
      $_SESSION['admin'] = TRUE;
    }
  }

  if( isset($_POST['logout']) ){
    $_SESSION['admin'] = FALSE;
  }

  if(isset($_SESSION['admin']) && $_SESSION['admin'] == TRUE){
    $db = mysqli_connect('indproject-219319.mysql.binero.se', '219319_te56871', 'hejschweiz200', '219319-indproject');
    mysqli_query($db, 'SET NAMES utf8');

    echo "<form method='post' action=''>
            <input type='submit' value='Logga ut' name='logout'>
          </form>";

    if(isset($_POST['textSubmit'])){
      $textOne = mysqli_real_escape_string($db, $_POST['textOne']);
      $textTwo = mysqli_real_escape_string($db, $_POST['textTwo']);
      $textThree = mysqli_real_escape_string($db, $_POST['textThree']);

      $query = "UPDATE content SET textOne='$textOne', textTwo='$textTwo', textThree='$textThree'
                WHERE id=1";

      mysqli_query($db, $query);

    }
    if(isset($_POST['headerSubmit'])){
      $headerOne = mysqli_real_escape_string($db, $_POST['headerOne']);
      $headerTwo = mysqli_real_escape_string($db, $_POST['headerTwo']);
      $headerThree = mysqli_real_escape_string($db, $_POST['headerThree']);

      $query = "UPDATE content SET textOne='$headerOne', textTwo='$headerTwo', textThree='$headerThree'
                WHERE id=2";

      mysqli_query($db, $query);

    }
    if(isset($_POST['indexSubmit'])){
      $indexHeader = mysqli_real_escape_string($db, $_POST['indexHeader']);
      $query = "UPDATE content SET textOne='$indexHeader'
                WHERE id=3";

      mysqli_query($db, $query);

    }

     $query = "SELECT * FROM content
               WHERE id = 1";

     $result = mysqli_query($db, $query);

     while($row = mysqli_fetch_assoc($result)){
       $textOne = "{$row['textOne']}";
       $textTwo = "{$row['textTwo']}";
       $textThree = "{$row['textThree']}";
     }
     $query = "SELECT * FROM content
               WHERE id = 2";

     $result = mysqli_query($db, $query);

     while($row = mysqli_fetch_assoc($result)){
       $headerOne = "{$row['textOne']}";
       $headerTwo = "{$row['textTwo']}";
       $headerThree = "{$row['textThree']}";
     }
     $query = "SELECT * FROM content
               WHERE id = 3";

     $result = mysqli_query($db, $query);

     while($row = mysqli_fetch_assoc($result)){
       $indexHeader = "{$row['textOne']}";
     }

     echo "<html>
     <head>
     </head>
     <body>
       <form method='post' action=''>
         <label>Text</label>
         <textarea name='textOne'>$textOne</textarea>
         <textarea name='textTwo'>$textTwo</textarea>
         <textarea name='textThree'>$textThree</textarea>
         <input type='submit' name='textSubmit' value='skicka' />
       </form>
       <form method='post' action=''>
         <label>Rubrik</label>
         <textarea name='headerOne'>$headerOne</textarea>
         <textarea name='headerTwo'>$headerTwo</textarea>
         <textarea name='headerThree'>$headerThree</textarea>
         <input type='submit' name='headerSubmit' value='skicka' />
       </form>
       <form method='post' action=''>
         <label>Välkomstsida</label>
         <textarea name='indexHeader'>$indexHeader</textarea>
         <input type='submit' name='indexSubmit' value='skicka' />
       </form>

     </body>
     </html>";
  }else{
    echo "<form method='post' action=''>
            <input type='password' name='password'>
            <input type='submit' value='Logga in'>
          </form>";
  }
 ?>
