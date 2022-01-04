<?php
$page_name = "Bestil";
$img_name = "img/bestil-bg.webp";
?>

<?php
include "config.php";

$message = "";
if (isset($_POST['submit'])) { //check if form was submitted
  $name = $_POST['navn']; //get input text
  $tlfnr = $_POST['tlfnr'];
  $amount = $_POST['antalpsr'];
  $date = $_POST['dato']; //get input text
  $time = $_POST['time']; //get input text
  $message = "Success! You entered: " . $name . $tlfnr . $amount . $date . $time;

  //Connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
  }

  $sql = "INSERT INTO `LMR_reservationer` (`ID`, `Navn`, `tlf`, `Tid`, `Dato`, `AntalPersoner`) VALUES (NULL, '$name', '$tlfnr', '$time', '$date', '$amount'";
  $result = $conn->query($sql);

  if ($result) {
    echo ("success");
  } else {
    echo ("Fail");
    echo ($conn->error);
  }
}
echo $message;
?>

<html>

<head>
  <title>Bestil</title>
  <link rel="stylesheet" href="index.css">
  <meta name="viewport" content="width=device-width, initial-scale=0.6">
</head>

<body>
  <div id="page-container">
    <?php include 'header.php'; ?>
    <h1 id="bst-txt">Bestil Bord her</h1>
    <div class="formfitting">
      <form action="" method="post">
        <label class="bst-txt2" for="navn">Navn:</label>
        <input class="input" name="navn" type="text" required>
        <label class="bst-txt2" for="tlfnr">Telefon nummer:</label>
        <input class="input" name="tlfnr" type="tel" required>
        <label class="bst-txt2" for="antalpsr">Antal personer:</label>
        <input class="input" name="antalpsr" type="number" min="1" max="10" required>
        <label class="bst-txt2" for="dato">Dato:</label>
        <input id="date-input" class="input" name="dato" type="date" required>
        <label class="bst-txt2" for="time">Tid</label>
        <input id="time-input" class="input" name="time" type="time" min="9:00" max="20:00" required>
        <input name="submit" class="big-button" type="submit" value="Bestil">
    </div>
    </form>
  </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>
