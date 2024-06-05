<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
    <?php
    $connect= mysqli_connect('localhost', 'root', '', 'http5225week5');
    
    if(!$connect){
        echo 'Error code: '. mysqli_connect_errno();
        echo 'Error code: '. mysqli_connect_error();
        exit;
    }
    $query = 'SELECT `Name`, `Hex` FROM colors';
    $result = mysqli_query($connect,$query);

    if(!$result){
        echo 'Error Meassage'.mysqli_error($connect);
        exit;
    }else{
        echo 'The query found '.mysqli_num_rows($result);


    }

foreach($result as $color){

    echo '<div class=col-md-3>
    <div class="card mt-2 mb-2">
  
   <div class="card-body">
    <h5 class="card-title">'.$color["Name"].'</h5>
    <p class="card-text" style="height:30px; width:150px; background-color:'.$color["Hex"].'">'.$color["Hex"].'</p>
    
    
  </div>';
  echo '</div></div>';
  echo '<br/>';



}

    
    ?>
    </div>
</div>
</body>
</html>