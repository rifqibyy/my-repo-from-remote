<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .header {
            width: 100%;
            height: 50px;
            line-hight: 50px;
            background-color: burlywood;
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>
<div class="header">Header</div>
    <div>
        <img src="<?php echo "https://www.gravatar.com/avatar/" . md5( strtolower( trim( 'rifqibyy@gmail.com' ) ) ) ?>" alt="Profile Picture">
        <h2>Rifqi Abiyyu</h2>
    </div>
</body>
</html>