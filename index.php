<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rock Paper Scissor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="main">
        <div class="row">
            <div class="col-12">
                <p class="text-center">Rock Paper Scissor</p>
                <form action="play.php" method="get">
                    <input required type="text" class="form-control" name="name" placeholder="Enter your name"><br>
                    <button class="btn btn-primary sm form-control">Play</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="img/Rock.png" alt="" height="200" width="200">
            </div>
            <div class="col-4">
                <img src="img/Paper.png" alt="" height="200" width="200">
            </div>
           <div class="col-4">
               <img src="img/Scissor.png" alt="" height="200" width="200">
           </div>
        </div>

    </div>
</div>

</body>
</html>