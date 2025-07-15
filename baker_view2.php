<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

    <h1>Baker</h1>
    <label for="quantity">Bread made:</label>
    <input type="number" id="quantity" min="100" max="10000" value="100" class="option"><br><br><br>

    <label for="type">Type:</label>
    <select id="bread_type" class="option">
        <option value="small">SMALL</option>
        <option value="regular">REGULAR</option>

    </select> <br><br>

    <input type="submit" class="btn1"> <br><br>
            <button class="btn1"><a href="baker_view1.php" class="btn">Back</a></button>

    </center>

     <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: wheat;
        }

        label{
            margin-right: 20px;
        }

        .option{
            width: 140px;
            height: 30px;
            border-radius: 5px;
            text-align: center;
            border: none;
        }
        .btn1{
            width: 100px;
            height: 40px;
            background:rgb(248, 84, 84);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }

        .btn{
            width: 100px;
            height: 40px;
            background:rgb(248, 84, 84);
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }
    </style>
</body>
</html>