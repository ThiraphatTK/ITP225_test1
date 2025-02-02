<?php

// asking the user input grade 
$gradeuser = readline("Enter the your grade: ");

// test user input and decide the grade scale
if ( empty($gradeuser) ){
    $message = "require grade user input";
    echo $message;    
} 
else if( !is_numeric(($gradeuser)) ){
    $message = "Grade must be a valid number." ;
    echo $message;
}
else if( $gradeuser < 0 ){
    $message = "Grade must not be below zero.";
    echo $message; 
}
else if($gradeuser > 100){
    $message = "Grade can not be above 100 ";
    echo $message; 
}
// print out the user grade level and date 
else if( $gradeuser >= 90 && $gradeuser <= 100 ){
    $message = "Your Grade is : A $gradeuser% \n";
    echo $message;
    echo date("l jS \of F Y h:i:s A");
}
else if( $gradeuser >= 80 && $gradeuser < 90){
    $message = "Your Grade is : B $gradeuser% \n" ;
    echo $message;
    echo date("l jS \of F Y h:i:s A");
}
else if( $gradeuser >= 70 && $gradeuser < 80){
    $message = "Your Grade is : C $gradeuser% \n";
    echo $message;
    echo date("l jS \of F Y h:i:s A");
}
else if( $gradeuser >= 60 && $gradeuser < 70){
    $message = "Your Grade is : D $gradeuser% \n";
    echo $message;
    echo date("l jS \of F Y h:i:s A");
}
else{
    $message = "Your Grade is : F $gradeuser% \n";
    echo $message;
    echo date("l jS \of F Y h:i:s A");
}


?>