<?php
 include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC MODEL</title>
  </head>
  <body>

    <form action="index.php" method="post">
      <label for="">FIND EMAIL BY USER NAME</label>
      <input type="text" name="first_name" value="">
      <input type="text" name="last_name" value="">
      <input type="submit" name="search" value="Search">

    </form>

    <form action="index.php" method="post">
      <label for="">ADD NEW CLIENT</label>
      <input type="text" name="first_name" value="">
      <input type="text" name="last_name" value="">
      <input type="text" name="mail" value="">
      <input type="submit" name="add_user" value="add">

    </form>



    <?php
    if (isset($_POST['search'])) {
        $firstName = $_POST['first_name'];

        $client = new UsersView();
        $client ->showUser($firstName);
    }

    if (isset($_POST['add_user'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $mail = $_POST['mail'];

        $client = new UsersContr();
        echo $client->createUser($firstName, $lastName, $mail);
    }





     ?>
  </body>
</html>
