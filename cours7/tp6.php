<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TP1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            $t = date("H");
            if($t<10){
                echo "Bonne matinée !";
            }elseif($t<20){
                echo "Bonne journée !";
            }else{
                echo "Bonne soirée !";
            }
        ?>
    </body>
</html>