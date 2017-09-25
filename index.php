<html>
    <head>
         <title> Dice Game </title>
         <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id = "main">
            <?php
            
                // Pseudocode: 
                // 1) Declare a Die object ===> array with 6 elements ==> each element is a side of the die
                // 2) Play function ===> simulates one round of the game. 
                //           * call rollDie() twice
                //           * roll both dice  ==> rollDie function which returns ONE side of the die, 
                //                  * rollDie should randomly pick a side and return it. 
                //           * store both dice in an array (array has two elements)
                //           * displayDice ==> pass in two elements into this function
                
                
                $die = array( // an associative array for my die. 
                array(
                    "value" => 1,
                    "imgURL" =>"./img/die1.png"
                    ),
                array(
                    "value" => 2,
                    "imgURL" => "./img/die2.png"
                    ),
                array(
                    "value" => 3,
                    "imgURL" => "./img/die3.png"
                    ),
                array(
                    "value" => 4,
                    "imgURL" => "./img/die4.png"
                    ),
                array(
                    "value" => 5,
                    "imgURL" => "./img/die5.png"
                    ),
                array(
                    "value" => 6,
                    "imgURL" => "./img/die6.png"
                    ),    
                );
                
                
                
                
                function play($die){
                    // declare array "diceSides"
                    // loop 2 times {
                    //     call rollDie() ==> returns a single dice side. 
                    //     push the result of rollDie into the array "diceSides"
                    // }
                    // call displayDice($diceSides)
                    
                    
                    $diceSides = array(); // declare an empty array called "diceSides"
                    for ($i=1;$i<3;$i++) { // loop 2 times 
                        $dieSide = rollDie($die); //     call rollDie() ==> returns a single dice side. 
                        
                        // push the result of rollDie into the array "diceSides"
                        array_push($diceSides, $dieSide);  // from the rollDie function, we push $dieSide into the empty array $diceSides
                    }
                    
                   
                    displayDice($diceSides);
                    //echo "Roll type". determineRollType($diceSides);
                   
        
                }
                
               
                 //           * roll both dice  ==> rollDie function which returns ONE side of the die
                
                
                 //           * call rollDie() twice
                //           * roll both dice  ==> rollDie function which returns ONE side of the die, 
                //                  * rollDie should randomly pick a side and return it. 
                //           * store both dice in an array (array has two elements)
                //           * displayDice ==> pass in two elements into this function
                
                function rollDie($die) {
                    $randomValue = rand(0,5); // variable $randomValue. create 1 number between 0-5.remember, 0 starts as the first item of your array $die (1)
                    $dieSide = $die[$randomValue]; // load $randomValue into $dieSide
                    
                    return $dieSide;
                
                }
                //           * displayDice ==> pass in two elements into this function
               
                
                function displayDice($diceSides) {
             
                    echo "<div id='output'>";
                   
                    for ($i = 0; $i < count($diceSides); $i++){
                        echo "<img src='".$diceSides[$i]["imgURL"]."'>";
                    }
                    
                    calculateRoll($diceSides);
                    
                    "<br />";
                    echo "Roll type: ". determineRollType($diceSides); 
                    "<br />";
                    echo "</div>";
                    
                }
                
               
            
                function calculateRoll($diceSides) {
                    
                    echo "<div id='result'>";
                    $totalRoll = 0;
                   foreach($diceSides as $die) {
                       $totalRoll += $die["value"];
                       
                   }
                   "<br />";
                   echo "Total roll: ".$totalRoll;
                   "<br />";
            
                   
                   
                   
                   echo "</div>"; 
                }
                
                 
                
                function determineRollType($diceSides) {  
                    echo "<div id='rollType'>";
                    
                    $rollType = "";
            
                    if ($diceSides[0]["value"] == 1 && $diceSides[1]["value"] == 1) { // need to incorporate "value" to get access to type of rolls
                        $rollType.= "Snake Eyes";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 1 && $diceSides[1]["value"] == 2) {
                       $rollType.="Australian Yo";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 1 && $diceSides[1]["value"] == 3) {
                        $rollType.="Little Joe From Kokomo";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 1 && $diceSides[1]["value"] == 4) {
                        $rollType.="No Field Five";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 1 && $diceSides[1]["value"] == 5) {
                       $rollType.= "Easy Six";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 1 && $diceSides[1]["value"] == 6) {
                       $rollType.= "Six One You're Done";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 2 && $diceSides[1]["value"] == 1) {
                       $rollType.= "Ace Caught a Deuce";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 2 && $diceSides[1]["value"] == 2) {
                       $rollType.= "Ballerina";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 2 && $diceSides[1]["value"] == 3) {
                       $rollType.= "The Fever";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 2 && $diceSides[1]["value"] == 4) {
                       $rollType.= "Jimmy Hicks";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 2 && $diceSides[1]["value"] == 5) {
                       $rollType.= "Benny Blue";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 2 && $diceSides[1]["value"] == 6) {
                       $rollType.= "Easy Eight";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 3 && $diceSides[1]["value"] == 1) {
                       $rollType.= "Easy Four";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 3 && $diceSides[1]["value"] == 2) {
                       $rollType.= "OJ";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 3 && $diceSides[1]["value"] == 3) {
                       $rollType.= "Brooklyn Forest";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 3 && $diceSides[1]["value"] == 4) {
                       $rollType.= "Big Red";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 3 && $diceSides[1]["value"] == 5) {
                       $rollType.= "Eighter From Decatur";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 3 && $diceSides[1]["value"] == 6) {
                       $rollType.= "Nina From Pasadena";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 4 && $diceSides[1]["value"] == 1) {
                       $rollType.= "Little Phoebe";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 4 && $diceSides[1]["value"] == 2) {
                       $rollType.= "Easy Six";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 4 && $diceSides[1]["value"] == 3) {
                       $rollType.= "Skinny McKinney";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 4 && $diceSides[1]["value"] == 4) {
                       $rollType.= "Square Pair";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 4 && $diceSides[1]["value"] == 5) {
                       $rollType.= "Railroad Nine";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 4 && $diceSides[1]["value"] == 6) {
                       $rollType.= "Big One on the End";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 5 && $diceSides[1]["value"] == 1) {
                       $rollType.= "Sixie From Dixie";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 5 && $diceSides[1]["value"] == 2) {
                       $rollType.= "Skinny Dugan";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 5 && $diceSides[1]["value"] == 3) {
                       $rollType.= "Easy Eight";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 5 && $diceSides[1]["value"] == 4) {
                       $rollType.= "Jesse James";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 5 && $diceSides[1]["value"] == 5) {
                       $rollType.= "Puppy Paws";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 5 && $diceSides[1]["value"] == 6) {
                       $rollType.= "Yo";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 6 && $diceSides[1]["value"] == 1) {
                       $rollType.= "The Devil";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 6 && $diceSides[1]["value"] == 2) {
                       $rollType.= "Easy Eight";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 6 && $diceSides[1]["value"] == 3) {
                       $rollType.= "Lou Brown";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 6 && $diceSides[1]["value"] == 4) {
                       $rollType.= "Tennessee";
                       "<br />";
                   } else if ($diceSides[0]["value"] == 6 && $diceSides[1]["value"] == 5) {
                       $rollType.= "Six Five No Jive";
                       "<br />";
                   } else {
                       $rollType.= "Midnight";
                       "<br />";
                   }
                  
                   
                   return $rollType; // this must return something like the previous function. 
                    echo "</div>"; 
                }
            ?>
            <div id = "play">
                <?php 
                    play($die); // call our play function with the die object
                    //echo "<div>DONE</div>";
                ?>
                <form>
                    <input type="submit" value="Roll the Dice!"/> <!-- button to play the game -->
                </form>
            </div>
            
        </div>
    </body>
</html>