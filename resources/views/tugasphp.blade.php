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
input{
    width: 80%;
}
    </style>
  </head>
  <body class="bg-primary">
    <div class="container">
        <h1 class="text-center">Please Insert First Number, Second Number, and the limit of Fibonacci</h1>
        <form action="tugasphpdua" method="post">
            @csrf
            <div class="row mt-3">
                <div class="col-4">
                   First Number
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-7">
                    <input type="number" class="first" name="first">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-4">
                  Second Number
                </div>
                <div class="col-1">
                    <p>:</p>
                </div>
                <div class="col-7">
                    <input type="number" class="second" name="second">
                </div>
            </div>
        <div class="row my-3">
            <div class="col-4">
              Limit
            </div>
            <div class="col-1">
                <p>:</p>
            </div>
            <div class="col-7">
                <input type="number" id="phone" class="limit" name="limit">
            </div>
        </div>
        <div class="button text-center">
            <button class="btn-primary submit" type="submit">Submit</button>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
