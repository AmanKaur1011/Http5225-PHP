<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week-3</title>
</head>
<body>
    <?php
    // $hour= date('H');
    // echo $hour;
    // if($hour<12){

    //     echo 'Good Morning';
    // }
    // else{
    //     echo 'Good Afternoon';
    // }
    //  $day= date('D');
    //   echo $day;

    $hour=rand(1,24);
    echo $hour;
    echo '<br>';
    if($hour<12){

        echo 'Good Morning';
        echo '<br>';
    }

    else if($hour <16){
        echo 'Good Afternoon';
        echo '<br>';
    }

    else if($hour < 20){
        echo 'Good Evening';
        echo '<br>';
    }
    else{
        echo 'Good Night';
        echo '<br>';
    } 
//--------------FIZZBUZZ EXAMPLE-----------------
    echo '<br>';
    $num=rand(1,24);
    if($num % 3 == 0 && $num % 5 != 0){

        echo 'Fizz';
    }

    elseif($num % 5==0 && $num % 3 != 0){
        echo 'Buzz';
    }

    elseif($num % 3 == 0 && $num % 5 == 0){
        echo 'FizzBuzz';
    }
    else{
        echo $num;
    }
    
    ?>
    
</body>
</html>