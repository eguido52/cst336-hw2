<?php
include './inc/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> R.P.S.L.S </title>
        <style>
            @import url("css/styles.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Cuprum:700" rel="stylesheet">
    </head>
    <body>
        <a id= "homeLink" href= "index.php"><div id= "abrev">R.P.S.L.S.</div><br /> <div id= "extend">Rock Paper Sciccors Lizard Spock</div></a>
        
        <img class= "gifs" src= "img/howToGif/playingRpsls.gif" alt= "Rock paper scissors lizard spock gif"/>
        
        <p class= "helpText">Not sure how the game works?</p>
        
        <?php 
            displayGifs();
        ?>
        
        <br /><br />
        <p class= "helpText">Make sense yet? Not really? <br /> Here are some handy little charts that might make it more clear.</p>
        
        <img class= "gifs" src= "img/howToGif/rpslsRulesPng.png" alt= "Rock paper scissors lizard spock gif"/>
        <img class= "gifs" src= "img/howToGif/rpslsRulesWText.jpg" alt= "Rock paper scissors lizard spock gif"/>
        
        <p class= "helpText" id= "footerText">Got it? Ready to get back to the game? Click <a href= "index.php">Here</a></p>
        
    </body>
</html>