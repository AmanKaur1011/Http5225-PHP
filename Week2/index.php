<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    <?php echo 'Hello';?>
    <?php echo '<h1> Welcome to Http5225</h1>';?>
    <?php echo '<p>We will\'s learn php in his class</p>';?>

    <?php echo ' <ul>
        <li>PHP</li>
        <li>MySql</li>
        <li>Laravel</li>
    </ul>';?>
    <?php
    
    echo '<img src="https://images.pexels.com/photos/56866/garden-rose-red-pink-56866.jpeg" alt="placeholder image" heigth="300px" width="500px">'?>
   
    <img src="<?php echo 'https://images.pexels.com/photos/56866/garden-rose-red-pink-56866.jpeg';?>" alt="placeholder image" heigth="300px" width="500px">
    <?php
    $fname ='Aman';
    $lname ='Kaur';
    $name['fname']='Aman';
    // $name=array('Aman','Kaur');
    ?>
    <?php
    echo "<br>";
   echo "Hello " . $name['fname'] . " " . $lname;
   
    ?>
</body>
</html>