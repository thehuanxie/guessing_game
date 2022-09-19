<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kidz Tse_bf0dc199</title>
</head>

<body>
<h1>Welcome to my guessing game</h1>
<p>
    <?php
        $guess=42;

        //get number from url -> existing control
        if (empty($_GET)){
            echo "Missing parameters";
        } elseif (empty($_GET['guess'])){
            echo "Your guess is too short"; //empty guess
        } elseif(!is_numeric($_GET['guess'])){
            echo "Your guess is not a number"; //numeric control
        } elseif($_GET['guess']<$guess){
            echo "Your guess is too low";
        } elseif($_GET['guess']>$guess){
            echo "Your guess is too high";
        } elseif($_GET['guess']==$guess){
            echo "Congratulations - You are right";
        }
        
    ?>
</p>
    
</body>

</html>
