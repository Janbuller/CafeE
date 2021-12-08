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
</head>
<body>
    <div id="page-container">
        <?php include 'header.php';?>
        <h1 id="bst-txt">Bestil Bord her</h1>
        <div id="bst-txt2"></div>
        <form action="" method="post">
        <label class="bst-txt2" for="navn">Navn:</label>
        <input name="navn" type="text">
        <label class="bst-txt2" for="tlfnmr">Telefon nummer:</label>
        <input name="tlfnmr" type="tel">
        <label class="bst-txt2" for="antalpsr">Antal personer:</label>
        <input name="tlfnmr" type="number" min="1" max="10">
        <input name="dato" type="date">
        <input name="submit" type="submit">
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
