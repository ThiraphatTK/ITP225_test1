
<?php

// asking the user to input coin exchange 
$coins = readline("Please Enter your money amount $: ");

// test user input and valid the number 
if ( empty($coins) ){
    $message = "require user input currency";
    echo $message;    
} 
else if( !is_numeric(($coins)) ){
    $message = "The Currency must be a valid number." ;
    echo $message;
}
else if( $coins <= 0 ){
    $message = "The Currency can not be zero or below zero.";
    echo $message; 
}
// exchange the currency to 4 type of category coins, Quarters, Dimes, Nickels, Pennies
else {
    // round the number to avoid error that TOOK 3 HOURS TO FIX !!!! 
    $amout = round($coins * 100);
    // set the counter for 4 different type of coins
    $quarters = 0;
    $dimes = 0;
    $nickel = 0;
    $pennies = 0;
    // while the coins is not equal to zero 
    // loop and exchange the currency to coins
    while ($amout > 0){

        if($amout >= 25) {
            $quarters++; 
            $amout = $amout - 25;
        }
        else if($amout >= 10){
            $dimes++; 
            $amout = $amout - 10;
        }
        else if($amout >= 5){
            $nickel++; 
            $amout = $amout - 5;
        }
       else if($amout >= 1){
            $pennies++; 
            $amout = $amout - 1;
        }
        
    }
    // print out the message of each coins exchange 
    echo "Quaters: $quarters \n";
    echo "Dimes : $dimes \n";
    echo "Nickel : $nickel \n";
    echo "Pennies : $pennies \n";

}
?>
