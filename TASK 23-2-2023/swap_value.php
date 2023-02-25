
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form method="post">
    Enter first number :
    <input type="number" name="n1" placeholder="Enter number" required><br><br>

    Enter second number :
    <input type="number" name="n2" placeholder="Enter number" required><br><br>
    <input type="submit" name="sub" value="Swap">
</form>

<?php

 if(isset($_POST['sub']))
 {
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $temp;

    $temp=$n1;
    $n1=$n2;
    $n2=$temp;
    echo " First number is :".$n1;
    echo " second number is :".$n2;
 }

?>
</center>

</body>
</html>