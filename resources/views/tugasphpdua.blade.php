<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Fibonacci</title>
    <style>
    body{
    display: flex;
    flex-wrap: wrap;
    }
    .container{
    align-items: center;
    justify-content: center;
    width: 700px;
    background: white;
    padding: 20px;
    border-radius: 15px;
    margin: 50px auto;
    min-height: 50vh;
    }
    </style>
    </head>
    <body class="bg-primary">
    <div class="container">
    <center><h1> The Fibonacci Sequence is </h1></center>
    <br>
<?php
    $first  = $_POST['first'];
    $second = $_POST['second'];
    $limit  = $_POST['limit'];

    echo $first." ,";
    echo $second." ,";

    for ($i=0; $i < $limit; $i++){
        $third = $first+$second;
        echo $third." ,";
        $first = $second;
        $second = $third;
    }


    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
