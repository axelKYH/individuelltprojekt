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
    $db = mysqli_connect('localhost', 'root', '', 'indproject');
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
         <textarea name='headerOne'>$headerOne</textarea>
         <textarea name='headerTwo'>$headerTwo</textarea>
         <textarea name='headerThree'>$headerThree</textarea>
         <input type='submit' name='headerSubmit' value='skicka' />
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
