<!DOCTYPE html>
<html>

<head>
    <title>Kidz Tse_bf0dc199</title>
    <!-- Do not change this file - add your CSS styling 
       rules to the blocks.css file included below -->
    <!-- <link type="text/css" rel="stylesheet" href="blocks.css"> -->
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