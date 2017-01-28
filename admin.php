<?php
$db = mysqli_connect('localhost', 'root', '', 'indproject');
mysqli_query($db, 'SET NAMES utf8');
?>

<?php
if(isset($_POST['textSubmit'])){
  $textOne = $_POST['textOne'];
  $textTwo = $_POST['textTwo'];
  $textThree = $_POST['textThree'];

  $query = "UPDATE content SET textOne='$textOne', textTwo='$textTwo', textThree='$textThree'
            WHERE id=1";

  mysqli_query($db, $query);

}
if(isset($_POST['headerSubmit'])){
  $headerOne = $_POST['headerOne'];
  $headerTwo = $_POST['headerTwo'];
  $headerThree = $_POST['headerThree'];

  $query = "UPDATE content SET textOne='$headerOne', textTwo='$headerTwo', textThree='$headerThree'
            WHERE id=2";

  mysqli_query($db, $query);

}
 ?>

 <?php
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
  ?>
 <html>
 <head>
 </head>
 <body>
   <form method='post' action=''>
     <label>Text</label>
     <textarea name='textOne'><?php echo "$textOne" ?></textarea>
     <textarea name='textTwo'><?php echo "$textTwo" ?></textarea>
     <textarea name='textThree'><?php echo "$textThree" ?></textarea>
     <input type='submit' name='textSubmit' value='skicka' />
   </form>
   <form method='post' action=''>
     <textarea name='headerOne'><?php echo "$headerOne" ?></textarea>
     <textarea name='headerTwo'><?php echo "$headerTwo" ?></textarea>
     <textarea name='headerThree'><?php echo "$headerThree" ?></textarea>
     <input type='submit' name='headerSubmit' value='skicka' />
   </form>

 </body>
 </html>
