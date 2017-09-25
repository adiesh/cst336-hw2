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
                    for ($i=1;$i<3;$i++) { // loop 2 times {
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
                    $randomValue = rand(0,0); // variable $randomValue. create 1 number between 0-5.remember, 0 starts as the first item of your array $die (1)
                    $dieSide = $die[$randomValue]; // load $randomValue into $dieSide
                    
                    return $dieSide;
                
                }
                //           * displayDice ==> pass in two elements into this function
               
                
                function displayDice($diceSides) {
             
                    echo "<div id='output'>";
                    //figure out way to get image
                    //echo "Value: ". $diceSides[0] <"br />";
                    //echo "Value: ".$diceSides[1] <"br />";
                   
                    for ($i = 0; $i < count($diceSides); $i++){
                        //$dice = $dieSides[$i]["imgURL"];
                        //echo "imgURL: ".$dieSide."<br>";
                        echo "<img src='".$diceSides[$i]["imgURL"]."'>";
                    }
                    
                    calculateRoll($diceSides);
                    
                    
                    echo "Roll type". determineRollType($diceSides);
                    echo "</div>";
                    
                }
                
               
            
                function calculateRoll($diceSides) {
                    
                    echo "<div id='result'>";
                    $totalRoll = 0;
                   foreach($diceSides as $die) {
                       $totalRoll += $die["value"];
                       
                   }
                   "<br />";
                   echo "You rolled a total of: ".$totalRoll;
                   "<br />";
            
                   
                   
                   
                   echo "</div>"; 
                }
                
                 
                
                function determineRollType($diceSides) { // trying to list all possible roll types, but unable to display message. 
                    
                    /*
                    for ($i = 0; $i < count($diceSides); $i++) { // trying to echo out all elements of the array. instead of getting elements, i just get "array" as my output.
                        echo $diceSides[$i] . "\n";
                    }
                    */
                    
            
                    if ($diceSides[0] == 1 && $diceSides[1] == 1) {
                           echo "you rolled a snake eyes";
                           "<br />";
                   } else if ($diceSides["value"] == 1 && $diceSides["value"] == 2) {
                           echo "you rolled an Australian yo";
                           "<br />";
                   }
                  
                }
                
            
                
                play($die); // call our play function with the die object
                //echo "<div>DONE</div>"; 
            ?>
        
            <form>
                <input type="submit" value="Roll the Dice!"/> <!-- button to play the game -->
            </form>
        </div>
    </body>
</html>