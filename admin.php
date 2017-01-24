<?php
$db = mysqli_connect('localhost', 'root', '', 'indproject');
mysqli_query($db, 'SET NAMES utf8');
 ?>
<html>
<head>
</head>
<body>
  <form method='post' action=''>
    <textarea name='su'></textarea>
    <textarea name='rml'></textarea>
    <textarea name='work'></textarea>
    <input type='submit' name='submit' value='skicka' />
  </form>


</body>
</html>
<?php
if(isset($_POST['submit'])){
  $su = $_POST['su'];
  $rml = $_POST['rml'];
  $work = $_POST['work'];

  $query = "UPDATE content SET su='$su', rml='$rml', work='$work'
            WHERE id=1";

  mysqli_query($db, $query);

}
 ?>
