<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramdon Number</title>
    <style>
        body{
            font-family: arial;
            text-align: center;
        }
        p{
            background-color: black;
            color: white;
            padding: 2%;
            text-transform: uppercase;
        }
        .number{
            background-color: orange;
            color: white;
            width: 50%;
            padding: 2%;
            margin: 0 auto;
            font-size: 1000%;
        }
    </style>
</head>
<body>
    <p>Generating a random number between 1 and 100</p>
    <section class="number">
    <?php
        echo rand(0, 100);
    ?>
    </section>
</body>
</html>