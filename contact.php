<h1>Kontakt</h1>

<form method='post' action=''>
  <label>Namn</label><br>
  <input type='text' name='sender' /><br>
  <label>Mail</label><br>
  <input type='text' name='email' /><br>
  <label>Telefon</label><br>
  <input type='text' name='phone' /><br>
  <label>Meddelande</label><br>
  <textarea name='message'></textarea>
  <input type='submit' value='Skicka' />
</form>

<?php
    $db = mysqli_connect('indproject-219319.mysql.binero.se', '219319_te56871', 'hejschweiz200', '219319-indproject');
    mysqli_query($db, 'SET NAMES utf8');

    if( isset($_POST['message']) && isset($_POST['email'])){
      $sender = mysqli_real_escape_string($db, $_POST['sender']);
      $email = mysqli_real_escape_string($db, $_POST['email']);
      $phone = mysqli_real_escape_string($db, $_POST['phone']);
      $message = mysqli_real_escape_string($db, $_POST['message']);

      $query = "INSERT INTO messages (sender, email, phone, message)
                VALUES ('$sender', '$email', '$phone', '$message')
                ";
      mysqli_query($db, $query);

      echo "Skickat!";

    }
 ?>
