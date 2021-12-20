<?php
$page_name="Bestil";
$img_name="img/bestil-bg.webp";
?>

<?php
$message = "";
if(isset($_POST['submit'])){ //check if form was submitted
  $name = $_POST['navn']; //get input text
  $date = $_POST['dato']; //get input text
  $message = "Success! You entered: ".$name.$date;
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
        <?php include 'header.php';?>
        <h1 id="bst-txt">Bestil Bord her</h1>
          <div class="formfitting">
            <form action="" method="post">
            <label class="bst-txt2" for="navn">Navn:</label>
            <input class="input" name="navn" type="text" required>
            <label class="bst-txt2" for="tlfnmr">Telefon nummer:</label>
            <input class="input" name="tlfnmr" type="tel" required>
            <label class="bst-txt2" for="antalpsr">Antal personer:</label>
            <input class="input" name="tlfnmr" type="number" min="1" max="10" required>
            <label class="bst-txt2" for="dato">Dato:</label>
            <input id="date-input" class="input" name="dato" type="date" required>
            <label class= "bst-txt2" for= "time">Tid</label>
            <input id="time-input" class="input" name="time" type="time" min="9:00" max="20:00" required>
            <input name="submit" class="big-button" type="submit" value="Bestil">
          </div>
        </form>
      </div>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
