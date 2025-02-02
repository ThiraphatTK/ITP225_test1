<?php

// job location
$joblocation = "Carilion Hospital" ;
// location 
$location = "Roanoke";
// job position 
$jobpos = "Nutrition Services";

// job career names
$sd = "Software Developers";
$wd = "Web Developers";
$cp = "Computer Programmers"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1> Thiraphat Kongpinta</h1>
    <p> I'm currently working full-time in <?php echo $location; ?>.  
        I work at the <?php echo $joblocation; ?>. 
        My current position job is in <?php echo $jobpos; ?> delivering food for patients in the hospital. </p>

     <h2> Career Field links </h2>   
    <a href="https://www.bls.gov/ooh/computer-and-information-technology/software-developers.htm"> <?php echo $sd; ?> <br> </a>
    <a href="https://www.bls.gov/ooh/computer-and-information-technology/web-developers.htm"> <?php echo $wd; ?> <br> </a> 
    <a href="https://www.bls.gov/ooh/computer-and-information-technology/computer-programmers.htm" > <?php echo $cp; ?> <br> </a> 

</body>
</html>