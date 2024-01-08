<?php
$dirty_par = $_POST ['text'];
$dirty_wrd = $_POST ['word'];
$par_length_1 = strlen($dirty_par);
$new_par = str_replace($dirty_wrd,'***',$dirty_par);
$par_length_2 = strlen($new_par);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Old paragraph</h2>
    <div><?php echo $dirty_par?></div>
    <h2>Letter Number</h2>
    <div><?php echo  $par_length_1?></div>

    <hr>

    <h2>New Paragraph</h2>
    <div><?php echo $new_par?></div>
    <h2>Letter Number</h2>
    <div><?php echo $par_length_2?></div>


    
</body>
</html>