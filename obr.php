
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">


    <title></title>
</head>
<body>
    <div class="form-group">
<h3>Вариант 16.</h3>
<img src="img.jpg" width="600"><p>
    <?php

    if(isset($_POST['myActionName'])){
     $n=$_POST['subject'];
    $x=$_POST['subject1'];
    $sum=0;
    $p;
    
    for(var i=0;i<n;i++) {
    
     $y = 2*$i+1;
     
        p=((Math.pow($x,($y)))/($y));
        $sum+=$p;
     }
    echo ("Сумма равна = ");
    echo (2*$sum);
    $sum=0;
    }
?>
 <center><a href="index.php">Назад</a></abbr></center>


</body>
</html>
