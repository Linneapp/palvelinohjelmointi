
<!DOCTYPE html>
<html>
<head>
 <title>Linnean PHP ja GitHub kokeiluja</title>
 <meta charset="utf-8">

 <style>
 .css{
        background-color:#E6E6FA; 
        width: 455px;
        height: 50px;
        text-align: center;
        font-weight: 600;
        padding-top: 15px;
        
   }
   </style>

 </head>
<body>
<h1>Kertotaulu</h1>
<form method="POST">
Kirjoita numerosi tähän:
<input type="text" name="number">
<input type="Submit" value="Tulosta kerotaulu">
<br></br>
</form>
</body>
</html>
  
<?php
if($_POST) {
    $num1 = $_POST["number"];

    echo nl2br
    ("Tässäpä kertotaulusi numerolle $num1: <br>
    ");
          
    for ($i = 1; $i <= 10; $i++) {

        echo nl2br("<p class='css'> $num1" . " * " . "$i" . " = " . $num1 * $i . 
        "

        </p>");
}
}
?>